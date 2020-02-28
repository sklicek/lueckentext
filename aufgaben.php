<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Deutsche Lückentexte für die 3. Schulklasse">
    <meta name="author" content="Steve Klicek" >
    <!--<link rel="shortcut icon" href="http://getbootstrap.com/docs-assets/ico/favicon.png">-->

    <title>Deutsche Lückentexte</title>
       
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sticky-footer-navbar.css" rel="stylesheet">
    
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  
  </head>

  <body>
<?php
$filename="wortschatz.txt";
$wortschatz=file($filename, FILE_IGNORE_NEW_LINES);

//Zufallszeile auslesen
$zufall=rand(1,count($wortschatz));
$auswahl=$wortschatz[($zufall-1)];

//Zufallswort in der Zeile definieren
$arr_einzelworte=explode(" ",$auswahl);
$zufallszahl=rand(1,count($arr_einzelworte))-1;
$zufallswort=$arr_einzelworte[$zufallszahl];
//echo $zufallswort.'<br>';

//array gemischt ausgeben
/*$numbers=range(0,count($arr_einzelworte));
shuffle($numbers);
foreach ($numbers as $number) {
    echo $arr_einzelworte[$number].' ';
}*/

/*
$auswahl="";
$auswahl_komplett="";
$zufall=0;
$zufall_buchst=0;
$auswahl_buchst="";

//echo $zufall;
$auswahl=$wortschatz[($zufall-1)];

$zufall_buchst=rand(1,strlen($auswahl));
$auswahl_buchst=$auswahl[($zufall_buchst-1)];
*/
$auswahl_komplett=$zufallswort;
$auswahl=str_replace($zufallswort," ___ ",$auswahl); 
?>
    
	<!-- Wrap all page content here -->
    <div id="wrap">
   	<!-- Begin page content -->
      <div class="container">
        <form method="post" action="korrigieren.php">
        <input type="hidden" name="res" value="<?=$auswahl_komplett;?>"/>
        
  <h1>Deutsche Lückentexte</h1>
  <h2>Rätsel: <small>Welches Wort fehlt? Schreibe das fehlende Wort in das Feld</small></h2>
 <h3><?=$auswahl;?></h3>
 <p style="background-color:yellow">
  <?php
  //array gemischt ausgeben
$numbers=range(0,count($arr_einzelworte));
shuffle($numbers);
foreach ($numbers as $number) {
    echo '<b>'.$arr_einzelworte[$number].'</b> ';
}
  ?>
</p>
        <input type="text" name="eingabe" maxlength="<?=strlen($auswahl_komplett);?>" required/>
        <input type="submit" class="btn btn-primary" value="verbessern">
	</form>
        </div><!--container-->
	</div><!-wrap-->	
   <div id="footer">
     	<div class="container">
     		<p class="text-muted">(c) 2018 by Steve Klicek
	  			<small><label class="pull-right">created by Steve Klicek</label></small>
     		</p>
     	</div>
   </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="css/jquery-1.js"></script>
    <script src="css/bootstrap.js"></script>
  

</body></html>
