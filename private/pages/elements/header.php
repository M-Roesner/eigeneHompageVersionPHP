<header class="header">
    <nav>
        <a <?php if ($current_page == "index") {
            echo "status='active'";
        } ?> class="logo" href="index.php">
            <img src="public/img/logo_f3f3f3_70x64.png" alt="Logo Markus Rösner"><span
                id="domain-name">markus-roesner.dev</span>
        </a>

        <input type="checkbox" id="toggle_button">
        <label for="toggle_button" class="toggle_button">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </label>

        <ul class="nav nav_main">
            <li class="nav_item_general nav_item_main" id="expandable_item_aboutMe" <?php if ($current_page == "aboutMe") {
                echo "status='active'";
            } ?>>
                <input type="checkbox" id="checkbox_aboutMe">
                <label for="checkbox_aboutMe">
                    <a class="nav_link_general nav_link_main" id="nav_link_aboutME" href="aboutMe.php">Über mich</a>
                </label>
                <ul class="nav dropdown_aboutMe">
                    <li class="nav_item_general nav_item_aboutMe" id="li_item_aboutME">
                        <a class="nav_link_general" href="aboutMe.php">Über mich ...</a>
                    </li>
                    <li class="nav_item_general nav_item_aboutMe">
                        <a class="nav_link_general" href="aboutMe.php">Wer bin ich?</a>
                    </li>
                    <li class="nav_item_general nav_item_aboutMe">
                        <a class="nav_link_general" href="aboutMe.php#whyIt">Warum ein Beruf in der Informatik?</a>
                    </li>
                    <li class="nav_item_general nav_item_aboutMe">
                        <a class="nav_link_general" href="aboutMe.php#myCareer">Meine zukünftige berufliche
                            Entwicklung</a>
                    </li>
                    <li class="nav_item_general nav_item_aboutMe">
                        <a class="nav_link_general" href="aboutMe.php#skills">Meine Fähigkeiten</a>
                    </li>
                    <li class="nav_item_general nav_item_aboutMe">
                        <a class="nav_link_general" href="aboutMe.php#whyJs">Warum JS als zusätzliche
                            Programmiersprache?</a>
                    </li>
                    <li class="nav_item_general nav_item_aboutMe">
                        <a class="nav_link_general" href="aboutMe.php#contactMe">Kontaktieren Sie mich</a>
                    </li>
                </ul>
            </li>
            <li class="nav_item_general nav_item_main" <?php if ($current_page == "portfolio") {
                echo "status='active'";
            } ?>>
                <a class="nav_link_general nav_link_main" href="portfolio.php">Mein<br>Portfolio</a>
            </li>
        </ul>
    </nav>
</header>