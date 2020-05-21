<html>
    <head>
    <title>Online Book Stores</title>
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
        a:link{
        color: white
        }
        a:visited{
            color: black;
        }
        a:hover{
            color: blue;
        }
        a:active{
            color: #ff0000
        }
            form{
                margin: inherit;
            }
            .left{
                float: left;
                width:50%;
                
                margin: 2px 10px;;
                display:inline;
            }
            .right{
                float: left;
                margin: 2px 10px;;
                display:inline;
            }
            
        </style>
    </head>
    <body>
        <a href="login.php">
            <div class=para > <b> Login | Register</b></div></a>
        <pre><div class=title>                BOOK VELVET </div></pre>
        
        
        <h1> A book worth reading is worth buying....</h1><br>
         <p><b>Search :</b>
             <form action="search.php" method="get">
                <input type="search" name="search" size="35px" >
                        <button><i style="font-size: 25px;" class="fa fa-search"></i></button></form>
        <!--<p><b>Search :</b>
       <form action="search.php" method="get" >
  
            <input type="search" name="book_title" placeholder="Type Here" size="50" >
            <a><i style="font-size: 25px;" class="fa fa-search"></i> </a>
        <!--<button><i style="font-size: 25px;" class="fa fa-search"></i></button></form>-->
        
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
    </body>
</html>
