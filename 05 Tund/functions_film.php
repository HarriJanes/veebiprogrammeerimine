<?php
 function readAllFilms (){
	  //loeme andmebaasist
	  //loome andmebaasiühenduse (näiteks $conn)
	  $conn = new mysqli ($GLOBALS ["serverHost"], $GLOBALS ["serverUsername"],
	  $GLOBALS ["serverPassword"], $GLOBALS ["dataBase"]);
	  //valmistame ette päringu (sql käsud on suurte tähtedega)
	  $stmt = $conn->prepare("SELECT pealkiri, aasta FROM  filmid");
	   //seome saadava tulemuse muutujaga
	  $stmt->bind_result($filmTitle, $filmYear);
	  //käivitame SQL päringu
	  $stmt->execute();
	  $filmInfoHTML = "";
	  while($stmt->fetch()){
	   $filmInfoHTML .= "<h3>" .$filmTitle ."</h3>";
	   $filmInfoHTML .= "<p>Tootmisaasta: " .$filmYear .".</p>";
	   //echo $filmTitle;
	  }
	  //echo filmInfoHTML;
	  //sulgeme ühenduse
	  $stmt->close();
	  $conn->close();
	  //väljastan väärtuse
	  return $filmInfoHTML;
  }
  
  function saveFilmInfo($filmTitle, $filmYear, $filmduration, 
  $filmgenre, $filmcompany, $filmdirector){
	  $conn = new mysqli ($GLOBALS ["serverHost"], $GLOBALS ["serverUsername"],
	  $GLOBALS ["serverPassword"], $GLOBALS ["dataBase"]);
	  $stmt = $conn->prepare("INSERT INTO filmid (pealkiri, aasta, kestus, zanr, tootja, lavastaja)
	  VALUES (?,?,?,?,?,?)");
	  echo $conn->error;
	  //s - string, i - integer (täisarv), d - decimal (murdarv)
	  $stmt->bind_param("siisss", $filmTitle, $filmYear, $filmduration, $filmgenre, $filmcompany, $filmdirector);
	  $stmt->execute();
	 
	  $stmt->close();
	  $conn->close();
  }
  ?>