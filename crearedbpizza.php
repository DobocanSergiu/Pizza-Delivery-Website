<?php
    $servername = "localhost";
    $username = "root";
    $dbname = "pizerie";
    $password = "";

    $conn = mysqli_connect($servername, $username, $password);

    if(!$conn)
        echo "Conexiune esuata<br><br>";
    else
    {
        echo "Conexiune reusita<br><br>";

        $sql = "CREATE DATABASE PIZERIE";

        $rez = mysqli_query($conn, $sql);

        if($rez)
            echo "Creare bd cu succes<br><br>";

        $conn2 = mysqli_connect($servername, $username, $password, $dbname);

        if(!$conn2)
            echo "Conexiune esuata<br><br>";
        else
        {
            echo "Conexiune reusita<br><br>";
            $sql2 = "CREATE TABLE COMENZI
                    (
                        Nume VARCHAR(20) PRIMARY KEY,
                        Adresa VARCHAR(40) NOT NULL,
                        Comanda VARCHAR(40) NOT NULL
                    );";

            $rez = mysqli_query($conn2, $sql2);

            if($rez)
                echo "creare tabel cu succes<br><br>";
			
			echo "Conexiune reusita<br><br>";
            $sql2 = "CREATE TABLE REZERVARI
                    (
                        Nume VARCHAR(20) PRIMARY KEY,
                        NrDePersoane VARCHAR(40) NOT NULL,
                        Data DATE NOT NULL,
						Timp TIME NOT NULL
						
                    );";

            $rez = mysqli_query($conn2, $sql2);

            if($rez)
                echo "creare tabel cu succes<br><br>";
        }
    }
?>