<?php
include('Connection.php');
?>
<br>
<table border="1px"cellpadding="10px"cellspacing="0">
  <tr>
    <th>Roll_no</th>
    <th>Name</th>
    <th>Gender</th>
    <th>Marks</th>
  </tr>
  
  <?php
  $query="select * from student;";
  $data=mysqli_query($conn,$query);
  $result=mysqli_num_rows($data);
  if(!$result){
    //echo('Display');
    while($row=mysqli_fetch_array($data)){
      ?>
      <tr>
        <td><?php echo($row['Roll_no']);?>
        </td>
        <td><?php echo($row['Name']);?>
        </td>
        <td><?php echo($row['Gender']);?>
        </td>
        <td><?php echo($row['Marks']);?>
        </td>
      </tr>
      <?php
    }
  }
  else{
    //echo('Record not found');
    ?>
    <tr>
    <td>No Record found</td>
    </tr>
    <?php
  }
  ?>
</table>