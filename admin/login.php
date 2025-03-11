<?php 
    include './function.php';
    if(isset($_SESSION['user_id'])) {
        header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/style/theme.css">
</head>
<body>
    <div class="content-login">
        <form method="post">
            <?php 
                if (isset($_GET['message'])) {
                    echo '<div class="danger-message">'.$_GET['message'].'</div>';
                }
            ?>
            <label>Name or Email</label>
            <input type="text" class="box" name="username_email">
            <label>Password</label>
            <input type="password" class="box" name="password">
            <div class="wrap-btn">
                <a href="register.php" class="btn">Register?</a>&ensp;
                <input type="submit" class="btn" name="btn_login" value="LOGIN">
            </div>
        </form>
    </div>
</body>
</html>