<?php
    $dir = $_POST['folder'];
    $files = scandir($dir);
    foreach($files as $file) {
        echo $file;
    }

?>