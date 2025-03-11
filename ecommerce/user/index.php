<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <?php
    include 'header.php';
    ?>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center border border-2 text-dark">HOME</h1>
                <div class="d-flex flex-wrap">
                    <?php
                    include 'config.php';
                    $Record = mysqli_query($conn, "select * from pdetails");
                    while ($row = mysqli_fetch_array($Record)) {
                        $checkPage = $row['PCategory'];

                            echo "
    <div class='m-auto my-4 col-md-6 col-lg-4 mb-3'>
        <form action='insertCart.php' method='post'>
            <div class='card m-auto shadow shadow-2' style='width: 18rem; '>
                <img src='../admin/product/$row[Pimage]' class='m-auto card-img-top' alt='...' style='height:300px;width:250px'>
                <div class='card-body text-dark fs-4 fw-bold text-center'>
                    <h5 class='card-title text-dark fs-4 fw-bold'>$row[Pname]</h5>
                    <p class='card-text'>Rs. $row[Pprice]</p>
                    <input type='hidden' name='PName' value='$row[Pname]'>
                    <input type='hidden' name='PPrice' value='$row[Pprice]'>
                    <input type='number' name='PQuantity' min='1' max='20' placeholder='Quantity' class='w-100 '><br><br>
                    <input type='submit' name='addCart' class='btn btn-danger text-white w-100' value='Add To Cart'>
                </div>
            </div>
        </form>
    </div>
    ";

                        }
               
                    ?>
                </div>
            </div>
        </div>
    </div>

</body>

</html>