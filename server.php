<?php
    $textInput = $_GET['text-input'];
    $bannedWord = $_GET['banned-word'];

    $clearedText = str_replace($bannedWord , '******', $textInput);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Testo da censurare:
    </h1>
    <p>
        <?php
            echo $textInput
        ?>
    </p>
    <h1>
        Testo censurato:
    </h1>
    <p>
        <?php
            echo $clearedText
        ?>
    </p>
</body>
</html>