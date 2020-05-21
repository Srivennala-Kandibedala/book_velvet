<html>
<head>
    <title>Order Now</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        fieldset{
            margin: 0 auto;
            width: 500px;
        }
        td{
            font-size: 20px;
        }
        h2{
            text-align: center;
            font-family: Bradley Hand ITC;
            color: white;
        }
        button{
            margin-left: auto;
            margin-right: auto;
            display:block;
            margin-top:0%;
            margin-bottom:0%;
        }
        body{
            background-image: url(pictures/edit%20b6.jpg);
        }
        
        .order{
            text-align: center;
            color: white;
        }
        .order:hover{
            color: black;
        }
        table{
            color: white;
        }
        .detail{
            font-size: 25px;
            font-family:monospace;
        }
    </style>
</head>
<body>
    
    <!--<button name=btn onclick='alert("Your Order is placed Succesfully!")'
                    
                     > Place Order
    </button>-->
    <?php
        session_start();
        $dbc = mysqli_connect('localhost','root','','book_velvet') or die("Couldn't connect to database");
        $ISBN=$_GET['ISBN'];
        $username = $_SESSION['username'];
        $quantity=$_GET['quantity'];
        if(isset($_GET['order'])){
        $query = "INSERT INTO orders VALUES('$username','$ISBN','$quantity')";
        $data = mysqli_query($GLOBALS['dbc'],$query)or die("couldn't isuue Query & the error in insertion ");
            
            ?>
    <h2 style="text-align:center; color:white; font-size:40px;">YOUR ORDER IS SUCCESSFULLY PLACED</h2>
    <nav>
        <a href="homepage.php"> <i style="font-size:40px"></i><fieldset style="width:200px">Home</fieldset></a>
        
        </nav><br><br>
    <?php
        }else{
    
        $query = "SELECT a.au_name,b.ISBN,b.book_price,b.no_in_stock,p.pub_name,b.book_title
              FROM author AS a,book AS b,publisher AS p,bookau AS ba,bookpub AS bp
              WHERE b.ISBN=ba.ISBN AND ba.au_id=a.au_id AND b.ISBN=bp.ISBN AND bp.pub_code=p.pub_code AND b.ISBN='$ISBN'";
            $result = mysqli_query($dbc,$query) or die("Can't issue query");
            $row = mysqli_fetch_array($result);
    ?>
    <div class="detail">
    <fieldset><legend>Confirm Product Details</legend>
        
<table>
    <tr><td>Book Title : </td><td><?php echo $row['book_title']?></td></tr>
    <tr><td>Author Name : </td><td><?php echo $row['au_name']?></td></tr>
    <tr><td>ISBN : </td><td><?php echo $row['ISBN']?></td></tr>
    <tr><td>Book Price : </td><td>₹<?php echo $row['book_price']?></td></tr>
    <tr><td>Publisher Name : </td><td><?php echo $row['pub_name']?></td></tr>
    <tr><td>No of copies:</td><td><?php echo $quantity ?></td></tr>
</table>
    </fieldset><br><br>
    <fieldset><legend>Confirm Delivery Address</legend>
    <table>
    <tr><td>Name : </td><td><?php echo $_POST['cust_name']?></td></tr>
    <tr><td>Email_id: </td><td><?php echo $_POST['email']?></td></tr>
    <tr><td>Contact : </td><td><?php echo $_POST['phone']?></td></tr>
    <tr><td>Address: </td><td><?php echo $_POST['address']?></td></tr>
        </table>
    </fieldset>
    </div>
    <br>
    <h2 style="font-family:monospace; font-size:25px;">Mode of Payment: Cash on delivery(COD)</h2>
    <br><br>
    

    <a href="order.php?order=1&ISBN=<?php echo $_GET['ISBN'];?>&quantity=<?php echo $quantity;?>"><h3 class="order"><fieldset style="width:200px;" >Order Now</fieldset></h3></a>
    <?php
        }
    
    ?>
</body>
</html>