<?php

$headers = apache_request_headers();
$id = intval($_GET['id']);

if (isset($headers['If-Modified-Since'])){
    //header('Last-Modified: '.gmdate('D, d M Y H:i:s', $id).' GMT', true, 304);
    header("HTTP/1.1 304 Not Modified");
    header("Status: 304 Not Modified");
    exit;
}else{
    $timestamp = time();
    
    $uid = intval($_GET['uid']);
    $n = $_GET['n'];
    
    header('Content-Type: image/'.$n);
    header('Last-Modified: '.gmdate('D, d M Y H:i:s \G\M\T',$id), true, 200);
    header('Cache-Control: max-age=315360000, public, must-revalidate');
    header('Expires: '.gmdate('D, d M Y H:i:s \G\M\T',$id+8640000));

    readfile($_ENV['OPENSHIFT_DATA_DIR'].'upload/'.$uid.'/'.$id.'.'.$n);
}

?>
