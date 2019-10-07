<?php
  require("../../../config_vp2019.php");
  require("functions_film.php");
  $userName = "Harri";
  $dataBase = "if19_harri_ja_1";
  $filmInfoHTML = readAllFilms();
  
?>

<body>
<?php
 echo "<h1>" .$userName ." kirjutab </h1>"
?>
<p> See leht on loodud koolitöö raames ning ei ole tõsiselt võetav </p>
<hr>
<h2> Eesti filmid </h2>
<?php
	//echo "server: " .$serverHost .", kasutaja: " .$serverUsername;
	echo $filmInfoHTML;
?>
</body>
</html>
