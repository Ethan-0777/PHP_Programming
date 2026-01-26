<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Associative Array</title>
</head>
<body>
<?php
/* Associative Array:
   Associative array is an array in php that stores values using named keys instead of numeric indexes.
  Definition:
   An associative array stores data in key–value pairs, where each key is a meaningful name.
   Example:
   */
   $myData=array("Name"=>"Ethan","Age"=>24,"course"=>"BCA");
   //Accessing data
   echo("My name is ".$myData['Name']);
   //Adding new data
   $myData["College"]="Mits College Rayagada";
   
?>
</body>
</html>