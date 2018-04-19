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

  <h1 class='info_otsikko'>Linked events -tapahtumat</h1>
  <p class='info_teksti'>Alla on listattuna automaattisesti haetut julkaisemattomat Linked Events -tapahtumat.</p>  
  <p class='info_teksti'>Ilmoitukset eivät näy vielä julkisesti.</p>
  <br>
  <p class='info_teksti'><b>Muokkaa tarvittaessa tapahtuman osastoja</b></p>
  <br>
  <p class='info_teksti'>Käy listauksesta läpi kaikki tapahtumat.</p>
  <p class='info_teksti'>Tarvittaessa klikkaa tapahtumaa ja muokkaa sen osastoja.</p>
  <p class='info_teksti'>Otsikkoa ja sisältöä ei voi muokata.</p>
  <br>
  <p class='info_teksti'>Joskus joukkoon eksyy yksi ja sama tapahtuma kahdesti tai useammin.</p>
  <p class='info_teksti'>Tällöin jätä yksi tapahtuma ja poista loput.</p>
  <br>
  <p class='info_teksti'>Joskus joukkoon eksyy myös tapahtumia, jotka eivät sovi Jaetaan.nettiin.</p>
  <p class='info_teksti'>Tällaisia ovat maksulliset tapahtumat, ilmaistapahtumat, 
                         joissa ei ole muuta ohjelmaa kuin joidenkin asioiden 
                         myyminen yms.</p>
  <p class='info_teksti'>Poista tällaiset tapahtumat.</p>
  <br>
  <p class='info_teksti'>Kaikki poistetut tapahtumat menevät estolistalle, eivätkä ne sen jälkeen enää ilmesty 
                         tulevien hakujen tuloksiin.</p>
  <br>
  <p class='info_teksti'>Kun olet tarkistanut kaikki ilmoitukset ja muokattavaa tai poistettavaa ei enää ole, julkaise tapahtumat.</p>
  <br>
  <p class='info_teksti'><b> Julkaisu</b></p>
  <br>
  <p class='info_teksti'>Klikkaa vihreää "Julkaise"-nappia, ja vahvista julkaisuaikomuksesi klikkaamalla 
                         esiin tulevaa vihreää "Kyllä"-nappia.
  </p>
  <p class='info_teksti'>Ohjelma julkaisee kaikki tapahtumat, joita et ole poistanut.
  </p>

  <p class='info_teksti'>Julkaistuksi tulevat sekä muokatut että muokkaamattomat tapahtumat. 
  </p> 
  <br>
  <p class='info_teksti'>Jos et haluakaan julkaista, klikkaa esiin tulevaa punaista "Ei"-nappia. 
  </p> 
  <br>
  <p class='info_teksti'>Homma on valmis.</p>
  <p class='info_teksti'>Kiitos sinulle :-)</p>
  <br>
  <br>
  <button id="button_2" type="button" onclick="julkaisu_varmistus()">Julkaise</button>

  <div id='julkaise_varmistus'>
    <br><br>
    <p class='info_teksti varmistus_kysymys_2'>Haluatko varmasti julkaista?</p>

    <form action="" method="post">
      <input id="julkaise_l_e_ilmoitukset_nappi" type="submit" value="Kyllä" name="julkaise">
    </form>

    <button id="button_3" type="button" onclick="julkaisu_varmistus_ei_vastaus()">Ei</button>
  </div>

  <script>
    function julkaisu_varmistus() {
      document.getElementById('julkaise_varmistus').style.display = 'inline';
    }

    function julkaisu_varmistus_ei_vastaus() {
      document.getElementById('julkaise_varmistus').style.display = 'none';
    }
  </script>

  <br><br><br><br>


<?php

// Listaa ilmoitukset

// Funktiot päivämäärille: Tietokannasta suomalaiseen muotoon taulukkoon.

  function date_FIN($date) {
    $dx = explode('-', $date);
    $date = $dx[2].'.'.$dx[1].'.'.$dx[0];
    return $date;
  }

  function date_FIN_2($date) {
    $dx = explode(":", $date);
    $date = $dx[0].".".$dx[1];
    return $date;
  }

  // Luo paginationin, osa I.

  //Ilmoituksia per sivu
  $per_page = 10;

  if (isset($_GET['page'])) {
    $page = mysqli_real_escape_string($conn, $_GET['page']);
  }
  else {
    $page=1;
  }

  // Sivut alkavat 0:sta ja kerrotaan Per Pagella.
  $start_from = ($page-1) * $per_page;   

  $sql = "SELECT * FROM ilmoitukset, osastot
          WHERE ilmoitukset.id=osastot.id
          AND ilmoitukset.julkaistu='ei'
          AND ilmoitukset.source='linked_events'
          ORDER BY tapahtumaAlkaa ASC, klo_I ASC
          LIMIT $start_from, $per_page";

   $result = mysqli_query($conn, $sql);

