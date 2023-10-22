<?php
include 'connect.php';
$query = "select * from login";
$run = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Delete Data From Database in PHP</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <header></header>
    <table border="1" cellspacing="0" cellpadding="0">
        <tr class="heading">
            <th>email</th>
            <th>username</th>
            <th>mobile</th>
            <th>Delete doctor</th>
        </tr>
        <?php
        $i = 1;
        if ($num = mysqli_num_rows($run) > 0) {
            while ($result = mysqli_fetch_assoc($run)) {
                echo "  
                          <tr class='data'>  
                               <td>" . $result['email'] . "</td>  
                               <td>" . $result['username'] . "</td>  
                               <td>" . $result['mobile'] . "</td>  
                               <td><a href='delete.php'>Delete</a></td>  
                          </tr>  
                     ";
            }
        }
        ?>
    </table>
</body>

</html>