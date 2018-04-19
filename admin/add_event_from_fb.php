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

      // Retrieves needed events ids from database and puts them in array
      // in order to not publish same event twice.  

      $sql_100 = "SELECT * 
                  FROM ilmoitukset
                  WHERE l_e_id <> ''
                  AND source = 'facebook_events'
                  AND julkaistu='kylla'";
      $result = mysqli_query($conn, $sql_100);

      $storeArray = array();

      if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
          array_push($storeArray, $row['l_e_id']);
        }
      }

      // Retrieves all events ids from database and puts them in array
      // in order to not publish events from the block list. 

      $sql_200 = "SELECT * 
                  FROM estetyt_l_e_tapahtumat";
      $result_200 = mysqli_query($conn, $sql_200);

      $storeArray_II = array();

      if (mysqli_num_rows($result_200) > 0) {
        while($row_II = mysqli_fetch_assoc($result_200)) {
          array_push($storeArray_II, $row_II['l_e_id']);
        }
      }  

      if (isset ($_POST['publish'])) {

        $fb_event_url = $_POST["fb_event_url"];
        $fb_event_2 = explode('https://www.facebook.com/events/', $fb_event_url);

        if (strpos($fb_event_2[1], "event_time") === false) {
          $fb_event_1 = explode('/', $fb_event_2[1]); 
          $fb_event = $fb_event_1[0];
        }

        if (strpos($fb_event_2[1], "event_time") !== false) {
          $fb_event_1 = explode('=', $fb_event_2[1]); 
          $fb_event = $fb_event_1[1];
        }

        // Starts fetching data from Facebook Graph API.
        $access_token = 'your access token here – check get_2_months_fb_access_token.php file in this same folder to get instructions)';

        $page = file_get_contents('https://graph.facebook.com/' . $fb_event . '?access_token=' . $access_token);
        $text = json_decode($page, true);

        $event_id = mysqli_real_escape_string($conn, $text["id"]);

        $ylaosasto = mysqli_real_escape_string($conn, "Tapahtumat");
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

        $email = mysqli_real_escape_string($conn, "info@jaetaan.net");
        $web_page = mysqli_real_escape_string($conn, "https://www.facebook.com/events/" . $event_id);
        $publisher_name = mysqli_real_escape_string($conn, 'Jaetaan.net automaatio');
        $pic_almost_1 = file_get_contents('https://graph.facebook.com/' . $event_id . '?fields=cover&access_token=' . $access_token);
        $pic_almost_2 = json_decode($pic_almost_1,true);
        $pic_1 = mysqli_real_escape_string($conn, $pic_almost_2["cover"]["source"]);
        $pic_2 = mysqli_real_escape_string($conn, "oletuskuva_1234.jpg");
        $pic_3 = mysqli_real_escape_string($conn, "oletuskuva_1234.jpg");
        $pic_4 = mysqli_real_escape_string($conn, "oletuskuva_1234.jpg");
        $small_pic_1 = mysqli_real_escape_string($conn, $text["cover"]["source"]);
        $small_pic_2 = mysqli_real_escape_string($conn, "oletuskuva_1234.jpg");
        $small_pic_3 = mysqli_real_escape_string($conn, "oletuskuva_1234.jpg");
        $small_pic_4 = mysqli_real_escape_string($conn, "oletuskuva_1234.jpg");
        $source = mysqli_real_escape_string($conn, 'facebook_events');
        $published = mysqli_real_escape_string($conn, 'kylla');
        $event_organiser_almost_1 = file_get_contents('https://graph.facebook.com/' . $event_id . '?fields=owner&access_token=' . $access_token);
        $event_organiser_almost_2 = json_decode($event_organiser_almost_1,true);
        $event_organiser = mysqli_real_escape_string($conn, $event_organiser_almost_2["owner"]["name"]);
        $url_full_ad = mysqli_real_escape_string($conn, bin2hex(openssl_random_pseudo_bytes(5)));
        $url_edit_or_delete = mysqli_real_escape_string($conn, bin2hex(openssl_random_pseudo_bytes(15)));
        $auto_remove_date_almost_1 = strtotime($start_date . "+1 day");
        $auto_remove_date = mysqli_real_escape_string($conn, date("Y-m-d", $auto_remove_date_almost_1));

        if($pic_1 == "") {
          $pic_1 = "oletuskuva_1234.jpg"; 
        }

        if($small_pic_1 == "") {
         $small_pic_1 = "oletuskuva_1234.jpg"; 
        } 

        $sql_3="INSERT INTO ilmoitukset (ylaosasto, tapahtumaAlkaa, klo_I, 
          tapahtumaPaattyy, klo_II, paikka, tapahtumanOsoite, otsikko, sisalto, kuva1, kuva2, 
          kuva3, kuva4, pieni_kuva_1, pieni_kuva_2, pieni_kuva_3, pieni_kuva_4, nimi, jakaja, 
          kaupunki, sahkoposti, puhelin, nettisivu, l_e_id, ilmoitusPoistuuAutomaattisesti, 
          urlMuokkaaTaiPoista, urlKokoIlmoitus, source, julkaistu)
        VALUES ('$ylaosasto', '$start_date', '$start_time', '$end_date', 
          '$end_time', '$place', '$street_address', '$event_name', '$description', '$pic_1', '$pic_2', 
          '$pic_3', '$pic_4', '$small_pic_1', '$small_pic_2', '$small_pic_3', '$small_pic_4', 
          '$publisher_name', '$event_organiser', '$city', '$email', '$puhelin', '$web_page', '$event_id', 
          '$auto_remove_date', '$url_edit_or_delete', '$url_full_ad', 
          '$source', '$published')";

        // Category variables.
        $movies = mysqli_real_escape_string($conn, $_POST['o_1'] . ' ');
        if ($_POST['o_1'] == '') {
          $movies = ''; 
        }

        $improvisation = mysqli_real_escape_string($conn, $_POST['o_2'] . ' ');
        if ($_POST['o_2'] == '') {
          $improvisation = ''; 
        }

        $discussion = mysqli_real_escape_string($conn, $_POST['o_3'] . ' ');
        if ($_POST['o_3'] == '') {
          $discussion = ''; 
        }

        $literature = mysqli_real_escape_string($conn, $_POST['o_4'] . ' ');
        if ($_POST['o_4'] == '') {
          $literature = ''; 
        }

        $visual_art = mysqli_real_escape_string($conn, $_POST['o_5'] . ' ');
        if ($_POST['o_5'] == '') {
          $visual_art = ''; 
        }

        $knitting_etc = mysqli_real_escape_string($conn, $_POST['o_6'] . ' ');
        if ($_POST['o_6'] == '') {
          $knitting_etc = ''; 
        }

        $playing = mysqli_real_escape_string($conn, $_POST['o_7'] . ' ');
        if ($_POST['o_7'] == '') {
          $playing = ''; 
        }

        $exercise = mysqli_real_escape_string($conn, $_POST['o_8'] . ' ');
        if ($_POST['o_8'] == '') {
          $exercise = ''; 
        }

        $lecture = mysqli_real_escape_string($conn, $_POST['o_9'] . ' ');
        if ($_POST['o_9'] == '') {
          $lecture = ''; 
        }

        $music = mysqli_real_escape_string($conn, $_POST['o_10'] . ' ');
        if ($_POST['o_10'] == '') {
          $music = ''; 
        }

        $exhibition = mysqli_real_escape_string($conn, $_POST['o_11'] . ' ');
        if ($_POST['o_11'] == '') {
          $exhibition = ''; 
        }

        $learning = mysqli_real_escape_string($conn, $_POST['o_12'] . ' ');
        if ($_POST['o_12'] == '') {
          $learning = ''; 
        }

        $games = mysqli_real_escape_string($conn, $_POST['o_13'] . ' ');
        if ($_POST['o_13'] == '') {
          $games = ''; 
        }

        $politics = mysqli_real_escape_string($conn, $_POST['o_14'] . ' ');
        if ($_POST['o_14'] == '') {
          $politics = ''; 
        }

        $poetry = mysqli_real_escape_string($conn, $_POST['o_15'] . ' ');
        if ($_POST['o_15'] == '') {
          $poetry = ''; 
        }

        $fairy_tale_telling = mysqli_real_escape_string($conn, $_POST['o_16'] . ' ');
        if ($_POST['o_16'] == '') {
          $fairy_tale_telling = ''; 
        }

        $dance = mysqli_real_escape_string($conn, $_POST['o_17'] . ' ');
        if ($_POST['o_17'] == '') {
          $dance = ''; 
        }

        $story_telling = mysqli_real_escape_string($conn, $_POST['o_18'] . ' ');
        if ($_POST['o_18'] == '') {
          $story_telling = ''; 
        }

        $teatteri = mysqli_real_escape_string($conn, $_POST['o_19'] . ' ');
        if ($_POST['o_19'] == '') {
          $teatteri = ''; 
        }

        $work_shop = mysqli_real_escape_string($conn, $_POST['o_20'] . ' ');
        if ($_POST['o_20'] == '') {
          $work_shop = ''; 
        }

        $sport = mysqli_real_escape_string($conn, $_POST['o_21'] . ' ');
        if ($_POST['o_21'] == '') {
          $sport = ''; 
        }

        $religion = mysqli_real_escape_string($conn, $_POST['o_22'] . ' ');
        if ($_POST['o_22'] == '') {
          $religion = ''; 
        }

        $socialising = mysqli_real_escape_string($conn, $_POST['o_23'] . ' ');
        if ($_POST['o_23'] == '') {
          $socialising = ''; 
        }

        $other_events = mysqli_real_escape_string($conn, $_POST['o_24'] . ' ');
        if ($_POST['o_24'] == '') {
          $other_events = ''; 
        }

        $adults = mysqli_real_escape_string($conn, $_POST['o_25'] . ' ');
        if ($_POST['o_25'] == '') {
          $adults = ''; 
        }

        $children = mysqli_real_escape_string($conn, $_POST['o_26'] . ' ');
        if ($_POST['o_26'] == '') {
          $children = ''; 
        }

        $teenagers = mysqli_real_escape_string($conn, $_POST['o_27'] . ' ');
        if ($_POST['o_27'] == '') {
          $teenagers = ''; 
        }

        $seniors = mysqli_real_escape_string($conn, $_POST['o_28'] . ' ');
        if ($_POST['o_28'] == '') {
          $seniors = ''; 
        }

        $men = mysqli_real_escape_string($conn, $_POST['o_29'] . ' ');
        if ($_POST['o_29'] == '') {
          $men = ''; 
        }

        $women = mysqli_real_escape_string($conn, $_POST['o_30'] . ' ');
        if ($_POST['o_30'] == '') {
          $women = ''; 
        }

        $sql_4="INSERT INTO osastot (elokuvat, improvisointi, keskustelu, kirjallisuus, 
          kuvataide, kasityot, leikkiminen, liikunta, luento, musiikki, nayttelyt, oppiminen, 
          pelaaminen, politiikka, runonlausunta, sadunkerronta, tanssi, tarinankerronta, 
          teatteri, tyopaja, urheilu, uskonto, yhdessa_oleminen, muut_tapahtumat, aikuiset, 
          lapset, nuoret, seniorit, miehet, naiset)
        VALUES ('$movies', '$improvisation', '$discussion', '$literature', 
          '$visual_art', '$knitting_etc', '$playing', '$exercise', '$lecture', '$music', 
          '$exhibition', '$learning', '$games', '$politics', '$poetry', 
          '$fairy_tale_telling', '$dance', '$story_telling', '$teatteri', '$work_shop', '$sport', 
          '$religion', '$socialising', '$other_events', '$adults', '$children', '$teenagers', 
          '$seniors', '$men', '$women')";

        $publish = 1;

        // Validating input data and error messages. 

        if ($fb_event_url == '') {
          echo '<p class="lomakkeenPalauteNegatiivinen">Täytä "Tapahtuman Fb-sivun nettiosoite" -kenttä.</p>';
          $publish = 0;
        }

        if ($movies == '' && $improvisation == '' && $discussion == '' 
        && $literature == '' && $visual_art == '' && $knitting_etc == '' 
        && $playing == '' &&  $exercise == '' && $lecture == '' 
        && $music == '' && $exhibition == '' && $learning == '' 
        && $games == '' && $politics == '' && $poetry == '' 
        && $fairy_tale_telling == '' && $dance == '' && $story_telling == '' 
        && $teatteri == '' && $work_shop == '' && $sport == '' 
        && $religion == '' &&  $socialising == '' && $other_events == '' 
        && $adults == '' && $children == '' && $teenagers == '' 
        && $seniors == '' && $men == '' && $women == '') {
          echo '<p class="lomakkeenPalauteNegatiivinen">Valitse vähintään yksi osasto.</p>';
          $publish = 0;
        }

        $fb_event_url_start = substr($fb_event_url, 0, 32);

        if ($fb_event_url != '' 
        && $fb_event_url_start != 'https://www.facebook.com/events/') {
          echo '<p class="lomakkeenPalauteNegatiivinen">Tapahtuman Facebook-sivua ei löytynyt.</p>';   
          echo '<p class="lomakkeenPalauteNegatiivinen">Aloita sen nettiosoite muodossa: https://www.facebook.com/events/</p>';
          $publish = 0;
        } 

        if ($fb_event_url_start == 'https://www.facebook.com/events/' 
        && $start_date == '') {
          echo '<p class="lomakkeenPalauteNegatiivinen">Tapahtuman Facebook-sivua ei löytynyt.</p>';   
          echo '<p class="lomakkeenPalauteNegatiivinen">Tarkista sen nettiosoite.</p>';
          $publish = 0;
        } 

        $start_date_min = date("Y-m-d");
        $start_date_max_1 = strtotime(date("Y-m-d") . "+1 year");
        $start_date_max = mysqli_real_escape_string($conn, date("Y-m-d", $start_date_max_1));

        if ($fb_event_url_start == 'https://www.facebook.com/events/'
        && $start_date != ''
        && ($start_date < $start_date_min
        || $start_date > $start_date_max)) {
          echo '<p class="lomakkeenPalauteNegatiivinen">Tapahtuman alkamispäivän tulee olla aikaisintaan tänään 
                                                        ja korkeintaan yksi vuosi tästä päivästä lukien.</p>';   
          $publish = 0;
        }  

        if (($fb_event_url_start == 'https://www.facebook.com/events/'
        && $start_date != ''
        && $city != '' 
        && $city != 'Espoo'
        && $city != 'Helsinki'
        && $city != 'Kauniainen'
        && $city != 'Vantaa')
        || ($fb_event_url_start == 'https://www.facebook.com/events/'
        && $start_date != ''
        && $city == '' 
        && strpos($place, "Espoo") === false
        && strpos($place, "espoo") === false
        && strpos($place, "ESPOO") === false
        && strpos($place, "Helsinki") === false
        && strpos($place, "helsinki") === false
        && strpos($place, "HELSINKI") === false
        && strpos($place, "Kauniainen") === false
        && strpos($place, "kauniainen") === false
        && strpos($place, "KAUNIAINEN") === false
        && strpos($place, "Vantaa") === false
        && strpos($place, "vantaa") === false
        && strpos($place, "VANTAA") === false)) {
          echo '<p class="lomakkeenPalauteNegatiivinen">Ilmoitusta ei lisätty.</p>';
          echo '<p class="lomakkeenPalauteNegatiivinen">Tapahtuman kaupungin tulee olla Espoo, 
                                                        Helsinki, Kauniainen tai Vantaa.</p>';   
          $publish = 0;
        } 

        if (in_array($event_id, $storeArray)) {
          echo '<p class="lomakkeenPalauteNegatiivinen">Ilmoitus ei lähtenyt.</p>';
          echo '<p class="lomakkeenPalauteNegatiivinen">Tapahtuma on jo Jaetaan.netissä.</p>';   

          $publish = 0;
        }

        if (in_array($event_id, $storeArray_II)) {
          echo '<p class="lomakkeenPalauteNegatiivinen">Ilmoitus ei lähtenyt.</p>';
          echo '<p class="lomakkeenPalauteNegatiivinen">Tapahtuma on jostain syystä estolistalla.<br>
          Syy tähän voi olla se että, ylläpitäjät ovat aiemmin huomanneet, että:<br> 
          Samasta tapahtumasta on jo eri ilmoitus Jaetaan.netissä.<br>
          Tai:<br>
          Tapahtuma ei syystä tai toisesta sovi Jaetaan.nettiin.<br>
          Syy voi olla myös vahinko tai jokin muu.</p>';
          echo '<p class="lomakkeenPalauteNegatiivinen">Jos haluat tämän tapahtuman julkiseksi, ota meihin yhteyttä. 
          <a class="info_linkki_feedback" href="https://jaetaan.net/yhteys/" target="_blank"> yhteydenottolomakkeen</a> kautta.<br>
          Korjaamme asian tai vastaamme sinulle, miksi tapahtuma on 
          estolistalla.</p>';
          $publish = 0;
        }  

        if ($publish == 1) {

          if (mysqli_query($conn, $sql_3)
            && mysqli_query($conn, $sql_4)) {

            echo '<p class="lomakkeenPalautePositiivinen">Ilmoitus otsikolla "' . htmlspecialchars($event_name, ENT_QUOTES, 'UTF-8') . '" on nyt julkaistu.<br><br>
                                                          Kiitos Sinulle.</p>';
        }   

          else {
            echo '<p class="lomakkeenPalauteNegatiivinen">Jokin meni pieleen.<br>
                                                          Yritä kohta uudelleen.</p>';       
          }
        }
      } 

    ?>

    <br><br>
    <h1>
      Lisää ilmoitus tapahtuman julkisen Facebook-sivun avulla
    </h1>
    <br>
    <h3>
      Näin helppoa se on:
    </h3>
    <br>
    <h3>
      1. Kopioi tapahtuman Fb-sivun nettiosoite, ja liitä se tekstikenttään.
    </h3>
    <h3>
      2. Valitse yksi tai usempia osastoja tapahtumalle.  
    </h3>
    <h3>
      3. Klikkaa Julkaise nappia.  
    </h3>
    <br>
    <p class='lisaa_ilmoitus_alaohje'>
      Jaetaan.netin automatiikka hakee tapahtuman Fb-sivulta kaikki muut tiedot paitsi osaston, 
      ottaa osaston tältä lomakkeelta ja julkaisee ilmoituksen.  
    </p>
    <p class='lisaa_ilmoitus_alaohje'>
      Hallinnoinnin Julkaistut-sivulta voit tarkistaa, miltä ilmoitus näyttää ja tarvittaessa muokata sitä.  
    </p>
    <p class='lisaa_ilmoitus_alaohje'>
      Tämän sivun kautta julkaistut tapahtumat päivittyvät automaattisesti neljä kertaa päivässä, jos tapahtuman Fb-sivua muutetaan.  
    </p>
    <br><br>    


    <form action="" method="post">

      <label class='label_otsikko' for='nettisivu'>
        Tapahtuman Fb-sivun nettiosoite:
      </label> 
      <br> 
      <input id="fb_event_url" type="text" placeholder="https://facebook.com/events/12345678900987654321" name="fb_event_url" value="<?php echo $_POST['fb_event_url'];?>">
      <br>
      <br>

      <div class='kaikki_checkboxit'>        

        <div id='haku_osastot_tapahtumat_fb'>

          <label class='label_otsikko' for='osasto_1'>
            Osasto: <span class='lomakkeenPalauteNegatiivinen'><?php echo $osasto_virhe; ?></span>
          </label>
          <p class='lisaa_ilmoitus_alaohje'> 
            Valitse yksi tai useampia.
          </p>

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

      </div>

      <br><br>  
      <input id="julkaise_fb_ilmoitukset_nappi" type="submit" value="Julkaise" name="publish">
   
    </form>

  </div>

</body>
</html>
