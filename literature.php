<html>
    <head> <title> Literature</title>
        <link rel="stylesheet" href="styles.css">
       <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
    <style> 
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

    div.desc {
    padding: 15px;
    text-align: center;
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
            else{
               echo '<a href="homepage.php"> <i style="font-size:40px" class="fas fa-home"></i></a>';  
            }
            ?>
            
        </nav><br><br>
        
        
         <div class="gallery">
        <a target="_blank" href="pictures/category/Anna%20Karenina.jpg">
        <img src="pictures/category/Anna%20Karenina.jpg" alt="Anna Karenina" >
        </a>
        <div class="desc">
             <?php
            $query = "SELECT a.au_name,b.ISBN,b.book_price,b.no_in_stock,p.pub_name,b.book_title
              FROM author AS a,book AS b,publisher AS p,bookau AS ba,bookpub AS bp
              WHERE b.ISBN=ba.ISBN AND ba.au_id=a.au_id AND b.ISBN=bp.ISBN AND bp.pub_code=p.pub_code AND b.ISBN='978-1-84749-059-9'";
            $result = mysqli_query($dbc,$query) or die("Can't issue query");
            $row = mysqli_fetch_array($result);
            if($row){
            $author_name=$row['au_name'];
            echo 'Author Name: '.$author_name.'<br>';
            $ISBN_code=$row['ISBN'];
            echo 'ISBN code: '.$ISBN_code.'<br>';
            $book_price=$row['book_price'];
            echo 'Book Price: ₹'.$book_price.'<br>';
            $no_in_stock=$row['no_in_stock'];
            echo 'Number in stock: '.$no_in_stock.'<br>';
            $publisher_name=$row['pub_name'];
            echo 'Publisher Name: '.$publisher_name.'<br><br>';
           }

            echo'<fieldset>
            <a class="anchor" href="customer.php?ISBN=978-1-84749-059-9"> Order Now</a>
            </fieldset>';?>
            </div>
        </div>
        
        <div class="gallery">
        <a target="_blank" href="pictures/category/Atonment.jpg">
        <img src="pictures/category/Atonment.jpg" alt="atonment" >
        </a>
        <div class="desc">
             <?php
            $query = "SELECT a.au_name,b.ISBN,b.book_price,b.no_in_stock,p.pub_name,b.book_title
              FROM author AS a,book AS b,publisher AS p,bookau AS ba,bookpub AS bp
              WHERE b.ISBN=ba.ISBN AND ba.au_id=a.au_id AND b.ISBN=bp.ISBN AND bp.pub_code=p.pub_code AND b.ISBN='0-224-06252-2'";
            $result = mysqli_query($dbc,$query) or die("Can't issue query");
            $row = mysqli_fetch_array($result);
            if($row){
            $author_name=$row['au_name'];
            echo 'Author Name: '.$author_name.'<br>';
            $ISBN_code=$row['ISBN'];
            echo 'ISBN code: '.$ISBN_code.'<br>';
            $book_price=$row['book_price'];
            echo 'Book Price: ₹'.$book_price.'<br>';
            $no_in_stock=$row['no_in_stock'];
            echo 'Number in stock: '.$no_in_stock.'<br>';
            $publisher_name=$row['pub_name'];
            echo 'Publisher Name: '.$publisher_name.'<br><br>';
           }
             echo'<fieldset>
            <a class="anchor" href="customer.php?ISBN=0-224-06252-2"> Order Now</a>
            </fieldset>';
            ?>
            
            </div>
        </div>
        
        <div class="gallery">
        <a target="_blank" href="pictures/category/Beloved.jpg">
        <img src="pictures/category/Beloved.jpg" alt="beloved" >
        </a>
        <div class="desc">
             <?php
            $query = "SELECT a.au_name,b.ISBN,b.book_price,b.no_in_stock,p.pub_name,b.book_title
              FROM author AS a,book AS b,publisher AS p,bookau AS ba,bookpub AS bp
              WHERE b.ISBN=ba.ISBN AND ba.au_id=a.au_id AND b.ISBN=bp.ISBN AND bp.pub_code=p.pub_code AND b.ISBN='1-58060-120-0'";
            $result = mysqli_query($dbc,$query) or die("Can't issue query");
            $row = mysqli_fetch_array($result);
            if($row){
            $author_name=$row['au_name'];
            echo 'Author Name: '.$author_name.'<br>';
            $ISBN_code=$row['ISBN'];
            echo 'ISBN code: '.$ISBN_code.'<br>';
            $book_price=$row['book_price'];
            echo 'Book Price: ₹'.$book_price.'<br>';
            $no_in_stock=$row['no_in_stock'];
            echo 'Number in stock: '.$no_in_stock.'<br>';
            $publisher_name=$row['pub_name'];
            echo 'Publisher Name: '.$publisher_name.'<br><br>';
           }

             echo'<fieldset>
            <a class="anchor" href="customer.php?ISBN=1-58060-120-0"> Order Now</a>
            </fieldset>';
            ?>
            </div>
        </div>
        
        <div class="gallery">
        <a target="_blank" href="pictures/category/Brave%20new%20world.jpg">
        <img src="pictures/category/Brave%20new%20world.jpg"alt="Brave New World" >
        </a>
        <div class="desc">
             <?php
            $query = "SELECT a.au_name,b.ISBN,b.book_price,b.no_in_stock,p.pub_name,b.book_title
              FROM author AS a,book AS b,publisher AS p,bookau AS ba,bookpub AS bp
              WHERE b.ISBN=ba.ISBN AND ba.au_id=a.au_id AND b.ISBN=bp.ISBN AND bp.pub_code=p.pub_code AND b.ISBN='978006085024'";
            $result = mysqli_query($dbc,$query) or die("Can't issue query");
            $row = mysqli_fetch_array($result);
            if($row){
            $author_name=$row['au_name'];
            echo 'Author Name: '.$author_name.'<br>';
            $ISBN_code=$row['ISBN'];
            echo 'ISBN code: '.$ISBN_code.'<br>';
            $book_price=$row['book_price'];
            echo 'Book Price: ₹'.$book_price.'<br>';
            $no_in_stock=$row['no_in_stock'];
            echo 'Number in stock: '.$no_in_stock.'<br>';
            $publisher_name=$row['pub_name'];
            echo 'Publisher Name: '.$publisher_name.'<br><br>';
           }

            echo'<fieldset>
            <a class="anchor" href="customer.php?ISBN=978006085024"> Order Now</a>
            </fieldset>';?>
            </div>
        </div>
        
         <div class="gallery">
        <a target="_blank" href="pictures/category/Heart%20of%20darkness.jpg">
        <img src="pictures/category/Heart%20of%20darkness.jpg" alt="The heart of darkness" >
        </a>
        <div class="desc">
             <?php
            $query = "SELECT a.au_name,b.ISBN,b.book_price,b.no_in_stock,p.pub_name,b.book_title
              FROM author AS a,book AS b,publisher AS p,bookau AS ba,bookpub AS bp
              WHERE b.ISBN=ba.ISBN AND ba.au_id=a.au_id AND b.ISBN=bp.ISBN AND bp.pub_code=p.pub_code AND b.ISBN='9788804683162'";
            $result = mysqli_query($dbc,$query) or die("Can't issue query");
            $row = mysqli_fetch_array($result);
            if($row){
            $author_name=$row['au_name'];
            echo 'Author Name: '.$author_name.'<br>';
            $ISBN_code=$row['ISBN'];
            echo 'ISBN code: '.$ISBN_code.'<br>';
            $book_price=$row['book_price'];
            echo 'Book Price: ₹'.$book_price.'<br>';
            $no_in_stock=$row['no_in_stock'];
            echo 'Number in stock: '.$no_in_stock.'<br>';
            $publisher_name=$row['pub_name'];
            echo 'Publisher Name: '.$publisher_name.'<br><br>';
           }

            echo'<fieldset>
            <a class="anchor" href="customer.php?ISBN=9788804683162"> Order Now</a>
            </fieldset>';?>
            </div>
        </div>
        
            <div class="gallery">
        <a target="_blank" href="pictures/category/Invisible%20man.jpg">
        <img src="pictures/category/Invisible%20man.jpg" alt="Invisible Man" >
        </a>
        <div class="desc">
             <?php
            $query = "SELECT a.au_name,b.ISBN,b.book_price,b.no_in_stock,p.pub_name,b.book_title
              FROM author AS a,book AS b,publisher AS p,bookau AS ba,bookpub AS bp
              WHERE b.ISBN=ba.ISBN AND ba.au_id=a.au_id AND b.ISBN=bp.ISBN AND bp.pub_code=p.pub_code AND b.ISBN='978-0-679-601-39-5'";
            $result = mysqli_query($dbc,$query) or die("Can't issue query");
            $row = mysqli_fetch_array($result);
            if($row){
            $author_name=$row['au_name'];
            echo 'Author Name: '.$author_name.'<br>';
            $ISBN_code=$row['ISBN'];
            echo 'ISBN code: '.$ISBN_code.'<br>';
            $book_price=$row['book_price'];
            echo 'Book Price: ₹'.$book_price.'<br>';
            $no_in_stock=$row['no_in_stock'];
            echo 'Number in stock: '.$no_in_stock.'<br>';
            $publisher_name=$row['pub_name'];
            echo 'Publisher Name: '.$publisher_name.'<br><br>';
           }

            echo'<fieldset>
            <a class="anchor" href="customer.php?ISBN=978-0-679-601-39-5"> Order Now</a>
            </fieldset>';?>
            </div>
        </div>
        
          <div class="gallery">
        <a target="_blank" href="pictures/category/Pride%20&%20Prejudice.jpg">
        <img src="pictures/category/Pride%20&%20Prejudice.jpg" alt="Pride and prejudice" >
        </a>
        <div class="desc">
             <?php
            $query = "SELECT a.au_name,b.ISBN,b.book_price,b.no_in_stock,p.pub_name,b.book_title
              FROM author AS a,book AS b,publisher AS p,bookau AS ba,bookpub AS bp
              WHERE b.ISBN=ba.ISBN AND ba.au_id=a.au_id AND b.ISBN=bp.ISBN AND bp.pub_code=p.pub_code AND b.ISBN='97880733514272'";
            $result = mysqli_query($dbc,$query) or die("Can't issue query");
            $row = mysqli_fetch_array($result);
            if($row){
            $author_name=$row['au_name'];
            echo 'Author Name: '.$author_name.'<br>';
            $ISBN_code=$row['ISBN'];
            echo 'ISBN code: '.$ISBN_code.'<br>';
            $book_price=$row['book_price'];
            echo 'Book Price: ₹'.$book_price.'<br>';
            $no_in_stock=$row['no_in_stock'];
            echo 'Number in stock: '.$no_in_stock.'<br>';
            $publisher_name=$row['pub_name'];
            echo 'Publisher Name: '.$publisher_name.'<br><br>';
           }

            echo'<fieldset>
            <a class="anchor" href="customer.php?ISBN=97880733514272"> Order Now</a>
            </fieldset>';?>
            </div>
        </div>
        
        <div class="gallery">
        <a target="_blank" href="pictures/category/The%20Hobbit.png">
        <img src="pictures/category/The%20Hobbit.png" alt="The Hobbit" >
        </a>
        <div class="desc">
             <?php
            $query = "SELECT a.au_name,b.ISBN,b.book_price,b.no_in_stock,p.pub_name,b.book_title
              FROM author AS a,book AS b,publisher AS p,bookau AS ba,bookpub AS bp
              WHERE b.ISBN=ba.ISBN AND ba.au_id=a.au_id AND b.ISBN=bp.ISBN AND bp.pub_code=p.pub_code AND b.ISBN='978-0-395-47670-2-8'";
            $result = mysqli_query($dbc,$query) or die("Can't issue query");
            $row = mysqli_fetch_array($result);
            if($row){
            $author_name=$row['au_name'];
            echo 'Author Name: '.$author_name.'<br>';
            $ISBN_code=$row['ISBN'];
            echo 'ISBN code: '.$ISBN_code.'<br>';
            $book_price=$row['book_price'];
            echo 'Book Price: ₹'.$book_price.'<br>';
            $no_in_stock=$row['no_in_stock'];
            echo 'Number in stock: '.$no_in_stock.'<br>';
            $publisher_name=$row['pub_name'];
            echo 'Publisher Name: '.$publisher_name.'<br><br>';
           }

            echo'<fieldset>
            <a class="anchor" href="customer.php?ISBN=978-0-395-47670-2-8"> Order Now</a>
            </fieldset>';?>
            </div>
        </div>
        
        <div class="gallery">
        <a target="_blank" href="pictures/category/The%20Outsider.jpg">
        <img src="pictures/category/The%20Outsider.jpg" alt=" The Outsider" >
        </a>
        <div class="desc">
             <?php
            $query = "SELECT a.au_name,b.ISBN,b.book_price,b.no_in_stock,p.pub_name,b.book_title
              FROM author AS a,book AS b,publisher AS p,bookau AS ba,bookpub AS bp
              WHERE b.ISBN=ba.ISBN AND ba.au_id=a.au_id AND b.ISBN=bp.ISBN AND bp.pub_code=p.pub_code AND b.ISBN='0-670-53257-6'";
            $result = mysqli_query($dbc,$query) or die("Can't issue query");
            $row = mysqli_fetch_array($result);
            if($row){
            $author_name=$row['au_name'];
            echo 'Author Name: '.$author_name.'<br>';
            $ISBN_code=$row['ISBN'];
            echo 'ISBN code: '.$ISBN_code.'<br>';
            $book_price=$row['book_price'];
            echo 'Book Price: ₹'.$book_price.'<br>';
            $no_in_stock=$row['no_in_stock'];
            echo 'Number in stock: '.$no_in_stock.'<br>';
            $publisher_name=$row['pub_name'];
            echo 'Publisher Name: '.$publisher_name.'<br><br>';
           }

            echo'<fieldset>
            <a class="anchor" href="customer.php?ISBN=0-670-53257-6"> Order Now</a>
            </fieldset>';?>
            </div>
        </div>
    </body>
</html>