<!DOCTYPE html>
<html>

<head>

  <script>

    if(window.location.protocol != 'https:') {
      location.href = location.href.replace("http://", "https://");
    }

  </script>    

    <title>Admin – Jaetaan.net</title>

    <link rel='stylesheet' type='text/css' href='../muotoilu.css'>
    <link rel='stylesheet' href='https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css'>
    <link rel='stylesheet' href='../includes/kalenteri_muotoilu_II.css'>

    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta charset='UTF-8'>
    <meta name="robots" content="noindex">

    <script src='../includes/kalenteri_javascript_I.js'></script>
    <script src='../includes/kalenteri_javascript_II.js'></script>


    <script>
        $( function() {
          $( "#datepicker" ).datepicker({ dateFormat: 'dd.mm.yy'});
        } );
    
    
        $( function() {
            $( "#datepicker_II" ).datepicker({ dateFormat: 'dd.mm.yy'});
        } );
    
    
        $( function() {
            $( "#datepicker_III" ).datepicker({ dateFormat: 'dd.mm.yy'});
        } );
    </script>

    <script src='../toiminnallisuuksia.js'></script>

</head>

<body>

<?php 
    include '../includes/header.php';
    include '../includes/luo_yhteyden_tietokantaan.php';
    include '../includes/nav_bar_admin.php';
?>


<div class='keski_osa'> 

    <h1 class='lisaa_ilmoitus_otsikko'>Hallinnoinnin Lisää ilmoitus</h1>
    
    <p class='lisaa_ilmoitus_alaohje'>Tästä voit lisätä sivuston virallisia 
        ilmoituksia.<br><br></p>

    <p class='lisaa_ilmoitus_alaohje'>Julkisesta asiasta voi lisätä ilmoituksen 
        lupaa kysymättä.</p>

    <p class='lisaa_ilmoitus_alaohje'>Yksityisen ihmisen asiasta ei voi ilmoittaa 
        lupaa kysymättä.<br><br></p>

    <p class='lisaa_ilmoitus_alaohje'>Tähdellä (*) merkityt kentät tulee täyttää.
        <br><br></p>


<?php 

    if (isset($_POST['ylaosasto']) && isset($_POST['otsikko'])) {
        $ilmoitus_lahtee = 1;

    // Neljän mahdollisen kuvan lisäys serverille
            
    // Kuvan I lisäys serverille 

        $kansio_1111 = '../kuvat/poistettavat_kuvat/';
        $kansio_II_1111 = '../kuvat/pienet_kuvat/';
        $tiedosto_1111 = bin2hex(openssl_random_pseudo_bytes(5)) . "_" . preg_replace("/[^a-zA-Z0-9.]/", "", basename($_FILES['fileToUpload1']['name']));
        $polku_1111 = $kansio_1111 . $tiedosto_1111;                                
        $polku_II_1111 = $kansio_II_1111 . $tiedosto_1111;
            
        $kuvanTyyppi_1111 = pathinfo($polku_1111,PATHINFO_EXTENSION);
        $kuvanKoko_1111 = $_FILES['fileToUpload1']['size'];

        if($kuvanTyyppi_1111 != 'jpg' && $kuvanTyyppi_1111 != 'JPG' 
        && $kuvanTyyppi_1111 != 'jpeg' && $kuvanTyyppi_1111 != 'JPEG' 
        && $kuvanTyyppi_1111 != 'png' && $kuvanTyyppi_1111 != 'PNG' 
        && $kuvanTyyppi_1111 != 'gif' && $kuvanTyyppi_1111 != 'GIF' 
        && $kuvanTyyppi_1111 != '') {
            $kuva_virhe_1_1_1111 = '<p class="lomakkeenPalauteNegatiivinen"> Kuvat voivat olla vain jpg, jpeg, png ja gif tiedostoja.</p>';
            $kuva_virhe_1_2_1111 = 'Vain jpg, jpeg, png ja gif tiedostoja.';  
            $ilmoitus_lahtee = 0;
        }

        if ($kuvanKoko_1111 > 7400000) {
            $kuva_virhe_2_1_1111 = '<p class="lomakkeenPalauteNegatiivinen">Yhden kuvan maksimikoko on 7 Mt.</p>';
            $kuva_virhe_2_2_1111 = 'Vain alle 7 Mt:n kuvia.';
            $ilmoitus_lahtee = 0;
        }

        if ($kuvanTyyppi_1111 == '') {
            $tiedosto_1111 = 'oletuskuva_1234.jpg';
        }


        // Kuvan II lisäys serverille

        $kansio_2222 = '../kuvat/poistettavat_kuvat/';
        $kansio_II_2222 = '../kuvat/pienet_kuvat/';
        $tiedosto_II_2222 = bin2hex(openssl_random_pseudo_bytes(5)) . "_" . preg_replace("/[^a-zA-Z0-9.]/", "", basename($_FILES['fileToUpload2']['name']));
        $polku_2222 = $kansio_2222 . $tiedosto_II_2222;                                
        $polku_II_2222 = $kansio_II_2222 . $tiedosto_II_2222;

        $kuvanTyyppi_2222 = pathinfo($polku_2222,PATHINFO_EXTENSION);
        $kuvanKoko_2222 = $_FILES['fileToUpload2']['size'];

        if($kuvanTyyppi_2222 != 'jpg' && $kuvanTyyppi_2222 != 'JPG' 
        && $kuvanTyyppi_2222 != 'jpeg' && $kuvanTyyppi_2222 != 'JPEG' 
        && $kuvanTyyppi_2222 != 'png' && $kuvanTyyppi_2222 != 'PNG' 
        && $kuvanTyyppi_2222 != 'gif' && $kuvanTyyppi_2222 != 'GIF' 
        && $kuvanTyyppi_2222 != '') {
            $kuva_virhe_1_1_1111 = '<p class="lomakkeenPalauteNegatiivinen"> Kuvat voivat olla vain jpg, jpeg, png ja gif tiedostoja.</p>';
            $kuva_virhe_1_2_1111 = 'Vain jpg, jpeg, png ja gif tiedostoja.';  
            $ilmoitus_lahtee = 0;
        }

        if ($kuvanKoko_2222 > 7400000) {
            $kuva_virhe_2_1_1111 = '<p class="lomakkeenPalauteNegatiivinen">Yhden kuvan maksimikoko on 7 Mt.</p>';
            $kuva_virhe_2_2_1111 = 'Vain alle 7 Mt:n kuvia.';
            $ilmoitus_lahtee = 0;
        }

        if ($kuvanTyyppi_2222 == '') {
            $tiedosto_II_2222 = 'oletuskuva_1234.jpg';
        }


        // Kuvan III lisäys serverille
  
        $kansio_3333 = '../kuvat/poistettavat_kuvat/';
        $kansio_II_3333 = '../kuvat/pienet_kuvat/';
        $tiedosto_III_3333 = bin2hex(openssl_random_pseudo_bytes(5)) . "_" . preg_replace("/[^a-zA-Z0-9.]/", "", basename($_FILES['fileToUpload3']['name']));
        $polku_3333 = $kansio_3333 . $tiedosto_III_3333;                                
        $polku_II_3333 = $kansio_II_3333 . $tiedosto_III_3333;

        $kuvanTyyppi_3333 = pathinfo($polku_3333,PATHINFO_EXTENSION);
        $kuvanKoko_3333 = $_FILES['fileToUpload3']['size'];
   
        if($kuvanTyyppi_3333 != 'jpg' && $kuvanTyyppi_3333 != 'JPG' 
        && $kuvanTyyppi_3333 != 'jpeg' && $kuvanTyyppi_3333 != 'JPEG'  
        && $kuvanTyyppi_3333 != 'png' && $kuvanTyyppi_3333 != 'PNG' 
        && $kuvanTyyppi_3333 != 'gif' && $kuvanTyyppi_3333 != 'GIF' 
        && $kuvanTyyppi_3333 != '') {
            $kuva_virhe_1_1_1111 = '<p class="lomakkeenPalauteNegatiivinen"> Kuvat voivat olla vain jpg, jpeg, png ja gif tiedostoja.</p>';
            $kuva_virhe_1_2_1111 = 'Vain jpg, jpeg, png ja gif tiedostoja.';  
            $ilmoitus_lahtee = 0;
        }

        if ($kuvanKoko_3333 > 7400000) {
            $kuva_virhe_2_1_1111 = '<p class="lomakkeenPalauteNegatiivinen">Yhden kuvan maksimikoko on 7 Mt.</p>';
            $kuva_virhe_2_2_1111 = 'Vain alle 7 Mt:n kuvia.';
            $ilmoitus_lahtee = 0;
        }

        if ($kuvanTyyppi_3333 == '') {
            $tiedosto_III_3333 = 'oletuskuva_1234.jpg';
        }


        // Kuvan IV lisäys serverille

        $kansio_4444 = '../kuvat/poistettavat_kuvat/';
        $kansio_II_4444 = '../kuvat/pienet_kuvat/';
        $tiedosto_IV_4444 = bin2hex(openssl_random_pseudo_bytes(5)) . "_" . preg_replace("/[^a-zA-Z0-9.]/", "", basename($_FILES['fileToUpload4']['name']));
        $polku_4444 = $kansio_4444 . $tiedosto_IV_4444;                                
        $polku_II_4444 = $kansio_II_4444 . $tiedosto_IV_4444;

        $kuvanTyyppi_4444 = pathinfo($polku_4444,PATHINFO_EXTENSION);
        $kuvanKoko_4444 = $_FILES['fileToUpload4']['size'];

        if($kuvanTyyppi_4444 != 'jpg' && $kuvanTyyppi_4444 != 'JPG' 
        && $kuvanTyyppi_4444 != 'jpeg' && $kuvanTyyppi_4444 != 'JPEG' 
        && $kuvanTyyppi_4444 != 'png' && $kuvanTyyppi_4444 != 'PNG' 
        && $kuvanTyyppi_4444 != 'gif' && $kuvanTyyppi_4444 != 'GIF' 
        && $kuvanTyyppi_4444 != '') {
            $kuva_virhe_1_1_1111 = '<p class="lomakkeenPalauteNegatiivinen"> Kuvat voivat olla vain jpg, jpeg, png ja gif tiedostoja.</p>';
            $kuva_virhe_1_2_1111 = 'Vain jpg, jpeg, png ja gif tiedostoja.';  
            $ilmoitus_lahtee = 0;
        }
 
        if ($kuvanKoko_4444 > 7400000) {
            $kuva_virhe_2_1_1111 = '<p class="lomakkeenPalauteNegatiivinen">Yhden kuvan maksimikoko on 7 Mt.</p>';
            $kuva_virhe_2_2_1111 = 'Vain alle 7 Mt:n kuvia.'; 
            $ilmoitus_lahtee = 0;
        }

        if ($kuvanTyyppi_4444 == '') {
            $tiedosto_IV_4444 = 'oletuskuva_1234.jpg';
        }


// Muodostaa yhteyden tietokantaan.
include '../includes/luo_yhteyden_tietokantaan.php';

// Lomakkeesta tietokantaan

// Muuttujien määrittely – osastot

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

$sql_II="INSERT INTO osastot (elokuvat, improvisointi, keskustelu, kirjallisuus, 
    kuvataide, kasityot, leikkiminen, liikunta, luento, musiikki, nayttelyt, 
    oppiminen, pelaaminen, politiikka, runonlausunta, sadunkerronta, tanssi, 
    tarinankerronta, teatteri, tyopaja, urheilu, uskonto, yhdessa_oleminen, 
    muut_tapahtumat, aikuiset, lapset, nuoret, seniorit, miehet, naiset, 
    elektroniikka, huonekalut, kodinkoneet, vaatteet, muut_annetaan_tavaroita, 
    liikunta_2, musiikki_2, nayttelyt_2, paikat, tilat, urheilu_2, muut_annetaan_tekemista, 
    elektroniikka_2, huonekalut_2, kodinkoneet_2, vaatteet_2, muut_pyydetaan_tavaroita, 
    liikunta_3, musiikki_3, nayttelyt_3, paikat_3, tilat_3, urheilu_3, 
    muut_pyydetaan_tekemista)
    VALUES ('$elokuvat', '$improvisointi', '$keskustelu', '$kirjallisuus',
    '$kuvataide', '$kasityot', '$leikkiminen', '$liikunta', '$luento', '$musiikki', 
    '$nayttelyt', '$oppiminen', '$pelaaminen', '$politiikka', '$runonlausunta', 
    '$sadunkerronta', '$tanssi', '$tarinankerronta', '$teatteri', '$tyopaja', 
    '$urheilu', '$uskonto', '$yhdessa_oleminen', '$muut_tapahtumat', '$aikuiset', 
    '$lapset', '$nuoret', '$seniorit', '$miehet', '$naiset', '$elektroniikka', 
    '$huonekalut', '$kodinkoneet', '$vaatteet', '$muut_annetaan_tavaroita', 
    '$liikunta_2', '$musiikki_2', '$nayttelyt_2', '$paikat', '$tilat', '$urheilu_2', 
    '$muut_annetaan_tekemista', '$elektroniikka_2', '$huonekalut_2', '$kodinkoneet_2', 
    '$vaatteet_2', '$muut_pyydetaan_tavaroita', '$liikunta_3', '$musiikki_3', 
    '$nayttelyt_3', '$paikat_3', '$tilat_3', '$urheilu_3', 
    '$muut_pyydetaan_tekemista')";

