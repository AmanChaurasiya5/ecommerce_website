<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet"/>
</head>

<?php 
session_start();
if(!$_SESSION['admin']){
    header("location:form/login.php");
}?>

<body>
    <nav class="navbar bg-danger py-2 navbar-light">
        <div class="container-fluid text-white">
            <a class="navbar-brand">
                <h2 class=" text-white">MyStore</h2>
            </a>

            <span><i class="ri-admin-fill"></i>Hello, <?php echo $_SESSION['admin']; ?>
                <i class="ri-logout-box-r-line"></i>
                <a href="form/logout.php" class="text-decoration-none text-white">Logout</a>
                <a href="" class="text-decoration-none text-white">Userpanel</a>
            </span>

        </div>
    </nav>

    <div>
        <h3 class="text-center my-2">Dashboard</h3>
        
    </div>

    <div class=" col-md-6 bg-success text-center m-auto py-1">
        <a href="product/index.php" class="mx-5 fs-4 text-white text-decoration-none fw-bold">Add Post</a>
        <a href="user.php" class="mx-5 fs-4 text-white text-decoration-none fw-bold">Users</a>
    </div>

</body>

</html>