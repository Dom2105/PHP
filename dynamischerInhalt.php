<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Dyamic Option</title>
</head>
<body>
    <form action="">
    <label for="ubung">Zeige mir de Dynamischen Inhalt</label>
    <select name="inhalt">
    <?php
    require_once './inhalt.php';
    $inhalt = holeInhalt();

    foreach ($inhalt as $einzeleneInhalte) {
        echo "<option>".$einzeleneInhalte."</option>";
    }
    ?>
    </select>
    
    
    </form>
</body>
</html>