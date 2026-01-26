<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Array Builtin Function</title>
</head>
<body>
  <?php
   //Array Builtin Function:
    /*PHP provides different inbuilt function or methods to perform various operations.
   */
   // 1.array_intersect() - It returns array that contain common elements .
   $course=["BCA","MCA","Mtech","Btech","Bsc"];
   $enroll=array("Bsc","Itm","IST","Civil","Mtech","Bsc");
   $common=array_intersect($course,$enroll);
   print_r($common);
   
   // 2.array_diff() - It returns an array elements that exist in 1st array but not in 2nd array.
   echo("<br>");
   $newArray=array_diff($common,$enroll);
   print_r($newArray);
   
  // 3.array_unique() - It returns an unique array elements.
  echo("<br>");
   $uniq=array_unique($enroll);
   print_r($uniq);
   
  // 4.range() -It provides a series of numberic values.
  /* syntax:
    range(start,end,step[optional]);
    */
    echo("<br>");
    $number=range(1,10);
    print_r($number);
    echo("<br>");
    for($i=0;$i<count($number);$i++){
      echo($number[$i]."<br>");
    }
    
  // 5.array_map() - It returns array which allow us to perform opetation on array items.
 /* syntax:
    array_map(funtion_name,array_name);
    */
    function multi($num){
      return $num*2;
    }
    $arr=array_map("multi",$number);
    echo("<br>");
    print_r($arr);
    
  ?>
</body>
</html>