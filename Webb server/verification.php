<?php

   if (isset($_POST['password']) && isset($_POST['username'])) {

     $dbc = mysqli_connect('localhost','root','dank','inlogg');

     $query = 'SELECT * FROM users WHERE username="'.$_POST['username'].'" AND password=PASSWORD("'.$_POST['password'].'");';
     echo $query;
     $result = mysqli_query($dbc,$query);
     $row = mysqli_fetch_array($result);
     if($result){
       echo "Välkommen";
       header("Location: index.php");
     }
     else{
       echo "fel";
       //echo $_POST['password'] . "     ";
       //echo $_POST['username'];
       //echo $result;
     }



   }
?>
