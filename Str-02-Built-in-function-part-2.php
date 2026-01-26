<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Php_built_in_function</title>
</head>
<body>
  
  <?php
  // ¹.strlen()-To find length of the string.
  $str="I am Ethan .BCA 3rd year student.";
  echo("length of the string is". strlen($str). "<br>");
  
  // ¹.substr_count()-To find sub string occurence in the given string.
  $str1="free for free if you buy two and two more items.";
  echo(substr_count($str1,"free")." times free is occured.<br>");
  // ².strcasecmpr()-To compare string irrespective of case.
  $str2="dood";
  echo(strcasecmp($str2,"Dood")."<br>");
  // ³.strcmp()-To campare string with respacte to case.
  echo(strcmp($str2,"dood"));
  
  ?>
</body>
</html>