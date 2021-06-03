<?php
session_start();
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/fiverr">Fiverr</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/fiverr/home.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <?php if (!isset($_SESSION['loggedin'])) { ?>
            <li class="nav-item">
                <a class="nav-link" href="/fiverr/signup.php">Sign Up</a>
            </li>
            <?php } ?>
            <?php if (isset($_SESSION['loggedin']) && $_SESSION['role'] == 1) { ?>
            <li class="nav-item active">
                <a class="nav-link" href="/fiverr/alldata.php">All Data <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/fiverr/newadmin.php">Create Admin <span class="sr-only">(current)</span></a>
            </li>
            <?php } ?>
        </ul>
        <?php if (isset($_SESSION['loggedin'])) { ?>
        <div class="form-inline my-2 mx-2 my-lg-0">
            <h6>Welcome - <b>"<?php echo $_SESSION['username']; ?>"</b></h6>
        </div>
        <a class="btn btn-outline-danger ml-2" type="button" href="partials/_logout.php">Logout</a>
        <?php } ?>

    </div>
</nav>