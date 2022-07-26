<?php
    $servername = "localhost";
    $username = "root";
    $dbname = "pizerie";
    $password = "";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if(!$conn)
        echo "Conexiune esuata<br><br>";
    else
    {
        echo "Conexiune reusita<br><br>";
        
        $nume = $_POST['Name'];
        $adresa = $_POST['Adress'];
        $comanda = $_POST['Comanda'];

        $sql = "INSERT INTO `COMENZI`(`Nume`, `Adresa`, `Comanda`) 
                VALUES ('$nume', '$adresa', '$comanda')";
    
        $rez = mysqli_query($conn, $sql);
        if(!$rez)
            echo "Eroare, comanda nu a fost trimisa<br><br>";
        else
            echo "Comanda a fost trimisa<br><br>";
    }
?>