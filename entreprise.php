<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Accueil</title>
        <meta charset="utf8">
        
    </head>
    <body>
    
    </div>
        <div>
            <form action="entreprise.php" method="POST">
                <div class="row">
                <div class="col">
                      
                    <label for="nomEntreprise"></label>
                    <input type="text" class="form-control" id="nomEntreprise" name="nomEntreprise" aria-describedby="nomEntreprise" placeholder="Entrer votre nom de votre entreprise">
                </div>
                <div class="form-group">
                    <label for="adresseEntreprise"></label>
                    <input type="text" class="form-control" id="adresseEntreprise" name="adresseEntreprise" aria-describedby="adresseEntreprise" placeholder="Entrer votre adresse de votre entreprise">
                </div>
                    <div class="form-group">
                    <label for="codepostal"></label>
                    <input type="text" class="form-control" id="codepostal" name="codepostal" aria-describedby="codepostel" placeholder="Entrer votre code postale ">
                </div>
                <div class="form-group">
                    <label for="descriptionEntreprise"></label>
                    <input type="text" class="form-control" name="descriptionEntreprise" id="descriptionEntreprise" placeholder="Description de l'entreprise">
                </div>
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
                    <button type="submit" class="btn btn-success">Envoyé</button>
                </div>
            </form>
        </div>
        <?php
            include("class.php");
        
            
            $nomEntreprise= $_POST['nomEntreprise'];
            $adresseEntreprise= $_POST['adresseEntreprise'];
            $codepostal= $_POST['codepostal'];
            $descriptionEntreprise= $_POST['descriptionEntreprise'];
            $tel = $_POST['tel'];
            $mail = $_POST['mail'];

            var_dump($nomEntreprise);
            var_dump($adresseEntreprise);
            var_dump($codepostal);
            var_dump($descriptionEntreprise);
            var_dump($tel);
            var_dump($mail);
            

            $sql2 ="INSERT INTO entreprise (NomEntreprise, AdresseEntreprise, NumCodePostalEntreprise, DescriptionEntreprise , TelEntreprise, MailEntreprise)
            VALUES (:nomEntreprise, :adresseEntreprise, :numCodePostal, :descriptionEntreprise, :tel, :mail)";
            $statement = $pdo->prepare($sql2);
            //var_dump($sql2);

            
            $statement->bindValue(':nomEntreprise',$nomEntreprise);
            $statement->bindValue(':adresseEntreprise',$adresseEntreprise);
            $statement->bindValue(':numCodePostal',$codepostal);
            $statement->bindValue(':descriptionEntreprise',$descriptionEntreprise);
            $statement->bindValue(':tel',$tel);
            $statement->bindValue(':mail',$mail);
            
            $statement->execute();
            
        ?>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>