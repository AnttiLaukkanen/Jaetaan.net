<!DOCTYPE html>
<html>

<head>

  <script>

    if(window.location.protocol != 'https:') {
      location.href = location.href.replace("http://", "https://");
    }

  </script>

<link rel="stylesheet" type="text/css" href="https://jaetaan.net/muotoilu.css">
<link rel='stylesheet' href='https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css'>
<link rel='stylesheet' href='../includes/kalenteri_muotoilu_II.css'>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<meta name="robots" content="noindex">


<script src='../includes/kalenteri_javascript_I.js'></script>
<script src='../includes/kalenteri_javascript_II.js'></script>


  <script>
  $( function() {
    $( "#datepicker" ).datepicker({ dateFormat: "dd.mm.yy"});
  } );
  </script>

  <script>
  $( function() {
    $( "#datepicker_II" ).datepicker({ dateFormat: "dd.mm.yy"});
  } );
  </script>

  <script>
  $( function() {
    $( "#datepicker_III" ).datepicker({ dateFormat: "dd.mm.yy"});
  } );
  </script>

 
  <script src='../toiminnallisuuksia.js'></script>


</head>

<body>

<?php 

include '../includes/header.php';

?>


<div class="keski_osa">

      <noscript>
          <br>
          <p class = 'noscript_p'>Selaimessasi ei ole JavaScript päällä.</p>
          <br>
          <p>Tämä sivu toimii vain, jos JavaScript on päällä.</p>
          <p>Laita JavaScript päälle ja lataa tämä sivu uudelleen.</p>
      </noscript>

    <div class = 'noscript'>

      <script>
          document.getElementsByClassName('noscript')[0].style.display='block';
      </script>

<h1 class="lisaa_ilmoitus_otsikko">Muokkaa ilmoitustasi tai poista se kokonaan</h1>

<?php

