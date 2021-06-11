<?php
session_start();
include_once 'db.inc.php';
include 'functions.inc.php';


$email = mysqli_real_escape_string($conn, $_POST["emailLogin"]);
$pwd = mysqli_real_escape_string($conn, $_POST["pwdLogin"]);
if (!empty($email) || !empty($pwd)) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        if (!empty($pwd)) {
            login($conn, $email, $pwd);
        } else {
            echo "Enter a password!";
        }
    } else {
        echo "Enter a valid email address!";
    }
} else {
    echo 'Empty field(s). Enter valid data!';
}