?>
                                 
<!--Listaa haetut tiedot taulukossa.-->

<span id='listaus_ankkuri_2'></span>

<table id='ilmoitusten_listaus_tapahtumat'>

<?php   

  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
            
      $dx = explode('-', $row['tapahtumaAlkaa']);
      $kk = $dx[1];

      $dx = explode('-', $row['tapahtumaAlkaa']);
      $pv = $dx[2];

      $dx = explode('-', $row['tapahtumaAlkaa']);
      $vvvv = $dx[0]; 

      $jd = gregoriantojd($kk, $pv, $vvvv);
      $viikon_paiva_englanniksi = jddayofweek($jd,1);

      if ($viikon_paiva_englanniksi == 'Monday'){
        $viikon_paiva_suomeksi = 'Maanantai';
      }

      if ($viikon_paiva_englanniksi == 'Tuesday'){
        $viikon_paiva_suomeksi = 'Tiistai';
      }

      if ($viikon_paiva_englanniksi == 'Wednesday'){
        $viikon_paiva_suomeksi = 'Keskiviikko';
      }

      if ($viikon_paiva_englanniksi == 'Thursday'){
        $viikon_paiva_suomeksi = 'Torstai';
      }

      if ($viikon_paiva_englanniksi == 'Friday'){
        $viikon_paiva_suomeksi = 'Perjantai';
      }

      if ($viikon_paiva_englanniksi == 'Saturday'){
        $viikon_paiva_suomeksi = 'Lauantai';
      }

      if ($viikon_paiva_englanniksi == 'Sunday'){
        $viikon_paiva_suomeksi = 'Sunnuntai';
      }
      
      $osasto = $row['elokuvat'] . 
      $row['improvisointi'] . 
      $row['keskustelu'] . 
      $row['kirjallisuus'] . 
      $row['kuvataide'] .
      $row['kasityot'] .
      $row['leikkiminen'] .
      $row['liikunta'] .
      $row['luento'] .
      $row['musiikki'] .
      $row['nayttelyt'] .
      $row['oppiminen'] .
      $row['pelaaminen'] .
      $row['politiikka'] .
      $row['runonlausunta'] . 
      $row['sadunkerronta'] .
      $row['tanssi'] .
      $row['tarinankerronta'] .
      $row['teatteri'] . 
      $row['tyopaja'] . 
      $row['urheilu'] . 
      $row['uskonto'] . 
      $row['yhdessa_oleminen'] . 
      $row['muut_tapahtumat'] . 
      $row['aikuiset'] . 
      $row['lapset'] . 
      $row['nuoret'] . 
      $row['seniorit'] .
      $row['miehet'] . 
      $row['naiset']; 

