<?php

// Muodostaa yhteyden tietokantaan.
include '../includes/luo_yhteyden_tietokantaan.php';

$sql = "DELETE FROM estetyt_l_e_tapahtumat";

mysqli_query($conn, $sql);

?>
