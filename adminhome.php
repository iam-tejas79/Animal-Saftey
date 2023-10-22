<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>


<body>
    <?php include 'adminheader.php'; ?>


    <div class="container-fluid py-5 bg-light">
        <div class="container my-5">
            <div class="row my-5 py-5">
                <div class="col-lg-4 col-md-6 col-sm-12 text-center one py-5 rounded-3">
                    <h3 class="text-info my-5">All Doctors at company <i class="bi bi-capsule"></i></h3>
                    <button class="btn btn-outline-info text-dark my-5"><a class="nav-link" aria-current="page"
                            href="admindoctor.php" style="color: black;">SEE ALL DOCTORS</a></button>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 text-center">
                    <div class="d-flex justify-content-center text-center">
                        <a href="registration.php">
                            <button class="btn btn-info  mt-5 py-5">+ Add doctor</button>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 text-center three py-5 rounded-3">
                    <h3 class="text-info my-5">All DONERS at company <i class="bi bi-capsule"></i></h3>
                    <button class="btn btn-outline-black btn-info text-dark my-5"><a class="nav-link"
                            aria-current="page" href="doners.php" style="color: black;">SEE ALL DONERS</a></button>
                </div>
            </div>
        </div>
    </div>


    <?php include 'adminfooter.php'; ?>

    <style>
    .one {
        background-image: url("./images/doctor.jpg");
        background-repeat: no-repeat;
        background-size: cover;
    }

    .three {
        background-image: url("./images/animalfood.jpg");
        background-repeat: no-repeat;
        background-size: cover;
    }
    </style>
</body>