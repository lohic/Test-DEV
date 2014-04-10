<?php
session_start();
header("Content-type: text/css");

if ($_SESSION["csskey"] != "hello") {
    die("Goudy Bookletter 1911, the font featured on this page, is totally opensource, but for demo purposes I'm showing you this message instead. You can download it from http://forceperunitarea.tumblr.com/");
}
$_SESSION["csskey"] = "ended";

$_SESSION["fontkey"] = "somethingelse";
?>

@font-face {
    font-family: 'GoudyBookletter1911Regular';
    src: url('./fonts/spify_eot.php');
    src: url('./fonts/spify_eot.php?#iefix') format('embedded-opentype'),
         url('./fonts/spify_woff.php') format('woff'),
         url('./fonts/spify_ttf.php') format('truetype'),
         url('./fonts/spify_svg.php#GoudyBookletter1911Regular') format('svg');
    font-weight: normal;
    font-style: normal;

}


.loadfont{
	  font-family: "GoudyBookletter1911Regular";
}
body {
  background-color: #eee;
  color: #333;
  font-family: "GoudyBookletter1911Regular", "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", sans-serif;
  font-size: 22px;
  font-weight: normal;
  font-style: normal;
  line-height: 1.5;
}
h4{
  font-size: 60px;
font-weight: 300;
  line-height: 1.1;
  text-shadow: #B0B0B0 0 2px 5px;
}
a{
	color: #000;
    text-decoration: none;
    border-bottom: #B0B0B0 solid 1px;
}
a:hover{
  text-shadow: #B0B0B0 1px 1px 1px;
}

a:active{
  text-shadow: #B0B0B0 -1px -1px 1px;
}


#container{
	margin-right: 20%
}


