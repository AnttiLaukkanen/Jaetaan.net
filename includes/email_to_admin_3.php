<?php

$urlMuokkaa_10 = mysqli_real_escape_string($conn, $_GET['urlMuokkaaTaiPoista']);

$sql_10 = "SELECT * FROM ilmoitukset, osastot 
WHERE ilmoitukset.urlMuokkaaTaiPoista='$urlMuokkaa_10' 
AND ilmoitukset.id=osastot.id";

$result_10 = mysqli_query($conn, $sql_10);
$row_10 = mysqli_fetch_assoc($result_10);

  $sahkoposti = 'info@jaetaan.net';
  $linkki = 'https://jaetaan.net/ilmoitukset?urlKokoIlmoitus=' . $row_10['urlKokoIlmoitus'];
  $to = 'info@jaetaan.net';
  $headers = 'From: ' . $sahkoposti;
  $subject = 'Ilmoituksen kuva on vaihdettu Jaetaan.netissä';
  $txt = 'Käyttäjä on vaihtanut kuvan ilmoituksessaan Jaetaan.netin Muokkaa tai poista -sivun lomakkeella.
  
Ilmoituksen kuva näkyy julkisesti ja se kannattaa tarkistaa.  

Voit tarkistaa kuvan täällä:
' . $linkki . '

Tarvittaessa poista ilmoitus admin/julkaistut -sivun kautta.

Kiitos :-)';

mail($to, $subject, $txt, $headers);

?> 
