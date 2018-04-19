<!DOCTYPE html>
<html>

<head>

  <script>

    if(window.location.protocol != 'https:') {
      location.href = location.href.replace("http://", "https://");
    }

  </script>

  <title>Jaetaan.net – kaikkea ilmaista</title>

  <link rel='stylesheet' type='text/css' href='muotoilu.css'>

  <link rel="shortcut icon" type="image/png" href="https://jaetaan.net/kuvat/favicon1.jpg"/>

  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <meta charset='UTF-8'>
  <meta name='keywords' content='jakaminen, ilmainen, annetaan, pyydetään, lainataan, ilmaistapahtuma'>
  <meta name='description' content='Jaetaan.net kokoaa tiedon pääkapunkiseudun ilmaisista
                                    asioista yhteen paikkaan helposti löydettäväksi. Selaa ilmoituksia
                                    ja ilmoita itse!'>

  <meta property="og:title" content="Jaetaan.net" />
  <meta property="og:description" content="Jaetaan.net kokoaa tiedon pääkapunkiseudun ilmaisista
                                           asioista yhteen paikkaan helposti löydettäväksi. Selaa ilmoituksia
                                           ja ilmoita itse!" />
  <meta property="og:image" content="https://jaetaan.net/kuvat/kaivopuisto-helsinki.jpg" />
  <meta property="og:url" content="https://jaetaan.net" />
  <meta property="og:type" content="website" /> 
  <meta property="fb:app_id" content="your facebook app id here" /> 
  <meta property="og:site_name" content="Jaetaan.net" /> 
  <meta property="og:locale" content="fi_FI">

  <script src='toiminnallisuuksia.js'></script>

</head>


<body>

<?php
  include 'includes/header.php';
  include 'includes/nav_bar_public.php';
?>

