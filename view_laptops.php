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
    <title>Laptop Collection - Showcase</title>
</head>
<body>
    <?php include 'components/header.php'; ?>
    <div class="main">
        <div class="banner">
            <h1>showcase</h1>
        </div>
        <div class="title2">
            <a href="home.php">home</a><span>/ our showcase</span>
        </div>
        <section class="laptops">
            <div class="box-container">
                <?php
                    $select_laptops = $conn->prepare("SELECT * FROM laptop");
                    $select_laptops->execute();
                    if ($select_laptops->rowCount() > 0){
                        while ($fetch_laptops = $select_laptops->fetch(PDO::FETCH_ASSOC)){

                        
                ?>
                <form action="" method="post" class="box">
                    <img src="image/<?=$fetch_laptops['image']; ?>" class="image">
                    <div class="button">
                        <button type="submit" name="add_to_basket"><i class="bx bx-basket"></i></button>
                        <a href="view_page.php?pid=<php echo $fetch_laptops['id']; ?>" class="bx bxs-show"></a>
                    </div>
                    <h3 class="name"><?=$fetch_laptops['name']; ?></h3>
                    <input type="hidden" name="id_laptop" value="<?=$fetch_laptops['id']; ?>">
                    <div class="flex">
                        <input type="number" name="quantity" required min="1" value="1" max="99" maxlength="2" class="quantity">
                    </div>
                    <a href="checkout.php?get_id=<?=$fetch_laptops['id']; ?>" class="btn">purchase now</a>
                </form>
                <?php
                        }
                    } else {
                        echo '<p class="empty">no laptops added yet</p>';
                    }
                ?>
            </div>
        </section>
        <?php include 'components/footer.php'; ?>
    </div>
</body>
</html>