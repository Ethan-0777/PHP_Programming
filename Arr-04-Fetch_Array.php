<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Different ways to fetch array items</title>
</head>
<body>
  <?php
  // Php allow us various methods to fetch array items.
  $fruits=["Apple",'Banana',"Cucumber","date"];
  // using print_r() method
   print_r($fruits);
   echo("<br>");
   
   //using foreach loop
   foreach ($fruits as $ft){
     echo($ft);
     echo("<br>");
   }
   // or 
   $ages = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

   foreach ($ages as $name => $age) {
     echo "$name is $age years old.<br>";
   }
   
   // using while loop
   $i=0;
   while($i<count($fruits)){
     echo($fruits[$i]."<br>");
     $i++;
   }
   //count() its count the total number of items of an array.
  ?>
</body>
</html>