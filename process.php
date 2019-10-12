<?php 
    $mysqli =new mysqli('localhost','root','','crud') or die($mysqli_error()); 

     if (isset($_POST['save'])) {
         $name = $_POST['name'];
         $address = $_POST['address'];
     }

     $mysqli->query("INSERT INTO data (name,address) VALUES('$name','$address')") or
     die($mysqli_error);
?>