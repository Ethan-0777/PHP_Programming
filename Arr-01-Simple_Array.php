<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Simple Array</title>
</head>
<body>
  <?php
  /*
    In PHP, an array is a variable that can store multiple values under a single name. Instead of creating many separate variables, you can group related data together in an array.

   Simple example
     $colors = array("Red", "Green", "Blue");
     Here, $colors holds three values
     
     ∆Indexed Array:
       An indexed array in PHP is an array where elements are stored with numeric index values.
       By default, the index starts from 0 and increases automatically.

  Definition:
   An indexed array stores multiple values in a single variable and accesses each value using a number (index).
*/
 //Example
$colors = array("Red", "Green", "Blue");
/*Here:
Red is at index 0
Green is at index 1
Blue is at index 2
*/
//Accessing values
echo $colors[1]; // Green
//Creating indexed array with manual index
$numbers[0] = 10;
$numbers[1] = 20;
$numbers[2] = 30;
/*In short-
   An indexed array in PHP stores data in a list format where each element is identified by a number.*/
  ?>
</body>
</html>