<?php



function register($conn, $firstname, $lastname, $email, $password)
{
    // $hashPass = password_hash($password, PASSWORD_DEFAULT);
    $sql = mysqli_query($conn, "INSERT INTO notes_users (firstName, lastName, email, password) VALUES('{$firstname}','{$lastname}','{$email}','{$password}')");
    if ($sql) {
        $sql_query = mysqli_query($conn, "SELECT * FROM note_users WHERE email = '{$email}'");
        if (mysqli_num_rows($sql_query) > 0) {
            $row = mysqli_fetch_assoc($sql_query);
            $_SESSION['id'] = $row['id'];
            $_SESSION['fullname']=trim($row['firstName']. " ". $row['lastName']);
            $_SESSION['email']=$row['email'];
            $_SESSION['datejoined']=$row['dateTime'];
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
    $sql = mysqli_query($conn, "SELECT * FROM notes_users WHERE email = '{$email}' AND password ='{$password}'");
    if ($sql) {
        if (mysqli_num_rows($sql) > 0) {
            $row = mysqli_fetch_assoc($sql);
            $_SESSION['id'] = $row['id'];
            $_SESSION['fullname']=trim($row['firstName']. " ". $row['lastName']);
            $_SESSION['email']=$row['email'];
            $_SESSION['datejoined']=$row['dateTime'];
            echo 'success';
        }
    } else {
        echo 'User does not exist! Register to use app! :-)';
    }
}

function getNotes($conn,$id){
    $sql = mysqli_query($conn, "SELECT * FROM notes WHERE user_id = '{$id}'");
    if($sql){
        if(mysqli_num_rows($sql)>0){
            $_ResultSet=array();
            while($row = mysqli_fetch_assoc($sql)){
                $_ResultSet[] = $row;
            }
            echo json_encode($_ResultSet);
        }else if(mysqli_num_rows($sql)==0){
            echo 0;
        }else{
            echo 'Something went wrong! Please try again later!';
        }
    }
}

function getNote($conn,$user_id,$note_id){
    $sql = mysqli_query($conn,"SELECT * FROM notes WHERE user_id = '{$user_id}' AND note_id = '{$note_id}' ");
    if ($sql) {
        if(mysqli_num_rows($sql)>0){
            $_ResultSet=array();
            while($row = mysqli_fetch_assoc($sql)){
                $_ResultSet[] = $row;
            }
            echo json_encode($_ResultSet);
        }else if(mysqli_num_rows($sql)==0){
            echo "Note ID: {$note_id} not found!";
        }else{
            echo 'Something went wrong! Please try again later!';
        }
    }
}

function getfavnotes($conn,$user_id){
    $sql = mysqli_query($conn, "SELECT * FROM notes WHERE user_id = '{$user_id}' AND note_favourite = 1");
    if($sql){
        if(mysqli_num_rows($sql)>0){
            $_ResultSet=array();
            while($row = mysqli_fetch_assoc($sql)){
                $_ResultSet[] = $row;
            }
            echo json_encode($_ResultSet);
        }else if(mysqli_num_rows($sql)==0){
            echo 0;
        }else{
            echo 'Something went wrong! Please try again later!';
        }
    }
}

function createNotes($conn,$user_id, $title,$content,$fav){
    if($fav)
        $val = 1;
    else
        $val = 0;
    $sql = mysqli_query($conn,"INSERT INTO notes (user_id, note_title, note_content, note_favourite) VALUES('{$user_id}','{$title}','{$content}','{$val}')");
    if($sql){
        echo 'success';
    }else{
        echo 'errorr';
    }
}

function updateNote($conn,$note_id, $title,$content,$fav){
    $sql = mysqli_query($conn, "UPDATE notes set note_title = '{$title}' note_content='{$content}' note_favourite='{$fav}' where note_id = '{$id}'");
    if($sql){
        echo 'success';
    }else{
        echo 'error';
    }
}

function updateFav($conn,$id,$fav){
    $sql = mysqli_query($conn, "UPDATE notes set note_favourite='{$fav}' where user_id = '{$id}'");
    if($sql)
        echo 'success';
    else
        echo 'error';
}