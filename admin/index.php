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
            include '../includes/luo_yhteyden_tietokantaan.php';
            include '../includes/nav_bar_admin.php';
        ?>

    <div class='keski_osa'>

        <h1 class='info_otsikko'>Tervetuloa hallinnoimaan sivustoa</h1>  
        
        <p class='info_teksti'>Navigointipalkin kautta pääset tekemään erilaisia 
                               ylläpidollisia toimia.</p>
  
</div>

</body>
</html>
