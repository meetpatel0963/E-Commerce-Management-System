<?php
session_start();
include('config/dbconnect.php');
if (!isset($_SESSION['usrid'])) {
    header('Location: login.php');
}
if (isset($_POST['nike'])) {
    $sql="SELECT * from product where pid='P0001'";
    $result=mysqli_query($conn,$sql);
    $details= mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    mysqli_close($conn);
 }
else if (isset($_POST['adidas'])) {
    $sql="SELECT * from product where pid='P0002'";
    $result=mysqli_query($conn,$sql);
    $details= mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    mysqli_close($conn);
}
else if (isset($_POST['apple-watch'])) {
    $sql="SELECT * from product where pid='P0003'";
    $result=mysqli_query($conn,$sql);
    $details= mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    mysqli_close($conn);
}

else if (isset($_POST['invicta'])) {
    $sql="SELECT * from product where pid='P0004'";
    $result=mysqli_query($conn,$sql);
    $details= mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    mysqli_close($conn);
}
else if (isset($_POST['iphone'])) {
    $sql="SELECT * from product where pid='P0005'";
    $result=mysqli_query($conn,$sql);
    $details= mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    mysqli_close($conn);
}
else if (isset($_POST['samsung'])) {
    $sql="SELECT * from product where pid='P0006'";
    $result=mysqli_query($conn,$sql);
    $details= mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    mysqli_close($conn);
}
else if (isset($_POST['hp'])) {
    $sql="SELECT * from product where pid='P0007'";
    $result=mysqli_query($conn,$sql);
    $details= mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    mysqli_close($conn);
}
else if (isset($_POST['mac'])) {
    $sql="SELECT * from product where pid='P0008'";
    $result=mysqli_query($conn,$sql);
    $details= mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    mysqli_close($conn);
}
else if (isset($_POST['jbl'])) {
    $sql="SELECT * from product where pid='P0009'";
    $result=mysqli_query($conn,$sql);
    $details= mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    mysqli_close($conn);
}
  if (isset($_POST['transaction'])) {
        $pay=$_POST['pay'];
        $ammount=$_POST['ammount'];
        $method=$_POST['method'];
        if ($pay>$ammount) {
            $pid=$_POST['pid'];
            $cid=$_SESSION['usrid'];
            $sql="INSERT INTO transaction(pid,cid,ammount,method,status) values('$pid','$cid','$ammount','$method','fullfill')";
            if(mysqli_query($conn,$sql))
            {
                $date=date("Y-m-d");
                $query = mysqli_query($conn,"SELECT MAX(tid) FROM `transaction`");
                $results = mysqli_fetch_array($query);
                $auto_id = $results['MAX(tid)'] + 1;
                $sql="INSERT INTO order1(pid,cid,tid,order_date,ammount) values('$pid','$cid','$auto_id','$date','$ammount')";
                if(!mysqli_query($conn,$sql))
                {
                    echo "Error";

                }
                mysqli_close($conn); 
                header('Location: index.php');
            }   
            
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
    <title>Transaction</title>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Montserrat:400,700);
        @import url(https://fonts.googleapis.com/css?family=Work+Sans);

        ::-webkit-scrollbar {
            display: none;
        }

        * {
            box-sizing: border-box;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            text-rendering: optimizeLegibility;
        }

        body {
            background-color: #fff;
        }

        .wrapper {
            width: 611px;
            height: 575px;
            margin: 90px auto 0;
        }

        .wrapper .container {
            float: right;
            width: 600px;
            height: 575px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 15px 17px 0.17px rgba(0, 0, 0, 0.2);
        }

        .wrapper .container .part {
            float: left;
            height: 100%;
        }

        .wrapper .container .part.card-details {
            padding: 48px 40px 0;
            width: 60%;
        }

        .wrapper .container .part.card-details h1 {
            background-color: #00b0ff;
            color: white;
            font-family: 'Montserrat', sans-serif;
            font-size: 12px;
            text-transform: uppercase;
            padding: 14px 0 10px 49px;
            letter-spacing: 1px;
            margin-left: -52px;
            width: 330px;
        }

        .wrapper .container .part.bg {
            width: 40%;
            background-image: url("https://s13.postimg.org/d8emjhccn/image.jpg");
            background-size: 121%;
            background-repeat: no-repeat;
            overflow: hidden;
            border-top-right-radius: 10px;
        }

        .wrapper .container form {
            font-family: 'Work Sans', sans-serif;
        }

        .wrapper .container form .group {
            display: block;
            width: 100%;
            float: left;
            position: relative;
            margin-bottom: 25px;
        }

        .wrapper .container form .group label {
            font-size: 13px;
            float: left;
            width: 100%;
            display: block;
            margin-bottom: 5px;
        }

        .wrapper .container form .group input {
            float: left;
            width: 100%;
            height: 30px;
            font-size: 18px;
            font-family: 'Work Sans', sans-serif;
            border: 0;
            color: #263238;
            border-bottom: 1px solid #d9d9d9;
        }

        .wrapper .container form .group input::placeholder {
            font-family: 'Work Sans', sans-serif;
            font-size: 14px;
            line-height: 20px;
            vertical-align: middle;
            color: #d9d9d9;
            text-align: left;
        }

        .wrapper .container form .group input:focus {
            outline: none;
            border-bottom-color: #00b0ff;
        }
       
        .wrapper .container form .group input:focus::placeholder {
            color: transparent;
        }

        .wrapper .container form .card-number {
            border-bottom: 1px solid #d9d9d9;
        }

        .wrapper .container form .card-number:first-of-type {
            margin-top: 32px;
        }

        .wrapper .container form .card-number input {
            width: 43px;
            border-bottom: 0;
        }

        .wrapper .container form .card-number.focused {
            border-bottom-color: #00b0ff;
        }

        .wrapper .container form .card-expiry {
            border-bottom: 0;
        }

        .wrapper .container form .card-expiry .input-item {
            float: left;
        }

        .wrapper .container form .card-expiry .input-item.expiry {
            width: 200px;
        }

        .wrapper .container form .card-expiry .input-item.expiry input:last-of-type {
            margin-left: 30px;
        }

        .wrapper .container form .card-expiry .input-item.csv {
            width: 80px;
            position: relative;
        }

        .wrapper .container form .card-expiry .input-item.csv a {
            display: block;
            position: absolute;
            top: 0;
            right: 0;
            font-size: 12px;
            text-decoration: none;
            color: #00b0ff;
        }

        .wrapper .container form .card-expiry .input-item.csv a:hover {
            color: #263238;
        }

        .wrapper .container form .card-expiry .input-item label {
            width: 100%;
        }

        .wrapper .container form .card-expiry .input-item input {
            border-bottom: 1px solid #d9d9d9;
            padding-bottom: 8px;
        }

        .wrapper .container form .card-expiry .input-item input.month {
            width: 60px;
        }

        .wrapper .container form .card-expiry .input-item input.year {
            width: 79px;
        }

        .wrapper .container form .card-expiry .input-item input.csv {
            width: 79px;
        }

        .wrapper .container form .card-expiry .input-item input:focus {
            border-bottom: 1px solid #00b0ff;
        }

        .wrapper .container form .submit-group {
            width: 100%;
            float: left;
            position: relative;
        }

        .wrapper .container form .submit {
            text-transform: uppercase;
            position: relative;
            border: none;
            background-color: transparent;
            font-size: 12px;
            line-height: 21px;
            letter-spacing: 1.4px;
            text-align: left;
            color: #263238;
            margin-left: 24px;
            cursor: pointer;
            font-weight: bold;
        }

        .wrapper .container form .submit:hover {
            text-decoration: underline;
        }

        .wrapper .container form .submit:focus {
            outline: none;
        }

        .wrapper .container form .arrow {
            position: absolute;
            top: -2px;
            left: -1px;
        }

        .wrapper .container form .arrow:before {
            content: '';
            width: 15px;
            height: 15px;
            background-image: url("https://s21.postimg.org/lgxvam5df/arrow.png");
            position: absolute;
            top: 4px;
            left: 0;
            transition: all 0.3s;
        }

        .wrapper .container form .arrow.rotate:before {
            transform: rotate(360deg);
        }

        .credits {
            display: block;
            font-family: 'Work Sans', sans-serif;
            position: absolute;
            right: 0;
            bottom: 0;
            color: #263238;
            font-size: 12px;
            margin: 0 10px 10px 0;
        }

        .credits a {
            opacity: 0.8;
            color: inherit;
            font-weight: 700;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="container">
            <article class="part card-details">
                <h1>
                    Credit Card Details
                </h1>
                <form action="transaction.php" autocomplete="off" method="POST">
                    <div class="group card-number">
                        <label for="first">Card Number</label>
                        <input type="text" id="first" class="cc-num" type="text" maxlength="4"
                            placeholder="&#9679;&#9679;&#9679;&#9679;">
                        <input type="text" id="second" class="cc-num" type="text" maxlength="4"
                            placeholder="&#9679;&#9679;&#9679;&#9679;">
                        <input type="text" id="third" class="cc-num" type="text" maxlength="4"
                            placeholder="&#9679;&#9679;&#9679;&#9679;">
                        <input type="text" id="fourth" class="cc-num" type="text" maxlength="4"
                            placeholder="&#9679;&#9679;&#9679;&#9679;">
                    </div>
                    <div class="group card-name">
                        <label for="name">Name On Card</label>
                        <input type="text" id="name" class="" type="text" maxlength="20" placeholder="Name Surname">
                    </div>
                    <div class="group card-name">
                        <label for="name">Ammount</label>
                        <input type="text" id="name" name="pay" class="" type="text" maxlength="20" placeholder="Ammount">
                    </div>
                    <div class="group card-name">
                        <label for="name">method</label>
                        <input type="text" id="name" name="method" class="" type="text" maxlength="20" placeholder="Ammount">
                    </div>
                    <div class="group card-expiry">
                        <div class="input-item expiry">
                            <label for="expiry">Expiry Date</label>
                            <input type="text" class="month" id="expiry" placeholder="02">
                            <input type="text" class="year" id="" placeholder="2017">
                        </div>
                        <div class="input-item csv">
                            <label for="csv">CSV No.</label><a href="#what">?</a>
                            <input type="text" class="csv">
                        </div>
                    </div>
                    <div class="grup submit-group">
                        <span class="arrow"></span>
                        <input type="hidden" name="pid" value="<?php echo htmlspecialchars($details['pid']) ?>">
                        <input type="hidden" name="ammount" value="<?php echo htmlspecialchars($details['sellprice']) ?>">
                        <input type="submit" class="submit" name="transaction" value="Continue to payment">
                    </div>
                </form>
            </article>
            <div class="part bg"></div>
        </div>
    </div>

</body>

</html>