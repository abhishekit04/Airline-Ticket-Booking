<?php

/*
 * Ajax Multiple Image Uploader
 * https://github.com/tharindulucky/ajax-multi-image-uploader
 *
 * Copyright 2018, Tharindu Lakshitha
 * https://coderaweso.me
 *
 * Licensed under the MIT license:
 * https://opensource.org/licenses/MIT
 */

$ds = DIRECTORY_SEPARATOR;  //1
$storeFolder = 'multi_images';   //2
if (!empty($_FILES)) {
    $tempFile = $_FILES['multi_images']['tmp_name'];
   $file_name = $_FILES['multi_images']['name'];
    $ext = pathinfo($file_name, PATHINFO_EXTENSION);

    if(filesize($tempFile) > 5000000){
        echo 'FAILED';
        die();
    }

    if($ext == 'jpg' || $ext == 'png' || $ext == 'JPG' || $ext == 'PNG'|| $ext == 'WEBP' || $ext == 'webp'){
        $new_file_name = rand().date('dmyhis').'.'.$ext;
        $targetPath = 'multi_images/';  //4
        $targetFile =  $targetPath. $new_file_name;  //5

        if ($img = @imagecreatefromstring(file_get_contents($tempFile))) {
            $upload_result = move_uploaded_file($tempFile,$targetFile); //6
            echo $new_file_name;
        }else{
            echo 'FAILED';
        }
    }else{
        echo 'FAILED';

    }
}
if($_REQUEST['actionajax']=='removeimg'){
    unlink('multi_images/'.$_REQUEST[name]);
}