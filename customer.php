<?php

 session_start();
?>
<html>
<head>
    <title> Customer details</title>
     <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <style>
       form{
           margin: 0 auto;
           width: 500px;
       }
       .btn{
           margin: 4px 2px;
           width: 100px;
       }
       h2{
           color:white;
           font-family: monospace;
       }
    </style>
    </head>
    <body>
        <?php
        
        if(isset($_SESSION['username']))
        {
             
            $isbn=$_GET['ISBN'];
            $username = $_SESSION['username'];
            $quantity=$_GET['quantity'];
            
        ?>
            <form class=form-validation action="order.php?ISBN=<?php echo $isbn;?>&quantity=<?php echo $quantity;?>" method="POST">
            <fieldset><legend><h3>Deliver To</h3></legend>
                <table>
            
                <div class="input-conatiner">
                    <tr><td><h2>FullName:</h2></td>
                <td><input class="input-field" type="text" placeholder="Name" name="cust_name" required title="Enter full name"
                           maxlength="20"></td>
                    </tr></div>
                
                <div class="input-container">
                    <tr><td><h2>Email-id:</h2></td>
                        <td><input class="input-field" type="email" placeholder="Email" name="email" required title="Enter valid email" maxlength="30"></td></tr>
                </div>
            
                <div class="input-container">
                    <tr><td><h2>Phone Number:</h2></td>
                        <td><input class="input-field" type="number" placeholder="Phone Number" name="phone" required title="Enter valid Phone number" maxlength="20"></td></tr>
                </div>
                <div class="input-container">
                    <tr><td><h2>Full Address:</h2></td>
                        <td><textarea rows=4 cols=36 name="address" placeholder="Flat/House no, Building, Area, Colony, Street, City, Pincode" required="" ></textarea></td></tr>
                </div>
                <div>
                    <tr><td></td><td><br> <input type="submit" class="btn" title="Deliver to" name="deliver" value="Submit" ></td></tr>
                    <!--<input type="hidden" value="$isbn" name="ISBN">-->
                </div>
                </table>
                </fieldset>
            </form>
        <?php                
        }else{
            echo '<div style="color:white;text-align:center;font-size:30px;"> <i class="fa fa-times-circle"></i>  PLEASE LOGIN TO ORDER.<a href="login.php"><i class="fa fa-angle-double-left" aria-hidden="true"></i>  CLICK HERE TO REDIRECT TO LOGIN.</a></div>';
 
        }
        ?>
    </body>
</html>