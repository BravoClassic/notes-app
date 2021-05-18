<?php
session_start();
include_once 'db.inc.php';
include 'functions.inc.php';


$email = mysqli_real_escape_string($conn, $_POST["email"]);
$pwd = mysqli_real_escape_string($conn, $_POST["pwd"]);


if (!empty($email) || !empty($pwd)) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        if (!empty($pwd)) {
            login($conn, $email, $password);
            echo 'success';
        } else {
            echo "Enter a password!";
        }
    } else {
        echo "Enter a valid email address!";
    }
} else {
    echo 'Empty field(s). Enter valid data!';
}
