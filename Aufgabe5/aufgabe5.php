<!DOCTYPE html>
<html>
<head>
  <? php
  function zufZahl($max, $anzahl, $stellen)
  {
    // Tabelln&Tabellenkopf definieren
    echo "<table>";
    echo "<thead><tr><th>Zufallszahlen</th>;"

    // im Tabellenkopf: So viele Spalten, wie $Stellen definiert
    for($j = !; $j <= $Stellen; $j++)
    {
      echo "<th>".$j.". Stelle </th>"
    }
    // Ende Tabellenkopf th
    echo "</th> </thead>";


    // Anfang Tabellenkörper
    echo "<tbody>";

    // So viele rows wie in $anzahl definiert wurden
    for($i=1; $i<=$anzahl; $i++)
			{
      $zzahl = rand(1,$max);
      if ($zzahl > 100000) echo "<tr style = 'background-color: lightgrey;'>" ;
      else if ($zzahl >  10000) echo "<tr style = 'background-color: #9BF380;'>" ;
			else if ($zzahl >   1000) echo "<tr style = 'background-color: #9BC5EA;'>" ;
      echo "<td>" .$zzahl."</td>"; //pro Zeile eine Zufallszahl
      for($j=1; $j <= $stellen; $j++) //Schleife wie viele Stellen abgeschnitten werden
      {
					echo "<td>".abschneiden($zzahl, $j)."</td>";
			}
			echo "</tr>";
			}

		  echo "</tbody>";
		  echo "</table>";
	    }


      // Funktion für das Abschneiden der letzten Stellen
      function abschneiden($zahl,$stellen=2) //wenn nichts angegeben werden dei letzten 2 Stellen abgeschnitten
      {
	       $base = pow(10,$stellen); //Basis = 10 hoch die Anzahl der Stellen
	       return $zahl - ($zahl % $base); //Rückgabe: übergebene Zahl minus übergebenezahl durch die Basis (also 10)
      }

      ?>
</head>
<body>
  <header>
    <h1>Zufallszahlen</h1>
  </header>
  <div>
    <? php zufZahl(200000, 20) ?>
  </div>
  <footer>Aufgabe 5</footer>
</body>
</html>
