<?php
    session_start();
    include('config/dbconnect.php');
    if (isset($_POST['submit'])) {
        $email=$_POST['email'];
        $sql="SELECT * from customer where email='$email'";
        $result=mysqli_query($conn,$sql);
        $detail= mysqli_fetch_assoc($result);
        mysqli_free_result($result);
        mysqli_close($conn);        
    
    if ($_POST['pass']==$detail['password'] && $detail['password']!="") {
        $_SESSION['usrname']=$detail['name'];
        $_SESSION['usrid']=$detail['cid'];
        header('Location: index.php');
    }
    else{
        echo "error";
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
    <title>log in</title>
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

        .email {
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

        .pass {
            position: relative;
            width: 100%;
            z-index: 1;
            margin-bottom: 10px;
        }

        .login {
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding-top: 20px;
        }

        .login-btn {
            font-family: 'Montserrat', sans-serif;
            font-size: 15px;
            line-height: 1.5;
            color: #fff;
            text-transform: uppercase;
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
            cursor: pointer;
        }

        .login-btn:hover {
            background: #333333;
            border: 1px solid #333333;
        }

        .forgot {
            text-align: center;
            padding-top: 12px;
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
        <div class="left">
            <figure><img src="images/signin-image.jpg" alt="sing up image"></figure>
        </div>
        <form action="login.php" class="right" method="POST">
            <span class="form-txt">Member Login</span>
            <div class="email" data-validate="Valid email is required: ex@abc.xyz">
                <input class="input" type="text" name="email" placeholder="Email">
                <span class="rounddiv"></span>
                <span class="emaildiv">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                </span>
            </div>
            <div class="pass validate-input" data-validate="Password is required">
                <input class="input" type="password" name="pass" placeholder="Password">
                <span class="rounddiv"></span>
                <span class="emaildiv">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                </span>
            </div>


            <div class="login">
                <input type="submit" class="login-btn" name="submit" value="Login"></span>
            </div>
            <div class="forgot">
                <span class="txt1">
                    Forgot
                </span>
                <a class="txt2" href="#">
                    Username / Password?
                </a>
            </div>
            <div class="account">
                <a class="txt2" href="register.html">
                    Create your Account
                    <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                </a>
            </div>
        </form>
    </div>
    </div>
</body>

</html>