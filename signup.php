<?php

include 'conn.php';
include 'header.php';
include 'UserInfo.php';

if(isset($_POST['submit'])){
    $name  = $_POST['name'];
    $mail  = $_POST['mail'];
    $password  = $_POST['password'];

    if($_POST['password2'] == $password){
        $password = password_hash($password, PASSWORD_BCRYPT);
        mysqli_query($conn, 'INSERT INTO users(name, mail, password) VALUES("'.$name.'", "'.$mail.'", "'.$password.'")');
    }else{
        print('<center><h3 id="failed">the confirm password may to be same of password</h3></center>');
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="log.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="shortcut icon" href="imgs/logo.jpg" type="image/x-icon">
    <style>
        *{
    margin: 0;
    padding: 0;
}

.center{
    margin-top: 200px;
}

center .form{
    justify-content: center;
    align-items: center;
    background-color: black;
    width: 400px;
    grid: 10px;
    padding:8px;
}

#failed{
    color: red;
    margin: 0;
    padding:0;
}

input{
    border: 0;
    outline: none;
    padding: 10px;
}

input[type = 'text' i],
input[type = 'email' i],
input[type = 'password' i]{
    width:400px;
    margin: 8px;
}

input[type = 'submit' i]{}
    </style>
</head>
<body>
<center class='center'>
    <form class='form' method="post">
        <input type="text" placeholder='write user name' name='name'><br>
        <input type="email" placeholder='write email' name='mail'><br>
        <input type="password" placeholder='write password' name='password'><br>
        <input type="password" placeholder='confirm password' name='password2'><br>
        <input type="submit" value="REGISTER" name='submit'>
        <a href="#">have acount</a>
    </form>
</center>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>