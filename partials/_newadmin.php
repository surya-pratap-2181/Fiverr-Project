<?php
$alert = false;
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    include "_dbconnect.php";
    $username = $_POST['username'];
    $password = $_POST['user_password'];
    $contact = $_POST['user_contact'];
    $email = $_POST['user_email'];
    $existSql = "SELECT * FROM `users` WHERE username = '$username'";
    $existResult = mysqli_query($conn, $existSql);
    if ($num = mysqli_num_rows($existResult) > 0) {
        header("location: /fiverr/newadmin.php?alert=1");
        exit();
    } else {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO `users` (`username`, `user_password`, `user_contact`, `user_email`, `user_role`) VALUES ('$username', '$hash', '$contact', '$email', '1')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $alert = true;
            header("location: /fiverr/home.php");
        } else {
            echo "something went wrong";
        }
    }
}