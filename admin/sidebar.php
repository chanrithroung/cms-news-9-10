<?php 
    include './function.php';
    session_start();
    if(!$_SESSION['user_id']){
        header('location: login.php');
    }
    $user_id = $_SESSION['user_id'];
    $sql     = "SELECT * FROM `users` WHERE `id` = '$user_id'";
    $result  = $connection -> query($sql);
    $row     = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Admin Dashboard</title>

    <!-- @theme style -->
    <link rel="stylesheet" href="assets/style/theme.css">

    <!-- @Bootstrap -->
    <link rel="stylesheet" href="assets/style/bootstrap.css">

    <!-- @script -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/bootstrap.js"></script>

    <!-- @tinyACE -->
    <script src="https://cdn.tiny.cloud/1/5gqcgv8u6c8ejg1eg27ziagpv8d8uricc4gc9rhkbasi2nc4/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

    <!-- @Bootstrap Icons Link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        .hightlight {
            display: block;
            background-color: rgba(30, 143, 255, 0.08) !important;
            color: dodgerblue !important;
            border-radius: 8px;
            width: fit-content;
            padding: 2px 12px;
        }
        .hightlight-yellow {
            display: block;
            background-color: rgba(255, 225, 30, 0.08) !important;
            color:rgb(235, 207, 30)  !important;
            border-radius: 8px;
            width: fit-content;
            padding: 2px 12px;
        }

        .title {
            width: 250px;
            text-wrap: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
    </style>
</head>
<body>
    <main class="admin">
        <div class="container-fluid">
            <div class="row">
                <div class="col-2">
                    <div class="content-left position-relative">
                        <div class="wrap-top">
                            <img src="./assets/image/<?php $row['profile'] ?>" alt="">
                            <h5>Jong Deng News</h5>
                        </div>
                        <div class="wrap-center">
                            <img src="./assets/image/<?php echo $row['profile']; ?>" style="width: 60px; height: 60px; object-fit: contain"  alt="Profile">
                            <h6>Welcome Admin <?php echo $row['username']; ?></h6>
                        </div>
                        <div class="wrap-bottom">
                            <ul>
                                <li class="parent">
                                    <a class="parent" href="javascript:void(0)">
                                        <span>Categories</span>
                                        <img src="assets/icon/arrow.png" alt="">
                                    </a>
                                    <ul class="child">
                                        <li>
                                            <a href="view-categories.php">View Category</a>
                                            <a href="add-category.php">Add Category</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="parent">
                                    <a class="parent" href="javascript:void(0)">
                                        <span>News</span>
                                        <img src="assets/icon/arrow.png" alt="">
                                    </a>
                                    <ul class="child">
                                        <li>
                                            <a href="view-news.php">View News</a>
                                            <a href="add-news.php">Add News</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="parent">
                                    <a class="parent" href="javascript:void(0)">
                                        <span>MAIN MENU</span>
                                        <img src="assets/icon/arrow.png" alt="">
                                    </a>
                                    <ul class="child">
                                        <li>
                                            <a href="1">View Post</a>
                                            <a href="1">Add New</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <a class="btn btn-danger logout-button" data-bs-toggle="modal" href="#exampleModalToggle" style="position: absolute; bottom: 30px; width: 90%" role="button"><i class="bi bi-box-arrow-right"></i> Logout</a>
                    </div>
                </div>







<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel">Are you sure you want to logout?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
        <a href="logout.php" class="btn btn-outline-danger">Confirm Logout</a>
      </div>
    </div>
  </div>
</div>