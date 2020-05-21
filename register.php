<html>
    <head><title> Sign Up</title>
    <link rel="stylesheet" href="styles.css">
     <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.4.1/css/all.css' integrity='sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz'crossorigin='anonymous'>
        <style>
            form{
                margin: 0 auto;
                width: 400px;
            }
        </style>
    </head>
<body>
<?php
$dbc=mysqli_connect('localhost','root','','book_velvet') or die("Couldn't connect to database");

function NewUser() { 

    $username = trim($_POST['username']);
    $password = $_POST['password']; 
    $email = $_POST['email']; 
    $phone = $_POST['phone'];

    
    $query = "INSERT INTO register VALUES('$username','$password','$email','$phone')";
    
    $data = mysqli_query($GLOBALS['dbc'],$query)or die("couldn't isuue Query & the error in insertion ");
    
    if($data) {
    
        echo '<div class="reg">Your Registration is completed!!<br><br> Login to proceed.</div>';
        echo '<br>';
        echo '<form class=form-validation action="homepage.php" method="post">
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
             </form>';
        
    } 
}
function Register() { 
    
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    if(!empty($username) and !empty($password)){ 
        
        $query = "select * from register where username = '$username'";
        $result = mysqli_query($GLOBALS['dbc'],$query) or die("Couldn't Query database at select and the error is ");
        $row=mysqli_fetch_array($result);

        if(empty($row['username'])){
        
            newuser(); 
        
        }
        else {
        
             echo '<form class=form-validation action="homepage.php" method="post">
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
                </form>';
        
        }
    }
}
if(isset($_POST['register']))
{   
    
	Register();

}else{
 
    $home_url='http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/login.php';
    header('Location:'.$home_url);
    
}   
    
?>
    </body>
</html>