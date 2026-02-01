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
   /* 3.ADD AND REMOVE ELEMENTS:
   
    I.ADD ELEMENTS
     i.array_push() - It push elements at the end of the array.
     syntax- array_push(array,values);
     Example- */
     $fruits = array("Apple", "Banana");
     print_r($fruits);
     array_push($fruits, "Orange", "Mango");
     echo("<br>");
    print_r($fruits);
    echo("<br>");
     
    /*ii.array_unshift() – Add elements to the beginning of the array.
    syntax- array_unshift(array,values);
    Example- */
    array_unshift($fruits,"Water fruits");
    print_r($fruits);
    echo "<br>";
    
    /*II. REMOVE ELEMENTS:
      i.array_pop() – Remove elements from end of the array.
      syntax- array_pop(arrayname);
      Example- */
      array_pop($fruits);
      print_r($fruits);
      echo("<br>");
    
    /* ii.array_shift() - Remove elements from beginning of the array.
     syntax- array_shift(arrayname);
     Example- */
     array_shift($fruits);
     print_r($fruits);
     echo("<br>");
    
    /*4. SORTING ARRAYS:
    
     Sort values-

     i.sort() – Sort array items in Ascending order .
     syntax- sort(arrayname);
     Example- */
     $num=[23,4,1,40,5,53];
     echo("Before sorting <br>");
     print_r($num);
     echo("<br> After sorting <br>");
     print_r($num);
     echo("<br>");

     /*ii.rsort() – It sort array elements in Descending order.
     syntax-rsort(arrayname);
     Example- */
     echo("<br> Before sorting <br>");
     print_r($num);
     echo("<br>");
     rsort($num);
     echo("After sorting <br>");
     print_r($num);
     echo("<br>");
     
    /*I.Sort associative arrays
    
     i.asort() – Sort by values
     ii.ksort() – Sort by keys
     iii.arsort() – Reverse by values
     iv.krsort() – Reverse by keys
     
    /5.MERGE AND COMBINE:
     i.array_merge() - It merge arrays and return a merged array.
     syntax- array_merge(arr1,arr2);
     Example- */
     $arr1=[1,3,4,5];
     $arr2=['Ankit','Milon','Annu','Aswini',"Likit"];
     $merg=array_merge($arr2,$arr1);
     print_r($merg);
     echo("<br>");
     
     /*ii.array_combine() – It Combine keys and values of the array.It is used to create a new array by using one array for keys and another array for values
     syntax-array_combine(array $keys, array $values);
     Example- */
     $ids = [101, 102, 103];
     $names = ["Alice", "Bob", "Charlie"];
     $employee_list = array_combine($ids, $names);
     print_r($employee_list);

    /*iii.array_replace() – It Replace values of the array.
      It is used to overwrite values in one array with values from subsequent arrays.
     syntax- array_replace(array $array1, array ...$replacements);
     Example- */
     $base = ["color" => "red", "shape" => "round", "size" => "big"];
     $update = ["color" => "blue", "size" => "small"];
     $result = array_replace($base, $update);
     print_r($result);
     
    /*6. ARRAY SLICING AND SPLICING
    
     i.array_slice() – It is specially used to Extract part of array.
     syntax- array_splice(array,1,4);
     Example- */
     $arr3=['apple','Banana','Coconute','Date'];
     $newArr=array_slice($arr3,1,4);
     echo('<br>');
     print_r($newArr);
     
     /*ii.array_splice() – It Remove/replace part of the Array.
     syntax-array_splice($arr,from,to);
     Example- */
     $arr4=array_splice($arr3,0,2);
     echo "<br>";
     print_r($arr4);
     
    /*7. ARRAY TRANSFORMATIONS
     i.array_map() – Apply function to each element.It returns array which allow us to perform opetation on array items.
     syntax:
     array_map(funtion_name,array_name);
     Example- */
     $number=range(1,10);
     function multi($num){
      return $num*2;
     }
     $arr=array_map("multi",$number);
     echo("<br>");
     print_r($arr);
     
     /*ii.array_filter() – Filter elements
     Example: filter even numbers from an array.*/
     $numbers = [1, 2, 3, 4, 5, 6];
     $evenNumbers = array_filter($numbers, function ($n) {
     return $n % 2 == 0;
     });
     print_r($evenNumbers);
     
     /*iii.array_reduce() – Reduce to single value
     Example: calculate sum of numbers */
     $numbers = [10, 20, 30];
     $total = array_reduce($numbers, function ($carry, $item) {
    return $carry + $item;
}, 0);
     echo $total;
     
    /* 8. KEYS AND VALUES
     i.array_keys() – Get all keys
     syntax-array_keys($arr);
     Example-*/
     print_r(array_keys($arr));
     echo("<br>");

     /*ii.array_values() – Get all values
     syntax-array_values($arr);
     Example-*/
     print_r(array_values($arr));
     echo("<br>");

    /* iii.array_flip() – Swap keys and values
     syntax-array_flip($arr);
     Example-*/
     $arr5=array_flip($arr4);
     print_r($arr5);
     echo("<br>");
     
    /*9. UNIQUE AND DIFFERENCE
     
     /*i.array_intersect() – Find common values
     - It returns array that contain common elements .
     syntax- array_intersect(arr1,arr2);
     Example-*/
     $course=["BCA","MCA","Mtech","Btech","Bsc"];
     $enroll=array("Bsc","Itm","IST","Civil","Mtech","Bsc");
     $common=array_intersect($course,$enroll);
     echo("<br>");
     print_r($common);
     
    /*ii.array_unique() – Remove duplicates
     -It returns an unique array elements.
     */
     echo("<br>");
     $uniq=array_unique($enroll);
     print_r($uniq);
     
    /*iii.array_diff() – Compare values
      - It returns an array elements that exist in 1st array but not in 2nd array.
      */
      echo("<br>");
     $newArray=array_diff($common,$enroll);
     print_r($newArray);
     
     //or
     /*6.array_intersect() - It takes two arrays as an arguments and return an array that contains common values of two arrays.
     syntax:
     array_intersect(array1,array2);
     Example:*/
     $days=array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
     $workingdays=array("Monday","Tuesday","Wednesday","Thursday","Friday");
     $weekendays=array("Sunday","Saturday");
     $newArray=array_intersect($days,$weekendays);
     print_r($newArray);
     $common=array_intersect($days,$weekendays,$workingdays);
     echo("<br>");
     print_r($common);
    
     /*7.array_diff() - It takes two arrays as an arguments and returns an array that contains items of 1st array which is not present in 2nd array.
     syntax:
     array_diff(arg1,arg2);
     Example: */
     $arr_diff=array_diff($common,$weekendays);
     print("<br>");
     print_r($arr_diff);
     $diff=array_diff($weekendays,$days,$workingdays);
     echo("<br>");
     print_r($diff);
    
     /*Most important functions
     i. count()
     ii. sort(), rsort(), asort(), ksort()
     iii. array_push(), array_pop()
     iv. array_merge()
     v.  array_slice()
     vii. array_map(), array_filter()
     viii. array_keys(), array_values()
   */
  ?>
</body>
</html>