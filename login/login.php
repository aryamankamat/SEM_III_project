<?php

session_start();

include("connection.php");
include("function.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    //something was posted
    $user_name = $_POST['uname'];
    $password = $_POST['upass'];

    if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {
        //read from the database.

        $query = "Select * from users where user_name = '$user_name' limit 1";

        $result = mysqli_query($con, $query);

        if ($result) {

            if ($result && mysqli_num_rows($result) > 0) {
                $user_data = mysqli_fetch_assoc($result);
                if ($user_data['password'] === $password) {

                    $_SESSION['user_id'] = $user_data['user_id'];
                    header("Location: index.php");
                    die;
                }
            }
        }

        echo "Wrong Username or password!!!";
    } else {
        echo "Wrong Username or password!!!";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background: black;
            /* background: url("/img/.jpg") no-repeat; */
            background-size: cover;
            background-position: center;
            font-family: sans-serif;
        }

        .loginbox {
            width: 320px;
            height: 420px;
            background: yellow;
            color: #fff;
            top: 50%;
            left: 50%;
            position: absolute;
            transform: translate(-50%, -50%);
            box-sizing: border-box;
            padding: 70px 30px;
        }

        .billy {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            position: absolute;
            top: -50px;
            left: calc(50% - 50px);
        }

        h1 {
            margin: 0;
            padding: 0 0 20px;
            text-align: center;
            font-size: 22px;
        }


        .loginbox p {
            margin: 0;
            padding: 0;
            font-weight: bold;
        }

        .loginbox input {
            width: 100%;
            margin-bottom: 20px;
        }


        .loginbox input[type="text"],
        input[type="password"] {
            border: none;
            border-bottom: 1px solid #fff;
            background: transparent;
            outline: none;
            height: 40px;
            font-size: 16px;
        }


        .loginbox input[type="submit"] {
            border: none;
            outline: none;
            height: 40px;
            background: #36111f;
            color: #fff;
            font-size: 18px;
            border-radius: 20px;
        }


        .loginbox input[type="submit"]:hover {
            cursor: pointer;
            background: #fff;
            color: #000;
        }
    </style>
</head>

<body>

    <div class="loginbox">
        <img src="/img/Logo.PNG" class="billy">
        <h1>Login Here</h1>
        <form action="" method="POST">
            <p>Username</p>
            <input type="text" name="uname" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="upass" placeholder="Enter Password">
            <input type="submit" name="btn1" value="Login">
            <a href="signup.php">Create account?</a>
        </form>
    </div>
</body>

</html>