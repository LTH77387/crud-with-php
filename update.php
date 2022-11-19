<?php 
require("./db_connection.php");
if(isset($_GET['update'])){
    $taskId=$_GET['id'];
    $taskName=$_GET['taskName'];
        $queryUpdate="UPDATE tasks SET taskName='$taskName' WHERE id=$taskId";
        if(mysqli_query($connect,$queryUpdate)) {
            header("location:./read.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
</head>
<body>
<?php 
require_once('./db_connection.php');
$id=$_GET['id'];
$query="SELECT * FROM tasks WHERE id=$id";
$result=mysqli_query($connect,$query);
$data=mysqli_fetch_assoc($result);

?>  
<div class="container mt-3">
<div class="col-md-6 offset-3">
<div class="row">   
        <div class="card">
            <div class="card-header">
                <h1 class="text-center"></h1>
            </div>
            <div class="card-body">
            <form action="" method="get">
    <input type="hidden" name="id" class="form-control" value="<?php echo $data['id'] ?>">
    <label for="taskName">Task Name :</label>
    <input type="text" name="taskName" id="" class="form-control" value="<?php echo $data['taskName'] ?>" required>
    <button class="btn btn-sm bg-info float-end mt-3" name="update">Update</button>
</form>
            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>