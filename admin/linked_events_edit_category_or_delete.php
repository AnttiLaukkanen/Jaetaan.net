<!DOCTYPE html>
<html>

<head>

  <script>

    if(window.location.protocol != 'https:') {
      location.href = location.href.replace('http://', 'https://');
    }

  </script>

  <meta name='robots' content='noindex'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <meta charset='UTF-8'>

  <link rel='stylesheet' type='text/css' href='https://jaetaan.net/muotoilu.css'>

  <script src='../toiminnallisuuksia.js'></script>
  
  <title>Admin – Jaetaan.net</title>

</head>

<body>

<div class="keski_osa">

    <h1 class="lisaa_ilmoitus_otsikko">Muokkaa ilmoitusta tai poista se kokonaan</h1>

    <?php

    if (isset($_POST["otsikko"])) {

        $ilmoitus_lahtee = 1;

        // Muodostaa yhteyden tietokantaan.

        include '../includes/connect_to_database.php';

        // Lomakkeesta tietokantaan

        $elokuvat = mysqli_real_escape_string($conn, $_POST['o_1'] . ' ');
        if ($_POST['o_1'] == '') {
            $elokuvat = ''; 
        }

        $improvisointi = mysqli_real_escape_string($conn, $_POST['o_2'] . ' ');
        if ($_POST['o_2'] == '') {
            $improvisointi = ''; 
        }

        $keskustelu = mysqli_real_escape_string($conn, $_POST['o_3'] . ' ');
        if ($_POST['o_3'] == '') {
            $keskustelu = ''; 
        }

        $kirjallisuus = mysqli_real_escape_string($conn, $_POST['o_4'] . ' ');
        if ($_POST['o_4'] == '') {
            $kirjallisuus = ''; 
        }

        $kuvataide = mysqli_real_escape_string($conn, $_POST['o_5'] . ' ');
        if ($_POST['o_5'] == '') {
            $kuvataide = ''; 
        }

        $kasityot = mysqli_real_escape_string($conn, $_POST['o_6'] . ' ');
        if ($_POST['o_6'] == '') {
            $kasityot = ''; 
        }

        $leikkiminen = mysqli_real_escape_string($conn, $_POST['o_7'] . ' ');
        if ($_POST['o_7'] == '') {
            $leikkiminen = ''; 
        }

        $liikunta = mysqli_real_escape_string($conn, $_POST['o_8'] . ' ');
        if ($_POST['o_8'] == '') {
            $liikunta = ''; 
        }

        $luento = mysqli_real_escape_string($conn, $_POST['o_9'] . ' ');
        if ($_POST['o_9'] == '') {
            $luento = ''; 
        }

        $musiikki = mysqli_real_escape_string($conn, $_POST['o_10'] . ' ');
        if ($_POST['o_10'] == '') {
            $musiikki = ''; 
        }

        $nayttelyt = mysqli_real_escape_string($conn, $_POST['o_11'] . ' ');
        if ($_POST['o_11'] == '') {
            $nayttelyt = ''; 
        }

        $oppiminen = mysqli_real_escape_string($conn, $_POST['o_12'] . ' ');
        if ($_POST['o_12'] == '') {
            $oppiminen = ''; 
        }

        $pelaaminen = mysqli_real_escape_string($conn, $_POST['o_13'] . ' ');
        if ($_POST['o_13'] == '') {
            $pelaaminen = ''; 
        }

        $politiikka = mysqli_real_escape_string($conn, $_POST['o_14'] . ' ');
        if ($_POST['o_14'] == '') {
            $politiikka = ''; 
        }

        $runonlausunta = mysqli_real_escape_string($conn, $_POST['o_15'] . ' ');
        if ($_POST['o_15'] == '') {
            $runonlausunta = ''; 
        }

        $sadunkerronta = mysqli_real_escape_string($conn, $_POST['o_16'] . ' ');
        if ($_POST['o_16'] == '') {
            $sadunkerronta = ''; 
        }

        $tanssi = mysqli_real_escape_string($conn, $_POST['o_17'] . ' ');
        if ($_POST['o_17'] == '') {
            $tanssi = ''; 
        }

        $tarinankerronta = mysqli_real_escape_string($conn, $_POST['o_18'] . ' ');
        if ($_POST['o_18'] == '') {
            $tarinankerronta = ''; 
        }

        $teatteri = mysqli_real_escape_string($conn, $_POST['o_19'] . ' ');
        if ($_POST['o_19'] == '') {
            $teatteri = ''; 
        }

        $tyopaja = mysqli_real_escape_string($conn, $_POST['o_20'] . ' ');
        if ($_POST['o_20'] == '') {
            $tyopaja = ''; 
        }

        $urheilu = mysqli_real_escape_string($conn, $_POST['o_21'] . ' ');
        if ($_POST['o_21'] == '') {
            $urheilu = ''; 
        }

        $uskonto = mysqli_real_escape_string($conn, $_POST['o_22'] . ' ');
        if ($_POST['o_22'] == '') {
            $uskonto = ''; 
        }

        $yhdessa_oleminen = mysqli_real_escape_string($conn, $_POST['o_23'] . ' ');
        if ($_POST['o_23'] == '') {
            $yhdessa_oleminen = ''; 
        }

        $muut_tapahtumat = mysqli_real_escape_string($conn, $_POST['o_24'] . ' ');
        if ($_POST['o_24'] == '') {
            $muut_tapahtumat = ''; 
        }

        $aikuiset = mysqli_real_escape_string($conn, $_POST['o_25'] . ' ');
        if ($_POST['o_25'] == '') {
            $aikuiset = ''; 
        }

        $lapset = mysqli_real_escape_string($conn, $_POST['o_26'] . ' ');
        if ($_POST['o_26'] == '') {
            $lapset = ''; 
        }

        $nuoret = mysqli_real_escape_string($conn, $_POST['o_27'] . ' ');
        if ($_POST['o_27'] == '') {
            $nuoret = ''; 
        }

        $seniorit = mysqli_real_escape_string($conn, $_POST['o_28'] . ' ');
        if ($_POST['o_28'] == '') {
            $seniorit = ''; 
        }

        $miehet = mysqli_real_escape_string($conn, $_POST['o_29'] . ' ');
        if ($_POST['o_29'] == '') {
            $miehet = ''; 
        }

        $naiset = mysqli_real_escape_string($conn, $_POST['o_30'] . ' ');
        if ($_POST['o_30'] == '') {
            $naiset = ''; 
        }

        $otsikko = mysqli_real_escape_string($conn, $_POST["otsikko"]);
        $sisalto = mysqli_real_escape_string($conn, $_POST["sisalto"]);

        $urlMuokkaaTaiPoista = mysqli_real_escape_string($conn, $_GET['urlMuokkaaTaiPoista']);

        if (preg_match('/[^a-zA-Z0-9#]/', $urlMuokkaaTaiPoista)) {
            die ('Ilmoitusta ei löydy.');
        }


        $sql="UPDATE ilmoitukset, osastot 
              SET elokuvat='$elokuvat', 
                  improvisointi='$improvisointi', 
                  keskustelu='$keskustelu', 
                  kirjallisuus='$kirjallisuus', 
                  kuvataide='$kuvataide',
                  kasityot='$kasityot',
                  leikkiminen='$leikkiminen',
                  liikunta='$liikunta',
                  luento='$luento',
                  musiikki='$musiikki',
                  nayttelyt='$nayttelyt',
                  oppiminen='$oppiminen',
                  pelaaminen='$pelaaminen',
                  politiikka='$politiikka',
                  runonlausunta='$runonlausunta', 
                  sadunkerronta='$sadunkerronta',
                  tanssi='$tanssi', 
                  tarinankerronta='$tarinankerronta',
                  teatteri='$teatteri', 
                  tyopaja='$tyopaja', 
                  urheilu='$urheilu', 
                  uskonto='$uskonto',
                  yhdessa_oleminen='$yhdessa_oleminen', 
                  muut_tapahtumat='$muut_tapahtumat', 
                  aikuiset='$aikuiset', 
                  lapset='$lapset', 
                  nuoret='$nuoret', 
                  seniorit='$seniorit', 
                  miehet='$miehet', 
                  naiset='$naiset'
                  WHERE ilmoitukset.urlMuokkaaTaiPoista='$urlMuokkaaTaiPoista' 
                  AND ilmoitukset.id=osastot.id
                  AND ilmoitukset.julkaistu='ei'";


        // Tarkistaa, että lomake on oikein täytetty
                 


                 
        /* if ($ylaosasto == 'Tapahtumat' && $osasto == '')  {
               $tyhja_kentta_virhe = 'Tähdellä merkityt kentät tulee täyttää.';
               $osasto_virhe = 'Valitse vähintään yksi osasto tapahtumalle.';
               $ilmoitus_lahtee = 0;
           } 
        */
             
        if($ilmoitus_lahtee == 1) {
            mysqli_query($conn, $sql);

        ?>

            <p class='lomakkeenPalautePositiivinen'><?php echo 'Ilmoitusta on muokattu! <br>';?></p>

        <?php
        }

        mysqli_close($conn);

        if ($tyhja_kentta_virhe == 'Tähdellä merkityt kentät tulee täyttää.') {
            echo '<p class="lomakkeenPalauteNegatiivinen">' . $tyhja_kentta_virhe . '</p>';
        }
    }


    if (isset($_POST["poista_ilmoitus"])) {

        // Muodostaa yhteyden tietokantaan.
        include '../includes/connect_to_database.php';

        $urlMuokkaaIII = mysqli_real_escape_string($conn, $_GET['urlMuokkaaTaiPoista']);

        if (preg_match('/[^a-zA-Z0-9#]/', $urlMuokkaaIII)) {
            die ('Ilmoitusta ei löydy.');
        }

        // Sijoittaa poistettavan ilmoituksen l_e_id:n estetyt_l_e_tapahtumat -tauluun.

         $sql_100 = "INSERT INTO estetyt_l_e_tapahtumat (l_e_id, otsikko)
                     SELECT l_e_id, otsikko
                     FROM ilmoitukset
                     WHERE urlMuokkaaTaiPoista = '$urlMuokkaaIII'";
         mysqli_query($conn, $sql_100);


        // Poista ilmoitus
        $sql = "DELETE ilmoitukset, osastot 
                FROM ilmoitukset 
                INNER JOIN osastot  
                WHERE ilmoitukset.id=osastot.id 
                AND ilmoitukset.urlMuokkaaTaiPoista='$urlMuokkaaIII'
                AND ilmoitukset.julkaistu='ei'";

        ?>

        <p class="lomakkeenPalautePositiivinen"><?php echo "Ilmoitus on poistettu.<br>"; ?></p>

        <?php

        mysqli_query($conn, $sql);

        }

        mysqli_close($conn);


        // Muodostaa yhteyden tietokantaan.
        include '../includes/connect_to_database.php';

        // sql

        $urlMuokkaaII = mysqli_real_escape_string($conn, $_GET['urlMuokkaaTaiPoista']);

        if (preg_match('/[^a-zA-Z0-9#]/', $urlMuokkaaII)) {
            die ('Ilmoitusta ei löydy.');
        }

        $sql = "SELECT * FROM ilmoitukset, osastot 
                WHERE ilmoitukset.urlMuokkaaTaiPoista='$urlMuokkaaII' 
                AND ilmoitukset.id=osastot.id
                AND ilmoitukset.julkaistu='ei'";

        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);

        ?>

        <!-- Lomake -->

        <form action="" method="post" enctype="multipart/form-data">

            <input id="muokkaa_ilmoitusta_nappi" type="submit" value="Muokkaa ilmoitusta">
  
            <div class='kaikki_checkboxit'>        

                <div id='haku_osastot_tapahtumat_2'>

                    <label class='label_otsikko' for='osasto_1'>
                        *Osasto: <span class='lomakkeenPalauteNegatiivinen'><?php echo $osasto_virhe; ?></span>
                    </label>

                    <p class='lisaa_ilmoitus_alaohje'> 
                        Valitse yksi tai useampia.
                    </p>

                    <div class='haku_osastot_checkbox_I_l'>
                        <input type="checkbox" name="o_1" value="Elokuvat" <?php if ($row['elokuvat'] == 'Elokuvat ') { echo 'checked'; } ?>> Elokuvat<br>
                        <input type="checkbox" name="o_2" value="Improvisointi" <?php if ($row['improvisointi'] == 'Improvisointi ') { echo 'checked'; } ?>> Improvisointi<br>
                        <input type="checkbox" name="o_3" value="Keskustelu" <?php if ($row['keskustelu'] == 'Keskustelu ') { echo 'checked'; } ?>> Keskustelu<br>
                        <input type="checkbox" name="o_4" value="Kirjallisuus" <?php if ($row['kirjallisuus'] == 'Kirjallisuus ') { echo 'checked'; } ?>> Kirjallisuus<br>
                        <input type="checkbox" name="o_5" value="Kuvataide" <?php if ($row['kuvataide'] == 'Kuvataide ') { echo 'checked'; } ?>> Kuvataide<br>
                        <input type="checkbox" name="o_6" value="Käsityöt" <?php if ($row['kasityot'] == 'Käsityöt ') { echo 'checked'; } ?>> Käsityöt<br>
                    </div>

                    <div class='haku_osastot_checkbox_II_l'>
                        <input type="checkbox" name="o_7" value="Leikkiminen" <?php if ($row['leikkiminen'] == 'Leikkiminen ') { echo 'checked'; } ?>> Leikkiminen<br>
                        <input type="checkbox" name="o_8" value="Liikunta" <?php if ($row['liikunta'] == 'Liikunta ') { echo 'checked'; } ?>> Liikunta<br>
                        <input type="checkbox" name="o_9" value="Luento" <?php if ($row['luento'] == 'Luento ') { echo 'checked'; } ?>> Luento<br>
                        <input type="checkbox" name="o_10" value="Musiikki" <?php if ($row['musiikki'] == 'Musiikki ') { echo 'checked'; } ?>> Musiikki<br>
                        <input type="checkbox" name="o_11" value="Näyttelyt" <?php if ($row['nayttelyt'] == 'Näyttelyt ') { echo 'checked'; } ?>> Näyttelyt<br>
                        <input type="checkbox" name="o_12" value="Oppiminen" <?php if ($row['oppiminen'] == 'Oppiminen ') { echo 'checked'; } ?>> Oppiminen<br>
                    </div>

                    <div class='haku_osastot_checkbox_III_l'>
                        <input type="checkbox" name="o_13" value="Pelaaminen" <?php if ($row['pelaaminen'] == 'Pelaaminen ') { echo 'checked'; } ?>> Pelaaminen<br>
                        <input type="checkbox" name="o_14" value="Politiikka" <?php if ($row['politiikka'] == 'Politiikka ') { echo 'checked'; } ?>> Politiikka<br>
                        <input type="checkbox" name="o_15" value="Runonlausunta" <?php if ($row['runonlausunta'] == 'Runonlausunta ') { echo 'checked'; } ?>> Runonlausunta<br>
                        <input type="checkbox" name="o_16" value="Sadunkerronta" <?php if ($row['sadunkerronta'] == 'Sadunkerronta ') { echo 'checked'; } ?>> Sadunkerronta<br>
                        <input type="checkbox" name="o_17" value="Tanssi" <?php if ($row['tanssi'] == 'Tanssi ') { echo 'checked'; } ?>> Tanssi<br>
                        <input type="checkbox" name="o_18" value="Tarinankerronta" <?php if ($row['tarinankerronta'] == 'Tarinankerronta ') { echo 'checked'; } ?>> Tarinankerronta<br>
                    </div>

                    <div class='haku_osastot_checkbox_IV_l'>
                        <input type="checkbox" name="o_19" value="Teatteri" <?php if ($row['teatteri'] == 'Teatteri ') { echo 'checked'; } ?>> Teatteri<br>
                        <input type="checkbox" name="o_20" value="Työpaja" <?php if ($row['tyopaja'] == 'Työpaja ') { echo 'checked'; } ?>> Työpaja<br>
                        <input type="checkbox" name="o_21" value="Urheilu" <?php if ($row['urheilu'] == 'Urheilu ') { echo 'checked'; } ?>> Urheilu<br>
                        <input type="checkbox" name="o_22" value="Uskonto" <?php if ($row['uskonto'] == 'Uskonto ') { echo 'checked'; } ?>> Uskonto<br>
                        <input type="checkbox" name="o_23" value="Yhdessä oleminen" <?php if ($row['yhdessa_oleminen'] == 'Yhdessä oleminen ') { echo 'checked'; } ?>> Yhdessä oleminen<br>
                        <input type="checkbox" name="o_24" value="Muut" <?php if ($row['muut_tapahtumat'] == 'Muut ') { echo 'checked'; } ?>> Muut<br>
                    </div>

                    <div class='haku_osastot_checkbox_V_l'>
                        <input type="checkbox" name="o_25" value="Aikuiset" <?php if ($row['aikuiset'] == 'Aikuiset ') { echo 'checked'; } ?>> Aikuiset<br>
                        <input type="checkbox" name="o_26" value="Lapset" <?php if ($row['lapset'] == 'Lapset ') { echo 'checked'; } ?>> Lapset<br>
                        <input type="checkbox" name="o_27" value="Nuoret" <?php if ($row['nuoret'] == 'Nuoret ') { echo 'checked'; } ?>> Nuoret<br>
                        <input type="checkbox" name="o_28" value="Seniorit" <?php if ($row['seniorit'] == 'Seniorit ') { echo 'checked'; } ?>> Seniorit<br>
                        <input type="checkbox" name="o_29" value="Miehet" <?php if ($row['miehet'] == 'Miehet ') { echo 'checked'; } ?>> Miehet<br>
                        <input type="checkbox" name="o_30" value="Naiset" <?php if ($row['naiset'] == 'Naiset ') { echo 'checked'; } ?>> Naiset<br>
                    </div>

                </div>

            </div>    

        <script>tapahtumaKalenterit()</script>


            <label class="label_otsikko" for="otsikko"></p>*Otsikko: <span class='lomakkeenPalauteNegatiivinen'><?php echo $otsikko_virhe; ?></label> 
            <br> 
            <input class="lisaa_ilmoitus_lomake" type="text" name="otsikko" maxlength="100" value="<?php echo htmlspecialchars($row['otsikko'], ENT_QUOTES, 'UTF-8'); ?>"> 


            <label class="label_otsikko" for="sisalto">*Sisältö: <span class='lomakkeenPalauteNegatiivinen'><?php echo $sisalto_virhe; ?></span></label> 
            <br>
            <textarea class="lisaa_ilmoitus_textarea" name="sisalto" rows="7" cols="50"><?php echo htmlspecialchars($row['sisalto'], ENT_QUOTES, 'UTF-8'); ?></textarea>

        </form>

        <br>
        <br>


        <!-- Poistaa ilmoituksen kokonaan -->

        <form action="" method="post" enctype="multipart/form-data">

            <label class="label_otsikko" for="poista_ilmoitus">
                Jos haluat poistaa tapahtuman kokonaan, klikkaa 
                alla olevaa nappia.<br>Tapahtuma menee samalla klikkauksella estolistalle.<br>
            </label>  
            <input id="poista_ilmoitus_nappi_2" type="submit" value="Poista ilmoitus" name="poista_ilmoitus">
      
        </form>

        <br>
        <br>
    
    <?php mysqli_close($conn);  ?>

</div>


</body>
</html>
