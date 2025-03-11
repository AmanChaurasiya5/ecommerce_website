<?php

if (isset($_POST['submit'])) {
    include('config.php');
    $product_name = $_POST['Pname'];
    $product_price = $_POST['Pprice'];


    $product_image = $_FILES['Pimage'];
    $image_loc = $_FILES['Pimage']['tmp_name'];
    $image_name = $_FILES['Pimage']['name'];
    $image_des = "uploadphotos/" . $image_name;


    $product_Categories = $_POST['Pages'];

    move_uploaded_file($image_loc, "uploadphotos/" . $image_name);


    
    $insert_data = $conn->prepare("insert into pdetails(`Pname`,`Pprice`,`Pimage`,`PCategory`) VALUES('$product_name','$product_price','$image_des',' $product_Categories')");
    $insert_data->execute();

    header("location:index.php");

}

?>


