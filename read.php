<?php 
require_once('./db_connection.php');
if(!$connect){
    die("query Fail") . mysqli_connect_error();
}

// var_dump($totalRow);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Data</title>
</head>
<body>
    <a href="./insert.php"><button class="btn btn-sm bg-dark text-white mb-3">Insert Data Page </button></a>
<table class="table table-success table-striped">
  <thead>
      <th>ID</th>
      <th>Task Name</th>
      <th></th>
  </thead>
  <tbody>
      <?php
      $query="SELECT * FROM tasks";
      $result=mysqli_query($connect,$query);
      $totalRow=mysqli_num_rows($result);
      while($row=mysqli_fetch_assoc($result)){
          $id=$row['id'];
        $taskName=$row['taskName'];
        echo "
    <tr>
    <td>$id</td>
    <td>$taskName</td>    
    <td><a href='./update.php?id={$row['id']}'>Update</a> &nbsp; | &nbsp;
   <a href='./delete.php?id={$row['id']}'>Delete</a></td>
    
        ";
      }
       ?>
  

  </tbody>
</table>
</body>
</html>