<?php
session_start();
if(!isset($_SESSION['username'])){
    header('locaion:login.php');
}
?>
 <html>
    <head>
    <title> Home Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    </head>
   <body>
       <div class="container">
    <a href="logout.php">LOGOUT</a>
     <h1> welcome </h1>
       </div>
</body>
</html>