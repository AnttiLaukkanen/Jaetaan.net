<?php

// Muodostaa yhteyden tietokantaan.
include '../includes/luo_yhteyden_tietokantaan.php';

$sql_500 = "DELETE ilmoitukset, osastot 
            FROM ilmoitukset 
            INNER JOIN osastot  
            WHERE ilmoitukset.id=osastot.id 
            AND ilmoitukset.julkaistu='ei'
            AND ilmoitukset.source='linked_events'";

mysqli_query($conn, $sql_500);
    
 // Hakee kaikkien julkaistujen ilmoitusten linked events id:t ja laittaa ne array:hin.
  $sql_100 = "SELECT * 
              FROM ilmoitukset
              WHERE l_e_id <> ''
              AND julkaistu='kylla'";
  $result = mysqli_query($conn, $sql_100);

  $storeArray = array();

  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      array_push($storeArray, $row['l_e_id']);
    }
  }

  // Hakee estettyjen linked events -tapahtumien id:t ja laittaa ne array:hin.
  $sql_200 = "SELECT * 
              FROM estetyt_l_e_tapahtumat";
  $result_200 = mysqli_query($conn, $sql_200);

  $storeArray_II = array();

  if (mysqli_num_rows($result_200) > 0) {
    while($row_II = mysqli_fetch_assoc($result_200)) {
      array_push($storeArray_II, $row_II['l_e_id']);
    }
  }  

  // Hakee sivu kerrallaan linked events -tapahtumat 
  for ($i = 1; $i <= 400; $i++) {
    $sivut = file_get_contents('http://api.hel.fi/linkedevents/v1/event/?page=' . $i);
    $teksti = json_decode($sivut, true);

  foreach ($teksti["data"] as $tapahtuma) {

  $l_e_id = mysqli_real_escape_string($conn, $tapahtuma["id"]);

  // Jos taphtuma ei ole julkaistu eikä estolistalla niin homma jatkuu...
  if (!in_array($l_e_id, $storeArray) && !in_array($l_e_id, $storeArray_II)) {

  if ($tapahtuma["offers"][0]["is_free"] === true 
  || $tapahtuma["data_source"] === "helmet") {

  if ($tapahtuma["start_time"] >= date("Y-m-d")
  && $tapahtuma["start_time"] <= date("Y-m-d", strtotime("+1 month"))
  && $tapahtuma["start_time"] != null
  && $tapahtuma["name"]["fi"] != ""
  && strpos($tapahtuma["name"]["fi"], 'myyjäis') == false
  && strpos($tapahtuma["name"]["fi"], 'Myyjäis') == false
  && strpos($tapahtuma["name"]["fi"], 'markkinat') == false
  && strpos($tapahtuma["name"]["fi"], 'Markkinat') == false
  && strpos($tapahtuma["name"]["fi"], 'myynti') == false
  && strpos($tapahtuma["name"]["fi"], 'Myynti') == false 
  && strpos($tapahtuma["name"]["fi"], 'kirpputor') == false 
  && strpos($tapahtuma["name"]["fi"], 'Kirpputor') == false 
  && $tapahtuma["description"]["fi"] != "") {

      $ylaosasto = mysqli_real_escape_string($conn, "Tapahtumat");
      
      $start_date_string = $tapahtuma["start_time"];
      $start_date_obj = date_create($start_date_string);
      $start_date = date_format($start_date_obj, "Y-m-d");

      $start_time_string = $tapahtuma["start_time"];
      $start_time_unix = strtotime($start_time_string);
      $start_time = date("H:i:s", $start_time_unix);

      $end_date_string = $tapahtuma["end_time"];
      $end_date_obj = date_create($end_date_string);
      $end_date = date_format($end_date_obj, "Y-m-d");

      if ($end_date_string == null) {
        $end_date = "0000-00-00";  
      }

      $end_time_string = $tapahtuma["end_time"];
      $end_time_unix = strtotime($end_time_string);
      $end_time = date("H:i:s", $end_time_unix);

      if ($end_time_string == null) {
        $end_time = "00:00:00";  
      }

      $paikkatiedot = $tapahtuma["location"]["@id"];
      $paikkatiedot_sivut = file_get_contents($paikkatiedot);
      $paikkatiedot_teksti = json_decode($paikkatiedot_sivut,true);

      $paikka = mysqli_real_escape_string($conn, $paikkatiedot_teksti["name"]["fi"]);
      $tapahtumanOsoite = mysqli_real_escape_string($conn, $paikkatiedot_teksti["street_address"]["fi"]);

      $otsikko = mysqli_real_escape_string($conn, $tapahtuma["name"]["fi"]);
      $sisalto_melkein = $tapahtuma["description"]["fi"];
      $sisalto = mysqli_real_escape_string($conn, $sisalto_melkein);

      $pic1 = mysqli_real_escape_string($conn, $tapahtuma["images"][0]["url"]);
      $pic2 = mysqli_real_escape_string($conn, "oletuskuva_1234.jpg");
      $pic3 = mysqli_real_escape_string($conn, "oletuskuva_1234.jpg");
      $pic4 = mysqli_real_escape_string($conn, "oletuskuva_1234.jpg");

      $pieni_kuva_1 = mysqli_real_escape_string($conn, $tapahtuma["images"][0]["url"]);
      $pieni_kuva_2 = mysqli_real_escape_string($conn, "oletuskuva_1234.jpg");
      $pieni_kuva_3 = mysqli_real_escape_string($conn, "oletuskuva_1234.jpg");
      $pieni_kuva_4 = mysqli_real_escape_string($conn, "oletuskuva_1234.jpg");

      $nimi = mysqli_real_escape_string($conn, 'Jaetaan.net automaatio');
      
      if ($tapahtuma["provider"] != null) { 
        $jakaja = mysqli_real_escape_string($conn, $tapahtuma["provider"]);
      }

      if ($tapahtuma["provider"] == null ) { 
        $jakaja = mysqli_real_escape_string($conn, $paikkatiedot_teksti["name"]["fi"]);
      }

      $kaupunki = mysqli_real_escape_string($conn, $paikkatiedot_teksti["address_locality"]["fi"]);
      $sahkoposti = mysqli_real_escape_string($conn, $paikkatiedot_teksti["email"]);
      $puhelin = mysqli_real_escape_string($conn, $paikkatiedot_teksti["telephone"]["fi"]);
      $nettisivu = mysqli_real_escape_string($conn, $tapahtuma["info_url"]["fi"]);

      $auto_remove_date_string = $tapahtuma["start_time"];
      $auto_remove_date_obj = date_create($auto_remove_date_string);
      $auto_remove_date_edit = date_add($auto_remove_date_obj, date_interval_create_from_date_string("1 day"));
      $auto_remove_date_edit_2 = date_format($auto_remove_date_edit, "Y-m-d");
      $auto_remove_date = mysqli_real_escape_string($conn, $auto_remove_date_edit_2);

      $urlKokoIlmoitus = mysqli_real_escape_string($conn, bin2hex(openssl_random_pseudo_bytes(5)));
      $urlMuokkaaTaiPoista = mysqli_real_escape_string($conn, bin2hex(openssl_random_pseudo_bytes(15)));

      $source = mysqli_real_escape_string($conn, 'linked_events');
      $julkaistu = mysqli_real_escape_string($conn, 'ei');

      if($sahkoposti == "") {
        $sahkoposti = "info@jaetaan.net"; 
      }

      if($pic1 == "") {
        $pic1 = "oletuskuva_1234.jpg"; 
      }

      if($pieni_kuva_1 == "") {
        $pieni_kuva_1 = "oletuskuva_1234.jpg"; 
      }

      $sql_3="INSERT INTO ilmoitukset (ylaosasto, tapahtumaAlkaa, klo_I, 
      tapahtumaPaattyy, klo_II, paikka, tapahtumanOsoite, otsikko, sisalto, kuva1, kuva2, 
      kuva3, kuva4, pieni_kuva_1, pieni_kuva_2, pieni_kuva_3, pieni_kuva_4, nimi, jakaja, 
      kaupunki, sahkoposti, puhelin, nettisivu, l_e_id, ilmoitusPoistuuAutomaattisesti, 
      urlMuokkaaTaiPoista, urlKokoIlmoitus, source, julkaistu)
              VALUES ('$ylaosasto', '$start_date', '$start_time', '$end_date', 
      '$end_time', '$paikka', '$tapahtumanOsoite', '$otsikko', '$sisalto', '$pic1', '$pic2', 
      '$pic3', '$pic4', '$pieni_kuva_1', '$pieni_kuva_2', '$pieni_kuva_3', '$pieni_kuva_4', 
      '$nimi', '$jakaja', '$kaupunki', '$sahkoposti', '$puhelin', '$nettisivu', '$l_e_id', 
      '$auto_remove_date', '$urlMuokkaaTaiPoista', '$urlKokoIlmoitus', 
      '$source', '$julkaistu')";

// Ottaa osaston linked eventsien keywordseistä.
// Nollaa ensin joka ilmoitukselle osastot.

      $elokuvat = ''; 
      $improvisointi = ''; 
      $keskustelu = ''; 
      $kirjallisuus = ''; 
      $kuvataide = '';
      $kasityot = '';
      $leikkiminen = '';
      $liikunta = '';
      $luento = '';
      $musiikki = '';
      $nayttelyt = '';
      $oppiminen = '';
      $pelaaminen = '';
      $politiikka = '';
      $runonlausunta = '';
      $sadunkerronta = '';
      $tanssi = '';
      $tarinankerronta = '';
      $teatteri = ''; 
      $tyopaja = '';
      $urheilu = ''; 
      $uskonto = '';
      $yhdessa_oleminen = ''; 
      $muut_tapahtumat = ''; 
      $aikuiset = ''; 
      $lapset = ''; 
      $nuoret = ''; 
      $seniorit = ''; 
      $miehet = ''; 
      $naiset = '';

for ($x = 0; $x <= count($tapahtuma["keywords"]); $x++) {
  $avainsana_osoite = $tapahtuma["keywords"][$x]["@id"];

  $avainsana_sivu = file_get_contents($avainsana_osoite);
  $avainsana_teksti = json_decode($avainsana_sivu,true);

  $avainsana = $avainsana_teksti["name"]["fi"] . " ";
  $kaikki_avainsanat = explode(" ", $avainsana);
  $oikeat_avainsanat = array("Elokuvat", "elokuvat", 
                           "Kielikahvilat", "kielikahvilat", 
                           "Liikunta", "liikunta",
                           "Liikuntatapahtumat", "liikuntatapahtumat", 
                           "Luennot", "luennot",
                           "Kirjallisuus", "kirjallisuus",
                           "Kurssit", "kurssit",
                           "Lukupiirit", "lukupiirit",
                           "Musiikki", "musiikki",
                           "Muut", "muut",
                           "Muu", "muu", 
                           "Konsertit", "konsertit",
                           "Näyttelyt", "näyttelyt",
                           "Opastus", "opastus",
                           "Pelitapahtumat", "pelitapahtumat",
                           "Pelit", "pelit",
                           "Politiikka", "politiikka",
                           "Satutunnit", "satutunnit",
                           "Teatteri", "teatteri",
                           "Tanssi", "tanssi",
                           "Tanssiaiset", "tanssiaiset",
                           "Työpajat", "työpajat",
                           "Urheilu", "urheilu",
                           "Uskonto", "uskonto",
                           "Yhteislaulu", "yhteislaulu",
                           "Aikuiset", "aikuiset",
                           "Lapset", "lapset",
                           "Nuoret", "nuoret",
                           "Seniorit", "seniorit",
                           "Vanhukset", "vanhukset",
                           "Miehet", "miehet",
                           "Naiset", "naiset");

  $osasto_ennen = array_intersect($oikeat_avainsanat, $kaikki_avainsanat);

  if (in_array("Elokuvat", $osasto_ennen) || in_array("elokuvat", $osasto_ennen)) {
    $elokuvat = "Elokuvat ";
  }

  if (in_array("Improvisaatio", $osasto_ennen) || in_array("improvisaatio", $osasto_ennen)) {
    $improvisointi = "Improvisointi ";
  }

  if (in_array("Keskustelu", $osasto_ennen) || in_array("keskustelu", $osasto_ennen)) {
    $keskustelu = "Keskustelu ";
  }

  if (in_array("Kirjallisuus", $osasto_ennen) || in_array("kirjallisuus", $osasto_ennen)
  || in_array("Lukupiirit", $osasto_ennen) || in_array("lukupiirit", $osasto_ennen)) {
    $kirjallisuus = "Kirjallisuus ";
    $oppiminen = "";
  }

  if (in_array("Kuvataide", $osasto_ennen) || in_array("kuvataide", $osasto_ennen)) {
    $kuvataide = "Kuvataide ";
  }

  if (in_array("Käsityöt", $osasto_ennen) || in_array("käsityöt", $osasto_ennen)) {
    $kasityot = "Käsityöt ";
  }

  if (in_array("Leikkiminen", $osasto_ennen) || in_array("leikkiminen", $osasto_ennen)) {
    $leikkiminen = "Leikkiminen ";
  }

  if (in_array("Liikunta", $osasto_ennen) || in_array("liikunta", $osasto_ennen)
  || in_array("Liikuntatapahtumat", $osasto_ennen) || in_array("liikuntatapahtumat", $osasto_ennen)) {
    $liikunta = "Liikunta "; 
  }

  if (in_array("Luennot", $osasto_ennen) || in_array("luennot", $osasto_ennen)) {
    $luento = "Luento "; 
  }

  if (in_array("Musiikki", $osasto_ennen) || in_array("musiikki", $osasto_ennen) 
  || in_array("Konsertit", $osasto_ennen) || in_array("konsertit", $osasto_ennen)
  || in_array("Yhteislaulu", $osasto_ennen) || in_array("yhteislaulu", $osasto_ennen)) {
    $musiikki = "Musiikki ";
  }

  if (in_array("Näyttelyt", $osasto_ennen) || in_array("näyttelyt", $osasto_ennen)) {
    $nayttelyt = "Näyttelyt ";
  }

  if (in_array("Kielikahvilat", $osasto_ennen) || in_array("kielikahvilat", $osasto_ennen)
  || in_array("Kurssit", $osasto_ennen) || in_array("kurssit", $osasto_ennen)
  || in_array("Opastus", $osasto_ennen) || in_array("opastus", $osasto_ennen)) {
    $oppiminen = "Oppiminen ";
    $seniorit = "";
  }

  if (in_array("Pelitapahtumat", $osasto_ennen) || in_array("pelitapahtumat", $osasto_ennen)
  || in_array("Pelit", $osasto_ennen) || in_array("pelit", $osasto_ennen)) {
    $pelaaminen = "Pelaaminen ";
    $seniorit = "";
  }

  if (in_array("Politiikka", $osasto_ennen) || in_array("politiikka", $osasto_ennen)) {
    $politiikka = "politiikka ";
  }

  if (in_array("Runonlausunta", $osasto_ennen) || in_array("runonlausunta", $osasto_ennen)) {
    $runonlausunta = "Runonlausunta ";
  }

  if (in_array("Satutunnit", $osasto_ennen) || in_array("Satutunnit", $osasto_ennen)) {
    $sadunkerronta = "Sadunkerronta ";
  }

  if (in_array("Tanssi", $osasto_ennen) || in_array("tanssi", $osasto_ennen)
  || in_array("Tanssiaiset", $osasto_ennen) || in_array("tanssiaiset", $osasto_ennen)) {
    $tanssi = "Tanssi ";
  }

  if (in_array("Tarinankerronta", $osasto_ennen) || in_array("tarinankerronta", $osasto_ennen)) {
    $tarinankerronta = "Tarinankerronta ";
  }

  if (in_array("Teatteri", $osasto_ennen) || in_array("teatteri", $osasto_ennen)) {
    $teatteri = "Teatteri ";
  }

  if (in_array("Työpajat", $osasto_ennen) || in_array("työpajat", $osasto_ennen)) {
    $tyopaja = "Työpaja ";
  }

  if (in_array("Urheilu", $osasto_ennen) || in_array("urheilu", $osasto_ennen)) {
    $urheilu = "Urheilu ";
  }

  if (in_array("Uskonto", $osasto_ennen) || in_array("uskonto", $osasto_ennen)) {
    $uskonto = "Uskonto ";
  }

  if (in_array("Yhdessä", $osasto_ennen) || in_array("yhdessä", $osasto_ennen)) {
    $yhdessa_oleminen = "Yhdessä oleminen ";
  }

  if (in_array("Muut", $osasto_ennen) || in_array("muut", $osasto_ennen)
  || in_array("Muu", $osasto_ennen) || in_array("muu", $osasto_ennen)) {
    $muut_tapahtumat = "Muut ";
  }

  if (in_array("Aikuiset", $osasto_ennen) || in_array("aikuiset", $osasto_ennen)) {
    $aikuiset = "Aikuiset ";
  }

  if (in_array("Lapset", $osasto_ennen) || in_array("lapset", $osasto_ennen)) {
    $lapset = "Lapset ";
  }

  if (in_array("Nuoret", $osasto_ennen) || in_array("nuoret", $osasto_ennen)) {
    $nuoret = "Nuoret ";
  }

  if (in_array("Seniorit", $osasto_ennen) || in_array("seniorit", $osasto_ennen) 
  || in_array("Vanhukset", $osasto_ennen) || in_array("vanhukset", $osasto_ennen)) {
    $seniorit = "Seniorit ";
  }

  if (in_array("Miehet", $osasto_ennen) || in_array("miehet", $osasto_ennen)) {
    $miehet = "Miehet ";
  }

  if (in_array("Naiset", $osasto_ennen) || in_array("naiset", $osasto_ennen)) {
    $naiset = "Naiset ";
  }
 
// Ottaa osaston otsikosta yleisellä tasolla. 

  if (strpos($otsikko, 'Leff') !== false || strpos($otsikko, 'leff') !== false
  || strpos($otsikko, 'Kino') !== false || strpos($otsikko, 'kino') !== false
  || strpos($otsikko, 'Elokuv') !== false || strpos($otsikko, 'elokuv') !== false) {
    $elokuvat = "Elokuvat ";
  }

  if (strpos($otsikko, 'keskustelu') !== false || strpos($otsikko, 'Keskustelu') !== false) {
    $keskustelu = "Keskustelu ";
  }  

  if (strpos($otsikko, 'Neule') !== false || strpos($otsikko, 'neule') !== false)  {
    $kasityot = "Käsityöt ";
  }  

  if (strpos($otsikko, 'Jumppa') !== false || strpos($otsikko, 'jumppa') !== false) {
    $liikunta = "Liikunta ";
  }  

  if (strpos($otsikko, 'karaoke') !== false || strpos($otsikko, 'Karaoke') !== false
  || strpos($otsikko, 'konsertti') !== false || strpos($otsikko, 'Konsertti') !== false
  || strpos($otsikko, 'laul') !== false || strpos($otsikko, 'Laul') !== false) {
    $musiikki = "Musiikki ";
  }    

  if (strpos($otsikko, 'Luento') !== false || strpos($otsikko, 'luento') !== false
  || strpos($otsikko, 'Luenno') !== false || strpos($otsikko, 'luenno') !== false) {
    $luento = "Luento ";
    $oppiminen = "Oppiminen "; 
  }  

  if (strpos($otsikko, 'E-hetket') !== false) {
    $oppiminen = "Oppiminen ";
  } 

  if (strpos($otsikko, 'Kaupunginvaltuuston kokous') !== false 
  || strpos($otsikko, 'kaupunginvaltuuston kokous') !== false) {
    $politiikka = "Politiikka ";  
  }  

  if (strpos($otsikko, 'Pelaaminen') !== false || strpos($otsikko, 'pelaaminen') !== false
  || strpos($otsikko, 'Pelataan') !== false || strpos($otsikko, 'pelataan') !== false
  || strpos($otsikko, 'PELATAAN') !== false 
  || strpos($otsikko, 'Pelaan') !== false || strpos($otsikko, 'pelaan') !== false 
  || strpos($otsikko, 'Roolipel') !== false || strpos($otsikko, 'roolipel') !== false
  || strpos($otsikko, 'Pelit') !== false || strpos($otsikko, 'pelit') !== false) {
    $pelaaminen = "Pelaaminen ";
    $seniorit = "";  
  }

  if (strpos($otsikko, 'Runonlausunta') !== false || strpos($otsikko, 'runonlausunta') !== false
  || strpos($otsikko, 'Lausunta') !== false || strpos($otsikko, 'lausunta') !== false) {
    $runonlausunta = "Runonlausunta "; 
  }

  if (strpos($otsikko, 'teatteri') !== false || strpos($otsikko, 'Teatteri') !== false) {
    $teatteri = "Teatteri ";
  }  

 if (strpos($otsikko, 'Paja') !== false || strpos($otsikko, 'paja') !== false
 || strpos($otsikko, 'PAJA') !== false 
 || strpos($otsikko, 'Workshop') !== false || strpos($otsikko, 'workshop') !== false
 || strpos($otsikko, 'WORKSHOP') !== false) {
    $tyopaja = "Työpaja ";
  }

  if (strpos($otsikko, 'Hartaat') !== false || strpos($otsikko, 'hartaat') !== false
  || strpos($otsikko, 'Hartaus') !== false || strpos($otsikko, 'hartaus') !== false) {
    $uskonto = "Uskonto ";  
  }

  if (strpos($otsikko, 'Tanssi') !== false || strpos($otsikko, 'tanssi') !== false) {
    $tanssi = "Tanssi "; 
  }

  if (strpos($otsikko, 'Aikuisille') !== false || strpos($otsikko, 'aikuisille') !== false) {
    $aikuiset = "Aikuiset "; 
  }

  if (strpos($otsikko, 'Lapsille') !== false || strpos($otsikko, 'lapsille') !== false) {
    $lapset = "Lapset "; 
  }        

  if (strpos($otsikko, 'Miehille') !== false || strpos($otsikko, 'miehille') !== false) {
    $miehet = "Miehet "; 
  }  

  if (strpos($otsikko, 'Naisille') !== false || strpos($otsikko, 'naisille') !== false) {
    $naiset = "Naiset "; 
  }

  if (strpos($otsikko, 'Nuorille') !== false || strpos($otsikko, 'nuorille') !== false) {
    $nuoret = "Nuoret "; 
  }  

  if (strpos($otsikko, 'Senioreille') !== false || strpos($otsikko, 'senioreille') !== false 
  || strpos($otsikko, 'Vanhuksille') !== false || strpos($otsikko, 'vanhuksille') !== false 
  || strpos($paikka, 'palvelukeskus') !== false) {
    $seniorit = "Seniorit ";
  }

  // Yksittäisille usein toistuville tapahtumille suoraan omat osastot.
  // Satunnaisille tapahtumille ei kannata omaa osastokoodia laittaa.
  // Menee koodi muuten niin pitkäksi.

  if (strpos($otsikko, 'Novellikouk') !== false || strpos($otsikko, 'novellikouk') !== false) {
    $kasityot = "Käsityöt ";
    $kirjallisuus = "Kirjallisuus ";
    $tarinankerronta = "Tarinankerronta ";       
  }

  if (strpos($otsikko, 'Käsityökerho') !== false || strpos($otsikko, 'käsityökerho') !== false) {
    $kasityot = "Käsityöt ";
    $yhdessa_oleminen = "Yhdessä oleminen ";
  }

  if (strpos($otsikko, 'Kaupunkitanssit') !== false || strpos($otsikko, 'kaupunkitanssit') !== false) {
    $tanssi = "Tanssi ";
    $oppiminen = "Oppiminen ";
  }

  if (strpos($otsikko, 'Linnanmäen yleisötanssit 2017') !== false) {
    $tanssi = "Tanssi ";
    $musiikki = "Musiikki ";
  }

  if (strpos($otsikko, 'Neuletapaaminen') !== false || strpos($otsikko, 'neuletapaaminen') !== false) {
    $kasityot = "Käsityöt ";
    $yhdessa_oleminen = "Yhdessä oleminen ";
  }


  if (strpos($otsikko, 'Läksy') !== false || strpos($otsikko, 'läksy') !== false) {
    $oppiminen = "Oppiminen ";
    $lapset = "Lapset ";
    $nuoret = "Nuoret ";  
  }

  if (strpos($otsikko, 'Lukukoir') !== false || strpos($otsikko, 'lukukoir') !== false) {
    $oppiminen = "Oppiminen ";
    $lapset = "";
    $nuoret = "";  
  }

  if (strpos($otsikko, 'Loru') !== false || strpos($otsikko, 'loru') !== false) {
    $lapset = "Lapset ";
    $muut_tapahtumat = "Muut "; 
  }

  if (strpos($otsikko, 'Enter') !== false || strpos($otsikko, 'enter') !== false
  || strpos($otsikko, 'ENTER') !== false) {
    $oppiminen = "Oppiminen ";
    $seniorit = "Seniorit "; 
  }

  if (strpos($otsikko, 'Perheperjantai') !== false 
  || strpos($otsikko, 'perheperjantai') !== false) {
    $muut_tapahtumat = "Muut ";
    $oppiminen = "";
  }

  if (strpos($otsikko, 'Loru') !== false || strpos($otsikko, 'loru') !== false
  || strpos($otsikko, 'Taapero') !== false || strpos($otsikko, 'taapero') !== false) {
    $nuoret = ""; 
  } 

  if (strpos($otsikko, 'IoT (Internet of Things) Workshop') !== false) {
    $aikuiset = "Aikuiset ";
    $nuoret = "Nuoret ";
    $tyopaja = "Työpaja "; 
  } 



/* Jos muissa osastoissa on jotain, Muut tapahtumat -osastossa ei ole mitään. 
   Muut tapahtumat -osastoon tulee linked eventseistä paljon aiheetonta sisältöä.
   Se osasto menee turhaan tukkoon.
   Tarvíttaessa hallinnointi-sivulla lisätään käsin Muut tapahtumat -osasto.
   Näin päin säästyy paljon puuhaa. */

  if ($elokuvat != '' || $improvisointi != '' || $keskustelu != '' 
  || $kirjallisuus != '' || $kuvataide != '' || $kasityot != '' 
  || $leikkiminen != '' ||  $liikunta != '' || $luento != '' 
  || $musiikki != '' || $nayttelyt != '' || $oppiminen != '' 
  || $pelaaminen != '' || $politiikka != '' || $runonlausunta != '' 
  || $sadunkerronta != '' || $tanssi != '' || $tarinankerronta != '' 
  || $teatteri != '' || $tyopaja != '' || $urheilu != '' 
  || $uskonto != '' ||  $yhdessa_oleminen != '') {
    $muut_tapahtumat = '';
  }

// Jos kaikki osastot tyhjiä, osasto Muut tapahtumat tulee täyteen.

  if ($elokuvat == '' && $improvisointi == '' && $keskustelu == '' 
  && $kirjallisuus == '' && $kuvataide == '' && $kasityot == '' 
  && $leikkiminen == '' &&  $liikunta == '' && $luento == '' 
  && $musiikki == '' && $nayttelyt == '' && $oppiminen == '' 
  && $pelaaminen == '' && $politiikka == '' && $runonlausunta == '' 
  && $sadunkerronta == '' && $tanssi == '' && $tarinankerronta == '' 
  && $teatteri == '' && $tyopaja == '' && $urheilu == '' 
  && $uskonto == '' &&  $yhdessa_oleminen == '' && $muut_tapahtumat == '' 
  && $aikuiset == '' && $lapset == '' && $nuoret == '' 
  && $seniorit == '' && $miehet == '' && $naiset == '') {
    $muut_tapahtumat = 'Muut ';
  }
}

$sql_4="INSERT INTO osastot (elokuvat, improvisointi, keskustelu, kirjallisuus, 
kuvataide, kasityot, leikkiminen, liikunta, luento, musiikki, nayttelyt, oppiminen, 
pelaaminen, politiikka, runonlausunta, sadunkerronta, tanssi, tarinankerronta, 
teatteri, tyopaja, urheilu, uskonto, yhdessa_oleminen, muut_tapahtumat, aikuiset, 
lapset, nuoret, seniorit, miehet, naiset)
        VALUES ('$elokuvat', '$improvisointi', '$keskustelu', '$kirjallisuus', 
'$kuvataide', '$kasityot', '$leikkiminen', '$liikunta', '$luento', '$musiikki', 
'$nayttelyt', '$oppiminen', '$pelaaminen', '$politiikka', '$runonlausunta', 
'$sadunkerronta', '$tanssi', '$tarinankerronta', '$teatteri', '$tyopaja', '$urheilu', 
'$uskonto', '$yhdessa_oleminen', '$muut_tapahtumat', '$aikuiset', '$lapset', '$nuoret', 
'$seniorit', '$miehet', '$naiset')";

    if ($kaupunki == 'Helsinki') {
    mysqli_query($conn, $sql_3);
    mysqli_query($conn, $sql_4);
    }
  }
}

    }
  }
}

?>
