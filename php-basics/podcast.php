<?php
if ($_GET['id'] <= 12) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="stylesheet.css">
        <script src="index.js" defer></script>
        <title>Document</title>
    </head>

    <body>
        <?php
        
        echo '<div class="test2"></div><br>';

        echo '<h1 class="titre">' . $_GET['titre'] . '</h1>';

        echo '<div class="test1"></div>';

        echo '<div class="fondPodcast"><div class="date">' . $_GET['date'] . '</div>' .
            '<div class="divTitrePost"><h1 class="titrePost"> ' . $_GET['titrePost'] . '</h1>' . '</div>' .
            '<div class="text">' . $_GET['text'] . '</div>' .
            '<div class="conteurAudio"><div class="boutonAudio" id="boutonAudio"> ' . '</div>' .
            '<div class="txtAudio">' . $_GET['boutonAudioTxt'] . '</div>' . '</div>' . '</div>';

        ?>
    <?php
} else {
    header('location: http://php-basics.test/404.html');
}
    ?>
    </body>

    </html>