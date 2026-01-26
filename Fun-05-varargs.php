<!DOCTYPE html>
<html>
  <head>
    <title>php</title>
  </head>
  <body>
    <h1>
      Variable length arguments in function:
    </h1>
    <?php
    /*Variable length arguments:
    ¹.func_get_args(); returns array of arguments.
    ².func_num_args(); returns number of arguments.
    */
    //defining function
    function varargs(){
      $arr=func_get_args();
      print_r($arr);echo("<br>");
      $sum=0;
      $count=func_num_args();
      //to calculate sum
      for($i=0;$i<$count;$i++)
      $sum+=$arr[$i];
      $avg=$sum/$count;
      echo("Average is $avg");
    }
    //function call.
    varargs(10,30,40,60);
    
    ?>
  </body>
</html>