<!DOCTYPE html>
<html lang="de">
<head>
    <?php if ($current_page == "index") { echo "<meta name='description' content='Willkommen,  ich heiße Markus Rösner und bin Fachinformtiker IT mit der Fachrichtung Anwendungsentwicklung. Erfahren Sie mehr über mich und mein Portfolio'>"; }
    ?>
    <?php if ($current_page == "aboutMe") { echo "<meta name='description' content='Wer bin ich?Was sind meine Fähigkeiten?: HTML CSS PHP Java JavaScript Datenbank VBA'>"; }
    ?>
    <?php if ($current_page == "portfolio") { echo "<meta name='description' content='Mein Portfolio. Was für Projekte habe ich bereit gemacht und welche sind geplant.'>"; }
    ?>
    <?php if ($current_page == "impressum") { echo "<meta name='description' content='Mein Impressum und die Datenschutzerklärung.'>"; }
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/style.css">
    <link rel="icon" href="public/img/favicon.svg" type="image/x-icon">