<?php



function register($conn, $firstname, $lastname, $email, $password)
{
    $hashPass = password_hash($password, PASSWORD_DEFAULT);
    $sql = mysqli_query($conn, "INSERT INTO notes_users (firstName, lastName, email, password) VALUES('{$firstname}','{$lastname}','{$email}','{$hashPass}')");
    if ($sql) {
        $sql_query = mysqli_query($conn, "SELECT * FROM note_users WHERE email = '{$email}'");
        if (mysqli_num_rows($sql_query) > 0) {
            $row = mysqli_fetch_assoc($sql_query);
            $SESSION['id'] = $row['id'];
            echo 'success';
        }
    } else {
        echo "There was an internal error. Please try again later!";
    }
}

function emailExists($conn, $email)
{
    $sql_query = mysqli_query($conn, "SELECT * FROM notes_users WHERE email = '{$email}'");
    if (mysqli_num_rows($sql_query) > 0) {
        return true;
    } else {
        return false;
    }
}


function login($conn, $email, $password)
{
    $sql = mysqli_query($conn, "SELECT * FROM note_users WHERE email = '{$email}' AND '{$password}'");
    if ($sql) {
        if (mysqli_num_rows($sql) > 0) {
            $row = mysqli_fetch_assoc($sql);
            $SESSION['id'] = $row['id'];
            echo 'success';
        }
    } else {
        echo 'Internal error while connecting to the database! Please try again later!';
    }
}
