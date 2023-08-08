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
                                <td>Spiel</td>
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
                                <td>Ist eine Art von Selbstpraktikum, wo man sich selbständig ein Projekt erarbeitet und sich somit neue Kenntnisse aneignet.</td>
                            </tr>
                            <tr>
                                <td>Warum:</td>
                                <td>
                                    <ul class="portf_ul">
                                        <li>Vertiefen der Kenntnisse in HTML und CSS</li>
                                        <li>Zugriff auf eine Datenbank</li>
                                        <li>Erlernen der Grundbefehle einer Datenbank (schreiben, lesen, bearbeiten, löschen)</li>
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
                </section>
            </div>
        </main>

        <?php include("./private/pages/elements/gotop.php"); ?>
        <?php include("./private/pages/elements/footer.php"); ?>
    </div>
    
</body>
</html>