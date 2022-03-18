<html> <!--hoved side-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css styles.css">
    <title>Index</title>
</head>

<body> 
    <h1> hei velkommen til database-siden min for kilder jeg bruker i timer :D </h1>
    <h2>dette er bare html kode</h2>





    
</body>


<div class="hovedvindu">

    <h1>Legge inn kilder til databasen</h1>
    <?php
    //koden for å sette injn i databasen går her
        include './Php Files/database.php';
    ?>  
</div>


<div class="hovedvinduDB">

        <h2>Mine databasekilder</h2>
        <?php 
         //php koden for tabellen starter her
            include './Php Files/Oversikt.php';
        ?>
    </div>
<!-- her kommer video om kode men den er ikke lagd ennå-->

<video width="400" height="225" controls>
    <source src="evaluering gjennomgang av php kode the whole shabang.mp4" type="video/mp4">
    Your browser does not support the video tag.
</video>
<p>yes alle filer er backet i git hub</p>
</html>
