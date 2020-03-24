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
                    <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Prenom">
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="nom" id="nom" placeholder="Nom">
                </div>
                <div class="form-group">
                    <label for="password"></label>
                    <input type="password" class="form-control" name="password" id="password"
                        placeholder="Mot de passe">
                </div>
                <div class="form-group">
                    <label for="identifiant"></label>
                    <input type="text" class="form-control" name="identifiant" id="identifiant"
                        placeholder="identifiant">
                </div>
                <div class="col">
                    <input type="tel" class="form-control" name="tel" id="tel" placeholder="tel">
                </div>
            </div>
            <div class="form-group">
                <label for="email"></label>
                <input type="email" class="form-control" id="mail" name="mail" aria-describedby="email"
                    placeholder="Entrer votre e-mail">
            </div>
            <div class="form-group">
                <label for="numero"></label>
                <input type="number" class="form-control" id="numRue" name="numRue" aria-describedby="numero_rue"
                    placeholder="Entrer votre numero de rue">
            </div>
            <div class="form-group">
                <label for="nomRue"></label>
                <input type="text" class="form-control" id="nomRue" name="nomRue" aria-describedby="nomRue"
                    placeholder="Entrer votre nom de rue">
            </div>
            <div class="form-group">
                <label for="nomVille"></label>
                <input type="text" class="form-control" id="nomVille" name="nomVille" aria-describedby="nomVille"
                    placeholder="Entrer votre nom Ville">
            </div>
            <div class="form-group">
                <label for="numCodePostal"></label>
                <input type="text" class="form-control" id="numCodePostal" name="numCodePostal"
                    aria-describedby="numCodePostal" placeholder="Entrer votre numero de code postal">
            </div>
            <div class="form-group">
                <label for="nomDepartement"></label>
                <input type="text" class="form-control" id="nomDepartement" name="nomDepartement"
                    aria-describedby="nomDepartement" placeholder="Entrer votre nom de departement">
            </div>
            <div class="form-group">
                <label for="naissance">Date de naissance</label>
                <input type="date" class="form-control" id="naissance" name="naissance">
            </div>
            <div class="form-group">
                <label for="age"></label>
                <input type="int" class="form-control" id="age" name="age" aria-describedby="age"
                    placeholder="Entrer votre âge">
            </div>
            <div class="form-group">
                <label for="date"></label>
                <input type="date" class="form-control" id="date" name="datejour" aria-describedby="date"
                    placeholder="Entrer la date d'aujourd'hui">
            </div>
            <div class="form-group">
                <label for="sexe"></label>
                <input type="text" class="form-control" id="sexe" name="sexe" aria-describedby="sexe"
                    placeholder="Quel est votre sexe ?">
            </div>
            <div class="form-group">
                <label for="qualification"></label>
                <input type="text" class="form-control" id="qualification" name="qualification" aria-describedby="qualification"
                    placeholder="Quelles sont vos qualifications ?">
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
    <h1>Les informations de l'utilisateur</h1>
    <?php
            define("USER", 'root');
            define("PASSWORD", 'root');
            define("DSN", 'mysql:host=localhost;dbname=searche_fr1');
            try {
                $pdo = new PDO(DSN, USER, PASSWORD);
            } catch (PDOException $e) {
                die("Error ! : " . $e->getMessage());
            }
            $id = $_POST['identifiant'];
            $mdp = $_POST['password'];
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $age = $_POST['age'];
            $date = $_POST['datejour'];
            $dateNaissance = $_POST['naissance'];
            $sexe = $_POST['sexe'];
            $mail = $_POST['mail'];
            $tel = $_POST['tel'];
            $numrue = $_POST['numRue'];
            $nomrue = $_POST['nomRue'];
            $ville = $_POST['nomVille'];
            $codepostal = $_POST['numCodePostal'];
            $departement = $_POST['nomDepartement'];
            $qualification = $_POST['qualification'];
            $cv = $_POST['cv'];

            $sql2 ="INSERT INTO candidat (AgeCandidat, DateDeJour, NaissanceCandidat, SexeCandidat, NomCandidat, PrenomCandidat, TelCandidat, AdresseCandidat, QualificationCandidat, CVCandidat)
            VALUES ('$age', '$date', '$dateNaissance', '$sexe', '$nom', '$prenom', '$tel', '$adresse', '$qualification', '$cv')";
            //var_dump($sql2);

            $pdo->exec($sql2);
            
            $sql = "SELECT AgeCandidat, DateDeJour, NaissanceCandidat, SexeCandidat, NomCandidat, PrenomCandidat, TelCandidat, AdresseCandidat, QualificationCandidat, CVCandidat FROM candidat";
            // Récupération de l'instance de PDOStatement
            $sth = $pdo->query($sql);
            // Affichage de chaque rangée l'une après l'autre
            while($row = $sth->fetch(PDO::FETCH_ASSOC)) {
                echo $row['AgeCandidat'].'-'.$row['DateDeJour'].'-'.$row['NaissanceCandidat'].'-'.$row['SexeCandidat'].'-'.$row['NomCandidat'].'-'.$row['PrenomCandidat'].'-'.$row['TelCandidat'].'-'.$row['AdresseCandidat'].'-'.$row['QualificationCandidat'].'-'.$row['CVCandidat'].'<br/>';
            }


            unset($pdo);
        
        ?>
</body>

</html>