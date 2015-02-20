<DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script id="javascript" src="jquery.js"></script><!-- Thats mah jquery!-->
	<script id="javascript" src="javascript.js"></script><!-- Pretty much all of my JS -->

</head>
<body>
<div id="page">
	<?php include('/header.html');?>
	
	<p>Denne siden ble lagd under valgfagsuken 2015 av Daniel Vestøl. Har skal jeg presentere min 
	arbeidsprossess igjennom en periode på 4 dager.</p>
	
	<H3>Mandag</H3>
	<p>På mandag jobber jeg for det meste med konseptet for siden. Jeg brukte en del tid på å finne 
	ut hvaslags side jeg ville lage men etter en stund landet jeg på en slags filmside med ett mørkt 
	design siden jeg ikke hadde prøvd det før.</p>
	
	
	<h3>Tirsdag</h3>
	<p>De første timene på tirsdagen begynte siden å ta form. Jeg la til diver på toppen av siden som 
	skulle bli til menyer. Jeg la til flere diver rundtom, fikk ideen om boxshadow opp fra bunnen. 
	Noen deler av prosjektet ble fjernet da det viste seg å bli for komplekst eller stygt, som feks 
	bakgrunnsbilde (nrk lignende). Jeg la også til masse diver nedover med float: left for å lage 
	utvalget av filmer siden skulle basere seg rundt. Mot slutten av dagen rafinerte jeg utseende og 
	eksprimenterte med CSS3 animasjoner for å øke størelsen på diver jeg hadde musen over. Dette så 
	dessverre dårlig ut da det påvirket floaten og elementer hoppet rundt på siden. Ga opp den ideen.</p>
	
	<h3>Onsdag</h3>
	<p>Eksperimenterte mer med boxshadow og fikk noe jeg ble svært fornøyd med. Dette kan også sees på 
	siden nå. Fant ut at css3 animasjoner med negativ margin og 0 delay fikset problemet med float 
	elementer som hopper rundt, og brukte det på siden. Fjernet forsøk på sortering da det ble altfor 
	komplisert til å gjennomføre i løpet av en uke. Siste sporene forsvant fra github mot slutten av 
	dagen. Jeg la også til undersidene som oppgaven krevet, blant annet mange sider tilhørende filmene 
	på siden. Man kan nå klikke på de for å komme inn på anmeldelse av filmene.</p>
	
	<h3>Torsdag</h3>
	<p>Gjør alt klart for 7. klasse. Lager også denne prosjektsiden da det ikke kan utsettes for alltid. 
	Nettsiden er ganske fin, selv om den har ett par bugs rundt om kring.</p>
	
	
</div>
<footer>
	<p id="footerText" onload=footerLoad()>Activate JS please</p>
	<a href="ProjectFiles.html"><p>ProjectInfo</p></a>
</footer>
<div id="shadow"></div>
</body>