<?php
    session_start();
    include('config/dbconnect.php');
    
?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Shopping</title>
    <script src="https://kit.fontawesome.com/248e85b2ee.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style2.css">
    <style>
        .dis-btn3 {
            font-family: "Roboto", sans-serif;
            width: 130px;
            display: block;
            color: #f21798;
            background-color: transparent;
            font-size: 15px;
            text-decoration: none;
            text-transform: uppercase;
            border: 2px solid #f21798;
            padding-top: 10px;
            padding-left: 15px;
            padding-bottom: 10px;
            padding-right: 15px;
            margin-top: 100px;
            font-weight: 900;
            border-radius: 5%;
            cursor: pointer;
        }

        .dis-btn4 {
            font-family: "Roboto", sans-serif;
            width: 130px;
            display: block;
            background-color: white;
            color: #008ff0;
            text-decoration: none;
            text-transform: uppercase;
            font-size: 15px;
            font-weight: bold;
            border: 2px solid #008ff0;
            padding-top: 10px;
            padding-left: 15px;
            padding-bottom: 10px;
            padding-right: 15px;
            margin-top: 15px;
            border-radius: 5%;
            cursor: pointer;
        }

        .dis-btn3:hover {
            background-color: #f21798;
            border-color: #f21798;
            color: white;
        }

        .dis-btn4:hover {
            background-color: #008ff0;
            color: white;
            border-color: #008ff0;
        }

        .background {
            height: 150px;
            font-family: "Roboto", sans-serif;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .nav-drop select {
            width: auto;
        }

        .write {
            font-family: "Roboto", sans-serif;
            color: white;
            margin-left: auto;
            margin-right: auto;
            margin-top: 40px;
            width: 200px;
            font-size: 12px;
            font-weight: bold;
            text-align: center;
        }

        .searchButton {
            width: 40px;
            height: 36px;
            border: 1px solid #fff;
            background: #fff;
            text-align: center;
            color: #fff;
            border-radius: 0 5px 5px 0;
            cursor: pointer;
            font-size: 20px;
            outline: none;
        }
    </style>
</head>

<body>
    <form id="store" action="" method="POST">
        <div class="nav-bar">
            <a href="#"><i class="fas fa-home home" style="margin-left: 20px;"></i></a>
            <i class="fas fa-info-circle" style="margin-left: 30px;"></i>
            <i class="fas fa-phone" style="margin-left: 30px;"></i>
            <div class="nav-drop" style="text-align: center;margin-left:300px;">
                <select name="search" id="storeID">
                    <option value="">All</option>
                    <option value="shoes"> shoes</option>
                    <option value="watch">watch</option>
                    <option value="mobile">mobile</option>
                    <option value="laptop">laptop</option>
                    <option value="Headphones">Headphones</option>
                </select>
            </div>
            <input class="nav-search" name="search" type="text" placeholder="Search">
            <button formaction="search.php" type="submit" class="searchButton">
                <i class="fas fa-search"></i>
            </button>
            <?php
            if (isset($_SESSION['usrname'])) {?>
            <span class="nav-reg">
                <a href="register.php" style="text-decoration: none;color:black">
                    <?php echo htmlspecialchars($_SESSION['usrname']) ?> </a>
            </span>
            <?php }else{?>
            <span class="nav-reg">
                <a href="register.php" style="text-decoration: none;color:black">
                    Register</a></span>
            <span class="nav-sign">
                <a href="login.php" style="text-decoration: none;color:black">
                    Sign in</a></span>
            <?php } ?>
        </div>
    </form>
    <div class="discount">
        <div class="dis-heading">
            <h1>Shop With Us</h1>
            <a href="#" class="dis-btn1">Shop
                Now</a>
            <a href="#" class="dis-btn2">Club Membership</a>
        </div>
    </div>
    <form action="cart.php" method="POST">
        <div class="wrapper">
            <ul class="stage clearfix">
                <li class="scene">
                    <div class="movie" onclick="return true">
                        <div class="poster">
                            <div class="background">
                                <h2>Nike Shoes</h2>
                            </div>
                            <div class="write">
                                <h2>Price : 9999</h2>
                            </div>
                        </div>
                        <div class="info">
                            <div class="card">
                                <input formaction="cart.php" name="nike" class="dis-btn3" value="More Info"
                                    type="submit">
                                <input formaction="transaction.php" name="nike" class="dis-btn4" value="Buy Now"
                                    type="submit">
                            </div>
                        </div>
                    </div>
                </li>

                <li class="scene">
                    <div class="movie" onclick="return true">
                        <div class="poster">
                            <div class="background">
                                <h2>Adidas Shoes</h2>
                            </div>
                            <div class="write">
                                <h2>Price : 7599</h2>
                            </div>
                        </div>
                        <div class="info">
                            <div class="card">
                                <input formaction="cart.php" name="adidas" class="dis-btn3" value="More Info"
                                    type="submit">
                                <input formaction="transaction.php" name="adidas" class="dis-btn4" value="Buy Now"
                                    type="submit">
                            </div>
                        </div>
                    </div>
                </li>

                <li class="scene">
                    <div class="movie" onclick="return true">
                        <div class="poster">
                            <div class="background">
                                <h2>Apple Watch</h2>
                            </div>
                            <div class="write">
                                <h2>Price : 59499</h2>
                            </div>
                        </div>
                        <div class="info">
                            <div class="card">
                                <input formaction="cart.php" name="apple-watch" class="dis-btn3" value="More Info"
                                    type="submit">
                                <input formaction="transaction.php" name="apple-watch" class="dis-btn4" value="Buy Now"
                                    type="submit">
                            </div>
                        </div>
                    </div>
                </li>

            </ul>
        </div>
        <div class="wrapper">
            <ul class="stage clearfix">
                <li class="scene">
                    <div class="movie" onclick="return true">
                        <div class="poster">
                            <div class="background">
                                <h2>Invicta Watch</h2>
                            </div>
                            <div class="write">
                                <h2>Price : 6999</h2>
                            </div>
                        </div>
                        <div class="info">
                            <div class="card">
                                <input formaction="cart.php" name="invicta" class="dis-btn3" value="More Info"
                                    type="submit">
                                <input formaction="transaction.php" name="invicta" class="dis-btn4" value="Buy Now"
                                    type="submit">
                            </div>
                        </div>
                    </div>
                </li>

                <li class="scene">
                    <div class="movie" onclick="return true">
                        <div class="poster">
                            <div class="background">
                                <h2>iPhone 11 Pro</h2>
                            </div>
                            <div class="write">
                                <h2>Price : 149999</h2>
                            </div>

                        </div>
                        <div class="info">
                            <div class="card">
                                <input formaction="cart.php" name="iphone" class="dis-btn3" value="More Info"
                                    type="submit">
                                <input formaction="transaction.php" name="iphone" class="dis-btn4" value="Buy Now"
                                    type="submit">
                            </div>
                        </div>
                    </div>
                </li>

                <li class="scene">
                    <div class="movie" onclick="return true">
                        <div class="poster">
                            <div class="background">
                                <h2>Samsung Galaxy Z Flip</h2>
                            </div>
                            <div class="write">
                                <h2>Price : 137999</h2>
                            </div>

                        </div>
                        <div class="info">
                            <div class="card">
                                <input formaction="cart.php" name="samsung" class="dis-btn3" value="More Info"
                                    type="submit">
                                <input formaction="transaction.php" name="samsung" class="dis-btn4" value="Buy Now"
                                    type="submit">
                            </div>
                        </div>
                    </div>
                </li>

            </ul>
        </div>
        <div class="wrapper">
            <ul class="stage clearfix">
                <li class="scene">
                    <div class="movie" onclick="return true">
                        <div class="poster">
                            <div class="background">
                                <h2>HP Spectre x360</h2>
                            </div>
                            <div class="write">
                                <h2>Price : 159999</h2>
                            </div>

                        </div>
                        <div class="info">
                            <div class="card">
                                <input formaction="cart.php" name="hp" class="dis-btn3" value="More Info" type="submit">
                                <input formaction="transaction.php" name="hp" class="dis-btn4" value="Buy Now"
                                    type="submit">
                            </div>
                        </div>
                    </div>
                </li>

                <li class="scene">
                    <div class="movie" onclick="return true">
                        <div class="poster">
                            <div class="background">
                                <h2>Apple MacBook Pro</h2>
                            </div>
                            <div class="write">
                                <h2>Price : 144900</h2>
                            </div>

                        </div>
                        <div class="info">
                            <div class="card">
                                <input formaction="cart.php" name="mac" class="dis-btn3" value="More Info"
                                    type="submit">
                                <input formaction="transaction.php" name="mac" class="dis-btn4" value="Buy Now"
                                    type="submit">
                            </div>
                        </div>
                    </div>
                </li>

                <li class="scene">
                    <div class="movie" onclick="return true">
                        <div class="poster">
                            <div class="background">
                                <h2>JBL Live 650 BT NC</h2>
                            </div>
                            <div class="write">
                                <h2>Price : 12389</h2>
                            </div>

                        </div>
                        <div class="info">
                            <div class="card">
                                <input formaction="cart.php" name="jbl" class="dis-btn3" value="More Info"
                                    type="submit">
                                <input formaction="transaction.php" name="jbl" class="dis-btn4" value="Buy Now"
                                    type="submit">
                            </div>
                        </div>
                    </div>
                </li>

            </ul>
        </div>
    </form>
    <footer>

    </footer>

</body>
<script>
    document.getElementById('store').storeID.onchange = function () {
        var newaction = 'search.php';
        document.getElementById('store').action = newaction;
    };
</script>

</html>