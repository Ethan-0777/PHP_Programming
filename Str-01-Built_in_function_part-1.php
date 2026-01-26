<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>String_function</title>
</head>
<body>
  <h2>String_Built_in_function</h2>  
  
  <?php
  //String in php is immutable.
  /* ⁰.strtoupper()-To convert string into upper case.*/
  $myname="Nabin Raspeda";
  echo(strtoupper($myname)."<br>");
  
  /* ¹.strtolower()- To convert string into lower case.*/
  echo($myname."<br>");
  
    /* ².str_split() -split the string with specified position.*/
  $str="Hello php";
  $newStr=str_split($str,3);
  print_r($newStr);
  echo("<br>");
  
  /* ³.chunck_split() -split the string with 3 character and insert new character.*/
  $str="Hello world";
  $newStr=chunk_split($str,2,".");
  echo($newStr);
  // ⁴.ucwords()-every first letter of string words are in upper case.
  $newStr="hii nana";
  $nstr=ucwords($newStr);
  echo("<br> $nstr");
  //⁵.lcfirst()- first letter of string word is in lower case
  $newStr="Hii nana";
  $nstr=lcfirst($newStr);
  echo("<br> $nstr");
  //⁶.ucfirst()-first letter of string word is in upper case
  $newStr="hii nana";
  $nstr=ucfirst($newStr);
  echo("<br> $nstr");
  ?>
  
</body>
</html>