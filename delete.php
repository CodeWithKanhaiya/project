<?php
include 'dbconnect.php';
if(isset($_GET['id'])){
    $id=($_GET['id']);
    $sql="Delete from raj where id =$id";
    if(mysqli_query($con,$sql)){
        header('Location:read.php? success=Record Delete');
    }
    }
    else{
        header('Location:read.php');
    }

