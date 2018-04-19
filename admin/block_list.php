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

<div class='keski_osa'>

  <h1 class='info_otsikko'>Estolista</h1>
  <p class='info_teksti'>Tällä listalla ovat poistetut Linked Events -tapahtumat.  </p>  
  <p class='info_teksti'>Nämä eivät tule uudelleen julkaisemattomien Linked Events -tapahtumien 
                         listaukseen.</p>
  <br>
  <p class='info_teksti'>Jos listalle meni vahingossa jokin tapahtuma, voit poistaa tapahtuman 
                         estolistalta klikkaamalla alla olevasta listauksesta kyseisen tapahtuman 
                         kohdalta Poista estolistalta -nappia.</p>
  <p class='info_teksti'>Kyseinen tapahtuma näkyy taas seuraavassa julkaisemattomien 
                         Linked Events -tapahtumien listauksessa.</p>               
  <br>
  <p class='info_teksti'>Estolista tyhjenee automaattisesti kaksi kertaa vuodessa, jotta 
                         automaatinen tapahtumien haku pysyy nopeana.</p>

  <br>
  <br>
  <br>
  <br>

<?php

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

  // Listaa estetyt Linked Events -ilmoitukset
  
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

  $sql = "SELECT * FROM estetyt_l_e_tapahtumat
          ORDER BY id DESC
          LIMIT $start_from, $per_page";

   $result = mysqli_query($conn, $sql);

?>
                                 
<!--Listaa haetut tiedot taulukossa.-->

<span id='listaus_ankkuri_2'></span>

<table id='ilmoitusten_listaus_tapahtumat'>

<?php   

  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
            
?> 

  <tbody>

    <tr class='listaus_rivi_hallinnointi'>

      <td class='listaus_solu'>
        <p id='listaus_kaupunki_p' class='p_katoavat'>
          <?php echo htmlspecialchars($row['id'], ENT_QUOTES, 'UTF-8'); ?>
        </p>
      </td>

      <td class='listaus_solu'>
        <p id='listaus_kaupunki_p' class='p_katoavat'>
          <?php echo htmlspecialchars($row['otsikko'], ENT_QUOTES, 'UTF-8'); ?>
        </p>
      </td>

      <td class='listaus_solu'>
        <a target="_blank" href="https://jaetaan.net/admin/delete_from_block_list.php?id=<?php echo htmlspecialchars($row['id'], ENT_QUOTES, "UTF-8"); ?>">
          <button id='button_6'>
            Poista estolistalta
          </button>
        </a>
      </td>

      <td class='listaus_solu'>
        <p id='listaus_kaupunki_p' class='p_katoavat'>
          <?php echo 'Lisätty estolistalle: <br><br>' . date_FIN(substr(htmlspecialchars($row['added'], ENT_QUOTES, "UTF-8"),0,10)); ?>
          <?php echo '<br>klo ' . date_FIN_2(substr(htmlspecialchars($row['added'], ENT_QUOTES, "UTF-8"),11,8)); ?>
        </p>
      </td>
                   
    </tr>

  </tbody>

<?php
  
    }
  } 

  else {
    echo 'Ei Linked Events -tapahtumia estolistalla.';
  }

?>

</table>

<?php

$sql = "SELECT * FROM estetyt_l_e_tapahtumat";

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
      echo '<li class="pagination_lista"><a id="active" class="pagination" href="https://jaetaan.net/admin/block_list.php?page=' . $i . '#listaus_ankkuri_2">' . $i . '</a></li>';
    } 
    else {
      echo '<li class="pagination_lista"><a class="pagination" href="https://jaetaan.net/admin/block_list.php?page=' . $i . '#listaus_ankkuri_2">' . $i . '</a></li>';
    }
  }
} 
 
else {
  for ($i=$page_II - 2; $i<=$page_II + 2; $i++) {
    if ($page_I == $i || $page_I == '' && $i == 1) {
      echo '<li class="pagination_lista"><a id="active" class="pagination" href="https://jaetaan.net/admin/block_list.php?page=' . $i . '#listaus_ankkuri_2">' . $i . '</a></li>';
    } 
    else {
      echo '<li class="pagination_lista"><a class="pagination" href="https://jaetaan.net/admin/block_list.php?page=' . $i . '#listaus_ankkuri_2">' . $i . '</a></li>';
    }
  }
}

echo '</ul>';
echo '</div> <br><br>';

mysqli_close($conn);

?>     

</div>

</body>
</html>
