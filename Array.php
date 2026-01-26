<?php
//Array in php:
/* Array is a collection of hetrogenuous data.That stores data in a contiguous memory location.
  There are three types of array in php
   ¹.Indexed Array/Simple Array
   ².Associative Array
   ³.Multdimentional Array
   Syntax:
    $arr_name=array(value1,value2,...valuen);
    Example:
     $arr=array("Android","Windows","DOCS","MacOS");
     print_r($arr);
  */
  $ar=array("India","Pakistan","Bhutan","Nepal","Sri Lanka","Tibate","Afganistan","Banglades","Malasya");
  print_r($ar);
  for($i=0;$i<count($ar);$i++){
    echo "<br";
    echo($ar[$i]);
  }
  // count()-Its count no. of array items.
  //print_r()- its print array with index no.
  $newArr=array_slice($ar,3,4);
  print_r($newArr);
  //array_slice()- its slice the given array and return a new sliced array.
?>