	<?php require_once("vue_head.php"); ?>
	<body>
		<?php
			require_once("vue_topbar.php");
			require_once("connexion.php")
		?>
		<div class="container title-container">
			<div class="container">
				<h1 class="title">Connexion</h1>
			</div>
		</div>
		<div id="main">
			<div class="container container-form">
				<form id="signin" class="form-signin" charset="UTF-8" method="POST">
					<div class="form-group">
						<input class="form-control" type="text" name="pseudo" id="user_username" placeholder="Nom d'utilisateur" required="required" autofocus="autofocus">
					</div>
					<div class="form-group">
						<input class="form-control" type="password" name="password" id="user_password" placeholder="Mot de passe" required="required" autofocus="autofocus">
					</div>
					<input class="btn btn-block" type="submit" name="commit" value="Connexion">
				</form>
			</div>
		</div>
		<?php inscription(); ?>
	</body>
	<?php require_once("vue_footer.php"); ?>







