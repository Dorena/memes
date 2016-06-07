<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'dank');
define('DB_DATABASE', 'inlogg');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);


if(isset($_POST['username']))
{

$query = "INSERT INTO users (username,email,password) VALUES ('".$_POST['username']."','".$_POST['mail']."',PASSWORD('".$_POST['password']."'));";
mysqli_query($db,$query);
}






 ?>





<form action='register.php' method='post'
  accept-charset="UTF-8">


    <label for ='Mail'>Mail*: </label>
    <input type='text' name='mail' id='mail' maxlength="50" required/><br>

    <label for='USERNAME' > UserName:* </label>
    <input type='text' name='username' id='username' maxlength="20" required/><br>

    <label for='password' > password*: </label>
    <input type='text' name='password' id='password' maxlength="20" required/><br>
    <input type='submit' name='submit' value='submit' />

  </form>
