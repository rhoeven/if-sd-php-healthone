<?php

    $db= new PDO("mysql:host=localhost;dbname=fietsenmaker", "root", "");
    $query = $db->prepare("SELECT * FROM fietsen WHERE id = ".$_GET['id']);
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    foreach ($result as &$data) {
        echo "Artikelnummer: ".$data['id']."<br>";
        echo "Merk: " . $data['merk'] . "<br>";
        echo "Type: " . $data['type'] . "<br>";
        echo "Prijs: &euro; " . number_format($data["prijs"],2,",",".") . "<br>";
        echo "Voorraad: ". $data['voorraad'] . "<br>";
        echo "<a href='verhoog.php?id= " . $data['id'] . "'>verhoog voorraad</a><br>";
    }

    echo "<a href='master.php'>terug naar master pagina</a>";

?>