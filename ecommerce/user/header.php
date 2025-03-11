<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />

    <style>
        a:hover {
            text-decoration: underline !important;
        }
    </style>

</head>

<body>
    <?php
    session_start();
    $count = 0;
    if (isset($_SESSION['cart'])) {
        $count = count($_SESSION['cart']);
    }
    ?>
    <nav class="navbar text-white" style="background-color: black;">
        <div class="container-fluid">
            <a href="index.php" class="navbar-brand">
                <img src="images/image.png" alt="" style="width:100px; ">
            </a>
            <div>
                <a href="index.php" class="text-warning text-decoration-none fs-6 pe-3"><i
                        class="ri-home-8-line"></i>HOME</a> <a href="viewcart.php"
                    class="text-warning text-decoration-none fs-6 pe-2 ">
                    <i class="ri-shopping-cart-2-line"></i>CART (<?php echo $count ?>)</a>
                <span class="text-warning text-decoration-none fs-6 pe-3">
                    <i class="ri-user-3-fill"></i>Hello,
                    <?php
                    if (isset($_SESSION['user'])) {
                        echo strtoupper($_SESSION['user']);
                        echo "
                        <a href='form/logout.php' class='text-warning text-decoration-none fs-6 pe-3'>
                        <i class='ri-login-box-line'></i>LOGOUT</a>";
                    } else {
                        echo "
                        <a href='form/login.php' class='text-warning text-decoration-none fs-6 pe-3'>
                        <i class='ri-login-box-line'></i>LOGIN</a>";
                    }
                    ?>
                    <a href="../admin/mystore.php" class="text-warning text-decoration-none fs-6">ADMIN</a>
                </span>
            </div>
        </div>
    </nav>

    <div class="my-2"></div>

    <div class=" bg-danger sticky-top font-monospace">
        <ul class="list-unstyled d-flex justify-content-center py-2">
            <li><a href="laptop.php" class="text-decoration-none text-white fw-bold fs-4 mx-5 px-5">LAPTOP</a></li>
            <li><a href="bag.php" class="text-decoration-none text-white fw-bold fs-4 mx-5 px-5">BAG</a></li>
            <li><a href="mobile.php" class="text-decoration-none text-white fw-bold fs-4 mx-5 px-5">MOBILE</a></li>
        </ul>
    </div>
</body>

</html>