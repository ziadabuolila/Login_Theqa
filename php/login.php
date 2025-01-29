<?php
    require('../inc/config.php');

    session_start();

    if (isset($_POST['submit'])) {
        $mail = $_POST['mail'];
        $password = $_POST['password'];
    
        $select = mysqli_query($conection, "SELECT * FROM users WHERE user_email=$mail AND user_password=$password");
        $data = mysqli_fetch_array($select);
    
        if (mysqli_num_rows($select) == $data['user_id']){
            $_SESSION['username'] = $username;
            header( 'Location: ../index.php');
            exit();
        } else {
            $error = "اسم المستخدم أو كلمة المرور غير صحيحة";
            echo "<script>alert('$error');</script>";
        }
    }
?>