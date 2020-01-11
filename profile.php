<?php include 'components/header.php' ?>
<?php
if (empty($_GET["id"])) {
    $id = $_SESSION["id"];
} else {
    $id = $_GET["id"];
}

include "db/dbconf.php";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT username, description FROM users WHERE id = '$id'";
// echo $sql;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $uname = $row["username"];
        $description = $row["description"];
    }
}
$conn->close();
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
                    <?= $uname ?> <i class="fas fa-badge-check"></i>&nbsp;<button type="button" class="btn btn-primary">Follow</button>
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
                    <?= $description ?>
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
        <!-- <div class="col-12 col-xl-4">
            <a href="img/img1.jpg" class="photo-container" data-lightbox="gallery">
                <div class="photo-overlay"><i class="fas fa-heart"></i>100 &nbsp;<i class="fas fa-comment"></i>50
                </div>
                <div class="photo" style="background-image: url(img/img1_th.jpg)"></div>
            </a>
        </div> -->
        <?php
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT url FROM posts WHERE user_id = $id order by id";
        // echo $sql;
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                // echo $row["url"];
                echo "  <div class='col-12 col-xl-4'>
                            <a href='photos/" . $row["url"] .  "' class='photo-container' data-lightbox='gallery'>
                                <div class='photo-overlay'><i class='fas fa-heart'></i>100 &nbsp;<i class='fas fa-comment'></i>50
                                </div>
                                <div class='photo' style='background-image: url(photos/th_" . $row["url"] . ")'></div>
                            </a>
                        </div>
                        ";
            }
        }
        $conn->close();
        ?>
    </div>
</div>
<?php include 'components/modal.php' ?>
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