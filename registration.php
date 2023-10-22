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

<body>
    <?php include 'adminheader.php'; ?>
    <div class="container">
        <div class="row">
            <div class="col-6 p-5">
                <div class="mt-5">
                    <img src="./images/medication.jpg" class="img-fluid rounded-3" alt="">
                </div>
            </div>
            <div class="col-6">
                <div class="d-flex justify-content-center m-5 p-5">
                    <form action="register.php" method="post">

                        <div class="input-group mb-3">
                            <label for="email">
                                <h3>Enter <span class="text-secondary"> email:</span></h3>
                            </label>
                            <input name="email" type="text" class="w-100  mx-4 form-control" placeholder="email"
                                aria-label="Recipient's username" aria-describedby="basic-addon2">
                        </div>
                        <div class="input-group mb-3">
                            <label for="username">
                                <h3>Enter <span class="text-secondary"> doctor name:</span></h3>
                            </label>
                            <input name="username" type="text" class=" w-100 mx-4 form-control" placeholder="username"
                                aria-label="Recipient's username" aria-describedby="basic-addon2">
                        </div>
                        <div class="input-group mb-3">
                            <label for="mobile">
                                <h3>Enter <span class="text-secondary"> mobile:</span></h3>
                            </label>
                            <input name="mobile" type="text" class="w-100 mx-4 form-control" placeholder="mobile"
                                aria-label="Recipient's username" aria-describedby="basic-addon2">
                        </div>
                        <div class="input-group mb-3">
                            <label for="password">
                                <h3>Enter <span class="text-secondary"> password:</span></h3>
                            </label>
                            <input name="password" type="password" class="w-100  mx-4 form-control"
                                placeholder="password" aria-label="Recipient's username"
                                aria-describedby="basic-addon2">
                        </div>
                        <button class="btn btn-success rounded-pill" type="submit">Register doctor</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include 'adminfooter.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>