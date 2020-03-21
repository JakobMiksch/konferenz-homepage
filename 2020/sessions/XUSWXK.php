<!doctype html>
<html lang="de">

<head>
	<?php include "../inc/meta.inc"; ?>

	<base href="<?php echo dirname($_SERVER['SCRIPT_NAME']); ?>">
	<title>Neuentwicklung der GDI-DE Testsuite – FOSSGIS 2020</title>

	<link rel="stylesheet" href="./css/normalize.css">
	<link rel="stylesheet" href="./css/base.css">
	<link rel="stylesheet" href="./css/print.css" media="print">
</head>

<body id="programm">
	<?php include "../inc/header.inc"; ?>

        <!-- This file was generated by a script. Do not edit this file in Git,
             edit contents in Pretalx, regenerate the PHP files and commit them
             in the Git repository of the website. -->
        <p><a href="programm/donnerstag.php#session_XUSWXK">&#9668;&#9668; zurück zum Programm</a> </p>
        <h2 class='abstract-title'>Neuentwicklung der GDI-DE Testsuite</h2>
        <section>
            <p>
                                <span class='abstract-speakers'>Marc Jansen, Manuel Fischer</span></p>
                            <p><span class='abstract-time-heading'>Zeit: </span>Donnerstag 12. März 11:00 Uhr<br><span class='abstract-room-heading'>Ort: </span>HS Anatomie</p>

                        <p><a href="/2020//attachments/XUSWXK_2020_03_06_Neuentwicklung_der_GDI-DE_Testsuite__BGpusFC.pdf">Vortragsfolien</a></p>
            <p>Die GDI-DE Testsuite ist eine der Nationalen Technischen Komponenten der Architektur der Geodateninfrastruktur Deutschland (GDI-DE) und dient als zentrale Testplattform der Qualitätssicherung innerhalb der GDI-DE.
