<?php

$con = mysqli_connect('localhost', 'root', 'Creative@5599', 'products');

$A_admin = $_POST['username'];
$A_password = $_POST['password'];

$result = mysqli_query($con, "select * from `admin` where username='$A_admin' AND password = '$A_password'");

session_start();

if (mysqli_num_rows($result)) {

    // session storing the detail
    $_SESSION['admin']= $A_admin;

    // if login successfull then redirect on main page
    echo "
    <script>
    alert('Login Successfull');
    window.location.href='../mystore.php';
    </script>
    ";
} else {
    echo "
    <script>
    alert('Invalid Username/Password');
    window.location.href='login.php';
    </script>
    ";
}
?>