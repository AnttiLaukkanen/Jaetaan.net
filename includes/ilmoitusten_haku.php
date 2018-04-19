
<div id='ilmoitusten_haku'> 

    <form action='https://jaetaan.net/?#listaus_ankkuri' method='get' enctype='multipart/form-data'>

        <select id='haku_kaupungit' class='haku_valikot poikkeus_1' name='kaupunki'>

            <option value='Espoo' <?php if (isset($_GET['kaupunki']) && $_GET['kaupunki']=='Espoo') echo 'selected';?>>Espoo <?php 
                echo '<p class info_teksti>(' . $maara_1 . ')</p>'; ?></option>
            <option value='Helsinki' <?php if (isset($_GET['kaupunki']) && $_GET['kaupunki']=='Helsinki') echo 'selected'; if (!isset($_GET['kaupunki'])) echo 'selected';?>>Helsinki <?php 
                echo '<p class info_teksti>(' . $maara_101 . ')</p>'; ?></option> 
            <option value='Kauniainen' <?php if (isset($_GET['kaupunki']) && $_GET['kaupunki']=='Kauniainen') echo 'selected';?>>Kauniainen <?php 
                echo '<p class info_teksti>(' . $maara_201 . ')</p>'; ?></option>
            <option value='Vantaa' <?php if (isset($_GET['kaupunki']) && $_GET['kaupunki']=='Vantaa') echo 'selected';?>>Vantaa <?php 
                echo '<p class info_teksti>(' . $maara_301 . ')</p>'; ?></option>
  
        </select>

        <select id='haku_yla_osastot' class='haku_valikot poikkeus_2' name='ylaosasto' onchange='hakuTapahtumat()'>
              
            <optgroup label='Annetaan'>
                        
                <option value='Annetaan apua' <?php if (isset($_GET['ylaosasto']) && $_GET['ylaosasto']=='Annetaan apua') echo 'selected';?>>Annetaan apua <?php 
                echo '<p class info_teksti>(' . $maara_2 . ')</p>'; ?></option>
                <option value='Annetaan lainaan' <?php if (isset($_GET['ylaosasto']) && $_GET['ylaosasto']=='Annetaan lainaan') echo 'selected';?>>Annetaan lainaan <?php 
                echo '<p class info_teksti>(' . $maara_3 . ')</p>'; ?></option>
                <option value='Annetaan ruokaa' <?php if (isset($_GET['ylaosasto']) && $_GET['ylaosasto']=='Annetaan ruokaa') echo 'selected';?>>Annetaan ruokaa <?php 
                echo '<p class info_teksti>(' . $maara_4 . ')</p>'; ?></option>
                <option value='Annetaan tavaroita' <?php if (isset($_GET['ylaosasto']) && $_GET['ylaosasto']=='Annetaan tavaroita') echo 'selected';?>>Annetaan tavaroita <?php 
                echo '<p class info_teksti>(' . $maara_5 . ')</p>'; ?></option>
                <option value='Annetaan tekemistä' <?php if (isset($_GET['ylaosasto']) && $_GET['ylaosasto']=='Annetaan tekemistä') echo 'selected';?>>Annetaan tekemistä <?php 
                echo '<p class info_teksti>(' . $maara_6 . ')</p>'; ?></option>
                <option value='Muut annetaan' <?php if (isset($_GET['ylaosasto']) && $_GET['ylaosasto']=='Muut annetaan') echo 'selected';?>>Muut annetaan <?php 
                echo '<p class info_teksti>(' . $maara_7 . ')</p>'; ?></option>

            </optgroup>
            
            <optgroup label='Pyydetään'>   
                   
                <option value='Pyydetään apua' <?php if (isset($_GET['ylaosasto']) && $_GET['ylaosasto']=='Pyydetään apua') echo 'selected';?>>Pyydetään apua <?php 
                echo '<p class info_teksti>(' . $maara_8 . ')</p>'; ?></option>
                <option value='Pyydetään lainaan' <?php if (isset($_GET['ylaosasto']) && $_GET['ylaosasto']=='Pyydetään lainaan') echo 'selected';?>>Pyydetään lainaan <?php 
                echo '<p class info_teksti>(' . $maara_9 . ')</p>'; ?></option>
                <option value='Pyydetään ruokaa' <?php if (isset($_GET['ylaosasto']) && $_GET['ylaosasto']=='Pyydetään ruokaa') echo 'selected';?>>Pyydetään ruokaa <?php 
                echo '<p class info_teksti>(' . $maara_10 . ')</p>'; ?></option>
                <option value='Pyydetään tavaroita' <?php if (isset($_GET['ylaosasto']) && $_GET['ylaosasto']=='Pyydetään tavaroita') echo 'selected';?>>Pyydetään tavaroita <?php 
                echo '<p class info_teksti>(' . $maara_11 . ')</p>'; ?></option>
                <option value='Pyydetään tekemistä' <?php if (isset($_GET['ylaosasto']) && $_GET['ylaosasto']=='Pyydetään tekemistä') echo 'selected';?>>Pyydetään tekemistä <?php 
                echo '<p class info_teksti>(' . $maara_12 . ')</p>'; ?></option>
                <option value='Muut pyydetään' <?php if (isset($_GET['ylaosasto']) && $_GET['ylaosasto']=='Muut pyydetään') echo 'selected';?>>Muut pyydetään <?php 
                echo '<p class info_teksti>(' . $maara_13 . ')</p>'; ?></option>
  
            </optgroup>  

            <optgroup label='Tapahtumat'>  
            
                <option value='Tapahtumat' <?php if (isset($_GET['ylaosasto']) && $_GET['ylaosasto']=='Tapahtumat') echo 'selected'; if (!isset($_GET['ylaosasto'])) echo 'selected';?>>Tapahtumat <?php 
                echo '<p class info_teksti>(' . $maara_14 . ')</p>'; ?></option>
            
            </optgroup>

        </select>

        <div class='kaikki_checkboxit'>
       
            <div id='haku_osastot_tapahtumat'>

              <div class='kolmen_rivi_checkboxit_1'> 

                <div class='haku_osastot_checkbox_I'>

                    <input type="hidden" name="o_0" value="0">
                    <input type="checkbox" name="o_0" value="Kaikki" onclick='hakuTapahtumatCheckboxKaikki()' <?php if (isset($_GET['o_0']) && $_GET['o_0']=='Kaikki') echo 'checked'; if (!isset($_GET['o_0'])) echo 'checked';?>> Kaikki
                    <?php echo ' (' . $maara_14 . ')'; ?><br>
                       
                    <input type="hidden" name="o_1" value="0">
                    <input type="checkbox" name="o_1" value="Elokuvat" onclick='hakuTapahtumatCheckboxKaikki_II()' <?php if (isset($_GET['o_1']) && $_GET['o_1']=='Elokuvat' && $_GET['o_0']!='Kaikki') echo 'checked';?>> Elokuvat
                    <?php echo ' (' . $maara_31 . ')'; ?><br>

                    <input type="hidden" name="o_2" value="0">
                    <input type="checkbox" name="o_2" value="Improvisointi" onclick='hakuTapahtumatCheckboxKaikki_II()' <?php if (isset($_GET['o_2']) && $_GET['o_2']=='Improvisointi' && $_GET['o_0']!='Kaikki') echo 'checked';?>> Improvisointi
                    <?php echo ' (' . $maara_32 . ')'; ?><br>
                
                    <input type="hidden" name="o_3" value="0">
                    <input type="checkbox" name="o_3" value="Keskustelu" onclick='hakuTapahtumatCheckboxKaikki_II()' <?php if (isset($_GET['o_3']) && $_GET['o_3']=='Keskustelu' && $_GET['o_0']!='Kaikki') echo 'checked';?>> Keskustelu
                    <?php echo ' (' . $maara_33 . ')'; ?><br>

                    <input type="hidden" name="o_4" value="0">
                    <input type="checkbox" name="o_4" value="Kirjallisuus" onclick='hakuTapahtumatCheckboxKaikki_II()' <?php if (isset($_GET['o_4']) && $_GET['o_4']=='Kirjallisuus' && $_GET['o_0']!='Kaikki') echo 'checked';?>> Kirjallisuus
                    <?php echo ' (' . $maara_34 . ')'; ?><br>

                    <input type="hidden" name="o_5" value="0">
                    <input type="checkbox" name="o_5" value="Kuvataide" onclick='hakuTapahtumatCheckboxKaikki_II()' <?php if (isset($_GET['o_5']) && $_GET['o_5']=='Kuvataide' && $_GET['o_0']!='Kaikki') echo 'checked';?>> Kuvataide
                    <?php echo ' (' . $maara_35 . ')'; ?><br>

                </div>

                <div class='haku_osastot_checkbox_II'>

                    <input type="hidden" name="o_6" value="0">
                    <input type="checkbox" name="o_6" value="Käsityöt" onclick='hakuTapahtumatCheckboxKaikki_II()' <?php if (isset($_GET['o_6']) && $_GET['o_6']=='Käsityöt' && $_GET['o_0']!='Kaikki') echo 'checked';?>> Käsityöt
                    <?php echo ' (' . $maara_36 . ')'; ?><br>
               
                    <input type="hidden" name="o_7" value="0">
                    <input type="checkbox" name="o_7" value="Leikkiminen" onclick='hakuTapahtumatCheckboxKaikki_II()' <?php if (isset($_GET['o_7']) && $_GET['o_7']=='Leikkiminen' && $_GET['o_0']!='Kaikki') echo 'checked';?>> Leikkiminen
                    <?php echo ' (' . $maara_37 . ')'; ?><br>

                    <input type="hidden" name="o_8" value="0">
                    <input type="checkbox" name="o_8" value="Liikunta" onclick='hakuTapahtumatCheckboxKaikki_II()' <?php if (isset($_GET['o_8']) && $_GET['o_8']=='Liikunta' && $_GET['o_0']!='Kaikki') echo 'checked';?>> Liikunta
                    <?php echo ' (' . $maara_38 . ')'; ?><br>
        
                    <input type="hidden" name="o_9" value="0">
                    <input type="checkbox" name="o_9" value="Luento" onclick='hakuTapahtumatCheckboxKaikki_II()' <?php if (isset($_GET['o_9']) && $_GET['o_9']=='Luento' && $_GET['o_0']!='Kaikki') echo 'checked';?>> Luento
                    <?php echo ' (' . $maara_39 . ')'; ?><br>
                            
                    <input type="hidden" name="o_10" value="0">
                    <input type="checkbox" name="o_10" value="Musiikki" onclick='hakuTapahtumatCheckboxKaikki_II()' <?php if (isset($_GET['o_10']) && $_GET['o_10']=='Musiikki' && $_GET['o_0']!='Kaikki') echo 'checked';?>> Musiikki
                    <?php echo ' (' . $maara_40 . ')'; ?><br>

                    <input type="hidden" name="o_11" value="0">
                    <input type="checkbox" name="o_11" value="Näyttelyt" onclick='hakuTapahtumatCheckboxKaikki_II()' <?php if (isset($_GET['o_11']) && $_GET['o_11']=='Näyttelyt' && $_GET['o_0']!='Kaikki') echo 'checked';?>> Näyttelyt
                    <?php echo ' (' . $maara_41 . ')'; ?><br>
  
                </div>

              </div>

              <div class='kolmen_rivi_checkboxit_2'>                 
    
                <div class='haku_osastot_checkbox_III'>
                            
                    <input type="hidden" name="o_12" value="0">
                    <input type="checkbox" name="o_12" value="Oppiminen" onclick='hakuTapahtumatCheckboxKaikki_II()' <?php if (isset($_GET['o_12']) && $_GET['o_12']=='Oppiminen' && $_GET['o_0']!='Kaikki') echo 'checked';?>> Oppiminen
                    <?php echo ' (' . $maara_42 . ')'; ?><br>
          
                    <input type="hidden" name="o_13" value="0">
                    <input type="checkbox" name="o_13" value="Pelaaminen" onclick='hakuTapahtumatCheckboxKaikki_II()' <?php if (isset($_GET['o_13']) && $_GET['o_13']=='Pelaaminen' && $_GET['o_0']!='Kaikki') echo 'checked';?>> Pelaaminen
                    <?php echo ' (' . $maara_43 . ')'; ?><br>

                    <input type="hidden" name="o_14" value="0">
                    <input type="checkbox" name="o_14" value="Politiikka" onclick='hakuTapahtumatCheckboxKaikki_II()' <?php if (isset($_GET['o_14']) && $_GET['o_14']=='Politiikka' && $_GET['o_0']!='Kaikki') echo 'checked';?>> Politiikka
                    <?php echo ' (' . $maara_44 . ')'; ?><br>

                    <input type="hidden" name="o_15" value="0">
                    <input type="checkbox" name="o_15" value="Runonlausunta" onclick='hakuTapahtumatCheckboxKaikki_II()' <?php if (isset($_GET['o_15']) && $_GET['o_15']=='Runonlausunta' && $_GET['o_0']!='Kaikki') echo 'checked';?>> Runonlausunta
                    <?php echo ' (' . $maara_45 . ')'; ?><br>
  
                    <input type="hidden" name="o_16" value="0">
                    <input type="checkbox" name="o_16" value="Sadunkerronta" onclick='hakuTapahtumatCheckboxKaikki_II()' <?php if (isset($_GET['o_16']) && $_GET['o_16']=='Sadunkerronta' && $_GET['o_0']!='Kaikki') echo 'checked';?>> Sadunkerronta
                    <?php echo ' (' . $maara_46 . ')'; ?><br>
     
                    <input type="hidden" name="o_17" value="0">
                    <input type="checkbox" name="o_17" value="Tanssi" onclick='hakuTapahtumatCheckboxKaikki_II()' <?php if (isset($_GET['o_17']) && $_GET['o_17']=='Tanssi' && $_GET['o_0']!='Kaikki') echo 'checked';?>> Tanssi
                    <?php echo ' (' . $maara_47 . ')'; ?><br>

                </div>

                <div class='haku_osastot_checkbox_IV'>

                    <input type="hidden" name="o_18" value="0">
                    <input type="checkbox" name="o_18" value="Tarinankerronta" onclick='hakuTapahtumatCheckboxKaikki_II()' <?php if (isset($_GET['o_18']) && $_GET['o_18']=='Tarinankerronta' && $_GET['o_0']!='Kaikki') echo 'checked';?>> Tarinankerronta 
                    <?php echo ' (' . $maara_48 . ')'; ?><br>

                    <input type="hidden" name="o_19" value="0">
                    <input type="checkbox" name="o_19" value="Teatteri" onclick='hakuTapahtumatCheckboxKaikki_II()' <?php if (isset($_GET['o_19']) && $_GET['o_19']=='Teatteri' && $_GET['o_0']!='Kaikki') echo 'checked';?>> Teatteri
                    <?php echo ' (' . $maara_49 . ')'; ?><br>
        
                    <input type="hidden" name="o_20" value="0">
                    <input type="checkbox" name="o_20" value="Työpaja" onclick='hakuTapahtumatCheckboxKaikki_II()' <?php if (isset($_GET['o_20']) && $_GET['o_20']=='Työpaja' && $_GET['o_0']!='Kaikki') echo 'checked';?>> Työpaja
                    <?php echo ' (' . $maara_50 . ')'; ?><br>
                
                    <input type="hidden" name="o_21" value="0">
                    <input type="checkbox" name="o_21" value="Urheilu" onclick='hakuTapahtumatCheckboxKaikki_II()' <?php if (isset($_GET['o_21']) && $_GET['o_21']=='Urheilu' && $_GET['o_0']!='Kaikki') echo 'checked';?>> Urheilu
                    <?php echo ' (' . $maara_51 . ')'; ?><br>

                    <input type="hidden" name="o_22" value="0">
                    <input type="checkbox" name="o_22" value="Uskonto" onclick='hakuTapahtumatCheckboxKaikki_II()' <?php if (isset($_GET['o_22']) && $_GET['o_22']=='Uskonto' && $_GET['o_0']!='Kaikki') echo 'checked';?>> Uskonto
                    <?php echo ' (' . $maara_52 . ')'; ?><br>
            
                    <input type="hidden" name="o_23" value="0">
                    <input type="checkbox" name="o_23" value="Yhdessä oleminen" onclick='hakuTapahtumatCheckboxKaikki_II()' <?php if (isset($_GET['o_23']) && $_GET['o_23']=='Yhdessä oleminen' && $_GET['o_0']!='Kaikki') echo 'checked';?>> Yhdessäolo
                    <?php echo ' (' . $maara_53 . ')'; ?><br>

                </div>

                </div>

                <div class='kolmen_rivi_checkboxit_3'>      

                <div class='haku_osastot_checkbox_IV_II'>

                    <input type="hidden" name="o_24" value="0">
                    <input type="checkbox" name="o_24" value="Muut " onclick='hakuTapahtumatCheckboxKaikki_II()' <?php if (isset($_GET['o_24']) && $_GET['o_24']=='Muut' && $_GET['o_0']!='Kaikki') echo 'checked';?>> Muut
                    <?php echo ' (' . $maara_54 . ')'; ?><br>

               </div>     


                <div class='haku_osastot_checkbox_V'>

                    <input type="hidden" name="o_25" value="0">
                    <input type="checkbox" name="o_25" value="Aikuiset" onclick='hakuTapahtumatCheckboxKaikki_II()' <?php if (isset($_GET['o_25']) && $_GET['o_25']=='Aikuiset' && $_GET['o_0']!='Kaikki') echo 'checked';?>> Aikuiset
                    <?php echo ' (' . $maara_55 . ')'; ?><br>
                
                    <input type="hidden" name="o_26" value="0">
                    <input type="checkbox" name="o_26" value="Lapset" onclick='hakuTapahtumatCheckboxKaikki_II()' <?php if (isset($_GET['o_26']) && $_GET['o_26']=='Lapset' && $_GET['o_0']!='Kaikki') echo 'checked';?>> Lapset
                    <?php echo ' (' . $maara_56 . ')'; ?><br>

                    <input type="hidden" name="o_27" value="0">
                    <input type="checkbox" name="o_27" value="Nuoret" onclick='hakuTapahtumatCheckboxKaikki_II()' <?php if (isset($_GET['o_27']) && $_GET['o_27']=='Nuoret' && $_GET['o_0']!='Kaikki') echo 'checked';?>> Nuoret
                    <?php echo ' (' . $maara_57 . ')'; ?><br>
              
                    <input type="hidden" name="o_28" value="0">
                    <input type="checkbox" name="o_28" value="Seniorit" onclick='hakuTapahtumatCheckboxKaikki_II()' <?php if (isset($_GET['o_28']) && $_GET['o_28']=='Seniorit' && $_GET['o_0']!='Kaikki') echo 'checked';?>> Seniorit
                    <?php echo ' (' . $maara_58 . ')'; ?><br>
          
                    <input type="hidden" name="o_29" value="0">
                    <input type="checkbox" name="o_29" value="Miehet" onclick='hakuTapahtumatCheckboxKaikki_II()' <?php if (isset($_GET['o_29']) && $_GET['o_29']=='Miehet' && $_GET['o_0']!='Kaikki') echo 'checked';?>> Miehet
                    <?php echo ' (' . $maara_59 . ')'; ?><br>
        
                    <input type="hidden" name="o_30" value="0">
                    <input type="checkbox" name="o_30" value="Naiset" onclick='hakuTapahtumatCheckboxKaikki_II()' <?php if (isset($_GET['o_30']) && $_GET['o_30']=='Naiset' && $_GET['o_0']!='Kaikki') echo 'checked';?>> Naiset
                    <?php echo ' (' . $maara_60 . ')'; ?><br>
                
                </div>

              </div>

            </div>

            <div id='haku_osastot_annetaan_apua'>

                <div class='haku_osastot_checkbox_VI'>

                    <input type="hidden" name="o_100" value="0">
                    <input type="checkbox" name="o_100" value="Kaikki" onclick='hakuTapahtumatCheckboxKaikki()' <?php if (isset($_GET['o_100']) && $_GET['o_100']=='Kaikki') { echo 'checked'; } ?>> Kaikki
                    <?php echo ' (' . $maara_2 . ')'; ?><br>

                </div>

            </div>

            <div id='haku_osastot_annetaan_lainaan'>

                <div class='haku_osastot_checkbox_VII'>

                    <input type="hidden" name="o_200" value="0">
                    <input type="checkbox" name="o_200" value="Kaikki" onclick='hakuTapahtumatCheckboxKaikki()' <?php if (isset($_GET['o_200']) && $_GET['o_200']=='Kaikki') { echo 'checked'; } ?>> Kaikki
                    <?php echo ' (' . $maara_3 . ')'; ?><br>

                </div>

            </div>

            <div id='haku_osastot_annetaan_ruokaa'>

                <div class='haku_osastot_checkbox_VIII'>

                    <input type="hidden" name="o_300" value="0">
                    <input type="checkbox" name="o_300" value="Kaikki" onclick='hakuTapahtumatCheckboxKaikki()' <?php if (isset($_GET['o_300']) && $_GET['o_300']=='Kaikki') { echo 'checked'; } ?>> Kaikki
                    <?php echo ' (' . $maara_4 . ')'; ?><br>

                </div>

            </div>

            <div id='haku_osastot_annetaan_tavaroita'>

                <div class='haku_osastot_checkbox_IX'>

                    <input type="hidden" name="o_400" value="0">
                    <input type="checkbox" name="o_400" value="Kaikki" onclick='hakuAnnetaanTavaroitaCheckboxKaikki()' <?php if (isset($_GET['o_400']) && $_GET['o_400']=='Kaikki') { echo 'checked'; } ?>> Kaikki
                    <?php echo ' (' . $maara_5 . ')'; ?><br>

                    <input type="hidden" name="o_401" value="0">
                    <input type="checkbox" name="o_401" value="Elektroniikka" onclick='hakuAnnetaanTavaroitaCheckboxKaikki_II()' <?php if (isset($_GET['o_401']) && $_GET['o_401']=='Elektroniikka') { echo 'checked'; } ?>> Elektroniikka
                    <?php echo ' (' . $maara_65 . ')'; ?><br>

                    <input type="hidden" name="o_402" value="0">
                    <input type="checkbox" name="o_402" value="Huonekalut" onclick='hakuAnnetaanTavaroitaCheckboxKaikki_II()' <?php if (isset($_GET['o_402']) && $_GET['o_402']=='Huonekalut') { echo 'checked'; } ?>> Huonekalut
                    <?php echo ' (' . $maara_66 . ')'; ?><br>

                    <input type="hidden" name="o_403" value="0">
                    <input type="checkbox" name="o_403" value="Kodinkoneet" onclick='hakuAnnetaanTavaroitaCheckboxKaikki_II()' <?php if (isset($_GET['o_403']) && $_GET['o_403']=='Kodinkoneet') { echo 'checked'; } ?>> Kodinkoneet
                    <?php echo ' (' . $maara_67 . ')'; ?><br>

                    <input type="hidden" name="o_404" value="0">
                    <input type="checkbox" name="o_404" value="Vaatteet" onclick='hakuAnnetaanTavaroitaCheckboxKaikki_II()' <?php if (isset($_GET['o_404']) && $_GET['o_404']=='Vaatteet') { echo 'checked'; } ?>> Vaatteet
                    <?php echo ' (' . $maara_68 . ')'; ?><br>

                    <input type="hidden" name="o_405" value="0">
                    <input type="checkbox" name="o_405" value="Muut" onclick='hakuAnnetaanTavaroitaCheckboxKaikki_II()' <?php if (isset($_GET['o_405']) && $_GET['o_405']=='Muut') { echo 'checked'; } ?>> Muut
                    <?php echo ' (' . $maara_69 . ')'; ?><br>


                </div>

            </div>

            <div id='haku_osastot_annetaan_tekemista'>

                <div class='haku_osastot_checkbox_IX_II'>

                    <input type="hidden" name="o_450" value="0">
                    <input type="checkbox" name="o_450" value="Kaikki" onclick='hakuAnnetaanTekemistaCheckboxKaikki()' <?php if (isset($_GET['o_450']) && $_GET['o_450']=='Kaikki') { echo 'checked'; } ?>> Kaikki
                    <?php echo ' (' . $maara_6 . ')'; ?><br>

                    <input type="hidden" name="o_451" value="0">
                    <input type="checkbox" name="o_451" value="Liikunta" onclick='hakuAnnetaanTekemistaCheckboxKaikki_II()' <?php if (isset($_GET['o_451']) && $_GET['o_451']=='Liikunta' && $_GET['o_450']!='Kaikki') echo 'checked';?>> Liikunta
                    <?php echo ' (' . $maara_75 . ')'; ?><br>

                    <input type="hidden" name="o_452" value="0">
                    <input type="checkbox" name="o_452" value="Musiikki" onclick='hakuAnnetaanTekemistaCheckboxKaikki_II()' <?php if (isset($_GET['o_452']) && $_GET['o_452']=='Musiikki' && $_GET['o_450']!='Kaikki') echo 'checked';?>> Musiikki
                    <?php echo ' (' . $maara_76 . ')'; ?><br>

                    <input type="hidden" name="o_453" value="0">
                    <input type="checkbox" name="o_453" value="Näyttelyt" onclick='hakuAnnetaanTekemistaCheckboxKaikki_II()' <?php if (isset($_GET['o_453']) && $_GET['o_453']=='Näyttelyt' && $_GET['o_450']!='Kaikki') echo 'checked';?>> Näyttelyt
                    <?php echo ' (' . $maara_77 . ')'; ?><br>

                    <input type="hidden" name="o_454" value="0">
                    <input type="checkbox" name="o_454" value="Paikat" onclick='hakuAnnetaanTekemistaCheckboxKaikki_II()' <?php if (isset($_GET['o_454']) && $_GET['o_454']=='Paikat' && $_GET['o_450']!='Kaikki') echo 'checked';?>> Paikat
                    <?php echo ' (' . $maara_78 . ')'; ?><br>

                    <input type="hidden" name="o_455" value="0">
                    <input type="checkbox" name="o_455" value="Tilat" onclick='hakuAnnetaanTekemistaCheckboxKaikki_II()' <?php if (isset($_GET['o_455']) && $_GET['o_455']=='Tilat' && $_GET['o_450']!='Kaikki') echo 'checked';?>> Tilat
                    <?php echo ' (' . $maara_79 . ')'; ?><br>

                </div>

                <div class='haku_osastot_checkbox_IX_III'>

                    <input type="hidden" name="o_456" value="0">
                    <input type="checkbox" name="o_456" value="Urheilu" onclick='hakuAnnetaanTekemistaCheckboxKaikki_II()' <?php if (isset($_GET['o_456']) && $_GET['o_456']=='Urheilu' && $_GET['o_450']!='Kaikki') echo 'checked';?>> Urheilu
                    <?php echo ' (' . $maara_80 . ')'; ?><br>

                    <input type="hidden" name="o_457" value="0">
                    <input type="checkbox" name="o_457" value="Muut" onclick='hakuAnnetaanTekemistaCheckboxKaikki_II()' <?php if (isset($_GET['o_457']) && $_GET['o_457']=='Muut') { echo 'checked'; } ?>> Muut
                    <?php echo ' (' . $maara_81 . ')'; ?><br>

                </div>

            </div>

            <div id='haku_osastot_muut_annetaan'>

                <div class='haku_osastot_checkbox_X'>

                    <input type="hidden" name="o_500" value="0">
                    <input type="checkbox" name="o_500" value="Kaikki" onclick='hakuTapahtumatCheckboxKaikki()' <?php if (isset($_GET['o_500']) && $_GET['o_500']=='Kaikki') { echo 'checked'; } ?>> Kaikki
                    <?php echo ' (' . $maara_7 . ')'; ?><br>

                </div>

            </div>

            <div id='haku_osastot_pyydetaan_apua'>

                <div class='haku_osastot_checkbox_XI'>

                    <input type="hidden" name="o_600" value="0">
                    <input type="checkbox" name="o_600" value="Kaikki" onclick='hakuTapahtumatCheckboxKaikki()' <?php if (isset($_GET['o_600']) && $_GET['o_600']=='Kaikki') { echo 'checked'; } ?>> Kaikki
                    <?php echo ' (' . $maara_8 . ')'; ?><br>

                </div>

            </div>

            <div id='haku_osastot_pyydetaan_lainaan'>

                <div class='haku_osastot_checkbox_XII'>

                    <input type="hidden" name="o_700" value="0">
                    <input type="checkbox" name="o_700" value="Kaikki" onclick='hakuTapahtumatCheckboxKaikki()' <?php if (isset($_GET['o_700']) && $_GET['o_700']=='Kaikki') { echo 'checked'; } ?>> Kaikki
                    <?php echo ' (' . $maara_9 . ')'; ?><br>

                </div>

            </div>

            <div id='haku_osastot_pyydetaan_ruokaa'>

                <div class='haku_osastot_checkbox_XIII'>

                    <input type="hidden" name="o_800" value="0">
                    <input type="checkbox" name="o_800" value="Kaikki" onclick='hakuTapahtumatCheckboxKaikki()' <?php if (isset($_GET['o_800']) && $_GET['o_800']=='Kaikki') { echo 'checked'; } ?>> Kaikki
                    <?php echo ' (' . $maara_10 . ')'; ?><br>

                </div>

            </div>

            <div id='haku_osastot_pyydetaan_tavaroita'>

                <div class='haku_osastot_checkbox_XIV'>

                    <input type="hidden" name="o_900" value="0">
                    <input type="checkbox" name="o_900" value="Kaikki" onclick='hakuPyydetaanTavaroitaCheckboxKaikki()' <?php if (isset($_GET['o_900']) && $_GET['o_900']=='Kaikki') { echo 'checked'; } ?>> Kaikki
                    <?php echo ' (' . $maara_11 . ')'; ?><br>

                    <input type="hidden" name="o_901" value="0">
                    <input type="checkbox" name="o_901" value="Elektroniikka" onclick='hakuPyydetaanTavaroitaCheckboxKaikki_II()' <?php if (isset($_GET['o_901']) && $_GET['o_901']=='Elektroniikka') { echo 'checked'; } ?>> Elektroniikka
                    <?php echo ' (' . $maara_85 . ')'; ?><br>

                    <input type="hidden" name="o_902" value="0">
                    <input type="checkbox" name="o_902" value="Huonekalut" onclick='hakuPyydetaanTavaroitaCheckboxKaikki_II()' <?php if (isset($_GET['o_902']) && $_GET['o_902']=='Huonekalut') { echo 'checked'; } ?>> Huonekalut
                    <?php echo ' (' . $maara_86 . ')'; ?><br>

                    <input type="hidden" name="o_903" value="0">
                    <input type="checkbox" name="o_903" value="Kodinkoneet" onclick='hakuPyydetaanTavaroitaCheckboxKaikki_II()' <?php if (isset($_GET['o_903']) && $_GET['o_903']=='Kodinkoneet') { echo 'checked'; } ?>> Kodinkoneet
                    <?php echo ' (' . $maara_87 . ')'; ?><br>

                    <input type="hidden" name="o_904" value="0">
                    <input type="checkbox" name="o_904" value="Vaatteet" onclick='hakuPyydetaanTavaroitaCheckboxKaikki_II()' <?php if (isset($_GET['o_904']) && $_GET['o_904']=='Vaatteet') { echo 'checked'; } ?>> Vaatteet
                    <?php echo ' (' . $maara_88 . ')'; ?><br>

                    <input type="hidden" name="o_905" value="0">
                    <input type="checkbox" name="o_905" value="Muut" onclick='hakuPyydetaanTavaroitaCheckboxKaikki_II()' <?php if (isset($_GET['o_905']) && $_GET['o_905']=='Muut') { echo 'checked'; } ?>> Muut
                    <?php echo ' (' . $maara_89 . ')'; ?><br>

                </div>

            </div>

            <div id='haku_osastot_pyydetaan_tekemista'>

                <div class='haku_osastot_checkbox_XIV_II'>

                    <input type="hidden" name="o_950" value="0">
                    <input type="checkbox" name="o_950" value="Kaikki" onclick='hakuPyydetaanTekemistaCheckboxKaikki()' <?php if (isset($_GET['o_950']) && $_GET['o_950']=='Kaikki') { echo 'checked'; } ?>> Kaikki
                    <?php echo ' (' . $maara_12 . ')'; ?><br>

                    <input type="hidden" name="o_951" value="0">
                    <input type="checkbox" name="o_951" value="Liikunta" onclick='hakuPyydetaanTekemistaCheckboxKaikki_II()' <?php if (isset($_GET['o_951']) && $_GET['o_951']=='Liikunta' && $_GET['o_950']!='Kaikki') echo 'checked';?>> Liikunta
                    <?php echo ' (' . $maara_95 . ')'; ?><br>

                    <input type="hidden" name="o_952" value="0">
                    <input type="checkbox" name="o_952" value="Musiikki" onclick='hakuPyydetaanTekemistaCheckboxKaikki_II()' <?php if (isset($_GET['o_952']) && $_GET['o_952']=='Musiikki' && $_GET['o_950']!='Kaikki') echo 'checked';?>> Musiikki
                    <?php echo ' (' . $maara_96 . ')'; ?><br>

                    <input type="hidden" name="o_953" value="0">
                    <input type="checkbox" name="o_953" value="Näyttelyt" onclick='hakuPyydetaanTekemistaCheckboxKaikki_II()' <?php if (isset($_GET['o_953']) && $_GET['o_953']=='Näyttelyt' && $_GET['o_950']!='Kaikki') echo 'checked';?>> Näyttelyt
                    <?php echo ' (' . $maara_97 . ')'; ?><br>

                    <input type="hidden" name="o_954" value="0">
                    <input type="checkbox" name="o_954" value="Paikat" onclick='hakuPyydetaanTekemistaCheckboxKaikki_II()' <?php if (isset($_GET['o_954']) && $_GET['o_954']=='Paikat' && $_GET['o_950']!='Kaikki') echo 'checked';?>> Paikat
                    <?php echo ' (' . $maara_98 . ')'; ?><br>


                    <input type="hidden" name="o_955" value="0">
                    <input type="checkbox" name="o_955" value="Tilat" onclick='hakuPyydetaanTekemistaCheckboxKaikki_II()' <?php if (isset($_GET['o_955']) && $_GET['o_955']=='Tilat' && $_GET['o_950']!='Kaikki') echo 'checked';?>> Tilat
                    <?php echo ' (' . $maara_99 . ')'; ?><br>

                </div>

                <div class='haku_osastot_checkbox_XIV_III'>

                    <input type="hidden" name="o_956" value="0">
                    <input type="checkbox" name="o_956" value="Urheilu" onclick='hakuPyydetaanTekemistaCheckboxKaikki_II()' <?php if (isset($_GET['o_956']) && $_GET['o_956']=='Urheilu' && $_GET['o_950']!='Kaikki') echo 'checked';?>> Urheilu
                    <?php echo ' (' . $maara_100 . ')'; ?><br>
                   
                    <input type="hidden" name="o_957" value="0">
                    <input type="checkbox" name="o_957" value="Muut" onclick='hakuPyydetaanTekemistaCheckboxKaikki_II()' <?php if (isset($_GET['o_957']) && $_GET['o_957']=='Muut') { echo 'checked'; } ?>> Muut
                    <?php echo ' (' . $maara_100_2 . ')'; ?><br>

                </div>

            </div>

            <div id='haku_osastot_muut_pyydetaan'>

                <div class='haku_osastot_checkbox_XV'>

                    <input type="hidden" name="o_1000" value="0">
                    <input type="checkbox" name="o_1000" value="Kaikki" onclick='hakuTapahtumatCheckboxKaikki()' <?php if (isset($_GET['o_1000']) && $_GET['o_1000']=='Kaikki') { echo 'checked'; } ?>> Kaikki
                    <?php echo ' (' . $maara_13 . ')'; ?><br>

                </div>

            </div>

        </div>


            <input id='haku_sana_haku' type='search' name='sanahaku' maxlength='255' placeholder='Sanahaku' value="<?php if (isset($_GET['sanahaku'])) echo $_GET['sanahaku'];?>">
            
            <input id='hae_ilmoituksia_nappi' type='submit' value='Hae'>



    </form>

</div> 
