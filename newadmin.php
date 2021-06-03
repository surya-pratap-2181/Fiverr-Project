<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>SignUp</title>
</head>

<body>
    <?php include "partials/_header.php"; ?>
    <?php
    if (isset($_GET['alert'])) {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> Username Already Exist.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
    }
    ?>

    <div class="container  bg-info text-dark col-md-6 my-5 p-3 rounded">
        <h2>Admin Sign Up!!</h2>
        <form action="partials/_newadmin.php" method="POST">
            <div class="form-group row mt-5">
                <label for="userName" class="col-md-2 col-form-label">User Name</label>
                <div class="col-md-10">
                    <input type="text" required class="form-control" id="username" name="username">
                </div>
            </div>
            <div class="form-group row">
                <label for="phoneNumber" class="col-md-2 col-form-label">Contact</label>
                <div class="col-md-10">
                    <input type="text" required class="form-control" id="user_contact" name="user_contact">
                </div>
            </div>
            <div class="form-group row">
                <label for="user_Email" class="col-md-2 col-form-label">Email</label>
                <div class="col-md-10">
                    <input type="email" required class="form-control" id="user_email" name="user_email">
                </div>
            </div>
            <div class="form-group row">
                <label for="user_Password" class="col-md-2 col-form-label">Password</label>
                <div class="col-md-10">
                    <input type="password" required class="form-control" id="user_password" name="user_password">
                </div>
            </div>

            <div class="form-groupmdow mt-4">
                <div class="col-md-4 container-fluid">
                    <button type="submit" class="btn btn-outline-primary">Sign UP</button>
                    <button type="reset" class="btn btn-outline-danger ml-3">Reset</button>
                </div>
            </div>
        </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
</body>

</html>