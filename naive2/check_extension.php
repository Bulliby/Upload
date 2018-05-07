<?php

header('Content-Type: text/plain');

echo 'File uploaded ' . PHP_EOL;
echo 'Tmp name : ' . $_FILES['myfile']['tmp_name'] . PHP_EOL; 
echo 'name : ' . $_FILES['myfile']['name'] . PHP_EOL; 
echo 'size : ' . $_FILES['myfile']['size'] . PHP_EOL; 

if (!empty($_FILES['myfile']['error']))
    echo 'error: ' . $_FILES['myfile']['error'] . PHP_EOL;

$uploaddir = '../uploads/';
$uploadfile = $uploaddir . basename($_FILES['myfile']['name']);
/******************************************************************************/

if ($_FILES['myfile']['type'] != "image/png")
    echo 'Mauvais format' . PHP_EOL;
else
    echo 'Bon Format' . PHP_EOL;

if (move_uploaded_file($_FILES['myfile']['tmp_name'], $uploadfile)) {
    echo "File is valid, and was successfully uploaded.\n";
} else {
    echo "File uploading failed.\n";
}

/******************************************************************************/
