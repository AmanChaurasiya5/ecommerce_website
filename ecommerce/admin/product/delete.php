<?php
$conn = mysqli_connect('localhost','root','Creative@5599','products');

$ID = $_GET['ID'];
mysqli_query($conn,"delete from pdetails where id=$ID");
echo "
<script>alert('deleted the products with product id $ID');
    window.location.href='./index.php';
    </script>
";
// header('location:index.php');
?>