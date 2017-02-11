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

		<script>
			function clearTextBox(){
				document.getElementById("user_username").value = "";
				document.getElementById("password").value = "";
				document.getElementById("passwordConfirm").value = "";
			}

			function verifIdentifiants(){
				var pseudo;
				var pwd1;
				var pwd2;
				var xmlHTTP;

				pseudo = document.getElementById("user_username").value;
				pwd1 = document.getElementById("password").value;
				pwd2 = document.getElementById("passwordConfirm").value;

				// test mdp identiques
				if(pwd1 == pwd2){
					xmlHTTP = new XMLHttpRequest();
					// On scrute le retour de la requête HttpRequest.
  					xmlHTTP.onreadystatechange = function() {
    					if (this.readyState == 4 && this.status == 200) {
     						if(xmlHTTP.responseText == "ok")
     						{
     							// TODO redirection vers la page d'accueil.
     							alert("Identification OK");
     							clearTextBox();
     						}else{
     							alert("Ce pseudo existe déjà.");
     							$("#btn_inscription").focus();
     						}
    					}
  					};
  					xmlHTTP.open("POST", "../controleurs/ctrl_inscription.php", true);
  					xmlHTTP.send("pseudo=" + pseudo + "password=" + pwd1);
				}else{
					document.getElementsByName('password').value = "";
					document.getElementsByName('passwordConfirm').value = "";
					alert("Mots de passes différents");
				}
			}
		</script>
	</body>
	<?php require_once("vue_footer.php"); ?>