<!DOCTYPE html>
<html>
<head>
  <title>php</title>
</head>
<body>
  <h1>
    Function with parameters and return type:
  </h1>
  <?php
  //function defination
  function square($num){
  $rs=$num*$num;
  return $rs;
  }
  //function call
 $res=square(4);
 echo("Square is ".$res);
  ?>
</body>
</html>