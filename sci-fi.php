<html>
    <head> <title> Sci-fi</title>
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
        
        <nav>
         <?php   if(!isset($_SESSION['username'])){ ?>
        <a href="index.php"> <i style="font-size:40px" class='fas fa-home'></i></a>
            <?php
        }
            else{
                echo "<a href='homepage.php'> <i style='font-size:40px' class='fas fa-home'></i></a>";
            } ?>
        </nav><br><br>
        
        
         <div class="gallery">
        <a target="_blank" href="pictures/category/Kindered.jpg">
        <img src="pictures/category/Kindered.jpg" alt="Kindered" >
        </a>
        <div class="desc">
             <?php
            $query = "SELECT a.au_name,b.ISBN,b.book_price,b.no_in_stock,p.pub_name,b.book_title
              FROM author AS a,book AS b,publisher AS p,bookau AS ba,bookpub AS bp
              WHERE b.ISBN=ba.ISBN AND ba.au_id=a.au_id AND b.ISBN=bp.ISBN AND bp.pub_code=p.pub_code AND b.ISBN='0-385-15059-8'";
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
            <a class="anchor" href="customer.php?ISBN=0-385-15059-8"> Order Now</a>
            </fieldset>';?>
            </div>
        </div>
        
        <div class="gallery">
        <a target="_blank" href="pictures/category/lock%20in.jpg">
        <img src="pictures/category/lock%20in.jpg" alt="Lock In" >
        </a>
        <div class="desc">
             <?php
            $query = "SELECT a.au_name,b.ISBN,b.book_price,b.no_in_stock,p.pub_name,b.book_title
              FROM author AS a,book AS b,publisher AS p,bookau AS ba,bookpub AS bp
              WHERE b.ISBN=ba.ISBN AND ba.au_id=a.au_id AND b.ISBN=bp.ISBN AND bp.pub_code=p.pub_code AND b.ISBN='978-0-7653-7586-5'";
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
            <a class="anchor" href="customer.php?ISBN=978-0-7653-7586-5"> Order Now</a>
            </fieldset>';
            ?>
            
            </div>
        </div>
        
        <div class="gallery">
        <a target="_blank" href="pictures/category/newyork%202140.jpg">
        <img src="pictures/category/newyork%202140.jpg" alt="New York 2140" >
        </a>
        <div class="desc">
             <?php
            $query = "SELECT a.au_name,b.ISBN,b.book_price,b.no_in_stock,p.pub_name,b.book_title
              FROM author AS a,book AS b,publisher AS p,bookau AS ba,bookpub AS bp
              WHERE b.ISBN=ba.ISBN AND ba.au_id=a.au_id AND b.ISBN=bp.ISBN AND bp.pub_code=p.pub_code AND b.ISBN='978-0-316-26234-7'";
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
            <a class="anchor" href="customer.php?ISBN=978-0-316-26234-7"> Order Now</a>
            </fieldset>';
            ?>
            </div>
        </div>
        
        <div class="gallery">
        <a target="_blank" href="pictures/category/planetside.jpg">
        <img src="pictures/category/planetside.jpg"alt="Planet Side" >
        </a>
        <div class="desc">
             <?php
            $query = "SELECT a.au_name,b.ISBN,b.book_price,b.no_in_stock,p.pub_name,b.book_title
              FROM author AS a,book AS b,publisher AS p,bookau AS ba,bookpub AS bp
              WHERE b.ISBN=ba.ISBN AND ba.au_id=a.au_id AND b.ISBN=bp.ISBN AND bp.pub_code=p.pub_code AND b.ISBN='9780062694676'";
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
            <a class="anchor" href="customer.php?ISBN=9780062694676"> Order Now</a>
            </fieldset>';?>
            </div>
        </div>
        
         <div class="gallery">
        <a target="_blank" href="pictures/category/space%20opera.jpg">
        <img src="pictures/category/space%20opera.jpg" alt="Space Opera" >
        </a>
        <div class="desc">
             <?php
            $query = "SELECT a.au_name,b.ISBN,b.book_price,b.no_in_stock,p.pub_name,b.book_title
              FROM author AS a,book AS b,publisher AS p,bookau AS ba,bookpub AS bp
              WHERE b.ISBN=ba.ISBN AND ba.au_id=a.au_id AND b.ISBN=bp.ISBN AND bp.pub_code=p.pub_code AND b.ISBN='9781681689166'";
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
            <a class="anchor" href="customer.php?ISBN=9781681689166"> Order Now</a>
            </fieldset>';?>
            </div>
        </div>
        
            <div class="gallery">
        <a target="_blank" href="pictures/category/the%20fifth%20season.jpg">
        <img src="pictures/category/the%20fifth%20season.jpg" alt="The Fifth Season" >
        </a>
        <div class="desc">
             <?php
            $query = "SELECT a.au_name,b.ISBN,b.book_price,b.no_in_stock,p.pub_name,b.book_title
              FROM author AS a,book AS b,publisher AS p,bookau AS ba,bookpub AS bp
              WHERE b.ISBN=ba.ISBN AND ba.au_id=a.au_id AND b.ISBN=bp.ISBN AND bp.pub_code=p.pub_code AND b.ISBN='978-0-356-50819-1'";
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
            <a class="anchor" href="customer.php?ISBN=978-0-356-50819-1"> Order Now</a>
            </fieldset>';?>
            </div>
        </div>
        
          <div class="gallery">
        <a target="_blank" href="pictures/category/the%20hunger%20games.jpg">
        <img src="pictures/category/the%20hunger%20games.jpg" alt="The Hunger Games" >
        </a>
        <div class="desc">
             <?php
            $query = "SELECT a.au_name,b.ISBN,b.book_price,b.no_in_stock,p.pub_name,b.book_title
              FROM author AS a,book AS b,publisher AS p,bookau AS ba,bookpub AS bp
              WHERE b.ISBN=ba.ISBN AND ba.au_id=a.au_id AND b.ISBN=bp.ISBN AND bp.pub_code=p.pub_code AND b.ISBN='978-0-439-02352-8'";
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
            <a class="anchor" href="customer.php?ISBN=978-0-439-02352-8"> Order Now</a>
            </fieldset>';?>
            </div>
        </div>
        
        <div class="gallery">
        <a target="_blank" href="pictures/category/the%20stand.jpg">
        <img src="pictures/category/the%20stand.jpg" alt="The Stand" >
        </a>
        <div class="desc">
             <?php
            $query = "SELECT a.au_name,b.ISBN,b.book_price,b.no_in_stock,p.pub_name,b.book_title
              FROM author AS a,book AS b,publisher AS p,bookau AS ba,bookpub AS bp
              WHERE b.ISBN=ba.ISBN AND ba.au_id=a.au_id AND b.ISBN=bp.ISBN AND bp.pub_code=p.pub_code AND b.ISBN='978-0-385-12168-2'";
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
            <a class="anchor" href="customer.php?ISBN=978-0-385-12168-2"> Order Now</a>
            </fieldset>';?>
            </div>
        </div>
        
        <div class="gallery">
        <a target="_blank" href="pictures/category/uprooted.jpg">
        <img src="pictures/category/uprooted.jpg" alt=" Uprooted" >
        </a>
        <div class="desc">
             <?php
            $query = "SELECT a.au_name,b.ISBN,b.book_price,b.no_in_stock,p.pub_name,b.book_title
              FROM author AS a,book AS b,publisher AS p,bookau AS ba,bookpub AS bp
              WHERE b.ISBN=ba.ISBN AND ba.au_id=a.au_id AND b.ISBN=bp.ISBN AND bp.pub_code=p.pub_code AND b.ISBN='978-0804179034'";
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
            <a class="anchor" href="customer.php?ISBN=978-0804179034"> Order Now</a>
            </fieldset>';?>
            </div>
        </div>
    </body>
</html>