<?php
  require("../../../config_vp2019.php");
  require("functions_main.php");
  require("functions_user.php");
  $database = "if19_harri_ja_1";
  
  //kui pole sisselogitud
  if(!isset($_SESSION["userFirstname"])){
	  //siis jõuga sisselogimise lehele
	  header("Location: page.php");
	  exit();
  }
  
  //väljalogimine
  if(isset($_GET["logout"])){
	  session_destroy();
	  header("Location: page.php");
	  exit();
  }
  
  $userName = $_SESSION["userFirstname"] ." " .$_SESSION["userLastname"];
  
  require("header.php");
?>
  <body>
    <h1>Loo endale kasutajakonto</h1>
	<p>See leht on valminud TLÜ õppetöö raames ja selle sisu pole tõsiselt võetav.</p>
	<hr>
	<p><a href="?logout=1"> Logi välja! <a href="userprofile.php">Kasutajaprofiil</>
  </body>
</html>