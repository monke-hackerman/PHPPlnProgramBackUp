<?php
if(isset($_POST["leggtil"])) //hvis du trykker på leggtil knappen
{
    

    //Kobling Settup
    // Tilkoblingsinformasjon
    $tjener = "localhost";
    $brukernavn = "root";
    $passord = "root";
    $database = "myddbb";
    $port = 8889;

    // Opprette en kobling med mysql
    $kobling = new mysqli($tjener, $brukernavn, $passord, $database, $port);

    // Sjekk om koblingen virker
    if ($kobling->connect_error) {
        die("Noe gikk galt: " . $kobling->connect_error);
    }
    // Angi UTF-8 som tegnsett
    $kobling->set_charset("utf8");
{   


    //Insert forfater values
    $FID = $_POST["Forfater_id"];
    $FN = $_POST["ForNavn"];
    $EN = $_POST["EtterNavn"];

    //Insert Artikkel values
    $AID = $_POST["Artikel_id"];
    $Tittel = $_POST["Tittel"];
    $Link = $_POST["Link"];
    $Info = $_POST["Info"];

    //Insert Forfater_has_artikkel values
    $Dato = $_POST["Dato"];


    //Insert Forfatter
    $sql_array[] = "INSERT INTO forfater (Forfater_id, ForNavn, EtterNavn) VALUES ('$FID', '$FN', '$EN')";
    
    //Insert Artikkel
    $sql_array[] = "INSERT INTO artikel (Artikel_id, Tittel, Link, Info) VALUES ('$AID', '$Tittel', '$Link', '$Info')";

    //Insert Forfater_has_artikkel
    $sql_array[] = "INSERT INTO artikel_has_forfater (Artikel_Artikel_id, Forfater_Forfater_id, Dato) VALUES ('$AID', '$FID', '$Dato')";

    
    //lager info en etter en først forfatter så artikkel så forfatter_has_artikkel
    foreach ($sql_array as $sql) {

        if ($kobling->query($sql)) {
            echo "Spørringen $sql ble gjennomført.";
        } else {
            echo "Noe gikk galt med spørringen $sql ($kobling->error).";
        }
    }
}

}
?>