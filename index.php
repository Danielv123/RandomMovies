<!DOCTYPE html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script id="javascript" src="jquery.js"></script><!-- Thats mah jquery!-->
	<script id="javascript" src="javascript.js"></script><!-- Pretty much all of my JS -->
	<title>MovieList</title>
</head>

<body>
	<div id="page">
	
	
	<?php include('path_to_file/file.htm');?>
	
	<div id="previewBox">
	<img class="importantImage" src="images/SharknadoPoster.jpg">
	<h1>Sharknado</h1>
	<h3>When a freak hurricane swamps Los Angeles, nature's deadliest killer rules sea, land, and air as thousands
	of sharks terrorize the waterlogged populace. The main person has to save his family, and later, LA.</h3>
	</div>
	
	<div id="movies">
	<div class="movie"><img src="images/Poster1.jpg" onclick="poster1()" class="moviePoster"></div>
	<div class="movie"><img src="images/Poster3.jpg" onclick="poster3()" class="moviePoster"></div>
	<div class="movie"><img src="images/Poster4.jpg" onclick="poster4()" class="moviePoster"></div>
	<div class="movie"><img src="images/Poster5.jpg" onclick="poster5()" class="moviePoster"></div>
	<div class="movie"><img src="images/Poster6.jpg" onclick="poster6()" class="moviePoster"></div>
	<div class="movie"><img src="images/Poster7.jpg" onclick="poster7()" class="moviePoster"></div>
	<div class="movie"><img src="images/Poster8.jpg" onclick="poster8()" class="moviePoster"></div>
	<div class="movie"><img src="images/Poster9.jpg" onclick="poster9()" class="moviePoster"></div>
	<div class="movie"><img src="images/Poster10.jpg" onclick="poster10()" class="moviePoster"></div>
	<div class="movie"><img src="images/Poster11.jpg" onclick="poster11()" class="moviePoster"></div>
	<div class="movie"><img src="images/Poster12.jpg" onclick="poster12()" class="moviePoster"></div>
	<div class="movie"><img src="images/Poster13.jpg" onclick="poster13()" class="moviePoster"></div>
	<div class="movie"><img src="images/Poster14.jpg" onclick="poster14()" class="moviePoster"></div>
	<div class="movie"><img src="images/Poster15.jpg" onclick="poster15()" class="moviePoster"></div>
	<div class="movie"><img src="images/Poster16.jpg" onclick="poster16()" class="moviePoster"></div>
	<div class="movie"><img src="images/Poster17.jpg" onclick="poster17()" class="moviePoster"></div>
	<div class="movie"><img src="images/Poster18.jpg" onclick="poster18()" class="moviePoster"></div>
	<div class="movie"><img src="images/Poster19.jpg" onclick="poster19()" class="moviePoster"></div>
	<div class="movie"><img src="images/Poster20.jpg" onclick="poster20()" class="moviePoster"></div>
	<div class="movie"><img src="images/Poster21.jpg" onclick="poster21()" class="moviePoster"></div>
	<div class="movie"><img src="images/Poster22.jpg" onclick="poster22()" class="moviePoster"></div>
	<div class="movie"><img src="images/Poster23.jpg" onclick="poster23()" class="moviePoster"></div>
	<div class="movie"><img src="images/Poster25.jpg" onclick="poster25()" class="moviePoster"></div>
	<div class="movie"><img src="images/Poster26.jpg" onclick="poster26()" class="moviePoster"></div>
	<div class="movie"><img src="images/Poster27.jpg" onclick="poster27()" class="moviePoster"></div>
	<div class="movie"><img src="images/Poster28.jpg" onclick="poster28()" class="moviePoster"></div>
	<div class="movie"><img src="images/Poster29.jpg" onclick="poster29()" class="moviePoster"></div>
	<div class="movie"><img src="images/Poster32.jpg" onclick="poster32()" class="moviePoster"></div>
	</div>
	
	<footer>
	<p id="footerText" onload=footerLoad()>Activate JS please</p>
	<a href="ProjectFiles.html"><p>ProjectInfo</p></a>
	</footer>
	</div>
	<div id="shadow"></div>
</body>