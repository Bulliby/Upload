<?php

/**
 * In this example we only check the extension of the file send by the client.
 * Or this extension is provided by the client and must not be trusted
 */

/******************************************************************************/
header('Content-Type: text/plain');

echo 'File uploaded ' . PHP_EOL;
echo 'Tmp name : ' . $_FILES['myfile']['tmp_name'] . PHP_EOL; 
echo 'name : ' . $_FILES['myfile']['name'] . PHP_EOL; 
echo 'size : ' . $_FILES['myfile']['size'] . PHP_EOL; 
if (!empty($_FILES['myfile']['error']))
    echo 'error: ' . $_FILES['myfile']['error'] . PHP_EOL;

/******************************************************************************/

if ($_FILES['myfile']['type'] != "image/png")
    echo 'Mauvais format' . PHP_EOL;
else
    echo 'Bon Format' . PHP_EOL;

/******************************************************************************/

/**
 * With the raw request file present in the current folder who can see an http
 * request who send a php script and make believe to the server that is a PNG
 */
