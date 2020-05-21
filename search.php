<html>
    <head>
    <link rel="stylesheet" href="styles.css">
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
        <style>
         div.desc {
    padding: 15px;
    text-align:left;
    font-family: forte;
    font-size:20px;
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
            nav{ 
            text-align: center;
            font-size: 25;
        }
              div.gallery {
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
    width: 400px;
        padding: 30px;
}

div.gallery:hover {
    border: 1px solid #777;
}

div.gallery img {
    width: 100%;
    height: 50%;
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
            color: white;
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
         div.gallery {
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
    width: 400px;
    padding: 30px;
    color: white;
    text-align: center;
    font-family: forte;
    font-size:20px;
}

div.gallery:hover {
    border: 1px solid #777;
}

div.gallery img {
    width: 100%;
    height: 50%;
}
        </style>
    </head>
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
$dbc = mysqli_connect("localhost","root","","book_velvet") or  die(mysql_error());
                  
$search = mysqli_real_escape_string($dbc,$_GET['search']);
$book=$search;
$query="SELECT a.au_name,b.ISBN,b.book_price,b.no_in_stock,p.pub_name,b.book_title
              FROM author AS a,book AS b,publisher AS p,bookau AS ba,bookpub AS bp
              WHERE b.ISBN=ba.ISBN AND ba.au_id=a.au_id AND b.ISBN=bp.ISBN AND bp.pub_code=p.pub_code AND b.book_title LIKE '%".$book."%'";
            
// $query = "SELECT * FROM movies WHERE title LIKE '%".$searchString."%'";
//$query1="SELECT * FROM book WHERE book_title='$book'";

$result = mysqli_query($dbc,$query) or die("error");
//$row = mysqli_fetch_array($result);
if ($result->num_rows!=0){
foreach($result as $row)
{
    echo'<div class="gallery">';
            $book_title=$row['book_title'];
            $image = $book_title;  ?>          
            <img src="pictures/category/<?php echo $image.".jpg"; ?>">
            <?php $author_name=$row['au_name'];
            echo 'Author Name: '.$author_name.'<br>';
            $ISBN_code=$row['ISBN'];
            echo 'ISBN code: '.$ISBN_code.'<br>';
            $book_price=$row['book_price'];
            echo 'Book Price: ₹'.$book_price.'<br>';
            $no_in_stock=$row['no_in_stock'];
            echo 'Number in stock: '.$no_in_stock.'<br>';
            $publisher_name=$row['pub_name'];
            echo 'Publisher Name: '.$publisher_name.'<br><br>';
            ?>
         <form action="customer.php?ISBN=<?php echo $ISBN_code;?>"method="get">
            Quantity:
            <input style="width:60px;" type="number" name="quantity"
            min="1" max="<?php echo $no_in_stock ?>" value="1">
            <input type="hidden" name="ISBN" value="<?php echo $ISBN_code?>"><br><br>
                <fieldset><input class="sub" type="submit" value="Order Now"></fieldset>
        </form>
                  <?php
       echo'</div>'; 
 }
}    
else{
            echo '<h1 style="color:white;">Book not available!</h1>';
        }
?>
                 <!-- <img src="pictures/category/<?php echo $image.".jpg"; ?>">-->
        </body>
 </html> 