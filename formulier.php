<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mijn eerste formulier!</title>
</head>

<body>
    <form action="verwerk.php" method="post">
    <p>
        <label for="voornaam">Voornaam:</label>
        <input type="text" name="voornaam" id="voornaam" />
    </p>
    <p>
        <label for="achternaam">Achternaam:</label>
        <input type="text" name="achternaam" id="achternaam" />
    </p>
    <p>
        <input type="submit" value="Verzenden" />
    </p>
    </form>
</body>
</html> 
