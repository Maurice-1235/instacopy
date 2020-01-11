<?php session_start(); ?>

<html>

<head>
    <title>Instacopy</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha256-UzFD2WYH2U1dQpKDjjZK72VtPeWP50NoJjd26rnAdUI=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/css/lightbox.min.css" integrity="sha256-tBxlolRHP9uMsEFKVk+hk//ekOlXOixLKvye5W2WR5c=" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/js/lightbox.min.js" integrity="sha256-CtKylYan+AJuoH8jrMht1+1PMhMqrKnB8K5g012WN5I=" crossorigin="anonymous">
    </script>
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">

<body>
    <div id="navbar">
        <div class="row">
            <div class="col-3">
                <a class="navbar-brand"><i class="fab fa-instagram"></i>&nbsp;| Instacopy</a>
            </div>
            <div class="col-2">
            </div>
            <div class="search col-4">
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type=" search " placeholder="Search" aria-label="Search">
                </form>
            </div>
            <div class="button col-3">
                <!-- Button trigger modal -->
                <?php
                if (empty($_SESSION["id"])) {
                    echo "<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal'>
                    Login | Register
                </button>";
                } else {
                    echo "<a type='button' class='btn btn-primary' style='margin-right: 10px;' href='upload.php'>Upload</a>";
                    echo "<a type='button' class='btn btn-primary' style='margin-right: 10px; text-transform: capitalize;' href='profile.php'>" . $_SESSION["username"] . "</a>";
                    echo "<a type='button' class='btn btn-primary' href='logout.php'>Logout</a>";
                }
                ?>
            </div>
        </div>
    </div>
    <?php
    if (!empty($_GET["msg"])) {
        echo "<div class='alert alert-success alert-register' role='alert'>" . $_GET["msg"] .  "</div>";
    }
    ?>