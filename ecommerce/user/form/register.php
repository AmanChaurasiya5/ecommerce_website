<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
</head>

<body>
    <div class="main-container" style="background-color:white">
        <div class="container ">
            <div class="row justify-content-center">
                <div class="col-md-6 mt-5 font-monospace border border-info my-5"
                    style="border-radius:15px; background-color:rgb(32, 32, 32);box-shadow:0px 0px 7px white,0px 0px 7px white;">
                    <p class="text-white fs-3 text-center fw-bold my-3">User Register</p>
                    <form class="form" action="insert.php" method="post">
                        <div class="mb-3">
                            <label for="" class="text-white">Username</label>
                            <input required type="text" name="Name" placeholder="Enter Your Name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="" class="text-white">Email</label>
                            <input required type="email" name="Email" placeholder="Enter Your Email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="" class="text-white">Phone Number</label>
                            <input required type="number" name="Number" placeholder="Enter Your Phone Number" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="" class="text-white">Password</label>
                            <input required type="password" name="Pass" placeholder="Enter Your Password" class="form-control">
                        </div>
                        <div class="mb-3 d-flex justify-content-center">
                            <button class="btn w-25 text-white" style="border-radius:15px; background-color:transparent;box-shadow:1px 1px 5px white,1px 1px 5px white;" name="submit">Register</button>
                        </div>
                        <div class="mb-3 d-flex justify-content-center">
                            <a href="login.php" class="btn w-50 bg-primary text-white" >Already Have Account?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>