<!DOCTYPE html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script id="javascript" src="jquery.js"></script><!-- Thats mah jquery!-->
	<script id="javascript" src="javascript.js"></script><!-- Pretty much all of my JS -->
	<title>Sherlock Holmes: a game of shadows</title>
</head>

<body>
	<div id="page">
	<?php include('/header.html');?>
	
	<div id="previewBox">
	<img class="importantImage" src="images/Poster1.jpg">
	<h1>Sherlock holmes: a game of shadows</h1>
	<h3>Sherlock Holmes (Robert Downey Jr.) has always been the smartest man in the room...until now. There is a new criminal mastermind at large-Professor Moriarty (Jared Harris)-and not only is he Holmes' intellectual equal, but his capacity for evil, coupled with a complete lack of conscience, may actually give him an advantage over the renowned detective. When the Crown Prince of Austria is found dead, the evidence, as construed by Inspector Lestrade (Eddie Marsan), points to suicide. But Sherlock Holmes deduces that the prince has been the victim of murder-a murder that is only one piece of a larger and much more portentous puzzle, designed by Professor Moriarty. The cunning Moriarty is always one step ahead of Holmes as he spins a web of death and destruction-all part of a greater plan that, if he succeeds, will change the course of history</h3>
	
	<p onclick="kinocity()">Find a cinema near you</p>
	</div>
	
	<footer>
	<p id="footerText" onload=footerLoad()>Activate JS please</p>
	<a href="ProjectFiles.html"><p>ProjectInfo</p></a>
	</footer>
	</div>
	<div id="shadow"></div>
</body>