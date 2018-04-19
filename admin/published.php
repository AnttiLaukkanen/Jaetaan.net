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

        <h1 class='info_otsikko'>Julkaistut ilmoitukset</h1>  
        
        <p class='info_teksti'>Tältä sivulta pääset muokkaamaan
        tai poistamaan minkä tahansa sivustolla julkaistun ilmoituksen.</p>
  
        <p class='info_teksti'>Käytä tarvittaessa sanahakua löytääksesi haluamasi ilmoituksen.</p>

        <p class='info_teksti'>Sanahaku hakee etsimääsi sanaa kaikista kaupungeista, 
                               yläosastoista, osastoista jne.</p><br>
        
        <p class='info_teksti'>Klikkaamalla kuvaa pääset tarkastelemaan 
        julkisesti näkyvää ilmoitusta.</p> 

        <p class='info_teksti'>Klikkaamalla ilmoituksen mitä tahansa muuta kohtaa
        kuin kuvaa pääset muokkaamaan tai poistamaan valitsemasi ilmoituksen.</p> 

        <br>
    
<?php

       include '../includes/ilmoitusten_haku_2.php';

?>

<script>hakuTapahtumat()</script>

      <?php

            // Funktiot päivämäärille: Tietokannasta suomalaiseen muotoon taulukkoon.

            function date_FIN($date) {
                $dx = explode('-', $date);
                $date = $dx[2].'.'.$dx[1].'.'.$dx[0];
                return $date;
            }

            function date_FIN_2($date) {
                $dx = explode(":", $date);
                $date = $dx[0].".".$dx[1].".".$dx[2];
                return $date;
            }

            function date_FIN_3($date) {
                $dx = explode(":", $date);
                $date = $dx[0].".".$dx[1];
                return $date;
            }

            if (!isset($_GET['kaupunki']) && !isset($_GET['ylaosasto'])) {
                // Muodostaa yhteyden tietokantaan.
                include '../includes/luo_yhteyden_tietokantaan.php';

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



$sanahaku = mysqli_real_escape_string($conn, $_GET['sanahaku']);

$query="SELECT * FROM ilmoitukset, osastot
        WHERE ilmoitukset.id=osastot.id 
        AND julkaistu='kylla'
        AND (otsikko LIKE '%$sanahaku%'
        OR sisalto LIKE '%$sanahaku%'    
        OR paikka LIKE '%$sanahaku%'
        OR tapahtumanOsoite LIKE '%$sanahaku%'
        OR nimi LIKE '%$sanahaku%'
        OR nettisivu LIKE '%$sanahaku%')
        ORDER BY pvm DESC 
        LIMIT $start_from, $per_page";

$result = mysqli_query($conn, $query);

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

                    $ylaosasto = $row['ylaosasto'];

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

                        <tr class='listaus_rivi_hallinnointi' onclick="linkkiKokoIlmoitukseen_2('<?=htmlspecialchars($row["urlMuokkaaTaiPoista"], ENT_QUOTES, 'UTF-8'); ?>')">

                            <td class='listaus_solu'>
                                <a href="https://jaetaan.net/ilmoitukset?urlKokoIlmoitus=<?php echo htmlspecialchars($row['urlKokoIlmoitus'], ENT_QUOTES, 'UTF-8'); ?>" target="_blank"> 
                                    <img class='listaus_kuva' src='<?php if ($row["source"] != "lomake" && $row["source"] != "h_lomake" &&  $row["kuva1"] != "oletuskuva_1234.jpg") {echo htmlspecialchars($row["kuva1"], ENT_QUOTES, "UTF-8"); } else {echo "https://jaetaan.net/kuvat/rajatut_kuvat/" . htmlspecialchars($row["pieni_kuva_1"], ENT_QUOTES, "UTF-8"); } ?>'>
                                </a> 
                            </td>

                            <td class='listaus_solu'>
                                
                                <a id='listaus_otsikko' class='listaus_linkin_teksti' href="https://jaetaan.net/admin/edit_or_delete.php?urlMuokkaaTaiPoista=<?php echo htmlspecialchars($row['urlMuokkaaTaiPoista'], ENT_QUOTES, 'UTF-8'); ?>" target="_blank">
                                    <p>
                                      <b>
                                        <?php echo htmlspecialchars($row['otsikko'], ENT_QUOTES, 'UTF-8'); ?>
                                      </b>
                                    </p>
                                </a>

                                <a id='listaus_osasto' class='listaus_linkin_teksti' href='https://jaetaan.net/admin/edit_or_delete.php?urlMuokkaaTaiPoista=<?php echo htmlspecialchars($row["urlMuokkaaTaiPoista"], ENT_QUOTES, "UTF-8"); ?>' target="_blank">
                                    <p id='listaus_osasto_p'>
                                      
                                        <?php $jee_jee_jee=htmlspecialchars($osasto, ENT_QUOTES, 'UTF-8'); 
                                        echo htmlspecialchars($row['ylaosasto'], ENT_QUOTES, 'UTF-8') . '<br>' . $jee_jee_jee; ?>
                                      
                                    </p>        
                                </a>

                                <a id='listaus_paikka' class='listaus_linkin_teksti' href='https://jaetaan.net/admin/edit_or_delete.php?urlMuokkaaTaiPoista=<?php echo htmlspecialchars($row["urlMuokkaaTaiPoista"], ENT_QUOTES, "UTF-8"); ?>' target="_blank">
                                    <p id='listaus_paikka_p'>
                                      <?php echo htmlspecialchars($row['paikka'], ENT_QUOTES, 'UTF-8'); ?>
                                    </p>
                                </a>

                              
                                <a id='listaus_kaupunki' class='listaus_linkin_teksti' href='https://jaetaan.net/admin/edit_or_delete.php?urlMuokkaaTaiPoista=<?php echo htmlspecialchars($row["urlMuokkaaTaiPoista"], ENT_QUOTES, "UTF-8"); ?>' target="_blank">
                                    <p id='listaus_kaupunki_p'>
                                        <?php echo htmlspecialchars($row['kaupunki'], ENT_QUOTES, 'UTF-8'); ?>
                                    </p>
                                </a>  

            <?php if ($ylaosasto == 'Tapahtumat') { ?> 
                                     
                                <a id='listaus_viikon_paiva_suomeksi' class='listaus_linkin_teksti' href='https://jaetaan.net/admin/edit_or_delete.php?urlMuokkaaTaiPoista=<?php echo htmlspecialchars($row["urlMuokkaaTaiPoista"], ENT_QUOTES, "UTF-8"); ?>' target="_blank"> 
                                    <p class='paivays_katoaa_pieni'>
                                             
                                        <?php echo substr($viikon_paiva_suomeksi,0,2) . ' ' . date_FIN(substr(htmlspecialchars($row['tapahtumaAlkaa'], ENT_QUOTES, "UTF-8"),0,10)) . ' klo ' . date_FIN_2(htmlspecialchars($row['klo_I'], ENT_QUOTES, "UTF-8")); ?>
                                      
                                    </p>
                                </a>
            <?php } ?>

                          <?php if ($ylaosasto != 'Tapahtumat') { ?> 
                                     
 <a id='listaus_ilmoitus_lisatty' class='listaus_linkin_teksti' href='https://jaetaan.net/admin/edit_or_delete.php?urlMuokkaaTaiPoista=<?php echo htmlspecialchars($row["urlMuokkaaTaiPoista"], ENT_QUOTES, "UTF-8"); ?>' target="_blank">
                                  <p class='paivays_katoaa_pieni'>
                                          
                                      <?php echo date_FIN(substr(htmlspecialchars($row['pvm'], ENT_QUOTES, "UTF-8"),0,10)); ?>
                                  </p>
                              </a>

            <?php } ?>                                                           
                    
                            </td>

    <?php if ($ylaosasto == 'Tapahtumat') { ?>

                            <td class='listaus_solu paivays_katoaa'>
                                <a id='listaus_viikon_paiva_suomeksi' class='listaus_linkin_teksti' href='https://jaetaan.net/admin/edit_or_delete.php?urlMuokkaaTaiPoista=<?php echo htmlspecialchars($row["urlMuokkaaTaiPoista"], ENT_QUOTES, "UTF-8"); ?>' target="_blank"> 
                                    <p>
                                       <b>         
                                            <?php echo $viikon_paiva_suomeksi; ?>
                                        </b>
                                    </p>
                                </a>

                                <a id='listaus_tapahtuma_alkaa' class='listaus_linkin_teksti' href='https://jaetaan.net/admin/edit_or_delete.php?urlMuokkaaTaiPoista=<?php echo htmlspecialchars($row["urlMuokkaaTaiPoista"], ENT_QUOTES, "UTF-8"); ?>' target="_blank"> 
                                    <p>
                                        <?php echo date_FIN(substr(htmlspecialchars($row['tapahtumaAlkaa'], ENT_QUOTES, "UTF-8"),0,10)); ?>
                                    </p>
                                </a>
        
                                <a id='listaus_klo_I' class='listaus_linkin_teksti' href='https://jaetaan.net/admin/edit_or_delete.php?urlMuokkaaTaiPoista=<?php echo htmlspecialchars($row["urlMuokkaaTaiPoista"], ENT_QUOTES, "UTF-8"); ?>' target="_blank">
                                    <p>
                                         <?php echo 'klo ' . date_FIN_3(htmlspecialchars($row['klo_I'], ENT_QUOTES, "UTF-8")); ?>
                                    </p>
                                </a>
                            </td>

<?php } 

    if ($ylaosasto != 'Tapahtumat') { ?>

                            <td class='listaus_solu paivays_katoaa'> 
                              <a id='listaus_ilmoitus_lisatty' class='listaus_linkin_teksti' href='https://jaetaan.net/admin/edit_or_delete.php?urlMuokkaaTaiPoista=<?php echo htmlspecialchars($row["urlMuokkaaTaiPoista"], ENT_QUOTES, "UTF-8"); ?>' target="_blank">
                                  <p>
                                          
                                    <?php echo "Ilmoitus lisätty:<br><br>" . date_FIN(substr(htmlspecialchars($row['pvm'], ENT_QUOTES, "UTF-8"),0,10)); ?>
                                    <br>
                                    <?php echo date_FIN_2(substr(htmlspecialchars($row['pvm'], ENT_QUOTES, "UTF-8"),11,8)); ?>
                                  </p>
                              </a>
                          </td>

<?php } ?>
 
                        </tr>

                    </tbody>

        <?php
                }
            } 
            else {
                echo 'Ei julkaistuja ilmoituksia.';
            }
        ?>

        </table>

