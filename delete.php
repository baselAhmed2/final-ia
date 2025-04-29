<?php
include('sign-connection.php');
$id=$_GET['id'];
$query="delete from product where id='$id'";
$del=mysqli_query($db,$query);
if($del){
    mysqli_close($db);
    header("location:home.php");
}
else{
    echo("error deleting records");
}
?>