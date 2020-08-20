<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
     #   echo 'edswgew';
      #  print date('d.m.y');
    ?><!-- <br><hr><br> -->

    <?php 
   # include('./auto.php');
    ?>
    <h3>Suche nach einer Person über den Vornamen</h3>
    <form action="./searchPerson.php" method="POST">
    <label><input type="Vornamen" name="sucheVorname" placeholder="Vorname"></label>
    <button>Schreiben</button><br><hr><br></form>
    <h3>Füge eine Person hinzu</h3>
    <form action="./addPerson.php" method="get">
    <label><input type="Name" name="name" placeholder="Name"></label>
    <label><input type="Nachname" name="nachname" placeholder="Nachname"></label>
    <button>Schreiben</button><br><hr><br></form>
    <H3>Suche nach Exestierenden Personen und füge diese Hinzu</H3>
    <form action="./existPerson.php" method="POST">
    <label><input type="Name" name="existVorname" placeholder="Name"></label>
    <label><input type="Nachname" name="existNachname" placeholder="Nachname"></label>
    <button>Schreiben</button><br><hr><br></form>

</body>
</html>