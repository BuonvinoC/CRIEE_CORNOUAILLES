<html lang="fr">
	<head>
		<title>Criée de Cornouailles</title>
		<meta http-equiv="Content-Language" content="fr">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link href="<?php echo base_url('css/bandeau.css');?>" rel="stylesheet" type="text/css">
	</head>

<div id="bandeau">
<h1>Criée de Cornouailles</h1>
<!-- <img src="<?php echo base_url('images/lafleur.gif');?>" alt="Lafleur" title="Lafleur" id="fleur"/> -->
</div>


<!--  Menu haut-->
<div class="table">
<ul id="menu">
	<li><a href="<?php echo site_url('utilisateur');?>"> Accueil </a></li>
	<li><a href="<?php echo site_url('utilisateur/contenu/catalogue');?>"> Voir le catalogue</a></li>
	<!--  <li><a href="<?php echo site_url('utilisateur/contenu/panier');?>"> Voir enchères </a></li> -->
	<li><a href="<?php echo site_url('utilisateur/contenu/admin');?>"> Enchères remportées </a></li>
	<li><a href="<?php echo site_url('utilisateur/contenu/inscription');?>"> Inscription </a></li>
	<?php
		if ($this->session->userdata('logged_in')!=TRUE){?>
		<li><a href="<?php echo site_url('utilisateur/contenu/connexion');?>"> Connexion </a></li>
		<?php } else {?>
		<li><a href="<?php echo site_url('utilisateur/contenu/deconnexion');?>"> Deconnexion </a></li>
		<?php } ?>
		
	
	
</ul>
</div>