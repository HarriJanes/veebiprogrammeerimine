<?php
  require("../../../config_vp2019.php");
  require("functions_film.php");
  $userName = "Harri";
  $dataBase = "if19_harri_ja_1";
  
  //var_dump($_POST);
  //kui on nuppu vajutatud
  if(isset($_POST["submitfilm"])){
	  saveFilmInfo($_POST["filmTitle"], $_POST["filmYear"],$_POST["filmduration"], 
	  $_POST["filmgenre"],$_POST["filmcompany"],$_POST["filmdirector"]);
	  //salvestame, kui vähemalt pealkiri on olemas
	  if(!empty($_POST["filmTitle"])) {
	  saveFilmInfo($_POST["filmTitle"], $_POST["filmYear"],$_POST["filmduration"], 
	  $_POST["filmgenre"],$_POST["filmcompany"],$_POST["filmdirector"]);
  }
?>

<body>
	<?php
	 echo "<h1>" .$userName ." kirjutab </h1>"
	?>
	<p> See leht on loodud koolitöö raames ning ei ole tõsiselt võetav </p>
	<hr>
	<h2> Eesti filmid, lisame uue </h2>
	<p> Täida kõik failid ja lisa film andmebaasi:</p>
	<form method="POST">
	 <label>Sisesta pealkiri: </label><input type="text" name="filmTitle">
	 <br>
	 <label> Filmi tootmisaasta: </label><input type="number" min="1912" max="2019"
	 value="2019" name="filmYear">
	 <br>
	 <label>Filmi kestus (min): </label><input type="number" min="1" max="300"
	 value="80" name="filmduration">
	 <br>
	 <label>Žanr: </label><input type="text" name="filmgenre">
	 <br>
	 <label>Filmi tootja: </label><input type="text" value="<?php echo $filmCompanyInserted: ?> name="filmcompany">
	 
	 <br>
	 <label>Filmi lavastaja: </label><input type="text" name="filmdirector">
	 <br>
	 <input type="submit" value="Salvesta filmi info" name="submitfilm">

	</form>
	<?php
		//echo "server: " .$serverHost .", kasutaja: " .$serverUsername;
		//echo $filmInfoHTML;
	?>
</body>
</html>
