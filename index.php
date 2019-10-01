<?php 
$host = "localhsot";
$username ="slamquiz";
$passwd = "7pGTNDENkS66tMOz";
$dbname ="slamquiz";
$idConnection = new MySQLi($host, $username , $passwd,$dbname);
    if ($idConnection){
        $result = $idConnection->query(
            "SELECT * From tbl_category
            WHERE shortname='" .$shortname . "';");
        
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Categorie QCM</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="center">
		<form>
			<h1>Categorie de QCM</h1>
			<label for="shortname">Entrer le numéro de catégorie : </label>
			<input type="text" id="shortname" name="shortname">
			<input type="submit" value="->">
		</form>
		<br>

		<?php 
		if (isset($_GET['shortname']) and $_GET['shortname'] != "") {
		?>
		<table border="1">
			<tr>
				<td>Shortname</td>
				<td>Longname</td>
			</tr>
		<?php
			$shortname = $_GET['shortname'];
			$resultat = $bdd->query("SELECT * FROM `tlt_category` WHERE `shortname` = '$shortname'");
			while ($donnees = $resultat->fetch_assoc()){
		?>
			<tr>
				<td><?php echo $donnees['shortname'] ?></td>
				<td><?php echo $donnees['longname'] ?></td>
			</tr>
		<?php
			};
		?>
		</table>
		<?php
		}
		?>
	</div>

</body>
</html>