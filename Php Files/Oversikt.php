<DOCTYPE html>


<head>
</head>
<body> 
    <?php

        
        // Tilkoblingsinformasjon
        $tjener = "localhost";
        $brukernavn = "root";
        $passord = "root";
        $database = "myddbb";
        $port = 8889;

        // Opprette en kobling med mysql
        $kobling = new mysqli($tjener, $brukernavn, $passord, $database, $port);

        //sql join kode som sier hav som skal i tabellen
        $sql = "SELECT a.Tittel, a.Link, a.Info, f.ForNavn, f.EtterNavn, fha.Dato
        FROM myddbb.artikel a, myddbb.forfater f, myddbb.artikel_has_forfater fha
        WHERE a.Artikel_id = fha.Artikel_Artikel_id 
        AND f.Forfater_id = fha.Forfater_Forfater_id
        ORDER BY a.Tittel, f.EtterNavn, fha.Dato";


        // Sjekk om koblingen virker
        if ($kobling->connect_error) {
        die("Noe gikk galt: " . $kobling->connect_error);
        }
        $resultat = $kobling->query($sql);
        

        echo "<table>"; // Starter tabellen
            echo "<tr>"; // Lager en rad med overskrifter
                echo "<th>Tittel</th>";
                echo "<th>Fornavn</th>";
                echo "<th>Etternavn</th>";
                echo "<th>Link</th>";
                echo "<th>Dato</th>";
                echo "<th>Beskrivelse</th>'";

                
            echo "</tr>";
        

            while($rad = $resultat->fetch_assoc()) { //lager infoen i tabellen
                $Dato= $rad["Dato"];
                $FN = $rad["ForNavn"];
                $EN = $rad["EtterNavn"];
                $Tittel = $rad["Tittel"];
                $Link = $rad["Link"];
                $Info = $rad["Info"];

           
                echo "<tr>";
                    echo "<td>$Tittel</td>";
                    echo "<td>$FN</td>";
                    echo "<td>$EN</td>";
                    echo "<td>$Link</td>";
                    echo "<td>$Dato</td>";
                    echo "<td>$Info</td>";

           
                echo "</tr>";
            }
        echo "</table>"; // Avslutter tabellen
        
    ?>
</body>
</html>