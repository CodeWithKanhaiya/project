<?php
include 'dbconnect.php';
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['createsubmit'])){
        $name= $_POST['name'] ? $_POST['name']: '';
        $email= $_POST['email'] ? $_POST['email']: '';
        $mono= $_POST['mono'] ? $_POST['mono']: '';
        $message= $_POST['message']? $_POST['message']: '';
        $sql="Insert into raj(name,email,mono,message)values('$name','$email','$mono','$message')";
        if(mysqli_query($con,$sql))
            header('Location:read.php? success=Record inserted succesfully.');
        
    
    else{
        echo mysqli_error($con);

    }
}
}