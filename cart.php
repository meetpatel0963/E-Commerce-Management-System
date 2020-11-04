<?php
include('config/dbconnect.php');
if (isset($_POST['nike'])) {
    $s='nike';
    $sql="SELECT * from product where pid='P0001'";
    $result=mysqli_query($conn,$sql);
    $details= mysqli_fetch_all($result,MYSQLI_ASSOC);
    mysqli_free_result($result);
    mysqli_close($conn);
 }
else if (isset($_POST['adidas'])) {
    $s='adidas';
    $sql="SELECT * from product where pid='P0002'";
    $result=mysqli_query($conn,$sql);
    $details= mysqli_fetch_all($result,MYSQLI_ASSOC);
    mysqli_free_result($result);
    mysqli_close($conn);
}
else if (isset($_POST['apple-watch'])) {
    $s='apple-watch';
    $sql="SELECT * from product where pid='P0003'";
    $result=mysqli_query($conn,$sql);
    $details= mysqli_fetch_all($result,MYSQLI_ASSOC);
    mysqli_free_result($result);
    mysqli_close($conn);
}

else if (isset($_POST['invicta'])) {
    $s='invicta';
    $sql="SELECT * from product where pid='P0004'";
    $result=mysqli_query($conn,$sql);
    $details= mysqli_fetch_all($result,MYSQLI_ASSOC);
    mysqli_free_result($result);
    mysqli_close($conn);
}
else if (isset($_POST['iphone'])) {
    $s='iphone';
    $sql="SELECT * from product where pid='P0005'";
    $result=mysqli_query($conn,$sql);
    $details= mysqli_fetch_all($result,MYSQLI_ASSOC);
    mysqli_free_result($result);
    mysqli_close($conn);
}
else if (isset($_POST['samsung'])) {
    $s='samsung';
    $sql="SELECT * from product where pid='P0006'";
    $result=mysqli_query($conn,$sql);
    $details= mysqli_fetch_all($result,MYSQLI_ASSOC);
    mysqli_free_result($result);
    mysqli_close($conn);
}
else if (isset($_POST['hp'])) {
    $s='hp';
    $sql="SELECT * from product where pid='P0007'";
    $result=mysqli_query($conn,$sql);
    $details= mysqli_fetch_all($result,MYSQLI_ASSOC);
    mysqli_free_result($result);
    mysqli_close($conn);
}
else if (isset($_POST['mac'])) {
    $s='mac';
    $sql="SELECT * from product where pid='P0008'";
    $result=mysqli_query($conn,$sql);
    $details= mysqli_fetch_all($result,MYSQLI_ASSOC);
    mysqli_free_result($result);
    mysqli_close($conn);
}

else if (isset($_POST['jbl'])) {
    $s='jbl';
    $sql="SELECT * from product where pid='P0009'";
    $result=mysqli_query($conn,$sql);
    $details= mysqli_fetch_all($result,MYSQLI_ASSOC);
    mysqli_free_result($result);
    mysqli_close($conn);
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
        .main{
            font-family: 'Poppins',sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .list{
            text-decoration: none;
            list-style-type: none;
        }
        ul{
            text-transform: capitalize;
        }
        .inli{
            display: inline;
            line-height: 1.5;
        }
        .ulist{
            width: 400px;
            box-shadow: 0px 15px 17px 0.17px rgba(0, 0, 0, 0.1);
            padding-top: 15px;
            padding-bottom: 15px;
            padding-right:50px; 
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
    <div class="ulist">
    <ul>
    <div class="list">
    <?php 
     foreach ($details as $detail ) {
    ?>
         <h2 style="margin-left:150px;"><?php echo htmlspecialchars($detail['company']) ?> </h2><br>
         <li><h3 class="inli">Product Id : </h3><?php echo htmlspecialchars($detail['pid']) ?> </li>
         <li><h3 class="inli">Description : </h3><?php echo htmlspecialchars($detail['description']) ?> </li>
         <li><h3 class="inli">Cost : </h3><?php echo htmlspecialchars($detail['sellprice']) ?> </li>
         <li><h3 class="inli">Quantity : </h3><?php echo htmlspecialchars($detail['quantity']) ?> </li>
         <br>
         <input name="<?php echo $s ?>" class="dis-btn4" value="Buy Now" type="submit">
    <?php 
    }
    ?>
    </div>
    </ul>
    </div>
    </form>
</body>
</html>