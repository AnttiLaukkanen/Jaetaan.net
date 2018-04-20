<!DOCTYPE html>
<html>


<head>

    <title>Vaihda tai poista kuvia – Jaetaan.net</title>

    <link rel='stylesheet' type='text/css' href='../muotoilu.css'>
 
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta charset='UTF-8'>

    <meta name="robots" content="noindex">
 
    <script src='../toiminnallisuuksia.js'></script>


</head>


<body>

<div class='keski_osa'>

  <h1 class="lisaa_ilmoitus_otsikko">Vaihda tai poista kuviasi</h1>
  <p class='lisaa_ilmoitus_alaohje'>Jos haluat vaihtaa jonkin nykyisen kuvasi, valitse tiedosto ja klikkaa 
    Vaihda kuva -nappia.
  </p>
  <br>
  <p class='lisaa_ilmoitus_alaohje'>Vain jpg, jpeg, png ja gif tiedostoja.
  </p>
  <p class='lisaa_ilmoitus_alaohje'>Vain alle 7 Mt:n kuvia. 
  </p>
  <br>
  <p class='lisaa_ilmoitus_alaohje'>Jos haluat poistaa jonkin nykyisen kuvasi, klikkaa Poista kuva -nappia. 
  </p>
  <br>

  <p class='lisaa_ilmoitus_alaohje'>Kun olet valmis, sulje tämä ikkuna.</p>

  <br>
  <br>

<?php

