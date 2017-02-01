	<?php require_once("vue_head.php"); ?>
	<body>
		<?php require_once("vue_topbar.php"); ?>
		<div class="container title-container">
			<div class="container">
				<h1 class="title">Inscription</h1>
			</div>
		</div>
		<?php 
			// On inclu le fichier qui fera les controles liés à l'inscriptions
			require("controleurs/ctrl_inscription.php");

		?>
		<div id="main">
			<div class="container container-form">
				<form id="signin" class="form-signin" action="#" charset="UTF-8" method="post">
					<div class="form-group">
						<input class="form-control" type="text" name="username" id="user_username" placeholder="Nom d'utilisateur" required="required" autofocus="autofocus">
					</div>
					<div class="form-group">
						<input class="form-control" type="password" name="password" id="password" placeholder="Mot de passe" required="required" autofocus="autofocus">
					</div>
					<div class="form-group">
						<input class="form-control" type="password" name="confirm" id="password" placeholder="Confirmer mot de passe" required="required" autofocus="autofocus">
					</div>
					<input id="btn_inscription" class="btn btn-block" type="submit" name="commit" value="s'inscrire">
						<?php  inscription(); ?>
					</input>
				</form>
			</div>
		</div>
	</body>
	<?php require_once("vue_footer.php"); ?>