<div class="container">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // step 1- recupero il paragrafo e la parola da censurare dal modulo
    $paragraph = $_POST["paragraph"];
    $word = $_POST["word"];

    //step 2- stampo il paragrafo e la sua lunghezza
    echo "Paragrafo originale: <br>";
    echo $paragraph . "<br>";
    echo "Lunghezza del paragrafo: " . strlen($paragraph) . "<br><br>";

    //strep3- sostituisco la parola da censurare con ***
    $censored_paragraph = str_replace($word, '***', $paragraph);

    //step 4- Stampo il paragrafo censurato e la sua lunghezza
    echo "Paragrafo censurato: <br>";
    echo $censored_paragraph . "<br>";
    echo "Lunghezza del paragrafo censurato: " . strlen($censored_paragraph);
}
?>

</div>

