        <?php

            $nimi2 = $_POST['nimi'];
            $aihe2 = $_POST['otsikko'];
            $viesti2 = $_POST['sisalto'];
            $sahkoposti2 = $_POST['sahkoposti'];
            $sahkoposti3 = 'info@jaetaan.net';
            $linkki = 'https://jaetaan.net/ilmoitukset?urlKokoIlmoitus=' . $urlKokoIlmoitus;
            $linkki2 = 'https://jaetaan.net/muokkaa_tai_poista?urlMuokkaaTaiPoista=' . $urlMuokkaaTaiPoista;
            $to = $sahkoposti2;
            $headers = 'From: ' . $sahkoposti3;
            $subject = 'Ilmoituksesi Jaetaan.netissä: ' . $aihe2;
            $txt = 'Kiitos ilmoituksestasi Jaetaan.netissä ' . $nimi2 . '.

Ilmoituksesi on nyt tarkistettavana, ja se julkaistaan heti tarkistuksen jälkeen.

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
