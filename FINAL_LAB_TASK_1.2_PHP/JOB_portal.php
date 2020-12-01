<?php

if(isset($_POST["inssert"]))

 mysql_query("insert into portal values('$_POST[Employername]','$_POST[company name]','$_POST[contact num]','$_POST[username]'.'$_POST[password]')");

?>

<!DOCTYPE HTML>
<html>
    <head>
        <title></title>
    </head>

        <form action="JOB_portal.php" method="post">
        
            <input type="text" name="name" placeholder="Employer name"><br>
            <input type="text" name="name" placeholder="company name"><br>
            <input type="number" name="contact num" placeholder="contact num"><br>
            <input type="text" name="user name" placeholder="username"><br>
            <input type="number" name="password" placeholder="password"><br>
            <div>
                <input type="submit" name="insert" value="update">
                <input type="submit" name="insert" value="Delete">
                <input type="submit" name="insert" value="Search">
            </div>


        </form>

</html>