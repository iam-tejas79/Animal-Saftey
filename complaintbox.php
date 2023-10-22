<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Animal Safety !</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">


</head>

<body>
    <?php include 'connect.php'; ?>
    <?php include 'adminheader.php'; ?>
    <?php

    error_reporting(0);


    $query = "select * from complaint";
    $data = mysqli_query($con, $query);
    $total = mysqli_num_rows($data);
    // echo "$total";
    
    // echo $result['email'] . " " . $result['username'] . " " . $result['mobile'] . " " . $result['password'];
    if ($total != 0) {
    ?>
    <div class="mx-5 my-5 bg-light outline-dark text-center">
        <table class="table">
            <tr>
                <th>Sr no</th>
                <th>Full Name</th>
                <th>Complaint</th>
            </tr>

            <?php
        $x = 1;
        while ($result = mysqli_fetch_assoc($data)) {
            echo " <tr >
                <td>" . $x++ . "</td>
                <td>" . $result['username'] . "</td>
                <td>" . $result['complaint'] . "</td>
                </tr> ";
        }

    } else {
        echo "not having records";
    }
            ?>
        </table>
    </div>
    <?php include 'adminfooter.php'; ?>
</body>
<style>
a {
    color: white;
}

a:hover {
    color: white;
}
</style>

</html>