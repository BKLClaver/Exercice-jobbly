<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="design_connexion.css" rel="stylesheet" >

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<div class="container login-container">
            <div class="row">
                <div class="col-md-6 login-form-1">
                    <h3>Accés Candidat</h3>
                    
                        <div class="form-group">
                            <input type="text" class="form-control"  idplaceholder="Votre email *" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Votre mot de passe *"  />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Connexion" />
                        </div>
                        <div class="form-group">
                            <a href="#" class="btnForgetPwd">Mot de passe oublié ?</a>
                        </div>
                    
                </div>
                <div class="col-md-6 login-form-2">
                    <div class="login-logo">
                 
                    </div>
                    <h3>Accés Employeur</h3>
                        <div class="form-group">
                            <input type="text" class="form-control" id="id" name="identifiant" placeholder="Votre email *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="motdepasse" name="motdepasse" placeholder="Votre mot de passe *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Connexion" />
                        </div>
                        <div class="form-group">

                            <a href="#" class="btnForgetPwd" value="Connexion">Mot de passe oublié ?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php
                include(connexion.php);

        ?>
            