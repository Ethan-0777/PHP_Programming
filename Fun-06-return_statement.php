<!DOCTYPE html>
<html>
<head>
  <title>php</title>
</head>
<body>
  <h1>
    return Statement in function:
  </h1>
  <?php
  /*
  °A function can return a value using return statement in conjuction with a value or object
  ° return statement terminate or stops the execution of the function and sends the value back to the calling code.
  °A function can have only one return statement.
  */
  
  //function defination
  function areaCircle($radius,$PI=3.41){
  $area=$PI*$radius*$radius;
  return $area;
  }
  //function call
 $res=areaCircle(4);
 echo("Area of the circle is $res sqr. ");
 
  ?>
</body>
</html>