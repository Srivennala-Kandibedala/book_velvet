<html>
<head><title></title></head>
<body>
<?php
   $home_url='http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/Mainpage.php';
   header('Location:'.$home_url);  
?>
    </body>
</html>