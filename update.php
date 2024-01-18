<?php
include 'dbconnect.php';
//for update
if(isset($_POST['update'])){
    $id =$_POST['id'] ? $_POST['id'] : '';
    $name =$_POST['name']?$_POST['name'] : '';
    $email =$_POST['email']?$_POST['email'] : '';
    $mono =$_POST['mono']?$_POST['mono'] : '';
    $message =$_POST['message']?$_POST['message'] : '';
    $sql="update raj set name='$name',email='$email',mono='$mono',message='$message' where id=$id";
    if(mysqli_query($con,$sql)){
        header('Location:read.php? success=Read Updated successfully');

    }
    else{
        echo mysquli_erroy();
    }
}
//GET
if(isset($_GET['id'])){
$id=$_GET['id'];
$selsql="select * from raj where id=$id";
$res=mysqli_query($con,$selsql);
if($res->num_rows > 0){
    while($row=$res->fetch_assoc()){
        $name=$row['name'];
        $email=$row['email'];
        $mono=$row['mono'];
        $message=$row['message'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
   <form action="<?php echo $_SERVER['PHP_SELF'];?>"method="POST">;
   <div class="field">
        <h1> Update Form</h1>
        </div>
   
         <input type="hidden"value="<?php echo $id;?>" name="id" class="input">
    <div class="field">
         Name: <input type="text"value="<?php echo $name;?>" name="name" class="input"><br>
   </div>
   <div class="field">
    Email:<input type ="text"value="<?php echo $email;?>" name="email" class="input"><br>
    </div>
    <div class="field">                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   
    Phone:<input type ="text"value="<?php echo $mono;?>" name="mono" class="input"><br>
    </div>
    <div class="field">
   message: <input type="text" value="<?php echo $message;?>"name="message" class="input"><br>
   </div>
   <div class="field">
    <input type="submit" value="update" name="update" class="input1">
    </div>
   </form>
</body>
</html>
 <?php
 }//else{
    //header('Location:read.php');
//}//?>