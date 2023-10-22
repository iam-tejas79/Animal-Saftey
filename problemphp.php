<?php
$username = $_POST['username'];
$complaint = $_POST['complaint'];


include 'connect.php';

if ($con->connect_error) {
    die("failed to connect" . $con->connect_error);
} else {
    $x = $con->prepare("insert into complaint (username,complaint) values(?,?)");
    $x->bind_param("ss", $username, $complaint);
    $x->execute();
    // echo "registration successfull";
    include "home.php";
    $x->close();
    $con->close();
}
?>