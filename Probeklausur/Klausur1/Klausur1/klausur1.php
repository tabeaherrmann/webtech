<!DOCTYPE html>
<html lang="de">
<head>
<title>WebTech</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <style>
        header {
            background-color: #f5f5f5;
        }

        h1 {
            color: darkgray;
            text-align: center;
        }

        footer {
            background-color: #f5f5f5;
            color: darkgray;
        }

        .kopie-div {
            background-color: darkgray;
        }

    </style>

</head>
<body>
<header>
    <h1>WebTech-Klausur</h1>
</header>

<div class="col-6">

    <form>

    <button>Datein einlesen</button>

    <input type="text" style="max-lines: 15;">

    <input type="submit" name="Kopieren">

    <input type="submit" name="Text speichern">

    </form>

    <h3>Suchbegriffe:</h3>
    <div style="display:none;"></div>

</div>

<div class="col-6">
    <input type="text" name="Suche">
     <h3>Kopie</h3>
    <div class="kopie-div"></div>
</div>

</body>

<footer>
    <a href="../../../webtech">Tabea Herrmann</a>
</footer>
</html>