<!-- http://ecolenationaledecirque.ca/fr/ -->
<!doctype html>
<html>
	<?php require_once("head.php"); ?>
	<body>
		<?php require_once("topbar.php"); ?>
		<div class="container title-container">
			<div class="container">
				<h1 class="title">Connexion</h1>
			</div>
		</div>
		<div id="main">
			<div class="container container-form">
				<form id="signin" class="form-signin" action="#" charset="UTF-8" method="post">
					<div class="form-group">
						<input class="form-control" type="text" name="user[username]" id="user_username" placeholder="Nom d'utilisateur" required="required" autofocus="autofocus">
					</div>
					<div class="form-group">
						<input class="form-control" type="password" name="user[password]" id="user_password" placeholder="Mot de passe" required="required" autofocus="autofocus">
					</div>
					<input class="btn btn-block" type="submit" name="commit" value="Connexion">
				</form>
			</div>
		</div>
	</body>
	<?php require_once("footer.php"); ?>
</html>






