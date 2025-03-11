<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
</head>

<body>
    <?php
    $conn = mysqli_connect('localhost', 'root', 'Creative@5599', 'products');
    $record = mysqli_query($conn, "select * from logininfo");

    ?>

    <div class="heading my-4">
        <h1 class="text-danger text-center">Users Details</h1>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-10 ">
            <table class="table  table-secondary table-bordered">
                <thead class="text-center">
                    <th>ID</th>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>NUMBER</th>
                    <th>DELETE</th>

                </thead>
                <tbody class="text-center text-danger">

                    <?php
                    while ($row = mysqli_fetch_array($record)) {
                        echo "<tr>
            <td>$row[Id]</td>
            <td>$row[Name]</td>
            <td>$row[Email]</td>
            <td>$row[Number]</td>
            <td><a href='user_Delete.php? ID=$row[Id]' class='btn btn-danger'>DELETE</a></td>
            </tr>";
                    }

                    ?>

                </tbody>
            </table>
        </div>
    </div>
</body>

</html>