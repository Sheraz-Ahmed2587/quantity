<?php
session_start();
require_once("database.php");
$db = db::open();
$datee = date("d-m-Y");

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "SELECT * FROM user WHERE email='$email' AND password='$password'";
    $rec = db::getRecord($query);

    if ($rec != NULL) {
        $_SESSION['uid'] = $rec['id']; // Store the email in the session
        header('Location: dashboard.php');
        exit();
    } else {
        echo "<script>alert('Invalid Username or Password!')</script>";
        echo "<script>location='index.php'</script>";
        exit();
    }
}
// update_profile
if (isset($_POST['update_profile'])) {
    require_once("database.php");

    $firstname = $db->real_escape_string($_POST['firstname']);
    $email = $db->real_escape_string($_POST['email']);
    $password = $db->real_escape_string($_POST['password']);
    $id = $db->real_escape_string($_POST['id']);

    $sql = "UPDATE `user` SET `firstname`='$firstname', `email`='$email', `password`='$password' WHERE `id`='$id'";
    $result = db::query($sql);

    if ($result) {
        echo "<script>alert('Profile updated successfully!')</script>";
        echo "<script>location='profile.php'</script>";
        exit();
    } else {
        echo "<script>alert('Error updating profile. Please try again.')</script>";
        echo "<script>location='profile.php'</script>";
        exit();
    }
}
//logout
if (isset($_GET['logout'])) {
    unset($_SESSION['email']);
    echo "<script>location='index.php'</script>";
}
