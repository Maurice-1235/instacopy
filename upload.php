<?php
session_start();
if (!isset($_SESSION["id"])) {
    header('Location: ../index.php?msg=Login_to_Upload');
}
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" />

<form action="db/dbupload.php" method="post" class="dropzone" id="my-awesome-dropzone">
    <input type="file" name="fileToUpload" id="fileToUpload" />
</form>