if (isset($_POST["ylaosasto"]) && isset($_POST["otsikko"])) {


$ilmoitus_lahtee = 1;


// Muodostaa yhteyden tietokantaan.

include '../includes/luo_yhteyden_tietokantaan.php';

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

$elektroniikka = mysqli_real_escape_string($conn, $_POST['o_401'] . ' ');
if ($_POST['o_401'] == '') {
    $elektroniikka = ''; 
}

$huonekalut = mysqli_real_escape_string($conn, $_POST['o_402'] . ' ');
if ($_POST['o_402'] == '') {
    $huonekalut = ''; 
}

$kodinkoneet = mysqli_real_escape_string($conn, $_POST['o_403'] . ' ');
if ($_POST['o_403'] == '') {
    $kodinkoneet = ''; 
}

$vaatteet = mysqli_real_escape_string($conn, $_POST['o_404'] . ' ');
if ($_POST['o_404'] == '') {
    $vaatteet = ''; 
}

$muut_annetaan_tavaroita = mysqli_real_escape_string($conn, $_POST['o_405'] . ' ');
if ($_POST['o_405'] == '') {
    $muut_annetaan_tavaroita = ''; 
}

$liikunta_2 = mysqli_real_escape_string($conn, $_POST['o_451'] . ' ');
if ($_POST['o_451'] == '') {
    $liikunta_2 = ''; 
}

$musiikki_2 = mysqli_real_escape_string($conn, $_POST['o_452'] . ' ');
if ($_POST['o_452'] == '') {
    $musiikki_2 = ''; 
}

$nayttelyt_2 = mysqli_real_escape_string($conn, $_POST['o_453'] . ' ');
if ($_POST['o_453'] == '') {
    $nayttelyt_2 = ''; 
}

$paikat = mysqli_real_escape_string($conn, $_POST['o_454'] . ' ');
if ($_POST['o_454'] == '') {
    $paikat = ''; 
}

$tilat = mysqli_real_escape_string($conn, $_POST['o_455'] . ' ');
if ($_POST['o_455'] == '') {
    $tilat = ''; 
}

$urheilu_2 = mysqli_real_escape_string($conn, $_POST['o_456'] . ' ');
if ($_POST['o_456'] == '') {
    $urheilu_2 = ''; 
}

$muut_annetaan_tekemista = mysqli_real_escape_string($conn, $_POST['o_457'] . ' ');
if ($_POST['o_457'] == '') {
    $muut_annetaan_tekemista = ''; 
}

$elektroniikka_2 = mysqli_real_escape_string($conn, $_POST['o_901'] . ' ');
if ($_POST['o_901'] == '') {
    $elektroniikka_2 = ''; 
}

$huonekalut_2 = mysqli_real_escape_string($conn, $_POST['o_902'] . ' ');
if ($_POST['o_902'] == '') {
    $huonekalut_2 = ''; 
}

$kodinkoneet_2 = mysqli_real_escape_string($conn, $_POST['o_903'] . ' ');
if ($_POST['o_903'] == '') {
    $kodinkoneet_2 = ''; 
}

$vaatteet_2 = mysqli_real_escape_string($conn, $_POST['o_904'] . ' ');
if ($_POST['o_904'] == '') {
    $vaatteet_2 = ''; 
}

$muut_pyydetaan_tavaroita = mysqli_real_escape_string($conn, $_POST['o_905'] . ' ');
if ($_POST['o_905'] == '') {
    $muut_pyydetaan_tavaroita = ''; 
}

$liikunta_3 = mysqli_real_escape_string($conn, $_POST['o_951'] . ' ');
if ($_POST['o_951'] == '') {
    $liikunta_3 = ''; 
}

$musiikki_3 = mysqli_real_escape_string($conn, $_POST['o_952'] . ' ');
if ($_POST['o_952'] == '') {
    $musiikki_3 = ''; 
}

$nayttelyt_3 = mysqli_real_escape_string($conn, $_POST['o_953'] . ' ');
if ($_POST['o_953'] == '') {
    $nayttelyt_3 = ''; 
}

$paikat_3 = mysqli_real_escape_string($conn, $_POST['o_954'] . ' ');
if ($_POST['o_954'] == '') {
    $paikat_3 = ''; 
}

$tilat_3 = mysqli_real_escape_string($conn, $_POST['o_955'] . ' ');
if ($_POST['o_955'] == '') {
    $tilat_3 = ''; 
}

$urheilu_3 = mysqli_real_escape_string($conn, $_POST['o_956'] . ' ');
if ($_POST['o_956'] == '') {
    $urheilu_3 = ''; 
}

$muut_pyydetaan_tekemista = mysqli_real_escape_string($conn, $_POST['o_957'] . ' ');
if ($_POST['o_957'] == '') {
    $muut_pyydetaan_tekemista = ''; 
}



$ylaosasto = mysqli_real_escape_string($conn, $_POST['ylaosasto']);
$tapahtumaAlkaa = mysqli_real_escape_string($conn, $_POST["tapahtumaAlkaa"]);
$klo_I = mysqli_real_escape_string($conn, $_POST["klo_I"]);
$tapahtumaPaattyy = mysqli_real_escape_string($conn, $_POST["tapahtumaPaattyy"]);
$klo_II = mysqli_real_escape_string($conn, $_POST["klo_II"]);

$avoinna = mysqli_real_escape_string($conn, $_POST['avoinna']);

$paikka = mysqli_real_escape_string($conn, $_POST['paikka']);
$tapahtumanOsoite = mysqli_real_escape_string($conn, $_POST["tapahtumanOsoite"]);
$otsikko = mysqli_real_escape_string($conn, $_POST["otsikko"]);
$sisalto = mysqli_real_escape_string($conn, $_POST["sisalto"]);
$nimi = mysqli_real_escape_string($conn, $_POST["nimi"]);
$kaupunki = mysqli_real_escape_string($conn, $_POST["kaupunki"]);
$puhelin = mysqli_real_escape_string($conn, $_POST["puhelin"]);
$nettisivu = mysqli_real_escape_string($conn, $_POST["nettisivu"]);
$ilmoitusPoistuuAutomaattisesti = mysqli_real_escape_string($conn, $_POST["ilmoitusPoistuuAutomaattisesti"]);

$suom_muoto_I = date_create_from_format("d.m.Y", $tapahtumaAlkaa);
$tapahtumaAlkaaPvm = date_format($suom_muoto_I,"Y-m-d");

$suom_muoto_II = date_create_from_format("d.m.Y", $tapahtumaPaattyy);
$tapahtumaPaattyyPvm = date_format($suom_muoto_II,"Y-m-d");

$suom_muoto_III = date_create_from_format("d.m.Y", $ilmoitusPoistuuAutomaattisesti);
$ilmoitusPoistuuAutomaattisestiPvm = date_format($suom_muoto_III,"Y-m-d");

$julkaistu = mysqli_real_escape_string($conn, 'ei');


$urlMuokkaaTaiPoista = mysqli_real_escape_string($conn, $_GET['urlMuokkaaTaiPoista']);

if (preg_match('/[^a-zA-Z0-9#]/', $urlMuokkaaTaiPoista)) {
  die ('Ilmoitusta ei löydy.');
}


$sql="UPDATE ilmoitukset, osastot SET ylaosasto='$ylaosasto', tapahtumaAlkaa='$tapahtumaAlkaaPvm', klo_I='$klo_I',
 tapahtumaPaattyy='$tapahtumaPaattyyPvm', klo_II='$klo_II', avoinna='$avoinna', paikka='$paikka', tapahtumanOsoite='$tapahtumanOsoite', 
 otsikko='$otsikko', sisalto='$sisalto', nimi='$nimi', kaupunki='$kaupunki', puhelin='$puhelin', 
 nettisivu='$nettisivu', ilmoitusPoistuuAutomaattisesti='$ilmoitusPoistuuAutomaattisestiPvm', 
 julkaistu='$julkaistu', 
                        elokuvat='$elokuvat', 
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
                        naiset='$naiset',
                        elektroniikka='$elektroniikka',
                        huonekalut='$huonekalut',
                        kodinkoneet='$kodinkoneet',
                        vaatteet='$vaatteet',
                        muut_annetaan_tavaroita='$muut_annetaan_tavaroita',
                        liikunta_2='$liikunta_2',
                        musiikki_2='$musiikki_2',
                        nayttelyt_2='$nayttelyt_2',
                        paikat='$paikat',
                        tilat='$tilat',
                        urheilu_2='$urheilu_2',
                        muut_annetaan_tekemista='$muut_annetaan_tekemista',
                        elektroniikka_2='$elektroniikka_2',
                        huonekalut_2='$huonekalut_2',
                        kodinkoneet_2='$kodinkoneet_2',
                        vaatteet_2='$vaatteet_2',
                        muut_pyydetaan_tavaroita='$muut_pyydetaan_tavaroita',
                        liikunta_3='$liikunta_3',
                        musiikki_3='$musiikki_3',
                        nayttelyt_3='$nayttelyt_3',
                        paikat_3='$paikat_3',
                        tilat_3='$tilat_3',
                        urheilu_3='$urheilu_3',
                        muut_pyydetaan_tekemista='$muut_pyydetaan_tekemista' 
                        WHERE ilmoitukset.urlMuokkaaTaiPoista='$urlMuokkaaTaiPoista' 
                        AND ilmoitukset.id=osastot.id";



                 // Tarkistaa, että lomake on oikein täytetty

                 if (empty($ylaosasto)) {
                     $tyhja_kentta_virhe = 'Tähdellä merkityt kentät tulee täyttää.';
                     $ylaosasto_virhe = 'Täytä tämä kenttä.';
                     $ilmoitus_lahtee = 0;
                 }


                 if (empty($otsikko)) {
                     $tyhja_kentta_virhe = 'Tähdellä merkityt kentät tulee täyttää.';
                     $otsikko_virhe = 'Täytä tämä kenttä.';
                     $ilmoitus_lahtee = 0;
                 }

                 if (empty($sisalto)) {
                     $tyhja_kentta_virhe = 'Tähdellä merkityt kentät tulee täyttää.';
                     $sisalto_virhe = 'Täytä tämä kenttä.';
                     $ilmoitus_lahtee = 0;
                 }

                 if (empty($nimi)) {
                     $tyhja_kentta_virhe = 'Tähdellä merkityt kentät tulee täyttää.';
                     $nimi_virhe = 'Täytä tämä kenttä.';
                     $ilmoitus_lahtee = 0;
                 }

                  if (empty($kaupunki)) {
                      $tyhja_kentta_virhe = 'Tähdellä merkityt kentät tulee täyttää.';
                      $kaupunki_virhe = 'Täytä tämä kenttä.';
                      $ilmoitus_lahtee = 0;
                  }

                  if (empty($ilmoitusPoistuuAutomaattisesti)) {
                      $tyhja_kentta_virhe = 'Tähdellä merkityt kentät tulee täyttää.';
                      $ilmoitusPoistuuAutomaattisesti_virhe = 'Täytä tämä kenttä.';
                      $ilmoitus_lahtee = 0;
                  }

                  if ($ylaosasto == 'Annetaan tavaroita' && $elektroniikka == ''
                  && $ylaosasto == 'Annetaan tavaroita' && $huonekalut == '' 
                  && $ylaosasto == 'Annetaan tavaroita' && $kodinkoneet == ''
                  && $ylaosasto == 'Annetaan tavaroita' && $vaatteet == '' 
                  && $ylaosasto == 'Annetaan tavaroita' && $muut_annetaan_tavaroita == '') {
                          $tyhja_kentta_virhe = 'Tähdellä merkityt kentät tulee täyttää.';
                          $osasto_virhe = 'Valitse vähintään yksi osasto.';
                          $ilmoitus_lahtee = 0;  
                  }

                  if ($ylaosasto == 'Annetaan tekemistä' && $liikunta_2 == ''
                  && $ylaosasto == 'Annetaan tekemistä' && $musiikki_2 == '' 
                  && $ylaosasto == 'Annetaan tekemistä' && $nayttelyt_2 == ''
                  && $ylaosasto == 'Annetaan tekemistä' && $paikat == ''
                  && $ylaosasto == 'Annetaan tekemistä' && $tilat == ''
                  && $ylaosasto == 'Annetaan tekemistä' && $urheilu_2 == '' 
                  && $ylaosasto == 'Annetaan tekemistä' && $muut_annetaan_tekemista == '') {
                          $tyhja_kentta_virhe = 'Tähdellä merkityt kentät tulee täyttää.';
                          $osasto_virhe = 'Valitse vähintään yksi osasto.';
                          $ilmoitus_lahtee = 0;  
                  }

                  if ($ylaosasto == 'Pyydetään tavaroita' && $elektroniikka_2 == ''
                  && $ylaosasto == 'Pyydetään tavaroita' && $huonekalut_2 == '' 
                  && $ylaosasto == 'Pyydetään tavaroita' && $kodinkoneet_2 == ''
                  && $ylaosasto == 'Pyydetään tavaroita' && $vaatteet_2 == '' 
                  && $ylaosasto == 'Pyydetään tavaroita' && $muut_pyydetaan_tavaroita == '') {
                          $tyhja_kentta_virhe = 'Tähdellä merkityt kentät tulee täyttää.';
                          $osasto_virhe = 'Valitse vähintään yksi osasto.';
                          $ilmoitus_lahtee = 0;  
                  }

                  if ($ylaosasto == 'Pyydetään tekemistä' && $liikunta_3 == ''
                  && $ylaosasto == 'Pyydetään tekemistä' && $musiikki_3 == ''
                  && $ylaosasto == 'Pyydetään tekemistä' && $nayttelyt_3 == ''
                  && $ylaosasto == 'Pyydetään tekemistä' && $paikat_3 == ''
                  && $ylaosasto == 'Pyydetään tekemistä' && $tilat_3 == ''
                  && $ylaosasto == 'Pyydetään tekemistä' && $urheilu_3 == '' 
                  && $ylaosasto == 'Pyydetään tekemistä' && $muut_pyydetaan_tekemista == '') {
                          $tyhja_kentta_virhe = 'Tähdellä merkityt kentät tulee täyttää.';
                          $osasto_virhe = 'Valitse vähintään yksi osasto.';
                          $ilmoitus_lahtee = 0;  
                  }


                  /* if ($ylaosasto == 'Tapahtumat' && $osasto == '')  {
                      $tyhja_kentta_virhe = 'Tähdellä merkityt kentät tulee täyttää.';
                      $osasto_virhe = 'Valitse vähintään yksi osasto.';
                      $ilmoitus_lahtee = 0;
                  } */ 

                      if ($ylaosasto == 'Tapahtumat' && $elokuvat == ''
                      && $ylaosasto == 'Tapahtumat' && $improvisointi == '' 
                      && $ylaosasto == 'Tapahtumat' && $keskustelu == ''
                      && $ylaosasto == 'Tapahtumat' && $kirjallisuus == '' 
                      && $ylaosasto == 'Tapahtumat' && $kuvataide == ''
                      && $ylaosasto == 'Tapahtumat' && $kasityot == ''
                      && $ylaosasto == 'Tapahtumat' && $leikkiminen == ''
                      && $ylaosasto == 'Tapahtumat' && $liikunta == ''
                      && $ylaosasto == 'Tapahtumat' && $luento == ''
                      && $ylaosasto == 'Tapahtumat' && $musiikki == ''
                      && $ylaosasto == 'Tapahtumat' && $nayttelyt == ''
                      && $ylaosasto == 'Tapahtumat' && $oppiminen == ''
                      && $ylaosasto == 'Tapahtumat' && $pelaaminen == ''
                      && $ylaosasto == 'Tapahtumat' && $politiikka == ''
                      && $ylaosasto == 'Tapahtumat' && $runonlausunta == ''
                      && $ylaosasto == 'Tapahtumat' && $sadunkerronta == ''
                      && $ylaosasto == 'Tapahtumat' && $tanssi == ''
                      && $ylaosasto == 'Tapahtumat' && $tarinankerronta == ''
                      && $ylaosasto == 'Tapahtumat' && $teatteri == ''
                      && $ylaosasto == 'Tapahtumat' && $tyopaja == '' 
                      && $ylaosasto == 'Tapahtumat' && $urheilu == ''
                      && $ylaosasto == 'Tapahtumat' && $uskonto == ''
                      && $ylaosasto == 'Tapahtumat' && $yhdessa_oleminen == '' 
                      && $ylaosasto == 'Tapahtumat' && $muut_tapahtumat == '' 
                      && $ylaosasto == 'Tapahtumat' && $aikuiset == ''
                      && $ylaosasto == 'Tapahtumat' && $lapset == ''
                      && $ylaosasto == 'Tapahtumat' && $nuoret == '' 
                      && $ylaosasto == 'Tapahtumat' && $seniorit == '' 
                      && $ylaosasto == 'Tapahtumat' && $miehet == '' 
                      && $ylaosasto == 'Tapahtumat' && $naiset == '') {
                          $tyhja_kentta_virhe = 'Tähdellä merkityt kentät tulee täyttää.';
                          $osasto_virhe = 'Valitse vähintään yksi osasto.';
                          $ilmoitus_lahtee = 0;  
                      }

                  if ($ylaosasto == 'Tapahtumat' && $tapahtumaAlkaaPvm == '') {
                      $tyhja_kentta_virhe = 'Tähdellä merkityt kentät tulee täyttää.';
                      $tapahtumaAlkaa_virhe = 'Täytä tämä kenttä.';
                      $ilmoitus_lahtee = 0;
                  }

                  if ($ylaosasto == 'Tapahtumat' && $klo_I == '') {
                      $tyhja_kentta_virhe = 'Tähdellä merkityt kentät tulee täyttää.';
                      $klo_I_virhe = 'Täytä tämä kenttä.';
                      $ilmoitus_lahtee = 0;
                  }

                  if ($ylaosasto == 'Tapahtumat' && $paikka == '') {
                      $tyhja_kentta_virhe = 'Tähdellä merkityt kentät tulee täyttää.';
                      $paikka_virhe = 'Täytä tämä kenttä.';
                      $ilmoitus_lahtee = 0;
                  }

                  if ($ylaosasto == 'Tapahtumat' && $tapahtumanOsoite == '') {
                      $tyhja_kentta_virhe = 'Tähdellä merkityt kentät tulee täyttää.';
                      $tapahtumanOsoite_virhe = 'Täytä tämä kenttä.';
                      $ilmoitus_lahtee = 0;
                  }

// Merkkimäärän tarkistus.

if (strlen($tapahtumaAlkaa) > 10) {
    $merkki_maara_virhe = 'Kentässä on liikaa merkkejä.';
    $tapahtumaAlkaa_virhe = 'Korkeintaan 10 merkkiä tähän kenttään.';
    $ilmoitus_lahtee = 0;
}

if (strlen($klo_I) > 5) {
    $merkki_maara_virhe = 'Kentässä on liikaa merkkejä.';
    $klo_I_virhe = 'Korkeintaan 5 merkkiä tähän kenttään.';
    $ilmoitus_lahtee = 0;
}

if (strlen($tapahtumaPaattyy) > 10) {
    $merkki_maara_virhe = 'Kentässä on liikaa merkkejä.';
    $tapahtumaPaattyy_virhe = 'Korkeintaan 10 merkkiä tähän kenttään.';
    $ilmoitus_lahtee = 0;
}

if (strlen($klo_II) > 5) {
    $merkki_maara_virhe = 'Kentässä on liikaa merkkejä.';
    $klo_II_virhe = 'Korkeintaan 5 merkkiä tähän kenttään.';
    $ilmoitus_lahtee = 0;
}

if (strlen($avoinna) > 1000) {
    $merkki_maara_virhe = 'Kentässä on liikaa merkkejä.';
    $avoinna_virhe = 'Korkeintaan 1 000 merkkiä tähän kenttään.';
    $ilmoitus_lahtee = 0;
}

if (strlen($paikka) > 255) {
    $merkki_maara_virhe = 'Kentässä on liikaa merkkejä.';
    $paikka_virhe = 'Korkeintaan 255 merkkiä tähän kenttään.';
    $ilmoitus_lahtee = 0;
}

if (strlen($tapahtumanOsoite) > 255) {
    $merkki_maara_virhe = 'Kentässä on liikaa merkkejä.';
    $tapahtumanOsoite_virhe = 'Korkeintaan 255 merkkiä tähän kenttään.';
    $ilmoitus_lahtee = 0;
}

if (strlen($otsikko) > 255) {
    $merkki_maara_virhe = 'Kentässä on liikaa merkkejä.';
    $otsikko_virhe = 'Korkeintaan 255 merkkiä tähän kenttään.';
    $ilmoitus_lahtee = 0;
}

if (strlen($sisalto) > 10000) {
    $merkki_maara_virhe = 'Kentässä on liikaa merkkejä.';
    $sisalto_virhe = 'Korkeintaan 10 000 merkkiä tähän kenttään.';
    $ilmoitus_lahtee = 0;
}

if (strlen($nimi) > 255) {
    $merkki_maara_virhe = 'Kentässä on liikaa merkkejä.';
    $nimi_virhe = 'Korkeintaan 255 merkkiä tähän kenttään.';
    $ilmoitus_lahtee = 0;
}

if (strlen($jakaja) > 255) {
    $merkki_maara_virhe = 'Kentässä on liikaa merkkejä.';
    $jakaja_virhe = 'Korkeintaan 255 merkkiä tähän kenttään.';
    $ilmoitus_lahtee = 0;
}


if (strlen($sahkoposti_virhe) > 255) {
    $merkki_maara_virhe = 'Kentässä on liikaa merkkejä.';
    $sahkoposti_virhe = 'Korkeintaan 255 merkkiä tähän kenttään.';
    $ilmoitus_lahtee = 0;
}

if (strlen($puhelin) > 75) {
    $merkki_maara_virhe = 'Kentässä on liikaa merkkejä.';
    $puhelin_virhe = 'Korkeintaan 75 merkkiä tähän kenttään.';
    $ilmoitus_lahtee = 0;
}

if (strlen($nettisivu) > 255) {
    $merkki_maara_virhe = 'Kentässä on liikaa merkkejä.';
    $nettisivu_virhe = 'Korkeintaan 255 merkkiä tähän kenttään.';
    $ilmoitus_lahtee = 0;
}

                  // Muut oikean muodon tarkastukset.

                  if (!empty($sahkoposti) && !filter_var($sahkoposti, FILTER_VALIDATE_EMAIL)) {
                      $sahkoposti_virhe_ylos = 'Sähköposti on virheellisessä muodossa.';
                      $sahkoposti_virhe = '@-merkin ja pisteen (.) tulee olla mukana pääteosassa.'; 
                      $ilmoitus_lahtee = 0;
                  }

                  if (!empty($puhelin) && preg_match("/[^0-9+() ]/", $puhelin)) {
                      $puhelin_virhe_ylos = 'Puhelinnumero on virheellisessä muodossa.';
                      $puhelin_virhe = 'Vain numerot, kaarisulut, välilyönnnit ja plus-merkki ovat sallittuja.';
                      $ilmoitus_lahtee = 0;
                  }

                  if (!empty($nettisivu) && !preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$nettisivu)) { 
                      $nettisivu_virhe_ylos = 'Nettisivu on virheellisessä muodossa.';
                      $nettisivu_virhe = 'Kirjoita nettiosoiteen alkuun vähintään http:// tai www.';
                      $ilmoitus_lahtee = 0;
                  }

                  // ...date and time limitations
                  $min_ilmoitus_poistuu = date('Y-m-d');
                  $max_ilmoitus_poistuu = date('Y-m-d', strtotime('+1 year'));

                  if ($ylaosasto != 'Tapahtumat'
                  && $ilmoitusPoistuuAutomaattisestiPvm != '' 
                  && ($ilmoitusPoistuuAutomaattisestiPvm < $min_ilmoitus_poistuu 
                  || $ilmoitusPoistuuAutomaattisestiPvm > $max_ilmoitus_poistuu)) {
                  $paivamaara_virhe = 'Päivämäärässä on virhe.';
                  $ilmoitusPoistuuAutomaattisesti_virhe = 'Päivän tulee olla aikaisintaan
                                           tänään ja korkeintaan yksi vuosi 
                                           tästä päivästä lukien.';
                  $ilmoitus_lahtee = 0;
                  }

                  if ($ylaosasto == 'Tapahtumat' && $tapahtumaAlkaaPvm != ''  && 
                  $tapahtumaAlkaaPvm < $min_ilmoitus_poistuu ||
                  $tapahtumaAlkaaPvm > $max_ilmoitus_poistuu) {
                      $paivamaara_virhe = 'Päivämäärässä on virhe.';
                      $tapahtumaAlkaa_virhe = 'Päivän tulee olla aikaisintaan
                      tänään ja korkeintaan yksi vuosi tästä päivästä lukien.';
                      $ilmoitus_lahtee = 0;
                  }



                  if ($ylaosasto ==  'Tapahtumat' && $tapahtumaPaattyyPvm != '' 
                  && $tapahtumaPaattyyPvm > '00.00.0000'
                  && $tapahtumaPaattyyPvm < $min_ilmoitus_poistuu 
                  || $tapahtumaPaattyyPvm > $max_ilmoitus_poistuu) {
                      $paivamaara_virhe = 'Päivämäärässä on virhe.';
                      $tapahtumaPaattyy_virhe = 'Päivän tulee olla aikaisintaan
                      tänään ja korkeintaan yksi vuosi tästä päivästä lukien.';
                      $ilmoitus_lahtee = 0;
                  }

                  if ($ylaosasto ==  'Tapahtumat' && $tapahtumaPaattyyPvm != '' 
                  && $tapahtumaPaattyyPvm > '00.00.0000'
                  && $tapahtumaPaattyyPvm < $tapahtumaAlkaaPvm)  {
                      $paivamaara_virhe = 'Päivämäärässä on virhe.';
                      $tapahtumaPaattyy_virhe = 'Tapahtuman päättymisajankohdan tulee olla myöhemmin kuin 
                                       sen alkamisajankohta.';
                      $ilmoitus_lahtee = 0;
                  }

                  if ($ylaosasto == 'Tapahtumat' && $tapahtumaPaattyyPvm == $tapahtumaAlkaaPvm
                  && $klo_II <= $klo_I)  {
                      $klo_virhe = 'Kellonajassa on virhe.';
                      $klo_II_virhe = 'Tapahtuman päättymisajankohdan tulee olla myöhemmin kuin 
                                       sen alkamisajankohta.';
                      $ilmoitus_lahtee = 0;
                  }

                  if ($ylaosasto ==  'Tapahtumat' && $tapahtumaPaattyyPvm != '' 
                  && $klo_II == '')  {
                      $klo_virhe = 'Kellonajassa on virhe.';
                      $klo_II_virhe = 'Jos lisäät päättymispäivän, lisää myös päättymiskellonaika.';
                      $ilmoitus_lahtee = 0;
                 }

                  if ($ylaosasto ==  'Tapahtumat' && $klo_II != ''  
                  && $tapahtumaPaattyyPvm == '')  {
                     $paivamaara_virhe = 'Päivämäärässä on virhe.';
                     $tapahtumaPaattyy_virhe = 'Jos lisäät päättymiskellonajan, lisää myös päättymispäivä.'; 
                     $ilmoitus_lahtee = 0;
                 }

