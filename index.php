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
    <div class="container">
        <div class="row profile">
            <div class="col-xl-1"></div>
            <div class="col-12 col-xl-4">
                <div class="profile-picture-container">
                    <img src="img/pp.jpg" class="profile-picture rounded" />
                </div>

            </div>
            <div class="col-12 col-xl-5">
                <div class="row profile-row">
                    <div class="col profile-name">
                        Maurice <i class="fas fa-badge-check"></i>&nbsp;<button type="button" class="btn btn-primary">Follow</button>
                    </div>
                </div>
                <div class="row profile-row">
                    <div class="col">
                        <b>100</b> posts
                    </div>
                    <div class="col">
                        <b>100</b> followers
                    </div>
                    <div class="col">
                        <b>100</b> following
                    </div>
                </div>
                <div class="row profile-row">
                    <div class="col">
                        The best photographer in Surabaya.
                        <br>
                        <a href="www.Maurice.com">www.Maurice.com</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <div class="story-container">
                    <img src="img/img1_th.jpg" class="profile-picture rounded" />
                </div>
                <div class="story-text">
                    tower
                </div>
            </div>
            <div class="col-2">
                <div class="story-container">
                    <img src="img/img2_th.jpg" class="profile-picture rounded" />
                </div>
                <div class="story-text">
                    dog
                </div>
            </div>
            <div class="col-2">
                <div class="story-container">
                    <img src="img/img3_th.jpg" class="profile-picture rounded" />
                </div>
                <div class="story-text">
                    glass
                </div>
            </div>
            <div class="col-2">
                <div class="story-container">
                    <img src="img/img7_th.jpg" class="profile-picture rounded" />
                </div>
                <div class="story-text">
                    leaf
                </div>
            </div>
            <div class="col-2">
                <div class="story-container">
                    <img src="img/img5_th.jpg" class="profile-picture rounded" />
                </div>
                <div class="story-text">
                    wave
                </div>
            </div>
            <div class="col-2">
                <div class="story-container">
                    <img src="img/img6_th.jpg" class="profile-picture rounded" />
                </div>
                <div class="story-text">
                    stair
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-xl-4">
                <a href="img/img1.jpg" class="photo-container" data-lightbox="gallery">
                    <div class="photo-overlay"><i class="fas fa-heart"></i>100 &nbsp;<i class="fas fa-comment"></i>50
                    </div>
                    <div class="photo" style="background-image: url(img/img1_th.jpg)"></div>
                </a>
            </div>
            <div class="col-12 col-xl-4">
                <a href="img/img2.jpg" class="photo-container" data-lightbox="gallery">
                    <div class="photo-overlay"><i class="fas fa-heart"></i>100 &nbsp;<i class="fas fa-comment"></i>50
                    </div>
                    <div class="photo" style="background-image: url(img/img2_th.jpg)"></div>
                </a>
            </div>
            <div class="col-12 col-xl-4">
                <a href="img/img3.jpg" class="photo-container" data-lightbox="gallery">
                    <div class="photo-overlay"><i class="fas fa-heart"></i>100 &nbsp;<i class="fas fa-comment"></i>50
                    </div>
                    <div class="photo" style="background-image: url(img/img3_th.jpg)"></div>
                </a>
            </div>
            <div class="col-12 col-xl-4">
                <a href="img/img5.jpg" class="photo-container" data-lightbox="gallery">
                    <div class="photo-overlay"><i class="fas fa-heart"></i>100 &nbsp;<i class="fas fa-comment"></i>50
                    </div>
                    <div class="photo" style="background-image: url(img/img5_th.jpg)"></div>
                </a>
            </div>
            <div class="col-12 col-xl-4">
                <a href="img/img6.jpg" class="photo-container" data-lightbox="gallery">
                    <div class="photo-overlay"><i class="fas fa-heart"></i>100 &nbsp;<i class="fas fa-comment"></i>50
                    </div>
                    <div class="photo" style="background-image: url(img/img6_th.jpg)"></div>
                </a>
            </div>
            <div class="col-12 col-xl-4">
                <a href="img/img7.jpg" class="photo-container" data-lightbox="gallery">
                    <div class="photo-overlay"><i class="fas fa-heart"></i>100 &nbsp;<i class="fas fa-comment"></i>50
                    </div>
                    <div class="photo" style="background-image: url(img/img7_th.jpg)"></div>
                </a>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Login/Register</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="db/dblogin.php" method="POST">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-4">
                                <b>Login</b>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <div class="form-label">Username</div>
                            </div>
                            <div class="col-8">
                                <input type="text" name="username" id="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <div class="form-label">Password</div>
                            </div>
                            <div class="col-8">
                                <input type="password" name="password" id="">
                            </div>
                        </div>
                        <br>
                        <div class="modal-footer">
                            <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                            <input type="submit" value="Login" class="btn btn-primary">
                        </div>
                </form>
                <hr>
                <form action="db/dbregister.php" method="POST">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-4">
                                <b>Register</b>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <div class="form-label">Username</div>
                            </div>
                            <div class="col-8">
                                <input type="text" name="username" id="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <div class="form-label">Password</div>
                            </div>
                            <div class="col-8">
                                <input type="password" name="password" id="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <div class="form-label">Confirm Password</div>
                            </div>
                            <div class="col-8">
                                <input type="password" name="passwordconf" id="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <div class="form-label">About me</div>
                            </div>
                            <div class="col-8">
                                <input type="text" name="about" id="">
                            </div>
                        </div>
                        <br>
                        <div class="modal-footer">
                            <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                            <input type="submit" value="Register" class="btn btn-primary">
                        </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>

