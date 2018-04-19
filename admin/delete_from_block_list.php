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

<?php

  include '../includes/header.php';
  include '../includes/connect_to_database.php';
  include '../includes/nav_bar_admin.php';

?>

<div class='middle_part'>

  <?php 

    $id = mysqli_real_escape_string($conn, $_GET['id']);

    $sql = "DELETE FROM estetyt_l_e_tapahtumat   
            WHERE id='$id'";
     
    if (mysqli_query($conn, $sql)) {
      echo "Tapahtuma on poistettu estolistalta ja se näkyy taas seuraavassa automaattisessa 
            haussa – sikäli, jos muut hakuehdot edelleen täyttyvät.<br>";
    }

    else {
      echo "Jokin meni pieleen.<br>
            Yritä estolistalta poistoa kohta uudelleen.";
    }

    mysqli_close($conn);
   
  ?>

</div>

</body>
</html>
