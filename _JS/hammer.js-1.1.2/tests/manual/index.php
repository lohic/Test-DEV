<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Test dévelopement</title>
<style type="text/css">
<!--
body,td,th {
	color: #000000;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	max-width:900px;
	margin:auto;
}
body {
	background-color: #CCCCCC;
}

a:link {
	color: #000000;
	text-decoration: none;
	padding:5px;
	display:inline-block;
}

.Style1 {
	color: #FF0000;
	font-size: 18px;
	font-weight: bold;
}

ul{
	list-style:none;
	list-style-position:inside:
	margin:0;
	padding:0;
}

ul li{
	float:left;
	display:block;
	width:150px;
	height:50px;
	margin:5px;
	padding:5px;
	background:#FFF;
	text-transform:uppercase;
	background-size:cover;
}

ul li:hover a{
	background:#000;
	color:#FFF;
}

ul li.test{
	background:#666;
}

ul li.site{
	background:#FF0;
}
-->
</style>

<script language="javascript" type="text/javascript" src="_lib/jquery.js"></script>
<script language="javascript" type="text/javascript">

$(document).ready(function(){
	$("ul li").mouseenter(function(){
		$(this).css("background-image","url("+$(this).attr('img')+")");
	});
	
	$("ul li").mouseleave(function(){
		$(this).css("background-image","none");
	});
});

</script>

</head>

<body class="content">
<ul>
  
  <li><h1>{ PROJETS }</h1></li>
   
    <?php
	
	if ($handle = opendir('./')) {

    /* Ceci est la façon correcte de traverser un dossier. */
		while (false !== ($file = readdir($handle))) {
		
			if ($file != "." && $file != ".." && $file!=".DS_Store" && $file!="index.php" && $file!=".localized" && substr($file,-3,3)!="png"){
		   ?>
			<li class="<?php if(substr($file,0,4) == 'Test'){echo 'test'; }else if(substr($file,0,4) == "Site"){echo 'site';} ?>">
				<a href="<?php echo $file; ?>"><?php echo $file;?></a>
			</li>
			<?php
			}
		}

		closedir($handle);
	}   
	?>
</ul>
</body>
</html>
<?php
?>
