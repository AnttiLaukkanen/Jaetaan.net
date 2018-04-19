<!DOCTYPE html>
<html>

<head>

  <meta name="robots" content="noindex">

</head>

<body>

  <?php 

    include '../includes/connect_to_database.php';

    $sql = "SELECT * 
            FROM ilmoitukset 
            WHERE ilmoitusPoistuuAutomaattisesti != '0000-00-00' 
            && ilmoitusPoistuuAutomaattisesti <= CURDATE()
            || (ilmoitusPoistuuAutomaattisesti != '0000-00-00' 
            && ilmoitusPoistuuAutomaattisesti > CURDATE() + INTERVAL 1 year)
            || (kaupunki = '')";
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

    // Delete ads.

    $sql_2 = "DELETE ilmoitukset, osastot FROM ilmoitukset INNER JOIN osastot 
    WHERE ilmoitusPoistuuAutomaattisesti != '0000-00-00'
    && ilmoitusPoistuuAutomaattisesti <= CURDATE()
    && ilmoitukset.id=osastot.id";
    mysqli_query($conn, $sql_2);

    $sql_3 = "DELETE ilmoitukset, osastot FROM ilmoitukset INNER JOIN osastot 
    WHERE kaupunki = ''
    && ilmoitukset.id=osastot.id";
    mysqli_query($conn, $sql_3);

    $sql_4 = "DELETE ilmoitukset, osastot FROM ilmoitukset INNER JOIN osastot 
    WHERE ilmoitusPoistuuAutomaattisesti != '0000-00-00'
    && ilmoitusPoistuuAutomaattisesti > CURDATE() + INTERVAL 1 year
    && ilmoitukset.id=osastot.id";
    mysqli_query($conn, $sql_4);
    
    mysqli_close($conn);
  ?>

</body>
</html>
