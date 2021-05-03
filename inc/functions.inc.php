<?php
function emptyInputRegister($firstname,$lastname,$email,$password,$password2)
{
    $result=0;
    if(empty($firstname) || empty($lastname) || empty($email) || empty($password) || empty($password2) ){
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}


function emptyInputSignIn($email,$password)// user sign in
{
    $result=0;
    if(empty($email) || empty($password) ){
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}


function invalidEmail($email)// this is for invalid email
{
    $result=0;
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $result = false;
    }
    else {
        $result = true;
    }
    return $result;
}

function pwdNotMatch($password, $passwordRepeat)
{
    $result=0;
    if($password !== $passwordRepeat){
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function uidExists($conn, $email)
{
   $sql = "SELECT * FROM notes_users WHERE email= ?";
   $stmt = mysqli_stmt_init($conn);
   if (!mysqli_stmt_prepare($stmt,$sql)) {
    header("location: ../register.php?error=stmtfailedUidExists");
    exit();
   }
   mysqli_stmt_bind_param($stmt,"s",$email);
   mysqli_stmt_execute($stmt);

   $resultData=mysqli_stmt_get_result($stmt);
   if ($row = mysqli_fetch_assoc($resultData)) {
       return $row;
   }
   else {
       $result=false;
       return $result;
   }
}




// function signIn($con, $username, $password)
// {
//    $uidExists = uidExists($con,$username);
//
//    if ($uidExists === false) {
//        header("location:../login.php?error=wronglogin");
//        exit();
//    }
//
//
//     $hashPass= $uidExists["pwd"];
//     $checkPwd= password_verify($password,$hashPass);
//
//
//     if($checkPwd === false){
//         header("location:../login.php?error=invalidPass");
//        exit();
//     }elseif ($checkPwd === true) {
//         session_start();
//         $_SESSION["userId"]= $uidExists["credential_id"];
//         $_SESSION["username"]=$uidExists["username"];
//         $_SESSION["firstname"]=$uidExists["firstname"];
//         $_SESSION["lastName"]=$uidExists["lastname"];
//         header("location:../index.php");
//         exit();
//     }
// }




function register($conn,$email, $firstname,$lastname,$email,$password)
{
   $sql = "INSERT INTO notes_users (firstName, lastName, email, password) VALUES (?,?,?,?);";
   $stmt = mysqli_stmt_init($conn);

   if (!mysqli_stmt_prepare($stmt,$sql)) {
    header("location: ../register.php?error=stmtfailed");
    exit();
   }


   $hashPass =password_hash($password, PASSWORD_DEFAULT);
   mysqli_stmt_bind_param($stmt,"ssss", $firstname,$lastname,$email,$password);


   mysqli_stmt_execute($stmt);
   mysqli_stmt_close($stmt);
   header("location: ../register.php?error=none");
   exit();
}
function userUpdate($con,$firstname,$lastname,$email)
{
    $result=0;
    $userId = $_SESSION["userId"];
    if (uidExists($con,$username,$username)==true) {
        header("location: ../profile.php?error=usernameExists");
        exit();
    }
    $stmt = mysqli_stmt_init($con);
    $sql="UPDATE notes_users SET email= ? WHERE userId= ?;";
    if (!mysqli_stmt_prepare($stmt,$sql)) {
        header("location: ../profile.php?error=stmtfailed");
        exit();
       }
if (mysqli_stmt_execute($stmt)) {
    $result=true;
    echo mysqli_stmt_affected_rows($stmt) . " affected";
    mysqli_stmt_close($stmt);
} else {
    $result = false;
    echo mysqli_stmt_affected_rows($stmt) . "!affected";
    mysqli_stmt_close($stmt);
}

   return $result;

}
echo "string";
