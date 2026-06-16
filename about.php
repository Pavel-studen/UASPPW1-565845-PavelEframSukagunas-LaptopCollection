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
    <title>Laptop Collection - About Us</title>
</head>
<body>
    <?php include 'components/header.php'; ?>
    <div class="main">
        <div class="banner">
            <h1>about us</h1>
        </div>
        <div class="title2">
            <a href="home.php">home </a><span>about</span>
        </div>
        <div class="about-category">
            <div class="box">
                <img src="img/card1.jpg">
                <div class="detail">
                    <span>laptop</span>
                    <h1>Acer Aspire</h1>
                    <a href="view_products.php" class="btn">purchase now</a>
                </div>
            </div>
            <div class="box">
                <img src="img/card3.jpg">
                <div class="detail">
                    <span>laptop</span>
                    <h1>Lenovo IdeaPad</h1>
                    <a href="view_products.php" class="btn">purchase now</a>
                </div>
            </div>
            <div class="box">
                <img src="img/card5.png">
                <div class="detail">
                    <span>laptop</span>
                    <h1>Dell XPS</h1>
                    <a href="view_products.php" class="btn">purchase now</a>
                </div>
            </div>
        </div>
        <section class="services">
            <div class="title">
                <img src="img/logo2.png" class="logo">
                <h1>why choose us</h1>
                <p>Laptop Collection is one of the laptop showcase website which contains the detail information of laptop.</p>
            </div>
        </section>
        <div class="about">
            <div class="img-box">
                <img src="img/3.jpg">
            </div>
            <div class="detail">
                <h1>Visit our excellence showroom!</h1>
                <p>Our showroom is an expression of what we like doing; being creative with smart technology.
                    Whether you are looking for an electronic for your work, laptop can help.</p>
                <a href="view_products.php">purchase now</a>
            </div>
        </div>
        <div class="testimonial-container">
            <div class="title">
                <img src="img/logo2.png" class="logo">
                <h1>people's reviews</h1>
                <p>Here are some comments about our showcase website.</p>
            </div>
                <div class="container">
                    <div class="testimonial-item active">
                        <img src="img/01.jpg">
                        <h1>herry elton</h1>
                        <p>It is the best showroom website ever.</p>
                    </div>
                    <div class="testimonial-item">
                        <img src="img/02.jpg">
                        <h1>calvin ericson</h1>
                        <p>One of the unique showroom website is the detail information of laptop which includes the complete specification.</p>
                    </div>
                    <div class="testimonial-item">
                        <img src="img/03.webp">
                        <h1>molly walton</h1>
                        <p>Awesome website!</p>
                    </div>
                    <div class="left-arrow" onclick="nextSlide()"><i class="bx bxs-left-arrow-alt"></i></div>
                    <div class="right-arrow" onclick="prevSlide()"><i class="bx bxs-right-arrow-alt"></i></div>
                </div>
        </div>
        <?php include 'components/footer.php'; ?>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="script.js"></script>
    <?php include 'components/alert.php'; ?>
</body>
</html>