$d=strtotime($tapahtumaAlkaaPvm . "+15 days");
$dd = date("Y-m-d", $d);

if ($ylaosasto == 'Tapahtumat'
&& $tapahtumaAlkaaPvm != ''  
&& $ilmoitusPoistuuAutomaattisestiPvm != ''
&& ($ilmoitusPoistuuAutomaattisestiPvm < $min_ilmoitus_poistuu
|| $ilmoitusPoistuuAutomaattisestiPvm > $dd)) {
  $paivamaara_virhe = 'Päivämäärässä on virhe.';
  $ilmoitusPoistuuAutomaattisesti_virhe = 'Päivän tulee olla aikaisintaan tänään 
                                           ja korkeintaan 15 päivää tapahtuman 
                                           alkamispäivästä.';
  $ilmoitus_lahtee = 0;
}

if($ilmoitus_lahtee == 1) {
mysqli_query($conn, $sql);


?>
<p class='lomakkeenPalautePositiivinen'><?php echo 'Ilmoitustasi on muokattu! <br>';?></p>

<?php

include '../includes/email_to_user_2.php';
include '../includes/email_to_admin_2.php';

}


mysqli_close($conn);


if ($tyhja_kentta_virhe == 'Tähdellä merkityt kentät tulee täyttää.') {
echo '<p class="lomakkeenPalauteNegatiivinen">' . $tyhja_kentta_virhe . '</p>';
}

