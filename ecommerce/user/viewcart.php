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
        th,
        td {
            border: 0.5px solid gray !important;
        }
    </style>
</head>

<body class="bg-white">
    <?php
    include 'header.php';
    ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 bg-secondary mb-4 text-center w-25 rounded">
                <h1 class="text-dark" style="text-decoration:underline">My Cart</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid ">
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-6 col-lg-9">
                <table class="table table-borderd text-center " border="2">
                    <thead class="bg-secondary text-white fs-5">
                        <th>Sr. No</th>
                        <th>Product Name</th>
                        <th>Product Price</th>
                        <th>Product Quantity</th>
                        <th>Total Price</th>
                        <th>Update</th>
                        <th>Delete</th>

                    </thead>
                    <tbody>
                        <?php
                        $ptotal = 0;
                        $total = 0;
                        $i = 0;
                        if (isset($_SESSION['cart'])) {

                            foreach ($_SESSION['cart'] as $key => $value) {
                                $ptotal = $value['ProductPrice'] * $value['ProductQuantity'];
                                $total += $value['ProductPrice'] * $value['ProductQuantity'];
                                $i =$key+1;
                                echo "
                                    <form action='insertCart.php' method='post'>
                                    <tr>
                                    <td>$i</td>
                                    <td><input type='hidden' name='PName' value='$value[ProductName]'>$value[ProductName]</td>
                                    <td><input type='hidden' name='PPrice' value='$value[ProductPrice]'>$value[ProductPrice]</td>
                                    <td><input type='' name='PQuantity' value='$value[ProductQuantity]'></td>
                                    <td>$ptotal</td>
                                    <td><button name='update' class='btn-primary'>Update</button></td>
                                    <td><button name='remove' class='btn-danger'>Delete</button></td>
                                  <input type='hidden' name='item' value='$value[ProductName]'>
                                    </tr>
                                    </form>";
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-3 text-center">
                <h4 class="bg-primary py-2">Total</h4>
                <h2 class="bg-danger text-white py-3"><?php echo number_format($total,2);?></h2>
            </div>
        </div>
    </div>

</body>

</html>