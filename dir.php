<?php
    // echo "hello";
    // $dir = $_POST['folder'];
    $dir = str_replace('\\', '/', realpath($_POST['folder']));
    $files = scandir($dir);
    // foreach($files as $file) {
    //     echo $file . "<br>";
    // }

    foreach($files as $file) {
        if($file === '.') {continue;}
        if($file === "..") {
            echo '<div id="'.dirname($dir).'" onclick="openFolder(this.id)" class="file" ><-- Back</div>';
            continue;
        }
        $path = $dir . '/' . $file;
        if(is_dir($path)) {
            // echo $file;
            echo '<div id="'.$path.'" onclick="openFolder(this.id)" class="file" style="background-image: url(file_img/res/folder.svg);">'.$file.'<img id="del" src="file_img/del.png"/></div>';
        }
    }
    foreach($files as $file) {
        if($file === '.' || $file === '..') {continue;}
        else {
            $path = $dir . '/' . $file;
            if(is_file($path)) {
                $ext = pathinfo($path)['extension'];
                // echo $file;
                echo '<div id="'.$path.'" onclick="openFile(this.id)" class="file" style="background-image: url(file_img/res/'.$ext.'.svg);">'.$file.' <button onclick="delFile();">Delete</button> </div>';
            }
        }
    }

?>