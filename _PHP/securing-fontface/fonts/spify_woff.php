<?php

session_start();
header("Cache-Control: no-cache");

if ($_SESSION["fontkey"] != "somethingelse") {
    die("Goudy Bookletter 1911, the font featured on this page, is totally opensource, but for demo purposes I'm showing you this message instead. You can download it from http://forceperunitarea.tumblr.com/");
}
$_SESSION["csskey"] = "ended";
$_SESSION["fontkey"] = "ended";

// We'll be outputting a woff, but this content type is fine
header('Content-type: font/woff');

// It will be called 1234.woff, the name doesn't matter
header('Content-Disposition: attachment; filename="1234.woff"');

// Set the woff source file
$file = './goudy_bookletter_1911-webfont.woff';

if (file_exists($file)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename='.basename($file));
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    ob_clean();
    flush();
    readfile($file);
    exit;
}else{
readfile($file);
}

?>
