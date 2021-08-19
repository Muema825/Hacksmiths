<?php
require_once("database.php");

if(isset($_POST['submit'])){

$email = $_POST["email"];
$password = $_POST["password"];

//$encpassword = encPasssword($password);
$sql = "SELECT * from tbl_users WHERE email ='$email' and password ='$password'";

$user_details = getData($sql);

if(mysqli_num_rows($user_details) > 0){
    $reg_user_id = mysqli_fetch_assoc($user_details)['user_id'];

    session_start();
    $_SESSION['user'] = getUserById($reg_user_id);

    if(in_array($_SESSION['user']['role_name'], ["Administrator"])){
        $_SESSION['message'] = "You are now logged in";
    header('Location:admin.php');
    exit(0);}
    else if(in_array($_SESSION['user']['role_name'], ["Author"])){
        $_SESSION['message'] = "You are now logged";
        header('Location:author.php');
        exit(0);}
    else if(in_array($_SESSION['user']['role_name'], ["Viewer"])){
        header('location:viewer.php');
        exit(0);
    }    
 }else {
    header('Location:index.html?error = Invalid email or password');
 }
}else{
    header("Location:index.html");
}


?>