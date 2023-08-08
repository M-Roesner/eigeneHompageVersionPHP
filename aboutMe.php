<?php
    $current_page = "aboutMe";
    include("./private/pages/elements/head.php");
?>
    <title>Über mich!</title>
</head>
<body>
    <div id="top" class="site">
        <?php
            include("./private/pages/elements/header.php");
        ?>

        <main>
            <h1>Über mich</h1>
            <div class="line-left">
                <section id="whoAmI">
                    <h3>Wer bin ich?</h3>
                    <div class="line-left">
                            Hallo,
                        </p>
                        <p>
                            mein Name ist Markus. 
                        </p>
                        <p>
                            Aktuell mache ich eine Umschulung bei der SRH in Heidelberg, als Fachinformatiker mit der Fachrichtung Anwendungsentwicklung.
                        </p>
                        <p>
                            In den letzten 18 Jahren, war ich in einer Buchbinderei angestellt und habe dort verschiedene Produktionsanlagen geführt. Darunter waren ein Klebebinder, ein Sammelhefter, sowie diverse Kleinanlagen (z.B. Falzmaschinen, Schneidemaschinen und Pallettieranlagen).
                        </p>
                        <p>
                            Ich bin zum Schichtleiter aufgestiegen und habe verschiedene Projekte geleitet oder begleitet.
                        </p>
                        <p>
                            Die Schließung der Firma habe ich genutzt, um mich neu zu orientieren. Meine Überlegungen haben mich in die IT-Welt geführt.
                        </p>
                    </div>
                </section>
                
                <section id="whyIt" >
                    <h3>Warum ein Beruf in der Informatik?</h3>
                    <div class="line-left">
                        <p>
                            Während meines letzten Jobs habe ich anfangs für meine Kollegen kleine automatisierte Tabellen in Excel erstellt, um die Arbeitsabläufe zu optimieren und Zeit zu sparen. Diese habe ich auch später zum Teil mit <span title="Visual Basic for Applications" class="infobox">VBA</span> verbessert.
                        </p>
                        <p>
                            Ebenso hatte ich für einen Sachbearbeiter ein komplexeres Pallettezettel-Programm mit Excel und VBA erstellt, welches eine Ein- und Ausgabe-Maske erhielt und die meisten Berechnungen von allein erledigte.
                        </p>
                        <p>
                            Mich mit VBA auseinander zu setzen, war eine neue Erfahrung für mich. Das mir viel Spaß gemacht hat, sodass ich mich für den neuen Weg als Anwendungsentwickler entschied.
                        </p>
                    </div>
                </section>

                <section id="skills">
                    <h3>Fähigkeiten:</h3>
                    <div class="line-left">
                        <ul class="skills">
                            <li>HTML <span>„<b>H</b>yper<b>t</b>ext <b>M</b>arkup <b>L</b>anguage“</span></li>
                            <li>CSS <span>„<b>C</b>ascading <b>S</b>tyle <b>S</b>heets“</span></li>
                            <li>PHP <span>„<b>P</b>HP: <b>H</b>ypertext <b>P</b>reprocessor“, ursprünglich „<b>P</b>ersonal <b>H</b>ome <b>P</b>age Tools“</span></li>
                            <li>Java</li>
                            <li>DB <span>„<b>D</b>ata<b>b</b>ase“</span></li>
                            <li>JS <span><b>J</b>ava<b>S</b>cript</span></li>
                            <li>VBA <span>„<b>V</b>isual <b>B</b>asic for <b>A</b>pplications“</span></li>
                        </ul>
                    </div>
                </section>

                <section id="whyJs">
                    <h3>Warum <span title="JavaScript" class="infobox">JS</span> als zusätzliche Programmiersprache?</h3>
                    <div class="line-left">
                        <ul class="why-js">                           
                            <li>Webauftritt, um mich zu präsentieren.</li>
                            <li>Einsatzbereich in Frontend und Backend, sowie Webapps.</li>
                            <li>Diese ist noch immer eine der meist genutzten Sprachen.</li>
                        </ul>
                    </div>
                </section>

                <section id="contactMe">
                    <h3>Kontaktieren Sie mich über:</h3>
                    <div class="line-left">
                        <ul class="contact">                           
                            <li>contact@markus-roesner.de</li>
                            <li><a href="https://github.com/M-Roesner" target="_blank">[gitHub]</a></li>
                        </ul>
                    </div>
                </section>
            </div>
        </main>
        
        <?php include("./private/pages/elements/gotop.php"); ?>
        <?php include("./private/pages/elements/footer.php"); ?>
    </div>
    
</body>
</html>