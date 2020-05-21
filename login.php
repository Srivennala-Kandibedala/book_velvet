<?php
    session_start();
?>
<html>
<head>
    <title>Login/Register</title>
    
    <link rel="stylesheet" href="styles.css">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.4.1/css/all.css' integrity='sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz'crossorigin='anonymous'>
   <style>
     form{
        margin: 0 auto;
        width: 450px;
    }
    </style>
    </head>
    <body>
        <?php
        if(isset($_SESSION['username'])){
        
       $home_url='http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/homepage.php';
       header('Location:'.$home_url);
        }
        ?>
        
       <nav>
        <a href="index.php"> <i style="font-size:40px" class='fas fa-home'></i></a>
        </nav><br><br>
        
        <form class=form-validation action="homepage.php" method="post">
        <fieldset><legend><h3>Login</h3></legend>
            <div class="input-container">
                <i class="fa fa-user icon"></i>
                <input class="input-field" type="text" placeholder="Username" name="username" required title="Enter username"
                       maxlength="20">
       
            </div>
                <div class="input-container">
                <i class="fa fa-key icon"></i>
                <input class="input-field" type="password" placeholder="Password" name="password" required title="Enter password"
                       maxlength="20">
                </div>
                <input type="submit" class="btn" title="login"  name="login" value="Login">
        </fieldset>
             </form>
        
        <form class=form-validation action="register.php" method="post">
        <fieldset><legend><h3>Register</h3></legend>
            
                <div class="input-container">
                <i class="fa fa-user icon"></i>
                <input class="input-field" type="text" placeholder="Username" name="username" required title="Enter username"
                       maxlength="20">
                </div>
                
                <div class="input-container">
                <i class="fa fa-key icon"></i>
                <input class="input-field" type="password" id="password" placeholder="Password" name="password" required title="Enter password"
                       maxlength="20">
                </div>
                
                <div class="input-container">
                <i class="fa fa-key icon"></i>
                <input class="input-field" type="password" id="confirmPassword" placeholder=" Confirm Password" name="confirmPassword" required title="Re-enter your password" maxlength="20">
                </div>

                <div class="input-container">
                <i class="fa fa-envelope icon"></i>
                <input class="input-field" type="email" placeholder="Email" name="email" required title="Enter your existing email" maxlength="30">
                </div>
            
                <div class="input-container">
                <i class="fas fa-mobile-alt icon"></i>
                <input class="input-field" type="number" placeholder="Phone Number" name="phone" required title="Enter your existing Phone number" maxlength="20">
                </div>
  
                <div>
                <input type="submit" class="btn" title="Register" name="register" value="Register" onclick="return Validate()">
                <input type="reset" class="btn" title="Reset" value="Reset">
                </div>
            
        </fieldset>
            </form>
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
    </body>
    
</html>