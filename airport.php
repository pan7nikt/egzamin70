<!DOCTYPE html>
<?php
    setcookie("cookie","0", time() + 3600);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odloty samolotów</title>
    <link rel="stylesheet" href="styl6.css">
</head>
<body>
    <div id="bannerl">
        <h2>Odloty z lotniska</h2>
    </div>
    <div id="bannerr">
        <h2><img src="zad6.png" alt="logotyp"></h2>
    </div>
    <div id="content">
        <h4>tabela odlotów</h4>
        <table>
            <tr><th>lp.</th><th>numer rejsu</th><th>czas</th><th>kierunek</th><th>status</th></tr>
            <?php
        $conn = mysqli_connect('localhost','root','','egzamin');
        $q = mysqli_query($conn,"SELECT `id`,`nr_rejsu`,`czas`,`kierunek`,`status_lotu` FROM odloty ORDER BY `czas` DESC;");
        while($a = mysqli_fetch_array($q))
        {
            echo("<tr><td>".$a['id']."</td><td>".$a['nr_rejsu']."</td><td>".$a['czas']."</td><td>".$a['kierunek']."</td><td>".$a['status_lotu']."</td></tr>");
        }
        ?>
        </table>
    </div>
    <div id="stopkal">
        <a href="kw1.jpg">Pobierz obraz</a>
    </div>
    <div id="stopkam">
        <?php
        if(!isset($_COOKIE["cookie"]))
        {
            echo "<p>Dzień dobry! Sprawdź regulamin naszej strony</p>";
        }
        else
        {
            echo "<p>Miło nam, że nas znowu odwiedziłeś</p>";
        }
        ?>

    </div>
    <div id="stopkar">
        Autor: 12345678901
    </div>
</body>
</html>