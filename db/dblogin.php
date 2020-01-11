<?php
include "dbconf.php";
session_start();

$user = $_POST["username"];
$pass = $_POST["password"];
$passhass = password_hash($pass, PASSWORD_DEFAULT);

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, password FROM users WHERE username = '$user'";
// echo $sql;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $id = $row["id"];
        $dbpasshass = $row["password"];

        if (password_verify ( $pass, $dbpasshass )){
            $_SESSION["id"] = $id;
            $_SESSION["username"] = $user;
            header('Location: ../index.php');
        } else {
            header('Location: ../index.php?msg=Password_Mismatch');
        }
        break;
    }
} else {
    header('Location: ../index.php?msg=No_User_Found');
}
$conn->close();
