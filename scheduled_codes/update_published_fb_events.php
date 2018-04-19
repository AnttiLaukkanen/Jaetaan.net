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
            WHERE l_e_id <> ''
            AND source = 'facebook_events'
            AND julkaistu = 'kylla'";
    $result = mysqli_query($conn, $sql);

    // Loops through published "source=facebook_events" and updates if there any changes
    // in the events Facebook page.

    if (mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {

        $access_token = 'you acces token here';

        $fb_event = $row['l_e_id'];

        $page = file_get_contents('https://graph.facebook.com/' . $fb_event . '?access_token=' . $access_token);
        $text = json_decode($page, true);

        $event_id = mysqli_real_escape_string($conn, $text["id"]);

        $event_name = mysqli_real_escape_string($conn, $text["name"]);
        $description = mysqli_real_escape_string($conn, $text["description"]);
        $start_date = mysqli_real_escape_string($conn, substr($text["start_time"],0,10));
        $start_time = mysqli_real_escape_string($conn, substr($text["start_time"],11,8));
        $end_date = mysqli_real_escape_string($conn, substr($text["end_time"],0,10));
        $end_time = mysqli_real_escape_string($conn, substr($text["end_time"],11,8));
        $place = mysqli_real_escape_string($conn, $text["place"]["name"]);
        $street_address = mysqli_real_escape_string($conn, $text["place"]["location"]["street"]);
        $city = mysqli_real_escape_string($conn, $text["place"]["location"]["city"]);

        if ($city == '' 
        && (strpos($place, "Espoo") !== false
        || strpos($place, "espoo") !== false
        || strpos($place, "ESPOO") !== false)) {
          $city = 'Espoo';
        }

        if ($city == '' 
        && (strpos($place, "Helsinki") !== false
        || strpos($place, "helsinki") !== false
        || strpos($place, "HELSINKI") !== false)) {
        $city = 'Helsinki';
        }

        if ($city == '' 
        && (strpos($place, "Kauniainen") !== false
        || strpos($place, "kauniainen") !== false
        || strpos($place, "KAUNIAINEN") !== false)) {
          $city = 'Kauniainen';
        }

        if ($city == '' 
        && (strpos($place, "Vantaa") !== false
        || strpos($place, "vantaa") !== false
        || strpos($place, "VANTAA") !== false)) {
          $city = 'Vantaa';
        }

        $pic_almost_1 = file_get_contents('https://graph.facebook.com/' . $event_id . '?fields=cover&access_token=' . $access_token);
        $pic_almost_2 = json_decode($pic_almost_1,true);
        $pic_1 = mysqli_real_escape_string($conn, $pic_almost_2["cover"]["source"]);
        $small_pic_1 = mysqli_real_escape_string($conn, $text["cover"]["source"]);
        $event_organiser_almost_1 = file_get_contents('https://graph.facebook.com/' . $event_id . '?fields=owner&access_token=' . $access_token);
        $event_organiser_almost_2 = json_decode($event_organiser_almost_1,true);
        $event_organiser = mysqli_real_escape_string($conn, $event_organiser_almost_2["owner"]["name"]);
        $auto_remove_date_melkein_1 = strtotime($start_date . "+1 day");
        $auto_remove_date = mysqli_real_escape_string($conn, date("Y-m-d", $auto_remove_date_melkein_1));

        if($pic_1 == "") {
          $pic_1 = "oletuskuva_1234.jpg"; 
        }

        if($small_pic_1 == "") {
         $small_pic_1 = "oletuskuva_1234.jpg"; 
        }


        $sql_2 = "SELECT * 
                  FROM ilmoitukset
                  WHERE l_e_id = '$event_id'
                  AND source = 'facebook_events'
                  AND julkaistu = 'kylla'";
        $result_2 = mysqli_query($conn, $sql_2);

        $row_paivitys = mysqli_fetch_assoc($result_2);

        if ($event_name != $row_paivitys['otsikko']) { 
          $sql_3 = "UPDATE ilmoitukset
                    SET otsikko = '$event_name'
                    WHERE l_e_id = '$event_id'";
          mysqli_query($conn, $sql_3);
        }

        if ($start_date != $row_paivitys['tapahtumaAlkaa']) { 
          $sql_4 = "UPDATE ilmoitukset
                    SET tapahtumaAlkaa = '$start_date'
                    WHERE l_e_id = '$event_id'";
          mysqli_query($conn, $sql_4);
        }

        if ($start_time != $row_paivitys['klo_I']) { 
          $sql_5 = "UPDATE ilmoitukset
                    SET klo_I = '$start_time'
                    WHERE l_e_id = '$event_id'";
          mysqli_query($conn, $sql_5);
        }

        if ($end_date != null 
        && $end_date != $row_paivitys['tapahtumaPaattyy']) { 
          $sql_6 = "UPDATE ilmoitukset
                    SET tapahtumaPaattyy = '$end_date'
                    WHERE l_e_id = '$event_id'";
        mysqli_query($conn, $sql_6);
        }

        if ($end_time != null 
        && $end_time != $row_paivitys['klo_II']) { 
          $sql_7 = "UPDATE ilmoitukset
                    SET klo_II = '$end_time'
                    WHERE l_e_id = '$event_id'";
        mysqli_query($conn, $sql_7);
        }

        if ($pic_1 != $row_paivitys['kuva1']) { 
          $sql_8 = "UPDATE ilmoitukset
                    SET kuva1 = '$pic_1'
                    WHERE l_e_id = '$event_id'";
          mysqli_query($conn, $sql_8);
        }

        if ($small_pic_1 != $row_paivitys['pieni_kuva_1']) { 
          $sql_9 = "UPDATE ilmoitukset
                    SET pieni_kuva_1 = '$small_pic_1'
                    WHERE l_e_id = '$event_id'";
          mysqli_query($conn, $sql_9);
        }

        if ($place != $row_paivitys['paikka']) { 
          $sql_10 = "UPDATE ilmoitukset
                     SET paikka = '$place'
                     WHERE l_e_id = '$event_id'";
          mysqli_query($conn, $sql_10);
        }

        if ($street_address != $row_paivitys['tapahtumanOsoite']) { 
          $sql_11 = "UPDATE ilmoitukset
                     SET tapahtumanOsoite = '$street_address'
                     WHERE l_e_id = '$event_id'";
          mysqli_query($conn, $sql_11);
        }

        if ($city != $row_paivitys['kaupunki']) { 
          $sql_12 = "UPDATE ilmoitukset
                     SET kaupunki = '$city'
                     WHERE l_e_id = '$event_id'";
          mysqli_query($conn, $sql_12);
        }

        if ($auto_remove_date != $row_paivitys['ilmoitusPoistuuAutomaattisesti']) { 
          $sql_16 = "UPDATE ilmoitukset
                     SET ilmoitusPoistuuAutomaattisesti = '$auto_remove_date'
                     WHERE l_e_id = '$event_id'";
          mysqli_query($conn, $sql_16);
        }     

        if ($event_organiser != $row_paivitys['jakaja']) { 
          $sql_17 = "UPDATE ilmoitukset
                     SET jakaja = '$event_organiser'
                     WHERE l_e_id = '$event_id'";
          mysqli_query($conn, $sql_17);
        }   

        if ($description != $row_paivitys['sisalto']) { 
          $sql_18 = "UPDATE ilmoitukset
                     SET sisalto = '$description'
                     WHERE l_e_id = '$event_id'";
          mysqli_query($conn, $sql_18);
        }
      }
    }  

  ?>      

</body>
</html>
