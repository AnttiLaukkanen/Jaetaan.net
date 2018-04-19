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

<h1 class='info_otsikko'>Yhteys</h1>

<h2 class='info_ala_otsikko'>Kaikissa Jaetaan.nettiin liittyvissä asioissa voit 
    ottaa yhteyttä meihin alla olevalla yhteydenottolomakkeella.</h2>
<h2 class='info_ala_otsikko'>Ihmisten nimet löytyvät lomakkeen alapuolelta.</h2>
<br>
<p class='info_teksti'>
Haluamme, että Jaetaan.net palvelee kaikkia käyttäjiään mahdollisimman hyvin. 
Siksi haluamme kuulla, mitä sinä ajattelet siitä: toiveesi, ideasi, mikä sinusta 
sivustolla toimii, mikä kaipaa kehittämistä, mikä on turhaa jne.</p>
<br>
<p class='info_teksti'>Kaikki palautteesi on erittäin tervetullutta!</p>
<br>

<h2 class='info_ala_otsikko'>Vinkkaa ilmaisesta asiasta!</h2>
<br>
<p class='info_teksti'>Tiedätkö jonkin julkisen ilmaisen asian pääkaupunkiseudulla?</p>
<p class='info_teksti'>Jossain pääsee harrastamaan jotain ilmaiseksi? 
    Tai saa lainata tavaroita? Jossain saa oppia? Mitä vaan?</p>
<p class='info_teksti'>Kerro se meille alla olevan yhteydenottolomakkeen kautta.
<p class='info_teksti'>Me lisäämme ilmoituksen sivustolle.</p> 
<br>
<p class='info_teksti'>Älä vinkkaa ilmaistapahtumasta – resurssimme eivät 
  riitä niiden lisäämiseen käsityönä.</p>
<p class='info_teksti'>Jos järjestät ilmaistapahtuman, tervetuloa 
  ilmoittamaan <a class='info_linkki' href='https://jaetaan.net/lisaa_ilmoitus'>Lisää ilmoitus -sivulla!</a></p>
<br>
<p class='info_teksti'></p>
<br>

<?php

$nimi_lahettaja = $_POST["nimi"];
$aihe = $_POST["aihe"];
$viesti = $_POST["viesti"];
$sahkoposti_lahettaja = $_POST["sahkoposti"];
$sahkoposti_vastaanottaja = 'info@jaetaan.net';

$to = $sahkoposti_vastaanottaja;
$subject = $aihe;
$txt = 'Tämä viesti tuli Jaetaan.netin yhteydenottolomakkelta ihmiseltä nimeltä ' . $nimi_lahettaja . '.


' . $viesti;
$headers = "From: " . $sahkoposti_lahettaja;

    if (isset($_POST["nimi"])) {
         $ilmoitus_lahtee = 1;  

       if (empty($nimi_lahettaja)) {
           $tyhja_kentta_virhe = '<p class="lomakkeenPalauteNegatiivinen">Täytä kaikki yhteydenottolomakkeen kentät.</p>';
           $nimi_lahettaja_virhe = '<span class="lomakkeenPalauteNegatiivinen">Täytä tämä kenttä.</span>';
           $ilmoitus_lahtee = 0;
        }

        if (empty($aihe)) {
           $tyhja_kentta_virhe = '<p class="lomakkeenPalauteNegatiivinen">Täytä kaikki yhteydenottolomakkeen kentät.</p>';
           $aihe_virhe = '<span class="lomakkeenPalauteNegatiivinen">Täytä tämä kenttä.</span>';
           $ilmoitus_lahtee = 0;
        }
   

       if (empty($viesti)) {
           $tyhja_kentta_virhe = '<p class="lomakkeenPalauteNegatiivinen">Täytä kaikki yhteydenottolomakkeen kentät.</p>';
           $viesti_virhe = '<span class="lomakkeenPalauteNegatiivinen">Täytä tämä kenttä.</span>';
           $ilmoitus_lahtee = 0;
        }

       if (empty($sahkoposti_lahettaja)) {
           $tyhja_kentta_virhe = '<p class="lomakkeenPalauteNegatiivinen">Täytä kaikki yhteydenottolomakkeen kentät.</p>';
           $sahkoposti_lahettaja_virhe = '<span class="lomakkeenPalauteNegatiivinen">Täytä tämä kenttä.</span>';
           $ilmoitus_lahtee = 0;
        }    

       if (!empty($sahkoposti_lahettaja) && !filter_var($sahkoposti_lahettaja, FILTER_VALIDATE_EMAIL)) {
           $sahkoposti_lahettaja_virhe_ylos = '<p class="lomakkeenPalauteNegatiivinen">Sähköposti on virheellisessä muodossa.</p>';
           $sahkoposti_lahettaja_virhe = '<span class="lomakkeenPalauteNegatiivinen">@-merkin ja pisteen (.) tulee olla mukana pääteosassa.</span>'; 
           $ilmoitus_lahtee = 0;
       }    


       if ($ilmoitus_lahtee == 1) { 
           mail($to, $subject, $txt, $headers); 
           $viesti_lahti = '<p class="lomakkeenPalautePositiivinen">Viestisi on lähetetty. Vastaamme sinulle mahdollisimman pian.</p>';
    }

  }

