 <?php
  $con=mysqli_connect('localhost:3306','root','root','studentdb');
 //or
 /*
 $host='0.0.0.0';
 $user='root';
 $password='root';
 
 $con=mysql_connect($host,$user,$password);
 mysqli_select_db($con,'dbname');
 */
 //to check connection
  
  if(!$con)
  {
    echo('error!!');
  }
  else{
    echo('Connected..');
  }
  
  //getting data from html
  if(isset($_POST['sb'])){
    $roll=$_POST['Roll'];
    $name=$_POST['sname'];
    $gen=$_POST['gender'];
    $marks=$_POST['mark'];
    
    //mysqli_query
    $sql = "INSERT INTO student (Roll_no,Name, Gender, Marks) values ('$roll','$name','$gen','$marks');";
    
    //execute mysqli_query
    $run=mysqli_query($con,$sql);
    
    //to check insertion
    if($run)
    {
      echo('data inserted successfully !');
    }
    else{
      echo('Error!!!');
    }
  }
  ?>