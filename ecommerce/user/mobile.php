<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Page</title>
    <?php
    include 'header.php';
    ?>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center border border-2 text-dark">MOBILE</h1>
                <div class="d-flex">
                    <?php
                    include 'config.php';
                    $Record = mysqli_query($conn, "SELECT * FROM pdetails");
                    while ($row = mysqli_fetch_array($Record)) {
                        $checkPage = $row['PCategory'];

                        // Show only mobile products
                        if (trim($checkPage) == 'Mobile') {  // Make sure to match the category name correctly
                            echo "
                            <div class='m-auto my-4 col-md-6 col-lg-4 mb-3'>
                                <div class='card m-auto shadow shadow-2' style='width: 18rem;'>
                                    <img src='../admin/product/$row[Pimage]' class='card-img-top m-auto' alt='...' style='height:300px;width:250px'>
                                    <div class='card-body text-dark fs-4 fw-bold text-center'>
                                        <h5 class='card-title text-dark fs-4 fw-bold'>$row[Pname]</h5>
                                        <p class='card-text'>Rs. $row[Pprice]</p>
                                        <input type='number' min='1' max='20' placeholder='Quantity' class='w-100'><br><br>
                                        <input type='submit' class='btn btn-danger text-white w-100' value='Add To Cart'>
                                    </div>
                                </div>
                            </div>
                            ";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