if ($puhelin_virhe_ylos == 'Puhelinnumero on virheellisessä muodossa.') {
echo '<p class="lomakkeenPalauteNegatiivinen">' . $puhelin_virhe_ylos . '</p>';
}

if ($nettisivu_virhe_ylos == 'Nettisivu on virheellisessä muodossa.') {
echo '<p class="lomakkeenPalauteNegatiivinen">' . $nettisivu_virhe_ylos . '</p>'; 
}

if ($paivamaara_virhe == 'Päivämäärässä on virhe.') {
    echo '<p class="lomakkeenPalauteNegatiivinen">' . $paivamaara_virhe . '</p>';
}


if ($klo_virhe == 'Kellonajassa on virhe.') {
    echo '<p class="lomakkeenPalauteNegatiivinen">' . $klo_virhe . '</p>';
}

if ($merkki_maara_virhe == 'Kentässä on liikaa merkkejä.') {
    echo '<p class="lomakkeenPalauteNegatiivinen">' . $merkki_maara_virhe . '</p>';
}


}



if (isset($_POST["poista_ilmoitus"])) {

// Muodostaa yhteyden tietokantaan.
include '../includes/luo_yhteyden_tietokantaan.php';

$urlMuokkaaIII = mysqli_real_escape_string($conn, $_GET['urlMuokkaaTaiPoista']);

if (preg_match('/[^a-zA-Z0-9#]/', $urlMuokkaaIII)) {
  die ('Ilmoitusta ei löydy.');
}

$sql = "SELECT * FROM ilmoitukset WHERE urlMuokkaaTaiPoista='$urlMuokkaaIII'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$kuva1 = '../kuvat/pienet_kuvat/';
$kuva1_1 = $row['kuva1'];
$kuva1_2 = $kuva1 . $kuva1_1;

if ($kuva1_1 != 'oletuskuva_1234.jpg') {

unlink($kuva1_2);

}

$kuva2 = '../kuvat/pienet_kuvat/';
$kuva2_1 = $row['kuva2'];
$kuva2_2 = $kuva2 . $kuva2_1;

if ($kuva2_1 != 'oletuskuva_1234.jpg') {

unlink($kuva2_2);

}

$kuva3 = '../kuvat/pienet_kuvat/';
$kuva3_1 = $row['kuva3'];
$kuva3_2 = $kuva3 . $kuva3_1;

if ($kuva3_1 != 'oletuskuva_1234.jpg') {

unlink($kuva3_2);

}

$kuva4 = '../kuvat/pienet_kuvat/';
$kuva4_1 = $row['kuva4'];
$kuva4_2 = $kuva4 . $kuva4_1;

if ($kuva4_1 != 'oletuskuva_1234.jpg') {

unlink($kuva4_2);

}


$kuva1 = '../kuvat/rajatut_kuvat/';
$kuva1_1 = $row['pieni_kuva_1'];
$kuva1_2 = $kuva1 . $kuva1_1;

if ($kuva1_1 != 'oletuskuva_1234.jpg') {

unlink($kuva1_2);

}

$kuva1 = '../kuvat/rajatut_kuvat/';
$kuva1_1 = $row['pieni_kuva_2'];
$kuva1_2 = $kuva1 . $kuva1_1;

if ($kuva1_1 != 'oletuskuva_1234.jpg') {

unlink($kuva1_2);

}

$kuva1 = '../kuvat/rajatut_kuvat/';
$kuva1_1 = $row['pieni_kuva_3'];
$kuva1_2 = $kuva1 . $kuva1_1;

if ($kuva1_1 != 'oletuskuva_1234.jpg') {

unlink($kuva1_2);

}

$kuva1 = '../kuvat/rajatut_kuvat/';
$kuva1_1 = $row['pieni_kuva_4'];
$kuva1_2 = $kuva1 . $kuva1_1;

if ($kuva1_1 != 'oletuskuva_1234.jpg') {

unlink($kuva1_2);

}

// Poista ilmoitus
$sql = "DELETE ilmoitukset, osastot FROM ilmoitukset INNER JOIN osastot  
WHERE ilmoitukset.id=osastot.id AND ilmoitukset.urlMuokkaaTaiPoista='$urlMuokkaaIII'";

?>

<p class="lomakkeenPalautePositiivinen"><?php echo "Ilmoituksesi on poistettu.<br>"; ?></p>

<?php

mysqli_query($conn, $sql);

}

mysqli_close($conn);


// Muodostaa yhteyden tietokantaan.
include '../includes/luo_yhteyden_tietokantaan.php';


