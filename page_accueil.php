<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Accueil</title>
        <meta charset="utf8">
        
    </head>
    <body>
    
    </div>
        <div>
            <form action="page_accueil.php" method="POST">
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Prenom">
                    </div>
                    
                    <div class="col">
                        <input type="text" class="form-control" name="nom" id="nom" placeholder="Nom">
                    </div>
                <div class="form-group">
                    <label for="password"></label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Mot de passe">
                </div>
                <div class="form-group">
                    <label for="identifiant"></label>
                    <input type="text" class="form-control" name="identifiant" id="identifiant" placeholder="identifiant">
                </div>
                    <div class="col">
                        <input type="tel" class="form-control" name="tel" id="tel" placeholder="tel">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email"></label>
                    <input type="email" class="form-control" id="mail" name="mail" aria-describedby="email" placeholder="Entrer votre e-mail">
                </div>
                <div class="form-group">
                    <label for="numero"></label>
                    <input type="number" class="form-control" id="numRue" name="numRue" aria-describedby="numero_rue" placeholder="Entrer votre numero de rue">
                </div>
                <div class="form-group">
                    <label for="nomRue"></label>
                    <input type="text" class="form-control" id="nomRue" name="nomRue" aria-describedby="nomRue" placeholder="Entrer votre nom de rue">
                </div>
                <div class="form-group">
                    <label for="nomVille"></label>
                    <input type="text" class="form-control" id="nomVille" name="nomVille" aria-describedby="nomVille" placeholder="Entrer votre nom Ville">
                </div>
                <div class="form-group">
                    <label for="numCodePostal"></label>
                    <input type="text" class="form-control" id="numCodePostal" name="numCodePostal" aria-describedby="numCodePostal" placeholder="Entrer votre numero de code postal">
                </div>
                <div class="form-group">
                    <label for="nomDepartement"></label>
                    <input type="text" class="form-control" id="nomRue" name="nomDepartement" aria-describedby="nomDepartement" placeholder="Entrer votre nom de departement">
                </div>
                <div class="form-group">
                    <label for="naissance">Date de naissance</label>
                    <input type="date" class="form-control" id="naissance" name="naissance">
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
            $identifiant = $_POST['identifiant'];
            $dateNaissance = $_POST['naissance'];
            $CV= $_POST['CV'];
            $tel = $_POST['tel'];
            $mail = $_POST['mail'];

            $sql2 ="INSERT INTO candidat (NomCandidat, PrenomCandidat, MdpCandidat , LoginCandidat, TelCandidat , MailCandidat, NumeroderueCandidat, RueCandidat , VilleCandidat, numCodePostal, DepartementCandidat, NaissanceCandidat ,CVCandidat,DateDeJour )
            VALUES (:nom, :prenom, :password, :identifiant, :tel, :mail, :numRue, :nomRue, :nomVille, :numCodePostal, :nomDepartement, :naissance,:CV,:Datedejour)";
            $statement = $pdo->prepare($sql2);
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
            $statement->bindvalue(':CV',$CV);
            $statement->bindvalue(':Datedejour',$today);
            $statement->execute();
            
        ?>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>