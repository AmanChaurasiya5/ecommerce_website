<?php
session_start();
 
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if (isset($_SESSION['user'])) {

   echo $Product_name = $_POST['PName'];
   echo $Product_price = $_POST['PPrice'];
   echo $Product_quantity = $_POST['PQuantity'];

    if (isset($_POST['addCart'])) {

        $checkitem = array_column($_SESSION['cart'], 'ProductName');
        if (in_array($Product_name, $checkitem)) {
            echo "
            <script>
            alert('product already added');
            window.location.href='index.php';
            </script>
        ";
        } else {
            $_SESSION['cart'][] = array(
                'ProductName' => $Product_name,
                'ProductPrice' => $Product_price,
                'ProductQuantity' => $Product_quantity
            );
            header('location:viewcart.php');
        }


        // session_destroy();
    }

    // remove product 

    if (isset($_POST['remove'])) {
        foreach ($_SESSION['cart'] as $key => $value) {
            if ($value['ProductName'] === $_POST['item']) {
                unset($_SESSION['cart'][$key]);
                $_SESSION['cart'] = array_values($_SESSION['cart']);
                header('location:viewcart.php');
            }
        }
    }

    // update product

    if (isset($_POST['update'])) {
        foreach ($_SESSION['cart'] as $key => $value) {
            if ($value['ProductName'] === $_POST['item']) {
                $_SESSION['cart'][$key] = array(
                    'ProductName' => $Product_name,
                    'ProductPrice' => $Product_price,
                    'ProductQuantity' => $Product_quantity
                );
                header('location:viewcart.php');
            }
        }
    }
} 
else {
header('location:form/login.php');
}


?>