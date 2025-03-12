<?php 
    include './function.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="assets/style/theme.css">
</head>
<body>
    <div class="content-login">

        <form method="post" enctype="multipart/form-data">
        <?php 
            if( isset($_GET['message'])) {
                if ($_GET['message'] == 'fail') {
                    echo "<div class='fail-message my-3'>Fail to Register</div>";
                }
            } 
        ?>
            <label>Username</label>
            <input type="text" class="box" name="username">
            <label>Email</label>
            <input type="text" class="box" name="email">
            <label>Password</label>
            <input type="password" class="box" name="password">
            <input type="file" name="profile" class="box">
            <div class="wrap-btn">
                <a href="login.php" class="btn">Back To Login</a>&ensp;
                <input type="submit" class="btn" name="btn_register" value="SIGN UP">
            </div>
        </form>
    </div>
</body>
</html>