?> 

  <tbody>

    <tr class='listaus_rivi_hallinnointi'>

      <td class='listaus_solu'>
        <a href='https://jaetaan.net/admin/linked_events_edit_category_or_delete.php?urlMuokkaaTaiPoista=<?php echo $row["urlMuokkaaTaiPoista"]; ?>' target="_blank"> 
          <img class='listaus_kuva' src='<?php if ($row["source"] != "lomake" && $row["source"] != "h_lomake" &&  $row["kuva1"] != "oletuskuva_1234.jpg") {echo htmlspecialchars($row["kuva1"], ENT_QUOTES, "UTF-8"); } else {echo "https://jaetaan.net/kuvat/rajatut_kuvat/" . htmlspecialchars($row["pieni_kuva_1"], ENT_QUOTES, "UTF-8"); } ?>'>
        </a> 
      </td>

      <td class='listaus_solu'>
        <a id='listaus_otsikko' class='listaus_linkin_teksti' href="https://jaetaan.net/admin/linked_events_edit_category_or_delete.php?urlMuokkaaTaiPoista=<?php echo htmlspecialchars($row['urlMuokkaaTaiPoista'], ENT_QUOTES, 'UTF-8'); ?>" target="_blank">
          <p class='katoava_pieni'>
            <b>
              <?php echo rtrim(substr(htmlspecialchars($row['otsikko'], ENT_QUOTES, 'UTF-8'),0,38)); 
              if (strlen(htmlspecialchars($row['otsikko'], ENT_QUOTES, 'UTF-8')) > 38) {echo '...';} ?>
            </b>
          </p>
        </a>
                                
        <a id='listaus_otsikko' class='listaus_linkin_teksti' href="https://jaetaan.net/admin/linked_events_edit_category_or_delete.php?urlMuokkaaTaiPoista=<?php echo htmlspecialchars($row['urlMuokkaaTaiPoista'], ENT_QUOTES, 'UTF-8'); ?>" target="_blank">
          <p class='katoava_iso'>
            <b>
              <?php echo rtrim(substr(htmlspecialchars($row['otsikko'], ENT_QUOTES, 'UTF-8'),0,60)); 
              if (strlen(htmlspecialchars($row['otsikko'], ENT_QUOTES, 'UTF-8')) > 60) {echo '...';} ?>
            </b>
          </p>
        </a>

        <a id='listaus_osasto' class='listaus_linkin_teksti' href='https://jaetaan.net/admin/linked_events_edit_category_or_delete.php?urlMuokkaaTaiPoista=<?php echo htmlspecialchars($row["urlMuokkaaTaiPoista"], ENT_QUOTES, "UTF-8"); ?>' target="_blank">
          <p id='listaus_osasto_p' class='p_katoavat katoava_pieni'>
            <?php $jee_jee_jee=substr(htmlspecialchars($osasto, ENT_QUOTES, 'UTF-8'),0,38); 
            echo rtrim(htmlspecialchars($row['ylaosasto'], ENT_QUOTES, 'UTF-8') . '<br>' . str_replace('_',' ',$jee_jee_jee));
            if (strlen(htmlspecialchars($osasto, ENT_QUOTES, 'UTF-8')) > 38) {echo '...';} ?>
          </p>        
        </a>

        <a id='listaus_osasto' class='listaus_linkin_teksti' href='https://jaetaan.net//admin/linked_events_edit_category_or_delete.php?urlMuokkaaTaiPoista=<?php echo htmlspecialchars($row["urlMuokkaaTaiPoista"], ENT_QUOTES, "UTF-8"); ?>' target="_blank">
          <p id='listaus_osasto_p' class='p_katoavat katoava_iso'>
            <?php $jee_jee_jee=substr(htmlspecialchars($osasto, ENT_QUOTES, 'UTF-8'),0,60); 
            echo rtrim(htmlspecialchars($row['ylaosasto'], ENT_QUOTES, 'UTF-8') . '<br>' . str_replace('_',' ',$jee_jee_jee)); 
            if (strlen(htmlspecialchars($osasto, ENT_QUOTES, 'UTF-8')) > 60) {echo '...';}?>
          </p>        
        </a>
                                 
        <a id='listaus_paikka' class='listaus_linkin_teksti' href='https://jaetaan.net/admin/linked_events_edit_category_or_delete.php?urlMuokkaaTaiPoista=<?php echo htmlspecialchars($row["urlMuokkaaTaiPoista"], ENT_QUOTES, "UTF-8"); ?>' target="_blank">
          <p id='listaus_paikka_p' class='p_katoavat katoava_pieni'>
            <?php echo rtrim(substr(htmlspecialchars($row['paikka'], ENT_QUOTES, 'UTF-8'),0,38)); 
            if (strlen(htmlspecialchars($row['paikka'], ENT_QUOTES, 'UTF-8')) > 38) {echo '...';} ?>
          </p>
        </a>

        <a id='listaus_paikka' class='listaus_linkin_teksti' href='https://jaetaan.net/admin/linked_events_edit_category_or_delete.php?urlMuokkaaTaiPoista=<?php echo htmlspecialchars($row["urlMuokkaaTaiPoista"], ENT_QUOTES, "UTF-8"); ?>' target="_blank">
          <p id='listaus_paikka_p' class='p_katoavat katoava_iso'>
            <?php echo rtrim(substr(htmlspecialchars($row['paikka'], ENT_QUOTES, 'UTF-8'),0,60)); 
            if (strlen(htmlspecialchars($row['paikka'], ENT_QUOTES, 'UTF-8')) > 60) {echo '...';} ?>
          </p>
        </a>

        <a id='listaus_kaupunki' class='listaus_linkin_teksti' href='https://jaetaan.net/admin/linked_events_edit_category_or_delete.php?urlMuokkaaTaiPoista=<?php echo htmlspecialchars($row["urlMuokkaaTaiPoista"], ENT_QUOTES, "UTF-8"); ?>' target="_blank">
          <p id='listaus_kaupunki_p' class='p_katoavat'>
            <?php echo htmlspecialchars($row['kaupunki'], ENT_QUOTES, 'UTF-8'); ?>
          </p>
        </a>

        <a id='listaus_viikon_paiva_suomeksi' class='listaus_linkin_teksti' href='https://jaetaan.net/admin/linked_events_edit_category_or_delete.php?urlMuokkaaTaiPoista=<?php echo htmlspecialchars($row["urlMuokkaaTaiPoista"], ENT_QUOTES, "UTF-8"); ?>' target="_blank"> 
          <p class='paivays_katoaa_pieni'>
            <?php echo substr($viikon_paiva_suomeksi,0,2) . ' ' . date_FIN(substr(htmlspecialchars($row['tapahtumaAlkaa'], ENT_QUOTES, "UTF-8"),0,10)) . ' klo ' . date_FIN_2(htmlspecialchars($row['klo_I'], ENT_QUOTES, "UTF-8")); ?>
          </p>
        </a>
      </td>

      <td class='listaus_solu paivays_katoaa'>
        <a id='listaus_viikon_paiva_suomeksi' class='listaus_linkin_teksti' href='https://jaetaan.net/admin/linked_events_edit_category_or_delete.php?urlMuokkaaTaiPoista=<?php echo htmlspecialchars($row["urlMuokkaaTaiPoista"], ENT_QUOTES, "UTF-8"); ?>' target="_blank"> 
          <p>
            <b>         
              <?php echo $viikon_paiva_suomeksi; ?>
            </b>
          </p>
        </a>

        <a id='listaus_tapahtuma_alkaa' class='listaus_linkin_teksti' href='https://jaetaan.net/admin/linked_events_edit_category_or_delete.php?urlMuokkaaTaiPoista=<?php echo htmlspecialchars($row["urlMuokkaaTaiPoista"], ENT_QUOTES, "UTF-8"); ?>' target="_blank"> 
          <p>
            <?php echo date_FIN(substr(htmlspecialchars($row['tapahtumaAlkaa'], ENT_QUOTES, "UTF-8"),0,10)); ?>
          </p>
        </a>
        
        <a id='listaus_klo_I' class='listaus_linkin_teksti' href='https://jaetaan.net/admin/linked_events_edit_category_or_delete.php?urlMuokkaaTaiPoista=<?php echo htmlspecialchars($row["urlMuokkaaTaiPoista"], ENT_QUOTES, "UTF-8"); ?>' target="_blank">
          <p>
            <?php echo 'klo ' . date_FIN_2(htmlspecialchars($row['klo_I'], ENT_QUOTES, "UTF-8")); ?>
          </p>
        </a>
      </td>
                   
    </tr>

  </tbody>

