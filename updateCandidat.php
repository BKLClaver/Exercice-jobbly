<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>projet</title>
</head>

<body>
</div>
        <div>
            <form action="page_accueil.php" method="POST">
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" name="prenom" VALUES="<?php ?>" id="prenom" placeholder="Prenom">
                    </div>
                    
                    <div class="col">
                        <input type="text" class="form-control" name="nom" VALUES="<?php ?>" id="nom" placeholder="Nom">
                    </div>
                <div class="form-group">
                    <label for="password"></label>
                    <input type="password" class="form-control" name="password" VALUES="<?php ?>" id="password" placeholder="Mot de passe">
                </div>
                <div class="form-group">
                    <label for="identifiant"></label>
                    <input type="text" class="form-control" name="identifiant" VALUES="<?php ?>" id="identifiant" placeholder="identifiant">
                </div>
                    <div class="col">
                        <input type="tel" class="form-control" name="tel" VALUES="<?php ?>" id="tel" placeholder="tel">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email"></label>
                    <input type="email" class="form-control" id="mail" name="mail" VALUES="<?php ?>" aria-describedby="email" placeholder="Entrer votre e-mail">
                </div>
                <div class="form-group">
                    <label for="numero"></label>
                    <input type="number" class="form-control" id="numRue" name="numRue" VALUES="<?php ?>" aria-describedby="numero_rue" placeholder="Entrer votre numero de rue">
                </div>
                <div class="form-group">
                    <label for="nomRue"></label>
                    <input type="text" class="form-control" id="nomRue" name="nomRue" VALUES="<?php ?>" aria-describedby="nomRue" placeholder="Entrer votre nom de rue">
                </div>
                <div class="form-group">
                    <label for="nomVille"></label>
                    <input type="text" class="form-control" id="nomVille" name="nomVille" VALUES="<?php ?>" aria-describedby="nomVille" placeholder="Entrer votre nom Ville">
                </div>
                <div class="form-group">
                    <label for="numCodePostal"></label>
                    <input type="text" class="form-control" id="numCodePostal" name="numCodePostal" VALUES="<?php ?>" aria-describedby="numCodePostal" placeholder="Entrer votre numero de code postal">
                </div>
                <div class="form-group">
                    <label for="nomDepartement"></label>
                    <input type="text" class="form-control" id="nomRue" name="nomDepartement" VALUES="<?php ?>" aria-describedby="nomDepartement" placeholder="Entrer votre nom de departement">
                </div>
                <div class="form-group">
                    <label for="naissance">Date de naissance</label>
                    <input type="date" class="form-control" id="naissance" name="naissance" VALUES="<?php ?>">
                </div>
                <div class="form-group">
                <label for="CV">CV</label>
                <input type="file" id="CV" name="CV" accept="/pdf, /doc,/rtf">
       </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Inscription</button>
                </div>
            </form>
        </div>

<?php
            include("class.php");
            $today= date ( "Y-m-d" );
            
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $password = $_POST['password'];
            $identifiant = $_POST['identifiant'];
            $nomRue = $_POST['nomRue'];
            $numRue = $_POST['numRue'];
            $nomVille = $_POST['nomVille'];
            $numCodePostal= $_POST['numCodePostal'];
            $nomDepartement = $_POST['nomDepartement'];
            $dateNaissance = $_POST['naissance'];
            $CV= $_POST['CV'];
            $tel = $_POST['tel'];
            $mail = $_POST['mail'];

            $sql2 ="INSERT INTO candidat (AgeCandidat, DateDeJour, NaissanceCandidat, SexeCandidat, NomCandidat, PrenomCandidat, TelCandidat, AdresseCandidat, QualificationCandidat, CVCandidat)
            VALUES ('$age', '$date', '$dateNaissance', '$sexe', '$nom', '$prenom', '$tel', '$adresse', '$qualification', '$cv')";
            //var_dump($sql2);

            
            $statement->bindvalue(':nom',$nom);
            $statement->bindvalue(':prenom',$prenom);
            $statement->bindvalue(':password',$password);
            $statement->bindvalue(':identifiant',$identifiant);
            $statement->bindvalue(':tel',$tel);
            $statement->bindvalue(':mail',$mail);
            $statement->bindvalue(':numRue',$numRue);
            $statement->bindvalue(':nomRue',$nomRue);
            $statement->bindvalue(':nomVille',$nomVille);
            $statement->bindvalue(':numCodePostal',$numCodePostal);
            $statement->bindvalue(':nomDepartement',$nomDepartement);
            $statement->bindvalue(':naissance',$dateNaissance);
            $statement->bindvalue('qualification',$qualification);
            $statement->bindvalue(':CV',$CV);
            $statement->bindvalue(':Datedejour',$today);
            $statement->execute();
            
            
        ?>
    </body>
</html>