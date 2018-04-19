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


?>

<div id='navigointi'> 

    <ul>

        <a id='etusivu_linkki_2' href='https://jaetaan.net/admin/'>
            <li class='etusivu_lista_2'>
                Hallinnointi<br>
                Etusivu
            </li>
        </a>      
            
        <a id='linked_events_linkki' href='https://jaetaan.net/admin/published.php'>
            <li class='etusivu_lista_2'>
                Julkaistut<br>
                <?php echo '(' . $maara_1 . ')'; ?>
            </li>
        </a>

        <a id='linked_events_linkki' href='https://jaetaan.net/admin/unpublished.php'>
            <li class='etusivu_lista_2'>
                Julkaisemattomat<br>
                <?php echo '(' . $maara_2 . ')' ; ?>
            </li>
        </a>

        <a id='linked_events_linkki' href='https://jaetaan.net/admin/linked_events.php'>
            <li class='etusivu_lista_2'>
                Linked Events<br> 
                <?php echo '(' . $maara_3 . ')'; ?>
            </li>
        </a>

        <a id='linked_events_linkki' href='https://jaetaan.net/admin/add_event_from_fb.php'>
            <li class='etusivu_lista_2'>
                Lisää tapahtuma-<br>
                ilmoitus Fb:n avulla 
            </li>
        </a>

        <a id='linked_events_linkki' href='https://jaetaan.net/admin/block_list.php'>
          <li class='etusivu_lista_2'>
            Estolista<br>
            ***  
          </li>
        </a>

        <a id='linked_events_linkki' href='https://jaetaan.net/admin/statistics.php'>
          <li class='etusivu_lista_2'>
            Tilastoja<br>
            ***
          </li>
        </a>

        <a id='lisaa_ilmoitus_linkki_2' href='https://jaetaan.net/admin/add_ad.php'>
            <li id='lisaa_ilmoitus_lista_2'>
                Lisää<br>
                ilmoitus    
            </li>
        </a>

    </ul>

</div>
