<?php include 'header.php'; ?>


<h1 class="text-center"><span class="text-primary">User</span> Complaints</h1>
<div class="container-fluid d-flex justify-content-center my-5 py-5">

    <div class="container text-center">
        <form action="problemphp.php" method="post">
            <div class="input-group mb-3">
                <label for="username">
                    <h3>Enter <span class="text-primary">Full Name:</span></h3>
                </label>
                <input name="username" type="text" class="form-control mx-5" placeholder="username"
                    aria-label="Recipient's username" aria-describedby="basic-addon2">
            </div>
            <div class="input-group mb-3">
                <label for="complaint">
                    <h3>Enter <span class="text-primary">Complaint:</span></h3>
                </label>
                <input name="complaint" type="text" class="form-control mx-5 pass" placeholder="enter complaint"
                    aria-label="Recipient's username" aria-describedby="basic-addon2">
            </div>
            <button class="btn btn-success text-center" type="submit">SUBMIT</button>
        </form>
    </div>
</div>

<style>
.pass {
    height: 100px;
}
</style>




<?php include 'footer.php'; ?>