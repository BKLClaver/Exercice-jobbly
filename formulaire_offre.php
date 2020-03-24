<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>projet</title>
</head>

<body>
<?php
            include("class.php");
            $today= date ( "Y-m-d" );
            
            $remuneration = $_POST['remuneration'];
            $duree = $_POST['duree'];
            $typeDeContrat = $_POST['typeDeContrat'];
            $contact = $_POST['contact'];
            $description= $_POST['description'];
            $nomMetier = $_POST['nomMetier'];

            $sql2 ="UPDATE offre (remuneration, duree, typeDeContrat , contact, description)
            VALUES ('$remuneration', '$duree', '$typeDeContrat', '$contact', '$description', '$nomMetier)";
            $statement = $pdo->prepare($sql2);
            //var_dump($sql2);

            
            $statement->bindvalue('remuneration',$remuneration);
            $statement->bindvalue('duree',$duree);
            $statement->bindvalue('typeDeContrat',$typeDeContrat);
            $statement->bindvalue('contact',$contact);
            $statement->bindvalue('description',$description);
            $statement->bindvalue('nomMetier',$nomMetier);
            $statement->execute();
            
        ?>
    </body>
</html>