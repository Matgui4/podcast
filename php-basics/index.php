<?php include 'podcasts.php';


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
    foreach ($podcasts as $key => $podcast) {
        echo '<div class="test2"></div><br>';

        echo '<h1 class="titre">' . $podcast['titre'] . '</h1>';

        echo '<div class="test1"></div>';

        echo '<div class="fondPodcast"><div class="date">' . $podcast['date'] . '</div>' .
            '<div class="divTitrePost"><h1 class="titrePost"> ' . $podcast['titrePost'] . '</h1>' . '</div>' .
            '<div class="text">' . $podcast['text'] . '</div>' .
            '<div class="conteurAudio"><div class="boutonAudio" id="boutonAudio"> ' . '</div>' .
            '<div class="txtAudio">' . $podcast['boutonAudioTxt'] . '</div>' . '</div>' . '</div>';

        echo '<div><a href="/podcast.php?titre=' . urlencode($podcast['titre']) . '&id=' . urlencode($key) . '&date=' . urlencode($podcast['date']) . '&titrePost=' . urlencode($podcast['titrePost']) . '&text=' . urlencode($podcast['text']) . '&boutonAudioTxt=' . urlencode($podcast['boutonAudioTxt']) . '">envoyez v\'oyez</a></div>';
    }
    ?>
</body>

</html>