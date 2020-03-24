<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Accueil</title>
        <meta charset="utf8"> 
    </head>
	    <body>
	    	<form action="recherche.php" method="GET">
			    <div class="">
		                    <label for="recherche"></label>
		                    <input type="text" class="form-control" name="recherche" id="recherche" placeholder="metier rechercher">
			    </div>
				<?php include("class.php");/*a ne pas supprimer*/
					$paraOne = "SELECT * FROM Domaine";
				    $sth = $pdo->query($paraOne);
			    ?>
				    <label for="domaine"></label>
		            	<select name="domaine">
							<?php
		            		while($row = $sth->fetch(PDO::FETCH_ASSOC)){ ?>
			    			<option value="<?php echo $row['IDDomaine'];?>">
			    							<?php echo $row['NomDomaine'];?>
			    			</option>
			    				<?php
			    					}
			    				?>
			     		</select>
			    <?php include("class.php");/*a ne pas supprimer*/
					$paraOne = "SELECT * FROM Departement";
				    $sth = $pdo->query($paraOne);
			    ?>
				    <label for="Departement"></label>
		            	<select name="domaine">
							<?php
		            		while($row = $sth->fetch(PDO::FETCH_ASSOC)){ ?>
			    			<option value="<?php echo $row['IDDepartement'];?>">
			    							<?php echo $row['NomDepartement'];?>
			    			</option>
			    				<?php
			    					}
			    				?>
			     		</select>
			    
			    <!--<div class="">
		                    <label for="domaine"></label>
		                    <select name="domaine">
		                    	<option value="front_end">front end</option>
		                    	<option value="back_end">back end</option>
		                    </select>
			    </div>Code fonctionnel en html simple -->

			    <!--<div class="">
		                    <label for="departement"></label>
		                    <select name="departement">
		                    	<option value="Pays_de_la_loire">Pays de la Loire</option>
		                    	<option value="Ile-de-France">île-de-France</option>
		                    </select>
			    </div> Code fonctionnel en html simple -->

			    <?php
					/*a ne pas supprimer*/
			    	$metier = htmlspecialchars($_POST[recherche]);/* name des formulaires a renseigner important */ 
			    	$Para1 = htmlspecialchars($_POST[domaine]);
			    	$Para2 = htmlspecialchars($_POST[departement]);
			    	/*foncton de recherche si champ metier seulement remplie*/
			    	if(isset($metier)){
			    		$sql2="SELECT * FROM offre 
			    		WHERE NomOffre LIKE '%$metier%'";
			    	$request = $pdo->prepare($sql2);
			    	$request->bindValue(":metier",$metier);
			    	$request->execute();
			    	while($rowOffre = $request->fetch(PDO::FETCH_ASSOC)){
			    		$Description = $rowOffre["DescriptionOffre"];
			    		echo $Description;
			    	}
			    }
			    	/*foncton de recherche si champ metier et domaine sont les seuls remplies*/
			    else if(isset($metier) && isset($Para1)){
			    		$sql2="SELECT * FROM offre 
			    		WHERE NomOffre LIKE '%:metier%' 
			    		AND NomDomaine LIKE '%:Para1%'";
			    	$request = $pdo->prepare($sql2);
			    	$request->bindValue(":metier",$metier);
			    	$request->bindValue(":para", $para1);
			    	$request->execute();
			    	while($metier = $request->fetch(PDO::FETCH_ASSOC)){
			    		$Description = $rowOffre["DescriptionOffre"];
			    		echo $description;
			    	}
			    }

			    else if(isset($metier) && isset($Para1) && isset($Para2)){
			    		$sql2="SELECT * FROM offre 
			    		WHERE NomOffre LIKE '%:metier%' 
			    		AND NomDomaine LIKE '%:Para1%'
			    		AND NomDepartement LIKE '%:Para2%'";
			    	$request = $pdo->prepare($sql2);
			    	$request->bindValue(":metier",$metier);
			    	$request->bindValue(":para", $para1);
			    	$request->execute();
			    	while($metier = $request->fetch(PDO::FETCH_ASSOC)){
			    		$Description = $rowOffre["DescriptionOffre"];
			    		echo $description;
			    	}
			    }
			    ?>
	</body>
</html>