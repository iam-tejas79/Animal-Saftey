<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body class="index">
    <h1 class="text-center my-5"><span class="text-primary">User</span> login</h1>
    <div class="container-fluid my-5 py-5 d-flex justify-content-center">

        <div class="container m-5 p-5">
            <form action="login.php" class="m-5 p-5 inner" method="post">
                <div class="input-group mb-3">
                    <label for="username">
                        <h3>Enter <span class="text-primary">username</span></h3>
                    </label>
                    <input name="username" type="text" class="form-control mx-5" placeholder="username"
                        aria-label="Recipient's username" aria-describedby="basic-addon2">
                </div>
                <div class="input-group mb-3">
                    <label for="password">
                        <h3>Enter <span class="text-primary">Password:</span></h3>
                    </label>
                    <input name="password" type="password" class="form-control mx-5" placeholder="password"
                        aria-label="Recipient's username" aria-describedby="basic-addon2">
                </div>
                <button class="btn btn-success rounded-pill" type="submit">Login</button>
                <button class="btn btn-info rounded-pill">
                    <a class="a" href="adminlogin.php">Admin Login</a>
                </button>
            </form>
        </div>
    </div>
    <div class="container-fluid bg-dark text-center mb-0 py-5 text-light">
        <i>Please <span class="text-info">login</span> for Smooth<span class="text-info"> experiance</span></i>
        <h2><i>5th semester miniproject-I</i></h2>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>
<style>
.index {
    background-image: url("./images/1.jpeg");
    /* transform: translateY(-100px); */
    /* transform: translateX(100px); */
    /* left: 30; */
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
}

.inner {
    transform: translateY(-100px);
}
</style>

</html>