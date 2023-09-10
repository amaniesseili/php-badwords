<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">\
  <!-- bootstrap -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css">
  <title> php BadWords</title>
</head>
<body>

<div class="container">
<h1>PHP Badwords</h1>
    <form action="process.php" method="post">
        <label for="paragraph">Inserisci un paragrafo:</label><br>
        <textarea id="paragraph" name="paragraph" rows="4" cols="50">Photofairs New York offre anche progetti speciali, installazioni su larga scala, progetti editoriali e un programma di conversazioni con leader del settore. A lanciare questa nuova fiera è Creo, società che organizza eventi e programmi nell’ambito della fotografia, del cinema e dell’arte, in partnership con Angus Montgomery Arts, suo azionista di maggioranza con quarant’anni di esperienza nell’organizzazione di fiere d’arte, e in collaborazione con Candlestar, società di consulenza internazionale nell’ambito dell’arte.</textarea><br><br>
        <label for="word">Parola da censurare:</label><br>
        <input type="text" id="word" name="word"><br><br>
        <input type="submit" value="Censura">
    </form>


</div>

  
</body>
</html>