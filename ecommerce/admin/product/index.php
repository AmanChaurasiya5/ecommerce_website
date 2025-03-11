<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product-Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    <style>
        
    </style>
</head>

<body>
    <div class="main-container" style="background-color:rgb(26, 26, 26);color:white">
        <div class="container" >
            <div class="row" >
                <div class="col-md-6 m-auto border mt-3" style="box-shadow:0px 0px 10px white,0px 0px 10px white; border-radius: 10px;">
                    <form action="insert.php" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <p class="text-center fw-bold fs-3 text-light">Product Details</p>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Product Name : </label>
                            <input type="text" class="form-control" name="Pname" placeholder="Enter Product Name">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Product Price : </label>
                            <input type="text" class="form-control" name="Pprice" placeholder="Enter Product Price">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Add Product Image : </label>
                            <input type="file" name="Pimage" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Select Page Categories : </label>
                            <select class="form-select" name="Pages">
                                <option value="Home">Home</option>
                                <option value="Laptop">Laptop</option>
                                <option value="Bag">Bag</option>
                                <option value="Mobile">Mobile</option>
                            </select>
                        </div>
                        <button name="submit"
                            class="bg-primary fs-4 fw-bold my-3 form-control text-white">Upload</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- below table -->

        <div class="container">
            <div class="row">
                <div class="col-md-8 m-auto" >
                    <table class="table  overflow-hidden table-hover border my-5" style="box-shadow:0px 0px 15px white,0px 0px 10px white; border-radius: 10px;">
                        <thead class="bg-dark text-white fs-4 font-monospace text-center">
                            <th>ID</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Category</th>
                            <th>Delete</th>
                            <th>Update</th>
                        </thead>

                        <tbody class="bg-secondary bg-gradient text-white font-san-serif text-center fs-5 ">
                            <?php

                            include("config.php");

                            $record = $conn->prepare("select * from pdetails");
                            $record->execute();

                            $row = $record->fetchAll();


                            foreach ($row as $rows) {
                                echo "<tr>
                    <td>$rows[id]</td>
                    <td>$rows[Pname]</td>
                    <td>$rows[Pprice]</td>
                    <td><img src='$rows[Pimage]' height='90px' width='200px'></td>
                    <td>$rows[PCategory]</td>
                    <form action='delete.php' method='get'>
                        <td><a href='delete.php?ID=$rows[id]' class='btn btn-danger'>Delete</button></td>
                    </form>

                     <form action='./update.php' method='POST'>
                    <td><button class='btn btn-primary' value='$rows[id]' name='update'>update</button></td>
                    </form>
                </tr>";
                            }


                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>