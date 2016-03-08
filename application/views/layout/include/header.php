<?php 
    $this->load->helper("html");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

   <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <?php       
        echo link_tag('Assets/styles/css/Base.css'); 
    ?>
    
   <title>✪ Super Voisin o/ ✪</title>
</head>
<body>
<div class="container">
<nav class="navbar navbar-default navbar-inverse" role="navigation">
  <div class="container-fluid">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Accueil</a></li>
        <li><a href="#">Llaurem</a></li>
      </ul> 
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Connexion/Inscription</b> <span class="caret"></span></a>
			<ul id="login-dp" class="dropdown-menu">
				<li>
					 <div class="row">
							<div class="col-md-12">
								Connexion avec ...
								<div class="social-buttons">
									<a href="./AuthentificationProvider/proceed/Facebook" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
									<a href="./AuthentificationProvider/proceed/LinkedIn" class="btn btn-ln"><i class="fa fa-linkedin"></i> Linkedin</a>
								</div>
                                ou
								 <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
										<div class="form-group">
											 <label class="sr-only" for="email">Adresse e-mail</label>
											 <input type="email" class="form-control" id="email" placeholder="Adresse e-mail" required>
										</div>
										<div class="form-group">
											 <label class="sr-only" for="password">Password</label>
											 <input type="password" class="form-control" id="password" placeholder="Mot-de-passe" required>
                                             <div class="help-block text-right"><a href="">Mot-de-passe oublié ?</a></div>
										</div>
										<div class="form-group">
											 <button type="submit" class="btn btn-primary btn-block">Connexion</button>
										</div>
										<div class="checkbox">
											 <label>
											 <input type="checkbox"> me garder connecté
											 </label>
										</div>
								 </form>
							</div>
							<div class="bottom text-center">
								Nouveau ici ? <a href="#"><b>Rejoignez-nous ! ☺</b></a>
							</div>
					 </div>
				</li>
			</ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
