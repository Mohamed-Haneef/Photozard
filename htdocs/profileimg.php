<?php

include 'libs/load.php';
$upload_path = get_config('profile_path');
$fname = $_GET['name'];
$image_path = $upload_path . $fname;

//To prevent directory traversal vulnerablity
$image_path = str_replace('..', '', $image_path);

if (is_file($image_path)) {
    header("Content-Type:".mime_content_type($image_path));
    header("Content-Length:".filesize($image_path));
    header('Cache-control: max-age='.(60*60*24*365));
    header('Expires: '.gmdate(DATE_RFC1123, time()+60*60*24*365));
    header('Last-Modified: '.gmdate(DATE_RFC1123, filemtime($path_to_image)));
    header_remove('Pragma');
    echo file_get_contents($image_path);
}
