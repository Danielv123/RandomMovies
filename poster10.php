<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script id="javascript" src="jquery.js"></script><!-- Thats mah jquery!-->
	<script id="javascript" src="javascript.js"></script><!-- Pretty much all of my JS -->
	<title>Jalpari: the desert mermaid</title>
</head>

<body>
	<div id="page">
	<?php include('/header.html');?>
	
	<div id="previewBox">
	<img class="importantImage" src="images/Poster10.jpg">
	<h1>Jalpari: the desert mermaid</h1>
	<h3>
	Where would you be if your mother was not allowed to be born?
	
	</h3>
	<p onclick="kinocity()">Find a cinema near you</p>
	</div>
	
	<footer>
	<p id="footerText" onload=footerLoad()>Activate JS please</p>
	<a href="ProjectFiles.html"><p>ProjectInfo</p></a>
	</footer>
	</div>
	<div id="shadow"></div>
</body>