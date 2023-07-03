
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./server.php" method="get">
        <label for="text-input">
            Inserisci il testo:
        </label>
        <textarea name="text-input" id="text-input" cols="30" rows="10"></textarea>
    
        <label for="banned-word">
            Inserisci la parola da censurare:
        </label>
        <input type="text" name="banned-word" id="banned-word">
        <input type="submit" value="Purifica!">
    </form>
</body>
</html>