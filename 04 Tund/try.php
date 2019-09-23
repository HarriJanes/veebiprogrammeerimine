<?php
  $userName = "Harri";
  $fullTimeNow = date("d/m/Y H:i:s");
  $hourNow = date ("H");
  $partOfDay = "Muskel punni aeg";
  if($hourNow < 8){
	  $partOfDay = "Kõht täis mehe moodi";
  }
  
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
<p> See leht on loodud koolitöö raames ning pole ei ole tõsiselt võetav </p>
<p> XD </p>
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
</body>
</html>
