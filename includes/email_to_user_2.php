<?php

$urlMuokkaa_10 = mysqli_real_escape_string($conn, $_GET['urlMuokkaaTaiPoista']);

$sql_10 = "SELECT * FROM ilmoitukset, osastot 
WHERE ilmoitukset.urlMuokkaaTaiPoista='$urlMuokkaa_10' 
AND ilmoitukset.id=osastot.id";

$result_10 = mysqli_query($conn, $sql_10);
$row_10 = mysqli_fetch_assoc($result_10);

            $nimi2 = $_POST['nimi'];
            $aihe2 = $_POST['otsikko'];
            $viesti2 = $_POST['sisalto'];
            $sahkoposti_10 = $row_10['sahkoposti'];
            $sahkoposti_11 = 'info@jaetaan.net';
            $linkki = 'https://jaetaan.net/ilmoitukset?urlKokoIlmoitus=' . $row_10['urlKokoIlmoitus'];
            $linkki2 = 'https://jaetaan.net/muokkaa_tai_poista?urlMuokkaaTaiPoista=' . $row_10['urlMuokkaaTaiPoista'];
            $to = $sahkoposti_10;
            $headers = 'From: ' . $sahkoposti_11;
            $subject = 'Ilmoituksesi Jaetaan.netissä: ' . $aihe2;
            $txt = 'Olet muokannut ilmoitustasi Jaetaan.netissä ' . $nimi2 . '.

Ilmoituksesi on nyt tarkistettavana ja se julkaistaan uudelleen heti tarkistuksen jälkeen.

Kun ilmoituksesi on julkaistu, saat siitä viestin tähän samaan sähköpostiisi.

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
