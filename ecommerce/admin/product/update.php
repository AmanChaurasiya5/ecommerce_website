<?php
if (isset($_REQUEST['update'])) {
    $uid = $_REQUEST['update'];
    $conn = mysqli_connect('localhost', 'root', 'Creative@5599', 'products');
    $record = mysqli_query($conn, "SELECT * FROM pdetails WHERE id = $uid");
    $data = mysqli_fetch_array($record);

    echo <<<HTML
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Product-Page</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet'
        integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' crossorigin='anonymous'>
    <link href='https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css' rel='stylesheet' />
</head>

<body>
    <div class='main-container' style='background-color:rgb(26, 26, 26);color:white;'>
        <div class='container'>
            <div class='row'>
                <div class='col-md-6 m-auto border border-primary my-5'
                    style='box-shadow:0px 0px 15px white,0px 0px 15px white; border-radius: 10px;'>
                    <form action='' method='POST' enctype='multipart/form-data'>
                        <div class='mb-3'>
                            <p class='text-center fw-bold fs-3 text-danger'>Update Product </p>
                        </div>
                        <div class='mb-3'>
                            <label class='form-label'>Product Name : </label>
                            <input type='text' class='form-control' value='$data[Pname]' name='Pname'
                                placeholder='Enter Product Name'>
                        </div>
                        <div class='mb-3'>
                            <label class='form-label'>Product Price : </label>
                            <input type='text' class='form-control' value='$data[Pprice]' name='Pprice'
                                placeholder='Enter Product Price'>
                        </div>
                        <div class='mb-3'>
                            <label class='form-label'>Add Product Image : </label>
                            <input type='file' name='Pimage' class='form-control'>
                            <div class='d-flex justify-content-center'>
                                <img src='$data[Pimage]' alt='' style='height:100px;width:100px'>
                            </div>
                        </div>
                        <div class='mb-3'>
                            <label class='form-label'>Select Page Categories : </label>
                            <select class='form-select' name='Pages'>
                                <option value='Home'>Home</option>
                                <option value='Laptop'>Laptop</option>
                                <option value='Bag'>Bag</option>
                                <option value='Mobile'>Mobile</option>
                            </select>
                        </div>
                        <input type='hidden' name='ed' value='$data[id]'>
                        <button name='sumbit_page' class='bg-success fs-4 fw-bold my-3 form-control text-white'>Update
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
HTML;
}
?>

<?php
// PHP update code
if (isset($_POST['sumbit_page'])) {
    $id = $_POST['ed'];
    $product_name = $_POST['Pname'];
    $product_price = $_POST['Pprice'];
    $product_Categories = $_POST['Pages'];

    // Image handling
    $product_image = $_FILES['Pimage'];
    $image_loc = $_FILES['Pimage']['tmp_name'];
    $image_name = $_FILES['Pimage']['name'];
    $image_des = "uploadphotos/" . $image_name;

    $conn = mysqli_connect('localhost', 'root', 'Creative@5599', 'products');

    // Check if a new image was uploaded
    if (!empty($image_name)) {
        move_uploaded_file($image_loc, $image_des);
    } else {
        // Keep the old image if no new image is uploaded
        $image_des = $_POST['old_image'];
    }

    // Update query
    $query = "UPDATE pdetails SET 
        `Pname` = '$product_name',
        `Pprice` = '$product_price',
        `Pimage` = '$image_des',
        `PCategory` = '$product_Categories' 
        WHERE id = $id";

    $record = mysqli_query($conn, $query);
    header('Location: index.php');
}
?>
