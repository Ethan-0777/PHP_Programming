<?php 
$host='localhost:3306';
$user='root';
$password='root';
$database='studentdb';
//stape-1 establish the Connection
$conn=mysqli_connect($host,$user,$password,$database);
if($conn){
  echo("Connected..");
}
else{
  echo('Error!..');
}

?>