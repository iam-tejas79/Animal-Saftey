<?php
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];

include 'connect.php';

if ($con->connect_error) {
    die("failed to connect" . $con->connect_error);
} else {
    $x = $con->prepare("insert into login (username,password,email,mobile) values(?,?,?,?)");
    $x->bind_param("sssi", $username, $password, $email, $mobile);
    $x->execute();
    // echo "registration successfull";
    include "adminhome.php";
    $x->close();
    $con->close();
}
?>