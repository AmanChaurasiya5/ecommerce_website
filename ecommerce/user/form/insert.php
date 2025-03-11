<?php

$conn = mysqli_connect('localhost', 'root', 'Creative@5599', 'products');
if (isset($_POST['submit'])) {
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $number = $_POST['Number'];
    $pass = $_POST['Pass'];

    $dup_Num = mysqli_query($conn, "select * from logininfo where number = '$number'");
    $dup_Email = mysqli_query($conn, "select * from logininfo where email = '$email'");

    if (mysqli_num_rows($dup_Email)) {
        echo "
        <script>
        alert('this email is already taken');
        window.location.href ='register.php';
        </script> 
        ";
    } elseif (mysqli_num_rows($dup_Num)) {
        echo "
        <script>
        alert('this number is already taken');
        window.location.href ='register.php';
        </script>
        ";
    } else {
        mysqli_query($conn, "INSERT INTO logininfo (`name`, `email`, `number`, `password`) 
    VALUES ('$name', '$email', '$number', '$pass')");
        echo "
      <script>
      alert('Registered Successfully');
        window.location.href='login.php';
      </script>
      ";
    }
}
?>