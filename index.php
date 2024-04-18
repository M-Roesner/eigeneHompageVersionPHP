<?php
$current_page = "index";
include ("./private/pages/elements/head.php");
?>
<title>Willkommen</title>
</head>

<body>
    <div id="top" class="site">
        <?php
        include ("./private/pages/elements/header.php");
        ?>
        <main>
            <h1>Willkommen auf meiner Seite!</h1>
            <div class="line-left">
                <section>
                    <p>
                        Auf dieser Seite können Sie vieles über mich und meine Projekte erfahren.
                    </p>
                    <p style="color: var(--color-link);">
                        Hinweis: Diese Webseite basiert aktuell auf PHP und wird derzeit auf React.js unter anderem mit
                        TypeScript, React-Router und Styled Components umgebaut.
                    </p>
                </section>
                <section id="welcome_links">
                    <a href="aboutMe.php" id="link_aboutMe" class="welcome_link">
                        <h2>Über mich</h2>
                        <p>Wollen Sie mehr über mich erfahren, wer ich bin, was meine Fähigkeiten sind und wie Sie mit
                            mir in Kontakt treten können. Dann klicken Sie diese Box an!</p>
                    </a>

                    <a href="portfolio.php" id="link_portfolio" class="welcome_link">
                        <h2>Mein Portfolio</h2>
                        <p>Hier können Sie sehen, welche Projekte ich bereits umgesetzt habe und auch wie ich
                            vorgegangen bin.</p>
                    </a>
                </section>
            </div>
        </main>

        <?php include ("./private/pages/elements/footer.php"); ?>
    </div>

</body>

</html>