<?php
  
    }
  } 

  else {
    echo 'Ei julkaisemattomia Linked Events -tapahtumia.';
  }

?>

</table>

<?php

$sql = "SELECT * 
        FROM ilmoitukset, osastot
        WHERE ilmoitukset.id=osastot.id
        AND ilmoitukset.julkaistu='ei'
        AND ilmoitukset.source='linked_events'"; 
$result = mysqli_query($conn, $sql);

// Count the total records
$total_records = mysqli_num_rows($result);

//Using ceil function to divide the total records on per page
$total_pages = ceil($total_records / $per_page);

$page_I = mysqli_real_escape_string($conn, $_GET['page']);

if ($page_I < 1 || $page_I == '' || $page_I == 1 
|| $page_I == 2) {
  $page_II = 3;
}

elseif ($page_I == $total_pages - 2 || $page_I == $total_pages - 1 
|| $page_I == $total_pages || $page_I > $total_pages) {
  $page_II = $total_pages - 2;
}

else {
  $page_II = $page_I;
}

echo '<div id="pagination_lohko">';
echo '<ul id="pagination_koko_lista">';

if ($total_pages <= 5) {
  for ($i=1; $i<=$total_pages; $i++) {
    if ($page_I == $i || $page_I == '' && $i == 1) {
      echo '<li class="pagination_lista"><a id="active" class="pagination" href="https://jaetaan.net/admin/linked_events.php?page=' . $i . '&Listaa_ilmoitukset=listaa+ilmoitukset#listaus_ankkuri_2">' . $i . '</a></li>';
    } 
    else {
      echo '<li class="pagination_lista"><a class="pagination" href="https://jaetaan.net/admin/linked_events.php?page=' . $i . '&listaa_ilmoitukset=Listaa+ilmoitukset#listaus_ankkuri_2">' . $i . '</a></li>';
    }
  }
} 
 
else {
  for ($i=$page_II - 2; $i<=$page_II + 2; $i++) {
    if ($page_I == $i || $page_I == '' && $i == 1) {
      echo '<li class="pagination_lista"><a id="active" class="pagination" href="https://jaetaan.net/admin/linked_events.php?page=' . $i . '&listaa_ilmoitukset=Listaa+ilmoitukset#listaus_ankkuri_2">' . $i . '</a></li>';
    } 
    else {
      echo '<li class="pagination_lista"><a class="pagination" href="https://jaetaan.net/admin/linked_events.php?page=' . $i . '&listaa_ilmoitukset=Listaa+ilmoitukset#listaus_ankkuri_2">' . $i . '</a></li>';
    }
  }
}

echo '</ul>';
echo '</div> <br><br>';


if (isset ($_POST['julkaise'])) {

  $sql_10 = "UPDATE ilmoitukset 
             SET julkaistu='kylla'
             WHERE julkaistu='ei'
             AND source='linked_events'";

  mysqli_query($conn, $sql_10);

}

mysqli_close($conn);

?>      

</div>

</body>
</html>
