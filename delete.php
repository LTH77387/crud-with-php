<?php
require_once('./db_connection.php');
$id=$_GET['id'];
$query="DELETE FROM tasks WHERE id=$id";
if(mysqli_query($connect,$query)){
header("location:./read.php");
}
?>