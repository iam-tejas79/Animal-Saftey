<?php
$username = $_POST['username'];
$email = $_POST['email'];
$amount = $_POST['amount'];


include 'connect.php';

if ($con->connect_error) {
    die("failed to connect" . $con->connect_error);
} else {
    $x = $con->prepare("insert into amount (username,email,amount) values(?,?,?)");
    $x->bind_param("ssi", $username, $email, $amount);
    $x->execute();
    // echo "registration successfull";
    include "home.php";
    $x->close();
    $con->close();
}
?>