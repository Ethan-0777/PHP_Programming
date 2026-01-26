<!DOTYPE html>
<html>
  <head>
    <title>php</title>
  </head>
  <body>
    <h1>
      default Arguments in function:
    </h1>
    <?php
    //default_Arguments.
    function default_Arg($p,$c,$m,$ttm=300){//formal arguments or parameters.
      echo("Physics={$p} Chemistry={$c} Math={$m}<br>");
      $perc=($p+$c+$m)*100/$ttm;
      echo("Percentage is $perc%.<br>");
    }
    //function call.
    default_Arg(60,56,70);//actual arguments.
    default_Arg(87,40,57,150);//arguments.
    ?>
  </body>
</html>