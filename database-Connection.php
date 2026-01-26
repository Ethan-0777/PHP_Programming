<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>User_login</title>
</head>
<body>
<!--login page-->
<h1>Welcome to PHP:</h1>
<div class="form">
  <form method="POST">
    Username:
    <input type="text" name="name"required><br><br>
    Email:
    <input type="text" name="email"required><br><br>
    Password:
    <input type="password" name="pass"required><br><br>
<center>
    <input type="submit" name="sub">
    <input type="reset" name="reset">
</center>
    
  </form>
</div>
<!--php code-->
<?php
/*$conn=new mysqli('localhost:3306','root','root','users');
        OR  
        */
$conn=mysqli_connect('localhost:3306','root','root','My_db');
if(isset($_POST['sub'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $pass=$_POST['pass'];
  
  // query
  $query="INSERT INTO Login(username,email,password)VALUES('$name','$email','$pass');";
  // execute query
 $execute=mysqli_query($conn,$query);
 if($execute){
   //echo("Data inserted successfully !");
   ?>
   <script type="text/javascript">
     alert("Data saved successfully..")
   </script>
   <?php
 }
 else{
   //echo("Error!..");
   ?>
   <script type="text/javascript">
     alert("Failed to saved.Please try again !..");
   </script>
   <?php
 }
}
?>
</body>
</html>