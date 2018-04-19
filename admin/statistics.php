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

    <div class='keski_osa'>

        <h1 class='info_otsikko'>Tilastoja</h1>  
        
        <p class='info_teksti'>Serveriltä näkee ilman koodaustaitoja monenlaisia kävijätilastoja.</p> 
        <p class='info_teksti'>Tältä sivulta näkee sellaisia toivottuja tilastoja, mitä serverillä ei näy.</p>
        <br>
        <h3>Jaetaan.netissä on:</h3>
        <br>

        <?php 


$haku_1 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id";

$tulos_1 = mysqli_query($conn, $haku_1);

$maara_1 = mysqli_num_rows($tulos_1);

$haku_2 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE julkaistu='ei' 
           AND source='lomake'
           AND ilmoitukset.id=osastot.id";

$tulos_2 = mysqli_query($conn, $haku_2);

$maara_2 = mysqli_num_rows($tulos_2);             


$haku_3 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE julkaistu='ei'
           AND source='linked_events' 
           AND ilmoitukset.id=osastot.id";

$tulos_3 = mysqli_query($conn, $haku_3);

$maara_3 = mysqli_num_rows($tulos_3);        

$haku_4 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE ilmoitukset.id=osastot.id  
           AND julkaistu='kylla'
           AND source='h_lomake'";

$tulos_4 = mysqli_query($conn, $haku_4);

$maara_4 = mysqli_num_rows($tulos_4);

$haku_5 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE ilmoitukset.id=osastot.id  
           AND julkaistu='kylla'
           AND source='linked_events'";

$tulos_5 = mysqli_query($conn, $haku_5);

$maara_5 = mysqli_num_rows($tulos_5); 

$haku_6 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE ilmoitukset.id=osastot.id  
           AND julkaistu='kylla'
           AND source='lomake'";

$tulos_6 = mysqli_query($conn, $haku_6);

$maara_6 = mysqli_num_rows($tulos_6); 

          echo 'Julkaistuja ilmoituksia yhteensä: ' . $maara_1 . '<br><br>';
          
          echo 'Jaetaan.netin ylläpitäjien käsin lisäämiä julkisia ilmoituksia: ' . $maara_4 . '<br>';
          echo 'Linked eventseistä automaattisesti haettuja julkisia ilmoituksia: ' . $maara_5 . '<br>';
          echo 'Yksityisten käyttäjien lisäämiä julkisia ilmoituksia: ' . $maara_6 . '<br><br>'; 

          echo 'Julkaisemattomia, tarkistusta odottavia yksityisten käyttäjien ilmoituksia: ' . $maara_2 . '<br>';
          echo 'Julkaisemattomia, tarkistusta odottavia Linked Events -ilmoituksia: ' . $maara_3 . '<br>';       
          

        ?>

</div>

</body>
</html>
