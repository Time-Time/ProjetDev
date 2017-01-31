<?php

	session_start();
	unset($_SESSION);
	session_destroy();

	header('Location: index.php');
	include("vue_head.php"); ?>
	<body>
		<?php include("vue_topbar.php"); ?>
		<div class="container title-container">
			<div class="container">
				<h1 class="title">Bienvenue sur Notre site !</h1>
			</div>
		</div>
		<div id="main" style="background-color: green">
			<div class="discipline-container">
				<img class="img-discipline" src="assets/img/contactBall.jpg" width="200px" height="150px" />
				aie ça fait mal !
			</div>
				<!-- CONTENU DU SITE -->

		</div>
	</body>
	<?php require_once("vue_footer.php"); ?>
?>
