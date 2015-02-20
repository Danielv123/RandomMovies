<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script id="javascript" src="jquery.js"></script><!-- Thats mah jquery!-->
	<script id="javascript" src="javascript.js"></script><!-- Pretty much all of my JS -->
	<title>About movielist</title>
</head>

<body>
	<div id="page">
	<?php include('/header.html');?>
	
	<div id="previewBox">
	<img class="importantImage" src="images/Poster10.jpg">
	<h1>Made for teachers</h1>
	<h3>
	Yes, that's right! This website is specifically made for teachers and their enjoyment. Thats why it was made at school and will be graded.
	
	
	</h3>
	<p onclick="projectInfo()">ProjectInfo</p>
	</div>
	
	<footer>
	<p id="footerText" onload=footerLoad()>Activate JS please</p>
	<a href="ProjectFiles.html"><p style="color: blue;">ProjectInfo</p></a>
	</footer>
	</div>
	<div id="shadow"></div>
</body>