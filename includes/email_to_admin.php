<?php

  $sahkoposti = 'info@jaetaan.net';
  $linkki = 'https://jaetaan.net/admin/publish_or_delete.php?urlKokoIlmoitus=' . $urlKokoIlmoitus;
  $to = 'info@jaetaan.net';
  $headers = 'From: ' . $sahkoposti;
  $subject = 'Uusi ilmoitus lisätty Jaetaan.nettiin';
  $txt = 'Uusi ilmoitus on lisätty Jaetaan.netin Lisää ilmoitus -sivun lomakkeelta.

Voit tarkistaa ja julkaista tai poistaa ilmoituksen täällä:
' . $linkki . '

Kiitos :-)';

mail($to, $subject, $txt, $headers);

?> 