// Muuttujien määrittely – kaikki muut paitsi osastot

$ylaosasto = mysqli_real_escape_string($conn, $_POST['ylaosasto']);
           
$tapahtumaAlkaa = mysqli_real_escape_string($conn, $_POST['tapahtumaAlkaa']);
$klo_I = mysqli_real_escape_string($conn, $_POST['klo_I']);
$tapahtumaPaattyy = mysqli_real_escape_string($conn, $_POST['tapahtumaPaattyy']);
$klo_II = mysqli_real_escape_string($conn, $_POST['klo_II']);

$avoinna = mysqli_real_escape_string($conn, $_POST['avoinna']);

$paikka = mysqli_real_escape_string($conn, $_POST['paikka']);
$tapahtumanOsoite = mysqli_real_escape_string($conn, $_POST['tapahtumanOsoite']);

$otsikko = mysqli_real_escape_string($conn, $_POST['otsikko']);
$sisalto = mysqli_real_escape_string($conn, $_POST['sisalto']);

$pic1 = mysqli_real_escape_string($conn, preg_replace("/[^a-zA-Z0-9.]/", "_", $tiedosto_1111));
$pic2 = mysqli_real_escape_string($conn, preg_replace("/[^a-zA-Z0-9.]/", "_", $tiedosto_II_2222));
$pic3 = mysqli_real_escape_string($conn, preg_replace("/[^a-zA-Z0-9.]/", "_", $tiedosto_III_3333));
$pic4 = mysqli_real_escape_string($conn, preg_replace("/[^a-zA-Z0-9.]/", "_", $tiedosto_IV_4444));

$pieni_kuva_1 = mysqli_real_escape_string($conn, preg_replace("/[^a-zA-Z0-9.]/", "_", $tiedosto_1111));
$pieni_kuva_2 = mysqli_real_escape_string($conn, preg_replace("/[^a-zA-Z0-9.]/", "_", $tiedosto_II_2222));
$pieni_kuva_3 = mysqli_real_escape_string($conn, preg_replace("/[^a-zA-Z0-9.]/", "_", $tiedosto_III_3333));
$pieni_kuva_4 = mysqli_real_escape_string($conn, preg_replace("/[^a-zA-Z0-9.]/", "_", $tiedosto_IV_4444));

$nimi = mysqli_real_escape_string($conn, 'Jaetaan.net');
$jakaja = mysqli_real_escape_string($conn, $_POST['jakaja']);
$kaupunki = mysqli_real_escape_string($conn, $_POST['kaupunki']); 
$sahkoposti = mysqli_real_escape_string($conn, $_POST['sahkoposti']); 
$puhelin = mysqli_real_escape_string($conn, $_POST['puhelin']);
$nettisivu = mysqli_real_escape_string($conn, $_POST['nettisivu']);

$ilmoitusPoistuuAutomaattisesti = mysqli_real_escape_string($conn, $_POST['ilmoitusPoistuuAutomaattisesti']);

$urlKokoIlmoitus = mysqli_real_escape_string($conn, bin2hex(openssl_random_pseudo_bytes(5)));
$urlMuokkaaTaiPoista = mysqli_real_escape_string($conn, bin2hex(openssl_random_pseudo_bytes(15)));

$julkaistu = mysqli_real_escape_string($conn, 'kylla');

