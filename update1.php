<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <?php 
                    if(isset($_SESSION['status']))
                    {
                        ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                        unset($_SESSION['status']);
                    }
                ?>
                <div class="card mt-5">
                    <div class="card-header">
                        <h4> Update Data by ID into Database </h4>
                    </div>
                    <div class="card-body">

                        <form action="update2.php" method="POST">

                            <div class="form-group mb-3">
                                <label for="">USER ID</label>
                                <input type="text" name="id" class="form-control"  >
                            </div>
                            <div class="form-group mb-3">
                                <label for="">First Name</label>
                                <input type="text" name="fname" class="form-control" >
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Last Name</label>
                                <input type="text" name="fname" class="form-control" >
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Email</label>
                                <input type="text" name="lname" class="form-control" >
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Password</label>
                                <input type="text" name="password" class="form-control" >
                            </div>
                 <div class="form-group mb-3">
                  <button type="submit" name="update" class="btn btn-primary">Update Data</button>
                  </div>
                  <div class="form-group mb-3">
                  <a href="data.php" style="color:black"><h6>Back to data</h6></a>
                  </div>

                        </form>

</div>
</div>
</div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>