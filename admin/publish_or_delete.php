<!DOCTYPE html>
<html lang="fi">

        <?php

            include "../includes/connect_to_database.php";

            $urlMuokkaaIV = mysqli_real_escape_string($conn, $_GET['urlKokoIlmoitus']);

            if (preg_match('/[^a-zA-Z0-9#]/', $urlMuokkaaIV)) {
                die ('Ilmoitusta ei löydy.');
            }

            $sql = "SELECT * FROM ilmoitukset, osastot
                    WHERE ilmoitukset.urlKokoIlmoitus='$urlMuokkaaIV'
                    AND ilmoitukset.julkaistu!='kylla'
                    AND ilmoitukset.id=osastot.id";            

            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
            
                while($row = mysqli_fetch_assoc($result)) {

                 $osasto = $row['elokuvat'] . 
                           $row['improvisointi'] . 
                           $row['keskustelu'] . 
                           $row['kirjallisuus'] . 
                           $row['kuvataide'] .
                           $row['kasityot'] .
                           $row['leikkiminen'] .
                           $row['liikunta'] .
                           $row['luento'] .
                           $row['musiikki'] .
                           $row['nayttelyt'] .
                           $row['oppiminen'] .
                           $row['pelaaminen'] .
                           $row['politiikka'] .
                           $row['runonlausunta'] . 
                           $row['sadunkerronta'] .
                           $row['tanssi'] .
                           $row['tarinankerronta'] .
                           $row['teatteri'] . 
                           $row['tyopaja'] . 
                           $row['urheilu'] .
                           $row['uskonto'] . 
                           $row['yhdessa_oleminen'] . 
                           $row['muut_tapahtumat'] . 
                           $row['aikuiset'] . 
                           $row['lapset'] . 
                           $row['nuoret'] . 
                           $row['seniorit'] .
                           $row['miehet'] . 
                           $row['naiset'] .
                           $row['elektroniikka'] .
                           $row['huonekalut'] .
                           $row['kodinkoneet'] .
                           $row['vaatteet'] .
                           $row['muut_annetaan_tavaroita'] . 
                           $row['liikunta_2'] . 
                           $row['musiikki_2'] . 
                           $row['nayttelyt_2'] .
                           $row['paikat'] . 
                           $row['tilat'] .
                           $row['urheilu_2'] . 
                           $row['muut_annetaan_tekemista'] .
                           $row['elektroniikka_2'] .
                           $row['huonekalut_2'] .
                           $row['kodinkoneet_2'] .
                           $row['vaatteet_2'] .
                           $row['muut_pyydetaan_tavaroita'] .
                           $row['liikunta_3'] . 
                           $row['musiikki_3'] .
                           $row['nayttelyt_3'] .
                           $row['paikat_3'] .
                           $row['tilat_3'] . 
                           $row['urheilu_3'] .  
                           $row['muut_pyydetaan_tekemista']; 

        ?>

<head>

  <script>

    if(window.location.protocol != 'https:') {
      location.href = location.href.replace("http://", "https://");
    }

  </script>  

    <title><?php echo htmlspecialchars($row["otsikko"], ENT_QUOTES, "UTF-8"); ?> - Jaetaan.net</title>

    <link rel="stylesheet" type="text/css" href="../muotoilu.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">

    <meta name="robots" content="noindex">

    <meta name="keywords" content="jakaminen, ilmainen, annetaan, pyydetään, 
                                   lainataan, ilmaistapahtuma">
    <meta name="description" content="<?php echo htmlspecialchars($row["sisalto"], ENT_QUOTES, "UTF-8"); ?>">

    <meta property="og:title" content="<?php echo htmlspecialchars($row["otsikko"], ENT_QUOTES, "UTF-8"); ?>" />
    <meta property="og:description" content="<?php echo htmlspecialchars($row["sisalto"], ENT_QUOTES, "UTF-8"); ?>" />
    <meta property="og:image" content="<?php echo htmlspecialchars($row["kuva1"], ENT_QUOTES, "UTF-8"); ?>" />
    <meta property="og:url" content="https://jaetaan.net/ilmoitukset/?urlKokoIlmoitus=<?php echo htmlspecialchars($row["urlKokoIlmoitus"], ENT_QUOTES, "UTF-8"); ?>" />
    <meta property="og:type" content="website" /> 
    <meta property="fb:app_id" content="your fb app id" /> 
    <meta property="og:site_name" content="Jaetaan.net"/> 
    <meta property="og:locale" content="fi_FI">
    
    <script src="../toiminnallisuuksia.js"></script>

</head>


<body>

        <?php
            include "../includes/header.php";
            include "../includes/nav_bar_admin.php";
        ?>


    <div class="keski_osa_2">

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

        <?php


if (isset ($_POST['h_julkaise'])) {

  $urlMuokkaa_V = mysqli_real_escape_string($conn, $_GET['urlKokoIlmoitus']);

  $sql_1 = "UPDATE ilmoitukset, osastot 
            SET julkaistu='kylla'
            WHERE ilmoitukset.urlKokoIlmoitus='$urlMuokkaa_V'
            AND ilmoitukset.id=osastot.id";

  mysqli_query($conn, $sql_1);

  include '../includes/email_to_user_3.php';

}

if (isset($_POST["h_poista"])) {

$urlMuokkaa_VI = mysqli_real_escape_string($conn, $_GET['urlKokoIlmoitus']);

$sql = "SELECT * FROM ilmoitukset WHERE urlKokoIlmoitus='$urlMuokkaa_VI'";
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
WHERE ilmoitukset.id=osastot.id AND ilmoitukset.urlKokoIlmoitus='$urlMuokkaa_VI'";

?>

<p class="lomakkeenPalautePositiivinen"><?php echo "Ilmoituksesi on poistettu.<br>"; ?></p>

<?php

mysqli_query($conn, $sql);

}


            function date_FIN($date) {
                $dx = explode("-", $date);
                $date = $dx[2].".".$dx[1].".".$dx[0];
                return $date;
            }

            function date_FIN_2($date) {
                $dx = explode(":", $date);
                $date = $dx[0].".".$dx[1];
                return $date;
            }

        ?>
      
        <div class="vasen_puoli">      

          <form action="" method="post">
            <input id="h_julkaise" name="h_julkaise" type="submit" value="Julkaise">
          </form>

          <form action="" method="post">
            <input id="h_poista" name="h_poista" type="submit" value="Poista">  
          </form>


            <h1 class="koko_ilmoitus_otsikko"><?php echo htmlspecialchars($row["otsikko"], ENT_QUOTES, "UTF-8"); ?></h1>
      
            <img class="koko_ilmoitus_iso_kuva" src='<?php if ($row["source"] != "lomake" && $row["source"] != "h_lomake" &&  $row["kuva1"] != "oletuskuva_1234.jpg") {echo htmlspecialchars($row["kuva1"], ENT_QUOTES, "UTF-8"); } else {echo "https://jaetaan.net/kuvat/pienet_kuvat/" . htmlspecialchars($row["kuva1"], ENT_QUOTES, "UTF-8"); } ?>' width="100%" height="auto">
  
            <div class="koko_ilmoitus_kuva">

                <img id="koko_ilmoitus_pieni_kuva_1" class="koko_ilmoitus_pieni_kuva" onclick="vaihda_kuva_1()" src='<?php if ($row["source"] != "lomake" && $row["source"] != "h_lomake" &&  $row["kuva1"] != "oletuskuva_1234.jpg") {echo htmlspecialchars($row["kuva1"], ENT_QUOTES, "UTF-8"); } else {echo "https://jaetaan.net/kuvat/rajatut_kuvat/" . htmlspecialchars($row["pieni_kuva_1"], ENT_QUOTES, "UTF-8"); } ?>'>
                <img id="koko_ilmoitus_pieni_kuva_2" class="koko_ilmoitus_pieni_kuva" onclick="vaihda_kuva_2()" src='<?php echo "https://jaetaan.net/kuvat/rajatut_kuvat/" . htmlspecialchars($row["pieni_kuva_2"], ENT_QUOTES, "UTF-8"); ?>'>
                <img id="koko_ilmoitus_pieni_kuva_3" class="koko_ilmoitus_pieni_kuva" onclick="vaihda_kuva_3()" src='<?php echo "https://jaetaan.net/kuvat/rajatut_kuvat/" . htmlspecialchars($row["pieni_kuva_3"], ENT_QUOTES, "UTF-8"); ?>'>
                <img id="koko_ilmoitus_pieni_kuva_4" class="koko_ilmoitus_pieni_kuva" onclick="vaihda_kuva_4()" src='<?php echo "https://jaetaan.net/kuvat/rajatut_kuvat/" . htmlspecialchars($row["pieni_kuva_4"], ENT_QUOTES, "UTF-8"); ?>'>
            
            </div>    
    
            <script>

                function vaihda_kuva_1() {
                    document.getElementsByClassName("koko_ilmoitus_iso_kuva")[0].src='<?php if ($row["source"] != "lomake" && $row["source"] != "h_lomake" &&  $row["kuva1"] != "oletuskuva_1234.jpg") {echo htmlspecialchars($row["kuva1"], ENT_QUOTES, "UTF-8"); } else {echo "https://jaetaan.net/kuvat/pienet_kuvat/" . htmlspecialchars($row["kuva1"], ENT_QUOTES, "UTF-8"); } ?>';
                }

                function vaihda_kuva_2() {
                    document.getElementsByClassName("koko_ilmoitus_iso_kuva")[0].src='<?php echo "https://jaetaan.net/kuvat/pienet_kuvat/" . htmlspecialchars($row["kuva2"], ENT_QUOTES, "UTF-8"); ?>';
                    }

                function vaihda_kuva_3() {
                    document.getElementsByClassName("koko_ilmoitus_iso_kuva")[0].src='<?php echo "https://jaetaan.net/kuvat/pienet_kuvat/" . htmlspecialchars($row["kuva3"], ENT_QUOTES, "UTF-8"); ?>';
                }

                function vaihda_kuva_4() {
                    document.getElementsByClassName("koko_ilmoitus_iso_kuva")[0].src='<?php echo "https://jaetaan.net/kuvat/pienet_kuvat/" . htmlspecialchars($row["kuva4"], ENT_QUOTES, "UTF-8"); ?>';
                }

            </script>  
 
            <br class="uusi_rivi_katoaa_II">
            <br class="uusi_rivi_katoaa_II">

            <?php
                if($row["kuva1"] == "oletuskuva_1234.jpg" 
                && $row["kuva2"] == "oletuskuva_1234.jpg" 
                && $row["kuva3"] == "oletuskuva_1234.jpg" 
                && $row["kuva4"] == "oletuskuva_1234.jpg") {
                    echo 
                    "
                    <script>
                        document.getElementsByClassName('uusi_rivi_katoaa_II')[0].style.display = 'none';
                        document.getElementsByClassName('uusi_rivi_katoaa_II')[1].style.display = 'none'; 
                    </script>
                    ";
                } 
                else {
                    echo 
                    "
                    <script>
                        document.getElementsByClassName('uusi_rivi_katoaa_II')[0].style.display = 'inline';
                        document.getElementsByClassName('uusi_rivi_katoaa_II')[1].style.display = 'inline';
                    </script>
                    ";
                } 
            ?>

   <div class="trythis">
   <p class='koko_ilmoitus_teksti koko_ilmoitus_sisalto'><?php echo htmlspecialchars($row["sisalto"], ENT_QUOTES, "UTF-8"); ?></p>
   </div>

   <br>

   <?php   

    if ($row['ylaosasto'] == 'Tapahtumat') { 
       echo '<p id="tapahtumaAlkaa_katoaa" class="koko_ilmoitus_teksti"><b>Alkaa: </b>' . date_FIN(substr(htmlspecialchars($row["tapahtumaAlkaa"], ENT_QUOTES, "UTF-8"),0,10)) .  
       ' klo ' . date_FIN_2(htmlspecialchars($row["klo_I"], ENT_QUOTES, "UTF-8")) . '</p>'; 
    } 

    if ($row['ylaosasto'] == 'Tapahtumat' 
    && $row['tapahtumaPaattyy'] == '0000-00-00') {
        echo '<br>'; 
    }  

    if ($row['ylaosasto'] == 'Tapahtumat' 
    && $row['tapahtumaPaattyy'] != '0000-00-00') { 
        echo '<p class="koko_ilmoitus_teksti"><b>Päättyy: </b>' . 
        date_FIN(substr(htmlspecialchars($row["tapahtumaPaattyy"], ENT_QUOTES, "UTF-8"),0,10)) . 
        ' klo ' . date_FIN_2(htmlspecialchars($row["klo_II"], ENT_QUOTES, "UTF-8")) . '<br><br></p>'; 
    } 



    if ($row['ylaosasto'] != 'Tapahtumat' 
    && $row['avoinna'] != '') { 
        echo '<div class="trythis"><p class="koko_ilmoitus_teksti koko_ilmoitus_sisalto"><b>Avoinna: </b>' . htmlspecialchars($row["avoinna"], ENT_QUOTES, "UTF-8") . '</p></div><br>'; 
    }

    ?>

<script>

function replaceURLWithHTMLLinks(text) {
    var re = /(\(.*?)?\b((?:https?|ftp|file):\/\/[-a-z0-9+&@#\/%?=~_()|!:,.;]*[-a-z0-9+&@#\/%=~_()|])/ig;
    return text.replace(re, function(match, lParens, url) {
        var rParens = '';
        lParens = lParens || '';

        // Try to strip the same number of right parens from url
        // as there are left parens.  Here, lParenCounter must be
        // a RegExp object.  You cannot use a literal
        //     while (/\(/g.exec(lParens)) { ... }
        // because an object is needed to store the lastIndex state.
        var lParenCounter = /\(/g;
        while (lParenCounter.exec(lParens)) {
            var m;
            // We want m[1] to be greedy, unless a period precedes the
            // right parenthesis.  These tests cannot be simplified as
            //     /(.*)(\.?\).*)/.exec(url)
            // because if (.*) is greedy then \.? never gets a chance.
            if (m = /(.*)(\.\).*)/.exec(url) ||
                    /(.*)(\).*)/.exec(url)) {
                url = m[1];
                rParens = m[2] + rParens;
            }
        }
        return lParens + "<a class='luotu_linkki' href='" + url + "' target='_blank'>" + url + "</a>" + rParens;
    });
}
var elm = document.getElementsByClassName('trythis')[0];
elm.innerHTML = replaceURLWithHTMLLinks(elm.innerHTML);

var elm_2 = document.getElementsByClassName('trythis')[1];
elm_2.innerHTML = replaceURLWithHTMLLinks(elm_2.innerHTML);

</script>


<?php


    if ($row['paikka'] == ''
    && $row['tapahtumanOsoite'] == '') { 
        echo '<p class="koko_ilmoitus_teksti"><b>Kaupunki: </b>' . htmlspecialchars($row["kaupunki"], ENT_QUOTES, "UTF-8") . '<br><br></p>'; 
    }

   if ($row['paikka'] == ''
   && $row['tapahtumanOsoite'] != '') { 
       echo '<p class="koko_ilmoitus_teksti"><b>Osoite: </b>' . htmlspecialchars($row["tapahtumanOsoite"], ENT_QUOTES, "UTF-8") . ", " . htmlspecialchars($row["kaupunki"], ENT_QUOTES, "UTF-8") . '<br><br></p>'; 
   } 

    if ($row['paikka'] != ''
    && $row['tapahtumanOsoite'] == '') { 
        echo '<p class="koko_ilmoitus_teksti"><b>Paikka: </b>' . htmlspecialchars($row["paikka"], ENT_QUOTES, "UTF-8") . ", " . htmlspecialchars($row["kaupunki"], ENT_QUOTES, "UTF-8") . '<br><br></p>'; 
    }         

    if ($row['paikka'] != ''
    && $row['tapahtumanOsoite'] != '') { 
        echo '<p class="koko_ilmoitus_teksti"><b>Paikka: </b>' . htmlspecialchars($row["paikka"], ENT_QUOTES, "UTF-8") . ", " . htmlspecialchars($row["tapahtumanOsoite"], ENT_QUOTES, "UTF-8") . ", " . htmlspecialchars($row["kaupunki"], ENT_QUOTES, "UTF-8") . '<br><br></p>'; 
    }  
 
    ?>

    <br>


    <p class="koko_ilmoitus_teksti">Ilmoitus lisätty: <?php echo date_FIN(substr(htmlspecialchars($row["pvm"], ENT_QUOTES, "UTF-8"),0,10)); ?></p> 
      
    <?php 

     if($row['ylaosasto'] == 'Tapahtumat') {
         echo '<p class="koko_ilmoitus_teksti">Ilmoitus poistuu viimeistään: ' . date_FIN(substr(htmlspecialchars($row["ilmoitusPoistuuAutomaattisesti"], ENT_QUOTES, "UTF-8"),0,10)) .  '</p>';
     } 

     if($row['ylaosasto'] != 'Tapahtumat'
     && $row['ilmoitusPoistuuAutomaattisesti'] != '0000-00-00') {
         echo '<p class="koko_ilmoitus_teksti">Ilmoitus poistuu viimeistään: ' . date_FIN(substr(htmlspecialchars($row["ilmoitusPoistuuAutomaattisesti"], ENT_QUOTES, "UTF-8"),0,10)) .  '</p>';
     } 

     if($row['ylaosasto'] != 'Tapahtumat' 
     && $row['ilmoitusPoistuuAutomaattisesti'] == '0000-00-00') {
         echo '<p class="koko_ilmoitus_teksti">Ilmoitus on voimassa toistaiseksi</p>';
     } 

?> 

<br>
      <p class="koko_ilmoitus_teksti"><b>Osasto: </b> <?php $jee_jee_jee=htmlspecialchars($osasto, ENT_QUOTES, 'UTF-8'); echo htmlspecialchars($row['ylaosasto'], ENT_QUOTES, 'UTF-8') . '<br>' . str_replace('_',' ',$jee_jee_jee); ?></p>
          
 <br>
  
      <p class="koko_ilmoitus_teksti"><b>Ilmoittaja: </b> <?php echo htmlspecialchars($row['nimi'], ENT_QUOTES, 'UTF-8'); ?> </p> 

      <?php 

    if ($row['jakaja'] == '') {
        echo '<br>'; 
    } 

      if ($row['nimi'] == 'Jaetaan.net'
      && $row['jakaja'] != '') {
                echo '<br> <p class="koko_ilmoitus_teksti"><b>Jakaja: </b>' . htmlspecialchars($row['jakaja'], ENT_QUOTES, 'UTF-8') . '</p>'; 
            } 
      
     
      if($row["source"] != "lomake" && $row["source"] != "h_lomake") {
          echo '<br> <p class="koko_ilmoitus_teksti"><b>Jakaja: </b>' . htmlspecialchars($row['jakaja'], ENT_QUOTES, 'UTF-8') . '</p>'; } ?>    
      <p id="puhelin_katoaa" class="koko_ilmoitus_teksti"><b>Puhelin: </b> <?php echo htmlspecialchars($row["puhelin"], ENT_QUOTES, "UTF-8"); ?></p>
      <p class="nettisivu_katoaa koko_ilmoitus_teksti"><b>Nettisivu: </b> <a href="<?php echo htmlspecialchars($row['nettisivu'], ENT_QUOTES, "UTF-8"); ?>" target="_blank"> <?php echo htmlspecialchars($row["nettisivu"], ENT_QUOTES, "UTF-8"); ?></a></p>
      <br>

                  
    <?php
            // Puhelin ja nettisivu näkyy, jos lisätty. Muutoin ei näy lainkaan. 

            if($row["puhelin"] != "") {
                echo 
                "
                <script>
                    document.getElementById('puhelin_katoaa').style.display = 'block';
                </script>
                ";
            } 

            if($row["nettisivu"] != "") {
                echo 
                "
                <script>
                    document.getElementsByClassName('nettisivu_katoaa')[0].style.display = 'block';
                </script>
                ";
            } 


            // Pienet kuvat näkyy, jos kuva lisätty. Oletuskuva ei näy lainkaan. 

            if($row["pieni_kuva_1"] != "oletuskuva_1234.jpg"
            || $row["kuva1"] != "oletuskuva_1234.jpg") {
                echo 
                "
                <script>
                    document.getElementById('koko_ilmoitus_pieni_kuva_1').style.display = 'inline';
                </script>";
            } 

            if($row["pieni_kuva_2"] != "oletuskuva_1234.jpg") {
                echo 
                "
                <script>
                    document.getElementById('koko_ilmoitus_pieni_kuva_2').style.display = 'inline';
                </script>";
            } 

            if($row["pieni_kuva_3"] != "oletuskuva_1234.jpg") {
                echo 
                "
                <script>
                    document.getElementById('koko_ilmoitus_pieni_kuva_3').style.display = 'inline';
                </script>
                ";
            } 

            if($row["pieni_kuva_4"] != "oletuskuva_1234.jpg") {
                echo 
                "
                <script>
                    document.getElementById('koko_ilmoitus_pieni_kuva_4').style.display = 'inline';
                </script>
                ";
            }


            // Iso kuva näkyy, jos kuva lisätty. Oletuskuva ei näy lainkaan. 

            if($row["kuva1"] != "oletuskuva_1234.jpg") {
                echo 
                "
                <script>
                    document.getElementsByClassName('koko_ilmoitus_iso_kuva')[0].style.display = 'inline';
                </script>
                ";
            }

                    
            $nimi_lahettaja = $_POST["nimi"];
            $aihe = $_POST["aihe"];
            $viesti = $_POST["viesti"]; 
            $sahkoposti_lahettaja = $_POST["sahkoposti"];
            $sahkoposti_vastaanottaja = $row["sahkoposti"];

            $to = "$sahkoposti_vastaanottaja";
            $subject = $aihe;

            $koko_ilmoitus_linkki = 'https://jaetaan.net/ilmoitukset?urlKokoIlmoitus=' . $row['urlKokoIlmoitus'];


            if ($row['nimi'] == 'Jaetaan.net') {
                $txt = 'Saitte tämä viestin, koska Jaetaan.net oli lisännyt sivuilleen ilmoituksen jakamastanne julkisesta asiasta. Ks. linkki alla. 

' . $koko_ilmoitus_linkki . '

' . $nimi_lahettaja . ' huomasi ilmoituksen ja kirjoitti teille viestin ilmoituksen yhteydenottolomakkeen kautta. 

Jos vastaatte tähän viestiin, vastauksenne menee viestin kirjoittajan sähköpostilaatikkoon.

Terveisin Jaetaan.net
https://jaetaan.net


' . $nimi_lahettaja . ' kirjoitti teille: 

' . $viesti;   
             }


            if ($row['nimi'] == 'Jaetaan.net automaatio') {
                $txt = 'Saitte tämä viestin, koska Jaetaan.net automaatio oli löytänyt Helsingin kaupungin linked events -järjestelmästä sinne lisäämänne ilmaistapahtuman ja lisännyt tästä sivuilleen ilmoituksen. Ks. linkki alla. 

' . $koko_ilmoitus_linkki . '

' . $nimi_lahettaja . ' huomasi ilmoituksen ja kirjoitti teille viestin ilmoituksen yhteydenottolomakkeen kautta. 

Jos vastaatte tähän viestiin, vastauksenne menee viestin kirjoittajan sähköpostilaatikkoon.

Terveisin Jaetaan.net
https://jaetaan.net


' . $nimi_lahettaja . ' kirjoitti teille: 

' . $viesti;   
             }


            if ($row['nimi'] != 'Jaetaan.net'
            && $row['nimi']  != 'Jaetaan.net automaatio') {
                $txt = 'Tämä on vastaus ilmoitukseesi Jaetaan.netissä. 

Jos vastaat tähän viestiin, vastauksesi menee viestin kirjoittajan sähköpostilaatikkoon ja hän näkee sähköpostiosoitteesi.

Terveisin Jaetaan.net
https://jaetaan.net


' . $nimi_lahettaja . ' kirjoitti sinulle:

' . $viesti;   
             }               

            $headers = "From: " . $sahkoposti_lahettaja;


    if (isset($_POST["nimi"])) {
         $ilmoitus_lahtee = 1;  

       if (empty($nimi_lahettaja)) {
           $tyhja_kentta_virhe = '<p class="lomakkeenPalauteNegatiivinen">Täytä kaikki yhteydenottolomakkeen kentät.</p>';
           $nimi_lahettaja_virhe = '<span class="lomakkeenPalauteNegatiivinen">Täytä tämä kenttä.</span>';
           $ilmoitus_lahtee = 0;
        }

        if (empty($aihe)) {
           $tyhja_kentta_virhe = '<p class="lomakkeenPalauteNegatiivinen">Täytä kaikki yhteydenottolomakkeen kentät.</p>';
           $aihe_virhe = '<span class="lomakkeenPalauteNegatiivinen">Täytä tämä kenttä.</span>';
           $ilmoitus_lahtee = 0;
        }
   

       if (empty($viesti)) {
           $tyhja_kentta_virhe = '<p class="lomakkeenPalauteNegatiivinen">Täytä kaikki yhteydenottolomakkeen kentät.</p>';
           $viesti_virhe = '<span class="lomakkeenPalauteNegatiivinen">Täytä tämä kenttä.</span>';
           $ilmoitus_lahtee = 0;
        }

       if (empty($sahkoposti_lahettaja)) {
           $tyhja_kentta_virhe = '<p class="lomakkeenPalauteNegatiivinen">Täytä kaikki yhteydenottolomakkeen kentät.</p>';
           $sahkoposti_lahettaja_virhe = '<span class="lomakkeenPalauteNegatiivinen">Täytä tämä kenttä.</span>';
           $ilmoitus_lahtee = 0;
        }    

       if (!empty($sahkoposti_lahettaja) && !filter_var($sahkoposti_lahettaja, FILTER_VALIDATE_EMAIL)) {
           $sahkoposti_lahettaja_virhe_ylos = '<p class="lomakkeenPalauteNegatiivinen">Sähköposti on virheellisessä muodossa.</p>';
           $sahkoposti_lahettaja_virhe = '<span class="lomakkeenPalauteNegatiivinen">@-merkin ja pisteen (.) tulee olla mukana pääteosassa.</span>'; 
           $ilmoitus_lahtee = 0;
       }    

       if ($ilmoitus_lahtee == 1) { 
           mail($to, $subject, $txt, $headers); 
           $viesti_lahti = '<p class="lomakkeenPalautePositiivinen">Viestisi on lähetetty.</p>';
    }

  }
                        ?>


            <div id='viesti_ilmoittajalle_lomake_katoaa_II'>

                <?php

                    if($row['sahkoposti'] == 'info@jaetaan.net'
                    && $row['jakaja'] != '') {
                        echo 
                        '
                        <script>
                            document.getElementById("viesti_ilmoittajalle_lomake_katoaa_II").style.display="none"
                        </script>
                        ';
                    } 
                    else {
                        echo 
                        '
                        <script>
                            document.getElementById("viesti_ilmoittajalle_lomake_katoaa_II").style.display="block"
                        </script>
                        ';
                    }

echo $tyhja_kentta_virhe;
echo $sahkoposti_lahettaja_virhe_ylos;
echo $viesti_lahti;


                ?>


                <h2 class='koko_ilmoitus_otsikko'>
                    Lähetä viesti ilmoittajalle, jos muokkauksen jälkeen ilmoitus on julkaistavissa
                </h2>

                <form action='https://www.jaetaan.net/ilmoitukset/index.php?urlKokoIlmoitus=<?php echo $urlMuokkaaIV ?>#ankkuri' method='post' enctype='multipart/form-data'>
 
                    <label class='label_otsikko' for='nimi'>
                        Nimesi: <span class='lomakkeenPalauteNegatiivinen'><?php echo $nimi_lahettaja_virhe; ?></span>
                    </label>
                    <br> 
                    <input class='yhteydenottolomake' type='text' name='nimi' maxlength='100' value='Jaetaan.netin ylläpito'>
  
                    <label class="label_otsikko" for="aihe">
                        Aihe: <span class='lomakkeenPalauteNegatiivinen'><?php echo $aihe_virhe; ?></span>
                    </label> 
                    <br>
                    <input class="yhteydenottolomake" type="text" name="aihe" maxlength="100" value="Ilmoitukseesi tarvisi muutoksia">

                    <label class='label_otsikko' for='sisalto'>
                        Viesti: <span class='lomakkeenPalauteNegatiivinen'><?php echo $viesti_virhe; ?></span>
                    </label> 
                    <br>
                    <textarea class='yhteydenottolomake' name='viesti' rows='7' cols='50'>Jotta voisimme julkaista ilmoituksesi, sinun tulisi muokata seuraavalla tavalla:

</textarea>
  
                    <label class='label_otsikko' for='sahkoposti'>
                        Sähköpostiosoitteesi: <span class='lomakkeenPalauteNegatiivinen'><?php echo $sahkoposti_lahettaja_virhe; ?></span>
                    </label> 
                    <br>
                    <input class='yhteydenottolomake' type='text' name='sahkoposti' maxlength='100' value='info@jaetaan.net'>
    
                    <br> 

                    <input id='laheta_viesti_ilmoittajalle_nappi' type='submit' value='Lähetä viesti'>

                </form>

            </div>

        </div>


        <div class="oikea_puoli">


<br>
<br>

        </div>

      </div>

    </div>


        <?php

        mysqli_close($conn);


                } 
            }

        else {

          ?>

          <head>

    <link rel="stylesheet" type="text/css" href="../muotoilu.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">

    <script src="../toiminnallisuuksia.js"></script>

</head>


<body>

       <?php
            include "../includes/header.php";
            include "../includes/nav_bar_admin";
        ?>


    <div class="keski_osa"> 


              <br><br> 
              <p class="info_teksti">Etsimääsi ilmoitusta ei löydy.</p>
              <br>

              <p class="info_teksti">Syynä tähän voi olla se, että käyttäjä poisti ilmoituksensa, 
                                     ennen kuin ehdit tarkistamaan sitä.</p>
              
              <br>
              <br>

    </div> 

    <?php

        mysqli_close($conn);

    } 
    ?>

</body>
</html>
