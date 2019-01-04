<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Aufgabe 7</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <link href="../css/bootstrap.css" type="text/css" rel="stylesheet" />  -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

</head>

<body>

	<div class="container">
		<h2>Anmeldung</h2>
	
		<?php 
		if ($_POST)
		{
			$vorname 		= filter_var($_POST['vorname'], FILTER_SANITIZE_STRING);
			$nachname 		= filter_var($_POST['nachname'], FILTER_SANITIZE_STRING);
			$email 			= filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
			$studiengang 	= filter_var($_POST['studiengang'], FILTER_SANITIZE_STRING);
			
			$fehler="";
			$f_vorname = $f_nachname = $f_email = false;
			?>
		
		       
			<?php
			if(!$vorname)
			{
				$fehler .= "<li class='list-group-item list-group-item-danger'>Vorname fehlt</li>";
				$f_vorname = true;
			
			}
		
			if(!$nachname)
			{
				$fehler .= "<li class='list-group-item list-group-item-danger'>Nachname fehlt</li>";
				$f_nachname = true;
			}
			
			if(!$email)
			{
				$fehler .= "<li class='list-group-item list-group-item-danger'> E-Mail-Adresse fehlt</li>";
				$f_email = true;
			}
			
			if(empty($fehler)) //kein Fehler aufgetreten
			{
				echo "Herzlichen Dank ". $vorname ." ".$nachname. " vom Studiengang ". $studiengang . "!" ."<br>";
				echo "Wir haben eine Bestaetigung Ihrer Anmeldung an die E-Mail-Adresse ".$email ." versendet <br>";
				echo "<a href='aufgabe7.php'> zurueck </a>";
			}
			else //Fehler aufgetreten
			{
					echo "Bitte korrigieren Sie Ihre Eingaben:";
					echo "<ul class='list-group'>".$fehler ."</ul>";
					echo "<br>";
					include ('formular.php');
			}
			
		 }
			else 
			{	
				include ('formular.php'); //Formular <form>...</form>
			}
		
		?>
		
		
	</div>
</body>
</html>