	<?php require_once("vue_head.php"); ?>
	<body>
		<?php require_once("vue_topbar.php"); ?>
		<div class="container title-container">
			<div class="container">
				<h1 class="title">Inscription</h1>
			</div>
		</div>
		<?php 

		?>
		<div id="main">
			<div class="container container-form">
				<!--<form id="signin" class="form-signin" action="../controleurs/ctrl_inscription.php" charset="UTF-8" method="POST">-->
					<div class="form-group">
						<input class="form-control" type="text" name="pseudo" id="user_username" placeholder="Nom d'utilisateur" required="required" autofocus="autofocus">
					</div>
					<div class="form-group">
						<input class="form-control" type="password" name="password" id="password" placeholder="Mot de passe" required="required" autofocus="autofocus">
					</div>
					<div class="form-group">
						<input class="form-control" type="password" name="passwordConfirm" id="passwordConfirm" placeholder="Confirmer mot de passe" required="required" autofocus="autofocus">
					</div>
					<input id="btn_inscription" class="btn btn_block" type="button" name="commit" value="s'inscrire" onclick="verifIdentifiants()">
					</input>
				<!--</form>-->
			</div>
		</div>
	</body>
	<?php require_once("vue_footer.php"); ?>