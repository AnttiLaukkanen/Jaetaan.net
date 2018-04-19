<?php

$urlMuokkaa_10 = mysqli_real_escape_string($conn, $_GET['urlMuokkaaTaiPoista']);

$sql_10 = "SELECT * FROM ilmoitukset, osastot 
WHERE ilmoitukset.urlMuokkaaTaiPoista='$urlMuokkaa_10' 
AND ilmoitukset.id=osastot.id";

$result_10 = mysqli_query($conn, $sql_10);
$row_10 = mysqli_fetch_assoc($result_10);

  $sahkoposti = 'info@jaetaan.net';
  $linkki = 'https://jaetaan.net/admin/publish_or_delete.php?urlKokoIlmoitus=' . $row_10['urlKokoIlmoitus'];
  $to = 'info@jaetaan.net';
  $headers = 'From: ' . $sahkoposti;
  $subject = 'Ilmoitusta on muokattu Jaetaan.netissä';
  $txt = 'Ilmoitusta on muokattu Jaetaan.netin Muokkaa tai poista -sivun lomakkeella.

Voit tarkistaa ilmoituksen ja julkaista tai poistaa sen täällä:
' . $linkki . '

Kiitos :-)';

mail($to, $subject, $txt, $headers);

?> 
