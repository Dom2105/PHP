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

<<<<<<< HEAD
    <!-- <?php 
    /* require('./mysql.php');
=======
    <?php 
    require('./mysql.php');
>>>>>>> 6c259daba795b0067068999af45dcd26b9432e58
    $add = $db->query("INSERT INTO person (userID,vorname,nachname) VALUES (1,'Hans','ZWEI')");
    $add2 = $db->query("INSERT INTO person (userID,vorname,nachname) VALUES (2,'Hans','ZWEI')");
    print_r(date('H:m:s'));
    $erg = $db->query("SELECT * FROM person");
<<<<<<< HEAD
    print_r($erg); */
    ?>
    <form action=></form> -->



    <form action="./addPerson.php" method="get">
    <label><input type="Name" name="name" placeholder="Name"></label>
    <label><input type="Nachname" name="nachname" placeholder="Nachname"></label>
    <button>Schreiben</button>
</form>

=======
    print_r($erg);
    ?>
    <form action=></form>
>>>>>>> 6c259daba795b0067068999af45dcd26b9432e58

</body>
</html>