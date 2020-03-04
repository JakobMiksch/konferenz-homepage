<!doctype html>
<html lang="de">

<head>
	<?php include "../inc/meta.inc"; ?>

	<base href="<?php echo dirname($_SERVER['SCRIPT_NAME']); ?>">
	<title>FOSSGIS 2020 - Standort</title>

	<link rel="stylesheet" href="./css/normalize.css">
	<link rel="stylesheet" href="./css/base.css">
	<link rel="stylesheet" href="./css/print.css" media="print">
	<link rel="stylesheet" href="../static/leaflet/1.3.4/leaflet.css"/>

	<script src="../static/leaflet/1.3.4/leaflet.js"></script>
	<script src="./standort/script/leaflet.addons.js"></script>
	<script src="./standort/data/buildings.js"></script>
	<script src="./standort/data/hotels.js"></script>
	<script src="./standort/script/map.js"></script>
</head>

<body id="standort">

	<?php include "../inc/header.inc"; ?>

	<h2>Standort</h2>

	<div class="map-container">
		<div id="map" class="map"></div>
	</div>

	<p>
		Die Konferenz findet in den Hörsälen und Seminarräumen rund um das Chemiehochhaus im Institutsviertel der Albert-Ludwigs-Universität Freiburg, Alberstraße 21, 79100 Freiburg statt. Das Foyer im Chemiehochhaus dient als zentraler Empfang.
		Die Zugänge zu den Räumlichkeiten sind behindertengerecht gestaltet. Sollten Sie trotzdem Probleme beim Erreichen der Räume haben, zögern Sie bitte nicht das Konferenz-Team anzusprechen.
	</p>

	<ul class="tiles">
		<li class="tile">
			<img class="img-fluid" src="./data/images/Lageplan_Institutsviertel.jpg" alt="Institutsviertel Uni Freiburg">
		</li>
	</ul>

	<h3>Chemiehochhaus: Foyer, PAB & Catering</h3>
	<p>
		Im Foyer des Chemiehochhaus begrüßen wir Sie am <b>Welcome Desk</b>.
		Im angrenzenden Präsentations- und Ausstellungsbereich (<b>PAB</b>) ist Raum für ein Aufeinandertreffen mit den <b>Ausstellern</b> und
		<b>Sponsoren</b>. Hier besteht auch die Möglichkeit sich im "Himmel" als Konferenz-Helfer zu melden oder mit dem FOSSGIS e.V. am Vereinsstand ins Gespräch zu kommen.
	</p>

	<!--<img src="./standort/img/" class="img-fluid" alt="">-->

	<h3>Hörsäle, Seminarsäle & Catering</h3>
	<p>
		Die <b>Vorträge</b> finden in Hörsälen und Seminarräumen statt.
		Durch die hohe Nachfrage kann es zeitweise dazu kommen, dass die Hörsäle bei Vorträgen voll ausgelastet sind.
		Für diesen Fall haben wir Streaming-Räume zwischen den Hörsälen organisiert.
	</p>

<!--	<ul class="tiles">
		<li class="tile">
			<img src="./standort/img/" class="img-fluid" alt="">
		</li>
		<li class="tile">
			<img src="./standort/img/" class="img-fluid" alt="">
		</li>
	</ul>-->

	<h3>Rechenzentrum - Workshops</h3>
	<p>
		Die <b>Workshops</b> werden im Rechenzentrum durchgeführt. 
		Dieses ist etwa 3 Gehminuten vom Haupteingang entfernt. 
	</p>

	<!--<img src="./standort/img/" class="img-fluid" alt="">-->
	<br>
	<h2>Ausflugsmöglichkeiten & Sehenswürdigkeiten</h2>
	<p>Freiburg bietet mit seiner Lage zwischen Schwarzwald und Oberrheingraben genügend attraktive Ausflugsziele, 
	um den Aufenthalt über die Konferenz hinaus zu verlängern.</p>
	<p>
		Freiburg hat eine umfangreiche und übersichtliche <a href="https://visit.freiburg.de/" target="_blank">Website für Besucher</a>
		, die Ausflugsziele in der Umgebung vorstellt, Informationen über die Stadt zusammenfasst und die Planung von der Unterkunft bis zur
		Stadtführung bündelt.
	</p>
	<p>
		Außerdem auf: <a href="https://wikitravel.org/de/Freiburg_im_Breisgau" target="_blank">Wikitravel</a> 
	</p>

	<h3>Öffentlicher Nahverkehr</h3>
	<p>Der öffentliche Nahverkehr wird durch die Freiburger Verkehrs AG (VAG) organisiert. Der Ticketkauf erfolgt in der Regel 
		in der Tram oder im Bus. Sie erhalten am Welcome Deskein kostenfreies ÖPNV-Ticket.</p>

	<p><b>Hilfreiche Informationen</b></p>
	<ul>
		<li><a href="https://www.vag-freiburg.de/fahrplan/netzplaene" rel="nofollow" target="_blank"> Liniennetze der VAG</a></li>
		
		<li><a href="https://www.vag-freiburg.de/fahrplan/fahrplanauskunft" rel="nofollow" target="_blank"> Fahrplanauskunft der VAG</a></li>
		<li><a href="https://www.vag-freiburg.de/tickets" rel="nofollow" target="_blank"> Ticketübersicht</a> (Hinweis: Sie erhalten ein kostenfreies ÖPNV-Ticket)</li>
		

		<li><a href="https://www.vag-freiburg.de/mehr-mobilitaet/fahrrad-leihen" rel="nofollow" target="_blank">Fahrradverleih</a> (Frelo stellt kostenfreie Leihfahrräder zur Verfügung, Gutscheincode am Welcome Desk. Zum Ausleihen wird die NextBike-App verwendet.)</li>
	</ul>

	<h3>Taxi</h3>
	<ul>
		<li><a href="https://www.taxi.de/in/freiburg/">Taxi Freiburg</a></li>
	</ul>

	<?php include('../inc/footer.inc'); ?>
</body>
</html>