$urlMuokkaaII = mysqli_real_escape_string($conn, $_GET['urlMuokkaaTaiPoista']);

if (preg_match('/[^a-zA-Z0-9#]/', $urlMuokkaaII)) {
  die ('Ilmoitusta ei löydy.');
}

$sql = "SELECT * FROM ilmoitukset, osastot 
WHERE ilmoitukset.urlMuokkaaTaiPoista='$urlMuokkaaII' 
AND ilmoitukset.id=osastot.id";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);



  function date_FIN($date) {
    $dx = explode("-", $date);
    $date = $dx[2] . "." . $dx[1] . "." . $dx[0];
    return $date;
  }

?>


<form action="" method="post" enctype="multipart/form-data">
  
 <label class='label_otsikko' for='ylaosasto'>
                *Ylaosasto: <span class='lomakkeenPalauteNegatiivinen'><?php echo $ylaosasto_virhe; ?></span>
            </label>
            <br>
            
            <select id='lisaa_ilmoitus_valikko' class='lomake lisaa_ilmoitus_valikko' name='ylaosasto' onclick='tapahtumaKalenterit()'>

                <optgroup label='Annetaan'>
                    <option value='Annetaan apua' <?php if($row['ylaosasto'] == 'Annetaan apua'){echo "selected";}?>>Annetaan apua</option>
                    <option value='Annetaan lainaan' <?php if($row['ylaosasto'] == 'Annetaan lainaan'){echo "selected";}?>>Annetaan lainaan</option>
                    <option value='Annetaan ruokaa' <?php if($row['ylaosasto'] == 'Annetaan ruokaa'){echo "selected";}?>>Annetaan ruokaa</option>
                    <option value='Annetaan tavaroita' <?php if($row['ylaosasto'] == 'Annetaan tavaroita'){echo "selected";}?>>Annetaan tavaroita</option>
                    <option value='Annetaan tekemistä' <?php if($row['ylaosasto'] == 'Annetaan tekemistä'){echo "selected";}?>>Annetaan tekemistä</option>
                    <option value='Muut annetaan' <?php if($row['ylaosasto'] == 'Annetaan muut'){echo "selected";}?>>Muut annetaan</option>    
                </optgroup>

                <optgroup label='Pyydetään'>
                    <option value='Pyydetään apua' <?php if($row['ylaosasto'] == 'Pyydetään apua'){echo "selected";}?>>Pyydetään apua</option>
                    <option value='Pyydetään lainaan' <?php if($row['ylaosasto'] == 'Pyydetään lainaan'){echo "selected";}?>>Pyydetään lainaan</option>
                    <option value='Pyydetään ruokaa' <?php if($row['ylaosasto'] == 'Pyydetään ruokaa'){echo "selected";}?>>Pyydetään ruokaa</option>
                    <option value='Pyydetään tavaroita' <?php if($row['ylaosasto'] == 'Pyydetään tavaroita'){echo "selected";}?>>Pyydetään tavaroita</option>
                    <option value='Pyydetään tekemistä' <?php if($row['ylaosasto'] == 'Pyydetään tekemistä'){echo "selected";}?>>Pyydetään tekemistä</option>                    
                    <option value='Pyydetään muut' <?php if($row['ylaosasto'] == 'Pyydetään muut'){echo "selected";}?>>Muut pyydetään</option>
                </optgroup>

                <optgroup label='Tapahtumat'>
                    <option value='Tapahtumat' <?php if($row['ylaosasto'] == 'Tapahtumat'){echo "selected";}?>>Tapahtumat</option>
                </optgroup>
            
            </select>

       <div class='kaikki_checkboxit'>        

         <div id='haku_osastot_tapahtumat'>

                 <label class='label_otsikko' for='osasto_1'>
                    *Osasto: <span class='lomakkeenPalauteNegatiivinen'><?php echo $osasto_virhe; ?></span>
                </label>

                <p class='lisaa_ilmoitus_alaohje'> 
                    Valitse yksi tai useampia.
                </p>

          <div class='kolmen_rivi_checkboxit_1_l'>  

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

          </div>

          <div class='kolmen_rivi_checkboxit_2_l'>  

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
                <input type="checkbox" name="o_23" value="Yhdessäolo" <?php if ($row['yhdessa_oleminen'] == 'Yhdessäolo ') { echo 'checked'; } ?>> Yhdessäolo<br>
                <input type="checkbox" name="o_24" value="Muut" <?php if ($row['muut_tapahtumat'] == 'Muut ') { echo 'checked'; } ?>> Muut<br>
            </div>

          </div>

          <div class='kolmen_rivi_checkboxit_3_l'>  

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

            <div id='haku_osastot_annetaan_apua'>

                <div class='haku_osastot_checkbox_VI_l'>

                </div>

            </div>

            <div id='haku_osastot_annetaan_lainaan'>

                <div class='haku_osastot_checkbox_VII_l'>

                </div>

            </div>

            <div id='haku_osastot_annetaan_ruokaa'>

                <div class='haku_osastot_checkbox_VIII_l'>

                </div>

            </div>

            <div id='haku_osastot_annetaan_tavaroita'>

                <label class='label_otsikko' for='osasto_1'>
                    *Osasto: <span class='lomakkeenPalauteNegatiivinen'><?php echo $osasto_virhe; ?></span>
                </label>

                <p class='lisaa_ilmoitus_alaohje'> 
                    Valitse yksi tai useampia.
                </p>

                <div class='haku_osastot_checkbox_IX_l'>
                    <input type="checkbox" name="o_401" value="Elektroniikka" <?php if ($row['elektroniikka'] == 'Elektroniikka ') { echo 'checked'; } ?>> Elektroniikka<br>
                    <input type="checkbox" name="o_402" value="Huonekalut" <?php if ($row['huonekalut'] == 'Huonekalut ') { echo 'checked'; } ?>> Huonekalut<br>
                    <input type="checkbox" name="o_403" value="Kodinkoneet" <?php if ($row['kodinkoneet'] == 'Kodinkoneet ') { echo 'checked'; } ?>> Kodinkoneet<br>
                    <input type="checkbox" name="o_404" value="Vaatteet" <?php if ($row['vaatteet'] == 'Vaatteet ') { echo 'checked'; } ?>> Vaatteet<br>
                    <input type="checkbox" name="o_405" value="Muut" <?php if ($row['muut_annetaan_tavaroita'] == 'Muut ') { echo 'checked'; } ?>> Muut<br>
                </div>

            </div>


            <div id='haku_osastot_annetaan_tekemista'>

                <label class='label_otsikko' for='osasto_1'>
                    *Osasto: <span class='lomakkeenPalauteNegatiivinen'><?php echo $osasto_virhe; ?></span>
                </label>

                <p class='lisaa_ilmoitus_alaohje'> 
                    Valitse yksi tai useampia.
                </p>

                <div class='haku_osastot_checkbox_IX_II_l'>
                    <input type="checkbox" name="o_451" value="Liikunta" <?php if ($row['liikunta_2'] == 'Liikunta ') { echo 'checked'; } ?>> Liikunta<br>
                    <input type="checkbox" name="o_452" value="Musiikki" <?php if ($row['musiikki_2'] == 'Musiikki ') { echo 'checked'; } ?>> Musiikki<br>
                    <input type="checkbox" name="o_453" value="Näyttelyt" <?php if ($row['nayttelyt_2'] == 'Näyttelyt ') { echo 'checked'; } ?>> Näyttelyt<br>
                    <input type="checkbox" name="o_454" value="Paikat" <?php if ($row['paikat'] == 'Paikat ') { echo 'checked'; } ?>> Paikat<br>
                    <input type="checkbox" name="o_455" value="Tilat" <?php if ($row['tilat'] == 'Tilat ') { echo 'checked'; } ?>> Tilat<br>
                    <input type="checkbox" name="o_456" value="Urheilu" <?php if ($row['urheilu_2'] == 'Urheilu ') { echo 'checked'; } ?>> Urheilu<br>
                </div>
                
                <div class='haku_osastot_checkbox_IX_III_l'>
                    <input type="checkbox" name="o_457" value="Muut" <?php if ($row['muut_annetaan_tekemista'] == 'Muut ') { echo 'checked'; } ?>> Muut<br>
                </div>

            </div>

            <div id='haku_osastot_muut_annetaan'>

                <div class='haku_osastot_checkbox_X_l'>

                </div>

            </div>

            <div id='haku_osastot_pyydetaan_apua'>

                <div class='haku_osastot_checkbox_XI_l'>

                </div>

            </div>

            <div id='haku_osastot_pyydetaan_lainaan'>

                <div class='haku_osastot_checkbox_XII_l'>

                </div>

            </div>

            <div id='haku_osastot_pyydetaan_ruokaa'>

                <div class='haku_osastot_checkbox_XIII_l'>

                </div>

            </div>

            <div id='haku_osastot_pyydetaan_tavaroita'>

                <label class='label_otsikko' for='osasto_1'>
                    *Osasto: <span class='lomakkeenPalauteNegatiivinen'><?php echo $osasto_virhe; ?></span>
                </label>

                <p class='lisaa_ilmoitus_alaohje'> 
                    Valitse yksi tai useampia.
                </p>

                <div class='haku_osastot_checkbox_XIV_l'>

                    <input type="checkbox" name="o_901" value="Elektroniikka" <?php if ($row['elektroniikka_2'] == 'Elektroniikka ') { echo 'checked'; } ?>> Elektroniikka<br>
                    <input type="checkbox" name="o_902" value="Huonekalut" <?php if ($row['huonekalut_2'] == 'Huonekalut ') { echo 'checked'; } ?>> Huonekalut<br>
                    <input type="checkbox" name="o_903" value="Kodinkoneet" <?php if ($row['kodinkoneet_2'] == 'Kodinkoneet ') { echo 'checked'; } ?>> Kodinkoneet<br>
                    <input type="checkbox" name="o_904" value="Vaatteet" <?php if ($row['vaatteet_2'] == 'Vaatteet ') { echo 'checked'; } ?>> Vaatteet<br>
                    <input type="checkbox" name="o_905" value="Muut" <?php if ($row['muut_pyydetaan_tavaroita'] == 'Muut ') { echo 'checked'; } ?>> Muut<br>        
                </div>

            </div>

            <div id='haku_osastot_pyydetaan_tekemista'>

                <label class='label_otsikko' for='osasto_1'>
                    *Osasto: <span class='lomakkeenPalauteNegatiivinen'><?php echo $osasto_virhe; ?></span>
                </label>

                <p class='lisaa_ilmoitus_alaohje'> 
                    Valitse yksi tai useampia.
                </p>

                <div class='haku_osastot_checkbox_XIV_II_l'>
                    <input type="checkbox" name="o_951" value="Liikunta" <?php if ($row['liikunta_3'] == 'Liikunta ') { echo 'checked'; } ?>> Liikunta<br>
                    <input type="checkbox" name="o_952" value="Musiikki" <?php if ($row['musiikki_3'] == 'Musiikki ') { echo 'checked'; } ?>> Musiikki<br>
                    <input type="checkbox" name="o_953" value="Näyttelyt" <?php if ($row['nayttelyt_3'] == 'Näyttelyt ') { echo 'checked'; } ?>> Näyttelyt<br>
                    <input type="checkbox" name="o_954" value="Paikat" <?php if ($row['paikat_3'] == 'Paikat ') { echo 'checked'; } ?>> Paikat<br>
                    <input type="checkbox" name="o_955" value="Tilat" <?php if ($row['tilat_3'] == 'Tilat ') { echo 'checked'; } ?>> Tilat<br>
                    <input type="checkbox" name="o_956" value="Urheilu" <?php if ($row['urheilu_3'] == 'Urheilu ') { echo 'checked'; } ?>> Urheilu<br>
                </div>    

                <div class='haku_osastot_checkbox_XIV_III_l'>
                    <input type="checkbox" name="o_957" value="Muut" <?php if ($row['muut_pyydetaan_tekemista'] == 'Muut ') { echo 'checked'; } ?>> Muut<br>        
                </div>

            </div>

            <div id='haku_osastot_muut_pyydetaan'>

                <div class='haku_osastot_checkbox_XV_l'>

                </div>

            </div>

          </div>    


    <div id='tapahtuma_kalenterit'>

 
  <label id='label_otsikko_tapahtuma_alkaa' class="label_otsikko" for="tapahtumaAlkaa">Tapahtuma alkaa:
  <br>*Pvm: <span class='lomakkeenPalauteNegatiivinen'><?php echo $tapahtumaAlkaa_virhe; ?></span></label> 
 
  <p class='lisaa_ilmoitus_alaohje'> 
      Maks. yksi vuosi.
  </p>  
  
  <input id="datepicker" class="lisaa_ilmoitus_lomake" type="text" placeholder="pp.kk.vvvv" 
  name="tapahtumaAlkaa" maxlength='10' value="<?php echo date_FIN(substr(htmlspecialchars($row['tapahtumaAlkaa'], ENT_QUOTES, 'UTF-8'),0,10)); ?>"> 
  
  <label class="label_otsikko" for="klo_I">*Klo: <span class='lomakkeenPalauteNegatiivinen'><?php echo $klo_I_virhe; ?></span></label>
  <br>
  <select id='alkaa_klo_I' class="lisaa_ilmoitus_valikko" name="klo_I">

    <option value=""></option>

    <optgroup label="Klo">

    <option value="00:00" <?php if($row["klo_I"]=="00:00:00"){echo "selected";} ?>>00:00</option>
    <option value="00:30" <?php if($row["klo_I"]=="00:30:00"){echo "selected";} ?>>00:30</option>
    <option value="01:00" <?php if($row["klo_I"]=="01:00:00"){echo "selected";} ?>>01:00</option>
    <option value="01:30" <?php if($row["klo_I"]=="01:30:00"){echo "selected";} ?>>01:30</option>    
    <option value="02:00" <?php if($row["klo_I"]=="02:00:00"){echo "selected";} ?>>02:00</option>
    <option value="02:30" <?php if($row["klo_I"]=="02:30:00"){echo "selected";} ?>>02:30</option>
    <option value="03:00" <?php if($row["klo_I"]=="03:00:00"){echo "selected";} ?>>03:00</option>
    <option value="03:30" <?php if($row["klo_I"]=="03:30:00"){echo "selected";} ?>>03:30</option>
    <option value="04:00" <?php if($row["klo_I"]=="04:00:00"){echo "selected";} ?>>04:00</option>
    <option value="04:30" <?php if($row["klo_I"]=="04:30:00"){echo "selected";} ?>>04:30</option>
    <option value="05:00" <?php if($row["klo_I"]=="05:00:00"){echo "selected";} ?>>05:00</option>
    <option value="05:30" <?php if($row["klo_I"]=="05:30:00"){echo "selected";} ?>>05:30</option>
    <option value="06:00" <?php if($row["klo_I"]=="06:00:00"){echo "selected";} ?>>06:00</option>
    <option value="06:30" <?php if($row["klo_I"]=="06:30:00"){echo "selected";} ?>>06:30</option>
    <option value="07:00" <?php if($row["klo_I"]=="07:00:00"){echo "selected";} ?>>07:00</option>
    <option value="07:30" <?php if($row["klo_I"]=="07:30:00"){echo "selected";} ?>>07:30</option>
    <option value="08:00" <?php if($row["klo_I"]=="08:00:00"){echo "selected";} ?>>08:00</option>
    <option value="08:30" <?php if($row["klo_I"]=="08:30:00"){echo "selected";} ?>>08:30</option>
    <option value="09:00" <?php if($row["klo_I"]=="09:00:00"){echo "selected";} ?>>09:00</option>
    <option value="09:30" <?php if($row["klo_I"]=="09:30:00"){echo "selected";} ?>>09:30</option>
    <option value="10:00" <?php if($row["klo_I"]=="10:00:00"){echo "selected";} ?>>10:00</option>
    <option value="10:30" <?php if($row["klo_I"]=="10:30:00"){echo "selected";} ?>>10:30</option>
    <option value="11:00" <?php if($row["klo_I"]=="11:00:00"){echo "selected";} ?>>11:00</option>
    <option value="11:30" <?php if($row["klo_I"]=="11:30:00"){echo "selected";} ?>>11:30</option>
    <option value="12:00" <?php if($row["klo_I"]=="12:00:00"){echo "selected";} ?>>12:00</option>
    <option value="12:30" <?php if($row["klo_I"]=="12:30:00"){echo "selected";} ?>>12:30</option>
    <option value="13:00" <?php if($row["klo_I"]=="13:00:00"){echo "selected";} ?>>13:00</option>
    <option value="13:30" <?php if($row["klo_I"]=="13:30:00"){echo "selected";} ?>>13:30</option>
    <option value="14:00" <?php if($row["klo_I"]=="14:00:00"){echo "selected";} ?>>14:00</option>
    <option value="14:30" <?php if($row["klo_I"]=="14:30:00"){echo "selected";} ?>>14:30</option>
    <option value="15:00" <?php if($row["klo_I"]=="15:00:00"){echo "selected";} ?>>15:00</option>
    <option value="15:30" <?php if($row["klo_I"]=="15:30:00"){echo "selected";} ?>>15:30</option>
    <option value="16:00" <?php if($row["klo_I"]=="16:00:00"){echo "selected";} ?>>16:00</option>
    <option value="16:30" <?php if($row["klo_I"]=="16:30:00"){echo "selected";} ?>>16:30</option>
    <option value="17:00" <?php if($row["klo_I"]=="17:00:00"){echo "selected";} ?>>17:00</option>
    <option value="17:30" <?php if($row["klo_I"]=="17:30:00"){echo "selected";} ?>>17:30</option>
    <option value="18:00" <?php if($row["klo_I"]=="18:00:00"){echo "selected";} ?>>18:00</option>
    <option value="18:30" <?php if($row["klo_I"]=="18:30:00"){echo "selected";} ?>>18:30</option>
    <option value="19:00" <?php if($row["klo_I"]=="19:00:00"){echo "selected";} ?>>19:00</option>
    <option value="19:30" <?php if($row["klo_I"]=="19:30:00"){echo "selected";} ?>>19:30</option>
    <option value="20:00" <?php if($row["klo_I"]=="20:00:00"){echo "selected";} ?>>20:00</option>
    <option value="20:30" <?php if($row["klo_I"]=="20:30:00"){echo "selected";} ?>>20:30</option>
    <option value="21:00" <?php if($row["klo_I"]=="21:00:00"){echo "selected";} ?>>21:00</option>
    <option value="21:30" <?php if($row["klo_I"]=="21:30:00"){echo "selected";} ?>>21:30</option>
    <option value="22:00" <?php if($row["klo_I"]=="22:00:00"){echo "selected";} ?>>22:00</option>
    <option value="22:30" <?php if($row["klo_I"]=="22:30:00"){echo "selected";} ?>>22:30</option>
    <option value="23:00" <?php if($row["klo_I"]=="23:00:00"){echo "selected";} ?>>23:00</option>
    <option value="23:30" <?php if($row["klo_I"]=="23:30:00"){echo "selected";} ?>>23:30</option>
    
    </optgroup>

  </select>

  <label class="label_otsikko" for="tapahtumaPaattyy">Tapahtuma päättyy:
  <br> Pvm: <span class='lomakkeenPalauteNegatiivinen'><?php echo $tapahtumaPaattyy_virhe; ?></span></label> 
  <p class='lisaa_ilmoitus_alaohje'> 
      Maks. yksi vuosi.
  </p> 
  <br> 
  <input id="datepicker_II" class="lisaa_ilmoitus_lomake" type="text" placeholder="pp.kk.vvvv" 
  name="tapahtumaPaattyy" maxlength='10' value="<?php echo date_FIN(substr(htmlspecialchars($row['tapahtumaPaattyy'], ENT_QUOTES, 'UTF-8'),0,10)); ?>"> 

  <label class="label_otsikko" for="klo_II">Klo: <span class='lomakkeenPalauteNegatiivinen'><?php echo $klo_II_virhe; ?></span></label>
  <br>
  <select id='paattyy_klo_II' class="lisaa_ilmoitus_valikko" name="klo_II">

    <option value=""></option>

    <optgroup label="Klo">

    <option value="00:00" <?php if($row["klo_II"]=="00:00:00"){echo "selected";} ?>>00:00</option>
    <option value="00:30" <?php if($row["klo_II"]=="00:30:00"){echo "selected";} ?>>00:30</option>
    <option value="01:00" <?php if($row["klo_II"]=="01:00:00"){echo "selected";} ?>>01:00</option>
    <option value="01:30" <?php if($row["klo_II"]=="01:30:00"){echo "selected";} ?>>01:30</option>    
    <option value="02:00" <?php if($row["klo_II"]=="02:00:00"){echo "selected";} ?>>02:00</option>
    <option value="02:30" <?php if($row["klo_II"]=="02:30:00"){echo "selected";} ?>>02:30</option>
    <option value="03:00" <?php if($row["klo_II"]=="03:00:00"){echo "selected";} ?>>03:00</option>
    <option value="03:30" <?php if($row["klo_II"]=="03:30:00"){echo "selected";} ?>>03:30</option>
    <option value="04:00" <?php if($row["klo_II"]=="04:00:00"){echo "selected";} ?>>04:00</option>
    <option value="04:30" <?php if($row["klo_II"]=="04:30:00"){echo "selected";} ?>>04:30</option>
    <option value="05:00" <?php if($row["klo_II"]=="05:00:00"){echo "selected";} ?>>05:00</option>
    <option value="05:30" <?php if($row["klo_II"]=="05:30:00"){echo "selected";} ?>>05:30</option>
    <option value="06:00" <?php if($row["klo_II"]=="06:00:00"){echo "selected";} ?>>06:00</option>
    <option value="06:30" <?php if($row["klo_II"]=="06:30:00"){echo "selected";} ?>>06:30</option>
    <option value="07:00" <?php if($row["klo_II"]=="07:00:00"){echo "selected";} ?>>07:00</option>
    <option value="07:30" <?php if($row["klo_II"]=="07:30:00"){echo "selected";} ?>>07:30</option>
    <option value="08:00" <?php if($row["klo_II"]=="08:00:00"){echo "selected";} ?>>08:00</option>
    <option value="08:30" <?php if($row["klo_II"]=="08:30:00"){echo "selected";} ?>>08:30</option>
    <option value="09:00" <?php if($row["klo_II"]=="09:00:00"){echo "selected";} ?>>09:00</option>
    <option value="09:30" <?php if($row["klo_II"]=="09:30:00"){echo "selected";} ?>>09:30</option>
    <option value="10:00" <?php if($row["klo_II"]=="10:00:00"){echo "selected";} ?>>10:00</option>
    <option value="10:30" <?php if($row["klo_II"]=="10:30:00"){echo "selected";} ?>>10:30</option>
    <option value="11:00" <?php if($row["klo_II"]=="11:00:00"){echo "selected";} ?>>11:00</option>
    <option value="11:30" <?php if($row["klo_II"]=="11:30:00"){echo "selected";} ?>>11:30</option>
    <option value="12:00" <?php if($row["klo_II"]=="12:00:00"){echo "selected";} ?>>12:00</option>
    <option value="12:30" <?php if($row["klo_II"]=="12:30:00"){echo "selected";} ?>>12:30</option>
    <option value="13:00" <?php if($row["klo_II"]=="13:00:00"){echo "selected";} ?>>13:00</option>
    <option value="13:30" <?php if($row["klo_II"]=="13:30:00"){echo "selected";} ?>>13:30</option>
    <option value="14:00" <?php if($row["klo_II"]=="14:00:00"){echo "selected";} ?>>14:00</option>
    <option value="14:30" <?php if($row["klo_II"]=="14:30:00"){echo "selected";} ?>>14:30</option>
    <option value="15:00" <?php if($row["klo_II"]=="15:00:00"){echo "selected";} ?>>15:00</option>
    <option value="15:30" <?php if($row["klo_II"]=="15:30:00"){echo "selected";} ?>>15:30</option>
    <option value="16:00" <?php if($row["klo_II"]=="16:00:00"){echo "selected";} ?>>16:00</option>
    <option value="16:30" <?php if($row["klo_II"]=="16:30:00"){echo "selected";} ?>>16:30</option>
    <option value="17:00" <?php if($row["klo_II"]=="17:00:00"){echo "selected";} ?>>17:00</option>
    <option value="17:30" <?php if($row["klo_II"]=="17:30:00"){echo "selected";} ?>>17:30</option>
    <option value="18:00" <?php if($row["klo_II"]=="18:00:00"){echo "selected";} ?>>18:00</option>
    <option value="18:30" <?php if($row["klo_II"]=="18:30:00"){echo "selected";} ?>>18:30</option>
    <option value="19:00" <?php if($row["klo_II"]=="19:00:00"){echo "selected";} ?>>19:00</option>
    <option value="19:30" <?php if($row["klo_II"]=="19:30:00"){echo "selected";} ?>>19:30</option>
    <option value="20:00" <?php if($row["klo_II"]=="20:00:00"){echo "selected";} ?>>20:00</option>
    <option value="20:30" <?php if($row["klo_II"]=="20:30:00"){echo "selected";} ?>>20:30</option>
    <option value="21:00" <?php if($row["klo_II"]=="21:00:00"){echo "selected";} ?>>21:00</option>
    <option value="21:30" <?php if($row["klo_II"]=="21:30:00"){echo "selected";} ?>>21:30</option>
    <option value="22:00" <?php if($row["klo_II"]=="22:00:00"){echo "selected";} ?>>22:00</option>
    <option value="22:30" <?php if($row["klo_II"]=="22:30:00"){echo "selected";} ?>>22:30</option>
    <option value="23:00" <?php if($row["klo_II"]=="23:00:00"){echo "selected";} ?>>23:00</option>
    <option value="23:30" <?php if($row["klo_II"]=="23:30:00"){echo "selected";} ?>>23:30</option> 

    </optgroup>

  </select>

  </div>