$suom_muoto_I = date_create_from_format("d.m.Y", $tapahtumaAlkaa);
$tapahtumaAlkaaPvm = date_format($suom_muoto_I,"Y-m-d");
 
$suom_muoto_II = date_create_from_format("d.m.Y", $tapahtumaPaattyy);
$tapahtumaPaattyyPvm = date_format($suom_muoto_II,"Y-m-d");
  
$suom_muoto_III = date_create_from_format("d.m.Y", $ilmoitusPoistuuAutomaattisesti);
$ilmoitusPoistuuAutomaattisestiPvm = date_format($suom_muoto_III,"Y-m-d");

// h_lomake eli hallinnoinin lisää ilmoitus -lomakkeelta tullut ilmoitus
$source = mysqli_real_escape_string($conn, 'h_lomake');

$julkaistu = mysqli_real_escape_string($conn, 'kylla');
  
$sql="INSERT INTO ilmoitukset (ylaosasto, tapahtumaAlkaa, klo_I, tapahtumaPaattyy, 
    klo_II, avoinna, paikka, tapahtumanOsoite, otsikko, sisalto, kuva1, kuva2, kuva3, kuva4, 
    pieni_kuva_1, pieni_kuva_2, pieni_kuva_3, pieni_kuva_4, nimi, jakaja, kaupunki, 
    sahkoposti, puhelin, nettisivu, ilmoitusPoistuuAutomaattisesti, 
    urlMuokkaaTaiPoista, urlKokoIlmoitus, source, julkaistu)
    VALUES ('$ylaosasto', '$tapahtumaAlkaaPvm', '$klo_I', '$tapahtumaPaattyyPvm', 
    '$klo_II', '$avoinna', '$paikka', '$tapahtumanOsoite', '$otsikko', '$sisalto', '$pic1', '$pic2', 
    '$pic3', '$pic4', '$pieni_kuva_1', '$pieni_kuva_2', '$pieni_kuva_3', '$pieni_kuva_4', 
    '$nimi', '$jakaja', '$kaupunki', '$sahkoposti', '$puhelin', 
    '$nettisivu', '$ilmoitusPoistuuAutomaattisestiPvm', '$urlMuokkaaTaiPoista', 
    '$urlKokoIlmoitus', '$source', '$julkaistu')";


// Varsinaiset komennot

// Tiedot tietokantaan 

if($ilmoitus_lahtee == 1) {
mysqli_query($conn, $sql);
mysqli_query($conn, $sql_II);

// Mahdolliset kuvat serverille ja ne pienennetään ja rajataan. 

    if (strpos($pic1, 'oletuskuva_1234.jpg') === false
    || strpos($pieni_kuva_1, 'oletuskuva_1234.jpg') === false) {

move_uploaded_file($_FILES['fileToUpload1']['tmp_name'], $polku_1111);

include_once("pienenna_kuva_1.php");
$target_file_1111 = $polku_1111;
$resized_file_1111 = $polku_II_1111;
$wmax_1111 = 400;
$hmax_1111 = 300;
ak_img_resize_1111($target_file_1111, $resized_file_1111, $wmax_1111, $hmax_1111, $kuvanTyyppi_1111);

$target_file_1111 = $polku_II_1111;
$thumbnail_1111 = "../kuvat/rajatut_kuvat/$tiedosto_1111";
$wthumb_1111 = 150;
$hthumb_1111 = 100;
ak_img_thumb_1111($target_file_1111, $thumbnail_1111, $wthumb_1111, $hthumb_1111, $kuvanTyyppi_1111);

}

    if (strpos($pic2, 'oletuskuva_1234.jpg') === false
    || strpos($pieni_kuva_2, 'oletuskuva_1234.jpg') === false) {

move_uploaded_file($_FILES['fileToUpload2']['tmp_name'], $polku_2222);

include_once("pienenna_kuva_2.php");
$target_file_2222 = $polku_2222;
$resized_file_2222 = $polku_II_2222;
$wmax_2222 = 400;
$hmax_2222 = 300;
ak_img_resize_2222($target_file_2222, $resized_file_2222, $wmax_2222, $hmax_2222, $kuvanTyyppi_2222);

$target_file_2222 = $polku_II_2222;
$thumbnail_2222 = "../kuvat/rajatut_kuvat/$tiedosto_II_2222";
$wthumb_2222 = 150;
$hthumb_2222 = 100;
ak_img_thumb_2222($target_file_2222, $thumbnail_2222, $wthumb_2222, $hthumb_2222, $kuvanTyyppi_2222);

    }

    if (strpos($pic3, 'oletuskuva_1234.jpg') === false
    || strpos($pieni_kuva_3, 'oletuskuva_1234.jpg') === false) {

move_uploaded_file($_FILES['fileToUpload3']['tmp_name'], $polku_3333);

include_once("pienenna_kuva_3.php");
$target_file_3333 = $polku_3333;
$resized_file_3333 = $polku_II_3333;
$wmax_3333 = 400;
$hmax_3333 = 300;
ak_img_resize_3333($target_file_3333, $resized_file_3333, $wmax_3333, $hmax_3333, $kuvanTyyppi_3333);

$target_file_3333 = $polku_II_3333;
$thumbnail_3333 = "../kuvat/rajatut_kuvat/$tiedosto_III_3333";
$wthumb_3333 = 150;
$hthumb_3333 = 100;
ak_img_thumb_3333($target_file_3333, $thumbnail_3333, $wthumb_3333, $hthumb_3333, $kuvanTyyppi_3333);

    }

    if (strpos($pic4, 'oletuskuva_1234.jpg') === false
    || strpos($pieni_kuva_4, 'oletuskuva_1234.jpg') === false) {

move_uploaded_file($_FILES['fileToUpload4']['tmp_name'], $polku_4444);
  
include_once("pienenna_kuva_4.php");
$target_file_4444 = $polku_4444;
$resized_file_4444 = $polku_II_4444;
$wmax_4444 = 400;
$hmax__4444 = 300;
ak_img_resize_4444($target_file_4444, $resized_file_4444, $wmax_4444, $hmax_4444, $kuvanTyyppi_4444);

$target_file_4444 = $polku_II_4444;
$thumbnail_4444 = "../kuvat/rajatut_kuvat/$tiedosto_IV_4444";
$wthumb_4444 = 150;
$hthumb_4444 = 100;
ak_img_thumb_4444($target_file_4444, $thumbnail_4444, $wthumb_4444, $hthumb_4444, $kuvanTyyppi_4444);

    }

?>

<!-- Palaute onnistuneesta ilmoituksen lisäyksestä. -->

<p class='lomakkeenPalautePositiivinen'>Ilmoituksesi on lisätty! <br><br>
    Saat sähköpostiisi viestin, jota kautta pääset tarkastelemaan ilmoitustasi,
    <br>muokkaamaan sitä ja poistamaan sen.<br></p>

<?php

    include '../includes/sahkoposti_ilmoittajalle.php';

}

    mysqli_close($conn);

    // Sivun yläosaan tulevat virheilmoitukset kentistä ja kuvista.

    if ($tyhja_kentta_virhe == 'Tähdellä merkityt kentät tulee täyttää.') {
        echo '<p class="lomakkeenPalauteNegatiivinen">' . $tyhja_kentta_virhe . '</p>';
    }

    if ($sahkoposti_virhe_ylos == 'Sähköposti on virheellisessä muodossa.') {
        echo '<p class="lomakkeenPalauteNegatiivinen">' . $sahkoposti_virhe_ylos . '</p>'; 
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
                
    echo $kuva_virhe_1_1_1111;
    echo $kuva_virhe_2_1_1111;
    
    }

?>

<!-- Ilmoituksenlisäyslomake -->

