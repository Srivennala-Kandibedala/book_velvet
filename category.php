<html>
<head>
    <title>Category</title>
    <link rel="stylesheet" href="styles.css">
       <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
    <style>
        body{
            background-color: black;
        }
        .sub{
            border-radius: none;
            font-size: 20px;
            color: white;
            background: none;
            border: none;
	        display:inline-block;
            font-size: 20px;
            padding: 7px 9px;
            margin: 0;
            transition: all .3s;
            font-family: forte;
        }
        .sub:hover{
            color: black;
        }
        
     nav{ 
            text-align: center;
            font-size: 25;
        }
        a{ 
        color:cadetblue;
        text-decoration: none;
        }
        
    div.gallery {
    margin: 5px;
    /*border: 1px solid #ccc;*/
    float: left;
    width: 500px;
    padding: 30px;
    text-align: center;
    font-family: forte;
      color:white;  
    font-size:20px;
}

/*div.gallery:hover {
    border: 1px solid #777;
}*/

div.gallery img {
    width: 50%;
    height: 50%;
    float:left;
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
            margin: auto;
            
        }
    </style>
    </head>
<body>
     <?php
        session_start();
         $dbc = mysqli_connect('localhost','root','','book_velvet') or die("Couldn't connect to database");
        
        ?>
        
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
    if(isset($_GET['cat_code']))
    {
    $category_code=$_GET['cat_code'];
$query="select ISBN from bookcat where cat_code=$category_code" ;
$result=mysqli_query($dbc,$query)or die("couldnt issue query");
foreach($result as $rows)
{
    $isbn= $rows['ISBN'];
    $query1="SELECT a.au_name,b.ISBN,b.book_price,b.no_in_stock,p.pub_name,b.book_title
              FROM author AS a,book AS b,publisher AS p,bookau AS ba,bookpub AS bp
              WHERE b.ISBN=ba.ISBN AND ba.au_id=a.au_id AND b.ISBN=bp.ISBN AND bp.pub_code=p.pub_code AND b.ISBN='$isbn'";
    $result1 = mysqli_query($dbc,$query1) or die("error");
    $row1 = mysqli_fetch_array($result1);
    ?>
    
    <div class="gallery">
    <fieldset>
    <?php
    if ($row1) 
        {
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
            echo 'Number in stock: '.$no_in_stock.'<br>';
            $publisher_name=$row1['pub_name'];
            echo 'Publisher Name: '.$publisher_name.'<br><br>';
               
            ?>
            <form action="customer.php?ISBN=<?php echo $ISBN_code;?>"method="get">
            Quantity:
            <input style="width:60px;" type="number" name="quantity"
            min="1" max="<?php echo $no_in_stock ?>" value="1">
            <input type="hidden" name="ISBN" value="<?php echo $ISBN_code?>"><br><br>
                <fieldset><input class="sub" type="submit" value="Order Now"></fieldset>
           <!-- <fieldset><a class="anchor" type="submit" href="customer.php?ISBN=<?php //echo $ISBN_code;?>"> Order Now</a></fieldset>-->
        </form>
        </fieldset>            </div>
    
        <?php
        
            }
}
    }else if(isset($_SESSION['username']))
    {
         $home_url='http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/homepage.php';
        header('Location:'.$home_url);
        
    }
    else{
         $home_url='http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/index.php';
        header('Location:'.$home_url);
    }
        ?>
    </body>
</html>