<?php
header('Content-Type: text/plain');

echo 'File uploaded ' . PHP_EOL;
echo 'Tmp name : ' . $_FILES['myfile']['tmp_name'] .PHP_EOL; 
echo 'name : ' . $_FILES['myfile']['name'] . PHP_EOL; 
echo 'size : ' . $_FILES['myfile']['size'] . PHP_EOL; 
if (!empty($_FILES['myfile']['error']))
    echo 'error: ' . $_FILES['myfile']['error'] . PHP_EOL;
