<!DOCTYPE html>
<html>

<head><meta http-equiv="Content-Type" content="text/html; charset=euc-kr">

    <meta name="robots" content="noindex">

</head>

<body>

<?php

// Muodostaa yhteyden tietokantaan.
include '../includes/luo_yhteyden_tietokantaan.php';

  $sql = "SELECT * 
          FROM ilmoitukset
          WHERE l_e_id <> ''";
  $result = mysqli_query($conn, $sql);

  $storeArray = array();

  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      array_push($storeArray, $row['l_e_id']);
    }
  }

  for ($i = 1; $i <= 400; $i++) {
    $sivut = file_get_contents('http://api.hel.fi/linkedevents/v1/event/?page=' . $i);
    $teksti = json_decode($sivut, true);

  foreach ($teksti["data"] as $tapahtuma) {

  $l_e_id = mysqli_real_escape_string($conn, $tapahtuma["id"]);

  if (in_array($l_e_id, $storeArray)) {
    
    $otsikko_paivitys = mysqli_real_escape_string($conn, $tapahtuma["name"]["fi"]);

    $sisalto_melkein = $tapahtuma["description"]["fi"];
    $sisalto = mysqli_real_escape_string($conn, $sisalto_melkein);

    $paikkatiedot = $tapahtuma["location"]["@id"];
    $paikkatiedot_sivut = file_get_contents($paikkatiedot);
    $paikkatiedot_teksti = json_decode($paikkatiedot_sivut,true);

    $paikka = mysqli_real_escape_string($conn, $paikkatiedot_teksti["name"]["fi"]);
    $tapahtumanOsoite = mysqli_real_escape_string($conn, $paikkatiedot_teksti["street_address"]["fi"]);

    $pic1 = mysqli_real_escape_string($conn, $tapahtuma["images"][0]["url"]);
    $pieni_kuva_1 = mysqli_real_escape_string($conn, $tapahtuma["images"][0]["url"]);

    if($pic1 == "") {
      $pic1 = "oletuskuva_1234.jpg"; 
    }

    if($pieni_kuva_1 == "") {
      $pieni_kuva_1 = "oletuskuva_1234.jpg"; 
    }

    $start_date_string = $tapahtuma["start_time"];
    $start_date_obj = date_create($start_date_string);
    $start_date = date_format($start_date_obj, "Y-m-d");

    //$tapahtumaAlkaa_paivitys = mysqli_real_escape_string($conn, substr($tapahtuma["start_time"], 0, 10));
    
    $start_time_string = $tapahtuma["start_time"];
    $start_time_unix = strtotime($start_time_string);
    $start_time = date("H:i:s", $start_time_unix);
     
    // Alla oleva ei huomioi kesä / talviaika -juttua 
    //$klo_I = mysqli_real_escape_string($conn, substr($tapahtuma["start_time"], 11));
    //$klo_I_paivitys_melkein = strtotime("$klo_I");
    //$klo_I_paivitys = date("H:i:s", $klo_I_paivitys_melkein);

    $end_date_string = $tapahtuma["end_time"];
    $end_date_obj = date_create($end_date_string);
    $end_date = date_format($end_date_obj, "Y-m-d");

    //$tapahtumaPaattyy_paivitys = mysqli_real_escape_string($conn, substr($tapahtuma["end_time"], 0, 10));
    
    $end_time_string = $tapahtuma["end_time"];
    $end_time_unix = strtotime($end_time_string);
    $end_time = date("H:i:s", $end_time_unix);

    // Alla oleva ei huomioi kesä / talviaika -juttua 
    //$klo_II = mysqli_real_escape_string($conn, substr($tapahtuma["end_time"], 11));
    //$klo_II_paivitys_melkein = strtotime("$klo_II");
    //$klo_II_paivitys = date("H:i:s", $klo_II_paivitys_melkein);

    $kaupunki = mysqli_real_escape_string($conn, $paikkatiedot_teksti["address_locality"]["fi"]);

      if ($tapahtuma["provider"] != null) { 
        $jakaja = mysqli_real_escape_string($conn, $tapahtuma["provider"]);
      }

      if ($tapahtuma["provider"] == null ) { 
        $jakaja = mysqli_real_escape_string($conn, $paikkatiedot_teksti["name"]["fi"]);
      }

    $sahkoposti = mysqli_real_escape_string($conn, $paikkatiedot_teksti["email"]);

    if($sahkoposti == "") {
        $sahkoposti = "info@jaetaan.net"; 
    }

    $puhelin = mysqli_real_escape_string($conn, $paikkatiedot_teksti["telephone"]["fi"]);
    $nettisivu = mysqli_real_escape_string($conn, $tapahtuma["info_url"]["fi"]);

    $ilmoitusPoistuuAutomaattisesti_melkein = mysqli_real_escape_string($conn, substr($tapahtuma["start_time"], 0, 10));
    $ilmoitusPoistuuAutomaattisesti = date("Y-m-d", strtotime("$ilmoitusPoistuuAutomaattisesti_melkein + 1 day"));

    $sql_2 = "SELECT * 
              FROM ilmoitukset
              WHERE l_e_id = '$l_e_id'";
    $result_2 = mysqli_query($conn, $sql_2);

    $row_paivitys = mysqli_fetch_assoc($result_2);
   
    if ($otsikko_paivitys != $row_paivitys['otsikko']) { 
      $sql_3 = "UPDATE ilmoitukset
                SET otsikko = '$otsikko_paivitys'
                WHERE l_e_id = '$l_e_id'";
                mysqli_query($conn, $sql_3);
    }

    if ($start_date != $row_paivitys['tapahtumaAlkaa']) { 
      $sql_4 = "UPDATE ilmoitukset
                SET tapahtumaAlkaa = '$start_date'
                WHERE l_e_id = '$l_e_id'";
                mysqli_query($conn, $sql_4);
    }

    if ($start_time != $row_paivitys['klo_I']) { 
      $sql_5 = "UPDATE ilmoitukset
                SET klo_I = '$start_time'
                WHERE l_e_id = '$l_e_id'";
                mysqli_query($conn, $sql_5);
    }

    if ($end_date_string != null 
    && $end_date != $row_paivitys['tapahtumaPaattyy']) { 
      $sql_6 = "UPDATE ilmoitukset
                SET tapahtumaPaattyy = '$end_date'
                WHERE l_e_id = '$l_e_id'";
                mysqli_query($conn, $sql_6);
    }

    if ($end_time_string != null 
    && $end_time != $row_paivitys['klo_II']) { 
      $sql_7 = "UPDATE ilmoitukset
                SET klo_II = '$end_time'
                WHERE l_e_id = '$l_e_id'";
                mysqli_query($conn, $sql_7);
    }

    if ($pic1 != $row_paivitys['kuva1']) { 
      $sql_8 = "UPDATE ilmoitukset
                SET kuva1 = '$pic1'
                WHERE l_e_id = '$l_e_id'";
                mysqli_query($conn, $sql_8);
    }

    if ($pieni_kuva_1 != $row_paivitys['pieni_kuva_1']) { 
      $sql_9 = "UPDATE ilmoitukset
                SET pieni_kuva_1 = '$pieni_kuva_1'
                WHERE l_e_id = '$l_e_id'";
                mysqli_query($conn, $sql_9);
    }

    if ($paikka != $row_paivitys['paikka']) { 
      $sql_10 = "UPDATE ilmoitukset
                 SET paikka = '$paikka'
                 WHERE l_e_id = '$l_e_id'";
                 mysqli_query($conn, $sql_10);
    }

    if ($tapahtumanOsoite != $row_paivitys['tapahtumanOsoite']) { 
      $sql_11 = "UPDATE ilmoitukset
                 SET tapahtumanOsoite = '$tapahtumanOsoite'
                 WHERE l_e_id = '$l_e_id'";
                 mysqli_query($conn, $sql_11);
    }

    if ($kaupunki != $row_paivitys['kaupunki']) { 
      $sql_12 = "UPDATE ilmoitukset
                 SET kaupunki = '$kaupunki'
                 WHERE l_e_id = '$l_e_id'";
                 mysqli_query($conn, $sql_12);
    }

    if ($sahkoposti != $row_paivitys['sahkoposti']) { 
      $sql_13 = "UPDATE ilmoitukset
                 SET sahkoposti = '$sahkoposti'
                 WHERE l_e_id = '$l_e_id'";
                 mysqli_query($conn, $sql_13);
    }

    if ($puhelin != $row_paivitys['puhelin']) { 
      $sql_14 = "UPDATE ilmoitukset
                 SET puhelin = '$puhelin'
                 WHERE l_e_id = '$l_e_id'";
                 mysqli_query($conn, $sql_14);
    }

    if ($nettisivu != $row_paivitys['nettisivu']) { 
      $sql_15 = "UPDATE ilmoitukset
                 SET nettisivu = '$nettisivu'
                 WHERE l_e_id = '$l_e_id'";
                 mysqli_query($conn, $sql_15);
    }        

    if ($ilmoitusPoistuuAutomaattisesti != $row_paivitys['ilmoitusPoistuuAutomaattisesti']) { 
      $sql_16 = "UPDATE ilmoitukset
                 SET ilmoitusPoistuuAutomaattisesti = '$ilmoitusPoistuuAutomaattisesti'
                 WHERE l_e_id = '$l_e_id'";
                 mysqli_query($conn, $sql_16);
    }     

    if ($jakaja != $row_paivitys['jakaja']) { 
      $sql_17 = "UPDATE ilmoitukset
                 SET jakaja = '$jakaja'
                 WHERE l_e_id = '$l_e_id'";
                 mysqli_query($conn, $sql_17);
    }   

    if ($sisalto != $row_paivitys['sisalto']) { 
      $sql_18 = "UPDATE ilmoitukset
                 SET sisalto = '$sisalto'
                 WHERE l_e_id = '$l_e_id'";
                 mysqli_query($conn, $sql_18);
    }  

  }

}

}

?>      

</body>
</html>
