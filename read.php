
<?php
include 'dbconnect.php';
$sql="select * from raj";
$result=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<script>
        window.setTimeout(()=>{
            document.getElementById('succesmessage').style.display='none';
        },2000);
        
</script>
        <?php
        if(isset($_GET['success'])){ ?>
        <h2 style=  "color:green;"id="succesmessage">
            <?php echo $_GET['success'];?>
            </h2> <?php }?>
        <a href="create.php"><button>Add Date</button></a>
   <table border="7"style="border:8px solid red">
    <tr>
        <th style="color:red;background:pink;padding:10px;padding:15px;">#Id</th>
        <th style="color:red;background:aqua;padding:10px;">Name</th>
        <th style="color:red;background:purple;padding:10px;">Email</th>
        <th style="color:red;background:skyblue;padding:10px;">Phone</th>
        <th style="color:red;background:tan;padding:10px;">Message</th>
        <th style="color:red;background:blue;padding:10px;">Action</th>
        <th style="color:red;background:purple;padding:10px;">delete</th>
    </tr>
    <?php 
        if($result->num_rows  > 0){
        while($row=$result-> fetch_assoc()){
        ?>
 
    <tr style="background:red; padding:20px;">
        <td style="background:red; padding:20px;"><?php echo $row['id']?></td>
        <td style="background:pink; padding:20px;"><?php echo $row['name']?></td>
        <td style="background:purple; padding:20px;"><?php echo $row['email']?></td>
        <td style="background:tan; padding:20px;"><?php echo $row['mono']?></td>
        <td style="background:skyblue; padding:20px;"><?php echo $row['message']?></td>
        <td style="background:aqua; padding:20px;"><a href="update.php ? id=<?php echo $row['id'];?>"></button>Edit</button></a>
        <td style="background:yellow; padding:20px;"><a href="delete.php ? id=<?php echo $row['id'];?>"></button>delete</button></a></td>
    </tr>
    <?php 
        }
     }
    ?>

   </table> 
</body>
</html>