<script>tapahtumaKalenterit()</script>

            <div id='lisaa_ilmoitus_avoinna'>

            <label class='label_otsikko' for='avoinna'>
                Avoinna: <span class='lomakkeenPalauteNegatiivinen'><?php echo $avoinna_virhe; ?></span>
            </label> 
            <br>
            <textarea id='avoinna_sisalto' class='lisaa_ilmoitus_textarea' name='avoinna' rows='3' cols='50' maxlength='1000'><?php echo htmlspecialchars($row['avoinna'], ENT_QUOTES, 'UTF-8'); ?></textarea>

            </div>


            <?php 

          if($row["ylaosasto"] !="Tapahtumat") {
          echo '<script>avoinna_nakyy()</script>';
        }
 
           if (isset($ylaosasto) && $ylaosasto != 'Tapahtumat') {
                echo '<script>avoinna_nakyy()</script>'; 
            } 

            ?>


<label id='label_paikka' class='label_otsikko' for='paikka'>
    <?php if($row["ylaosasto"]=="Tapahtumat") {
      echo "*Paikka: ";}
      else {
        echo "Paikka: ";
      } ?><span class='lomakkeenPalauteNegatiivinen'><?php echo $paikka_virhe; ?></span>
</label> 
<br> 
<input class='lisaa_ilmoitus_lomake' type='text' name='paikka' placeholder='Esim. Kanneltalo, Teatteri Kallio...' maxlength='255' value='<?php echo htmlspecialchars($row['paikka'], ENT_QUOTES, 'UTF-8'); ?>'>

  <label id='label_osoite' class="label_otsikko" for="tapahtumanOsoite">
        <?php if($row["ylaosasto"]=="Tapahtumat") {
      echo "*Katuosoite: ";}
      else {
        echo "Katuosoite: ";
      } ?><span class='lomakkeenPalauteNegatiivinen'><?php echo $tapahtumanOsoite_virhe; ?></span></label> 
  <br> 
  <input class="lisaa_ilmoitus_lomake" type="text" name="tapahtumanOsoite" maxlength="255" value="<?php echo htmlspecialchars($row['tapahtumanOsoite'], ENT_QUOTES, 'UTF-8'); ?>">  



    <label class="label_otsikko" for="kaupunki">*Kaupunki: <span class='lomakkeenPalauteNegatiivinen'><?php echo $kaupunki_virhe; ?></span></label>
    <br>
    <select class="lisaa_ilmoitus_valikko" name="kaupunki">

    <optgroup label="Kaupunki">

      <option value="Espoo" <?php if($row["kaupunki"]=="Espoo"){echo "selected";} ?>>Espoo</option>
      <option value="Helsinki" <?php if($row["kaupunki"]=="Helsinki"){echo "selected";} ?>>Helsinki</option> 
      <option value="Kauniainen" <?php if($row["kaupunki"]=="Kauniainen"){echo "selected";} ?>>Kauniainen</option>
      <option value="Vantaa"<?php if($row["kaupunki"]=="Vantaa"){echo "selected";} ?>>Vantaa</option>
  
    </select>


  <label class="label_otsikko" for="otsikko"></p>*Otsikko: <span class='lomakkeenPalauteNegatiivinen'><?php echo $otsikko_virhe; ?></label> 
  <br> 
  <input class="lisaa_ilmoitus_lomake" type="text" name="otsikko" maxlength="255" value="<?php echo htmlspecialchars($row['otsikko'], ENT_QUOTES, 'UTF-8'); ?>"> 


  <label class="label_otsikko" for="sisalto">*Sisältö: <span class='lomakkeenPalauteNegatiivinen'><?php echo $sisalto_virhe; ?></span></label> 
  <br>
  <textarea class="lisaa_ilmoitus_textarea" name="sisalto" rows="7" cols="50" maxlength='10000'><?php echo htmlspecialchars($row['sisalto'], ENT_QUOTES, 'UTF-8'); ?></textarea>


  <label class="label_otsikko">Kuvat: </label>

  <p class='lomakkeenPalauteNegatiivinen_3'>Jos haluat säilyttää kuvasi, 
      hyppää Kuvat-vaiheen yli.</p>
  <br class='br_muokkaa_katoaa'>
  <p class='lomakkeenPalauteNegatiivinen_3'>Jos haluat vaihtaa kuviasi 
      tai poistaa niitä, klikkaa Vaihda tai poista kuvia -nappia.</p>
  <br class='br_muokkaa_katoaa'>
  <p class='lomakkeenPalauteNegatiivinen_3'>Kuvien vaihtamis- ja poistamismahdollisuus 
      avautuu uuteen ikkunaan.</p>
  <br>

  <button id="vaihda_ja_poista_kuvia_linkki" type="button" onclick="vaihda_ja_poista_kuvia('<?=htmlspecialchars($row["urlMuokkaaTaiPoista"], ENT_QUOTES, "UTF-8"); ?>')">Vaihda tai poista kuvia</button>

  <br>
  <br>
  <br>


  <label class="label_otsikko" for="nimi">*Nimi: <span class='lomakkeenPalauteNegatiivinen'><?php echo $nimi_virhe; ?></span></label>
  <br> 
  <input class="lisaa_ilmoitus_lomake" type="text" name="nimi" maxlength="255" value="<?php echo htmlspecialchars($row['nimi'], ENT_QUOTES, 'UTF-8'); ?>">
  


  <p class='lomakkeenPalauteNegatiivinen2'> 
  Huomaa!
  <br><br>
  Sähköpostiosoitetta ei voi muokata.
  </p>

  <label class="label_otsikko" for="puhelin">Puhelin: <span class='lomakkeenPalauteNegatiivinen'><?php echo $puhelin_virhe; ?></span></label> 
  <br>
  <p class='lisaa_ilmoitus_alaohje'> 
  Näkyy julkisesti, jos täytät. 
  </p>
  <input class="lisaa_ilmoitus_lomake" type="text" name="puhelin" maxlength="75" value="<?php echo htmlspecialchars($row['puhelin'], ENT_QUOTES, 'UTF-8'); ?>">


  <label class="label_otsikko" for="nettisivu">Nettisivu: <span class='lomakkeenPalauteNegatiivinen'><?php echo $nettisivu_virhe; ?></span></label> 
  <br> 
  <input class="lisaa_ilmoitus_lomake" type="text" placeholder="https://www.esimerkki.net" 
  name="nettisivu" maxlength='255' value="<?php echo htmlspecialchars($row['nettisivu'], ENT_QUOTES, 'UTF-8'); ?>">


  <label class="label_otsikko" for="ilmoitusPoistuuAutomaattisesti">*Ilmoitus poistuu automaattisesti: <span class='lomakkeenPalauteNegatiivinen'><?php echo $ilmoitusPoistuuAutomaattisesti_virhe; ?></span></label> 
  <br>
  <p class='lisaa_ilmoitus_alaohje'> 
    Ilmoitus poistuu automaattisesti valitsemanasi päivänä klo 02.00.
  </p>
  <p class='lisaa_ilmoitus_alaohje'> 
    Tapahtumissa maks. tapahtuman alkamispäivä + 15 päivää.
  </p>
  <p class='lisaa_ilmoitus_alaohje'> 
    Muissa ilmoituksissa maks. yksi vuosi.
  </p>
  <input id="datepicker_III" class="lisaa_ilmoitus_lomake" type="text" placeholder="pp.kk.vvvv" 
  name="ilmoitusPoistuuAutomaattisesti" maxlength='10' value="<?php echo date_FIN(substr(htmlspecialchars($row['ilmoitusPoistuuAutomaattisesti'], ENT_QUOTES, 'UTF-8'),0,10)); ?>"> 


  <input id="muokkaa_ilmoitusta_nappi" type="submit" value="Muokkaa ilmoitusta">