Mit der GDI-DE Testsuite kann innerhalb der GDI-DE die Qualität für Geodaten und Geodatendienste geprüft werden. Mit Hilfe dieser zentralen Testplattform können Datenanbieter und Dienstebereitsteller ihre Geodaten und Dienste auf Konformität zu nationalen und internationalen Standards, z.B. den Vorgaben der europäischen INSPIRE-Richtlinie prüfen.
Die GDI-DE Testsuite ist seit Ende September 2011 frei nutzbar und unterstützt die Anbieter von Geodaten und Geodatendiensten bei der Bereitstellung ihrer Ressourcen innerhalb der GDI-DE und der Umsetzung der INSPIRE-Richtlinie. Neben einer Webanwendung (https://testsuite.gdi-de.org) und einer Download-Möglichkeit für die lokale Nutzung, ist auch eine Schnittstelle für die Ausführung von Tests aus anderen Anwendungen heraus nutzbar.
In der aktuellen Testsuite stehen heute Tests für die Konformitätsprüfung von Metadaten, Katalog-/Suchdiensten (CSW), Karten-/Darstellungsdiensten (WMS) und Downloaddiensten (WFS, Atom) bereit. Für Dienste können zusätzlich Qualitätstests zur Ermittlung von Kennzahlen zu Leistungsfähigkeit und Verfügbarkeit eines Dienstes genutzt werden.
Da die heutige Anwendung zum einen auf dem veralteten und nicht weiter gepflegten Java-Framework echo3 verbunden mit einer nicht mehr zeitgemäßen Web-Oberfläche basiert und zum anderen Anforderungen an 
•   eine erweiterte Anwendungsfunktionalität (wie z. B Integration mehrerer Test-Engines)
•   eine erhöhte Ausfallsicherheit und
•   die Einhaltung höherer Sicherheitsstandards
bestehen, hat das Lenkungsgremium der GDI-DE zur Beseitigung dieser Defizite beschlossen, die GDI-DE Testsuite durch eine Neuentwicklung zu ersetzen.
Mit dieser Neuentwicklung soll nun, ein neues, gleichwertiges System erstellt werden, welches zusammen mit dem bisherigen Funktionsumfang auch die benötigten funktionalen Erweiterungen auf einer zukunftssicheren Technologiebasis in Verbindung mit einer modernen Web-Oberfläche bereitstellt.
Ein besonder Fokus bei der Neuentwicklung der GDI-DE Testsuite liegt dabei auf folgenden Projektzielen:
•   Verbesserung der Benutzerfreundlichkeit:
durch die projektbegleitende Einbindung maßgeblicher Benutzergruppen ab der Konzeptionsphase erreicht werden. Dazu tragen die Berücksichtigung des Responsive Design sowie die Umsetzung von intelligenten Assistenten, kontextsensitive Tooltips und die Ausgabe von aussagekräftigen Testberichten zur Erreichung dieses Projektzieles bei.
•   Funktionale Erweiterbarkeit und horizontale Skalierbarkeit:
Dies soll vor allen Dingen durch die Einhaltung einer Microservices-Architektur gewährleistet werden. Charakteristisch für Microservices-Architekturen ist die einfache funktionale Erweiterbarkeit. Ebenfalls beinhalten Microservices-Architekturen das Potenzial einer erhöhten Skalierbarkeit, da im Gegensatz zu anderen Architekturmustern eine horizontale Skalierung bereits auf Microservices-Ebene möglich ist und dadurch flexible Anpassungen realisierbar sind.
•   Verbesserte Wartbarkeit:
Im Rahmen des Projektes wird eine Verbesserung der Wartbarkeit im Vergleich zur aktuellen Implementierung angestrebt. Dies soll insbesondere durch die Etablierung eines durchgängigen und weitestgehend automatisierten Deployments erreicht werden. Darüber hinaus dienen verschiedene Maßnahmen im Entwicklungsprozess wie Testautomatisierung und Code Reviews der Verbesserung der Wartbarkeit des neuen Systems.
•   Hochverfügbarkeit:
Durch die Bereitstellung des neuen Systems innerhalb eines High-Availability (HA) -Clusters soll erreicht werden, dass die neue GDI-DE Testsuite hochverfügbar bereitgestellt wird. Im Rahmen des Entwicklungsprozesses wird dieses Projektziel durch den Einsatz von Docker und Kubernetes, aber auch durch die entsprechende Auslegung der Architektur unterstützt.
Aller Voraussicht nach wird die neue GDI-DE Testsuite der Öffentlichkeit im 2. Quartal 2020 zur Verfügung gestellt werden. 
Im Vortrag wird der aktuelle Stand zur Neuentwicklung der GDI-DE Testsuite  vorgestellt. Schwerpunkte des Vortrags werden allgemeine Erläuterungen zur Anwendung und der Einsatzbereiche sowie technische Details zur intelligenten und flexiblen Einbindung unterschiedlicher Test-Engines in eine Umgebung sein.</p>
        <div class='abstract-bio'>
            <h3 class='abstract-bio-name'>Marc Jansen</h3>
            <p>Ich bin seit vielen Jahren in der OpenSource GIS-Szene aktiv, als Entwickler (u.a. <a href="http://openlayers.org/">OpenLayers</a>, <a href="https://geoext.github.io/geoext3/">GeoExt</a>, <a href="https://github.com/terrestris/shogun2">SHOGun</a> usw.), als konzeptuell Beitragender (u.a. <a href="https://github.com/terrestris/react-geo">react-geo</a>, <a href="https://github.com/terrestris/geostyler">GeoStyler</a> usw.), als Sprecher und Workshopleiter (international &amp; national), als <a href="https://www.osgeo.org/about/charter-members/">OSGeo Charter Member</a> und als Geschäftsführer von <a href="https://www.terrestris.de/">terrestris</a>, einer auf OpenSource GIS-Lösungen spezialisierten IT Firma aus Bonn.</p>
        </div>
        <div class='abstract-bio'>
            <h3 class='abstract-bio-name'>Manuel Fischer</h3>
            <p>Ich habe von 2002 bis 2006 (Diplom) und von 2007 bis 2009 (Master) an der FH Mainz Geoinformatik studiert. Aktuell bin Leiter des Betrieb GDI-DE im BKG und für den Betrieb und Ausbau der National Technischen Komponenten (Geoportal.de, GDI-DE Testsuite, GDI-DE Registry, Geodatenkatalog.de) der GDi-DE verantwortlich. Im BKG bin ich seit 2006 angestellt und war insgesamt über 10 Jahre im Bereich Softwareentwicklung (u.a. TopPlus-Verfahren) tätig.</p>
        </div>
        </section>


	<?php include "../inc/footer.inc"; ?>

</body>

</html>