

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Formulaire</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>
<body>

<?php

$Database = mysqli_connect('localhost', 'root', '');

mysqli_select_db($Database,'slamquiz');

echo"<form action='test.php' method='GET'>";
echo"<p>Votre prenom : <input type='text' name='prenom' /></p>";
echo"<p>Votre nom : <input type='text' name='nom' /></p>";
echo"<p><input type='submit' value='OK'></p>";
echo"</form>";

if (isset($_GET['prenom']) and isset($_GET['nom'])){
    $firstName=$_GET['prenom'];
    $secondeName=$_GET['nom'];
    createUser();
    echo"utilisateur récupéré";
}


function createUser(){ 
    $sql = "INSERT INTO `tbl_category` (`shortname`, `longname`) VALUES ('".$firstName['prenom']."', '".$secondeName['nom']."')";
    $req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
}

mysqli_close($Database);

?>

</body>
</html>

