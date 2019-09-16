<?php
  $userName = "Harri";
  $photoDir = "../photos/";
  $pickFileTypes = ["image/jpeg", "image/png"];
  $fullTimeNow = date("d/m/Y H:i:s");
  $hourNow = date ("H");
  $partOfDay = "Muskel punni aeg";
  if($hourNow < 8){
	  $partOfDay = "Kõht täis mehe moodi";
  }
  
  
  //info semestri kulgemise kohta
  $semesterStart = new DateTime ("2019-9-2");
  $semesterEnd = new DateTime ("2019-12-13");
  $semesterDuration = $semesterStart->diff($semesterEnd);
  $today = new DateTime("now");
  $fromSemesterStart = $semesterStart->diff($today);
  //var_dump($fromSemesterStart);
  $semesterInfoHTML = "<p>Siin peaks olema info semestri kulgemise kohta!</p>";
  $elapsedValue = $fromSemesterStart->format("%r%a");
  $durationValue = $semesterDuration->format("%r%a");
  //echo $testValue;
  //<meter min="0" max="155" value="87">Väärtus</meter>
  if($elapsedValue > 0) {
	  $semesterInfoHTML = "<p>semester on täies hoos: ";
	  $semesterInfoHTML .=  '<meter min="0" max="' .$durationValue .'"';
	  $semesterInfoHTML .= 'value= "' .$elapsedValue .'">';
	  $semesterInfoHTML .= round ($elapsedValue / $durationValue * 100, 1) ."%";
	  $semesterInfoHTML .= "</meter>";
	  $semesterInfoHTML .= "</p>";
	  
  }
  
  //Foto lisamine lehele
  $allPhotos = [];
  $dirContent = array_slice(scandir($photoDir), 2);
  //var_dump($dirContent);
  foreach ($dirContent as $file) {
	$fileInfo = getImagesize($photoDir . $file);
	//var_dump($fileInfo);
	if(in_array($fileInfo["mime"], $picFileType) == true) {
		array_push($allPhotos, $file);
		
	}
  
  }
  //var_dump($allPhotos);
  $picCount = count($allPhotos);
  $picNum = mt_rand (0,($picCount - 1));
  //echo $allPhotos($picNum);
  $photoFile = $photoDir .$allPhotos[$picNum];
  $randomImgHTML = '<img src="' .$photoFile .'" alt=TLÜ Terra õppehoone">';
  
  //lisame lehe päise
  require ("header.php")
?>

<!DOCTYPE html>
<html lang "et">
<head>
<meta charset="utf-8">
  <title>
  <?php 
   echo $userName;
  ?>
  esimene käula</title>
</head>
<body>
	<?php
	echo "<h1>" . $userName . " kirjutab </h1>"
	?>
<p> See leht on loodud koolitöö raames ning ei ole tõsiselt võetav </p>
<p> XD </p>
<?php
	echo $semesterInfoHTML
?>
<hr>
<p> Lehe avamise hetkel oli aeg:
<?php
 echo $fullTimeNow;
?>
. </p>
<?php
echo "<p>Lehe avamise hetkel oli " .$partOfDay ." . </P>"; 
?>
<hr>
<?php
echo $randomImgHTML;
?>
</body>
</html>
