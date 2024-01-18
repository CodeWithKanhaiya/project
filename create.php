<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <form action ="createpost.php" method="POST">
    <div class="field">
        <h1>Add Register Form</h1>
        </div>
        <div class="field">
        Name :<input type="text" name="name" required class="input"><br>
        </div>
        <div class="field">
        Email:<input type="text" name="email" required class="input"><br>
        </div>
        <div class="field">
        Phone:<input type="text" name="mono" required class="input"><br>
        </div>
        <div class="field">
        Message:<textarea name="message" required class="input"></textarea><br>
        </div>
        <div class="field">
        <input type="submit" name= "createsubmit" class="input1">
        </div>
    </form>
</body>
</html>