<div class='keski_osa'>

  <noscript>
    <br>
    <p class = 'noscript_p'>Selaimessasi ei ole JavaScript päällä.</p>
    <br>
    <p>Tämä sivu toimii vain, jos JavaScript on päällä.</p>
    <p>Laita JavaScript päälle ja lataa tämä sivu uudelleen.</p>
  </noscript>

  <div class = 'noscript'>

    <script>
      document.getElementsByClassName('noscript')[0].style.display='block';
    </script>

    <br>
    <p class='koko_ilmoitus_teksti etu_vasen'>
      Annetaan Pyydetään Lainataan Tapahtumia Tavaroita Apua Taidetta Liikuntaa Oppimista jne.
    </p>

    <br>

    <p class='koko_ilmoitus_teksti etu_vasen'>
      <b>
        Selaa ilmoituksia ja ilmoita itse!
      </b>
    </p>
    <br>
    <br>

    <?php

      include 'includes/ilmoitusten_lukumaara.php'; 
      include 'includes/ilmoitusten_haku.php';

    ?>

    <span id='listaus_ankkuri'></span>

    <?php

      if (!isset($_GET['ylaosasto'])) {
        echo "<script>document.getElementById('haku_osastot_tapahtumat').style.display='block';</script>";
      }

      if (isset($_GET['ylaosasto']) && $_GET['ylaosasto'] == 'Tapahtumat') {
        echo "<script>document.getElementById('haku_osastot_tapahtumat').style.display='block';</script>";
      }

      if (isset($_GET['ylaosasto']) && $_GET['ylaosasto'] == 'Annetaan apua') {
        echo "<script>document.getElementById('haku_osastot_annetaan_apua').style.display='block';</script>";
      }

      if (isset($_GET['ylaosasto']) && $_GET['ylaosasto'] == 'Annetaan lainaan') {
        echo "<script>document.getElementById('haku_osastot_annetaan_lainaan').style.display='block';</script>";
      }

      if (isset($_GET['ylaosasto']) && $_GET['ylaosasto'] == 'Annetaan ruokaa') {
        echo "<script>document.getElementById('haku_osastot_annetaan_ruokaa').style.display='block';</script>";
      }

      if (isset($_GET['ylaosasto']) && $_GET['ylaosasto'] == 'Annetaan tavaroita') {
        echo "<script>document.getElementById('haku_osastot_annetaan_tavaroita').style.display='block';</script>";
      }

      if (isset($_GET['ylaosasto']) && $_GET['ylaosasto'] == 'Annetaan tekemistä') {
        echo "<script>document.getElementById('haku_osastot_annetaan_tekemista').style.display='block';</script>";
      }

      if (isset($_GET['ylaosasto']) && $_GET['ylaosasto'] == 'Muut annetaan') {
        echo "<script>document.getElementById('haku_osastot_muut_annetaan').style.display='block';</script>";
      }

      if (isset($_GET['ylaosasto']) && $_GET['ylaosasto'] == 'Pyydetään apua') {
        echo "<script>document.getElementById('haku_osastot_pyydetaan_apua').style.display='block';</script>";
      }

      if (isset($_GET['ylaosasto']) && $_GET['ylaosasto'] == 'Pyydetään lainaan') {
        echo "<script>document.getElementById('haku_osastot_pyydetaan_lainaan').style.display='block';</script>";
      }

      if (isset($_GET['ylaosasto']) && $_GET['ylaosasto'] == 'Pyydetään ruokaa') {
        echo "<script>document.getElementById('haku_osastot_pyydetaan_ruokaa').style.display='block';</script>";
      }

      if (isset($_GET['ylaosasto']) && $_GET['ylaosasto'] == 'Pyydetään tavaroita') {
        echo "<script>document.getElementById('haku_osastot_pyydetaan_tavaroita').style.display='block';</script>";
      }

      if (isset($_GET['ylaosasto']) && $_GET['ylaosasto'] == 'Pyydetään tekemistä') {
        echo "<script>document.getElementById('haku_osastot_pyydetaan_tekemista').style.display='block';</script>";
      }

      if (isset($_GET['ylaosasto']) && $_GET['ylaosasto'] == 'Muut pyydetään') {
        echo "<script>document.getElementById('haku_osastot_muut_pyydetaan').style.display='block';</script>";
      }

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

      if (!isset($_GET['kaupunki']) && !isset($_GET['ylaosasto'])) {
          // Muodostaa yhteyden tietokantaan.
          include 'includes/luo_yhteyden_tietokantaan.php';

      // Luo paginationin, osa I.

      //Ilmoituksia per sivu
      $per_page = 20;

      if (isset($_GET['page'])) {
          $page = mysqli_real_escape_string($conn, $_GET['page']);
      }
      else {
          $page=1;
      }

      // Sivut alkavat 0:sta ja kerrotaan Per Pagella.
      $start_from = ($page-1) * $per_page;

      $kaupunki1 = mysqli_real_escape_string($conn, 'Helsinki');
      $ylaosasto = mysqli_real_escape_string($conn, 'Tapahtumat');

      $query="SELECT * FROM ilmoitukset, osastot
                       WHERE ilmoitukset.id=osastot.id
                       AND ilmoitukset.julkaistu='kylla' 
                       AND kaupunki='$kaupunki1' 
                       AND ylaosasto='$ylaosasto' 
                       ORDER BY tapahtumaAlkaa ASC, klo_I ASC 
                       LIMIT $start_from, $per_page";

      $result = mysqli_query($conn, $query);


      $query_2 = "SELECT * FROM ilmoitukset, osastot
                           WHERE ilmoitukset.id=osastot.id 
                           AND ilmoitukset.julkaistu='kylla'
                           AND kaupunki='$kaupunki1' 
                           AND ylaosasto='$ylaosasto'";

      $result = mysqli_query($conn, $query);
      $result_2 = mysqli_query($conn, $query_2);

      /* echo '<br><br><p class="info_teksti">Helsingistä löytyi ' . mysqli_num_rows($result_2) . 
      ' tapahtumaa</p><br>'; */

    ?>
                                 
    <!--Listaa haetut tiedot taulukossa.-->

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

              <tr class='listaus_rivi' onclick="linkkiKokoIlmoitukseen('<?=htmlspecialchars($row["urlKokoIlmoitus"], ENT_QUOTES, "UTF-8"); ?>')">

                <td class='listaus_solu'>
                  <a href='https://jaetaan.net/ilmoitukset?urlKokoIlmoitus=<?php echo htmlspecialchars($row["urlKokoIlmoitus"], ENT_QUOTES, "UTF-8"); ?>'> 
                    <img class='listaus_kuva' src='<?php if ($row["source"] != "lomake" && $row["source"] != "h_lomake" &&  $row["kuva1"] != "oletuskuva_1234.jpg") {echo htmlspecialchars($row["kuva1"], ENT_QUOTES, "UTF-8"); } else {echo "https://jaetaan.net/kuvat/rajatut_kuvat/" . htmlspecialchars($row["pieni_kuva_1"], ENT_QUOTES, "UTF-8"); } ?>'>
                  </a> 
                </td>

                <td class='listaus_solu'>
                  <a id='listaus_otsikko' class='listaus_linkin_teksti' href="https://jaetaan.net/ilmoitukset?urlKokoIlmoitus=<?php echo htmlspecialchars($row['urlKokoIlmoitus'], ENT_QUOTES, 'UTF-8'); ?>">
                    <p class='katoava_pieni'>
                      <b>
                        <?php echo rtrim(substr(htmlspecialchars($row['otsikko'], ENT_QUOTES, 'UTF-8'),0,38)); 
                          if (strlen(htmlspecialchars($row['otsikko'], ENT_QUOTES, 'UTF-8')) > 38) {echo '...';} ?>
                      </b>
                    </p>
                  </a>
                    
                  <a id='listaus_otsikko' class='listaus_linkin_teksti' href="https://jaetaan.net/ilmoitukset?urlKokoIlmoitus=<?php echo htmlspecialchars($row['urlKokoIlmoitus'], ENT_QUOTES, 'UTF-8'); ?>">
                    <p class='katoava_iso'>
                      <b>
                        <?php echo rtrim(substr(htmlspecialchars($row['otsikko'], ENT_QUOTES, 'UTF-8'),0,60)); 
                          if (strlen(htmlspecialchars($row['otsikko'], ENT_QUOTES, 'UTF-8')) > 60) {echo '...';} ?>
                        </b>
                      </p>
                  </a>

                  <a id='listaus_osasto' class='listaus_linkin_teksti' href='https://jaetaan.net/ilmoitukset?urlKokoIlmoitus=<?php echo htmlspecialchars($row["urlKokoIlmoitus"], ENT_QUOTES, "UTF-8"); ?>'>
                    <p id='listaus_osasto_p' class='p_katoavat katoava_pieni'>
                      <?php $jee_jee_jee=substr(htmlspecialchars($osasto, ENT_QUOTES, 'UTF-8'),0,38); 
                      echo rtrim(htmlspecialchars($row['ylaosasto'], ENT_QUOTES, 'UTF-8') . '<br>' . str_replace('_',' ',$jee_jee_jee));
                      if (strlen(htmlspecialchars($osasto, ENT_QUOTES, 'UTF-8')) > 38) {echo '...';} ?>
                          
                    </p>        
                  </a>

                  <a id='listaus_osasto' class='listaus_linkin_teksti' href='https://jaetaan.net/ilmoitukset?urlKokoIlmoitus=<?php echo htmlspecialchars($row["urlKokoIlmoitus"], ENT_QUOTES, "UTF-8"); ?>'>
                    <p id='listaus_osasto_p' class='p_katoavat katoava_iso'>
                      <?php $jee_jee_jee=substr(htmlspecialchars($osasto, ENT_QUOTES, 'UTF-8'),0,60); 
                      echo rtrim(htmlspecialchars($row['ylaosasto'], ENT_QUOTES, 'UTF-8') . '<br>' . str_replace('_',' ',$jee_jee_jee)); 
                      if (strlen(htmlspecialchars($osasto, ENT_QUOTES, 'UTF-8')) > 60) {echo '...';}?>
                    </p>        
                  </a>
                     
                  <a id='listaus_paikka' class='listaus_linkin_teksti' href='https://jaetaan.net/ilmoitukset?urlKokoIlmoitus=<?php echo htmlspecialchars($row["urlKokoIlmoitus"], ENT_QUOTES, "UTF-8"); ?>'>
                    <p id='listaus_paikka_p' class='p_katoavat katoava_pieni'>
                      <?php echo rtrim(substr(htmlspecialchars($row['paikka'], ENT_QUOTES, 'UTF-8'),0,38)); 
                      if (strlen(htmlspecialchars($row['paikka'], ENT_QUOTES, 'UTF-8')) > 38) {echo '...';} ?>
                    </p>
                  </a>

                  <a id='listaus_paikka' class='listaus_linkin_teksti' href='https://jaetaan.net/ilmoitukset?urlKokoIlmoitus=<?php echo htmlspecialchars($row["urlKokoIlmoitus"], ENT_QUOTES, "UTF-8"); ?>'>
                    <p id='listaus_paikka_p' class='p_katoavat katoava_iso'>
                      <?php echo rtrim(substr(htmlspecialchars($row['paikka'], ENT_QUOTES, 'UTF-8'),0,60)); 
                      if (strlen(htmlspecialchars($row['paikka'], ENT_QUOTES, 'UTF-8')) > 60) {echo '...';} ?>
                    </p>
                  </a>

                  <a id='listaus_kaupunki' class='listaus_linkin_teksti' href='https://jaetaan.net/ilmoitukset?urlKokoIlmoitus=<?php echo htmlspecialchars($row["urlKokoIlmoitus"], ENT_QUOTES, "UTF-8"); ?>'>
                    <p id='listaus_kaupunki_p' class='p_katoavat'>
                      <?php echo htmlspecialchars($row['kaupunki'], ENT_QUOTES, 'UTF-8'); ?>
                    </p>
                  </a>

                  <?php 

                  if ($ylaosasto == 'Tapahtumat') { ?> 
                                     
                    <a id='listaus_viikon_paiva_suomeksi' class='listaus_linkin_teksti' href='https://jaetaan.net/ilmoitukset?urlKokoIlmoitus=<?php echo htmlspecialchars($row["urlKokoIlmoitus"], ENT_QUOTES, "UTF-8"); ?>'> 
                      <p class='paivays_katoaa_pieni'>
                        <?php echo substr($viikon_paiva_suomeksi,0,2) . ' ' . date_FIN(substr(htmlspecialchars($row['tapahtumaAlkaa'], ENT_QUOTES, "UTF-8"),0,10)) . ' klo ' . date_FIN_2(htmlspecialchars($row['klo_I'], ENT_QUOTES, "UTF-8")); ?>
                      </p>
                    </a>
             
                  <?php } 

                  if ($ylaosasto != 'Tapahtumat') { ?> 
              
                    <a id='listaus_ilmoitus_lisatty' class='listaus_linkin_teksti' href='https://jaetaan.net/ilmoitukset?urlKokoIlmoitus=<?php echo htmlspecialchars($row["urlKokoIlmoitus"], ENT_QUOTES, "UTF-8"); ?>'>
                      <p class='paivays_katoaa_pieni'>
                        <?php echo date_FIN(substr(htmlspecialchars($row['pvm'], ENT_QUOTES, "UTF-8"),0,10)); ?>
                      </p>
                    </a>

                  <?php } ?>

                </td>

                <?php 

                if ($ylaosasto == 'Tapahtumat') { ?>

                  <td class='listaus_solu paivays_katoaa'>
                    <a id='listaus_viikon_paiva_suomeksi' class='listaus_linkin_teksti' href='https://jaetaan.net/ilmoitukset?urlKokoIlmoitus=<?php echo htmlspecialchars($row["urlKokoIlmoitus"], ENT_QUOTES, "UTF-8"); ?>'> 
                      <p>
                        <b>         
                          <?php echo $viikon_paiva_suomeksi; ?>
                        </b>
                      </p>
                    </a>

                    <a id='listaus_tapahtuma_alkaa' class='listaus_linkin_teksti' href='https://jaetaan.net/ilmoitukset?urlKokoIlmoitus=<?php echo htmlspecialchars($row["urlKokoIlmoitus"], ENT_QUOTES, "UTF-8"); ?>'> 
                      <p>
                        <?php echo date_FIN(substr(htmlspecialchars($row['tapahtumaAlkaa'], ENT_QUOTES, "UTF-8"),0,10)); ?>
                      </p>
                    </a>
          
                    <a id='listaus_klo_I' class='listaus_linkin_teksti' href='https://jaetaan.net/ilmoitukset?urlKokoIlmoitus=<?php echo htmlspecialchars($row["urlKokoIlmoitus"], ENT_QUOTES, "UTF-8"); ?>'>
                      <p>
                        <?php echo 'klo ' . date_FIN_2(htmlspecialchars($row['klo_I'], ENT_QUOTES, "UTF-8")); ?>
                      </p>
                    </a>
                  </td>

                <?php } 

                if ($ylaosasto != 'Tapahtumat') { ?>

                  <td class='listaus_solu paivays_katoaa'> 
                    <a id='listaus_ilmoitus_lisatty' class='listaus_linkin_teksti' href='https://jaetaan.net/ilmoitukset?urlKokoIlmoitus=<?php echo htmlspecialchars($row["urlKokoIlmoitus"], ENT_QUOTES, "UTF-8"); ?>'>
                      <p>
                        <?php echo date_FIN(substr(htmlspecialchars($row['pvm'], ENT_QUOTES, "UTF-8"),0,10)); ?>
                      </p>
                    </a>
                  </td>

                <?php } ?>

              </tr>

            </tbody>

      <?php
      
          }
        
        } 

      ?>

    </table>

    <?php

    $query="SELECT * FROM ilmoitukset, osastot
                     WHERE ilmoitukset.id=osastot.id 
                     AND ilmoitukset.julkaistu='kylla'
                     AND kaupunki='$kaupunki1' 
                     AND ylaosasto='$ylaosasto'"; 

    $result = mysqli_query($conn, $query);

    // Count the total records
    $total_records = mysqli_num_rows($result);

    //Using ceil function to divide the total records on per page
    $total_pages = ceil($total_records / $per_page);

    $kaupunki1 = mysqli_real_escape_string($conn, 'Helsinki');
    $ylaosasto = mysqli_real_escape_string($conn, 'Tapahtumat');

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
              echo '<li class="pagination_lista"><a id="active" class="pagination" href="https://jaetaan.net?page=' . $i . '&kaupunki=' . $kaupunki1 . '&ylaosasto=' . $ylaosasto . '#listaus_ankkuri">' . $i . '</a></li>';
            } 
            else {
              echo '<li class="pagination_lista"><a class="pagination" href="https://jaetaan.net?page=' . $i . '&kaupunki=' . $kaupunki1 . 
'&ylaosasto=' . $ylaosasto . '#listaus_ankkuri">' . $i . '</a></li>';
            }
            }
          } 
        else {
          for ($i=$page_II - 2; $i<=$page_II + 2; $i++) {
            if ($page_I == $i || $page_I == '' && $i == 1) {
              echo '<li class="pagination_lista"><a id="active" class="pagination" href="https://jaetaan.net?page=' . $i . '&kaupunki=' . $kaupunki1 . 
'&ylaosasto=' . $ylaosasto . '#listaus_ankkuri">' . $i . '</a></li>';
            } 
            else {
              echo '<li class="pagination_lista"><a class="pagination" href="https://jaetaan.net?page=' . $i . '&kaupunki=' . $kaupunki1 . 
'&ylaosasto=' . $ylaosasto . '#listaus_ankkuri">' . $i . '</a></li>';
            }
            }
          }

      echo '</ul>';

    echo '</div> <br><br>';
                     
        }

        // Jos on tehty haku tai klikattu paginationia

        if (isset($_GET['kaupunki']) && isset($_GET['ylaosasto'])) {
          // Muodostaa yhteyden tietokantaan.
          include 'includes/luo_yhteyden_tietokantaan.php';

          // Luo paginationin, osa I.

          //Ilmoituksia per sivu
          $per_page = 20;

          if (isset($_GET['page'])) {
            $page = mysqli_real_escape_string($conn, $_GET['page']);
          }
          else {
            $page=1;
          }

          // Sivut alkavat 0:sta ja kerrotaan Per Pagella.
          $start_from = ($page-1) * $per_page;

          $kaupunki1 = mysqli_real_escape_string($conn, $_GET['kaupunki']);
          $ylaosasto = mysqli_real_escape_string($conn, $_GET['ylaosasto']);
          $sanahaku = mysqli_real_escape_string($conn, $_GET['sanahaku']);

          // Jos ylaosasto tapahtumat

          if ($ylaosasto == 'Tapahtumat') {

            $kaikki_1 = mysqli_real_escape_string($conn, $_GET['o_0']);

            $elokuvat = mysqli_real_escape_string($conn, $_GET['o_1']); 
            $improvisointi = mysqli_real_escape_string($conn, $_GET['o_2']); 
            $keskustelu = mysqli_real_escape_string($conn, $_GET['o_3']);
            $kirjallisuus = mysqli_real_escape_string($conn, $_GET['o_4']); 
            $kuvataide = mysqli_real_escape_string($conn, $_GET['o_5']);
            $kasityot = mysqli_real_escape_string($conn, $_GET['o_6']);
            $leikkiminen = mysqli_real_escape_string($conn, $_GET['o_7']);
            $liikunta = mysqli_real_escape_string($conn, $_GET['o_8']);
            $luento = mysqli_real_escape_string($conn, $_GET['o_9']);
            $musiikki = mysqli_real_escape_string($conn, $_GET['o_10']);
            $nayttelyt = mysqli_real_escape_string($conn, $_GET['o_11']);
            $oppiminen = mysqli_real_escape_string($conn, $_GET['o_12']);
            $pelaaminen = mysqli_real_escape_string($conn, $_GET['o_13']);
            $politiikka = mysqli_real_escape_string($conn, $_GET['o_14']);
            $runonlausunta = mysqli_real_escape_string($conn, $_GET['o_15']);
            $sadunkerronta = mysqli_real_escape_string($conn, $_GET['o_16']);
            $tanssi = mysqli_real_escape_string($conn, $_GET['o_17']);
            $tarinankerronta = mysqli_real_escape_string($conn, $_GET['o_18']);
            $teatteri = mysqli_real_escape_string($conn, $_GET['o_19']);
            $tyopaja = mysqli_real_escape_string($conn, $_GET['o_20']);
            $urheilu = mysqli_real_escape_string($conn, $_GET['o_21']);
            $uskonto = mysqli_real_escape_string($conn, $_GET['o_22']); 
            $yhdessa_oleminen = mysqli_real_escape_string($conn, $_GET['o_23']); 
            $muut_tapahtumat = mysqli_real_escape_string($conn, $_GET['o_24']); 
            $aikuiset = mysqli_real_escape_string($conn, $_GET['o_25']);
            $lapset = mysqli_real_escape_string($conn, $_GET['o_26']);
            $nuoret = mysqli_real_escape_string($conn, $_GET['o_27']);
            $seniorit = mysqli_real_escape_string($conn, $_GET['o_28']); 
            $miehet = mysqli_real_escape_string($conn, $_GET['o_29']); 
            $naiset = mysqli_real_escape_string($conn, $_GET['o_30']);

            if ($kaikki_1 != 'Kaikki') {

            $query="SELECT * FROM ilmoitukset, osastot
                             WHERE ilmoitukset.id=osastot.id 
                             AND ilmoitukset.julkaistu='kylla'
                             AND kaupunki='$kaupunki1' 
                             AND ylaosasto='$ylaosasto'
                             AND (elokuvat='$elokuvat'
                             OR improvisointi='$improvisointi'
                             OR keskustelu='$keskustelu'
                             OR kirjallisuus='$kirjallisuus'
                             OR kuvataide='$kuvataide'
                             OR kasityot='$kasityot'
                             OR leikkiminen='$leikkiminen'
                             OR liikunta='$liikunta'
                             OR luento='$luento'
                             OR musiikki='$musiikki'
                             OR nayttelyt='$nayttelyt'
                             OR oppiminen='$oppiminen'
                             OR pelaaminen='$pelaaminen'
                             OR politiikka='$politiikka'
                             OR runonlausunta='$runonlausunta'
                             OR sadunkerronta='$sadunkerronta'
                             OR tanssi='$tanssi'
                             OR tarinankerronta='$tarinankerronta'
                             OR teatteri='$teatteri'
                             OR tyopaja='$tyopaja'
                             OR urheilu='$urheilu'
                             OR uskonto='$uskonto'
                             OR yhdessa_oleminen='$yhdessa_oleminen'
                             OR muut_tapahtumat='$muut_tapahtumat'
                             OR aikuiset='$aikuiset'
                             OR lapset='$lapset'
                             OR nuoret='$nuoret'
                             OR seniorit='$seniorit'
                             OR miehet='$miehet'
                             OR naiset='$naiset')
                             AND (otsikko LIKE '%$sanahaku%'
                             OR sisalto LIKE '%$sanahaku%'    
                             OR paikka LIKE '%$sanahaku%'
                             OR tapahtumanOsoite LIKE '%$sanahaku%'
                             OR nimi LIKE '%$sanahaku%'
                             OR nettisivu LIKE '%$sanahaku%')
                             ORDER BY tapahtumaAlkaa ASC, klo_I ASC 
                             LIMIT $start_from, $per_page";

            $query_2 = "SELECT * FROM ilmoitukset, osastot
                                 WHERE ilmoitukset.id=osastot.id 
                                 AND ilmoitukset.julkaistu='kylla'
                                 AND kaupunki='$kaupunki1' 
                                 AND ylaosasto='$ylaosasto'
                                 AND (elokuvat='$elokuvat'
                                 OR improvisointi='$improvisointi'
                                 OR keskustelu='$keskustelu'
                                 OR kirjallisuus='$kirjallisuus'
                                 OR kuvataide='$kuvataide'
                                 OR kasityot='$kasityot'
                                 OR leikkiminen='$leikkiminen'
                                 OR liikunta='$liikunta'
                                 OR luento='$luento'
                                 OR musiikki='$musiikki'
                                 OR nayttelyt='$nayttelyt'
                                 OR oppiminen='$oppiminen'
                                 OR pelaaminen='$pelaaminen'
                                 OR politiikka='$politiikka'
                                 OR runonlausunta='$runonlausunta'
                                 OR sadunkerronta='$sadunkerronta'
                                 OR tanssi='$tanssi'
                                 OR tarinankerronta='$tarinankerronta'
                                 OR teatteri='$teatteri'
                                 OR tyopaja='$tyopaja'
                                 OR urheilu='$urheilu'
                                 OR uskonto='$uskonto'
                                 OR yhdessa_oleminen='$yhdessa_oleminen'
                                 OR muut_tapahtumat='$muut_tapahtumat'
                                 OR aikuiset='$aikuiset'
                                 OR lapset='$lapset'
                                 OR nuoret='$nuoret'
                                 OR seniorit='$seniorit'
                                 OR miehet='$miehet'
                                 OR naiset='$naiset')
                                 AND (otsikko LIKE '%$sanahaku%'
                                 OR sisalto LIKE '%$sanahaku%'    
                                 OR paikka LIKE '%$sanahaku%'
                                 OR tapahtumanOsoite LIKE '%$sanahaku%'
                                 OR nimi LIKE '%$sanahaku%'
                                 OR nettisivu LIKE '%$sanahaku%')";                      

            } 

            if ($kaikki_1 == 'Kaikki') {

              $query="SELECT * FROM ilmoitukset, osastot
                                    WHERE ilmoitukset.id=osastot.id 
                                    AND ilmoitukset.julkaistu='kylla'
                                    AND kaupunki='$kaupunki1' 
                                    AND ylaosasto='$ylaosasto'
                                    AND (otsikko LIKE '%$sanahaku%'
                                    OR sisalto LIKE '%$sanahaku%'    
                                    OR paikka LIKE '%$sanahaku%'
                                    OR tapahtumanOsoite LIKE '%$sanahaku%'
                                    OR nimi LIKE '%$sanahaku%'
                                    OR nettisivu LIKE '%$sanahaku%')
                                    ORDER BY tapahtumaAlkaa ASC, klo_I ASC 
                                    LIMIT $start_from, $per_page";

              $query_2 = "SELECT * FROM ilmoitukset, osastot
                                    WHERE ilmoitukset.id=osastot.id 
                                    AND ilmoitukset.julkaistu='kylla'
                                    AND kaupunki='$kaupunki1' 
                                    AND ylaosasto='$ylaosasto'
                                    AND (otsikko LIKE '%$sanahaku%'
                                    OR sisalto LIKE '%$sanahaku%'    
                                    OR paikka LIKE '%$sanahaku%'
                                    OR tapahtumanOsoite LIKE '%$sanahaku%'
                                    OR nimi LIKE '%$sanahaku%'
                                    OR nettisivu LIKE '%$sanahaku%')";

            }

          }

          // Jos ylaosasto Annetaan apua

          if ($ylaosasto == 'Annetaan apua') {

            $kaikki_2 = mysqli_real_escape_string($conn, $_GET['o_100']);

            if ($kaikki_2 == 'Kaikki') {

              $query="SELECT * FROM ilmoitukset, osastot
                               WHERE ilmoitukset.id=osastot.id 
                               AND ilmoitukset.julkaistu='kylla'
                               AND kaupunki='$kaupunki1' 
                               AND ylaosasto='$ylaosasto'
                               AND (otsikko LIKE '%$sanahaku%'
                               OR sisalto LIKE '%$sanahaku%'    
                               OR paikka LIKE '%$sanahaku%'
                               OR tapahtumanOsoite LIKE '%$sanahaku%'
                               OR nimi LIKE '%$sanahaku%'
                               OR nettisivu LIKE '%$sanahaku%')
                               ORDER BY pvm DESC 
                               LIMIT $start_from, $per_page";

              $query_2 = "SELECT * FROM ilmoitukset, osastot
                                   WHERE ilmoitukset.id=osastot.id 
                                   AND ilmoitukset.julkaistu='kylla'
                                   AND kaupunki='$kaupunki1' 
                                   AND ylaosasto='$ylaosasto'
                                   AND (otsikko LIKE '%$sanahaku%'
                                   OR sisalto LIKE '%$sanahaku%'    
                                   OR paikka LIKE '%$sanahaku%'
                                   OR tapahtumanOsoite LIKE '%$sanahaku%'
                                   OR nimi LIKE '%$sanahaku%'
                                   OR nettisivu LIKE '%$sanahaku%')";

            }

          }

          // Jos ylaosasto Annetaan lainaan

          if ($ylaosasto == 'Annetaan lainaan') {

            $kaikki_3 = mysqli_real_escape_string($conn, $_GET['o_200']);

            if ($kaikki_3 == 'Kaikki') {

              $query="SELECT * FROM ilmoitukset, osastot
                               WHERE ilmoitukset.id=osastot.id 
                               AND ilmoitukset.julkaistu='kylla'
                               AND kaupunki='$kaupunki1' 
                               AND ylaosasto='$ylaosasto'
                               AND (otsikko LIKE '%$sanahaku%'
                               OR sisalto LIKE '%$sanahaku%'    
                               OR paikka LIKE '%$sanahaku%'
                               OR tapahtumanOsoite LIKE '%$sanahaku%'
                               OR nimi LIKE '%$sanahaku%'
                               OR nettisivu LIKE '%$sanahaku%')
                               ORDER BY pvm DESC 
                               LIMIT $start_from, $per_page";

              $query_2 = "SELECT * FROM ilmoitukset, osastot
                                   WHERE ilmoitukset.id=osastot.id 
                                   AND ilmoitukset.julkaistu='kylla'
                                   AND kaupunki='$kaupunki1' 
                                   AND ylaosasto='$ylaosasto'
                                   AND (otsikko LIKE '%$sanahaku%'
                                   OR sisalto LIKE '%$sanahaku%'    
                                   OR paikka LIKE '%$sanahaku%'
                                   OR tapahtumanOsoite LIKE '%$sanahaku%'
                                   OR nimi LIKE '%$sanahaku%'
                                   OR nettisivu LIKE '%$sanahaku%')";

            }

          }

          // Jos ylaosasto Annetaan ruokaa

          if ($ylaosasto == 'Annetaan ruokaa') {

            $kaikki_4 = mysqli_real_escape_string($conn, $_GET['o_300']);

            if ($kaikki_4 == 'Kaikki') {

              $query="SELECT * FROM ilmoitukset, osastot
                               WHERE ilmoitukset.id=osastot.id 
                               AND ilmoitukset.julkaistu='kylla'
                               AND kaupunki='$kaupunki1' 
                               AND ylaosasto='$ylaosasto'
                               AND (otsikko LIKE '%$sanahaku%'
                               OR sisalto LIKE '%$sanahaku%'    
                               OR paikka LIKE '%$sanahaku%'
                               OR tapahtumanOsoite LIKE '%$sanahaku%'
                               OR nimi LIKE '%$sanahaku%'
                               OR nettisivu LIKE '%$sanahaku%')
                               ORDER BY pvm DESC 
                               LIMIT $start_from, $per_page";

              $query_2 = "SELECT * FROM ilmoitukset, osastot
                                   WHERE ilmoitukset.id=osastot.id 
                                   AND ilmoitukset.julkaistu='kylla'
                                   AND kaupunki='$kaupunki1' 
                                   AND ylaosasto='$ylaosasto'
                                   AND (otsikko LIKE '%$sanahaku%'
                                   OR sisalto LIKE '%$sanahaku%'    
                                   OR paikka LIKE '%$sanahaku%'
                                   OR tapahtumanOsoite LIKE '%$sanahaku%'
                                   OR nimi LIKE '%$sanahaku%'
                                   OR nettisivu LIKE '%$sanahaku%')";

            }

          }

          // Jos ylaosasto Annetaan tavaroita

          if ($ylaosasto == 'Annetaan tavaroita') {

            $kaikki_5 = mysqli_real_escape_string($conn, $_GET['o_400']);

            if ($kaikki_5 != 'Kaikki') {

              $elektroniikka = mysqli_real_escape_string($conn, $_GET['o_401']);
              $huonekalut = mysqli_real_escape_string($conn, $_GET['o_402']); 
              $kodinkoneet= mysqli_real_escape_string($conn, $_GET['o_403']); 
              $vaatteet = mysqli_real_escape_string($conn, $_GET['o_404']);
              $muut_annetaan_tavaroita = mysqli_real_escape_string($conn, $_GET['o_405']);

              $query="SELECT * FROM ilmoitukset, osastot
                               WHERE ilmoitukset.id=osastot.id 
                               AND ilmoitukset.julkaistu='kylla'
                               AND kaupunki='$kaupunki1' 
                               AND ylaosasto='$ylaosasto'
                               AND (elektroniikka='$elektroniikka'
                               OR huonekalut='$huonekalut'
                               OR kodinkoneet='$kodinkoneet'
                               OR vaatteet='$vaatteet'
                               OR muut_annetaan_tavaroita='$muut_annetaan_tavaroita')
                               AND (otsikko LIKE '%$sanahaku%'
                               OR sisalto LIKE '%$sanahaku%'    
                               OR paikka LIKE '%$sanahaku%'
                               OR tapahtumanOsoite LIKE '%$sanahaku%'
                               OR nimi LIKE '%$sanahaku%'
                               OR nettisivu LIKE '%$sanahaku%')
                               ORDER BY pvm DESC 
                               LIMIT $start_from, $per_page";

              $query_2 = "SELECT * FROM ilmoitukset, osastot
                                   WHERE ilmoitukset.id=osastot.id 
                                   AND ilmoitukset.julkaistu='kylla'
                                   AND kaupunki='$kaupunki1' 
                                   AND ylaosasto='$ylaosasto'
                                   AND (elektroniikka='$elektroniikka'
                                   OR huonekalut='$huonekalut'
                                   OR kodinkoneet='$kodinkoneet'
                                   OR vaatteet='$vaatteet'
                                   OR muut_annetaan_tavaroita='$muut_annetaan_tavaroita')
                                   AND (otsikko LIKE '%$sanahaku%'
                                   OR sisalto LIKE '%$sanahaku%'    
                                   OR paikka LIKE '%$sanahaku%'
                                   OR tapahtumanOsoite LIKE '%$sanahaku%'
                                   OR nimi LIKE '%$sanahaku%'
                                   OR nettisivu LIKE '%$sanahaku%')";
 
            }

            if ($kaikki_5 == 'Kaikki') {

              $query="SELECT * FROM ilmoitukset, osastot
                               WHERE ilmoitukset.id=osastot.id 
                               AND ilmoitukset.julkaistu='kylla'
                               AND kaupunki='$kaupunki1' 
                               AND ylaosasto='$ylaosasto'
                               AND (otsikko LIKE '%$sanahaku%'
                               OR sisalto LIKE '%$sanahaku%'    
                               OR paikka LIKE '%$sanahaku%'
                               OR tapahtumanOsoite LIKE '%$sanahaku%'
                               OR nimi LIKE '%$sanahaku%'
                               OR nettisivu LIKE '%$sanahaku%')
                               ORDER BY pvm DESC 
                               LIMIT $start_from, $per_page";

              $query_2 = "SELECT * FROM ilmoitukset, osastot
                                   WHERE ilmoitukset.id=osastot.id 
                                   AND ilmoitukset.julkaistu='kylla'
                                   AND kaupunki='$kaupunki1' 
                                   AND ylaosasto='$ylaosasto'
                                   AND (otsikko LIKE '%$sanahaku%'
                                   OR sisalto LIKE '%$sanahaku%'    
                                   OR paikka LIKE '%$sanahaku%'
                                   OR tapahtumanOsoite LIKE '%$sanahaku%'
                                   OR nimi LIKE '%$sanahaku%'
                                   OR nettisivu LIKE '%$sanahaku%')";


            }

          }

          // Jos ylaosasto Annetaan tekemistä

          if ($ylaosasto == 'Annetaan tekemistä') {

            $kaikki_6 = mysqli_real_escape_string($conn, $_GET['o_450']);

            if ($kaikki_6 != 'Kaikki') {

              $liikunta_2 = mysqli_real_escape_string($conn, $_GET['o_451']);
              $musiikki_2 = mysqli_real_escape_string($conn, $_GET['o_452']);
              $nayttelyt_2 = mysqli_real_escape_string($conn, $_GET['o_453']); 
              $paikat = mysqli_real_escape_string($conn, $_GET['o_454']); 
              $tilat = mysqli_real_escape_string($conn, $_GET['o_455']); 
              $urheilu_2= mysqli_real_escape_string($conn, $_GET['o_456']);
              $muut_annetaan_tekemista= mysqli_real_escape_string($conn, $_GET['o_457']); 

              $query="SELECT * FROM ilmoitukset, osastot
                               WHERE ilmoitukset.id=osastot.id 
                               AND ilmoitukset.julkaistu='kylla'
                               AND kaupunki='$kaupunki1' 
                               AND ylaosasto='$ylaosasto'
                               AND (liikunta_2='$liikunta_2'
                               OR musiikki_2='$musiikki_2'
                               OR nayttelyt_2='$nayttelyt_2'
                               OR paikat='$paikat'
                               OR tilat='$tilat'
                               OR urheilu_2='$urheilu_2'
                               OR muut_annetaan_tekemista='$muut_annetaan_tekemista')
                               AND (otsikko LIKE '%$sanahaku%'
                               OR sisalto LIKE '%$sanahaku%'    
                               OR paikka LIKE '%$sanahaku%'
                               OR tapahtumanOsoite LIKE '%$sanahaku%'
                               OR nimi LIKE '%$sanahaku%'
                               OR nettisivu LIKE '%$sanahaku%')
                               ORDER BY pvm DESC 
                               LIMIT $start_from, $per_page";

              $query_2 = "SELECT * FROM ilmoitukset, osastot
                                   WHERE ilmoitukset.id=osastot.id 
                                   AND ilmoitukset.julkaistu='kylla'
                                   AND kaupunki='$kaupunki1' 
                                   AND ylaosasto='$ylaosasto'
                                   AND (liikunta_2='$liikunta_2'
                                   OR musiikki_2='$musiikki_2'
                                   OR nayttelyt_2='$nayttelyt_2'
                                   OR paikat='$paikat'
                                   OR tilat='$tilat'
                                   OR urheilu_2='$urheilu_2'
                                   OR muut_annetaan_tekemista='$muut_annetaan_tekemista')
                                   AND (otsikko LIKE '%$sanahaku%'
                                   OR sisalto LIKE '%$sanahaku%'    
                                   OR paikka LIKE '%$sanahaku%'
                                   OR tapahtumanOsoite LIKE '%$sanahaku%'
                                   OR nimi LIKE '%$sanahaku%'
                                   OR nettisivu LIKE '%$sanahaku%')";
 
            }

            if ($kaikki_6 == 'Kaikki') {

              $query="SELECT * FROM ilmoitukset, osastot
                               WHERE ilmoitukset.id=osastot.id 
                               AND ilmoitukset.julkaistu='kylla'
                               AND kaupunki='$kaupunki1' 
                               AND ylaosasto='$ylaosasto'
                               AND (otsikko LIKE '%$sanahaku%'
                               OR sisalto LIKE '%$sanahaku%'    
                               OR paikka LIKE '%$sanahaku%'
                               OR tapahtumanOsoite LIKE '%$sanahaku%'
                               OR nimi LIKE '%$sanahaku%'
                               OR nettisivu LIKE '%$sanahaku%')
                               ORDER BY pvm DESC 
                               LIMIT $start_from, $per_page";

              $query_2 = "SELECT * FROM ilmoitukset, osastot
                                   WHERE ilmoitukset.id=osastot.id 
                                   AND ilmoitukset.julkaistu='kylla'
                                   AND kaupunki='$kaupunki1' 
                                   AND ylaosasto='$ylaosasto'
                                   AND (otsikko LIKE '%$sanahaku%'
                                   OR sisalto LIKE '%$sanahaku%'    
                                   OR paikka LIKE '%$sanahaku%'
                                   OR tapahtumanOsoite LIKE '%$sanahaku%'
                                   OR nimi LIKE '%$sanahaku%'
                                   OR nettisivu LIKE '%$sanahaku%')";

            }

          }


          // Jos ylaosasto Muut annetaan

          if ($ylaosasto == 'Muut annetaan') {

            $kaikki_7 = mysqli_real_escape_string($conn, $_GET['o_500']);

            if ($kaikki_7 == 'Kaikki') {

              $query="SELECT * FROM ilmoitukset, osastot
                               WHERE ilmoitukset.id=osastot.id 
                               AND ilmoitukset.julkaistu='kylla'
                               AND kaupunki='$kaupunki1' 
                               AND ylaosasto='$ylaosasto'
                               AND (otsikko LIKE '%$sanahaku%'
                               OR sisalto LIKE '%$sanahaku%'    
                               OR paikka LIKE '%$sanahaku%'
                               OR tapahtumanOsoite LIKE '%$sanahaku%'
                               OR nimi LIKE '%$sanahaku%'
                               OR nettisivu LIKE '%$sanahaku%')
                               ORDER BY pvm DESC 
                               LIMIT $start_from, $per_page";

              $query_2 = "SELECT * FROM ilmoitukset, osastot
                                   WHERE ilmoitukset.id=osastot.id 
                                   AND ilmoitukset.julkaistu='kylla'
                                   AND kaupunki='$kaupunki1' 
                                   AND ylaosasto='$ylaosasto'
                                   AND (otsikko LIKE '%$sanahaku%'
                                   OR sisalto LIKE '%$sanahaku%'    
                                   OR paikka LIKE '%$sanahaku%'
                                   OR tapahtumanOsoite LIKE '%$sanahaku%'
                                   OR nimi LIKE '%$sanahaku%'
                                   OR nettisivu LIKE '%$sanahaku%')";


            }

          }


          // Jos ylaosasto Pyydetään apua

          if ($ylaosasto == 'Pyydetään apua') {

            $kaikki_8 = mysqli_real_escape_string($conn, $_GET['o_600']);

            if ($kaikki_8 == 'Kaikki') {

              $query="SELECT * FROM ilmoitukset, osastot
                               WHERE ilmoitukset.id=osastot.id 
                               AND ilmoitukset.julkaistu='kylla'
                               AND kaupunki='$kaupunki1' 
                               AND ylaosasto='$ylaosasto'
                               AND (otsikko LIKE '%$sanahaku%'
                               OR sisalto LIKE '%$sanahaku%'    
                               OR paikka LIKE '%$sanahaku%'
                               OR tapahtumanOsoite LIKE '%$sanahaku%'
                               OR nimi LIKE '%$sanahaku%'
                               OR nettisivu LIKE '%$sanahaku%')
                               ORDER BY pvm DESC 
                               LIMIT $start_from, $per_page";

              $query_2 = "SELECT * FROM ilmoitukset, osastot
                                   WHERE ilmoitukset.id=osastot.id 
                                   AND ilmoitukset.julkaistu='kylla'
                                   AND kaupunki='$kaupunki1' 
                                   AND ylaosasto='$ylaosasto'
                                   AND (otsikko LIKE '%$sanahaku%'
                                   OR sisalto LIKE '%$sanahaku%'    
                                   OR paikka LIKE '%$sanahaku%'
                                   OR tapahtumanOsoite LIKE '%$sanahaku%'
                                   OR nimi LIKE '%$sanahaku%'
                                   OR nettisivu LIKE '%$sanahaku%')";


            }

          }

          // Jos ylaosasto Pyydetään lainaan

          if ($ylaosasto == 'Pyydetään lainaan') {

            $kaikki_9 = mysqli_real_escape_string($conn, $_GET['o_700']);

            if ($kaikki_9 == 'Kaikki') {

              $query="SELECT * FROM ilmoitukset, osastot
                               WHERE ilmoitukset.id=osastot.id 
                               AND ilmoitukset.julkaistu='kylla'
                               AND kaupunki='$kaupunki1' 
                               AND ylaosasto='$ylaosasto'
                               AND (otsikko LIKE '%$sanahaku%'
                               OR sisalto LIKE '%$sanahaku%'    
                               OR paikka LIKE '%$sanahaku%'
                               OR tapahtumanOsoite LIKE '%$sanahaku%'
                               OR nimi LIKE '%$sanahaku%'
                               OR nettisivu LIKE '%$sanahaku%')
                               ORDER BY pvm DESC
                               LIMIT $start_from, $per_page";

              $query_2 = "SELECT * FROM ilmoitukset, osastot
                                   WHERE ilmoitukset.id=osastot.id 
                                   AND ilmoitukset.julkaistu='kylla'
                                   AND kaupunki='$kaupunki1' 
                                   AND ylaosasto='$ylaosasto'
                                   AND (otsikko LIKE '%$sanahaku%'
                                   OR sisalto LIKE '%$sanahaku%'    
                                   OR paikka LIKE '%$sanahaku%'
                                   OR tapahtumanOsoite LIKE '%$sanahaku%'
                                   OR nimi LIKE '%$sanahaku%'
                                   OR nettisivu LIKE '%$sanahaku%')";

            }

          }

          // Jos ylaosasto Pyydetään ruokaa

          if ($ylaosasto == 'Pyydetään ruokaa') {

            $kaikki_10 = mysqli_real_escape_string($conn, $_GET['o_800']);

            if ($kaikki_10 == 'Kaikki') {

              $query="SELECT * FROM ilmoitukset, osastot
                               WHERE ilmoitukset.id=osastot.id 
                               AND ilmoitukset.julkaistu='kylla'
                               AND kaupunki='$kaupunki1' 
                               AND ylaosasto='$ylaosasto'
                               AND (otsikko LIKE '%$sanahaku%'
                               OR sisalto LIKE '%$sanahaku%'    
                               OR paikka LIKE '%$sanahaku%'
                               OR tapahtumanOsoite LIKE '%$sanahaku%'
                               OR nimi LIKE '%$sanahaku%'
                               OR nettisivu LIKE '%$sanahaku%')
                               ORDER BY pvm DESC 
                               LIMIT $start_from, $per_page";

              $query_2 = "SELECT * FROM ilmoitukset, osastot
                                   WHERE ilmoitukset.id=osastot.id 
                                   AND ilmoitukset.julkaistu='kylla'
                                   AND kaupunki='$kaupunki1' 
                                   AND ylaosasto='$ylaosasto'
                                   AND (otsikko LIKE '%$sanahaku%'
                                   OR sisalto LIKE '%$sanahaku%'    
                                   OR paikka LIKE '%$sanahaku%'
                                   OR tapahtumanOsoite LIKE '%$sanahaku%'
                                   OR nimi LIKE '%$sanahaku%'
                                   OR nettisivu LIKE '%$sanahaku%')";

            }

          }

          // Jos ylaosasto Pyydetään tavaroita

          if ($ylaosasto == 'Pyydetään tavaroita') {
 
            $kaikki_11 = mysqli_real_escape_string($conn, $_GET['o_900']);

            if ($kaikki_11 != 'Kaikki') {

              $elektroniikka_2 = mysqli_real_escape_string($conn, $_GET['o_901']);
              $huonekalut_2 = mysqli_real_escape_string($conn, $_GET['o_902']); 
              $kodinkoneet_2= mysqli_real_escape_string($conn, $_GET['o_903']); 
              $vaatteet_2 = mysqli_real_escape_string($conn, $_GET['o_904']);
              $muut_pyydetaan_tavaroita= mysqli_real_escape_string($conn, $_GET['o_905']);

              $query="SELECT * FROM ilmoitukset, osastot
                               WHERE ilmoitukset.id=osastot.id 
                               AND ilmoitukset.julkaistu='kylla'
                               AND kaupunki='$kaupunki1' 
                               AND ylaosasto='$ylaosasto'
                               AND (elektroniikka_2='$elektroniikka_2'
                               OR huonekalut_2='$huonekalut_2'
                               OR kodinkoneet_2='$kodinkoneet_2'
                               OR vaatteet_2='$vaatteet_2'
                               OR muut_pyydetaan_tavaroita='$muut_pyydetaan_tavaroita')
                               AND (otsikko LIKE '%$sanahaku%'
                               OR sisalto LIKE '%$sanahaku%'    
                               OR paikka LIKE '%$sanahaku%'
                               OR tapahtumanOsoite LIKE '%$sanahaku%'
                               OR nimi LIKE '%$sanahaku%'
                               OR nettisivu LIKE '%$sanahaku%')
                               ORDER BY pvm DESC 
                               LIMIT $start_from, $per_page";

              $query_2 = "SELECT * FROM ilmoitukset, osastot
                                   WHERE ilmoitukset.id=osastot.id 
                                   AND ilmoitukset.julkaistu='kylla'
                                   AND kaupunki='$kaupunki1' 
                                   AND ylaosasto='$ylaosasto'
                                   AND (elektroniikka_2='$elektroniikka_2'
                                   OR huonekalut_2='$huonekalut_2'
                                   OR kodinkoneet_2='$kodinkoneet_2'
                                   OR vaatteet_2='$vaatteet_2'
                                   OR muut_pyydetaan_tavaroita='$muut_pyydetaan_tavaroita')
                                   AND (otsikko LIKE '%$sanahaku%'
                                   OR sisalto LIKE '%$sanahaku%'    
                                   OR paikka LIKE '%$sanahaku%'
                                   OR tapahtumanOsoite LIKE '%$sanahaku%'
                                   OR nimi LIKE '%$sanahaku%'
                                   OR nettisivu LIKE '%$sanahaku%')";

            }

            if ($kaikki_11 == 'Kaikki') {

              $query="SELECT * FROM ilmoitukset, osastot
                               WHERE ilmoitukset.id=osastot.id 
                               AND ilmoitukset.julkaistu='kylla'
                               AND kaupunki='$kaupunki1' 
                               AND ylaosasto='$ylaosasto'
                               AND (otsikko LIKE '%$sanahaku%'
                               OR sisalto LIKE '%$sanahaku%'    
                               OR paikka LIKE '%$sanahaku%'
                               OR tapahtumanOsoite LIKE '%$sanahaku%'
                               OR nimi LIKE '%$sanahaku%'
                               OR nettisivu LIKE '%$sanahaku%')
                               ORDER BY pvm DESC 
                               LIMIT $start_from, $per_page";

              $query_2 = "SELECT * FROM ilmoitukset, osastot
                                   WHERE ilmoitukset.id=osastot.id 
                                   AND ilmoitukset.julkaistu='kylla'
                                   AND kaupunki='$kaupunki1' 
                                   AND ylaosasto='$ylaosasto'
                                   AND (otsikko LIKE '%$sanahaku%'
                                   OR sisalto LIKE '%$sanahaku%'    
                                   OR paikka LIKE '%$sanahaku%'
                                   OR tapahtumanOsoite LIKE '%$sanahaku%'
                                   OR nimi LIKE '%$sanahaku%'
                                   OR nettisivu LIKE '%$sanahaku%')";

            }

          }

          // Jos ylaosasto Pyydetään tekemistä

          if ($ylaosasto == 'Pyydetään tekemistä') {

            $kaikki_12 = mysqli_real_escape_string($conn, $_GET['o_950']);

            if ($kaikki_12 != 'Kaikki') {

              $liikunta_3 = mysqli_real_escape_string($conn, $_GET['o_951']);
              $musiikki_3 = mysqli_real_escape_string($conn, $_GET['o_952']); 
              $nayttelyt_3 = mysqli_real_escape_string($conn, $_GET['o_953']); 
              $paikat_3= mysqli_real_escape_string($conn, $_GET['o_954']); 
              $tilat_3= mysqli_real_escape_string($conn, $_GET['o_955']); 
              $urheilu_3= mysqli_real_escape_string($conn, $_GET['o_956']); 
              $muut_pyydetaan_tekemista= mysqli_real_escape_string($conn, $_GET['o_957']);

              $query="SELECT * FROM ilmoitukset, osastot
                               WHERE ilmoitukset.id=osastot.id 
                               AND ilmoitukset.julkaistu='kylla'
                               AND kaupunki='$kaupunki1' 
                               AND ylaosasto='$ylaosasto'
                               AND (liikunta_3='$liikunta_3'
                               OR musiikki_3='$musiikki_3'
                               OR nayttelyt_3='$nayttelyt_3'
                               OR paikat_3='$paikat_3'
                               OR tilat_3='$tilat_3'
                               OR urheilu_3='$urheilu_3'
                               OR muut_pyydetaan_tekemista='$muut_pyydetaan_tekemista')
                               AND (otsikko LIKE '%$sanahaku%'
                               OR sisalto LIKE '%$sanahaku%'    
                               OR paikka LIKE '%$sanahaku%'
                               OR tapahtumanOsoite LIKE '%$sanahaku%'
                               OR nimi LIKE '%$sanahaku%'
                               OR nettisivu LIKE '%$sanahaku%')
                               ORDER BY pvm DESC 
                               LIMIT $start_from, $per_page";

              $query_2 = "SELECT * FROM ilmoitukset, osastot
                                   WHERE ilmoitukset.id=osastot.id 
                                   AND ilmoitukset.julkaistu='kylla'
                                   AND kaupunki='$kaupunki1' 
                                   AND ylaosasto='$ylaosasto'
                                   AND (liikunta_3='$liikunta_3'
                                   OR musiikki_3='$musiikki_3'
                                   OR nayttelyt_3='$nayttelyt_3'
                                   OR paikat_3='$paikat_3'
                                   OR tilat_3='$tilat_3'
                                   OR urheilu_3='$urheilu_3'
                                   OR muut_pyydetaan_tekemista='$muut_pyydetaan_tekemista')
                                   AND (otsikko LIKE '%$sanahaku%'
                                   OR sisalto LIKE '%$sanahaku%'    
                                   OR paikka LIKE '%$sanahaku%'
                                   OR tapahtumanOsoite LIKE '%$sanahaku%'
                                   OR nimi LIKE '%$sanahaku%'
                                   OR nettisivu LIKE '%$sanahaku%')";

            }

            if ($kaikki_12 == 'Kaikki') {

              $query="SELECT * FROM ilmoitukset, osastot
                               WHERE ilmoitukset.id=osastot.id 
                               AND ilmoitukset.julkaistu='kylla'
                               AND kaupunki='$kaupunki1' 
                               AND ylaosasto='$ylaosasto'
                               AND (otsikko LIKE '%$sanahaku%'
                               OR sisalto LIKE '%$sanahaku%'    
                               OR paikka LIKE '%$sanahaku%'
                               OR tapahtumanOsoite LIKE '%$sanahaku%'
                               OR nimi LIKE '%$sanahaku%'
                               OR nettisivu LIKE '%$sanahaku%')
                               ORDER BY pvm DESC 
                               LIMIT $start_from, $per_page";

              $query_2 = "SELECT * FROM ilmoitukset, osastot
                                   WHERE ilmoitukset.id=osastot.id 
                                   AND ilmoitukset.julkaistu='kylla'
                                   AND kaupunki='$kaupunki1' 
                                   AND ylaosasto='$ylaosasto'
                                   AND (otsikko LIKE '%$sanahaku%'
                                   OR sisalto LIKE '%$sanahaku%'    
                                   OR paikka LIKE '%$sanahaku%'
                                   OR tapahtumanOsoite LIKE '%$sanahaku%'
                                   OR nimi LIKE '%$sanahaku%'
                                   OR nettisivu LIKE '%$sanahaku%')";

            }

          }

          // Jos ylaosasto Muut pyydetään

          if ($ylaosasto == 'Muut pyydetään') {

            $kaikki_13 = mysqli_real_escape_string($conn, $_GET['o_1000']);

            if ($kaikki_13 == 'Kaikki') {

              $query="SELECT * FROM ilmoitukset, osastot
                               WHERE ilmoitukset.id=osastot.id 
                               AND ilmoitukset.julkaistu='kylla'
                               AND kaupunki='$kaupunki1' 
                               AND ylaosasto='$ylaosasto'
                               AND (otsikko LIKE '%$sanahaku%'
                               OR sisalto LIKE '%$sanahaku%'    
                               OR paikka LIKE '%$sanahaku%'
                               OR tapahtumanOsoite LIKE '%$sanahaku%'
                               OR nimi LIKE '%$sanahaku%'
                               OR nettisivu LIKE '%$sanahaku%')
                               ORDER BY pvm DESC 
                               LIMIT $start_from, $per_page";

              $query_2 = "SELECT * FROM ilmoitukset, osastot
                                   WHERE ilmoitukset.id=osastot.id 
                                   AND ilmoitukset.julkaistu='kylla'
                                   AND kaupunki='$kaupunki1' 
                                   AND ylaosasto='$ylaosasto'
                                   AND (otsikko LIKE '%$sanahaku%'
                                   OR sisalto LIKE '%$sanahaku%'    
                                   OR paikka LIKE '%$sanahaku%'
                                   OR tapahtumanOsoite LIKE '%$sanahaku%'
                                   OR nimi LIKE '%$sanahaku%'
                                   OR nettisivu LIKE '%$sanahaku%')";

            }

          }

          $result = mysqli_query($conn, $query);

          $result_2 = mysqli_query($conn, $query_2);

          if (mysqli_num_rows($result_2) == 1)  {
            $ilmoitus = ' ilmoitus';
          }

          else {
            $ilmoitus = ' ilmoitusta';  
          }

          echo '<br><br><p class="info_teksti">Valitsemillasi hakuehdoilla löytyi ' . 
          mysqli_num_rows($result_2) . $ilmoitus . '</p><br>'; 

    ?>
                                 
    <!--Listaa haetut tiedot taulukossa.-->

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
                      $row['naiset'] .
                      $row['elektroniikka'] .
                      $row['huonekalut'] .
                      $row['kodinkoneet'] .
                      $row['vaatteet'] .
                      $row['muut_annetaan_tavaroita'] . 
                      $row['liikunta_2'] . 
                      $row['musiikki_2'] .
                      $row['nayttelyt_2'] .
                      $row['paikat'] . 
                      $row['tilat'] .
                      $row['urheilu_2'] . 
                      $row['muut_annetaan_tekemista'] .
                      $row['elektroniikka_2'] .
                      $row['huonekalut_2'] .
                      $row['kodinkoneet_2'] .
                      $row['vaatteet_2'] .
                      $row['muut_pyydetaan_tavaroita'] .
                      $row['liikunta_3'] . 
                      $row['musiikki_3'] .
                      $row['nayttelyt_3'] .
                      $row['paikat_3'] .
                      $row['tilat_3'] .
                      $row['urheilu_3'] .  
                      $row['muut_pyydetaan_tekemista']; 

      ?> 

      <tbody>

        <tr class='listaus_rivi' onclick="linkkiKokoIlmoitukseen('<?=$row["urlKokoIlmoitus"] ?>')">

          <td class='listaus_solu'>
            <a href='https://jaetaan.net/ilmoitukset?urlKokoIlmoitus=<?php echo htmlspecialchars($row["urlKokoIlmoitus"], ENT_QUOTES, "UTF-8"); ?>'> 
              <img class='listaus_kuva' src='<?php if ($row["source"] != "lomake" && $row["source"] != "h_lomake" &&  $row["kuva1"] != "oletuskuva_1234.jpg") {echo htmlspecialchars($row["kuva1"], ENT_QUOTES, "UTF-8"); } else {echo "https://jaetaan.net/kuvat/rajatut_kuvat/" . htmlspecialchars($row["pieni_kuva_1"], ENT_QUOTES, "UTF-8"); } ?>'>
            </a> 
          </td>

          <td class='listaus_solu'>
            <a id='listaus_otsikko' class='listaus_linkin_teksti' href="https://jaetaan.net/ilmoitukset?urlKokoIlmoitus=<?php echo htmlspecialchars($row['urlKokoIlmoitus'], ENT_QUOTES, 'UTF-8'); ?>">
              <p class='katoava_pieni'>
                <b>
                  <?php echo rtrim(substr(htmlspecialchars($row['otsikko'], ENT_QUOTES, 'UTF-8'),0,38)); 
                  if (strlen(htmlspecialchars($row['otsikko'], ENT_QUOTES, 'UTF-8')) > 38) {echo '...';} ?>
                </b>
              </p>
            </a>
                  
            <a id='listaus_otsikko' class='listaus_linkin_teksti' href="https://jaetaan.net/ilmoitukset?urlKokoIlmoitus=<?php echo htmlspecialchars($row['urlKokoIlmoitus'], ENT_QUOTES, 'UTF-8'); ?>">
              <p class='katoava_iso'>
                <b>
                  <?php echo rtrim(substr(htmlspecialchars($row['otsikko'], ENT_QUOTES, 'UTF-8'),0,60)); 
                  if (strlen(htmlspecialchars($row['otsikko'], ENT_QUOTES, 'UTF-8')) > 60) {echo '...';} ?>
                </b>
              </p>
            </a>

            <a id='listaus_osasto' class='listaus_linkin_teksti' href='https://jaetaan.net/ilmoitukset?urlKokoIlmoitus=<?php echo htmlspecialchars($row["urlKokoIlmoitus"], ENT_QUOTES, "UTF-8"); ?>'>
              <p id='listaus_osasto_p' class='p_katoavat katoava_pieni'>
                <?php $jee_jee_jee=substr(htmlspecialchars($osasto, ENT_QUOTES, 'UTF-8'),0,38); 
                echo rtrim(htmlspecialchars($row['ylaosasto'], ENT_QUOTES, 'UTF-8') . '<br>' . str_replace('_',' ',$jee_jee_jee));
                if (strlen(htmlspecialchars($osasto, ENT_QUOTES, 'UTF-8')) > 38) {echo '...';} ?>
              </p>        
            </a>

            <a id='listaus_osasto' class='listaus_linkin_teksti' href='https://jaetaan.net/ilmoitukset?urlKokoIlmoitus=<?php echo htmlspecialchars($row["urlKokoIlmoitus"], ENT_QUOTES, "UTF-8"); ?>'>
              <p id='listaus_osasto_p' class='p_katoavat katoava_iso'>
                <?php $jee_jee_jee=substr(htmlspecialchars($osasto, ENT_QUOTES, 'UTF-8'),0,60); 
                echo rtrim(htmlspecialchars($row['ylaosasto'], ENT_QUOTES, 'UTF-8') . '<br>' . str_replace('_',' ',$jee_jee_jee)); 
                if (strlen(htmlspecialchars($osasto, ENT_QUOTES, 'UTF-8')) > 60) {echo '...';}?>
              </p>        
            </a>
            
            <a id='listaus_paikka' class='listaus_linkin_teksti' href='https://jaetaan.net/ilmoitukset?urlKokoIlmoitus=<?php echo htmlspecialchars($row["urlKokoIlmoitus"], ENT_QUOTES, "UTF-8"); ?>'>
              <p id='listaus_paikka_p' class='p_katoavat katoava_pieni'>
                <?php echo rtrim(substr(htmlspecialchars($row['paikka'], ENT_QUOTES, 'UTF-8'),0,38)); 
                if (strlen(htmlspecialchars($row['paikka'], ENT_QUOTES, 'UTF-8')) > 38) {echo '...';} ?>
              </p>
            </a>

            <a id='listaus_paikka' class='listaus_linkin_teksti' href='https://jaetaan.net/ilmoitukset?urlKokoIlmoitus=<?php echo htmlspecialchars($row["urlKokoIlmoitus"], ENT_QUOTES, "UTF-8"); ?>'>
              <p id='listaus_paikka_p' class='p_katoavat katoava_iso'>
                <?php echo rtrim(substr(htmlspecialchars($row['paikka'], ENT_QUOTES, 'UTF-8'),0,60)); 
                if (strlen(htmlspecialchars($row['paikka'], ENT_QUOTES, 'UTF-8')) > 60) {echo '...';} ?>
              </p>
            </a>

            <a id='listaus_kaupunki' class='listaus_linkin_teksti' href='https://jaetaan.net/ilmoitukset?urlKokoIlmoitus=<?php echo htmlspecialchars($row["urlKokoIlmoitus"], ENT_QUOTES, "UTF-8"); ?>'>
              <p id='listaus_kaupunki_p' class='p_katoavat'>
                <?php echo htmlspecialchars($row['kaupunki'], ENT_QUOTES, 'UTF-8'); ?>
              </p>
            </a>

            <?php 

            if ($ylaosasto == 'Tapahtumat') { ?> 
                                     
              <a id='listaus_viikon_paiva_suomeksi' class='listaus_linkin_teksti' href='https://jaetaan.net/ilmoitukset?urlKokoIlmoitus=<?php echo htmlspecialchars($row["urlKokoIlmoitus"], ENT_QUOTES, "UTF-8"); ?>'> 
                <p class='paivays_katoaa_pieni'>
                  <?php echo substr($viikon_paiva_suomeksi,0,2) . ' ' . date_FIN(substr(htmlspecialchars($row['tapahtumaAlkaa'], ENT_QUOTES, "UTF-8"),0,10)) . ' klo ' . date_FIN_2(htmlspecialchars($row['klo_I'], ENT_QUOTES, "UTF-8")); ?>
                </p>
              </a>
            
            <?php }

            if ($ylaosasto != 'Tapahtumat') { ?> 
                                     
              <a id='listaus_ilmoitus_lisatty' class='listaus_linkin_teksti' href='https://jaetaan.net/ilmoitukset?urlKokoIlmoitus=<?php echo htmlspecialchars($row["urlKokoIlmoitus"], ENT_QUOTES, "UTF-8"); ?>'>
                <p class='paivays_katoaa_pieni'>
                  <?php echo date_FIN(substr(htmlspecialchars($row['pvm'], ENT_QUOTES, "UTF-8"),0,10)); ?>
                </p>
              </a>

            <?php } ?>

          </td>

          <?php 

          if ($ylaosasto == 'Tapahtumat') { ?>

            <td class='listaus_solu paivays_katoaa'>
              <a id='listaus_viikon_paiva_suomeksi' class='listaus_linkin_teksti' href='https://jaetaan.net/ilmoitukset?urlKokoIlmoitus=<?php echo htmlspecialchars($row["urlKokoIlmoitus"], ENT_QUOTES, "UTF-8"); ?>'> 
                <p>
                  <b>         
                    <?php echo $viikon_paiva_suomeksi; ?>
                  </b>
                </p>
              </a>

              <a id='listaus_tapahtuma_alkaa' class='listaus_linkin_teksti' href='https://jaetaan.net/ilmoitukset?urlKokoIlmoitus=<?php echo htmlspecialchars($row["urlKokoIlmoitus"], ENT_QUOTES, "UTF-8"); ?>'> 
                <p>
                  <?php echo date_FIN(substr(htmlspecialchars($row['tapahtumaAlkaa'], ENT_QUOTES, "UTF-8"),0,10)); ?>
                </p>
              </a>

              <a id='listaus_klo_I' class='listaus_linkin_teksti' href='https://jaetaan.net/ilmoitukset?urlKokoIlmoitus=<?php echo htmlspecialchars($row["urlKokoIlmoitus"], ENT_QUOTES, "UTF-8"); ?>'>
                <p>
                  <?php echo 'klo ' . date_FIN_2(htmlspecialchars($row['klo_I'], ENT_QUOTES, "UTF-8")); ?>
                </p>
              </a>
            </td>

          <?php } 

          if ($ylaosasto != 'Tapahtumat') { ?>

            <td class='listaus_solu paivays_katoaa'> 
              <a id='listaus_ilmoitus_lisatty' class='listaus_linkin_teksti' href='https://jaetaan.net/ilmoitukset?urlKokoIlmoitus=<?php echo htmlspecialchars($row["urlKokoIlmoitus"], ENT_QUOTES, "UTF-8"); ?>'>
                <p>
                  <?php echo date_FIN(substr(htmlspecialchars($row['pvm'], ENT_QUOTES, "UTF-8"),0,10)); ?>
                </p>
              </a>
            </td>

          <?php } ?>

        </tr>

      </tbody>

      <?php
          
          }
        
        } 

      ?>

    </table>

    <?php

    if ($ylaosasto == 'Tapahtumat') {

      if ($kaikki_1 != 'Kaikki') {

        $query="SELECT * FROM ilmoitukset, osastot
                         WHERE ilmoitukset.id=osastot.id 
                         AND ilmoitukset.julkaistu='kylla'
                         AND kaupunki='$kaupunki1' 
                         AND ylaosasto='$ylaosasto'
                         AND (elokuvat='$elokuvat'
                         OR improvisointi='$improvisointi'
                         OR keskustelu='$keskustelu'
                         OR kirjallisuus='$kirjallisuus'
                         OR kuvataide='$kuvataide'
                         OR kasityot='$kasityot'
                         OR leikkiminen='$leikkiminen'
                         OR liikunta='$liikunta'
                         OR luento='$luento'
                         OR musiikki='$musiikki'
                         OR nayttelyt='$nayttelyt'
                         OR oppiminen='$oppiminen'
                         OR pelaaminen='$pelaaminen'
                         OR politiikka='$politiikka'
                         OR runonlausunta='$runonlausunta'
                         OR sadunkerronta='$sadunkerronta'
                         OR tanssi='$tanssi'
                         OR tarinankerronta='$tarinankerronta'
                         OR teatteri='$teatteri'
                         OR tyopaja='$tyopaja'
                         OR urheilu='$urheilu'
                         OR uskonto='$uskonto'
                         OR yhdessa_oleminen='$yhdessa_oleminen'
                         OR muut_tapahtumat='$muut_tapahtumat'
                         OR aikuiset='$aikuiset'
                         OR lapset='$lapset'
                         OR nuoret='$nuoret'
                         OR seniorit='$seniorit'
                         OR miehet='$miehet'
                         OR naiset='$naiset')
                         AND (otsikko LIKE '%$sanahaku%'
                         OR sisalto LIKE '%$sanahaku%'    
                         OR paikka LIKE '%$sanahaku%'
                         OR tapahtumanOsoite LIKE '%$sanahaku%'
                         OR nimi LIKE '%$sanahaku%'
                         OR nettisivu LIKE '%$sanahaku%')";
      }

      if ($kaikki_1 == 'Kaikki') {

        $query="SELECT * FROM ilmoitukset, osastot
                         WHERE ilmoitukset.id=osastot.id 
                         AND ilmoitukset.julkaistu='kylla'
                         AND kaupunki='$kaupunki1' 
                         AND ylaosasto='$ylaosasto'
                         AND (otsikko LIKE '%$sanahaku%'
                         OR sisalto LIKE '%$sanahaku%'    
                         OR paikka LIKE '%$sanahaku%'
                         OR tapahtumanOsoite LIKE '%$sanahaku%'
                         OR nimi LIKE '%$sanahaku%'
                         OR nettisivu LIKE '%$sanahaku%')";

      }

      $result = mysqli_query($conn, $query);

      // Count the total records
      $total_records = mysqli_num_rows($result);

      //Using ceil function to divide the total records on per page
      $total_pages = ceil($total_records / $per_page);

      $kaupunki1 = mysqli_real_escape_string($conn, $_GET['kaupunki']);
      $ylaosasto = mysqli_real_escape_string($conn, $_GET['ylaosasto']);
      $sanahaku = mysqli_real_escape_string($conn, $_GET['sanahaku']);

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
                echo '<li class="pagination_lista"><a id="active" class="pagination" href="https://jaetaan.net?page=' . $i . '&kaupunki=' . $kaupunki1 . '&ylaosasto=' . $ylaosasto .
                        '&o_0=' . $kaikki_1 .
                        '&o_1=' . $elokuvat . 
                        '&o_2=' . $improvisointi. 
                        '&o_3=' . $keskustelu .
                        '&o_4=' . $kirjallisuus .
                        '&o_5=' . $kuvataide .
                        '&o_6=' . $kasityot .
                        '&o_7=' . $leikkiminen .
                        '&o_8=' . $liikunta .
                        '&o_9=' . $luento .
                        '&o_10=' . $musiikki .
                        '&o_11=' . $nayttelyt .
                        '&o_12=' . $oppiminen .
                        '&o_13=' . $pelaaminen .
                        '&o_14=' . $politiikka .
                        '&o_15=' . $runonlausunta .
                        '&o_16=' . $sadunkerronta .
                        '&o_17=' . $tanssi .
                        '&o_18=' . $tarinankerronta .
                        '&o_19=' . $teatteri .
                        '&o_20=' . $tyopaja .
                        '&o_21=' . $urheilu .
                        '&o_22=' . $uskonto .
                        '&o_23=' . $yhdessa_oleminen .
                        '&o_24=' . $muut_tapahtumat .
                        '&o_25=' . $aikuiset .
                        '&o_26=' . $lapset .
                        '&o_27=' . $nuoret .
                        '&o_28=' . $seniorit .
                        '&o_29=' . $miehet .
                        '&o_30=' . $naiset . 
                        '&sanahaku=' . $sanahaku . '#listaus_ankkuri">' . $i . '</a></li>';
              } 
              else {
                          echo '<li class="pagination_lista"><a class="pagination" href="https://jaetaan.net?page=' . $i . '&kaupunki=' . $kaupunki1 . 
  '&ylaosasto=' . $ylaosasto . '&o_0=' . $kaikki_1 .
                               '&o_1=' . $elokuvat . 
                               '&o_2=' . $improvisointi. 
                               '&o_3=' . $keskustelu .
                               '&o_4=' . $kirjallisuus .
                               '&o_5=' . $kuvataide .
                               '&o_6=' . $kasityot .
                               '&o_7=' . $leikkiminen .
                               '&o_8=' . $liikunta .
                               '&o_9=' . $luento .
                               '&o_10=' . $musiikki .
                               '&o_11=' . $nayttelyt .
                               '&o_12=' . $oppiminen .
                               '&o_13=' . $pelaaminen .
                               '&o_14=' . $politiikka .
                               '&o_15=' . $runonlausunta .
                               '&o_16=' . $sadunkerronta .
                               '&o_17=' . $tanssi .
                               '&o_18=' . $tarinankerronta .
                               '&o_19=' . $teatteri .
                               '&o_20=' . $tyopaja .
                               '&o_21=' . $urheilu .
                               '&o_22=' . $uskonto .
                               '&o_23=' . $yhdessa_oleminen .
                               '&o_24=' . $muut_tapahtumat .
                               '&o_25=' . $aikuiset .
                               '&o_26=' . $lapset .
                               '&o_27=' . $nuoret .
                               '&o_28=' . $seniorit .
                               '&o_29=' . $miehet .
                               '&o_30=' . $naiset . 
                               '&sanahaku=' . $sanahaku . '#listaus_ankkuri">' . $i . '</a></li>';
              }
            }
          } 
          else {
            for ($i=$page_II - 2; $i<=$page_II + 2; $i++) {
              if ($page_I == $i || $page_I == '' && $i == 1) {
                echo '<li class="pagination_lista"><a id="active" class="pagination" href="https://jaetaan.net?page=' . $i . '&kaupunki=' . $kaupunki1 . 
'&ylaosasto=' . $ylaosasto . '&o_0=' . $kaikki_1 .
                             '&o_1=' . $elokuvat . 
                             '&o_2=' . $improvisointi. 
                             '&o_3=' . $keskustelu .
                             '&o_4=' . $kirjallisuus .
                             '&o_5=' . $kuvataide .
                             '&o_6=' . $kasityot .
                             '&o_7=' . $leikkiminen .
                             '&o_8=' . $liikunta .
                             '&o_9=' . $luento .
                             '&o_10=' . $musiikki .
                             '&o_11=' . $nayttelyt .
                             '&o_12=' . $oppiminen .
                             '&o_13=' . $pelaaminen .
                             '&o_14=' . $politiikka .
                             '&o_15=' . $runonlausunta .
                             '&o_16=' . $sadunkerronta .
                             '&o_17=' . $tanssi .
                             '&o_18=' . $tarinankerronta .
                             '&o_19=' . $teatteri .
                             '&o_20=' . $tyopaja .
                             '&o_21=' . $urheilu .
                             '&o_22=' . $uskonto .
                             '&o_23=' . $yhdessa_oleminen .
                             '&o_24=' . $muut_tapahtumat .
                             '&o_25=' . $aikuiset .
                             '&o_26=' . $lapset .
                             '&o_27=' . $nuoret .
                             '&o_28=' . $seniorit .
                             '&o_29=' . $miehet .
                             '&o_30=' . $naiset . 
                             '&sanahaku=' . $sanahaku . '#listaus_ankkuri">' . $i . '</a></li>';
              } 
              else {
                echo '<li class="pagination_lista"><a class="pagination" href="https://jaetaan.net?page=' . $i . '&kaupunki=' . $kaupunki1 . 
'&ylaosasto=' . $ylaosasto . '&o_0=' . $kaikki_1 .
                             '&o_1=' . $elokuvat . 
                             '&o_2=' . $improvisointi. 
                             '&o_3=' . $keskustelu .
                             '&o_4=' . $kirjallisuus .
                             '&o_5=' . $kuvataide .
                             '&o_6=' . $kasityot .
                             '&o_7=' . $leikkiminen .
                             '&o_8=' . $liikunta .
                             '&o_9=' . $luento .
                             '&o_10=' . $musiikki .
                             '&o_11=' . $nayttelyt .
                             '&o_12=' . $oppiminen .
                             '&o_13=' . $pelaaminen .
                             '&o_14=' . $politiikka .
                             '&o_15=' . $runonlausunta .
                             '&o_16=' . $sadunkerronta .
                             '&o_17=' . $tanssi .
                             '&o_18=' . $tarinankerronta .
                             '&o_19=' . $teatteri .
                             '&o_20=' . $tyopaja .
                             '&o_21=' . $urheilu .
                             '&o_22=' . $uskonto .
                             '&o_23=' . $yhdessa_oleminen .
                             '&o_24=' . $muut_tapahtumat .
                             '&o_25=' . $aikuiset .
                             '&o_26=' . $lapset .
                             '&o_27=' . $nuoret .
                             '&o_28=' . $seniorit .
                             '&o_29=' . $miehet .
                             '&o_30=' . $naiset . 
                             '&sanahaku=' . $sanahaku . '#listaus_ankkuri">' . $i . '</a></li>';
              }
            }
          }

        echo '</ul>';

      echo '</div> <br><br>';
          
          }

    // Jos ylaosasto Annetaan apua

    if ($ylaosasto == 'Annetaan apua') {

      if ($kaikki_2 == 'Kaikki') {

        $query="SELECT * FROM ilmoitukset, osastot
                         WHERE ilmoitukset.id=osastot.id 
                         AND ilmoitukset.julkaistu='kylla'
                         AND kaupunki='$kaupunki1' 
                         AND ylaosasto='$ylaosasto'
                         AND (otsikko LIKE '%$sanahaku%'
                         OR sisalto LIKE '%$sanahaku%'    
                         OR paikka LIKE '%$sanahaku%'
                         OR tapahtumanOsoite LIKE '%$sanahaku%'
                         OR nimi LIKE '%$sanahaku%'
                         OR nettisivu LIKE '%$sanahaku%')";
      }

      $result = mysqli_query($conn, $query);

      // Count the total records
      $total_records = mysqli_num_rows($result);

      //Using ceil function to divide the total records on per page
      $total_pages = ceil($total_records / $per_page);

      $kaupunki1 = mysqli_real_escape_string($conn, $_GET['kaupunki']);
      $ylaosasto = mysqli_real_escape_string($conn, $_GET['ylaosasto']);
      $sanahaku = mysqli_real_escape_string($conn, $_GET['sanahaku']);

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
                echo '<li class="pagination_lista"><a id="active" class="pagination" href="https://jaetaan.net?page=' . $i . '&kaupunki=' . $kaupunki1 . '&ylaosasto=' . $ylaosasto .
                        '&o_100=' . $kaikki_2 . 
                        '&sanahaku=' . $sanahaku .'#listaus_ankkuri">' . $i . '</a></li>';
              } 
              else {
                echo '<li class="pagination_lista"><a class="pagination" href="https://jaetaan.net?page=' . $i . '&kaupunki=' . $kaupunki1 . 
'&ylaosasto=' . $ylaosasto . '&o_100=' . $kaikki_2 . 
'&sanahaku=' . $sanahaku . '#listaus_ankkuri">' . $i . '</a></li>';
              }
            }
          } 
          else {
            for ($i=$page_II - 2; $i<=$page_II + 2; $i++) {
              if ($page_I == $i || $page_I == '' && $i == 1) {
                echo '<li class="pagination_lista"><a id="active" class="pagination" href="https://jaetaan.net?page=' . $i . '&kaupunki=' . $kaupunki1 . 
'&ylaosasto=' . $ylaosasto . '&o_100=' . $kaikki_2 . 
'&sanahaku=' . $sanahaku . '#listaus_ankkuri">' . $i . '</a></li>';
                  } 
              else {
                echo '<li class="pagination_lista"><a class="pagination" href="https://jaetaan.net?page=' . $i . '&kaupunki=' . $kaupunki1 . 
'&ylaosasto=' . $ylaosasto . '&o_100=' . $kaikki_2 . 
'&sanahaku=' . $sanahaku .'#listaus_ankkuri">' . $i . '</a></li>';
              }
            }
          }

        echo '</ul>';

      echo '</div> <br><br>';

          }

    // Jos ylaosasto Annetaan lainaan

    if ($ylaosasto == 'Annetaan lainaan') {

      if ($kaikki_3 == 'Kaikki') {

        $query="SELECT * FROM ilmoitukset, osastot
                         WHERE ilmoitukset.id=osastot.id 
                         AND ilmoitukset.julkaistu='kylla'
                         AND kaupunki='$kaupunki1' 
                         AND ylaosasto='$ylaosasto'
                         AND (otsikko LIKE '%$sanahaku%'
                         OR sisalto LIKE '%$sanahaku%'    
                         OR paikka LIKE '%$sanahaku%'
                         OR tapahtumanOsoite LIKE '%$sanahaku%'
                         OR nimi LIKE '%$sanahaku%'
                         OR nettisivu LIKE '%$sanahaku%')";

      }

      $result = mysqli_query($conn, $query);

      // Count the total records
      $total_records = mysqli_num_rows($result);

      //Using ceil function to divide the total records on per page
      $total_pages = ceil($total_records / $per_page);

      $kaupunki1 = mysqli_real_escape_string($conn, $_GET['kaupunki']);
      $ylaosasto = mysqli_real_escape_string($conn, $_GET['ylaosasto']);
      $sanahaku = mysqli_real_escape_string($conn, $_GET['sanahaku']);

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
                echo '<li class="pagination_lista"><a id="active" class="pagination" href="https://jaetaan.net?page=' . $i . '&kaupunki=' . $kaupunki1 . '&ylaosasto=' . $ylaosasto .
                            '&o_200=' . $kaikki_3 . 
                            '&sanahaku=' . $sanahaku . '#listaus_ankkuri">' . $i . '</a></li>';
              } 
              else {
                echo '<li class="pagination_lista"><a class="pagination" href="https://jaetaan.net?page=' . $i . '&kaupunki=' . $kaupunki1 . 
  '&ylaosasto=' . $ylaosasto . '&o_200=' . $kaikki_3 . 
  '&sanahaku=' . $sanahaku . '#listaus_ankkuri">' . $i . '</a></li>';
              }
            }
          } 
          else {
            for ($i=$page_II - 2; $i<=$page_II + 2; $i++) {
              if ($page_I == $i || $page_I == '' && $i == 1) {
                echo '<li class="pagination_lista"><a id="active" class="pagination" href="https://jaetaan.net?page=' . $i . '&kaupunki=' . $kaupunki1 . 
  '&ylaosasto=' . $ylaosasto . '&o_200=' . $kaikki_3 . 
  '&sanahaku=' . $sanahaku . '#listaus_ankkuri">' . $i . '</a></li>';
              } 
              else {
                echo '<li class="pagination_lista"><a class="pagination" href="https://jaetaan.net?page=' . $i . '&kaupunki=' . $kaupunki1 . 
  '&ylaosasto=' . $ylaosasto . '&o_200=' . $kaikki_3 . 
  '&sanahaku=' . $sanahaku . '#listaus_ankkuri">' . $i . '</a></li>';
              }
            }
          }

        echo '</ul>';

      echo '</div> <br><br>';

          }

    // Jos ylaosasto Annetaan ruokaa

    if ($ylaosasto == 'Annetaan ruokaa') {

      if ($kaikki_4 == 'Kaikki') {

        $query="SELECT * FROM ilmoitukset, osastot
                         WHERE ilmoitukset.id=osastot.id 
                         AND ilmoitukset.julkaistu='kylla'
                         AND kaupunki='$kaupunki1' 
                         AND ylaosasto='$ylaosasto'
                         AND (otsikko LIKE '%$sanahaku%'
                         OR sisalto LIKE '%$sanahaku%'    
                         OR paikka LIKE '%$sanahaku%'
                         OR tapahtumanOsoite LIKE '%$sanahaku%'
                         OR nimi LIKE '%$sanahaku%'
                         OR nettisivu LIKE '%$sanahaku%')";

      }

      $result = mysqli_query($conn, $query);

      // Count the total records
      $total_records = mysqli_num_rows($result);

      //Using ceil function to divide the total records on per page
      $total_pages = ceil($total_records / $per_page);

      $kaupunki1 = mysqli_real_escape_string($conn, $_GET['kaupunki']);
      $ylaosasto = mysqli_real_escape_string($conn, $_GET['ylaosasto']);
      $sanahaku = mysqli_real_escape_string($conn, $_GET['sanahaku']);

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
                echo '<li class="pagination_lista"><a id="active" class="pagination" href="https://jaetaan.net?page=' . $i . '&kaupunki=' . $kaupunki1 . '&ylaosasto=' . $ylaosasto .
                            '&o_300=' . $kaikki_4 . 
                            '&sanahaku=' . $sanahaku . '#listaus_ankkuri">' . $i . '</a></li>';
              } 
              else {
                echo '<li class="pagination_lista"><a class="pagination" href="https://jaetaan.net?page=' . $i . '&kaupunki=' . $kaupunki1 . 
  '&ylaosasto=' . $ylaosasto . '&o_300=' . $kaikki_4 . 
  '&sanahaku=' . $sanahaku . '#listaus_ankkuri">' . $i . '</a></li>';
              }
            }
          } 
          else {
            for ($i=$page_II - 2; $i<=$page_II + 2; $i++) {
              if ($page_I == $i || $page_I == '' && $i == 1) {
                echo '<li class="pagination_lista"><a id="active" class="pagination" href="https://jaetaan.net?page=' . $i . '&kaupunki=' . $kaupunki1 . 
  '&ylaosasto=' . $ylaosasto . '&o_300=' . $kaikki_4 . 
  '&sanahaku=' . $sanahaku . '#listaus_ankkuri">' . $i . '</a></li>';
              } 
              else {
                 echo '<li class="pagination_lista"><a class="pagination" href="https://jaetaan.net?page=' . $i . '&kaupunki=' . $kaupunki1 . 
  '&ylaosasto=' . $ylaosasto . '&o_300=' . $kaikki_4 . 
  '&sanahaku=' . $sanahaku . '#listaus_ankkuri">' . $i . '</a></li>';
              }
            }
          }

        echo '</ul>';

      echo '</div> <br><br>';

          }

    // Jos ylaosasto Annetaan tavaroita

    if ($ylaosasto == 'Annetaan tavaroita') {

      if ($kaikki_5 != 'Kaikki') {

        $query="SELECT * FROM ilmoitukset, osastot
                         WHERE ilmoitukset.id=osastot.id 
                         AND ilmoitukset.julkaistu='kylla'
                         AND kaupunki='$kaupunki1' 
                         AND ylaosasto='$ylaosasto'
                         AND (elektroniikka='$elektroniikka'
                         OR huonekalut='$huonekalut'
                         OR kodinkoneet='$kodinkoneet'
                         OR vaatteet='$vaatteet'
                         OR muut_annetaan_tavaroita='$muut_annetaan_tavaroita')
                         AND (otsikko LIKE '%$sanahaku%'
                         OR sisalto LIKE '%$sanahaku%'    
                         OR paikka LIKE '%$sanahaku%'
                         OR tapahtumanOsoite LIKE '%$sanahaku%'
                         OR nimi LIKE '%$sanahaku%'
                         OR nettisivu LIKE '%$sanahaku%')";
      }

      if ($kaikki_5 == 'Kaikki') {

        $query="SELECT * FROM ilmoitukset, osastot
                         WHERE ilmoitukset.id=osastot.id 
                         AND ilmoitukset.julkaistu='kylla'
                         AND kaupunki='$kaupunki1' 
                         AND ylaosasto='$ylaosasto'
                         AND (otsikko LIKE '%$sanahaku%'
                         OR sisalto LIKE '%$sanahaku%'    
                         OR paikka LIKE '%$sanahaku%'
                         OR tapahtumanOsoite LIKE '%$sanahaku%'
                         OR nimi LIKE '%$sanahaku%'
                         OR nettisivu LIKE '%$sanahaku%')";

      }

      $result = mysqli_query($conn, $query);

      // Count the total records
      $total_records = mysqli_num_rows($result);

      //Using ceil function to divide the total records on per page
      $total_pages = ceil($total_records / $per_page);

      $kaupunki1 = mysqli_real_escape_string($conn, $_GET['kaupunki']);
      $ylaosasto = mysqli_real_escape_string($conn, $_GET['ylaosasto']);
      $sanahaku = mysqli_real_escape_string($conn, $_GET['sanahaku']);

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
                echo '<li class="pagination_lista"><a id="active" class="pagination" href="https://jaetaan.net?page=' . $i . '&kaupunki=' . $kaupunki1 . '&ylaosasto=' . $ylaosasto .
                            '&o_400=' . $kaikki_5 .
                            '&o_401=' . $elektroniikka . 
                            '&o_402=' . $huonekalut . 
                            '&o_403=' . $kodinkoneet .
                            '&o_404=' . $vaatteet . 
                            '&o_405=' . $muut_annetaan_tavaroita . 
                            '&sanahaku=' . $sanahaku . '#listaus_ankkuri">' . $i . '</a></li>';
              } 
              else {
                echo '<li class="pagination_lista"><a class="pagination" href="https://jaetaan.net?page=' . $i . '&kaupunki=' . $kaupunki1 . 
                           '&ylaosasto=' . $ylaosasto . 
                           '&o_400=' . $kaikki_5 . 
                           '&o_401=' . $elektroniikka . 
                           '&o_402=' . $huonekalut . 
                           '&o_403=' . $kodinkoneet .
                           '&o_404=' . $vaatteet . 
                           '&o_405=' . $muut_annetaan_tavaroita . 
                           '&sanahaku=' . $sanahaku . '#listaus_ankkuri">' . $i . '</a></li>';
              }
            }
          } 
          else {
            for ($i=$page_II - 2; $i<=$page_II + 2; $i++) {
              if ($page_I == $i || $page_I == '' && $i == 1) {
                echo '<li class="pagination_lista"><a id="active" class="pagination" href="https://jaetaan.net?page=' . $i . '&kaupunki=' . $kaupunki1 . '&ylaosasto=' . $ylaosasto . 
                            '&o_400=' . $kaikki_5 . 
                            '&o_401=' . $elektroniikka . 
                            '&o_402=' . $huonekalut . 
                            '&o_403=' . $kodinkoneet .
                            '&o_404=' . $vaatteet . 
                            '&o_405=' . $muut_annetaan_tavaroita . 
                            '&sanahaku=' . $sanahaku . '#listaus_ankkuri">' . $i . '</a></li>';
                      } 
              else {
                echo '<li class="pagination_lista"><a class="pagination" href="https://jaetaan.net?page=' . $i . '&kaupunki=' . $kaupunki1 . 
                           '&ylaosasto=' . $ylaosasto . 
                           '&o_400=' . $kaikki_5 . 
                           '&o_401=' . $elektroniikka . 
                           '&o_402=' . $huonekalut . 
                           '&o_403=' . $kodinkoneet .
                           '&o_404=' . $vaatteet . 
                           '&o_405=' . $muut_annetaan_tavaroita . 
                           '&sanahaku=' . $sanahaku . '#listaus_ankkuri">' . $i . '</a></li>';
              }
            }
          }

        echo '</ul>';

      echo '</div> <br><br>';

          }

    // Jos ylaosasto Annetaan tekemistä

    if ($ylaosasto == 'Annetaan tekemistä') {

      if ($kaikki_6 != 'Kaikki') {

        $query="SELECT * FROM ilmoitukset, osastot
                         WHERE ilmoitukset.id=osastot.id
                         AND ilmoitukset.julkaistu='kylla' 
                         AND kaupunki='$kaupunki1' 
                         AND ylaosasto='$ylaosasto'
                         AND (liikunta_2='$liikunta_2'
                         OR musiikki_2='$musiikki_2'
                         OR nayttelyt_2='$nayttelyt_2'
                         OR paikat='$paikat'
                         OR tilat='$tilat'
                         OR urheilu_2='$urheilu_2'
                         OR muut_annetaan_tekemista='$muut_annetaan_tekemista')
                         AND (otsikko LIKE '%$sanahaku%'
                         OR sisalto LIKE '%$sanahaku%'    
                         OR paikka LIKE '%$sanahaku%'
                         OR tapahtumanOsoite LIKE '%$sanahaku%'
                         OR nimi LIKE '%$sanahaku%'
                         OR nettisivu LIKE '%$sanahaku%')";
      }

      if ($kaikki_6 == 'Kaikki') {

        $query="SELECT * FROM ilmoitukset, osastot
                         WHERE ilmoitukset.id=osastot.id 
                         AND ilmoitukset.julkaistu='kylla'
                         AND kaupunki='$kaupunki1' 
                         AND ylaosasto='$ylaosasto'
                         AND (otsikko LIKE '%$sanahaku%'
                         OR sisalto LIKE '%$sanahaku%'    
                         OR paikka LIKE '%$sanahaku%'
                         OR tapahtumanOsoite LIKE '%$sanahaku%'
                         OR nimi LIKE '%$sanahaku%'
                         OR nettisivu LIKE '%$sanahaku%')";

      }

      $result = mysqli_query($conn, $query);

      // Count the total records
      $total_records = mysqli_num_rows($result);

      //Using ceil function to divide the total records on per page
      $total_pages = ceil($total_records / $per_page);

      $kaupunki1 = mysqli_real_escape_string($conn, $_GET['kaupunki']);
      $ylaosasto = mysqli_real_escape_string($conn, $_GET['ylaosasto']);
      $sanahaku = mysqli_real_escape_string($conn, $_GET['sanahaku']);

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
                echo '<li class="pagination_lista"><a id="active" class="pagination" href="https://jaetaan.net?page=' . $i . '&kaupunki=' . $kaupunki1 . '&ylaosasto=' . $ylaosasto .
                            '&o_450=' . $kaikki_6 .
                            '&o_451=' . $liikunta_2 . 
                            '&o_452=' . $musiikki_2 .
                            '&o_453=' . $nayttelyt_2 .
                            '&o_454=' . $paikat .
                            '&o_455=' . $tilat . 
                            '&o_456=' . $urheilu_2 .
                            '&o_457=' . $muut_annetaan_tekemista .  
                            '&sanahaku=' . $sanahaku . '#listaus_ankkuri">' . $i . '</a></li>';
              } 
              else {
                echo '<li class="pagination_lista"><a class="pagination" href="https://jaetaan.net?page=' . $i . '&kaupunki=' . $kaupunki1 . 
  '&ylaosasto=' . $ylaosasto . 
                            '&o_450=' . $kaikki_6 .
                            '&o_451=' . $liikunta_2 . 
                            '&o_452=' . $musiikki_2 .
                            '&o_453=' . $nayttelyt_2 . 
                            '&o_454=' . $paikat .
                            '&o_455=' . $tilat . 
                            '&o_456=' . $urheilu_2 .
                            '&o_457=' . $muut_annetaan_tekemista .   
                            '&sanahaku=' . $sanahaku . '#listaus_ankkuri">' . $i . '</a></li>';
              }
            }
          } 
          else {
            for ($i=$page_II - 2; $i<=$page_II + 2; $i++) {
              if ($page_I == $i || $page_I == '' && $i == 1) {
                echo '<li class="pagination_lista"><a id="active" class="pagination" href="https://jaetaan.net?page=' . $i . '&kaupunki=' . $kaupunki1 . 
  '&ylaosasto=' . $ylaosasto . 
                            '&o_450=' . $kaikki_6 .
                            '&o_451=' . $liikunta_2 . 
                            '&o_452=' . $musiikki_2 .
                            '&o_453=' . $nayttelyt_2 . 
                            '&o_454=' . $paikat .
                            '&o_455=' . $tilat . 
                            '&o_456=' . $urheilu_2 .
                            '&o_457=' . $muut_annetaan_tekemista .   
                            '&sanahaku=' . $sanahaku . '#listaus_ankkuri">' . $i . '</a></li>';
              } 
              else {
                echo '<li class="pagination_lista"><a class="pagination" href="https://jaetaan.net?page=' . $i . '&kaupunki=' . $kaupunki1 . 
  '&ylaosasto=' . $ylaosasto . '&o_450=' . $kaikki_6 .
                               '&o_451=' . $liikunta_2 . 
                               '&o_452=' . $musiikki_2 .
                               '&o_453=' . $nayttelyt_2 . 
                               '&o_454=' . $paikat .
                               '&o_455=' . $tilat . 
                               '&o_456=' . $urheilu_2 .
                               '&o_457=' . $muut_annetaan_tekemista .
                               '&sanahaku=' . $sanahaku . '#listaus_ankkuri">' . $i . '</a></li>';
              }
            }
          }

        echo '</ul>';

      echo '</div> <br><br>';

          }

    // Jos ylaosasto Muut annetaan

    if ($ylaosasto == 'Muut annetaan') {

      if ($kaikki_7 == 'Kaikki') {

        $query="SELECT * FROM ilmoitukset, osastot
                         WHERE ilmoitukset.id=osastot.id 
                         AND ilmoitukset.julkaistu='kylla'
                         AND kaupunki='$kaupunki1' 
                         AND ylaosasto='$ylaosasto'
                         AND (otsikko LIKE '%$sanahaku%'
                         OR sisalto LIKE '%$sanahaku%'    
                         OR paikka LIKE '%$sanahaku%'
                         OR tapahtumanOsoite LIKE '%$sanahaku%'
                         OR nimi LIKE '%$sanahaku%'
                         OR nettisivu LIKE '%$sanahaku%')";

      }

      $result = mysqli_query($conn, $query);

      // Count the total records
      $total_records = mysqli_num_rows($result);

      //Using ceil function to divide the total records on per page
      $total_pages = ceil($total_records / $per_page);

      $kaupunki1 = mysqli_real_escape_string($conn, $_GET['kaupunki']);
      $ylaosasto = mysqli_real_escape_string($conn, $_GET['ylaosasto']);
      $sanahaku = mysqli_real_escape_string($conn, $_GET['sanahaku']);

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
                echo '<li class="pagination_lista"><a id="active" class="pagination" href="https://jaetaan.net?page=' . $i . '&kaupunki=' . $kaupunki1 . '&ylaosasto=' . $ylaosasto .
                            '&o_500=' . $kaikki_7 . 
                            '&sanahaku=' . $sanahaku . '#listaus_ankkuri">' . $i . '</a></li>';
              } 
              else {
                echo '<li class="pagination_lista"><a class="pagination" href="https://jaetaan.net?page=' . $i . '&kaupunki=' . $kaupunki1 . 
  '&ylaosasto=' . $ylaosasto . '&o_500=' . $kaikki_7 . 
  '&sanahaku=' . $sanahaku . '#listaus_ankkuri">' . $i . '</a></li>';
              }
            }
          } 
          else {
            for ($i=$page_II - 2; $i<=$page_II + 2; $i++) {
              if ($page_I == $i || $page_I == '' && $i == 1) {
                echo '<li class="pagination_lista"><a id="active" class="pagination" href="https://jaetaan.net?page=' . $i . '&kaupunki=' . $kaupunki1 . 
  '&ylaosasto=' . $ylaosasto . '&o_500=' . $kaikki_7 . 
  '&sanahaku=' . $sanahaku . '#listaus_ankkuri">' . $i . '</a></li>';
              } 
              else {
                          echo '<li class="pagination_lista"><a class="pagination" href="https://jaetaan.net?page=' . $i . '&kaupunki=' . $kaupunki1 . 
  '&ylaosasto=' . $ylaosasto . '&o_500=' . $kaikki_7 . 
  '&sanahaku=' . $sanahaku . '#listaus_ankkuri">' . $i . '</a></li>';
              }
            }
          }

        echo '</ul>';

      echo '</div> <br><br>';

          }

    // Jos ylaosasto Pyydetään apua

    if ($ylaosasto == 'Pyydetään apua') {

      if ($kaikki_8 == 'Kaikki') {

        $query="SELECT * FROM ilmoitukset, osastot
                         WHERE ilmoitukset.id=osastot.id 
                         AND ilmoitukset.julkaistu='kylla'
                         AND kaupunki='$kaupunki1' 
                         AND ylaosasto='$ylaosasto'
                         AND (otsikko LIKE '%$sanahaku%'
                         OR sisalto LIKE '%$sanahaku%'    
                         OR paikka LIKE '%$sanahaku%'
                         OR tapahtumanOsoite LIKE '%$sanahaku%'
                         OR nimi LIKE '%$sanahaku%'
                         OR nettisivu LIKE '%$sanahaku%')";

      }

      $result = mysqli_query($conn, $query);

      // Count the total records
      $total_records = mysqli_num_rows($result);

      //Using ceil function to divide the total records on per page
      $total_pages = ceil($total_records / $per_page);

      $kaupunki1 = mysqli_real_escape_string($conn, $_GET['kaupunki']);
      $ylaosasto = mysqli_real_escape_string($conn, $_GET['ylaosasto']);
      $sanahaku = mysqli_real_escape_string($conn, $_GET['sanahaku']);

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
                echo '<li class="pagination_lista"><a id="active" class="pagination" href="https://jaetaan.net?page=' . $i . '&kaupunki=' . $kaupunki1 . '&ylaosasto=' . $ylaosasto .
                            '&o_600=' . $kaikki_8 . 
                            '&sanahaku=' . $sanahaku . '#listaus_ankkuri">' . $i . '</a></li>';
              } 
              else {
                echo '<li class="pagination_lista"><a class="pagination" href="https://jaetaan.net?page=' . $i . '&kaupunki=' . $kaupunki1 . 
  '&ylaosasto=' . $ylaosasto . '&o_600=' . $kaikki_8 . 
  '&sanahaku=' . $sanahaku . '#listaus_ankkuri">' . $i . '</a></li>';
              }
            }
          } 
          else {
            for ($i=$page_II - 2; $i<=$page_II + 2; $i++) {
              if ($page_I == $i || $page_I == '' && $i == 1) {
                echo '<li class="pagination_lista"><a id="active" class="pagination" href="https://jaetaan.net?page=' . $i . '&kaupunki=' . $kaupunki1 . 
  '&ylaosasto=' . $ylaosasto . '&o_600=' . $kaikki_8 . 
  '&sanahaku=' . $sanahaku . '#listaus_ankkuri">' . $i . '</a></li>';
              } 
              else {
                echo '<li class="pagination_lista"><a class="pagination" href="https://jaetaan.net?page=' . $i . '&kaupunki=' . $kaupunki1 . 
  '&ylaosasto=' . $ylaosasto . '&o_600=' . $kaikki_8 . 
  '&sanahaku=' . $sanahaku . '#listaus_ankkuri">' . $i . '</a></li>';
              }
            }
          }

        echo '</ul>';

      echo '</div> <br><br>';

          }

    // Jos ylaosasto Pyydetään lainaan

    if ($ylaosasto == 'Pyydetään lainaan') {

      if ($kaikki_9 == 'Kaikki') {

        $query="SELECT * FROM ilmoitukset, osastot
                         WHERE ilmoitukset.id=osastot.id 
                         AND ilmoitukset.julkaistu='kylla'
                         AND kaupunki='$kaupunki1' 
                         AND ylaosasto='$ylaosasto'
                         AND (otsikko LIKE '%$sanahaku%'
                         OR sisalto LIKE '%$sanahaku%'    
                         OR paikka LIKE '%$sanahaku%'
                         OR tapahtumanOsoite LIKE '%$sanahaku%'
                         OR nimi LIKE '%$sanahaku%'
                         OR nettisivu LIKE '%$sanahaku%')";

      }

      $result = mysqli_query($conn, $query);

      // Count the total records
      $total_records = mysqli_num_rows($result);

      //Using ceil function to divide the total records on per page
      $total_pages = ceil($total_records / $per_page);

      $kaupunki1 = mysqli_real_escape_string($conn, $_GET['kaupunki']);
      $ylaosasto = mysqli_real_escape_string($conn, $_GET['ylaosasto']);
      $sanahaku = mysqli_real_escape_string($conn, $_GET['sanahaku']);

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
                echo '<li class="pagination_lista"><a id="active" class="pagination" href="https://jaetaan.net?page=' . $i . '&kaupunki=' . $kaupunki1 . '&ylaosasto=' . $ylaosasto .
                            '&o_700=' . $kaikki_9 . 
                            '&sanahaku=' . $sanahaku . '#listaus_ankkuri">' . $i . '</a></li>';
              } 
              else {
                echo '<li class="pagination_lista"><a class="pagination" href="https://jaetaan.net?page=' . $i . '&kaupunki=' . $kaupunki1 . 
  '&ylaosasto=' . $ylaosasto . '&o_700=' . $kaikki_9 . 
  '&sanahaku=' . $sanahaku . '#listaus_ankkuri">' . $i . '</a></li>';
              }
            }
          } 
          else {
            for ($i=$page_II - 2; $i<=$page_II + 2; $i++) {
              if ($page_I == $i || $page_I == '' && $i == 1) {
                echo '<li class="pagination_lista"><a id="active" class="pagination" href="https://jaetaan.net?page=' . $i . '&kaupunki=' . $kaupunki1 . 
  '&ylaosasto=' . $ylaosasto . '&o_700=' . $kaikki_9 . 
  '&sanahaku=' . $sanahaku . '#listaus_ankkuri">' . $i . '</a></li>';
              } 
              else {
                echo '<li class="pagination_lista"><a class="pagination" href="https://jaetaan.net?page=' . $i . '&kaupunki=' . $kaupunki1 . 
  '&ylaosasto=' . $ylaosasto . '&o_700=' . $kaikki_9 . 
  '&sanahaku=' . $sanahaku . '#listaus_ankkuri">' . $i . '</a></li>';
              }
            }
          }

        echo '</ul>';

      echo '</div> <br><br>';

          }

    // Jos ylaosasto Pyydetään ruokaa

    if ($ylaosasto == 'Pyydetään ruokaa') {

      if ($kaikki_10 == 'Kaikki') {

        $query="SELECT * FROM ilmoitukset, osastot
                         WHERE ilmoitukset.id=osastot.id 
                         AND ilmoitukset.julkaistu='kylla'
                         AND kaupunki='$kaupunki1' 
                         AND ylaosasto='$ylaosasto'
                         AND (otsikko LIKE '%$sanahaku%'
                         OR sisalto LIKE '%$sanahaku%'    
                         OR paikka LIKE '%$sanahaku%'
                         OR tapahtumanOsoite LIKE '%$sanahaku%'
                         OR nimi LIKE '%$sanahaku%'
                         OR nettisivu LIKE '%$sanahaku%')";

      }

      $result = mysqli_query($conn, $query);

      // Count the total records
      $total_records = mysqli_num_rows($result);

      //Using ceil function to divide the total records on per page
      $total_pages = ceil($total_records / $per_page);

      $kaupunki1 = mysqli_real_escape_string($conn, $_GET['kaupunki']);
      $ylaosasto = mysqli_real_escape_string($conn, $_GET['ylaosasto']);
      $sanahaku = mysqli_real_escape_string($conn, $_GET['sanahaku']);

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
                echo '<li class="pagination_lista"><a id="active" class="pagination" href="https://jaetaan.net?page=' . $i . '&kaupunki=' . $kaupunki1 . '&ylaosasto=' . $ylaosasto .
                            '&o_800=' . $kaikki_10 . 
                            '&sanahaku=' . $sanahaku . '#listaus_ankkuri">' . $i . '</a></li>';
              } 
              else {
                echo '<li class="pagination_lista"><a class="pagination" href="https://jaetaan.net?page=' . $i . '&kaupunki=' . $kaupunki1 . 
  '&ylaosasto=' . $ylaosasto . '&o_800=' . $kaikki_10 . 
  '&sanahaku=' . $sanahaku . '#listaus_ankkuri">' . $i . '</a></li>';
              }
            }
          } 
          else {
            for ($i=$page_II - 2; $i<=$page_II + 2; $i++) {
              if ($page_I == $i || $page_I == '' && $i == 1) {
                echo '<li class="pagination_lista"><a id="active" class="pagination" href="https://jaetaan.net?page=' . $i . '&kaupunki=' . $kaupunki1 . 
  '&ylaosasto=' . $ylaosasto . '&o_800=' . $kaikki_10 . 
  '&sanahaku=' . $sanahaku . '#listaus_ankkuri">' . $i . '</a></li>';
              } 
              else {
                          echo '<li class="pagination_lista"><a class="pagination" href="https://jaetaan.net?page=' . $i . '&kaupunki=' . $kaupunki1 . 
  '&ylaosasto=' . $ylaosasto . '&o_800=' . $kaikki_10 . 
  '&sanahaku=' . $sanahaku . '#listaus_ankkuri">' . $i . '</a></li>';
              }
            }
          }

        echo '</ul>';

      echo '</div> <br><br>';

          }

    // Jos ylaosasto Pyydetään tavaroita

    if ($ylaosasto == 'Pyydetään tavaroita') {

      if ($kaikki_11 != 'Kaikki') {

        $query="SELECT * FROM ilmoitukset, osastot
                         WHERE ilmoitukset.id=osastot.id 
                         AND ilmoitukset.julkaistu='kylla'
                         AND kaupunki='$kaupunki1' 
                         AND ylaosasto='$ylaosasto'
                         AND (elektroniikka_2='$elektroniikka_2'
                         OR huonekalut_2='$huonekalut_2'
                         OR kodinkoneet_2='$kodinkoneet_2'
                         OR vaatteet_2='$vaatteet_2'
                         OR muut_pyydetaan_tavaroita='$muut_pyydetaan_tavaroita')
                         AND (otsikko LIKE '%$sanahaku%'
                         OR sisalto LIKE '%$sanahaku%'    
                         OR paikka LIKE '%$sanahaku%'
                         OR tapahtumanOsoite LIKE '%$sanahaku%'
                         OR nimi LIKE '%$sanahaku%'
                         OR nettisivu LIKE '%$sanahaku%')";
      }

      if ($kaikki_11 == 'Kaikki') {

        $query="SELECT * FROM ilmoitukset, osastot
                         WHERE ilmoitukset.id=osastot.id 
                         AND ilmoitukset.julkaistu='kylla'
                         AND kaupunki='$kaupunki1' 
                         AND ylaosasto='$ylaosasto'
                         AND (otsikko LIKE '%$sanahaku%'
                         OR sisalto LIKE '%$sanahaku%'    
                         OR paikka LIKE '%$sanahaku%'
                         OR tapahtumanOsoite LIKE '%$sanahaku%'
                         OR nimi LIKE '%$sanahaku%'
                         OR nettisivu LIKE '%$sanahaku%')";

      }

      $result = mysqli_query($conn, $query);

      // Count the total records
      $total_records = mysqli_num_rows($result);

      //Using ceil function to divide the total records on per page
      $total_pages = ceil($total_records / $per_page);

      $kaupunki1 = mysqli_real_escape_string($conn, $_GET['kaupunki']);
      $ylaosasto = mysqli_real_escape_string($conn, $_GET['ylaosasto']);
      $sanahaku = mysqli_real_escape_string($conn, $_GET['sanahaku']);

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
                echo '<li class="pagination_lista"><a id="active" class="pagination" href="https://jaetaan.net?page=' . $i . '&kaupunki=' . $kaupunki1 . '&ylaosasto=' . $ylaosasto .
                            '&o_900=' . $kaikki_11 .
                            '&o_901=' . $elektroniikka_2 . 
                            '&o_902=' . $huonekalut_2 . 
                            '&o_903=' . $kodinkoneet_2 .
                            '&o_904=' . $vaatteet_2 .
                            '&o_905=' . $muut_pyydetaan_tavaroita . 
                            '&sanahaku=' . $sanahaku . '#listaus_ankkuri">' . $i . '</a></li>';
              } 
              else {
                echo '<li class="pagination_lista"><a class="pagination" href="https://jaetaan.net?page=' . $i . '&kaupunki=' . $kaupunki1 . 
                           '&ylaosasto=' . $ylaosasto . 
                           '&o_900=' . $kaikki_11 . 
                           '&o_901=' . $elektroniikka_2 . 
                           '&o_902=' . $huonekalut_2 . 
                           '&o_903=' . $kodinkoneet_2 .
                           '&o_904=' . $vaatteet_2 . 
                           '&o_905=' . $muut_pyydetaan_tavaroita . 
                           '&sanahaku=' . $sanahaku . '#listaus_ankkuri">' . $i . '</a></li>';
              }
            }
          } 
          else {
            for ($i=$page_II - 2; $i<=$page_II + 2; $i++) {
              if ($page_I == $i || $page_I == '' && $i == 1) {
                echo '<li class="pagination_lista"><a id="active" class="pagination" href="https://jaetaan.net?page=' . $i . '&kaupunki=' . $kaupunki1 . '&ylaosasto=' . $ylaosasto . 
                            '&o_900=' . $kaikki_11 . 
                            '&o_901=' . $elektroniikka_2 . 
                            '&o_902=' . $huonekalut_2 . 
                            '&o_903=' . $kodinkoneet_2 .
                            '&o_904=' . $vaatteet_2 . 
                            '&o_905=' . $muut_pyydetaan_tavaroita . 
                            '&sanahaku=' . $sanahaku . '#listaus_ankkuri">' . $i . '</a></li>';
              } 
              else {
                echo '<li class="pagination_lista"><a class="pagination" href="https://jaetaan.net?page=' . $i . '&kaupunki=' . $kaupunki1 . 
                           '&ylaosasto=' . $ylaosasto . 
                           '&o_900=' . $kaikki_11 . 
                           '&o_901=' . $elektroniikka_2 . 
                           '&o_902=' . $huonekalut_2 . 
                           '&o_903=' . $kodinkoneet_2 .
                           '&o_904=' . $vaatteet_2 . 
                           '&o_905=' . $muut_pyydetaan_tavaroita . 
                           '&sanahaku=' . $sanahaku . '#listaus_ankkuri">' . $i . '</a></li>';
              }
            }
          }

        echo '</ul>';

      echo '</div> <br><br>';

          }

    // Jos ylaosasto Pyydetään tekemistä

    if ($ylaosasto == 'Pyydetään tekemistä') {

      if ($kaikki_12 != 'Kaikki') {

        $query="SELECT * FROM ilmoitukset, osastot
                         WHERE ilmoitukset.id=osastot.id 
                         AND ilmoitukset.julkaistu='kylla'
                         AND kaupunki='$kaupunki1' 
                         AND ylaosasto='$ylaosasto'
                         AND (liikunta_3='$liikunta_3'
                         OR musiikki_3='$musiikki_3'
                         OR nayttelyt_3='$nayttelyt_3'
                         OR paikat_3='$paikat_3'
                         OR tilat_3='$tilat_3'
                         OR urheilu_3='$urheilu_3'
                         OR muut_pyydetaan_tekemista='$muut_pyydetaan_tekemista')
                         AND (otsikko LIKE '%$sanahaku%'
                         OR sisalto LIKE '%$sanahaku%'    
                         OR paikka LIKE '%$sanahaku%'
                         OR tapahtumanOsoite LIKE '%$sanahaku%'
                         OR nimi LIKE '%$sanahaku%'
                         OR nettisivu LIKE '%$sanahaku%')";
      }

      if ($kaikki_12 == 'Kaikki') {

        $query="SELECT * FROM ilmoitukset, osastot
                         WHERE ilmoitukset.id=osastot.id 
                         AND ilmoitukset.julkaistu='kylla'
                         AND kaupunki='$kaupunki1' 
                         AND ylaosasto='$ylaosasto'
                         AND (otsikko LIKE '%$sanahaku%'
                         OR sisalto LIKE '%$sanahaku%'    
                         OR paikka LIKE '%$sanahaku%'
                         OR tapahtumanOsoite LIKE '%$sanahaku%'
                         OR nimi LIKE '%$sanahaku%'
                         OR nettisivu LIKE '%$sanahaku%')";

      }

      $result = mysqli_query($conn, $query);

      // Count the total records
      $total_records = mysqli_num_rows($result);

      //Using ceil function to divide the total records on per page
      $total_pages = ceil($total_records / $per_page);

      $kaupunki1 = mysqli_real_escape_string($conn, $_GET['kaupunki']);
      $ylaosasto = mysqli_real_escape_string($conn, $_GET['ylaosasto']);
      $sanahaku = mysqli_real_escape_string($conn, $_GET['sanahaku']);

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
                echo '<li class="pagination_lista"><a id="active" class="pagination" href="https://jaetaan.net?page=' . $i . '&kaupunki=' . $kaupunki1 . '&ylaosasto=' . $ylaosasto .
                            '&o_950=' . $kaikki_12 . 
                            '&o_951=' . $liikunta_3 . 
                            '&o_952=' . $musiikki_3 . 
                            '&o_953=' . $nayttelyt_3 . 
                            '&o_954=' . $paikat_3 . 
                            '&o_955=' . $tilat_3 . 
                            '&o_956=' . $urheilu_3 .
                            '&o_957=' . $muut_pyydetaan_tekemista . 
                            '&sanahaku=' . $sanahaku . '#listaus_ankkuri">' . $i . '</a></li>';
              } 
              else {
                echo '<li class="pagination_lista"><a class="pagination" href="https://jaetaan.net?page=' . $i . '&kaupunki=' . $kaupunki1 . 
  '&ylaosasto=' . $ylaosasto . '&o_950=' . $kaikki_12 . 
                               '&o_951=' . $liikunta_3 . 
                               '&o_952=' . $musiikki_3 . 
                               '&o_953=' . $nayttelyt_3 . 
                               '&o_954=' . $paikat_3 . 
                               '&o_955=' . $tilat_3 . 
                               '&o_956=' . $urheilu_3 .
                               '&o_957=' . $muut_pyydetaan_tekemista .
                               '&sanahaku=' . $sanahaku . '#listaus_ankkuri">' . $i . '</a></li>';
              }
            }
          } 
          else {
            for ($i=$page_II - 2; $i<=$page_II + 2; $i++) {
              if ($page_I == $i || $page_I == '' && $i == 1) {
                echo '<li class="pagination_lista"><a id="active" class="pagination" href="https://jaetaan.net?page=' . $i . '&kaupunki=' . $kaupunki1 . 
  '&ylaosasto=' . $ylaosasto . '&o_950=' . $kaikki_12 . 
                               '&o_951=' . $liikunta_3 . 
                               '&o_952=' . $musiikki_3 . 
                               '&o_953=' . $nayttelyt_3 . 
                               '&o_954=' . $paikat_3 . 
                               '&o_955=' . $tilat_3 . 
                               '&o_956=' . $urheilu_3 .
                               '&o_957=' . $muut_pyydetaan_tekemista .
                               '&sanahaku=' . $sanahaku . '#listaus_ankkuri">' . $i . '</a></li>';
              } 
              else {
                echo '<li class="pagination_lista"><a class="pagination" href="https://jaetaan.net?page=' . $i . '&kaupunki=' . $kaupunki1 . 
  '&ylaosasto=' . $ylaosasto . '&o_950=' . $kaikki_12 . 
                               '&o_951=' . $liikunta_3 . 
                               '&o_952=' . $musiikki_3 . 
                               '&o_953=' . $nayttelyt_3 . 
                               '&o_954=' . $paikat_3 . 
                               '&o_955=' . $tilat_3 . 
                               '&o_956=' . $urheilu_3 .
                               '&o_957=' . $muut_pyydetaan_tekemista .
                               '&sanahaku=' . $sanahaku . '#listaus_ankkuri">' . $i . '</a></li>';
              }
            }
          }

        echo '</ul>';

      echo '</div> <br><br>';

          }

    // Jos ylaosasto Muut pyydetään

    if ($ylaosasto == 'Muut pyydetään') {

      if ($kaikki_13 == 'Kaikki') {

        $query="SELECT * FROM ilmoitukset, osastot
                         WHERE ilmoitukset.id=osastot.id 
                         AND ilmoitukset.julkaistu='kylla'
                         AND kaupunki='$kaupunki1' 
                         AND ylaosasto='$ylaosasto'
                         AND (otsikko LIKE '%$sanahaku%'
                         OR sisalto LIKE '%$sanahaku%'    
                         OR paikka LIKE '%$sanahaku%'
                         OR tapahtumanOsoite LIKE '%$sanahaku%'
                         OR nimi LIKE '%$sanahaku%'
                         OR nettisivu LIKE '%$sanahaku%')";

      }

      $result = mysqli_query($conn, $query);

      // Count the total records
      $total_records = mysqli_num_rows($result);

      //Using ceil function to divide the total records on per page
      $total_pages = ceil($total_records / $per_page);

      $kaupunki1 = mysqli_real_escape_string($conn, $_GET['kaupunki']);
      $ylaosasto = mysqli_real_escape_string($conn, $_GET['ylaosasto']);
      $sanahaku = mysqli_real_escape_string($conn, $_GET['sanahaku']);

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
                echo '<li class="pagination_lista"><a id="active" class="pagination" href="https://jaetaan.net?page=' . $i . '&kaupunki=' . $kaupunki1 . '&ylaosasto=' . $ylaosasto .
                                      '&o_1000=' . $kaikki_13 . 
                                      '&sanahaku=' . $sanahaku . '#listaus_ankkuri">' . $i . '</a></li>';
              } 
              else {
                echo '<li class="pagination_lista"><a class="pagination" href="https://jaetaan.net?page=' . $i . '&kaupunki=' . $kaupunki1 . 
            '&ylaosasto=' . $ylaosasto . '&o_1000=' . $kaikki_13 . 
            '&sanahaku=' . $sanahaku . '#listaus_ankkuri">' . $i . '</a></li>';
              }
            }
          } 
          else {
            for ($i=$page_II - 2; $i<=$page_II + 2; $i++) {
              if ($page_I == $i || $page_I == '' && $i == 1) {
                echo '<li class="pagination_lista"><a id="active" class="pagination" href="https://jaetaan.net?page=' . $i . '&kaupunki=' . $kaupunki1 . 
            '&ylaosasto=' . $ylaosasto . '&o_1000=' . $kaikki_13 . 
            '&sanahaku=' . $sanahaku . '#listaus_ankkuri">' . $i . '</a></li>';
              } 
              else {
                echo '<li class="pagination_lista"><a class="pagination" href="https://jaetaan.net?page=' . $i . '&kaupunki=' . $kaupunki1 . 
            '&ylaosasto=' . $ylaosasto . '&o_1000=' . $kaikki_13 . 
            '&sanahaku=' . $sanahaku . '#listaus_ankkuri">' . $i . '</a></li>';
              }
            }
          }

        echo '</ul>';

      echo '</div> <br><br>';

          }
        }

    ?>

  </div>

</div>

<?php
  include 'includes/footer.php';
?>

</body>
</html>
