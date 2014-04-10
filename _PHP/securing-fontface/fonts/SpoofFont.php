<?php
if (@$_GET){$_SESSION["fontkey"] = "ended";}else{
session_start();
header("Content-type: text/css
Cache-Control: max-age=3600");

if ($_SESSION["fontkey"] != "somethingelse") {
    die("Sharp Serif, the font featured on this page, is copyright Aaron Carambula. You can buy it from him at carambula.com");
}

$_SESSION["fontkey"] = "ended";
// We'll be outputting a ttf, but this content type is fine
header('Content-type: text/html');
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past
// It will be called 1234.ttf, the name doesn't matter
header('Content-Disposition: attachment; filename="' . $_SERVER['HTTP_REFERER'] . '"');

// The TTF source is in SharpLC.ttf
readfile('SharpLC.ttf');
}
?>