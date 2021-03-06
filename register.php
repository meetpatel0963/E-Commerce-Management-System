<?php

include('config/dbconnect.php');
if (isset($_POST['submit'])) {
    $email=$_POST['email'];
    $name=$_POST['name'];
    $pass=$_POST['pass'];
    $phone=$_POST['phone'];
    $sql="INSERT INTO customer(name,email,password,phone) values('$name','$email','$pass','$phone')";
    if(mysqli_query($conn,$sql))
    {
        $_SESSION['usrname']=$name;
        mysqli_close($conn);
        header('Location: index.php');
    }
    else{
        echo 'query error' . mysqli_error($conn);
    }
}

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/248e85b2ee.js" crossorigin="anonymous"></script>
    <title>Register</title>
    <style>
        body {
            text-align: center;
            background: #fff;
        }

        button {
            outline: none !important;
            background: transparent;
        }

        .main {
            display: flex;
            width: 660px;
            background-color: white;
            border-radius: 10px;
            border: 1px solid white;
            justify-content: space-between;
            padding: 100px 130px 33px 95px;
            margin: 40px auto;
            box-shadow: 0px 15px 17px 0.17px rgba(0, 0, 0, 0.05);
        }

        .left {
            width: 316px;

        }

        .right {
            margin-top: 30px;
            width: 290px;
        }

        .form-txt {
            font-family: 'Poppins', sans-serif;
            font-size: 24px;
            color: #333333;
            line-height: 1.2;
            text-align: center;
            width: 100%;
            display: block;
            padding-bottom: 54px;
            font-weight: bold;
        }

        .email,
        .name,
        .pass,
        .phone {
            position: relative;
            width: 100%;
            z-index: 1;
            margin-bottom: 10px;
        }

        .input {
            font-family: 'Poppins';
            font-size: 15px;
            line-height: 1.5;
            color: #666666;
            display: block;
            width: 100%;
            background: #e6e6e6;
            height: 50px;
            border: 1px solid white;
            border-radius: 25px;
            padding: 0 30px 0 68px;
        }

        .rounddiv {
            display: block;
            position: absolute;
            border-radius: 25px;
            bottom: 0;
            left: 0;
            z-index: -1;
            width: 100%;
            height: 100%;
            box-shadow: 0px 0px 0px 0px;
            color: rgba(87, 184, 70, 0.8);
        }

        .emaildiv {
            font-size: 15px;
            display: flex;
            align-items: center;
            position: absolute;
            border-radius: 25px;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            padding-left: 35px;
            color: #666666;
            pointer-events: none;
        }

        .register {
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding-top: 20px;
        }

        .register-btn {
            font-family: 'Montserrat', sans-serif;
            font-size: 15px;
            line-height: 1.5;
            color: #fff;
            width: 100%;
            height: 50px;
            font-weight: bold;
            border-radius: 25px;
            background: #57b846;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0 25px;
            border: 1px solid #57b846;
        }

        .register-btn:hover {
            background: #333333;
            border: 1px solid #333333;
        }

        .agree-term {
            display: inline-block;
            width: auto;
        }

        .label-agree-term {
            position: relative;
            top: 0%;
            transform: translateY(0);
        }

        .term-service {
            font-size: 13px;
            color: #222;
        }



        .txt1 {
            font-family: 'Poppins';
            font-size: 13px;
            line-height: 1.5;
            color: #999999;
            text-decoration: none;
            font-weight: bold;
        }

        .txt2 {
            font-family: 'Poppins';
            font-size: 13px;
            line-height: 1.5;
            color: #666666;
            text-decoration: none;
            font-weight: bold;
        }

        .account {
            text-align: center;
            padding-top: 70px;
        }
    </style>
</head>

<body>
    <div class="main">
        <form action="register.php" name="myform" class="left" method="POST">
            <span class="form-txt">Registration</span>
            <div class="name">
                <input class="input name1" type="text" name="name" placeholder="Name">
                <span class="rounddiv"></span>
                <span class="emaildiv">
                    <i class="fa fa-user" aria-hidden="true"></i>
                </span>
            </div>
            <div class="email">
                <input class="input email1" type="text" name="email" placeholder="Email">
                <span class="rounddiv"></span>
                <span class="emaildiv">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                </span>
            </div>
            <div class="pass" required>
                <input class="input pass1" type="password" name="pass" placeholder="Password">
                <span class="rounddiv"></span>
                <span class="emaildiv">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                </span>
            </div>
            <div class="phone">
                <input class="input phone1" type="text" name="phone" placeholder="Phone No">
                <span class="rounddiv"></span>
                <span class="emaildiv">
                    <i class="fa fa-phone-alt" aria-hidden="true"></i>
                </span>
            </div>
            <div class="form-group">
                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" required>
                <label for="agree-term" class="label-agree-term">
                    <span>
                        I agree all statements in
                        <a href="#" class="term-service">Terms of service</a>
                    </span>
                </label>
            </div>
            <div class="register">
                <input type="submit" class="register-btn" onclick="validate();" name="submit" value="Register"
                    style="text-decoration: none;color:black"></span>
            </div>
            <div class="account">
                <a class="txt2" href="login.php">
                    I am already member
                    <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                </a>
            </div>
        </form>

        <div class="right">
            <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
        </div>
    </div>
</body>

</html>