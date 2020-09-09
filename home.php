<?php
  $username = "Mariann Villems";
  $fulltimenow = date("d.m.Y H:i:s");
  $hournow = date("H");
  $partofday = "lihtsalt aeg";
  if ($hournow <= 7 and $hournow >= 23){
	  $partofday = "uneaeg";
  }
  if($hournow >= 8 and $hournow <= 18){
	  $partofday = "akadeemiline aeg";
  }
  if($hournow < 18){
	  $partofday = "puhkuse aeg";
  }
  
  //vaatame semestri kulgemist
  $semesterstart = new DateTime("2020-8-31");
  $semesterend = new DateTime("2020-12-13");
  //selgitame välja nende vahe ehk erinevus
  $semesterduration = $semesterstart->diff($semesterend);
  //leiame selle päevade arvuna
  $semesterdurationdays = $semesterduration->format("%r%a");
  //tänase päev
  $today = new DateTime("now");
  //if($fromsemesterstartdays < 0){semester pole alanud}
 ?>
 
<!DOCTYPE html>
<html lang="et">
<head>
  <meta charset="utf-8">
  <title><?php echo $username;?></title>

</head>
<body>
<h1 style="color:DodgerBlue;">Minu (<?php echo $username;?>) Veebiprogrammeerimise lehekülg</h1
  <p style="background-color:Violet;"> See veebileht on loodud õppetöö käigus ning ei sisalda mingit tõsiseltvõetavat sisu!</p>
  <p>See leht on loodud <a href="http://www.tlu.ee">Tallinna Ülikooli</a> Veebiprogrammeerimise kursuse raames esimesel loengul.</p>
  <p>See lehekülg avati kell: <?php echo $fulltimenow;?>.</p>
  <p><?php echo "Parajasti on " . $partofday . "." ;?> </p>

</body>
</html>