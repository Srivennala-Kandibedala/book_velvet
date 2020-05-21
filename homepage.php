<?php
    session_start();
?>
<html>
<head>
<title>User Home</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
    <style>
        .icon{
            color: black;
            background: none;
        }
        button{
            background: none;
            color:white;
        }
        .dropbtn {
    background-color: none;
    color: white;
    padding: 16px;
    border: none;
    text-align:right;
    font-size: 2em;
}

.dropdown {
    position:inherit;
    display: inline-block;
    float: right;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: none;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    text-align:center;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #ffffff;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color:black;}
         form{
                margin: inherit;
            }
    
    </style>
    </head>
<body>
    <?php
    
    if(isset($_POST['login']) and empty($_SESSION['username'])){  //if user logged gets placed here

        $username = $_POST['username'];
        $password = $_POST['password'];
        $dbc = mysqli_connect('localhost','root','','book_velvet') or die("Couldn't connect to database");

        $query = "select * from register where username='$username' and password='$password'";
        $result = mysqli_query($dbc,$query) or die("Can't issue query");
        $row = mysqli_fetch_array($result);
        if(!empty($row['username']) and !empty($row['password'])){  //check for existence in database
            /* user homepage start from here */
            $_SESSION['username'] = $username;  //set session variable
            ?>
            <div class="dropdown">
            <?php
           echo '<button class="dropbtn"><i style="color:white;" class="fa fa-user icon"></i> '.$_SESSION['username'].'</button>';?>
            <div class="dropdown-content">
            <h3>
            <a href="edit_profile.php" >Edit Profile</a>
            <a href="cust_orders.php">Your Orders</a>
            <a href="logout.php">Logout</a></h3>
            </div>
                
        </div>
          
          
               <pre><div class=title>                BOOK VELVET </div></pre>
                <h1> A book worth reading is worth buying....</h1><br>
                <p><b>Search</b> :
                    <form action="search.php" method="get">
                <input type="search" name="search" size="35px" >
                        <button style="font-size: 25px; color: black;background-color: white;"><i  class="fa fa-search"></i></button></form>
                <p><b> Shop by genre</b><br/>
                 <a href="category.php?cat_code=2">
            <img src="pictures/literature.PNG" alt="Literature" class="circle">
            </a>
                <a href="category.php?cat_code=3">
            <img src="pictures/romance.PNG" alt="Romance" class="circle">
            </a>
                <a href="category.php?cat_code=4">
            <img src="pictures/sci-fi.PNG" alt="Sci-fi" class="circle">
            </a>
                <a href="category.php?cat_code=1">
            <img src="pictures/comedy.PNG" alt="Comedy" class="circle">
            </a>
                <a href="category.php?cat_code=5">
            <img src="pictures/thriller.PNG" alt="Thriller" class="circle">
            </a></p>
    <?php
        }
    
        else{

            echo '<div> <i class="fa fa-times-circle"></i>USERNAME AND PASSWORD DOESN\'T MATCH.</div>';

        }
    }
    else if(!empty($_SESSION['username'])){

        /* USER homepage */
        $username = $_SESSION['username'];
        $dbc = mysqli_connect('localhost','root','','book_velvet') or die("Couldn't connect to database");
        //$query = "CALL user_details('"$username"')";
        $query="select * from register where username='$username'";
        $result = mysqli_query($dbc,$query) or die("Can't issue query");
        $row = mysqli_fetch_array($result);
        $_SESSION['username'] = $username;  //set session variables?>
        <div class="dropdown"><?php
           echo '<button class="dropbtn"><i style="color:white;" class="fa fa-user icon"></i> '.$_SESSION['username'].'</button>';?>
            <div class="dropdown-content">
            <h3>
            <a href="edit_profile.php" >Edit Profile</a>
            <a href="cust_orders.php">Your Orders</a>
            <a href="logout.php">Logout</a></h3>
            </div>
        </div>
          
        <pre><div class=title>                BOOK VELVET </div></pre>
        <h1>A book worth reading is worth buying....</h1><br>
        <p><b>Search :</b>
            <form action="search.php" method="get" >
        <input type="search" name="search" size="35px" >
            <button style="font-size: 25px;color: black;background-color: white;"><i  class="fa fa-search"></i></button>
    </form>
        
        <p><b> Shop by genre</b><br/>
        <a href="category.php?cat_code=2">
        <img src="pictures/literature.PNG" alt="Literature" class="circle">
        </a>
        <a href="category.php?cat_code=3">
        <img src="pictures/romance.PNG" alt="Romance" class="circle">
        </a>
        <a href="category.php?cat_code=4">
        <img src="pictures/sci-fi.PNG" alt="Sci-fi" class="circle">
        </a>
        <a href="category.php?cat_code=1">
        <img src="pictures/comedy.PNG" alt="Comedy" class="circle">
        </a>
        <a href="category.php?cat_code=5">
        <img src="pictures/thriller.PNG" alt="Thriller" class="circle">
            </a></p>
    <?php
    }
    else{

    echo '<div class="isa_warning"> <i class="fa fa-lock" aria-hidden="true"></i>RESTRICTED PAGE!! YOU ARE SUPPOSED TO LOGIN TO THE DATABASE FIRST.<a href="login.php"><i class="fa fa-angle-double-left" aria-hidden="true"></i>click here to redirect to login</a></div>';

}
    ?>
    </body>
</html>