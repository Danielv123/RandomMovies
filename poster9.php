<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script id="javascript" src="jquery.js"></script><!-- Thats mah jquery!-->
	<script id="javascript" src="javascript.js"></script><!-- Pretty much all of my JS -->
	<title>The adventures of Tintin</title>
</head>

<body>
	<div id="page">
	<?php include('/header.html');?>
	
	<div id="previewBox">
	<img class="importantImage" src="images/Poster9.jpg">
	<h1>The adventures of Tintin</h1>
	<h3>
	Intrepid reporter Tintin and Captain Haddock set off on a treasure hunt for a sunken ship commanded by Haddock's ancestor.
	
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