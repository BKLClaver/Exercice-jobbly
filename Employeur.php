<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>projet</title>
</head>

<body>
<?php
        include("connexion.php");

?>

</div>
        <div>
            <form action="employeur.php" method="POST">
                <div class="row">
                    <div class="col">
                       hp <label for="login"></label>
                        <input type="text" class="form-control" name="login" VALUES="<?php ?>" id="login" placeholder="Login">
                    </div>
                    <div class="form-group">
                        <label for="mdp"></label>
                        <input type="password" class="form-control" name="mdp" VALUES="<?php ?>" id="mdp" placeholder="Mot de passe">
                    </div>
                    <div class="col">
                        <label for="nom"></label>
                        <input type="text" class="form-control" name="nom" VALUES="<?php ?>" id="nom" placeholder="Nom">
                    </div>
                    <div classe="col">
                    <label for="prenom"></label>
                    <input type="text" class="form-control" name="prenom" VALUES="<?php ?>" id="prenom" placeholder="Prenom">
                </div>
                    <div class="col">
                        <input type="tel" class="form-control" name="tel" VALUES="<?php ?>" id="tel" placeholder="tel">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email"></label>
                    <input type="email" class="form-control" id="mail" name="mail" VALUES="<?php ?>" aria-describedby="email" placeholder="Entrer votre e-mail">
                </div> 
                <div class="group">
                    <input type="submit" class="form-control" value="Valider">
                </div>  
            </form>
        </div>

<?php
            
            include("class.php");
            $login = $_POST['login'];
            $mdp = $_POST['mdp'];
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $mail = $_POST['tel'];
            $tel = $_POST['mail'];

            var_dump($login);
            var_dump($mdp);
            var_dump($nom);
            var_dump($prenom);
            var_dump($mail);
            var_dump($tel);

            $sql2 ="INSERT INTO employeur (LoginEmployeur, MdpEmployeur, NomEmployeur, PrenomEmployeur, MailEmployeur, TelEmployeur)
            VALUES (:identifiant, :mdp, :nom, :prenom, :mail, :tel)";
            $statement = $pdo->prepare($sql2);
            //var_dump($sql2);

            
            $statement->bindValue(':identifiant', $login);
            $statement->bindValue(':mdp', $mdp);
            $statement->bindValue(':nom', $nom);
            $statement->bindValue(':prenom', $prenom);
            $statement->bindValue(':mail', $mail);
            $statement->bindValue(':tel', $tel);
            $statement->execute();
            
        ?>
    </body>