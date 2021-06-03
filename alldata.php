<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Login</title>
</head>

<body>
    <?php include "partials/_header.php"; ?>
    <?php

    if (!isset($_SESSION['loggedin'])) {
        header("Location: /fiverr");
    }
    ?>

    <div class="container mt-5">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Customer</th>
                    <th scope="col">Mobile</th>
                    <th scope="col"> Email </th>
                    <th scope="col">Source</th>
                    <th scope="col">Name</th>
                    <th scope="col">Number</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Referrence</th>
                    <th scope="col">Date</th>
                    <th scope="col">Time</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                    include "partials/_dbconnect.php";
                    $sql = "SELECT bank.source, bank.name, bank.number, bank.amount, bank.reference, bank.date ,bank.time, users.username, users.user_email, users.user_contact FROM bank, users WHERE bank.user_no = users.user_sno ORDER BY bank.sno";
                    $result = mysqli_query($conn, $sql);
                    if ($num = mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['user_contact']; ?></td>
                    <td><?php echo $row['user_email']; ?></td>
                    <td><?php echo $row['source']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['number']; ?></td>
                    <td><?php echo $row['amount']; ?></td>
                    <td><?php echo $row['reference']; ?></td>
                    <td><?php echo $row['date']; ?></td>
                    <td><?php echo $row['time']; ?></td>
                </tr>
                <?php
                        }
                    } ?>

            </tbody>
        </table>
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