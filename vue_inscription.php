	<?php require_once("vue_head.php"); ?>
	<body>
		<?php require_once("vue_topbar.php"); ?>
		<div class="container title-container">
			<div class="container">
				<h1 class="title">Inscription</h1>
			</div>
		</div>
		<?php
			$bdd = new PDO('mysql:host=localhost;dbname=bf_webdev;charset=utf8', 'root', '');
			$req = $bdd->query('SELECT * FROM utilisateur');
			$donnees = $req->fetch();
			var_dump($donnees);
		?>
		<div id="main">
			<div class="container container-form">
				<form id="signin" class="form-signin" action="#" charset="UTF-8" method="post">
					<div class="form-group">
						<input class="form-control" type="text" name="user[username]" id="user_username" placeholder="Nom d'utilisateur" required="required" autofocus="autofocus">
					</div>
					<div class="form-group">
						<input class="form-control" type="password" name="user[password]" id="password" placeholder="Mot de passe" required="required" autofocus="autofocus">
					</div>
					<div class="form-group">
						<input class="form-control" type="password" name="user[confirm-password]" id="password" placeholder="Confirmer mot de passe" required="required" autofocus="autofocus">
					</div>
					<input id="btn_inscription" class="btn btn-block" type="submit" name="commit" value="s'inscrire">
				</form>
			</div>
		</div>
		
	</body>
	<?php require_once("vue_footer.php"); ?>