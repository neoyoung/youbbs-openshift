<?php

$headers = apache_request_headers();

$uid = intval($_GET['uid']);
$s = $_GET['s'];

if($uid){
    $base_url = $_ENV['OPENSHIFT_DATA_DIR'];
    $img_url = $base_url.'avatar/'.$s.'/'.$uid.'.png';
}else{
    $img_url = 'static/0-'.$s.'.png';
}

$ft = filemtime($img_url);

if (isset($headers['If-Modified-Since']) && (strtotime($headers['If-Modified-Since']) == $ft)) {
    header("HTTP/1.1 304 Not Modified");
    header("Status: 304 Not Modified");
    header('Last-Modified: '.gmdate('D, d M Y H:i:s', $ft).' GMT');
    exit;
}else{
    $timestamp = time();
    
    header('Content-Type: image/png');
    header('Last-Modified: '.gmdate('D, d M Y H:i:s \G\M\T',$ft), true, 200);
    header('Cache-Control: max-age=315360000, public, must-revalidate');
    header('Expires: '.gmdate('D, d M Y H:i:s \G\M\T',$ft+8640000));

    readfile($img_url);
}

?>
