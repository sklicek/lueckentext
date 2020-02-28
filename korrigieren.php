<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Wormer Musek - Harmonie Wormeldange">
    <meta name="author" content="Steve Klicek" >
    <!--<link rel="shortcut icon" href="http://getbootstrap.com/docs-assets/ico/favicon.png">-->

    <title>Buchstaben und Worte</title>
       
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
  <!-- Wrap all page content here -->
    <div id="wrap">
   	<!-- Begin page content -->
      <div class="container">
		<?php

//korrektur
$eingabe=htmlspecialchars($_POST['eingabe']);
$eingabe=trim($eingabe);
$res=$_POST['res'];
$fehler=0;

if($eingabe!="" and $res!="") {
	if ($eingabe===$res){
		echo "<br>";				
		echo "<center>";
		echo "<img src='images/smile_lacht.png' alt='smile_lacht' class='img-responsive'>";
		echo "<br>";
		echo "<h1>Richtig!</h1>";
		echo "</center>";
	} else {
		echo "<br>";
		echo "<center>";
		echo "<img src='images/smile_traurig.jpeg' alt='smile_traurig' class='img-responsive'>";
		echo "<br>";
		echo "<h1>Leider falsch!</h1>";
		echo "</center>";
		$fehler=1;				
	}		
} else {
	//leere eingabe: fehler
	echo "<br>";
	echo "<center>";
	echo "<img src='images/smile_traurig.jpeg' alt='smile_traurig' class='img-responsive'>";
	echo "</center>";
	$fehler=1;	
}
?>
<form name="senden" method="POST" action="aufgaben.php">
	<?php
	if($fehler==1) {
		?>
		</br>
		<center>
		<a onclick="window.history.back();" class="btn btn-danger">Noch einmal versuchen...</a>
		</center>
		<?php
	} else {
		?>
		</br>
		<center>
		<input type="submit" class="btn btn-primary" value="Neue Aufgabe">
		</center>
		<?php
	}
	?>
	</br>
	<center>
	<a onclick="window.location.href='index.php';" class="btn btn-success">Andere Rätsel erstellen</a>
	</center>
</form>
</div>
	</div>	
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
