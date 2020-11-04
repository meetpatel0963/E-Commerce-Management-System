<?php
include('config/dbconnect.php');
$arr=array('nike','adidas','apple-watch','invicta','iphone','samsung','hp','mac','jbl');
if (isset($_POST['search'])) {
    $val=$_POST['search'];
    if ($val=='shoes') {
        $sql="SELECT * from product where pname='$val'";
        $result=mysqli_query($conn,$sql);
        $details= mysqli_fetch_all($result,MYSQLI_ASSOC);
        mysqli_free_result($result);
        mysqli_close($conn);
    }
    else if ($val=='watch') {
        $sql="SELECT * from product where pname='$val'";
        $result=mysqli_query($conn,$sql);
        $details= mysqli_fetch_all($result,MYSQLI_ASSOC);
        mysqli_free_result($result);
        mysqli_close($conn);
    }
    else if ($val=='mobile') {
        $sql="SELECT * from product where pname='$val'";
        $result=mysqli_query($conn,$sql);
        $details= mysqli_fetch_all($result,MYSQLI_ASSOC);
        mysqli_free_result($result);
        mysqli_close($conn);
    }
    else if ($val=='laptop') {
        $sql="SELECT * from product where pname='$val'";
        $result=mysqli_query($conn,$sql);
        $details= mysqli_fetch_all($result,MYSQLI_ASSOC);
        mysqli_free_result($result);
        mysqli_close($conn);
    }
    
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <script src="https://kit.fontawesome.com/248e85b2ee.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <style>
        .main {
            font-family: 'Poppins', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .list {
            text-decoration: none;
            list-style-type: none;
        }

        ul {
            text-transform: capitalize;
        }

        .inli {
            display: inline;
            line-height: 1.5;
        }

        .ulist {
            display: inline-block;  
            width: 400px;
            box-shadow: 0px 15px 17px 0.17px rgba(0, 0, 0, 0.1);
            padding-top: 15px;
            padding-bottom: 15px;
            padding-right: 50px;
            margin: auto 10px auto;
        }

        .dis-btn4 {
            font-family: "Roboto", sans-serif;
            width: 110px;
            display: block;
            background-color: white;
            color: #008ff0;
            text-decoration: none;
            text-transform: uppercase;
            font-size: 15px;
            font-weight: bold;
            border: 2px solid #008ff0;
            padding-top: 5px;
            padding-left: 10px;
            padding-bottom: 5px;
            padding-right: 10px;
            margin-top: 15px;
            border-radius: 5%;
            cursor: pointer;
            margin-left: auto;
            margin-right: auto;
        }

        .dis-btn4:hover {
            background-color: #008ff0;
            color: white;
            border-color: #008ff0;
        }
    </style>
</head>

<body class="main">
    <form action="transaction.php" method="POST">
    <?php foreach ($details as $detail ) { ?>
        <div class="ulist">
            <ul>
                <div class="list">
                    <h2 style="margin-left:150px;"><?php echo htmlspecialchars($detail['company']) ?> </h2><br>
                    <li>
                        <h3 class="inli">Product Id : </h3><?php echo htmlspecialchars($detail['pid']) ?>
                    </li>
                    <li>
                        <h3 class="inli">Description : </h3><?php echo htmlspecialchars($detail['description']) ?>
                    </li>
                    <li>
                        <h3 class="inli">Cost : </h3><?php echo htmlspecialchars($detail['sellprice']) ?>
                    </li>
                    <li>
                        <h3 class="inli">Quantity : </h3><?php echo htmlspecialchars($detail['quantity']) ?>
                    </li>
                    <br>
                    <?php

                        if ($detail['pid']=='P0001') {
                            $s=$arr[0];
                        }
                        else if ($detail['pid']=='P0001') {
                            $s=$arr[1];
                        }
                        else if ($detail['pid']=='P0001') {
                            $s=$arr[2];
                        }
                        else if ($detail['pid']=='P0001') {
                            $s=$arr[3];
                        }
                        else if ($detail['pid']=='P0001') {
                            $s=$arr[4];
                        }
                        else if ($detail['pid']=='P0001') {
                            $s=$arr[5];
                        }
                        else if ($detail['pid']=='P0001') {
                            $s=$arr[6];
                        }
                        else if ($detail['pid']=='P0001') {
                            $s=$arr[7];
                        }
                        else if ($detail['pid']=='P0001') {
                            $s=$arr[8];
                        }
                    ?>
                    <input name="<?php echo $s ?>" class="dis-btn4" value="Buy Now" type="submit">
                    
                </div>
            </ul>
        </div>
        <?php } ?>
    </form>
</body>

</html>