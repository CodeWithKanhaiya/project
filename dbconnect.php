<?php
$host="localhost";
$user="root";
$pass="";
$database="db1";
$con=mysqli_connect ($host,$user,$pass,$database);
if(!$con){
    die("connection not establiched".mysqli_error());

}/*
else {
    echo "connection is estabilshed";
    $sql="Insert into raj(name,email, mono,message) values('php','k@gmail.com','8303798653','he')";
}
    if(mysqli_query ($con,$sql)){
        echo "Data inserted successfully";
}
else 
{
    echo "some thing is wrong".mysqli_error ($con);
}*/