<form action='' method='post' enctype='multipart/form-data'>


    <label class='label_otsikko' for='ylaosasto'>
        *Yläosasto: <span class='lomakkeenPalauteNegatiivinen'><?php echo $ylaosasto_virhe; ?></span>
    </label>
    <br>
            
    <select id='lisaa_ilmoitus_valikko' class='lomake lisaa_ilmoitus_valikko' name='ylaosasto' onclick='tapahtumaKalenterit()'>

        <optgroup label='Annetaan'>
            <option value='Annetaan apua' <?php if (isset($ylaosasto) && $ylaosasto=='Annetaan apua') echo 'selected';?>>Annetaan apua</option>
            <option value='Annetaan lainaan' <?php if (isset($ylaosasto) && $ylaosasto=='Annetaan lainaan') echo 'selected';?>>Annetaan lainaan</option>
            <option value='Annetaan ruokaa' <?php if (isset($ylaosasto) && $ylaosasto=='Annetaan ruokaa') echo 'selected';?>>Annetaan ruokaa</option>
            <option value='Annetaan tavaroita' <?php if (isset($ylaosasto) && $ylaosasto=='Annetaan tavaroita') echo 'selected';?>>Annetaan tavaroita</option>
            <option value='Annetaan tekemistä' <?php if (isset($ylaosasto) && $ylaosasto=='Annetaan tekemistä') echo 'selected';?>>Annetaan tekemistä</option>
            <option value='Muut annetaan' <?php if (isset($ylaosasto) && $ylaosasto=='Muut annetaan') echo 'selected';?>>Muut annetaan</option>    
        </optgroup>

        <optgroup label='Pyydetään'>
            <option value='Pyydetään apua' <?php if (isset($ylaosasto) && $ylaosasto=='Pyydetään apua') echo 'selected';?>>Pyydetään apua</option>
            <option value='Pyydetään lainaan' <?php if (isset($ylaosasto) && $ylaosasto=='Pyydetään lainaan') echo 'selected';?>>Pyydetään lainaan</option>
            <option value='Pyydetään ruokaa' <?php if (isset($ylaosasto) && $ylaosasto=='Pyydetään ruokaa') echo 'selected';?>>Pyydetään ruokaa</option>
            <option value='Pyydetään tavaroita' <?php if (isset($ylaosasto) && $ylaosasto=='Pyydetään tavaroita') echo 'selected';?>>Pyydetään tavaroita</option>
            <option value='Pyydetään tekemistä' <?php if (isset($ylaosasto) && $ylaosasto=='Pyydetään tekemistä') echo 'selected';?>>Pyydetään tekemistä</option>
            <option value='Muut pyydetään' <?php if (isset($ylaosasto) && $ylaosasto=='Muut pyydetään') echo 'selected';?>>Muut pyydetään</option>
        </optgroup>

        <optgroup label='Tapahtumat'>
            <option value='Tapahtumat' <?php if (isset($ylaosasto) && $ylaosasto=='Tapahtumat') echo 'selected';?>>Tapahtumat</option>
        </optgroup>
            
    </select>


    <div class='kaikki_checkboxit'>        

        <div id='haku_osastot_tapahtumat'>

            <label class='label_otsikko' for='osasto_1'>
                *Osasto: <span class='lomakkeenPalauteNegatiivinen'><?php echo $osasto_virhe; ?></span>
            </label>
            <p class='lisaa_ilmoitus_alaohje'>Valitse yksi tai useampia.</p>


          <div class='kolmen_rivi_checkboxit_1_l'> 

            <div class='haku_osastot_checkbox_I_l'>
                <input type="checkbox" name="o_1" value="Elokuvat" onclick='hakuTapahtumatCheckboxKaikki_II()' <?php if (isset($_POST['o_1']) && $_POST['o_1']=='Elokuvat') echo 'checked';?>> Elokuvat<br>
                <input type="checkbox" name="o_2" value="Improvisointi" onclick='hakuTapahtumatCheckboxKaikki_II()' <?php if (isset($_POST['o_2']) && $_POST['o_2']=='Improvisointi') echo 'checked';?>> Improvisointi<br>
                <input type="checkbox" name="o_3" value="Keskustelu" onclick='hakuTapahtumatCheckboxKaikki_II()' <?php if (isset($_POST['o_3']) && $_POST['o_3']=='Keskustelu') echo 'checked';?>> Keskustelu<br>
                <input type="checkbox" name="o_4" value="Kirjallisuus" onclick='hakuTapahtumatCheckboxKaikki_II()' <?php if (isset($_POST['o_4']) && $_POST['o_4']=='Kirjallisuus') echo 'checked';?>> Kirjallisuus<br>
                <input type="checkbox" name="o_5" value="Kuvataide" onclick='hakuTapahtumatCheckboxKaikki_II()' <?php if (isset($_POST['o_5']) && $_POST['o_5']=='Kuvataide') echo 'checked';?>> Kuvataide<br>
                <input type="checkbox" name="o_6" value="Käsityöt" onclick='hakuTapahtumatCheckboxKaikki_II()' <?php if (isset($_POST['o_6']) && $_POST['o_6']=='Käsityöt') echo 'checked';?>> Käsityöt<br>
            </div>

            <div class='haku_osastot_checkbox_II_l'>
                <input type="checkbox" name="o_7" value="Leikkiminen" onclick='hakuTapahtumatCheckboxKaikki_II()' <?php if (isset($_POST['o_7']) && $_POST['o_7']=='Leikkiminen') echo 'checked';?>> Leikkiminen<br>
                <input type="checkbox" name="o_8" value="Liikunta" onclick='hakuTapahtumatCheckboxKaikki_II()' <?php if (isset($_POST['o_8']) && $_POST['o_8']=='Liikunta') echo 'checked';?>> Liikunta<br>
                <input type="checkbox" name="o_9" value="Luento" onclick='hakuTapahtumatCheckboxKaikki_II()' <?php if (isset($_POST['o_9']) && $_POST['o_9']=='Luento') echo 'checked';?>> Luento<br>
                <input type="checkbox" name="o_10" value="Musiikki" onclick='hakuTapahtumatCheckboxKaikki_II()' <?php if (isset($_POST['o_10']) && $_POST['o_10']=='Musiikki') echo 'checked';?>> Musiikki<br>
                <input type="checkbox" name="o_11" value="Näyttelyt" onclick='hakuTapahtumatCheckboxKaikki_II()' <?php if (isset($_POST['o_11']) && $_POST['o_11']=='Näyttelyt') echo 'checked';?>> Näyttelyt<br>
                <input type="checkbox" name="o_12" value="Oppiminen" onclick='hakuTapahtumatCheckboxKaikki_II()' <?php if (isset($_POST['o_12']) && $_POST['o_12']=='Oppiminen') echo 'checked';?>> Oppiminen<br>
            </div>

         </div>

         <div class='kolmen_rivi_checkboxit_2_l'> 

            <div class='haku_osastot_checkbox_III_l'>
                <input type="checkbox" name="o_13" value="Pelaaminen" onclick='hakuTapahtumatCheckboxKaikki_II()' <?php if (isset($_POST['o_13']) && $_POST['o_13']=='Pelaaminen') echo 'checked';?>> Pelaaminen<br>
                <input type="checkbox" name="o_14" value="Politiikka" onclick='hakuTapahtumatCheckboxKaikki_II()' <?php if (isset($_POST['o_14']) && $_POST['o_14']=='Politiikka') echo 'checked';?>> Politiikka<br>
                <input type="checkbox" name="o_15" value="Runonlausunta" onclick='hakuTapahtumatCheckboxKaikki_II()' <?php if (isset($_POST['o_15']) && $_POST['o_15']=='Runonlausunta') echo 'checked';?>> Runonlausunta<br>
                <input type="checkbox" name="o_16" value="Sadunkerronta" onclick='hakuTapahtumatCheckboxKaikki_II()' <?php if (isset($_POST['o_16']) && $_POST['o_16']=='Sadunkerronta') echo 'checked';?>> Sadunkerronta<br>
                <input type="checkbox" name="o_17" value="Tanssi" onclick='hakuTapahtumatCheckboxKaikki_II()' <?php if (isset($_POST['o_17']) && $_POST['o_17']=='Tanssi') echo 'checked';?>> Tanssi<br>
                <input type="checkbox" name="o_18" value="Tarinankerronta" onclick='hakuTapahtumatCheckboxKaikki_II()' <?php if (isset($_POST['o_18']) && $_POST['o_18']=='Tarinankerronta') echo 'checked';?>> Tarinankerronta<br>
            </div>

            <div class='haku_osastot_checkbox_IV_l'>
                <input type="checkbox" name="o_19" value="Teatteri" onclick='hakuTapahtumatCheckboxKaikki_II()' <?php if (isset($_POST['o_19']) && $_POST['o_19']=='Teatteri') echo 'checked';?>> Teatteri<br>
                <input type="checkbox" name="o_20" value="Työpaja" onclick='hakuTapahtumatCheckboxKaikki_II()' <?php if (isset($_POST['o_20']) && $_POST['o_20']=='Työpaja') echo 'checked';?>> Työpaja<br>
                <input type="checkbox" name="o_21" value="Urheilu" onclick='hakuTapahtumatCheckboxKaikki_II()' <?php if (isset($_POST['o_21']) && $_POST['o_21']=='Urheilu') echo 'checked';?>> Urheilu<br>
                <input type="checkbox" name="o_22" value="Uskonto" onclick='hakuTapahtumatCheckboxKaikki_II()' <?php if (isset($_POST['o_22']) && $_POST['o_22']=='Uskonto') echo 'checked';?>> Uskonto<br>
                <input type="checkbox" name="o_23" value="Yhdessäolo" onclick='hakuTapahtumatCheckboxKaikki_II()' <?php if (isset($_POST['o_23']) && $_POST['o_23']=='Yhdessäolo') echo 'checked';?>> Yhdessäolo<br>
                <input type="checkbox" name="o_24" value="Muut" onclick='hakuTapahtumatCheckboxKaikki_II()' <?php if (isset($_POST['o_24']) && $_POST['o_24']=='Muut') echo 'checked';?>> Muut<br>
            </div>

         </div>

         <div class='kolmen_rivi_checkboxit_3_l'> 

            <div class='haku_osastot_checkbox_V_l'>
                <input type="checkbox" name="o_25" value="Aikuiset" onclick='hakuTapahtumatCheckboxKaikki_II()' <?php if (isset($_POST['o_25']) && $_POST['o_25']=='Aikuiset') echo 'checked';?>> Aikuiset<br>
                <input type="checkbox" name="o_26" value="Lapset" onclick='hakuTapahtumatCheckboxKaikki_II()' <?php if (isset($_POST['o_26']) && $_POST['o_26']=='Lapset') echo 'checked';?>> Lapset<br>
                <input type="checkbox" name="o_27" value="Nuoret" onclick='hakuTapahtumatCheckboxKaikki_II()' <?php if (isset($_POST['o_27']) && $_POST['o_27']=='Nuoret') echo 'checked';?>> Nuoret<br>
                <input type="checkbox" name="o_28" value="Seniorit" onclick='hakuTapahtumatCheckboxKaikki_II()' <?php if (isset($_POST['o_28']) && $_POST['o_28']=='Seniorit') echo 'checked';?>> Seniorit<br>
                <input type="checkbox" name="o_29" value="Miehet" onclick='hakuTapahtumatCheckboxKaikki_II()' <?php if (isset($_POST['o_29']) && $_POST['o_29']=='Miehet') echo 'checked';?>> Miehet<br>
                <input type="checkbox" name="o_30" value="Naiset" onclick='hakuTapahtumatCheckboxKaikki_II()' <?php if (isset($_POST['o_30']) && $_POST['o_30']=='Naiset') echo 'checked';?>> Naiset<br>
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
            <p class='lisaa_ilmoitus_alaohje'>Valitse yksi tai useampia.</p>

            <div class='haku_osastot_checkbox_IX_l'>
                <input type="checkbox" name="o_401" value="Elektroniikka" onclick='hakuAnnetaanTavaroitaCheckboxKaikki_II()' <?php if (isset($_POST['o_401']) && $_POST['o_401']=='Elektroniikka') { echo 'checked'; } ?>> Elektroniikka<br>
                <input type="checkbox" name="o_402" value="Huonekalut" onclick='hakuAnnetaanTavaroitaCheckboxKaikki_II()' <?php if (isset($_POST['o_402']) && $_POST['o_402']=='Huonekalut') { echo 'checked'; } ?>> Huonekalut<br>
                <input type="checkbox" name="o_403" value="Kodinkoneet" onclick='hakuAnnetaanTavaroitaCheckboxKaikki_II()' <?php if (isset($_POST['o_403']) && $_POST['o_403']=='Kodinkoneet') { echo 'checked'; } ?>> Kodinkoneet<br>
                <input type="checkbox" name="o_404" value="Vaatteet" onclick='hakuAnnetaanTavaroitaCheckboxKaikki_II()' <?php if (isset($_POST['o_404']) && $_POST['o_404']=='Vaatteet') { echo 'checked'; } ?>> Vaatteet<br>
                <input type="checkbox" name="o_405" value="Muut" onclick='hakuAnnetaanTavaroitaCheckboxKaikki_II()' <?php if (isset($_POST['o_405']) && $_POST['o_405']=='Muut') { echo 'checked'; } ?>> Muut<br>
            </div>

            </div>

        <div id='haku_osastot_annetaan_tekemista'>

            <label class='label_otsikko' for='osasto_1'>
                *Osasto: <span class='lomakkeenPalauteNegatiivinen'><?php echo $osasto_virhe; ?></span>
            </label>
            <p class='lisaa_ilmoitus_alaohje'>Valitse yksi tai useampia.</p>

            <div class='haku_osastot_checkbox_IX_II_l'>
                <input type="checkbox" name="o_451" value="Liikunta" onclick='hakuAnnetaanTekemistaCheckboxKaikki_II()' <?php if (isset($_POST['o_451']) && $_POST['o_451']=='Liikunta') echo 'checked';?>> Liikunta<br>
                <input type="checkbox" name="o_452" value="Musiikki" onclick='hakuAnnetaanTekemistaCheckboxKaikki_II()' <?php if (isset($_POST['o_452']) && $_POST['o_452']=='Musiikki') echo 'checked';?>> Musiikki<br>
                <input type="checkbox" name="o_453" value="Näyttelyt" onclick='hakuAnnetaanTekemistaCheckboxKaikki_II()' <?php if (isset($_POST['o_453']) && $_POST['o_453']=='Näyttelyt') echo 'checked';?>> Näyttelyt<br>
                <input type="checkbox" name="o_454" value="Paikat" onclick='hakuAnnetaanTekemistaCheckboxKaikki_II()' <?php if (isset($_POST['o_454']) && $_POST['o_454']=='Paikat') echo 'checked';?>> Paikat<br>
                <input type="checkbox" name="o_455" value="Tilat" onclick='hakuAnnetaanTekemistaCheckboxKaikki_II()' <?php if (isset($_POST['o_455']) && $_POST['o_455']=='Tilat') echo 'checked';?>> Tilat<br>
                <input type="checkbox" name="o_456" value="Urheilu" onclick='hakuAnnetaanTekemistaCheckboxKaikki_II()' <?php if (isset($_POST['o_456']) && $_POST['o_456']=='Urheilu') echo 'checked';?>> Urheilu<br>
            </div>

            <div class='haku_osastot_checkbox_IX_II_l'>    
                <input type="checkbox" name="o_457" value="Muut" onclick='hakuAnnetaanTavaroitaCheckboxKaikki_II()' <?php if (isset($_POST['o_457']) && $_POST['o_457']=='Muut') { echo 'checked'; } ?>> Muut<br>
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
            <p class='lisaa_ilmoitus_alaohje'>Valitse yksi tai useampia.</p>

            <div class='haku_osastot_checkbox_XIV_l'>
                <input type="checkbox" name="o_901" value="Elektroniikka" onclick='hakuPyydetaanTavaroitaCheckboxKaikki_II()' <?php if (isset($_POST['o_901']) && $_POST['o_901']=='Elektroniikka') { echo 'checked'; } ?>> Elektroniikka<br>
                <input type="checkbox" name="o_902" value="Huonekalut" onclick='hakuPyydetaanTavaroitaCheckboxKaikki_II()' <?php if (isset($_POST['o_902']) && $_POST['o_902']=='Huonekalut') { echo 'checked'; } ?>> Huonekalut<br>
                <input type="checkbox" name="o_903" value="Kodinkoneet" onclick='hakuPyydetaanTavaroitaCheckboxKaikki_II()' <?php if (isset($_POST['o_903']) && $_POST['o_903']=='Kodinkoneet') { echo 'checked'; } ?>> Kodinkoneet<br>
                <input type="checkbox" name="o_904" value="Vaatteet" onclick='hakuPyydetaanTavaroitaCheckboxKaikki_II()' <?php if (isset($_POST['o_904']) && $_POST['o_904']=='Vaatteet') { echo 'checked'; } ?>> Vaatteet<br>
                <input type="checkbox" name="o_905" value="Muut" onclick='hakuAnnetaanTavaroitaCheckboxKaikki_II()' <?php if (isset($_POST['o_905']) && $_POST['o_905']=='Muut') { echo 'checked'; } ?>> Muut<br>        
            </div>

        </div>

        <div id='haku_osastot_pyydetaan_tekemista'>

            <label class='label_otsikko' for='osasto_1'>
                *Osasto: <span class='lomakkeenPalauteNegatiivinen'><?php echo $osasto_virhe; ?></span>
            </label>
            <p class='lisaa_ilmoitus_alaohje'>Valitse yksi tai useampia.</p>

            <div class='haku_osastot_checkbox_XIV_II_l'>
                <input type="checkbox" name="o_951" value="Liikunta" onclick='hakuPyydetaanTekemistaCheckboxKaikki_II()' <?php if (isset($_POST['o_951']) && $_POST['o_951']=='Liikunta') echo 'checked';?>> Liikunta<br>
                <input type="checkbox" name="o_952" value="Musiikki" onclick='hakuPyydetaanTekemistaCheckboxKaikki_II()' <?php if (isset($_POST['o_952']) && $_POST['o_952']=='Musiikki') echo 'checked';?>> Musiikki<br>
                <input type="checkbox" name="o_953" value="Näyttelyt" onclick='hakuPyydetaanTekemistaCheckboxKaikki_II()' <?php if (isset($_POST['o_953']) && $_POST['o_953']=='Näyttelyt') echo 'checked';?>> Näyttelyt<br>
                <input type="checkbox" name="o_954" value="Paikat" onclick='hakuPyydetaanTekemistaCheckboxKaikki_II()' <?php if (isset($_POST['o_954']) && $_POST['o_954']=='Paikat') echo 'checked';?>> Paikat<br>
                <input type="checkbox" name="o_955" value="Tilat" onclick='hakuPyydetaanTekemistaCheckboxKaikki_II()' <?php if (isset($_POST['o_955']) && $_POST['o_955']=='Tilat') echo 'checked';?>> Tilat<br>
                <input type="checkbox" name="o_956" value="Urheilu" onclick='hakuPyydetaanTekemistaCheckboxKaikki_II()' <?php if (isset($_POST['o_956']) && $_POST['o_956']=='Urheilu') echo 'checked';?>> Urheilu<br>
            </div>    

            <div class='haku_osastot_checkbox_XIV_III_l'>
                <input type="checkbox" name="o_957" value="Muut" onclick='hakuAnnetaanTavaroitaCheckboxKaikki_II()' <?php if (isset($_POST['o_957']) && $_POST['o_957']=='Muut') { echo 'checked'; } ?>> Muut<br>        
            </div>

        </div>

        <div id='haku_osastot_muut_pyydetaan'>

            <div class='haku_osastot_checkbox_XV_l'>

            </div>

        </div>

    </div>    

    <div id='tapahtuma_kalenterit'>          


        <label id='label_otsikko_tapahtuma_alkaa' class='label_otsikko' for='tapahtumaAlkaa'>
            Tapahtuma alkaa: <br>*Pvm: <span class='lomakkeenPalauteNegatiivinen'><?php echo $tapahtumaAlkaa_virhe; ?></span>
        </label> 
        <p class='lisaa_ilmoitus_alaohje'>Maks. yksi vuosi.</p> 
        <input id='datepicker' class='lisaa_ilmoitus_lomake' type='text' name='tapahtumaAlkaa' placeholder='pp.kk.vvvv' maxlength='10' value='<?php echo $_POST['tapahtumaAlkaa'];?>'> 


        <label class='label_otsikko' for='klo_I'>
            *Klo: <span class='lomakkeenPalauteNegatiivinen'><?php echo $klo_I_virhe; ?></span>
        </label>
        <br>
        <select id='alkaa_klo_I' class='lisaa_ilmoitus_valikko' name='klo_I'>

                <option value=''>
                </option>

            <optgroup label='Klo'>
                <option value='00:00' <?php if (isset($klo_I) && $klo_I=='00:00') echo 'selected';?>>00:00</option>
                <option value='00:30' <?php if (isset($klo_I) && $klo_I=='00:30') echo 'selected';?>>00:30</option>
                <option value='01:00' <?php if (isset($klo_I) && $klo_I=='01:00') echo 'selected';?>>01:00</option>
                <option value='01:30' <?php if (isset($klo_I) && $klo_I=='01:30') echo 'selected';?>>01:30</option>
                <option value='02:00' <?php if (isset($klo_I) && $klo_I=='02:00') echo 'selected';?>>02:00</option>
                <option value='02:30' <?php if (isset($klo_I) && $klo_I=='02:30') echo 'selected';?>>02:30</option>
                <option value='03:00' <?php if (isset($klo_I) && $klo_I=='03:00') echo 'selected';?>>03:00</option>
                <option value='03:30' <?php if (isset($klo_I) && $klo_I=='03:30') echo 'selected';?>>03:30</option>
                <option value='04:00' <?php if (isset($klo_I) && $klo_I=='04:00') echo 'selected';?>>04:00</option>
                <option value='04:30' <?php if (isset($klo_I) && $klo_I=='04:30') echo 'selected';?>>04:30</option>
                <option value='05:00' <?php if (isset($klo_I) && $klo_I=='05:00') echo 'selected';?>>05:00</option>
                <option value='05:30' <?php if (isset($klo_I) && $klo_I=='05:30') echo 'selected';?>>05:30</option>
                <option value='06:00' <?php if (isset($klo_I) && $klo_I=='06:00') echo 'selected';?>>06:00</option>
                <option value='06:30' <?php if (isset($klo_I) && $klo_I=='06:30') echo 'selected';?>>06:30</option>
                <option value='07:00' <?php if (isset($klo_I) && $klo_I=='07:00') echo 'selected';?>>07:00</option>
                <option value='07:30' <?php if (isset($klo_I) && $klo_I=='07:30') echo 'selected';?>>07:30</option>
                <option value='08:00' <?php if (isset($klo_I) && $klo_I=='08:00') echo 'selected';?>>08:00</option>
                <option value='08:30' <?php if (isset($klo_I) && $klo_I=='08:30') echo 'selected';?>>08:30</option>
                <option value='09:00' <?php if (isset($klo_I) && $klo_I=='09:00') echo 'selected';?>>09:00</option>
                <option value='09:30' <?php if (isset($klo_I) && $klo_I=='09:30') echo 'selected';?>>09:30</option>
                <option value='10:00' <?php if (isset($klo_I) && $klo_I=='10:00') echo 'selected';?>>10:00</option>
                <option value='10:30' <?php if (isset($klo_I) && $klo_I=='10:30') echo 'selected';?>>10:30</option>
                <option value='11:00' <?php if (isset($klo_I) && $klo_I=='11:00') echo 'selected';?>>11:00</option>
                <option value='11:30' <?php if (isset($klo_I) && $klo_I=='11:30') echo 'selected';?>>11:30</option>
                <option value='12:00' <?php if (isset($klo_I) && $klo_I=='12:00') echo 'selected';?>>12:00</option>
                <option value='12:30' <?php if (isset($klo_I) && $klo_I=='12:30') echo 'selected';?>>12:30</option>
                <option value='13:00' <?php if (isset($klo_I) && $klo_I=='13:00') echo 'selected';?>>13:00</option>
                <option value='13:30' <?php if (isset($klo_I) && $klo_I=='13:30') echo 'selected';?>>13:30</option>
                <option value='14:00' <?php if (isset($klo_I) && $klo_I=='14:00') echo 'selected';?>>14:00</option>
                <option value='14:30' <?php if (isset($klo_I) && $klo_I=='14:30') echo 'selected';?>>14:30</option>
                <option value='15:00' <?php if (isset($klo_I) && $klo_I=='15:00') echo 'selected';?>>15:00</option>
                <option value='15:30' <?php if (isset($klo_I) && $klo_I=='15:30') echo 'selected';?>>15:30</option>
                <option value='16:00' <?php if (isset($klo_I) && $klo_I=='16:00') echo 'selected';?>>16:00</option>
                <option value='16:30' <?php if (isset($klo_I) && $klo_I=='16:30') echo 'selected';?>>16:30</option>
                <option value='17:00' <?php if (isset($klo_I) && $klo_I=='17:00') echo 'selected';?>>17:00</option>
                <option value='17:30' <?php if (isset($klo_I) && $klo_I=='17:30') echo 'selected';?>>17:30</option>
                <option value='18:00' <?php if (isset($klo_I) && $klo_I=='18:00') echo 'selected';?>>18:00</option>
                <option value='18:30' <?php if (isset($klo_I) && $klo_I=='18:30') echo 'selected';?>>18:30</option>
                <option value='19:00' <?php if (isset($klo_I) && $klo_I=='19:00') echo 'selected';?>>19:00</option>
                <option value='19:30' <?php if (isset($klo_I) && $klo_I=='19:30') echo 'selected';?>>19:30</option>
                <option value='20:00' <?php if (isset($klo_I) && $klo_I=='20:00') echo 'selected';?>>20:00</option>
                <option value='20:30' <?php if (isset($klo_I) && $klo_I=='20:30') echo 'selected';?>>20:30</option>
                <option value='21:00' <?php if (isset($klo_I) && $klo_I=='21:00') echo 'selected';?>>21:00</option>
                <option value='21:30' <?php if (isset($klo_I) && $klo_I=='21:30') echo 'selected';?>>21:30</option>
                <option value='22:00' <?php if (isset($klo_I) && $klo_I=='22:00') echo 'selected';?>>22:00</option>
                <option value='22:30' <?php if (isset($klo_I) && $klo_I=='22:30') echo 'selected';?>>22:30</option>
                <option value='23:00' <?php if (isset($klo_I) && $klo_I=='23:00') echo 'selected';?>>23:00</option>
                <option value='23:30' <?php if (isset($klo_I) && $klo_I=='23:30') echo 'selected';?>>23:30</option>
            </optgroup>

        </select>
    

        <label class='label_otsikko' for='tapahtumaPaattyy'>
            Tapahtuma päättyy: <br>Pvm: <span class='lomakkeenPalauteNegatiivinen'><?php echo $tapahtumaPaattyy_virhe; ?></span>
        </label> 
        <br>
        <p class='lisaa_ilmoitus_alaohje'>Maks. yksi vuosi.</p> 
        <input id='datepicker_II' class='lisaa_ilmoitus_lomake' type='text' name='tapahtumaPaattyy' placeholder='pp.kk.vvvv' maxlength='10' value='<?php echo $_POST['tapahtumaPaattyy'];?>'> 


        <label class='label_otsikko' for='klo_II'>
            Klo: <span class='lomakkeenPalauteNegatiivinen'><?php echo $klo_II_virhe; ?></span>
        </label>
        <br>
        <select id='paattyy_klo_II' class='lisaa_ilmoitus_valikko' name='klo_II'>

                <option value=''>
                </option>

            <optgroup label='Klo'>
                <option value='00:00' <?php if (isset($klo_II) && $klo_II=='00:00') echo 'selected';?>>00:00</option>
                <option value='00:30' <?php if (isset($klo_II) && $klo_II=='00:30') echo 'selected';?>>00:30</option>
                <option value='01:00' <?php if (isset($klo_II) && $klo_II=='01:00') echo 'selected';?>>01:00</option>
                <option value='01:30' <?php if (isset($klo_II) && $klo_II=='01:30') echo 'selected';?>>01:30</option>
                <option value='02:00' <?php if (isset($klo_II) && $klo_II=='02:00') echo 'selected';?>>02:00</option>
                <option value='02:30' <?php if (isset($klo_II) && $klo_II=='02:30') echo 'selected';?>>02:30</option>
                <option value='03:00' <?php if (isset($klo_II) && $klo_II=='03:00') echo 'selected';?>>03:00</option>
                <option value='03:30' <?php if (isset($klo_II) && $klo_II=='03:30') echo 'selected';?>>03:30</option>
                <option value='04:00' <?php if (isset($klo_II) && $klo_II=='04:00') echo 'selected';?>>04:00</option>
                <option value='04:30' <?php if (isset($klo_II) && $klo_II=='04:30') echo 'selected';?>>04:30</option>
                <option value='05:00' <?php if (isset($klo_II) && $klo_II=='05:00') echo 'selected';?>>05:00</option>
                <option value='05:30' <?php if (isset($klo_II) && $klo_II=='05:30') echo 'selected';?>>05:30</option>
                <option value='06:00' <?php if (isset($klo_II) && $klo_II=='06:00') echo 'selected';?>>06:00</option>
                <option value='06:30' <?php if (isset($klo_II) && $klo_II=='06:30') echo 'selected';?>>06:30</option>
                <option value='07:00' <?php if (isset($klo_II) && $klo_II=='07:00') echo 'selected';?>>07:00</option>
                <option value='07:30' <?php if (isset($klo_II) && $klo_II=='07:30') echo 'selected';?>>07:30</option>
                <option value='08:00' <?php if (isset($klo_II) && $klo_II=='08:00') echo 'selected';?>>08:00</option>
                <option value='08:30' <?php if (isset($klo_II) && $klo_II=='08:30') echo 'selected';?>>08:30</option>
                <option value='09:00' <?php if (isset($klo_II) && $klo_II=='09:00') echo 'selected';?>>09:00</option>
                <option value='09:30' <?php if (isset($klo_II) && $klo_II=='09:30') echo 'selected';?>>09:30</option>
                <option value='10:00' <?php if (isset($klo_II) && $klo_II=='10:00') echo 'selected';?>>10:00</option>
                <option value='10:30' <?php if (isset($klo_II) && $klo_II=='10:30') echo 'selected';?>>10:30</option>    
                <option value='11:00' <?php if (isset($klo_II) && $klo_II=='11:00') echo 'selected';?>>11:00</option>
                <option value='11:30' <?php if (isset($klo_II) && $klo_II=='11:30') echo 'selected';?>>11:30</option>
                <option value='12:00' <?php if (isset($klo_II) && $klo_II=='12:00') echo 'selected';?>>12:00</option>
                <option value='12:30' <?php if (isset($klo_II) && $klo_II=='12:30') echo 'selected';?>>12:30</option>
                <option value='13:00' <?php if (isset($klo_II) && $klo_II=='13:00') echo 'selected';?>>13:00</option>
                <option value='13:30' <?php if (isset($klo_II) && $klo_II=='13:30') echo 'selected';?>>13:30</option>
                <option value='14:00' <?php if (isset($klo_II) && $klo_II=='14:00') echo 'selected';?>>14:00</option>
                <option value='14:30' <?php if (isset($klo_II) && $klo_II=='14:30') echo 'selected';?>>14:30</option>
                <option value='15:00' <?php if (isset($klo_II) && $klo_II=='15:00') echo 'selected';?>>15:00</option>
                <option value='15:30' <?php if (isset($klo_II) && $klo_II=='15:30') echo 'selected';?>>15:30</option>
                <option value='16:00' <?php if (isset($klo_II) && $klo_II=='16:00') echo 'selected';?>>16:00</option>
                <option value='16:30' <?php if (isset($klo_II) && $klo_II=='16:30') echo 'selected';?>>16:30</option>
                <option value='17:00' <?php if (isset($klo_II) && $klo_II=='17:00') echo 'selected';?>>17:00</option>
                <option value='17:30' <?php if (isset($klo_II) && $klo_II=='17:30') echo 'selected';?>>17:30</option>
                <option value='18:00' <?php if (isset($klo_II) && $klo_II=='18:00') echo 'selected';?>>18:00</option>
                <option value='18:30' <?php if (isset($klo_II) && $klo_II=='18:30') echo 'selected';?>>18:30</option>
                <option value='19:00' <?php if (isset($klo_II) && $klo_II=='19:00') echo 'selected';?>>19:00</option>
                <option value='19:30' <?php if (isset($klo_II) && $klo_II=='19:30') echo 'selected';?>>19:30</option>
                <option value='20:00' <?php if (isset($klo_II) && $klo_II=='20:00') echo 'selected';?>>20:00</option>
                <option value='20:30' <?php if (isset($klo_II) && $klo_II=='20:30') echo 'selected';?>>20:30</option>
                <option value='21:00' <?php if (isset($klo_II) && $klo_II=='21:00') echo 'selected';?>>21:00</option>
                <option value='21:30' <?php if (isset($klo_II) && $klo_II=='21:30') echo 'selected';?>>21:30</option>
                <option value='22:00' <?php if (isset($klo_II) && $klo_II=='22:00') echo 'selected';?>>22:00</option>
                <option value='22:30' <?php if (isset($klo_II) && $klo_II=='22:30') echo 'selected';?>>22:30</option>
                <option value='23:00' <?php if (isset($klo_II) && $klo_II=='23:00') echo 'selected';?>>23:00</option>
                <option value='23:30' <?php if (isset($klo_II) && $klo_II=='23:30') echo 'selected';?>>23:30</option>
            </optgroup>

        </select>


      </div>

      <script>tapahtumaKalenterit()</script>                


            <div id='lisaa_ilmoitus_avoinna'>

            <label class='label_otsikko' for='avoinna'>
                Avoinna: <span class='lomakkeenPalauteNegatiivinen'><?php echo $avoinna_virhe; ?></span>
            </label> 
            <br>
            <textarea id='avoinna_sisalto' class='lisaa_ilmoitus_textarea' name='avoinna' rows='3' cols='50' maxlength='1000'><?php echo $_POST['avoinna'];?></textarea>

            </div>


            <?php 

            if (!isset($ylaosasto)) {
                echo '<script>avoinna_nakyy()</script>'; 
            } 


            if (isset($ylaosasto) && $ylaosasto != 'Tapahtumat') {
                echo '<script>avoinna_nakyy()</script>'; 
            } 

            ?>


                <label id='label_paikka' class='label_otsikko' for='paikka'>
                    Paikka: <span class='lomakkeenPalauteNegatiivinen'><?php echo $paikka_virhe; ?></span>
                </label> 
                <br> 
                <input class='lisaa_ilmoitus_lomake' type='text' name='paikka' placeholder='Esim. Kanneltalo, Teatteri Kallio...' maxlength='255' value='<?php echo $_POST["paikka"];?>'>


                <label id='label_osoite' class='label_otsikko' for='tapahtumanOsoite'>
                    Katuosoite: <span class='lomakkeenPalauteNegatiivinen'><?php echo $tapahtumanOsoite_virhe; ?></span>
                </label> 
                <br> 
                <input class='lisaa_ilmoitus_lomake' type='text' name='tapahtumanOsoite' placeholder='Esim. Klaneettitie 5' maxlength='255' value='<?php echo $_POST["tapahtumanOsoite"];?>'>


        <label class='label_otsikko' for='kaupunki'>
        *Kaupunki: <span class='lomakkeenPalauteNegatiivinen'><?php echo $kaupunki_virhe; ?></span>
    </label>
    <br>
    <p class='lisaa_ilmoitus_alaohje'>Missä tapahtuma, lainattava tavara tai muu 
        jaettava asia on.</p>

    <select class='lisaa_ilmoitus_valikko' name='kaupunki'>

        <optgroup label='Kaupunki'>
            <option value='Espoo' <?php if (isset($kaupunki) && $kaupunki=='Espoo') echo 'selected';?>>Espoo</option>
            <option value='Helsinki' <?php if (isset($kaupunki) && $kaupunki=='Helsinki') echo 'selected';?>>Helsinki</option> 
            <option value='Kauniainen' <?php if (isset($kaupunki) && $kaupunki=='Kauniainen') echo 'selected';?>>Kauniainen</option>
            <option value='Vantaa' <?php if (isset($kaupunki) && $kaupunki=='Vantaa') echo 'selected';?>>Vantaa</option>
        </optgroup>

    </select>


    <label class='label_otsikko' for='otsikko'>
    *Otsikko: <span class='lomakkeenPalauteNegatiivinen'><?php echo $otsikko_virhe; ?></span>
    </label> 
    <br> 
    <input class='lisaa_ilmoitus_lomake' type='text' name='otsikko' maxlength='255' value='<?php echo $_POST['otsikko'];?>'> 
 

    <label class='label_otsikko' for='sisalto'>
        Sisältö: <span class='lomakkeenPalauteNegatiivinen'><?php echo $sisalto_virhe; ?></span>
    </label> 
    <br>
    <textarea class='lisaa_ilmoitus_textarea' name='sisalto' rows='7' cols='50' maxlength='10000'><?php echo $_POST['sisalto'];?></textarea>
 

    <label class='label_otsikko' for='fileToUpload'>
        Kuva: <span class='lomakkeenPalauteNegatiivinen'><?php echo $kuva_virhe_1_2_1111 . ' ' . $kuva_virhe_2_2_1111; ?></span>
    </label>
    <br> 
    <p class='lisaa_ilmoitus_alaohje'>Vain jpg, jpeg, png ja gif tiedostoja.</p>
    <p class='lisaa_ilmoitus_alaohje'>Vain alle 7 Mt:n kuvia.</p>

    <input class='lisaa_ilmoitus_lomake' type='file' name='fileToUpload1' value='<?php echo $_FILES["fileToUpload1"];?>'>
    <input class='lisaa_ilmoitus_lomake' type='file' name='fileToUpload2' value='<?php echo $_FILES["fileToUpload2"];?>'>
    <br>
    <input class='lisaa_ilmoitus_lomake' type='file' name='fileToUpload3' value='<?php echo $_FILES["fileToUpload3"];?>'>
    <input class='lisaa_ilmoitus_lomake' type='file' name='fileToUpload4' value='<?php echo $_FILES["fileToUpload4"];?>'>


    <p class='lomakkeenPalauteNegatiivinen2'>Huomaa!<br><br>Ilmoittajan nimeksi tulee
        automaattisesti Jaetaan.net.<br>Tätä ei voi muuttaa.</p>


    <label class='label_otsikko' for='jakaja'>
        *Jakaja: <span class='lomakkeenPalauteNegatiivinen'><?php echo $jakaja_virhe; ?></span>
    </label>
    <br> 
    <p class='lisaa_ilmoitus_alaohje'>Varsinainen jakaja eli tapahtuman järjestäjä, 
        tavaran lainaaja tms.</p>
    <input class='lisaa_ilmoitus_lomake' type='text' name='jakaja' placeholder='Esim. Kallion Kulttuuriverkosto' maxlength='255' value='<?php echo $_POST['jakaja'];?>'>


    <label class='label_otsikko' for='sahkoposti'>
        *Sähköposti: <span class='lomakkeenPalauteNegatiivinen'><?php echo $sahkoposti_virhe; ?></span>
    </label>
    <br>
    <p class='lisaa_ilmoitus_alaohje'>Jakajan sähköpostiosoite.</p>

    <p class='lisaa_ilmoitus_alaohje'>Jos se ei ole tiedossa, kirjoita tähän 
        kenttään info@jaetaan.net.</p>
    <input class='lisaa_ilmoitus_lomake' type='text' name='sahkoposti' placeholder='esimerkki@esimerkki.net' maxlength='255' value='<?php echo $_POST['sahkoposti'];?>'>
 

    <label class='label_otsikko' for='puhelin'>
        Puhelin: <span class='lomakkeenPalauteNegatiivinen'><?php echo $puhelin_virhe; ?></span>
    </label> 
    <br>
    <p class='lisaa_ilmoitus_alaohje'>Jakajan puhelin.</p>  
    <input class='lisaa_ilmoitus_lomake' type='text' name='puhelin' maxlength='75' value='<?php echo $_POST['puhelin'];?>'>


    <label class='label_otsikko' for='nettisivu'>
        Nettisivu: <span class='lomakkeenPalauteNegatiivinen'><?php echo $nettisivu_virhe; ?></span>
    </label> 
    <br> 
    <p class='lisaa_ilmoitus_alaohje'>Jakajan nettisivu.</p>  
    <input class='lisaa_ilmoitus_lomake' type='text' placeholder='https://www.esimerkki.net' name='nettisivu' maxlength='255' value='<?php echo $_POST['nettisivu'];?>'>
   

    <label class='label_otsikko' for='ilmoitusPoistuuAutomaattisesti'>
        Ilmoitus poistuu automaattisesti: <span class='lomakkeenPalauteNegatiivinen'><?php echo $ilmoitusPoistuuAutomaattisesti_virhe; ?></span>
    </label> 
    <br>
    <p class='lisaa_ilmoitus_alaohje'>Ilmoitus poistuu automaattisesti valitsemanasi 
        päivänä klo 02.00.</p>
    <p class='lisaa_ilmoitus_alaohje'>Maks. yksi vuosi.</p> 
    <p class='lisaa_ilmoitus_alaohje'>Jos ilmoitus on pysyvä, jätä tämä 
        kenttä tyhjäksi.</p>
    <input id='datepicker_III' class='lisaa_ilmoitus_lomake' type='text' placeholder='pp.kk.vvvv' name='ilmoitusPoistuuAutomaattisesti' maxlength='10' value='<?php echo $_POST['ilmoitusPoistuuAutomaattisesti'];?>'> 

    <input id='lisaa_ilmoitus_nappi' type='submit' value='Lähetä ilmoitus'>

</form>

</div>


</body>
</html>
