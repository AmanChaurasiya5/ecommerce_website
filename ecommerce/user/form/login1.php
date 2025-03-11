<?php
$email = $_POST['Email'];
$pass = $_POST['Pass'];
$conn = mysqli_connect('localhost', 'root', 'Creative@5599', 'products');
$result = mysqli_query($conn, "select * from logininfo where (Email = '$email' OR Number='$email') AND Password = '$pass'");

session_start();
if (mysqli_num_rows($result)) {
    foreach ($result as $row) {
        $use = $row['Name'];
        $_SESSION['user'] = $use;
    }

    echo "
      <script>
      alert('Login Successfully');
      window.location.href = '../index.php';
      </script>
      ";
} else {
    echo "
    <script>
    alert('User Not found');
    window.location.href = './login.php';
    </script>
    ";
}
?>