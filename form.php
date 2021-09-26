<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style>
        .required {
            color: red;
            margin-left: 5px;
        }
    </style>
</head>
<!-- Form Methods : GET POST -->

<body>
    <form action="./welcome.php" method="POST">
        <input type="text" required name="username" placeholder="Username"><span class="required">*</span><br>
        <input type="password" name="password" placeholder="Password"><br>

        <input type="submit" value="Login">
    </form>
</body>

</html>