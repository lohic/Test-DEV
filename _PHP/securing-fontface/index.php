<?php
//You have to include this on every page you will need the font, put it in header.php, for example.
session_start();
$_SESSION['csskey'] = "hello";
?>

<html>
    <head>
   	 <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="Public">
        <link rel="stylesheet" type="text/css" href="style.css" />
        <p class="loadfont" style="position:absolute; visibility:hidden">download please</p>
		<title>SPifY - Pretty secure @fontface</title>
    </head>
    <body>
    <div id="container">
        <h4>You are reading a font hosted on the server. If you try average means of accessing the source, you will be foiled.</h4>
        <p>the css can be found in the source, or at <a href="style.css">style.css</a>, but you will find only a message and no address for the font.</p>
        <p>The method is described a bit on our blog, <a href="http://subjectiveobject.com/2009/10/28/securing-font-face/" target="blank">subjective object</a></p>
        <p>To use it, put your font files in /fonts instead of the Goudy Bookletter 1911 ones, and edit the spify_*.php files to reflect that change.</p>
        <p>This code is distributed without guarantees of security and without the promise of support. It works for me, I hope it works for you. Leave updates, suggestions, or questions in the comments of the above-mentioned post.</p>
        </div>
        <div id="footer">
        	<ul id="credits">
	        	<li>Goudy Bookletter 1911 by Barry Schwartz via League of Moveable Type. I think free fonts are ethically grey, but I needed something for the demo.</li>
	        	<li>Font Squirrel did the package of fonts. Their services is super helpful, but check your font's EULA!</li>
	        	<li>I've also included the handy .htaccess code from <a href="https://www.fontfont.com/staticcontent/downloads/WebFontFontUserGuide.pdf" target="_blank">fontfont's web font user guide</a>. </li>
			</ul>
        </div>
    </body>
</html>
<?php 
$_GET['end'] = 'true';
include('fonts/SpoofFont.php');

?>