<?php
/**********************************************************
* Author: Thomas Canmham
* Assignment: WE4.0 PHP Web App Assignment, Digital Skills Academy
* Student ID: D15126979
* Date : 2016/02/08
* Ref: n/a
***********************************************************/

//Include required files
include'../config.php';
?>
<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>Log In Page</title>
</head>
<body>
<div id="login">
    <h2>Log In Here</h2>
<!--Form to post login values to LoginCheck object-->
<form action="../classes/LoginCheck.php" method="post" id="loginForm">
    <table>
        <tr>
           <td>Name:</td> <td><input type="text" name="username" id="username"></td>
        </tr>
        <tr>
           <td>Password</td> <td><input type="password" name="password" id="password">              </td>
        </tr>
        <tr>
            <td></td><td><input type="submit" name="submit" id="submit" value="Log In"</td>
        </tr>
    </table>
</form>
<?php
//If returned to login page display error message
    if(isset($_GET['error'])){
        echo '<p class="error"> Username or Password not recognised!</p>';
    }
?>
</div>  
</body>   