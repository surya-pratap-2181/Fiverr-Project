<?php
$alert = false;
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    include "_dbconnect.php";
    $username = $_POST['username'];
    $password = $_POST['user_password'];
    $sql = "SELECT * FROM `users` WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            if (password_verify($password, $row['user_password'])) {

                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['email'] = $row['email'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['contact'] = $row['user_contact'];
                $_SESSION['role'] = $row['user_role'];
                header("Location: /fiverr/home.php");
            } else {
                header("Location: /fiverr/index.php?error=1");
            }
        }
    } else {
        header("Location: /fiverr/index.php?error=1");
    }
}