<script>
    $(".photo-container").mouseover(function() {
        $(this).children().first().css("display", "block");
        $(this).children().first().css("width", $(this).css("width"));
    });
    $(".photo-container").mouseleave(function() {
        $(this).children().first().css("display", "none");
    });
    // When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
            document.getElementById("navbar").style.padding = "0px 5px";
            document.getElementById("logo").style.fontSize = "20px";
        } else {
            document.getElementById("navbar").style.padding = "5px 10px";
            document.getElementById("logo").style.fontSize = "25px";
        }
    }
</script>
<style>
    body {
        background-color: fafafa;
    }

    .navbar-brand {
        padding-left: 250px;
        text-align: center;
        display: inline-block;
        font-size: 30px;
        font-family: 'Lobster', cursive;
        size: 25px;
        width: 50%;
        align-items: center;
        margin: 10px
    }

    .search {
        margin-top: 10px;
        padding-top: 12px;
        display: inline-block;
        text-align: center；
    }

    .button {
        padding-top: 12px;
    }

    .container {
        padding-top: 100px;
    }

    .photo {
        background-color: darkgray;
        padding-top: 100%;
        background-size: cover;
        margin-bottom: 40px;
        /* border-radius: 50%; */
    }

    .photo:hover {
        -webkit-filter: brightness(60%);
    }

    .photo-overlay {
        position: absolute;
        color: white;
        z-index: 9999;
        margin-top: 150px;
        text-align: center;
        font-size: 20px;
        display: none;
    }

    .profile {
        margin-top: 90px;
        margin-bottom: 50px;
    }

    .profile-row {
        margin-bottom: 20px;
    }

    .profile-name {
        font-size: 30px;
    }

    .profile-picture-container {
        width: 200px;
        height: 200px;
        position: relative;
        overflow: hidden;
        border-radius: 50%;
        /* margin-left: 100px; */
        margin-bottom: 20px;
    }

    .profile-picture {
        display: inline;
        margin: 0 auto;
        width: 100%;

    }

    /* Display some links to the right */
    /* Create a sticky/fixed navbar */
    #navbar {
        overflow: hidden;
        background-color: #f1f1f1;
        padding: 0px 5px;
        /* Large padding which will shrink on scroll (using JS) */
        transition: 0.4s;
        /* Adds a transition effect when the padding is decreased */
        position: fixed;
        /* Sticky/fixed navbar */
        width: 100%;
        top: 0;
        /* At the top */
        z-index: 99;
        float: right;
    }

    .story-container {
        width: 80px;
        height: 80px;
        position: relative;
        overflow: hidden;
        border-radius: 50%;
        -webkit-box-shadow: 0 0 10px 0 rgba(0, 0, 0, .5);
        box-shadow: 0 0 10px 0 rgba(0, 0, 0, .5);
        margin: auto;
    }

    .story {
        display: inline;
        margin: 0 auto;
        width: 100%;

    }

    .story-text {
        text-align: center;
        font-weight: 400;
        margin-bottom: 30px;
        margin-top: 10px;
    }

    /* Full-width input fields */
    input[type=text],
    input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    /* Set a style for all buttons */
    .btnbu {
        background-color: #0579ff;
        color: white;
        padding: 10px 15px;
        border: none;
        cursor: pointer;
        width: 70%;
        border-radius: 8px;
        margin-top: 7px;
    }

    button:hover {
        opacity: 0.8;
    }

    /* Extra styles for the cancel button */
    .cancelbtn {
        width: auto;
        padding: 10px 18px;
        background-color: #f44336;
    }

    /* Center the image and position the close button */
    .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
        position: relative;
    }

    img.avatar {
        width: 40%;
        border-radius: 50%;
    }

    .container {
        padding: 16px;
    }

    span.psw {
        float: right;
        padding-top: 16px;
    }

    .alert-register {
        padding-top: 60px;
    }

    .form-label {
        padding-top: 15px;
    }
</style>