<?php

$query="SELECT * FROM ilmoitukset, osastot
                      WHERE ilmoitukset.id=osastot.id
                      AND julkaistu='kylla'
                      AND (otsikko LIKE '%$sanahaku%'
                      OR sisalto LIKE '%$sanahaku%'    
                      OR paikka LIKE '%$sanahaku%'
                      OR tapahtumanOsoite LIKE '%$sanahaku%'
                      OR nimi LIKE '%$sanahaku%'
                      OR nettisivu LIKE '%$sanahaku%')
                      ORDER BY pvm DESC "; 

            $result = mysqli_query($conn, $query);

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
                                echo '<li class="pagination_lista"><a id="active" class="pagination" href="https://jaetaan.net/admin/published.php?page=' . $i . '&sanahaku=' . $sanahaku . '#listaus_ankkuri">' . $i . '</a></li>';
                            } 
                            else {
                                echo '<li class="pagination_lista"><a class="pagination" href="https://jaetaan.net/admin/published.php?page=' . $i . '&sanahaku=' . $sanahaku . '#listaus_ankkuri">' . $i . '</a></li>';
                            }
                        }
                    } 
                    else {
                        for ($i=$page_II - 2; $i<=$page_II + 2; $i++) {
                            if ($page_I == $i || $page_I == '' && $i == 1) {
                                echo '<li class="pagination_lista"><a id="active" class="pagination" href="https://jaetaan.net/admin/published.php?page=' . $i . '&sanahaku=' . $sanahaku . '#listaus_ankkuri">' . $i . '</a></li>';
                            } 
                            else {
                                echo '<li class="pagination_lista"><a class="pagination" href="https://jaetaan.net/admin/published.php?page=' . $i . '&sanahaku=' . $sanahaku . '#listaus_ankkuri">' . $i . '</a></li>';
                            }
                        }
                    }

                echo '</ul>';

            echo '</div> <br><br>';
                     
}
 
?>

</body>
</html>
