<!DOCTYPE html>
<head>
    <title>Sovy</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


<?php
$body = 0;
if (isset($_GET["otazka1"]) && $_GET["otazka1"] == "Ano") {
    $body++;
}
if (isset($_GET["otazka2"]) && $_GET["otazka2"] == "Ne") {
    $body++;
}
if (isset($_GET["otazka3"]) && $_GET["otazka3"] == "Ano") {
    $body++;
}

if (isset($_GET["otazka1"]) || isset($_GET["otazka2"]) || isset($_GET["otazka3"])) {
    if ($body == 0){
        echo "<h1> Odpověděl jsi na všechno špatně. Tady máš obrázek.</h1>";
        echo "<img src='angry_owl.jpg' class='center-img'  style='border:2px solid black'>";
        echo "<style>body { background-color: red; }</style>";

    }
    else if ($body == 1){
         echo "<h1> Odpověděl jsi na 1 ze 3 otázek dobře. Tady máš obrázek.</h1>";
         echo "<img src='owl1.jpg' class='center-img'  style='border:2px solid black'>";
         echo "<style>body { background-color: orange; }</style>";
    }
    else if ($body == 2){
         echo "<h1> Odpověděl jsi na 2 ze 3 otázek dobře. Tady máš obrázek.</h1>";
         echo "<img src='owl2.jpg' class='center-img'  style='border:2px solid black'>";
         echo "<style>body { background-color: yellow; }</style>";
    }
    else if ($body == 3){
         echo "<h1> Odpověděl jsi na 3 ze 3 otázek dobře. Tady máš obrázek.</h1>";
         echo "<img src='happy_owl.jpg' class='center-img'  style='border:2px solid black'>";
         echo "<style>body { background-color: green; }</style>";
    }
}
else{
     echo "<h1>Sovy</h1>";
     }




?>


<form>
    <div class="box">
        <div class="text">
            <label>Mají sovy velký, silný zobák?</label>
            <select name="otazka1">
                <option>Ano</option>
                <option>Ne</option>
            </select>
            <br>
            <label>Mají sovy špatně vyvinutý sluch?</label>
            <select name="otazka2">
                <option>Ano</option>
                <option>Ne</option>
            </select>
            <br>
            <label>Mají sovy na nohách vždy 4 prsty?</label>
            <select name="otazka3">
                <option>Ano</option>
                <option>Ne</option>
            </select>
            <br>
        </div>
        <button class='button'><strong>Odeslat</strong></button>

    </div>
</form>
</body>
</html>
