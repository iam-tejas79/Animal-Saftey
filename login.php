<?php
$username = $_POST['username'];
$password = $_POST['password'];

include 'connect.php';
if ($con->connect_error) {
    die("failed to connect" . $con->connect_error);
} else {
    $x = $con->prepare("select * from login where username = ?");
    $x->bind_param("s", $username);
    $x->execute();
    $x_result = $x->get_result();
    if ($x_result->num_rows > 0) {
        $data = $x_result->fetch_assoc();
        if ($data['password'] == $password) {
            //  echo "<h2>Login Successfull</h2>";
            include 'home.php';
        } else {
            echo "<h2>Invalid username of password</h2>";
        }
    } else {
        echo "<h2>Invalid username of password</h2>";
    }
}
?>