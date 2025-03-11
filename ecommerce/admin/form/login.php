<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="bg-secondary">
<div class="container">
        <div class="row">
            <div class="col-md-6 m-auto border shadow-lg font-monospace p-5 border-primary mt-3 bg-white">
                <form action="login1.php" method="post">
                    <div class="mb-3">
                        <p class="text-center fw-bold fs-3 text-danger">Login</p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Name or email : </label>
                        <input type="text" class="form-control" name="username" placeholder="Enter Your Name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password  </label>
                        <input type="password" name="password" class="form-control" placeholder="Enter Your Password">
                    </div>
                  
                    <button name="" class="bg-success fs-4 fw-bold my-3 form-control text-white">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>