if (isset($_POST['submit_1'])) {

$ilmoitus_lahtee = 1;

// Muuttujien määrittely

$kansio_1111 = '../kuvat/poistettavat_kuvat/';
$kansio_II_1111 = '../kuvat/pienet_kuvat/';
$tiedosto_1111 = bin2hex(openssl_random_pseudo_bytes(5)) . "_" . preg_replace("/[^a-zA-Z0-9.]/", "", basename($_FILES['fileToUpload_1']['name']));
$polku_1111 = $kansio_1111 . $tiedosto_1111;                                
$polku_II_1111 = $kansio_II_1111 . $tiedosto_1111;

$kuvanTyyppi_1111 = pathinfo($polku_1111,PATHINFO_EXTENSION);
$kuvanKoko_1111 = $_FILES['fileToUpload_1']['size'];

if($kuvanTyyppi_1111 != 'jpg' && $kuvanTyyppi_1111 != 'JPG' 
  && $kuvanTyyppi_1111 != 'jpeg' && $kuvanTyyppi_1111 != 'JPEG' 
  && $kuvanTyyppi_1111 != 'png' && $kuvanTyyppi_1111 != 'PNG' 
  && $kuvanTyyppi_1111 != 'gif' && $kuvanTyyppi_1111 != 'GIF' 
  && $kuvanTyyppi_1111 != '') {

$kuva_virhe_1_1_1111 = '<p class="lomakkeenPalauteNegatiivinen">Kuvat voivat olla vain jpg, jpeg, png ja gif tiedostoja.</p>';
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

// Muodostaa yhteyden tietokantaan.

include '../includes/luo_yhteyden_tietokantaan.php';

// Lomakkeesta tietokantaan

if($ilmoitus_lahtee == 1) {

$pic1 = mysqli_real_escape_string($conn, preg_replace("/[^a-zA-Z0-9.]/", "_", $tiedosto_1111));
$pieni_kuva_1 = mysqli_real_escape_string($conn, preg_replace("/[^a-zA-Z0-9.]/", "_", $tiedosto_1111));

$urlMuokkaaTaiPoista = mysqli_real_escape_string($conn, $_GET['urlMuokkaaTaiPoista']);

if (preg_match('/[^a-zA-Z0-9#]/', $urlMuokkaaTaiPoista)) {
  die ('Ilmoitusta ei löydy.');
}

$sql = "SELECT * FROM ilmoitukset WHERE urlMuokkaaTaiPoista='$urlMuokkaaTaiPoista'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$kuva1 = '../kuvat/pienet_kuvat/';
$kuva1_1 = $row['kuva1'];
$kuva1_2 = $kuva1 . $kuva1_1;

if ($kuva1_1 != 'oletuskuva_1234.jpg') {

unlink($kuva1_2);

}

$kuva1 = '../kuvat/rajatut_kuvat/';
$kuva1_1 = $row['pieni_kuva_1'];
$kuva1_2 = $kuva1 . $kuva1_1;

if ($kuva1_1 != 'oletuskuva_1234.jpg') {

unlink($kuva1_2);

}

$sql="UPDATE ilmoitukset 
      SET kuva1='$pic1', pieni_kuva_1 ='$pieni_kuva_1'
      WHERE urlMuokkaaTaiPoista='$urlMuokkaaTaiPoista'";


mysqli_query($conn, $sql);

    if (strpos($pic1, 'oletuskuva_1234.jpg') === false
    || strpos($pieni_kuva_1, 'oletuskuva_1234.jpg') === false) {

move_uploaded_file($_FILES['fileToUpload_1']['tmp_name'], $polku_1111);

// ---------- Include Universal Image Resizing Function --------
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

?>
<p class='lomakkeenPalautePositiivinen'><?php echo 'Kuva 1 on vaihdettu.';?></p>

<?php

include '../includes/email_to_admin_3.php';

}

mysqli_close($conn);

echo $kuva_virhe_1_1_1111;
echo $kuva_virhe_2_1_1111;

}




if (isset($_POST["poista_kuva_1"])) {

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

$kuva1 = '../kuvat/rajatut_kuvat/';
$kuva1_1 = $row['pieni_kuva_1'];
$kuva1_2 = $kuva1 . $kuva1_1;

if ($kuva1_1 != 'oletuskuva_1234.jpg') {

unlink($kuva1_2);

}

// Muuta kuvan nimi tietokannassa oletuskuva_1234.jpg:ksi.
$sql = "UPDATE ilmoitukset 
        SET kuva1 = 'oletuskuva_1234.jpg', pieni_kuva_1 = 'oletuskuva_1234.jpg'
        WHERE urlMuokkaaTaiPoista='$urlMuokkaaIII'";

mysqli_query($conn, $sql);

mysqli_close($conn);

?>

<p class="lomakkeenPalautePositiivinen"><?php echo "Kuva 1 on poistettu."; ?></p>

<?php

}

?>

<form action="" method="post" enctype="multipart/form-data">
  
  <label class="label_otsikko" for="fileToUpload_1">Kuva 1: </label>

  <input class="vaihda_kuva_lomake" type="file" name="fileToUpload_1">
  
  <input class="vaihda_kuva_nappi" type="submit" name="submit_1" value="Vaihda kuva 1">

  <input class="poista_kuva_nappi" type="submit" name="poista_kuva_1" value="Poista kuva 1">

</form>

<br>


<?php

if (isset($_POST['submit_2'])) {

$ilmoitus_lahtee = 1;

// Muuttujien määrittely

$kansio_2222 = '../kuvat/poistettavat_kuvat/';
$kansio_II_2222 = '../kuvat/pienet_kuvat/';
$tiedosto_2222 = bin2hex(openssl_random_pseudo_bytes(5)) . "_" . preg_replace("/[^a-zA-Z0-9.]/", "", basename($_FILES['fileToUpload_2']['name']));
$polku_2222 = $kansio_2222 . $tiedosto_2222;                                
$polku_II_2222 = $kansio_II_2222 . $tiedosto_2222;

$kuvanTyyppi_2222 = pathinfo($polku_2222,PATHINFO_EXTENSION);
$kuvanKoko_2222 = $_FILES['fileToUpload_2']['size'];

if($kuvanTyyppi_2222 != 'jpg' && $kuvanTyyppi_2222 != 'JPG' 
  && $kuvanTyyppi_2222 != 'jpeg' && $kuvanTyyppi_2222 != 'JPEG' 
  && $kuvanTyyppi_2222 != 'png' && $kuvanTyyppi_2222 != 'PNG' 
  && $kuvanTyyppi_2222 != 'gif' && $kuvanTyyppi_2222 != 'GIF' 
  && $kuvanTyyppi_2222 != '') {

$kuva_virhe_1_1_2222 = '<p class="lomakkeenPalauteNegatiivinen">Kuvat voivat olla vain jpg, jpeg, png ja gif tiedostoja.</p>';
$kuva_virhe_1_2_2222 = 'Vain jpg, jpeg, png ja gif tiedostoja.';  
$ilmoitus_lahtee = 0;  
}

if ($kuvanKoko_2222 > 7400000) {
 
$kuva_virhe_2_1_2222 = '<p class="lomakkeenPalauteNegatiivinen">Yhden kuvan maksimikoko on 7 Mt.</p>';
$kuva_virhe_2_2_2222 = 'Vain alle 7 Mt:n kuvia.';
$ilmoitus_lahtee = 0;     
}

if ($kuvanTyyppi_2222 == '') {
$tiedosto_2222 = 'oletuskuva_1234.jpg';
}

// Muodostaa yhteyden tietokantaan.

include '../includes/luo_yhteyden_tietokantaan.php';

// Lomakkeesta tietokantaan

if($ilmoitus_lahtee == 1) {

$pic2 = mysqli_real_escape_string($conn, preg_replace("/[^a-zA-Z0-9.]/", "_", $tiedosto_2222));
$pieni_kuva_2 = mysqli_real_escape_string($conn, preg_replace("/[^a-zA-Z0-9.]/", "_", $tiedosto_2222));

$urlMuokkaaTaiPoista = mysqli_real_escape_string($conn, $_GET['urlMuokkaaTaiPoista']);

if (preg_match('/[^a-zA-Z0-9#]/', $urlMuokkaaTaiPoista)) {
  die ('Ilmoitusta ei löydy.');
}

$sql = "SELECT * FROM ilmoitukset WHERE urlMuokkaaTaiPoista='$urlMuokkaaTaiPoista'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$kuva1 = '../kuvat/pienet_kuvat/';
$kuva1_1 = $row['kuva2'];
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


$sql="UPDATE ilmoitukset 
      SET kuva2='$pic2', pieni_kuva_2 = '$pieni_kuva_2'
      WHERE urlMuokkaaTaiPoista='$urlMuokkaaTaiPoista'";


mysqli_query($conn, $sql);

    if (strpos($pic2, 'oletuskuva_1234.jpg') === false
    || strpos($pieni_kuva_2, 'oletuskuva_1234.jpg') === false) {

move_uploaded_file($_FILES['fileToUpload_2']['tmp_name'], $polku_2222);

// ---------- Include Universal Image Resizing Function --------
include_once("pienenna_kuva_2.php");
$target_file_2222 = $polku_2222;
$resized_file_2222 = $polku_II_2222;
$wmax_2222 = 400;
$hmax_2222 = 300;
ak_img_resize_2222($target_file_2222, $resized_file_2222, $wmax_2222, $hmax_2222, $kuvanTyyppi_2222);

$target_file_2222 = $polku_II_2222;
$thumbnail_2222 = "../kuvat/rajatut_kuvat/$tiedosto_2222";
$wthumb_2222 = 150;
$hthumb_2222 = 100;
ak_img_thumb_2222($target_file_2222, $thumbnail_2222, $wthumb_2222, $hthumb_2222, $kuvanTyyppi_2222);

}

?>
<p class='lomakkeenPalautePositiivinen'><?php echo 'Kuva 2 on vaihdettu.';?></p>

<?php

include '../includes/email_to_admin_3.php';

}

mysqli_close($conn);

echo $kuva_virhe_1_1_2222;
echo $kuva_virhe_2_1_2222;

}




if (isset($_POST["poista_kuva_2"])) {

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
$kuva1_1 = $row['kuva2'];
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

// Muuta kuvan nimi tietokannassa oletuskuva_1234.jpg:ksi.
$sql = "UPDATE ilmoitukset 
        SET kuva2 = 'oletuskuva_1234.jpg', pieni_kuva_2 = 'oletuskuva_1234.jpg'
        WHERE urlMuokkaaTaiPoista='$urlMuokkaaIII'";

mysqli_query($conn, $sql);

mysqli_close($conn);

?>

<p class="lomakkeenPalautePositiivinen"><?php echo "Kuva 2 on poistettu."; ?></p>

<?php

}

?>




<form action="" method="post" enctype="multipart/form-data">
  
  <label class="label_otsikko" for="fileToUpload_2">Kuva 2: </label>

  <input class="vaihda_kuva_lomake" type="file" name="fileToUpload_2">
  
  <input class="vaihda_kuva_nappi" type="submit" name="submit_2" value="Vaihda kuva 2">

  <input class="poista_kuva_nappi" type="submit" name="poista_kuva_2" value="Poista kuva 2">

</form>

<br>





<?php

if (isset($_POST['submit_3'])) {

$ilmoitus_lahtee = 1;

// Muuttujien määrittely

$kansio_3333 = '../kuvat/poistettavat_kuvat/';
$kansio_II_3333 = '../kuvat/pienet_kuvat/';
$tiedosto_3333 = bin2hex(openssl_random_pseudo_bytes(5)) . "_" . preg_replace("/[^a-zA-Z0-9.]/", "", basename($_FILES['fileToUpload_3']['name']));
$polku_3333 = $kansio_3333 . $tiedosto_3333;                                
$polku_II_3333 = $kansio_II_3333 . $tiedosto_3333;

$kuvanTyyppi_3333 = pathinfo($polku_3333,PATHINFO_EXTENSION);
$kuvanKoko_3333 = $_FILES['fileToUpload_3']['size'];

if($kuvanTyyppi_3333 != 'jpg' && $kuvanTyyppi_3333 != 'JPG' 
  && $kuvanTyyppi_3333 != 'jpeg' && $kuvanTyyppi_3333 != 'JPEG' 
  && $kuvanTyyppi_3333 != 'png' && $kuvanTyyppi_3333 != 'PNG' 
  && $kuvanTyyppi_3333 != 'gif' && $kuvanTyyppi_3333 != 'GIF' 
  && $kuvanTyyppi_3333 != '') {

$kuva_virhe_1_1_3333 = '<p class="lomakkeenPalauteNegatiivinen">Kuvat voivat olla vain jpg, jpeg, png ja gif tiedostoja.</p>';
$kuva_virhe_1_2_3333 = 'Vain jpg, jpeg, png ja gif tiedostoja.';  
$ilmoitus_lahtee = 0;  
}

if ($kuvanKoko_3333 > 7400000) {
 
$kuva_virhe_2_1_3333 = '<p class="lomakkeenPalauteNegatiivinen">Yhden kuvan maksimikoko on 7 Mt.</p>';
$kuva_virhe_2_2_3333 = 'Vain alle 7 Mt:n kuvia.';
$ilmoitus_lahtee = 0;     
}

if ($kuvanTyyppi_3333 == '') {
$tiedosto_3333 = 'oletuskuva_1234.jpg';
}

// Muodostaa yhteyden tietokantaan.

include '../includes/luo_yhteyden_tietokantaan.php';

// Lomakkeesta tietokantaan

if($ilmoitus_lahtee == 1) {

$pic3 = mysqli_real_escape_string($conn, preg_replace("/[^a-zA-Z0-9.]/", "_", $tiedosto_3333));
$pieni_kuva_3 = mysqli_real_escape_string($conn, preg_replace("/[^a-zA-Z0-9.]/", "_", $tiedosto_3333));

$urlMuokkaaTaiPoista = mysqli_real_escape_string($conn, $_GET['urlMuokkaaTaiPoista']);

if (preg_match('/[^a-zA-Z0-9#]/', $urlMuokkaaTaiPoista)) {
  die ('Ilmoitusta ei löydy.');
}

$sql = "SELECT * FROM ilmoitukset WHERE urlMuokkaaTaiPoista='$urlMuokkaaTaiPoista'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$kuva1 = '../kuvat/pienet_kuvat/';
$kuva1_1 = $row['kuva3'];
$kuva1_2 = $kuva1 . $kuva1_1;

if ($kuva1_1 != 'oletuskuva_1234.jpg') {

unlink($kuva1_2);

}

$kuva1 = '../kuvat/rajatut_kuvat/';
$kuva1_1 = $row['kuva3'];
$kuva1_2 = $kuva1 . $kuva1_1;

if ($kuva1_1 != 'oletuskuva_1234.jpg') {

unlink($kuva1_2);

}

$sql="UPDATE ilmoitukset 
      SET kuva3='$pic3', pieni_kuva_3 = '$pieni_kuva_3'
      WHERE urlMuokkaaTaiPoista='$urlMuokkaaTaiPoista'";


mysqli_query($conn, $sql);

    if (strpos($pic3, 'oletuskuva_1234.jpg') === false
    || strpos($pieni_kuva_3, 'oletuskuva_1234.jpg') === false) {

move_uploaded_file($_FILES['fileToUpload_3']['tmp_name'], $polku_3333);

// ---------- Include Universal Image Resizing Function --------
include_once("pienenna_kuva_3.php");
$target_file_3333 = $polku_3333;
$resized_file_3333 = $polku_II_3333;
$wmax_3333 = 400;
$hmax_3333 = 300;
ak_img_resize_3333($target_file_3333, $resized_file_3333, $wmax_3333, $hmax_3333, $kuvanTyyppi_3333);

$target_file_3333 = $polku_II_3333;
$thumbnail_3333 = "../kuvat/rajatut_kuvat/$tiedosto_3333";
$wthumb_3333 = 150;
$hthumb_3333 = 100;
ak_img_thumb_3333($target_file_3333, $thumbnail_3333, $wthumb_3333, $hthumb_3333, $kuvanTyyppi_3333);

}

?>
<p class='lomakkeenPalautePositiivinen'><?php echo 'Kuva 3 on vaihdettu.';?></p>

<?php

include '../includes/email_to_admin_3.php';

}

mysqli_close($conn);

echo $kuva_virhe_1_1_3333;
echo $kuva_virhe_2_1_3333;

}





if (isset($_POST["poista_kuva_3"])) {

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
$kuva1_1 = $row['kuva3'];
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

// Muuta kuvan nimi tietokannassa oletuskuva_1234.jpg:ksi.
$sql = "UPDATE ilmoitukset 
        SET kuva3 = 'oletuskuva_1234.jpg', pieni_kuva_3 = 'oletuskuva_1234.jpg' 
        WHERE urlMuokkaaTaiPoista='$urlMuokkaaIII'";

mysqli_query($conn, $sql);

mysqli_close($conn);

?>

<p class="lomakkeenPalautePositiivinen"><?php echo "Kuva 3 on poistettu."; ?></p>

<?php

}

?>


<form action="" method="post" enctype="multipart/form-data">
  
  <label class="label_otsikko" for="fileToUpload_3">Kuva 3: </label>

  <input class="vaihda_kuva_lomake" type="file" name="fileToUpload_3">
  
  <input class="vaihda_kuva_nappi" type="submit" name="submit_3" value="Vaihda kuva 3">

  <input class="poista_kuva_nappi" type="submit" name="poista_kuva_3" value="Poista kuva 3">

</form>

<br>





<?php

if (isset($_POST['submit_4'])) {

$ilmoitus_lahtee = 1;

// Muuttujien määrittely

$kansio_4444 = '../kuvat/poistettavat_kuvat/';
$kansio_II_4444 = '../kuvat/pienet_kuvat/';
$tiedosto_4444 = bin2hex(openssl_random_pseudo_bytes(5)) . "_" . preg_replace("/[^a-zA-Z0-9.]/", "", basename($_FILES['fileToUpload_4']['name']));
$polku_4444 = $kansio_4444 . $tiedosto_4444;                                
$polku_II_4444 = $kansio_II_4444 . $tiedosto_4444;

$kuvanTyyppi_4444 = pathinfo($polku_4444,PATHINFO_EXTENSION);
$kuvanKoko_4444 = $_FILES['fileToUpload_4']['size'];

if($kuvanTyyppi_4444 != 'jpg' && $kuvanTyyppi_4444 != 'JPG' 
  && $kuvanTyyppi_4444 != 'jpeg' && $kuvanTyyppi_4444 != 'JPEG' 
  && $kuvanTyyppi_4444 != 'png' && $kuvanTyyppi_4444 != 'PNG' 
  && $kuvanTyyppi_4444 != 'gif' && $kuvanTyyppi_4444 != 'GIF' 
  && $kuvanTyyppi_4444 != '') {

$kuva_virhe_1_1_4444 = '<p class="lomakkeenPalauteNegatiivinen">Kuvat voivat olla vain jpg, jpeg, png ja gif tiedostoja.</p>';
$kuva_virhe_1_2_4444 = 'Vain jpg, jpeg, png ja gif tiedostoja.';  
$ilmoitus_lahtee = 0;  
}

if ($kuvanKoko_4444 > 7400000) {
 
$kuva_virhe_2_1_4444 = '<p class="lomakkeenPalauteNegatiivinen">Yhden kuvan maksimikoko on 7 Mt.</p>';
$kuva_virhe_2_2_4444 = 'Vain alle 7 Mt:n kuvia.';
$ilmoitus_lahtee = 0;     
}

if ($kuvanTyyppi_4444 == '') {
$tiedosto_4444 = 'oletuskuva_1234.jpg';
}

// Muodostaa yhteyden tietokantaan.

include '../includes/luo_yhteyden_tietokantaan.php';

// Lomakkeesta tietokantaan

if($ilmoitus_lahtee == 1) {

$pic4 = mysqli_real_escape_string($conn, preg_replace("/[^a-zA-Z0-9.]/", "_", $tiedosto_4444));
$pieni_kuva_4 = mysqli_real_escape_string($conn, preg_replace("/[^a-zA-Z0-9.]/", "_", $tiedosto_4444));

$urlMuokkaaTaiPoista = mysqli_real_escape_string($conn, $_GET['urlMuokkaaTaiPoista']);

if (preg_match('/[^a-zA-Z0-9#]/', $urlMuokkaaTaiPoista)) {
  die ('Ilmoitusta ei löydy.');
}

$sql = "SELECT * FROM ilmoitukset WHERE urlMuokkaaTaiPoista='$urlMuokkaaTaiPoista'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$kuva1 = '../kuvat/pienet_kuvat/';
$kuva1_1 = $row['kuva4'];
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

$sql="UPDATE ilmoitukset 
      SET kuva4='$pic4', pieni_kuva_4 = '$pieni_kuva_4'
      WHERE urlMuokkaaTaiPoista='$urlMuokkaaTaiPoista'";



mysqli_query($conn, $sql);

    if (strpos($pic4, 'oletuskuva_1234.jpg') === false
    || strpos($pieni_kuva_4, 'oletuskuva_1234.jpg') === false) {

move_uploaded_file($_FILES['fileToUpload_4']['tmp_name'], $polku_4444);

// ---------- Include Universal Image Resizing Function --------
include_once("pienenna_kuva_4.php");
$target_file_4444 = $polku_4444;
$resized_file_4444 = $polku_II_4444;
$wmax_4444 = 400;
$hmax_4444 = 300;
ak_img_resize_4444($target_file_4444, $resized_file_4444, $wmax_4444, $hmax_4444, $kuvanTyyppi_4444);

$target_file_4444 = $polku_II_4444;
$thumbnail_4444 = "../kuvat/rajatut_kuvat/$tiedosto_4444";
$wthumb_4444 = 150;
$hthumb_4444 = 100;
ak_img_thumb_4444($target_file_4444, $thumbnail_4444, $wthumb_4444, $hthumb_4444, $kuvanTyyppi_4444);

}

?>
<p class='lomakkeenPalautePositiivinen'><?php echo 'Kuva 4 on vaihdettu.';?></p>

<?php

include '../includes/email_to_admin_3.php';

}

mysqli_close($conn);

echo $kuva_virhe_1_1_4444;
echo $kuva_virhe_2_1_4444;

}





if (isset($_POST["poista_kuva_4"])) {

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
$kuva1_1 = $row['kuva4'];
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

// Muuta kuvan nimi tietokannassa oletuskuva_1234.jpg:ksi.
$sql = "UPDATE ilmoitukset 
        SET kuva4 = 'oletuskuva_1234.jpg', pieni_kuva_4 = 'oletuskuva_1234.jpg' 
        WHERE urlMuokkaaTaiPoista='$urlMuokkaaIII'";

mysqli_query($conn, $sql);

mysqli_close($conn);

?>

<p class="lomakkeenPalautePositiivinen"><?php echo "Kuva 4 on poistettu."; ?></p>

<?php

}

?>


<form action="" method="post" enctype="multipart/form-data">
  
  <label class="label_otsikko" for="fileToUpload_4">Kuva 4: </label>

  <input class="vaihda_kuva_lomake" type="file" name="fileToUpload_4">
  
  <input class="vaihda_kuva_nappi" type="submit" name="submit_4" value="Vaihda kuva 4">

  <input class="poista_kuva_nappi" type="submit" name="poista_kuva_4" value="Poista kuva 4">

</form>

<br>

</div>


</body>
</html>
