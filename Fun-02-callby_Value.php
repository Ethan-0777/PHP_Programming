<!DOCTYPE html>
<html>
<head>
  <title>php</title>
</head>
<body>
  <h1>
    Function call by value:
  </h1>
  <?php
  //function defination
  function add($num1,$num2){
  $rs=$num1+$num2;
  return $rs;
  }
  //function call
 $res=add(10,20);
 echo("Addition is ".$res);
  ?>
</body>
</html>