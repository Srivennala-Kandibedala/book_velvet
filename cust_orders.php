<?php
session_start();
$dbc=mysqli_connect('localhost','root','','book_velvet');
?>
<html>
<head><title>Your Orders</title>
     <link rel="stylesheet" href="styles.css">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
    <style>
        nav{ 
            text-align: center;
            font-size: 25;
            
        }
        .anchor{
            font-size:20px;
            font-family:forte;
            border: none;
            cursor: pointer;
            text-decoration: none;
            margin: 4px 2px;
            opacity: 0.9;
            width: 100px;
            padding: 16px 32px;
        }
        div.gallery {
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
    width: 400px;
        padding: 30px;
            text-align:left;
            color: white;
    font-family: forte;
    font-size:20px;
}
        a:link{
        color: black;
        }
        a:visited{
            color: white;
        }
        a:hover{
            color: black;
        }
        a:active{
            color: #ff0000
        }
        div.gallery:hover {
    border: 1px solid #777;
}
        div.gallery img {
    width: 100%;
    height: 50%;
}
        fieldset{
            border-radius: 10px; 
            border: 2px solid #000000;
            border: 12px groove (internal value);
            width: 200px;
            text-align: center;
            margin-left: auto;
            margin-right: auto;
            display:block;
            margin-top:0%;
            margin-bottom:0%;
        }
        body{
            background-image: url(pictures/edit%20b6.jpg);
        }
    </style>
</head>
<body>
    <nav><?php if(!isset($_SESSION['username'])){?>
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
        if(isset($_GET['delete']))
        {
            $isbn=$_GET['ISBN'];
            $qry="delete from orders where ISBN='$isbn'";
            $res=mysqli_query($dbc,$qry) or die("error in deletion");
            $orders=$_SESSION['username'];
            $query="select ISBN,quantity from orders where username='$orders'";
            $result = mysqli_query($dbc,$query) or die("error");
            //$ans=mysqli_fetch_array($result);
            foreach($result as $row)
            {
            $isbn=$row['ISBN'];
            $query1="SELECT a.au_name,b.ISBN,b.book_price,b.no_in_stock,p.pub_name,b.book_title
            FROM author AS a,book AS b,publisher AS p,bookau AS ba,bookpub AS bp
            WHERE b.ISBN=ba.ISBN AND ba.au_id=a.au_id AND b.ISBN=bp.ISBN AND bp.pub_code=p.pub_code AND b.ISBN='$isbn'";
            $result1=mysqli_query($dbc,$query1) or die("error");
            $row1=mysqli_fetch_array($result1);
            ?>
            <div class="gallery">
            <div class="desc">
            <?php
            if($row1){
                $book_title=$row1['book_title'];
                $image = $book_title;
            ?>          
                <img src="pictures/category/<?php echo $image.".jpg"; ?>">
            <?php $author_name=$row1['au_name'];
                echo 'Author Name: '.$author_name.'<br>';
                $ISBN_code=$row1['ISBN'];
                echo 'ISBN code: '.$ISBN_code.'<br>';
                $book_price=$row1['book_price'];
                echo 'Book Price: ₹'.$book_price.'<br>';
                $no_in_stock=$row1['no_in_stock'];
                //echo 'Number in stock: '.$no_in_stock.'<br>';
                $publisher_name=$row1['pub_name'];
                echo 'Publisher Name: '.$publisher_name.'<br><br>';
            ?>
                <fieldset><a class="anchor" href="cust_orders.php?ISBN=<?php echo $ISBN_code;?>&delete=1"> Delete Order</a></fieldset>
            </div>
            </div>
            <?php
            }
        }
        }
        else
        {
        
        $orders=$_SESSION['username'];
        $query="select ISBN,quantity from orders where username='$orders'";
        $result = mysqli_query($dbc,$query) or die("error");
        //$ans=mysqli_fetch_array($result);
        foreach($result as $row)
        {
            $isbn=$row['ISBN'];
            $query1="SELECT a.au_name,b.ISBN,b.book_price,b.no_in_stock,p.pub_name,b.book_title
              FROM author AS a,book AS b,publisher AS p,bookau AS ba,bookpub AS bp
              WHERE b.ISBN=ba.ISBN AND ba.au_id=a.au_id AND b.ISBN=bp.ISBN AND bp.pub_code=p.pub_code AND b.ISBN='$isbn'";
            $result1=mysqli_query($dbc,$query1) or die("error");
            $row1=mysqli_fetch_array($result1);
            ?>
         <div class="gallery">
        <?php
            if($row1){
            $book_title=$row1['book_title'];
            $image = $book_title;  ?>          
            <img src="pictures/category/<?php echo $image.".jpg"; ?>">
            <?php $author_name=$row1['au_name'];
            echo 'Author Name: '.$author_name.'<br>';
            $ISBN_code=$row1['ISBN'];
            echo 'ISBN code: '.$ISBN_code.'<br>';
            $book_price=$row1['book_price'];
            echo 'Book Price: ₹'.$book_price.'<br>';
            $no_in_stock=$row1['no_in_stock'];
            //echo 'Number in stock: '.$no_in_stock.'<br>';
            $publisher_name=$row1['pub_name'];
            echo 'Publisher Name: '.$publisher_name.'<br><br>';
            ?>
            <fieldset><a target="_self" class="anchor" onclick="return myFunction()" href="cust_orders.php?ISBN=<?php echo $ISBN_code;?>&delete=1"> Cancel Order</a></fieldset>
             </div>
        <script>
            function myFunction() {
        if (confirm("Click OK to confirm cancellation!")) 
            return true;
         else 
            return false;
        }
        </script>
        
                  <?php
            }
        }
    }
    ?>
</body>
</html>