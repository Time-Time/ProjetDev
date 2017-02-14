<?php require_once("vue_head.php"); ?>
	<body onload="">
		<?php
			require_once("vue_topbar.php");
			require_once("../controleurs/ctrl_admin.php");
		?>
		<div class="container title-container">
			<div class="container">
				<h1 class="title">Administrer le site</h1>
			</div>
		</div>
		<div id="main">
			<div class="container container-form">
				<!--<form id="signin" class="form-signin" action="../controleurs/ctrl_inscription.php" charset="UTF-8" method="POST">-->
				<div class="form-group">
					<input class="form-control" type="text" name="disc_nom" id="disc_nom" placeholder="Nom de la discipline" required="required" autofocus="autofocus" maxlength="45" onblur="adminVerifDisciplineNom()">
				</div>
				<div class="form-group">
					<input class="form-control" type="text" name="disc_description" id="disc_description" placeholder="Description de la discipline" required="required" autofocus="autofocus" maxlength="4294967296">
				</div>
				<div class="form-group">
					<select name="disc_categorie" id="disc_categorie" placeholder="Sélectionner une catégorie">
    					<option value="" disabled selected>Sélectionner une catégorie</option>
    					<?php getListeCategorie() ?>
					</select>
				</div>
				<input id="btn_creerDiscipline" class="btn btn_block" type="button" name="commit" value="Créer la discipline" onclick="creerDiscipline()">
				</input>
				<!--</form>-->
			</div>
		</div>
	</body>
<?php require_once("vue_footer.php"); ?>