?>



<div id='viesti_ilmoittajalle_lomake_katoaa_II'>

<?php

  if($row['jee_jee'] == 'joo_joo') {
  echo 
    '<script>
    document.getElementById("viesti_ilmoittajalle_lomake_katoaa").style.display="none"
    </script>';
} else {
    echo 
    '<script>
    document.getElementById("viesti_ilmoittajalle_lomake_katoaa").style.display="block"
    </script>';
}

?>

<span id='listaus_ankkuri'></span>

<?php


echo $tyhja_kentta_virhe;
echo $sahkoposti_lahettaja_virhe_ylos;
echo $viesti_lahti;

?>


<h1 class='info_otsikko'>

Lähetä viesti Jaetaan.netin ylläpitäjille

</h1>


<form action='https://jaetaan.net/yhteys/?#listaus_ankkuri' method='post' enctype='multipart/form-data'>
 
  <label class='label_otsikko' for='nimi'>Nimesi: <?php echo $nimi_lahettaja_virhe; ?></label>
  <br> 
  <input class='yhteydenottolomake' type='text' name='nimi' maxlength='100' value='<?php echo $nimi_lahettaja;?>'>
  

  <label class='label_otsikko' for='aihe'>Aihe: <?php echo $aihe_virhe; ?></label>
  <br>
  <select class='yhteydenottolomake_valikko' name='aihe'>

    <option value='Palaute' <?php if (isset($aihe) && $aihe=='Palaute') echo 'selected';?>>Sivusto-palaute</option>
    <option value='Vinkki ilmaisesta asiasta' <?php if (isset($aihe) && $aihe=='Vinkki ilmaisesta asiasta') echo 'selected';?>>Vinkki ilmaisesta asiasta</option>
    <option value='Ylläpitäjäksi Jaetaan.nettiin' <?php if (isset($aihe) && $aihe=='Ylläpitäjäksi Jaetaan.nettiin') echo 'selected';?>>Ylläpitäjäksi Jaetaan.nettiin</option>  
    <option value='Virheellistä tietoa ilmoituksessa' <?php if (isset($aihe) && $aihe=='Virheellistä tietoa ilmoituksessa') echo 'selected';?>>Virheellistä tietoa ilmoituksessa</option>
    <option value='Asiaton ilmoitus' <?php if (isset($aihe) && $aihe=='Asiaton ilmoitus') echo 'selected';?>>Asiaton ilmoitus</option>
    <option value='Muu' <?php if (isset($aihe) && $aihe=='Muu') echo 'selected';?>>Muu</option>
  
  </select>


  
  <label class='label_otsikko' for='sisalto'>Viesti: <?php echo $viesti_virhe; ?></label> 
  <br>
  <textarea class='yhteydenottolomake' name='viesti' rows='7' cols='50'><?php echo $viesti;?></textarea>
  
  <label class='label_otsikko' for='sahkoposti'>Sähköpostiosoitteesi: <?php echo $sahkoposti_lahettaja_virhe; ?></label> 
  <br>
  <input class='yhteydenottolomake' type='text' name='sahkoposti' maxlength='100' value='<?php echo $sahkoposti_lahettaja;?>'>
   

  <br> 

  <input id='laheta_viesti_ilmoittajalle_nappi' type='submit' value='Lähetä viesti'>

</form>

</div>



<p id='yhteys_antti' class='info_teksti'>
<b>Antti Laukkanen</b>
<br>
Sisällön ylläpitäminen
<br>
Tekninen ylläpitäminen
<br>
<br>
Lukee ja vastaa todennäköisimmin viesteihisi, 
mutta myös muut ylläpitäjät saattavat tehdä näin.
</p>

<br>
<br>


    </div>

</div>
