<?php 
 /* Multidimentional Array:
   A multidimensional array in PHP is an array that contains one or more arrays inside it.
   It is used to store data in a structured form like rows and columns.
   Definition:
    A multidimensional array is an array in php where each element is itself another array.
  Example:
  */
   $marks = array(
  array(85, 90, 88),
  array(78, 82, 80),
  array(92, 95, 94)
   );
 //Accessing values  
   echo $marks[0][1]; // 90
 //Real-world Example
   $students = array(
  array("name" => "Ethan", "age" => 20),
  array("name" => "Amit", "age" => 21  )
   );

?>