<?php

$targetDir = 'file_uploads';

if(!empty($_FILES)) {
    $file = pathinfo($_FILES['file']['name']);
    $ext = $file['extension'];

    $filename = $file['basename'];
    $hashFilename = md5($filename);

    $newName = $targetDir . DIRECTORY_SEPARATOR . $hashFilename . "." . $ext;

    move_uploaded_file($_FILES['file']['tmp_name'], $newName);

    echo "Your file is successfully uploaded!";

    header("Refresh:5; url=upload_form.php");
}