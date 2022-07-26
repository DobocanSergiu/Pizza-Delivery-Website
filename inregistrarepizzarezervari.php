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
        $nrdepers = $_POST['nrdepers'];
        $Data = $_POST['Data'];
		$Time = $_POST['Time'];

        $sql = "INSERT INTO `REZERVARI`(`Nume`, `NrDePersoane`, `Data`,`Timp`) 
                VALUES ('$nume', '$nrdepers', '$Data','$Time')";
    
        $rez = mysqli_query($conn, $sql);
        if(!$rez)
            echo "Eroare, rezervarea nu a fost trimisa<br><br>";
        else
            echo "Rezervarea a fost trimisa<br><br>";
    }
?>