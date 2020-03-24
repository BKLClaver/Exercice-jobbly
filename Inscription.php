<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="design_inscription.css" rel="stylesheet" >




<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


<!DOCTYPE html>
<html lang="en">
    <head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">

		<!-- Website CSS style -->
		<link rel="stylesheet" type="text/css" href="assets/css/main.css">

		<!-- Website Font style -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

		<title>FROMEMPLOI - Inscription</title>
	</head>
	<body>
		<div class="container">
			<div class="row main">
				<div class="panel-heading">
	               <div class="panel-title text-center">
	               		<h1 class="title">FormEmploi</h1>
	               		<hr />
	               	</div>
	            </div> 
				<div class="main-login main-center">
					<form class="form-horizontal" method="post" action="#">
						
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Votre nom</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="nom" id="name"  placeholder="Entrer votre nom"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Votre prenom</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="prenom" id="prenom"  placeholder="Entrer votre prénom"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Votre mot de passe</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" id="username"  placeholder="Entrer votre mot de passe"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Votre identifiant</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="text"form-control" name="identifiant" id="identifiant"  placeholder="Entrer votre identifiant"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="confirm" class="cols-sm-2 control-label">Votre nom de rue</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="nomRue" id="confirm"  placeholder="Entrer votre nom de rue"/>
								</div>
							</div>
						</div>
						 <div class="form-group">
							<label for="confirm" class="cols-sm-2 control-label"></label>
							<div class="cols-sm-10">
								<div class="input-group">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="confirm" class="cols-sm-2 control-label">Votre numéro de rue</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="numRue" id="confirm"  placeholder="Entrer votre numéro de rue"/>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="confirm" class="cols-sm-2 control-label">Votre ville</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="nomVille" id="confirm"  placeholder="Entrer votre ville"/>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="confirm" class="cols-sm-2 control-label">Votre numero de code postal</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="numCodePostal" id="confirm"  placeholder="Entrer votre code postal"/>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="confirm" class="cols-sm-2 control-label">Votre département</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="nomDepartement" id="confirm"  placeholder="Entrer votre département"/>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="confirm" class="cols-sm-2 control-label">Votre date de naissance</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="date" class="form-control" name="naissance" id="confirm"  placeholder="Entrer votre date de naissance"/>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="confirm" class="cols-sm-2 control-label">Votre CV</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="file" class="form-control" name="CV" id="confirm"  placeholder="Entrer votre nom de rue"/>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="confirm" class="cols-sm-2 control-label">Votre numéro de téléphone</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="tel" id="confirm"  placeholder="Entrer votre numéro de téléphone"/>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="confirm" class="cols-sm-2 control-label">Votre e-mail</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="mail" class="form-control" name="mail" id="confirm"  placeholder="Entrer votre e-mail"/>
								</div>
							</div>
						</div>
						<div class="login-register">
						<div class="form-group ">
							<button type="button" class="btn btn-primary btn-lg btn-block login-button">Register</button>
						</div>
				            <a href="Connexion_test.html">Connectez vous</a>
						 </div>
					</form>
				</div>
			</div>
		</div>
		<?php
		include("class.php");
		$today= date ( "Y-m-d" );
		//echo $today;
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

		$sql2 ="INSERT INTO candidat (NomCandidat, PrenomCandidat, MdpCandidat , LoginCandidat, TelCandidat , MailCandidat, NumeroderueCandidat, RueCandidat , VilleCandidat, numCodePostal, DepartementCandidat, NaissanceCandidat ,CVCandidat )
		VALUES ('$nom', '$prenom', '$password', '$identifiant', '$tel', '$mail', '$numRue', '$nomRue', '$nomVille', '$numCodePostal', '$nomDepartement', '$naissance','$CV')";
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
		$statement->execute();
		?>
		<script type="text/javascript" src="assets/js/bootstrap.js"></script>
	</body>
</html>