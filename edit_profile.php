<html>
<head><title> Edit Profile</title>
    <link href=styles.css rel=stylesheet type="text/css" />
     <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.4.1/css/all.css' integrity='sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz'crossorigin='anonymous'>
    <style>
    h2{
            text-align: center;
            font-family: Bradley Hand ITC;
        }
        fieldset{
            margin: 0 auto;
            width: 500px;
        }
        nav{ 
            text-align: center;
            font-size: 25;
        }
        .isa_warning{
            color: white;
        }
    </style></head>
    
<body>
   <nav><?php 
       session_start();
       if(!isset($_SESSION['username'])){?>
        <a href="index.php"> <i style="font-size:40px" class='fas fa-home'></i></a>
             <?php
        }
            else
            {
                echo '<a href="homepage.php"> <i style="font-size:40px" class="fas fa-home"></i></a>';
            }
            ?><br><br>
    </nav> 
<?php
    

    
   $dbc=mysqli_connect('localhost','root','','book_velvet') or die("Couldn't connect to databse");
   
    if(!isset($_SESSION['username'])){
       
        echo '<div class="isa_warning"> <i class="fa fa-lock" aria-hidden="true"></i>RESTRICTED PAGE!! YOU ARE SUPPOSED TO LOGIN TO THE DATABASE EDIT PROFILE.<a href="login.php"><i class="fa fa-angle-double-left" aria-hidden="true"></i>click here to redirect to login</a></div>';
       
   }else if(isset($_POST['update'])){
       
       $query = "select * from register where username='".$_SESSION['username']."' ";
       $result = mysqli_query($dbc,$query); 
        $password = $_POST['password'];
        $email_id = $_POST['email'];
        $phno= $_POST['phone'];
        
        if(mysqli_num_rows($result)==1){
        
            if(!empty($password)){
            
                $query="update register set password='$password',email='$email_id', phone='$phno' where username='".$_SESSION['username']."'";
            
                mysqli_query($dbc,$query);
            
                echo '<div class="isa_info"><h2>Details updated Successfully !! Thankyou <strong>'.$_SESSION['username'].'</strong>.</h2></div>';
            
            }else{

                $query="update register set email='$email_id', phone='$phno' where username='".$_SESSION['username']."'";
            
                mysqli_query($dbc,$query);
            
                echo '<div style="color:white"><h2>Details updated Successfully !! Thankyou <strong>'.$_SESSION['username'].'</strong>.</h2></div>';
            
            }
        
        }
    }
        
        $query = "select * from register where username='".$_SESSION['username']."'";
        $result = mysqli_query($dbc,$query) or die("Couldn't issue query");
        $row = mysqli_fetch_array($result);
        
       
?>
    <fieldset>
        <legend><?php echo $_SESSION['username']." Edit profile"; ?></legend>
        <form class="form-validation" action="edit_profile.php" method=post>
             
            <div class="input-container">
                <i class="fa fa-key icon"></i>
                <input class="input-field" type="password" id="password" placeholder=" New Password" name="password" title="Enter new password"
                       maxlength="20">
                </div>
                
                <div class="input-container">
                <i class="fa fa-key icon"></i>
                <input class="input-field" type="password" id="confirmPassword" placeholder="Re-enter New Password" name="confirm new password"  title="Re-enter your password" maxlength="20">
                </div>

                <div class="input-container">
                <i class="fa fa-envelope icon"></i>
                <input class="input-field" type="email" value="<?php echo $row['email']; ?>" placeholder="Email" name="email" title="Enter your new email" maxlength="30">
                </div>
            
                <div class="input-container">
                <i class="fas fa-mobile-alt icon"></i>
                <input class="input-field" type="number" value="<?php echo $row['phone']; ?>" placeholder="Phone Number" name="phone" title="Enter your new Phone number" maxlength="20">
                </div>
  
          <input class="btn" type="submit" name="update" value=Update onclick="return Validate()" />
        </form>
    </fieldset>
    <br><br> 
            <script type="text/javascript">
    function Validate() {
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("confirmPassword").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    }
</script> 
      
          
<style>

</style>
    </body>
</html>