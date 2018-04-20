<?php
            $servername = 'your server name';
            $username = 'your user name';
            $password = 'your password';
            $dbname = 'your database name';
            // Luo yhteyden
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            //Tarkistaa yhteyden
            if (!$conn) {
                die('Jokin meni pieleen. Yritä kohta uudestaan.');
            }
        ?>
