<html>
    <head> <title> Comic</title>
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
            <?php }
            else{
                echo '<a href="homepage.php"> <i style="font-size:40px" class="fas fa-home"></i></a>';
            }
            ?>
        </nav><br><br>
        
        
         <div class="gallery">
        <a target="_blank" href="pictures/category/mrs%20funnybones.jpg">
        <img src="pictures/category/mrs%20funnybones.jpg" alt="mrs funny bones" >
        </a>
        <div class="desc">
             <?php
            $query = "SELECT a.au_name,b.ISBN,b.book_price,b.no_in_stock,p.pub_name,b.book_title
              FROM author AS a,book AS b,publisher AS p,bookau AS ba,bookpub AS bp
              WHERE b.ISBN=ba.ISBN AND ba.au_id=a.au_id AND b.ISBN=bp.ISBN AND bp.pub_code=p.pub_code AND b.ISBN='9780143424468'";
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
            //$book_title=$row['book_title'];
            //$image = $book_title."(pic).jpg";
              //  echo $image;
           }
//            echo '<button style="font-size:24px" onclick="location.href='"comic.php?ISBN='.$ISBN_code.'&addToCart=1"'"><i class="fas fa-shopping-cart"></i></button>';
           
            /*if(isset($_GET['addToCart'])){
                $author_name=$row['au_name'];
                $book_title=$row['book_title'];
                $book_price=$row['book_price'];
                $no_in_stock=$row['no_in_stock'];
                $publisher_name=$row['pub_name'];
                $query="insert into 'cart'('au_name', 'book_title', 'book_price', 'no_in_stock', 'pub_name') values('$author_name','$book_title','$book_price','$no_in_stock','$publisher_name')";
                $result=mysqli_query($dbc,$query) or die("Can't issue query");
            }
             echo '<a href="comic.php?addToCart" target="_self">Cart</a>';*/
            echo'<fieldset>
            <a class="anchor" href="customer.php?ISBN=9780143424468"> Order Now</a>
            </fieldset>';?>
            </div>
        </div>
        
        <div class="gallery">
        <a target="_blank" href="pictures/category/cats%20cradle.jpg">
        <img src="pictures/category/cats%20cradle.jpg" alt="cats cradle" >
        </a>
        <div class="desc">
             <?php
            $query = "SELECT a.au_name,b.ISBN,b.book_price,b.no_in_stock,p.pub_name,b.book_title
              FROM author AS a,book AS b,publisher AS p,bookau AS ba,bookpub AS bp
              WHERE b.ISBN=ba.ISBN AND ba.au_id=a.au_id AND b.ISBN=bp.ISBN AND bp.pub_code=p.pub_code AND b.ISBN='9788071453611'";
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
            <a class="anchor" href="customer.php?ISBN=9788071453611"> Order Now</a>
            </fieldset>';
            ?>
            
            </div>
        </div>
        
        <div class="gallery">
        <a target="_blank" href="pictures/category/puckoon.jpg">
        <img src="pictures/category/puckoon.jpg" alt="puckoon" >
        </a>
        <div class="desc">
             <?php
            $query = "SELECT a.au_name,b.ISBN,b.book_price,b.no_in_stock,p.pub_name,b.book_title
              FROM author AS a,book AS b,publisher AS p,bookau AS ba,bookpub AS bp
              WHERE b.ISBN=ba.ISBN AND ba.au_id=a.au_id AND b.ISBN=bp.ISBN AND bp.pub_code=p.pub_code AND b.ISBN='9780241971376'";
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
            <a class="anchor" href="customer.php?ISBN=9780241971376"> Order Now</a>
            </fieldset>';
            ?>
            </div>
        </div>
        
        <div class="gallery">
        <a target="_blank" href="pictures/category/scoop.jpg">
        <img src="pictures/category/scoop.jpg" alt="scoop" >
        </a>
        <div class="desc">
             <?php
            $query = "SELECT a.au_name,b.ISBN,b.book_price,b.no_in_stock,p.pub_name,b.book_title
              FROM author AS a,book AS b,publisher AS p,bookau AS ba,bookpub AS bp
              WHERE b.ISBN=ba.ISBN AND ba.au_id=a.au_id AND b.ISBN=bp.ISBN AND bp.pub_code=p.pub_code AND b.ISBN='9780141195124'";
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
            <a class="anchor" href="customer.php?ISBN=9780141195124"> Order Now</a>
            </fieldset>';?>
            </div>
        </div>
        
         <div class="gallery">
        <a target="_blank" href="pictures/category/serious%20man.jpg">
        <img src="pictures/category/serious%20man.jpg" alt="serious man" >
        </a>
        <div class="desc">
             <?php
            $query = "SELECT a.au_name,b.ISBN,b.book_price,b.no_in_stock,p.pub_name,b.book_title
              FROM author AS a,book AS b,publisher AS p,bookau AS ba,bookpub AS bp
              WHERE b.ISBN=ba.ISBN AND ba.au_id=a.au_id AND b.ISBN=bp.ISBN AND bp.pub_code=p.pub_code AND b.ISBN='9781848543126'";
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
            <a class="anchor" href="customer.php?ISBN=9781848543126"> Order Now</a>
            </fieldset>';?>
            </div>
        </div>
        
            <div class="gallery">
        <a target="_blank" href="pictures/category/the%20egg%20and%20i.jpg">
        <img src="pictures/category/the%20egg%20and%20i.jpg" alt="the egg and i" >
        </a>
        <div class="desc">
             <?php
            $query = "SELECT a.au_name,b.ISBN,b.book_price,b.no_in_stock,p.pub_name,b.book_title
              FROM author AS a,book AS b,publisher AS p,bookau AS ba,bookpub AS bp
              WHERE b.ISBN=ba.ISBN AND ba.au_id=a.au_id AND b.ISBN=bp.ISBN AND bp.pub_code=p.pub_code AND b.ISBN='978-0-06-091428-8'";
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
            <a class="anchor" href="customer.php?ISBN=978-0-06-091428-8"> Order Now</a>
            </fieldset>';?>
            </div>
        </div>
        
          <div class="gallery">
        <a target="_blank" href="pictures/category/three%20men%20in%20a%20boat.jpg">
        <img src="pictures/category/three%20men%20in%20a%20boat.jpg" alt="three men in a boat" >
        </a>
        <div class="desc">
             <?php
            $query = "SELECT a.au_name,b.ISBN,b.book_price,b.no_in_stock,p.pub_name,b.book_title
              FROM author AS a,book AS b,publisher AS p,bookau AS ba,bookpub AS bp
              WHERE b.ISBN=ba.ISBN AND ba.au_id=a.au_id AND b.ISBN=bp.ISBN AND bp.pub_code=p.pub_code AND b.ISBN='0-7653-4161-1'";
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
            <a class="anchor" href="customer.php?ISBN=0-7653-4161-1"> Order Now</a>
            </fieldset>';?>
            </div>
        </div>
        
        <div class="gallery">
        <a target="_blank" href="pictures/category/bossypants.jpg">
        <img src="pictures/category/bossypants.jpg" alt="bossypants" >
        </a>
        <div class="desc">
             <?php
            $query = "SELECT a.au_name,b.ISBN,b.book_price,b.no_in_stock,p.pub_name,b.book_title
              FROM author AS a,book AS b,publisher AS p,bookau AS ba,bookpub AS bp
              WHERE b.ISBN=ba.ISBN AND ba.au_id=a.au_id AND b.ISBN=bp.ISBN AND bp.pub_code=p.pub_code AND b.ISBN='9780748129775'";
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
            <a class="anchor" href="customer.php?ISBN=9780748129775"> Order Now</a>
            </fieldset>';?>
            </div>
        </div>
        
        <div class="gallery">
        <a target="_blank" href="pictures/category/cruel%20shoes.jpg">
        <img src="pictures/category/cruel%20shoes.jpg" alt="bossypants" >
        </a>
        <div class="desc">
             <?php
            $query = "SELECT a.au_name,b.ISBN,b.book_price,b.no_in_stock,p.pub_name,b.book_title
              FROM author AS a,book AS b,publisher AS p,bookau AS ba,bookpub AS bp
              WHERE b.ISBN=ba.ISBN AND ba.au_id=a.au_id AND b.ISBN=bp.ISBN AND bp.pub_code=p.pub_code AND b.ISBN='0-399-12304-0'";
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
            <a class="anchor" href="customer.php?ISBN=0-399-12304-0"> Order Now</a>
            </fieldset>';?>
            </div>
        </div>
    </body>
</html>