</form>

<br>
<br>

<br>
<br>

   <label class="label_otsikko" for="button_2">Jos haluat poistaa ilmoituksesi kokonaan, klikkaa 
      alla olevaa nappia. <span class='varoitus_teksti'>Tätä toimintoa ei voi perua.</span</label>  
    <a href='#julkaise_varmistus'><button id="button_4" type="button" name="button_2" onclick="julkaisu_varmistus()">Poista ilmoitus</button></a>
    
    <br>
    <br>
    <br>

    <br>
    <br>


    <div id='julkaise_varmistus'>

    <p class='info_teksti varmistus_kysymys_1'>Haluatko varmasti poistaa ilmoituksen?</p>

<form action="" method="post" enctype="multipart/form-data">
    <input id="poista_ilmoitus_nappi" type="submit" value="Kyllä" name="poista_ilmoitus">
</form>

    <button id="button_5" type="button" onclick="julkaisu_varmistus_ei_vastaus()">Ei</button>

    <br>
    <br>

    </div>

      <script>

        function julkaisu_varmistus() {
            document.getElementById('julkaise_varmistus').style.display = 'inline';

        }

        function julkaisu_varmistus_ei_vastaus() {
            document.getElementById('julkaise_varmistus').style.display = 'none';
        }

    </script>


<?php

mysqli_close($conn);

?>

    </div>

</div>


</body>
</html>
