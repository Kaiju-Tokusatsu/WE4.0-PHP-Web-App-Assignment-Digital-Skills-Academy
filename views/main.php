<?php
/**********************************************************
* Author: Thomas Canham
* Assignment: WE4.0 PHP Web App Assignment, Digital Skills Academy
* Student ID: D15126979
* Date : 2016/02/08
* Ref: http://www.w3schools.com/php/php_form_validation.asp
***********************************************************/

//Create new ShowProfile object
$profile = new ShowProfile();
//Create new FetchMembers object object
$member_list = new FetchMembers();
//Load variables
if(isset($_POST['username']))
//Call memberProfile method and assign returned data to a variable
$member = $profile->memberProfile($_POST['username']); 
//Call getAllMembers method and assign returned data to an array
$members = $member_list->getAllMembers()
?>

<div id="member_list">
    <h3>Current Members</h3>
    <ul>
        <!-- loop through array and echo out each value as a list item-->
        <?php 
            foreach ($members as $row){
                echo '<li>'.$row['username'].'</li>';
            }
        ?> 
    </ul>
</div>

<div id="search">    
    <h3>Find Member Profile</h3>
    <!--Form to post username to use a parameter in the memberProfile method-->
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <p>Username: <input type="text" name="username" id="username"></p>    
        <p><input type="submit" name="submit" id="submit" value="Search Members">   </p>
    </form>
</div>

<div id="profile">
    <h3>Member Profile</h3>
    <table>
        <tr>
            <th>Id</th><th>First Name</th><th>Surname</th><th>Email</th>
        </tr>
        <tr>
           <?php echo $member?><!--Display results to page-->
        </tr>
    </table>
</div>  
    
