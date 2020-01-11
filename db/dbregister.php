<?php
include "dbconf.php";

$user = $_POST["username"];
$pass = $_POST["password"];
$passconf = $_POST["passwordconf"];
$about = $_POST["about"];

$passhass = password_hash($pass, PASSWORD_DEFAULT);

// echo password_hash($pass, PASSWORD_DEFAULT);


if ($pass == $passconf) {
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check username sudah ada
    $sql = "SELECT id, password FROM users WHERE username = '$user'";
    $result = $conn->query($sql);
    
    if ($result->num_rows == 0) {
        // Prepared statement
        $stmt = $conn->prepare("INSERT INTO users (username, password, description)
    VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $user, $passhass, $about);
        $stmt->execute();
        $stmt->close();
        header('Location: ../index.php?msg=registersuccess');
        // Prepared statement
    } else {
        header('Location: ../index.php?msg=Username_Claimed');
    }
} else {
    header('Location: ../index.php?msg=Password_Mismatch');
}

$conn->close();