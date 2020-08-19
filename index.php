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

    <?php 
    require('./mysql.php');
    $add = $db->query("INSERT INTO person (userID,vorname,nachname) VALUES (1,'Hans','ZWEI')");
    $add2 = $db->query("INSERT INTO person (userID,vorname,nachname) VALUES (2,'Hans','ZWEI')");
    print_r(date('H:m:s'));
    $erg = $db->query("SELECT * FROM person");
    print_r($erg);
    ?>
    <form action=></form>

</body>
</html>