<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script id="javascript" src="jquery.js"></script><!-- Thats mah jquery!-->
	<script id="javascript" src="javascript.js"></script><!-- Pretty much all of my JS -->
	<title>Top 10 movies of all time</title>
</head>

<body>
	<div id="page">
	<?php include('/header.html');?>
	
	<div id="previewBox">
	<img class="importantImage" src="FullScaleImages/Poster5.jpg">
	<h1>Top 10 movies of all time</h1>
	<h3>
	At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
	
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