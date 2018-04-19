<?php

$urlKokoIlmoitus_12 = mysqli_real_escape_string($conn, $_GET['urlKokoIlmoitus']);

$sql_12 = "SELECT * FROM ilmoitukset, osastot 
WHERE ilmoitukset.urlKokoIlmoitus='$urlKokoIlmoitus_12' 
AND ilmoitukset.id=osastot.id";

$result_12 = mysqli_query($conn, $sql_12);
$row_12 = mysqli_fetch_assoc($result_12);

            $nimi2 = $row_12['nimi'];
            $aihe2 = $row_12['otsikko'];
            $viesti2 = $row_12['sisalto'];
            $sahkoposti_12 = $row_12['sahkoposti'];
            $sahkoposti_13 = 'info@jaetaan.net';
            $linkki = 'https://jaetaan.net/ilmoitukset?urlKokoIlmoitus=' . $row_12['urlKokoIlmoitus'];
            $linkki2 = 'https://jaetaan.net/muokkaa_tai_poista?urlMuokkaaTaiPoista=' . $row_12['urlMuokkaaTaiPoista'];
            $to = $sahkoposti_12;
            $headers = 'From: ' . $sahkoposti_13;
            $subject = 'Ilmoituksesi Jaetaan.netissä: ' . $aihe2;
            $txt = 'Ilmoituksesi on nyt julkaistu Jaetaan.netissä ' . $nimi2 . '.

Pääset tarkastelemaan ilmoitustasi tämän linkin kautta:
' . $linkki . '

Alla olevan linkin kautta pääset muokkaamaan ilmoitustasi tai poistamaan sen kokonaan sekä ennen julkaisua että sen jälkeen. 
Voit muokata ilmoitustasi niin usein kuin haluat.
Muokkauksen jälkeen ilmoitus menee tarkistettavaksi ja se julkaistaan uudelleen heti tarkistuksen jälkeen. 

Huomaa, että ilmoituksen poistamista ei voi perua.

Muokkaa tai poista -linkki on vain sinun henkilökohtaiseen käyttöösi.
Jos käytät tietokonetta, joka on yhteiskäytössä, tyhjennä sivuhistoria, kun olet käynyt muokkaa tai poista -sivulla.
Näin muut eivät pääse muokkaamaan ilmoitustasi eivätkä poistamaan sitä.

' . $linkki2 . '


Tämä viesti kannattaa säilyttää kunnes poistat ilmoituksesi tai se poistuu automaattisesti.

Terveisin,
Jaetaan.netin ylläpito';

mail($to, $subject, $txt, $headers);

?> 
