<?php
    include 'components/connection.php';
    session_start();
    if (isset($_SESSION['id_user'])){
        $id_user = $_SESSION['id_user'];
    } else {
        $id_user = '';
    }
    $message = [];
    if (isset($_POST['submit'])){
        $email = $_POST['email'];
        $email = filter_var($email, FILTER_SANITIZE_STRING);
        $pass = $_POST['pass'];
        $pass = filter_var($pass, FILTER_SANITIZE_STRING);
        
        $select_user = $conn->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
        $select_user->execute([$email, $pass]);
        $row = $select_user->fetch(PDO::FETCH_ASSOC);

        if ($select_user->rowCount() > 0){
            $_SESSION['id_user'] = $row['id'];
            $_SESSION['user_name'] = $row['name'];
            $_SESSION['user_email'] = $row['email'];
            header('location: home.php');
        } else {
            $message[] = 'Incorrect username or password.';
        }
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
    <title>Laptop Collection - Login</title>
</head>
<body>
    <div class="main-container">
        <section class="form-container">
            <div class="title">
                <img src="img/logo2.png">
                <h1>Login</h1>
                <p>Please register your account before you move to our home website.</p>
            </div>
            <form action="" method="post">
                <div class="input-field">
                    <p>Email<sup>*</sup></p>
                    <input type="email" name="email" required placeholder="Enter your email" maxlength="50" 
                    oninput="this.value = this.value.replace(/\s/g, '')">
                </div>
                <div class="input-field">
                    <p>Password<sup>*</sup></p>
                    <input type="password" name="pass" required placeholder="Enter your password" maxlength="50"
                    oninput="this.value = this.value.replace(/\s/g, '')">
                </div>
                <input type="submit" name="submit" value="register now" class="btn">
                <p>Do not have an account? <a href="register.php">Register now</a></p>
            </form>
        </section>
    </div>
</body>
</html>