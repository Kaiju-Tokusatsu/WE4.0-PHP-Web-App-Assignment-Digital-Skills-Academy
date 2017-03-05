<?php
/**********************************************************
* Author: Thomas Canham
* Assignment: WE4.0 PHP Web App Assignment, Digital Skills Academy
* Student ID: D15126979
* Date : 2016/02/08
* Ref: http://www.w3schools.com/php/php_sessions.asp
***********************************************************/
?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP Web App Assignment</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <meta charset="UTF-8">
    </head>
    <body>
        <header>
             <a href="views/log_out.php">Log out</a>
            <h1>Welcome <?php echo $_SESSION['username'];?></h1><!-- echo user name --> 
        </header>



