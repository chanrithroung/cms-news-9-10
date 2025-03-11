<?php
    include './connection.php';

    // function register_user(){
    //     global $connection;

    //     if(isset($_POST['btn_register'])){
    //         $username   =   $_POST['username'];
    //         $email      =   $_POST['email'];
    //         $password   =   $_POST['password'];
    //         $profile    =   $_FILES['profile']['name'];

    //         if(!empty($username) && !empty($email) && !empty($password) && !empty($profile)){
    //             $thumbnail = date('YmdHis') .'-'. $profile;
    //             $path      = 'assets/image/'. $thumbnail;
    //             move_uploaded_file($_FILES['profile']['tmp_name'],$path);

    //             $password  = md5($password);

    //             $sql   =   "
    //                             INSERT INTO `tbuser`(`id`, `name`, `email`, `password`, `profile`)
    //                             VALUES (null,'$username','$email','$password','$thumbnail')
    //                         ";
            
    //             $result = $connection -> query($sql);

    //             if($result){
    //                 header('location: login.php');
    //             }
    //         }
    //     }
    // }
    // register_user();

    // function login_user(){
        
    //     global $connection;

    //     if(isset($_POST['btn_login'])){
    //         $name_email  =  $_POST['name_email'];
    //         $password    =  $_POST['password'];

    //         if(!empty($name_email) && !empty($password)){
    //             $password = md5($password);

    //             $sql_select = "
    //                                 SELECT * FROM `tbuser` WHERE (`name` = '$name_email' OR `email` = '$name_email') && `password` = '$password'
    //                           ";
    //             $result     =  $connection -> query($sql_select);

    //             if($result){
    //                 $row  =  mysqli_fetch_assoc($result);
    //                 $login_id = $row['id'];

    //                 session_start();
    //                 $_SESSION['id'] = $login_id;
    //                 header('location: index.php');
    //             }
                
    //         }

    //     }
    // }
    // login_user();
    session_start();
    function now() {
        return date('d-m-y');
    }

    function fileUploader($sourfile): string {
        $filename = rand(0,99999999).date('Y-m-d-h-i-s').'.'.pathinfo($sourfile['name'], PATHINFO_EXTENSION);
        move_uploaded_file( $sourfile['tmp_name'], './assets/image/'.$filename);
        return $filename;
    }


    function registerUser() {
        global $connection;
        
        if (isset($_POST['btn_register'])) {
            $username = $_POST['username'];
            $email    = $_POST['email'];
            $password = $_POST['password'];
            $sourceFile = $_FILES['profile'];

            if (!empty($username) and !empty($email) and !empty($password)) {
                echo "hello";
                $password = md5($password);
                $profile = fileUploader($sourceFile);
                $now = now();
                $insert_user = "
                    INSERT INTO `users`(`username`, `email`, `password`, `profile`, `created_at`)
                    VALUES ('$username', '$email', '$password', '$profile', '$now');
                ";
                $connection->query($insert_user);
                header("Location: login.php");
            } else {
                header("Location: register.php?message=fail");
            }
        }
    }
    registerUser();


    function login() {
        global $connection;

        if (isset($_POST['btn_login'])) {
            $username_email = $_POST['username_email'];
            $password = $_POST['password'];

            if (!empty($username_email) and !empty($password)) {
                $password = md5($password);

                $select_user = "
                    SELECT `id` FROM `users` WHERE 
                    (`username` = '$username_email' OR `email` = '$username_email') 
                    AND 
                    (`password` = '$password');
                ";

                $result = $connection->query($select_user);

                $user_id = mysqli_fetch_assoc($result);
                print_r($user_id);
                
                if(empty($user_id)) {
                    header("Location: login.php?message=Invalid Credentail");
                } else {
                    $_SESSION['user_id'] = $user_id['id'];
                    header('Location: index.php');
                }
            } 

        }
    }


    login();