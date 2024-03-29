<?php
$current_page = "portfolio";
include("./private/pages/elements/head.php");
?>
<title>Portfolio</title>
</head>

<body>
    <div id="top" class="site">
        <?php
        include("./private/pages/elements/header.php");
        ?>

        <main>
            <h1>Mein Portfolio</h1>
            <div class="line-left">
                <section class="projects">
                    <h3>Praktikumsprojekte</h3>
                    <p>
                        Im Folgenden erhalten Sie eine kurze Übersicht über die Projekte, an denen ich während meines
                        Praktikums gearbeitet habe, sowie die spezifischen Fähigkeiten, die ich dabei erworben und
                        vertieft habe.
                    </p>

                    <div class="line-left">
                        <div class="project">
                            <h2>Konverter Prototyp</h2>
                            <table>
                                <tr>
                                    <td>Anmerkung:</td>
                                    <td>Dies war meine IHK Abschlussarbeit.</td>
                                </tr>
                                <tr>
                                    <td>Warum:</td>
                                    <td>
                                        <ul class="portf_ul">
                                            <li>Entwicklung eines Prototyps zur Extrahierung eines Worddokuments in ein
                                                JSON-Format für den Designer Polotno.</li>
                                            <li>Bereitstellung einer Lösung, womit der Kunden vorhandene Word-Dokumente
                                                effizient nutzen können.</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Was ist Polotno:</td>
                                    <td><u>Polotno Studio</u> ist ein Design-Editor, der eine umfangreiche Bibliothek
                                        mit Fotos und Vektorillustrationen verwendet, um Bilder für soziale Medien,
                                        YouTube-Vorschauen, Cover und Präsentationen zu erstellen.</td>
                                </tr>
                                <tr>
                                    <td>Erworbene Fähigkeiten:</td>
                                    <td>
                                        <ul class="portf_ul">
                                            <li>Umgang mit XML (docx) und JSON-Formaten.</li>
                                            <li>Analysieren und Extrahieren von Absätzen aus einem docx-Format.</li>
                                            <li>Vertiefung der TypeScript-Kenntnisse.</li>
                                            <li>Erfahrung in Projektplanung und -management.</li>
                                            <li>Fähigkeiten in Fehlerbehandlung und Debugging entwickelt.</li>
                                            <li>Umgang mit der Erstellung von Dokumentationen unter Verwendung von
                                                Markdown.</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Verwendete Technologien:</td>
                                    <td>React, TypeScript</td>
                                </tr>
                                <tr>
                                    <td>Kategorie:</td>
                                    <td>Praktikum, TypeScript, React, Dateiformate</td>
                                </tr>
                            </table>
                        </div>

                        <div class="project">
                            <h2>Erworbene Fähigkeiten während meines Praktikums</h2>

                            <table>
                                <tr>
                                    <td>Fähigkeiten:</td>
                                    <td>
                                        <ul class="portf_ul">
                                            <li>React</li>
                                            <li>Redux</li>
                                            <li>Javascript/Typescript</li>
                                            <li>Translation (i18next) - Englisch/Deutsch</li>
                                            <li>Umgang mit XML (docx), JSON, CSV</li>
                                            <li>MS Azure, Teams, Einblick in Figma </li>
                                        </ul>
                                </tr>
                                <tr>
                                    <td>Kategorie:</td>
                                    <td>Praktikum, Fähigkeiten</td>
                                </tr>
                            </table>
                        </div>

                    </div>

                    <h3>Eigene Projekte</h3>
                    <div class="line-left">

                        <div class="project">
                            <h2>Endless Jumping and Running Game</h2>
                            <table>
                                <tr>
                                    <td>Anmerkung:</td>
                                    <td>
                                        <p>
                                            Dieses Jump-and-Run-Spiel habe ich mithilfe eines Tutorials auf YouTube
                                            entwickelt.
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Warum:</td>
                                    <td>
                                        <p>
                                            Ich wollte ein besseres Verständnis dafür entwickeln, wie man
                                            objektorientiert in JavaScript arbeitet.
                                        </p>
                                        <p>
                                            Die Entwicklung eines Spiels bot sich an, um ebenso Einblicke in die
                                            Verwendung von Canvas zu erhalten.
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Bilder:</td>
                                    <td>
                                        <p>Final Spiel:</p>
                                        <img src="public/img/games/frankslaboratory_tutorial/finalGame-600pxWide.png"
                                            alt="Jump-and-Run-Spiel" style="max-width: 100%">

                                        <p>Krähen schießen Spiel:</p>
                                        <img src="public/img/games/frankslaboratory_tutorial/CrowShooting-600pxWide.png"
                                            alt="Krähen schießen Spiel" style="max-width: 100%">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Erworbene Fähigkeiten:</td>
                                    <td>
                                        <ul class="portf_ul">
                                            <li>Umgang mit der Objektorientierung in JavaScript</li>
                                            <li>
                                                Kennenlernen von Funktionen mit Canvas, wie dem Zeichnen von Bildern.
                                            </li>
                                            <li>Sprite-Animations-Techniken</li>
                                            <li>Parallaxeffekte</li>
                                            <li>Bewegungsmuster für Gegner</li>
                                            <li>Mauseventhandling und Tasteneventhandling</li>
                                            <li>Kollisionsabfragen von Objekten</li>
                                            <li>State-Management für die Charakterbewegungen</li>
                                            <li>
                                                Weitere Fähigkeiten im Umgang mit Canvas, wie zum Beispiel die
                                                Implementierung von Partikelsystemen für spezielle Effekte.
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Verwendete Technologien:</td>
                                    <td>
                                        <p>JavaScript (objektorientiert), Canvas, HTML, CSS</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Links:</td>
                                    <td>
                                        <p>
                                            <a href="https://github.com/M-Roesner/frankslaboratory_JavaScript-Game-Development-Course-for-Beginners"
                                                target="_blank" rel="noopener noreferrer">Github: mein Code</a>
                                        </p>
                                        <p>
                                            <a href="https://www.youtube.com/c/Frankslaboratory" target="_blank"
                                                rel="noopener noreferrer">YouTube: Tutorial</a>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Kategorie:</td>
                                    <td>Tutorial, Spielentwicklung</td>
                                </tr>
                            </table>
                        </div>

                        <p></p>
                        <p>Die nachfolgenden Projekte entstanden während meiner Umschulungszeit.</p>

                        <div class="project">
                            <h2>4 Gewinnt</h2>
                            <table>
                                <tr>
                                    <td>Anmerkung:</td>
                                    <td>
                                        <p>Dies war ein kleines Gruppenprojekt während meiner Umschulung, welches
                                            benotet wurde.</p>
                                        <p>Es wurde innerhalb von etwa 2 Wochen außerhalb des regulären Schulunterrichts
                                            geplant und entwickelt.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Warum:</td>
                                    <td>
                                        <p>Der Schwerpunkt lag auf der Entwicklung einer Webseite ausschließlich mit
                                            PHP, wobei folgende Vorgaben von unserem Dozenten festgelegt wurden:</p>
                                        <ul class="portf_ul">
                                            <li>Funktionen</li>
                                            <li>Schleifen</li>
                                            <li>If-Klauseln</li>
                                        </ul>
                                        <p></p>
                                        <p>
                                            Da ich mit einem Klassenkameraten ein gemeinsames Projekt umsetzen wollte,
                                            musste der Umfang entsprechend größer sein, um die Note zu rechtfertigen.
                                            Aus diesem Grund haben wir uns für die Entwicklung dieses Spiels
                                            entschieden.
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Bild:</td>
                                    <td>
                                        <img src="public/img/games/4wins/4gewinnt-600pxWide.png" alt="4 Gewinnt"
                                            style="max-width: 100%">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Verwendete Technologien:</td>
                                    <td>
                                        <p>PHP (objektorientiert), HTML, CSS</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Link:</td>
                                    <td>
                                        <p>
                                            <a href="https://github.com/M-Roesner/four-wins" target="_blank"
                                                rel="noopener noreferrer">Github: 4 Gewinnt</a>
                                        </p>
                                        <!-- <p>
                                            <a href="projects/four-wins/index.php" target="_blank">Spiel: four-wins</a>
                                        </p> -->
                                    </td>
                                </tr>
                                <tr>
                                    <td>Kategorie:</td>
                                    <td>Spielentwicklung</td>
                                </tr>
                            </table>
                        </div>

                        <div class="project">
                            <h2>Haushaltsbuch</h2>
                            <table>
                                <tr>
                                    <td>Anmerkung:</td>
                                    <td>Erstellt für eine Webseite mit einer Datenbankanbindung, als DO-IT Projekt.</td>
                                </tr>
                                <tr>
                                    <td>Was ist DO-IT:</td>
                                    <td>Ist eine Art von Selbstpraktikum, wo man sich selbständig ein Projekt erarbeitet
                                        und
                                        sich somit neue Kenntnisse aneignet.</td>
                                </tr>
                                <tr>
                                    <td>Warum:</td>
                                    <td>
                                        <ul class="portf_ul">
                                            <li>Vertiefen der Kenntnisse in HTML und CSS</li>
                                            <li>Zugriff auf eine Datenbank</li>
                                            <li>Erlernen der Grundbefehle einer Datenbank (schreiben, lesen, bearbeiten,
                                                löschen)</li>
                                            <li>Umgang mit Klassen</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Womit:</td>
                                    <td>
                                        <ul class="portf_ul">
                                            <li>PHP, DB (MySQL), HTML, CSS, etwas JavaScript</li>
                                            <li>DB-Schnittstelle PDO in PHP</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Kategorie:</td>
                                    <td>Webseite, Datenbank</td>
                                </tr>
                            </table>
                        </div>

                        <div class="project">
                            <h2>Minesweeper</h2>
                            <table>
                                <tr>
                                    <td>Warum:</td>
                                    <td>
                                        <ul class="portf_ul">
                                            <li>Erlernen der Funktionsweise von Arrays</li>
                                            <li>Aufbau eines Spielmenüs</li>
                                            <li>Speichern von Parametern</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Womit:</td>
                                    <td>
                                        <p>Ein-, Ausgabe in der Konsole von intellij.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Kategorie:</td>
                                    <td>Spielentwicklung</td>
                                </tr>
                            </table>
                        </div>

                    </div>

                </section>
            </div>
        </main>

        <?php include("./private/pages/elements/gotop.php"); ?>
        <?php include("./private/pages/elements/footer.php"); ?>
    </div>

</body>

</html>