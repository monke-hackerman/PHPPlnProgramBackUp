

<?php
include "InsertData.php"
?>

<DOCTYPE html>

    <form method="POST"> <!-- lager tekt boxer hvor info går inn-->  
        <input type="number" name="Forfater_id" required>
            Forfatter ID
        </p>
        <input type="text" name="ForNavn"required>
            Forfatter fornavn
        </p>
        <input type="text" name="EtterNavn"required>
            Forfatter etternavn
        </p>
        <input type="number" name="Artikel_id"required>
            Artikkel ID
        </p>
        <input type="text" name="Tittel"required>
            Tittel
        </p>
        <input type="text" name="Link"required>
            Link
        </p>
        <input type="text" name="Info"required>
            Info
        </p>
        <input type="Date" name="Dato"required>
            Dato
        </p>
        <input type="submit" name="leggtil" value="Legg til"required><!--knappen hvor du leger inn ting-->
    </form>
</html>
