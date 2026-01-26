<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>String</title>
</head>
 <body>
  <?php
 // String in php :
/* String is a sequence of characters that enclosed with single (' ')or double quotes(" ") .
String function:
 ¹.strlen()        ⁶.strtolower()
 ².str_word_count() ⁷.substr_count()
 ³.chunk_split()    ⁸.ucwords()
 ⁴.str_split()      ⁹.ucfirst()
 ⁵.strtoupper()    ¹⁰.lcfirst()
 ¹¹.strcmp()      ¹².strcasecmp()
*/
 $str="Welcome to php";
 echo($str."<br>");
 // ¹.strlen():
 // to find length of the String
 $len=strlen($str);
 echo("length of the given string is $len <br>");
 // ².str_word_count():
 // to count total words in a given steing
 $words=str_word_count($str);
 echo("Total words in the given string is $words <br>");
  ?>
</body>
</html>