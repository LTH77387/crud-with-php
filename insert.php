<?php
require_once('./db_connection.php');
$error='';
if(!$connect){
    die("query Fail") . mysqli_connect_error();
}
if(isset($_POST['submit'])){
    $taskName=$_POST['taskName'];
   if($_POST['taskName']==null){
       $error="Please Fill Out this field";
     
   }else{
    $query="INSERT INTO tasks (taskName) VALUES ('$taskName')";
    $result=mysqli_query($connect,$query);
    if(!$result){
        die("Query Fail");
    }
   }
 
   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Task</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-3">
          <a href="./read.php">  <button type="button" class="btn btn-secondary mb-3">Read</button></a>
                <div class="card">
                    <div class="card-header text-center">
                        <h1>Tasks</h1>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                        <label for="">Task Name :</label>
                     
                        <input type="text" name="taskName" id="" class="form-control">
                        <small class="text-danger"><?php echo $error ?></small><br>
                        <button  name="submit" class="btn btn-info float-end">Add</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>