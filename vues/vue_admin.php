<?php require_once("vue_head.php"); ?>
	<body onload="">
		<?php
			require_once("vue_topbar.php");
			require_once("../controleurs/ctrl_admin.php");
		?>
		<div class="container title-container">
			<div class="container">
				<h1 class="title">Administration</h1>
			</div>
		</div>
		<div id="main">
			<div class="container container-admin">
				<div class="label-admin">Ajouter une image</div><br/>
				<div class="form-group">
					<form action="../controleurs/ctrl_admin.php" method="post" enctype="multipart/form-data">
						<!--<input type="hidden" name="MAX_FILE_SIZE" value="2097152"/><br/>     <!-- taille maximale du fichier en octets, à mettre avant l'objet input de type file --> 
						<input style="color:white" type="file" value="choisissez une image" name="fichierCopie"/>
						<input class="form-control" style="width:300px; margin-left: 70px;" type="text" name="img_desc" id="img_desc" placeholder="Description de l'image" required="required" autofocus="autofocus" maxlength="45"><br/><br/>
						<input class="btn btn_block" style="width: 200px;" type="submit" value="Ajouter l'image"/><br/>
					</form>
				</div>
				<p style="border-bottom: 0px solid white"></p><br/>
				<p style="border-bottom: 0px solid white"></p><br/>
				<div class="label-admin">Ajouter une discipline</div><br/>
				<div class="form-group">
					<input class="form-control" style="width:300px;" type="text" name="disc_nom" id="disc_nom" placeholder="Nom de la discipline" required="required" autofocus="autofocus" maxlength="45" onblur="adminVerifDisciplineNom()">

					<select class="form-control listbox-disc" name="disc_urlImage" id="disc_urlImage">
						<option value="" disabled selected>Image</option>
						<?php getListeImage() ?>
					</select>

					<select class="form-control listbox-disc" name="disc_categorie" id="disc_categorie">
						<option value="" disabled selected>Catégorie</option>
						<?php getListeCategorie() ?>
					</select>

				</div>

				<div class="form-group">
					<textarea class="form-control textarea-disc" type="text" name="disc_description" id="disc_description" placeholder="Description de la discipline" required="required" autofocus="autofocus" maxlength="4294967296"></textarea>
				</div>
				
				<input id="btn_creerDiscipline" class="btn btn_block btn_creerdisc" type="button" name="commit" value="Créer la discipline" onclick="creerDiscipline()">
				</input>
			</div>
		</div>
	</body>
<?php require_once("vue_footer.php"); ?>