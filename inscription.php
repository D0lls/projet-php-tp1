<?php

require('include/header_inc.php');
?>

<div class="container">

	<div class="row">
		<form action="script/inscription.php" id="inscription" method="post">
			<div class="col-md-offset-2 col-md-8">
				<h1> Inscription <br/> </h1>
			</div>
		</div>

		<div class="row">
			<div id="alert" class="alert alert-danger" style="display:none">
			
				<strong>Mot de passe ou adresse mail inconnu</strong>
			
			</div>
			<div class="col-md-offset-2 col-md-3">
				<div class="form-group">
					
					<label for="Nom">Nom</label>
					<input type="text" class="form-control" id="nom" placeholder="Nom" name="nom">
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-offset-2 col-md-7">
				<div class="form-group">
					<label for="Email">Adresse mail </label>
					<input type="text" class="form-control" id="email" placeholder="Enter email" name="mail">
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-offset-2 col-md-3">
				<div class="form-group">
					<label for="Password">Mot de passe</label>
					<input type="password" class="form-control" id="password" placeholder="Mot de passe" name="mdp">
				</div>
			</div>
			
		</div>



		<br/>
		<div class="row">
			<div class="col-md-offset-5 col-md-1">
				<button type="submit" class="btn btn-primary">Envoyer</button>
				<br/>
			</div>
		</div>
		<br/><br/>
	</form>
</div>



<?php
require('include/footer_inc.php');
?>