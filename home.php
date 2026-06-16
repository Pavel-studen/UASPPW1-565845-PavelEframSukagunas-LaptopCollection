<?php
    include 'components/connection.php';
    session_start();
    if (isset($_SESSION['id_user'])){
        $id_user = $_SESSION['id_user'];
    } else {
        $id_user = '';
    }
    if (isset($_POST['logout'])){
        session_destroy();
        header("location: login.php");
    }
?>
<style type="text/css">
    <?php include 'style.css'; ?>
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Laptop Collection - Home</title>
</head>
<body>
    <?php include 'components/header.php'; ?>
    <div class="main">
        <section class="home-section">
            <div class="slider">
            <div class="slider__slider slide1">
                <div class="overlay"></div>
                <div class="slide-detail">
                    <h1>Welcome to the world of Laptop Collection</h1>
                    <p>Explore the nostalgy of laptop from 2000s until present.</p>
                    <a href="view_laptops.php" class="btn">purchase now</a>
                </div>
                <div class="hero-dec-top"></div>
                <div class="hero-dec-bottom"></div>
            </div>
            <div class="slider__slider slide2">
                <div class="overlay"></div>
                <div class="slide-detail">
                    <h1>Welcome to the world of Laptop Collection</h1>
                    <p>Explore the nostalgy of laptop from 2000s until present.</p>
                    <a href="view_laptops.php" class="btn">purchase now</a>
                </div>
                <div class="hero-dec-top"></div>
                <div class="hero-dec-bottom"></div>
            </div>
            <div class="slider__slider slide3">
                <div class="overlay"></div>
                <div class="slide-detail">
                    <h1>Welcome to the world of Laptop Collection</h1>
                    <p>Explore the nostalgy of laptop from 2000s until present.</p>
                    <a href="view_laptops.php" class="btn">purchase now</a>
                </div>
                <div class="hero-dec-top"></div>
                <div class="hero-dec-bottom"></div>
            </div>
            <div class="slider__slider slide4">
                <div class="overlay"></div>
                <div class="slide-detail">
                    <h1>Welcome to the world of Laptop Collection</h1>
                    <p>Explore the nostalgy of laptop from 2000s until present.</p>
                    <a href="view_laptops.php" class="btn">purchase now</a>
                </div>
                <div class="hero-dec-top"></div>
                <div class="hero-dec-bottom"></div>
            </div>
            <div class="slider__slider slide5">
                <div class="overlay"></div>
                <div class="slide-detail">
                    <h1>Welcome to the world of Laptop Collection</h1>
                    <p>Explore the nostalgy of laptop from 2000s until present.</p>
                    <a href="view_laptops.php" class="btn">purchase now</a>
                </div>
                <div class="hero-dec-top"></div>
                <div class="hero-dec-bottom"></div>
                </div>
                <div class="left-arrow"><i class="bx bxs-left-arrow"></i></div>
                <div class="right-arrow"><i class="bx bxs-right-arrow"></i></div>
            </div>
        </section>
        <section class="thumb">
            <div class="box-container">
                <div class="box">
                    <img src="img/thumb1.png">
                    <h3>Laptop 2000s</h3>
                    <p>Explore the old-style Laptop.</p>
                    <i class="bx bx-chevron-right"></i>
                </div>
                <div class="box">
                    <img src="img/thumb2.png">
                    <h3>Laptop 2010s</h3>
                    <p>Find the best performance of this laptop.</p>
                    <i class="bx bx-chevron-right"></i>
                </div>
                <div class="box">
                    <img src="img/thumb3.png">
                    <h3>Laptop 2020s</h3>
                    <p>Advance the multiple task using the modern laptop.</p>
                    <i class="bx bx-chevron-right"></i>
                </div>
            </div>
        </section>
        <section class="container">
            <div class="box-container">
                <div class="box">
                    <img src="img/about-us.jpg">
                </div>
                <div class="box">
                    <img src="img/icon.png">
                    <span>perfect laptop</span>
                    <h1>technology inspired</h1>
                    <p>Advance the multiple task using the modern laptop.</p>
                </div>
            </div>
        </section>
        <section class="store">
            <div class="title">
                <img src="img/icon.png">
                <h1>Trending Products</h1>
            </div>
            <div class="row">
                <img src="img/about.png">
                <div class="row-detail">
                    <img src="img/basil.webp">
                    <div class="top-footer">
                        <h1>Laptop brings you to improvize your work</h1>
                    </div>
                </div>
            </div>
            <div class="box-container">
                <div class="box">
                    <img src="img/card1.jpg">
                    <a href="view_products.php" class="btn">purchase now</a>
                </div>
                <div class="box">
                    <img src="img/card2.webp">
                    <a href="view_products.php" class="btn">purchase now</a>
                </div>
                <div class="box">
                    <img src="img/card3.webp">
                    <a href="view_products.php" class="btn">purchase now</a>
                </div>
                <div class="box">
                    <img src="img/card4.jpg">
                    <a href="view_products.php" class="btn">purchase now</a>
                </div>
                <div class="box">
                    <img src="img/card5.jpg">
                    <a href="view_products.php" class="btn">purchase now</a>
                </div>
            </div>
        </section>
        <section class="store-category">
            <div class="box-container">
                <div class="box">
                    <img src="img/">
                </div>
            </div>
        </section>
        <section class="brand">
            <div class="box-container">
                <div class="box">
                    <img src="img/brand1.jpg">
                </div>
                <div class="box">
                    <img src="img/brand2.png">
                </div>
                <div class="box">
                    <img src="img/brand3.jpg">
                </div>
                <div class="box">
                    <img src="img/brand4.png">
                </div>
                <div class="box">
                    <img src="img/brand5.png">
                </div>
            </div>
        </section>
        <?php include 'components/footer.php'; ?>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="script.js"></script>
    <?php include 'components/alert.php'; ?>
</body>
</html>