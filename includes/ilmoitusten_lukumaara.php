<?php

include 'includes/luo_yhteyden_tietokantaan.php';


// Kun hakua ei ole tehty, näyttää Helsingin tiedot

if (!isset($_GET['kaupunki'])) {

// Espoo
$haku_1 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Espoo'
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id";

$tulos_1 = mysqli_query($conn, $haku_1);

$maara_1 = mysqli_num_rows($tulos_1);


// Helsinki
$haku_101 = "SELECT * 
             FROM ilmoitukset, osastot
             WHERE kaupunki = 'Helsinki'
             AND julkaistu='kylla' 
             AND ilmoitukset.id=osastot.id";

$tulos_101 = mysqli_query($conn, $haku_101);

$maara_101 = mysqli_num_rows($tulos_101);



// Kauniainen
$haku_201 = "SELECT * 
             FROM ilmoitukset, osastot
             WHERE kaupunki = 'Kauniainen'
             AND julkaistu='kylla' 
             AND ilmoitukset.id=osastot.id";

$tulos_201 = mysqli_query($conn, $haku_201);

$maara_201 = mysqli_num_rows($tulos_201);


// Vantaa
$haku_301 = "SELECT * 
             FROM ilmoitukset, osastot
             WHERE kaupunki = 'Vantaa'
             AND julkaistu='kylla' 
             AND ilmoitukset.id=osastot.id";

$tulos_301 = mysqli_query($conn, $haku_301);

$maara_301 = mysqli_num_rows($tulos_301);

// Annetaan apua 
$haku_2 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Helsinki' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Annetaan apua'";

$tulos_2 = mysqli_query($conn, $haku_2);

$maara_2 = mysqli_num_rows($tulos_2);


// Annetaan lainaan
$haku_3 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Helsinki' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Annetaan lainaan'";

$tulos_3 = mysqli_query($conn, $haku_3);

$maara_3 = mysqli_num_rows($tulos_3);


// Annetaan ruokaa
$haku_4 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Helsinki' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Annetaan ruokaa'";

$tulos_4 = mysqli_query($conn, $haku_4);

$maara_4 = mysqli_num_rows($tulos_4);


// Annetaan tavaroita
$haku_5 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Helsinki' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Annetaan tavaroita'";

$tulos_5 = mysqli_query($conn, $haku_5);

$maara_5 = mysqli_num_rows($tulos_5);


// Annetaan tekemista
$haku_6 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Helsinki' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Annetaan tekemistä'";

$tulos_6 = mysqli_query($conn, $haku_6);

$maara_6 = mysqli_num_rows($tulos_6);


// Muut annetaan
$haku_7 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Helsinki' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Muut annetaan'";

$tulos_7 = mysqli_query($conn, $haku_7);

$maara_7 = mysqli_num_rows($tulos_7);


// Pyydetään apua
$haku_8 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Helsinki' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Pyydetään apua'";

$tulos_8 = mysqli_query($conn, $haku_8);

$maara_8 = mysqli_num_rows($tulos_8);


// Pyydetään lainaan
$haku_9 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Helsinki' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Pyydetään lainaan'";

$tulos_9 = mysqli_query($conn, $haku_9);

$maara_9 = mysqli_num_rows($tulos_9);


// Pyydetään ruokaa
$haku_10 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Helsinki' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Pyydetään ruokaa'";

$tulos_10 = mysqli_query($conn, $haku_10);

$maara_10 = mysqli_num_rows($tulos_10);


// Pyydetään tavaroita
$haku_11 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Helsinki' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Pyydetään tavaroita'";
 
$tulos_11 = mysqli_query($conn, $haku_11);

$maara_11 = mysqli_num_rows($tulos_11);


// Pyydetään tekemista
$haku_12 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Helsinki' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Pyydetään tekemistä'";

$tulos_12 = mysqli_query($conn, $haku_12);

$maara_12 = mysqli_num_rows($tulos_12);


// Muut pyydetään
$haku_13 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Helsinki' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Muut pyydetään'";

$tulos_13 = mysqli_query($conn, $haku_13);

$maara_13 = mysqli_num_rows($tulos_13);

// Tapahtumat
$haku_14 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Helsinki' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'";

$tulos_14 = mysqli_query($conn, $haku_14);

$maara_14 = mysqli_num_rows($tulos_14);


// Tapahtumat Elokuvat
$haku_31 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Helsinki' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND elokuvat = 'Elokuvat'";

$tulos_31 = mysqli_query($conn, $haku_31);

$maara_31 = mysqli_num_rows($tulos_31);



// Tapahtumat Improvisointi
$haku_32 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Helsinki' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND improvisointi = 'Improvisointi'";

$tulos_32 = mysqli_query($conn, $haku_32);

$maara_32 = mysqli_num_rows($tulos_32);




// Tapahtumat Keskustelu
$haku_33 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Helsinki' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND keskustelu = 'keskustelu'";

$tulos_33 = mysqli_query($conn, $haku_33);

$maara_33 = mysqli_num_rows($tulos_33);




// Tapahtumat Kirjallisuus
$haku_34 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Helsinki' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND kirjallisuus = 'Kirjallisuus'";

$tulos_34 = mysqli_query($conn, $haku_34);

$maara_34 = mysqli_num_rows($tulos_34);




// Tapahtumat Kuvataide
$haku_35 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Helsinki' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND kuvataide = 'Kuvataide'";

$tulos_35 = mysqli_query($conn, $haku_35);

$maara_35 = mysqli_num_rows($tulos_35);




// Tapahtumat Käsityöt
$haku_36 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Helsinki' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND kasityot = 'Käsityöt'";

$tulos_36 = mysqli_query($conn, $haku_36);

$maara_36 = mysqli_num_rows($tulos_36);




// Tapahtumat Leikkiminen
$haku_37 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Helsinki' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND leikkiminen = 'Leikkiminen'";

$tulos_37 = mysqli_query($conn, $haku_37);

$maara_37 = mysqli_num_rows($tulos_37);





// Tapahtumat Liikunta
$haku_38 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Helsinki' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND liikunta = 'Liikunta'";

$tulos_38 = mysqli_query($conn, $haku_38);

$maara_38 = mysqli_num_rows($tulos_38);




// Tapahtumat Luento
$haku_39 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Helsinki' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND luento = 'Luento'";

$tulos_39 = mysqli_query($conn, $haku_39);

$maara_39 = mysqli_num_rows($tulos_39);




// Tapahtumat Musiikki
$haku_40 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Helsinki' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND musiikki = 'Musiikki'";

$tulos_40 = mysqli_query($conn, $haku_40);

$maara_40 = mysqli_num_rows($tulos_40);




// Tapahtumat Näyttelyt
$haku_41 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Helsinki' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND nayttelyt = 'Näyttelyt'";

$tulos_41 = mysqli_query($conn, $haku_41);

$maara_41 = mysqli_num_rows($tulos_41);



// Tapahtumat Oppiminen
$haku_42 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Helsinki' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND oppiminen = 'Oppiminen'";

$tulos_42 = mysqli_query($conn, $haku_42);

$maara_42 = mysqli_num_rows($tulos_42);



// Tapahtumat Pelaaminen
$haku_43 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Helsinki' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND pelaaminen = 'Pelaaminen'";

$tulos_43 = mysqli_query($conn, $haku_43);

$maara_43 = mysqli_num_rows($tulos_43);





// Tapahtumat Politiikka
$haku_44 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Helsinki' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND politiikka = 'Politiikka'";

$tulos_44 = mysqli_query($conn, $haku_44);

$maara_44 = mysqli_num_rows($tulos_44);





// Tapahtumat Runonlausunta
$haku_45 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Helsinki' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND runonlausunta = 'Runonlausunta'";

$tulos_45 = mysqli_query($conn, $haku_45);

$maara_45 = mysqli_num_rows($tulos_45);




// Tapahtumat Sadunkerronta
$haku_46 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Helsinki' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND sadunkerronta = 'Sadunkerronta'";

$tulos_46 = mysqli_query($conn, $haku_46);

$maara_46 = mysqli_num_rows($tulos_46);




// Tapahtumat Tanssi
$haku_47 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Helsinki' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND tanssi = 'Tanssi'";

$tulos_47 = mysqli_query($conn, $haku_47);

$maara_47 = mysqli_num_rows($tulos_47);





// Tapahtumat Tarinankerronta
$haku_48 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Helsinki' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND tarinankerronta = 'Tarinankerronta'";

$tulos_48 = mysqli_query($conn, $haku_48);

$maara_48 = mysqli_num_rows($tulos_48);



// Tapahtumat Teatteri
$haku_49 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Helsinki' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND teatteri = 'Teatteri'";

$tulos_49 = mysqli_query($conn, $haku_49);

$maara_49 = mysqli_num_rows($tulos_49);





// Tapahtumat Työpaja
$haku_50 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Helsinki' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND tyopaja = 'Työpaja'";

$tulos_50 = mysqli_query($conn, $haku_50);

$maara_50 = mysqli_num_rows($tulos_50);





// Tapahtumat Urheilu
$haku_51 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Helsinki' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND urheilu = 'Urheilu'";

$tulos_51 = mysqli_query($conn, $haku_51);

$maara_51 = mysqli_num_rows($tulos_51);




// Tapahtumat Uskonto
$haku_52 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Helsinki' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND uskonto = 'Uskonto'";

$tulos_52 = mysqli_query($conn, $haku_52);

$maara_52 = mysqli_num_rows($tulos_52);




// Tapahtumat Yhdessä oleminen
$haku_53 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Helsinki' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND yhdessa_oleminen = 'Yhdessä oleminen'";

$tulos_53 = mysqli_query($conn, $haku_53);

$maara_53 = mysqli_num_rows($tulos_53);





// Tapahtumat Muut tapahtumat
$haku_54 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Helsinki' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND muut_tapahtumat = 'Muut'";

$tulos_54 = mysqli_query($conn, $haku_54);

$maara_54 = mysqli_num_rows($tulos_54);





// Tapahtumat Aikuiset
$haku_55 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Helsinki' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND aikuiset = 'Aikuiset'";

$tulos_55 = mysqli_query($conn, $haku_55);

$maara_55 = mysqli_num_rows($tulos_55);



// Tapahtumat Lapset
$haku_56 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Helsinki' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND lapset = 'Lapset'";

$tulos_56 = mysqli_query($conn, $haku_56);

$maara_56 = mysqli_num_rows($tulos_56);





// Tapahtumat Nuoret
$haku_57 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Helsinki' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND nuoret = 'Nuoret'";

$tulos_57 = mysqli_query($conn, $haku_57);

$maara_57 = mysqli_num_rows($tulos_57);





// Tapahtumat Seniorit
$haku_58 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Helsinki' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND seniorit = 'Seniorit'";

$tulos_58 = mysqli_query($conn, $haku_58);

$maara_58 = mysqli_num_rows($tulos_58);




// Tapahtumat Miehet
$haku_59 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Helsinki' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND miehet = 'Miehet'";

$tulos_59 = mysqli_query($conn, $haku_59);

$maara_59 = mysqli_num_rows($tulos_59);




// Tapahtumat Naiset
$haku_60 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Helsinki' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND naiset = 'Naiset'";

$tulos_60 = mysqli_query($conn, $haku_60);

$maara_60 = mysqli_num_rows($tulos_60);



// Annetaan tavaroita Elektroniikka
$haku_65 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Helsinki' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Annetaan tavaroita'
            AND elektroniikka = 'Elektroniikka'";

$tulos_65 = mysqli_query($conn, $haku_65);

$maara_65 = mysqli_num_rows($tulos_65);




// Annetaan tavaroita Huonekalut
$haku_66 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Helsinki' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Annetaan tavaroita'
            AND huonekalut = 'Huonekalut'";

$tulos_66 = mysqli_query($conn, $haku_66);

$maara_66 = mysqli_num_rows($tulos_66);




// Annetaan tavaroita Kodinkoneet
$haku_67 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Helsinki' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Annetaan tavaroita'
            AND kodinkoneet = 'Kodinkoneet'";

$tulos_67 = mysqli_query($conn, $haku_67);

$maara_67 = mysqli_num_rows($tulos_67);




// Annetaan tavaroita Vaatteet
$haku_68 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Helsinki' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Annetaan tavaroita'
            AND vaatteet = 'Vaatteet'";

$tulos_68 = mysqli_query($conn, $haku_68);

$maara_68 = mysqli_num_rows($tulos_68);





// Annetaan tavaroita Muut annetaan tavaroita 
$haku_69 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Helsinki' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Annetaan tavaroita'
            AND muut_annetaan_tavaroita = 'Muut '";

$tulos_69 = mysqli_query($conn, $haku_69);

$maara_69 = mysqli_num_rows($tulos_69);





// Annetaan tekemistä Liikunta
$haku_75 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Helsinki' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Annetaan tekemistä'
            AND liikunta_2 = 'Liikunta'";

$tulos_75 = mysqli_query($conn, $haku_75);

$maara_75 = mysqli_num_rows($tulos_75);




// Annetaan tekemistä Musiikki
$haku_76 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Helsinki' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Annetaan tekemistä'
            AND musiikki_2 = 'Musiikki'";

$tulos_76 = mysqli_query($conn, $haku_76);

$maara_76 = mysqli_num_rows($tulos_76);




// Annetaan tekemistä Näyttelyt
$haku_77 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Helsinki' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Annetaan tekemistä'
            AND nayttelyt_2 = 'Näyttelyt'";

$tulos_77 = mysqli_query($conn, $haku_77);

$maara_77 = mysqli_num_rows($tulos_77);



// Annetaan tekemistä Paikat
$haku_78 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Helsinki' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Annetaan tekemistä'
            AND paikat = 'Paikat'";

$tulos_78 = mysqli_query($conn, $haku_78);

$maara_78 = mysqli_num_rows($tulos_78);



// Annetaan tekemistä Tilat
$haku_79 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Helsinki' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Annetaan tekemistä'
            AND tilat = 'Tilat'";

$tulos_79 = mysqli_query($conn, $haku_79);

$maara_79 = mysqli_num_rows($tulos_79);



// Annetaan tekemistä Urheilu
$haku_80 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Helsinki' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Annetaan tekemistä'
            AND urheilu_2 = 'Urheilu'";

$tulos_80 = mysqli_query($conn, $haku_80);

$maara_80 = mysqli_num_rows($tulos_80);



// Annetaan tekemistä Muut annetaan tekemistä 
$haku_81 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Helsinki' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Annetaan tekemistä'
            AND muut_annetaan_tekemista = 'Muut'";

$tulos_81 = mysqli_query($conn, $haku_81);

$maara_81 = mysqli_num_rows($tulos_81);



// Pyydetään tavaroita Elektroniikka
$haku_85 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Helsinki' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Pyydetään tavaroita'
            AND elektroniikka_2 = 'Elektroniikka'";

$tulos_85 = mysqli_query($conn, $haku_85);

$maara_85 = mysqli_num_rows($tulos_85);




// Pyydetään tavaroita Huonekalut
$haku_86 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Helsinki' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Pyydetään tavaroita'
            AND huonekalut_2 = 'Huonekalut'";

$tulos_86 = mysqli_query($conn, $haku_86);

$maara_86 = mysqli_num_rows($tulos_86);




// Pyydetään tavaroita Kodinkoneet
$haku_87 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Helsinki' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Pyydetään tavaroita'
            AND kodinkoneet_2 = 'Kodinkoneet'";

$tulos_87 = mysqli_query($conn, $haku_87);

$maara_87 = mysqli_num_rows($tulos_87);




// Pyydetään tavaroita Vaatteet
$haku_88 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Helsinki' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Pyydetään tavaroita'
            AND vaatteet_2 = 'Vaatteet'";

$tulos_88 = mysqli_query($conn, $haku_88);

$maara_88 = mysqli_num_rows($tulos_88);





// Pyydetään tavaroita Muut Pyydetään tavaroita 
$haku_89 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Helsinki' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Pyydetään tavaroita'
            AND muut_pyydetaan_tavaroita = 'Muut'";

$tulos_89 = mysqli_query($conn, $haku_89);

$maara_89 = mysqli_num_rows($tulos_89);



// Pyydetään tekemistä Liikunta
$haku_95 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Helsinki' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Pyydetään tekemistä'
            AND liikunta_3 = 'Liikunta'";

$tulos_95 = mysqli_query($conn, $haku_95);

$maara_95 = mysqli_num_rows($tulos_95);




// Pyydetään tekemistä Musiikki
$haku_96 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Helsinki' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Pyydetään tekemistä'
            AND musiikki_3 = 'Musiikki'";

$tulos_96 = mysqli_query($conn, $haku_96);

$maara_96 = mysqli_num_rows($tulos_96);



// Pyydetään tekemistä Näyttelyt
$haku_97 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Helsinki' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Pyydetään tekemistä'
            AND nayttelyt_3 = 'Näyttelyt'";

$tulos_97 = mysqli_query($conn, $haku_97);

$maara_97 = mysqli_num_rows($tulos_97);


// Pyydetään tekemistä Paikat
$haku_98 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Helsinki' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Pyydetään tekemistä'
            AND paikat_3 = 'Paikat'";

$tulos_98 = mysqli_query($conn, $haku_98);

$maara_98 = mysqli_num_rows($tulos_98);


// Pyydetään tekemistä Tilat
$haku_99 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Helsinki' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Pyydetään tekemistä'
            AND tilat_3 = 'Tilat'";

$tulos_99 = mysqli_query($conn, $haku_99);

$maara_99 = mysqli_num_rows($tulos_99);



// Pyydetään tekemistä Urheilu
$haku_100 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Helsinki' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Pyydetään tekemistä'
            AND urheilu_3 = 'Urheilu'";

$tulos_100 = mysqli_query($conn, $haku_100);

$maara_100 = mysqli_num_rows($tulos_100);



// Pyydetään tekemistä Muut Pyydetään tekemistä 
$haku_100_2 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Helsinki' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Pyydetään tekemistä'
            AND muut_pyydetaan_tekemista = 'Muut'";

$tulos_100_2 = mysqli_query($conn, $haku_100_2);

$maara_100_2 = mysqli_num_rows($tulos_100_2);


}





if (isset($_GET['kaupunki']) && $_GET['kaupunki']=='Espoo') {

// Espoo
$haku_1 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Espoo'
           AND julkaistu='kylla' AND ilmoitukset.id=osastot.id";

$tulos_1 = mysqli_query($conn, $haku_1);

$maara_1 = mysqli_num_rows($tulos_1);


// Helsinki
$haku_101 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Helsinki'
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id";

$tulos_101 = mysqli_query($conn, $haku_101);

$maara_101 = mysqli_num_rows($tulos_101);



// Kauniainen
$haku_201 = "SELECT * 
             FROM ilmoitukset, osastot
             WHERE kaupunki = 'Kauniainen'
             AND julkaistu='kylla'
             AND ilmoitukset.id=osastot.id";

$tulos_201 = mysqli_query($conn, $haku_201);

$maara_201 = mysqli_num_rows($tulos_201);


// Vantaa
$haku_301 = "SELECT * 
             FROM ilmoitukset, osastot
             WHERE kaupunki = 'Vantaa'
             AND julkaistu='kylla' 
             AND ilmoitukset.id=osastot.id";

$tulos_301 = mysqli_query($conn, $haku_301);

$maara_301 = mysqli_num_rows($tulos_301);

// Annetaan apua 
$haku_2 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Espoo' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Annetaan apua'";

$tulos_2 = mysqli_query($conn, $haku_2);

$maara_2 = mysqli_num_rows($tulos_2);


// Annetaan lainaan
$haku_3 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Espoo' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Annetaan lainaan'";

$tulos_3 = mysqli_query($conn, $haku_3);

$maara_3 = mysqli_num_rows($tulos_3);


// Annetaan ruokaa
$haku_4 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Espoo' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Annetaan ruokaa'";

$tulos_4 = mysqli_query($conn, $haku_4);

$maara_4 = mysqli_num_rows($tulos_4);


// Annetaan tavaroita
$haku_5 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Espoo' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Annetaan tavaroita'";

$tulos_5 = mysqli_query($conn, $haku_5);

$maara_5 = mysqli_num_rows($tulos_5);


// Annetaan tekemista
$haku_6 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Espoo' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Annetaan tekemistä'";

$tulos_6 = mysqli_query($conn, $haku_6);

$maara_6 = mysqli_num_rows($tulos_6);


// Muut annetaan
$haku_7 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Espoo' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Muut annetaan'";

$tulos_7 = mysqli_query($conn, $haku_7);

$maara_7 = mysqli_num_rows($tulos_7);


// Pyydetään apua
$haku_8 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Espoo' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Pyydetään apua'";

$tulos_8 = mysqli_query($conn, $haku_8);

$maara_8 = mysqli_num_rows($tulos_8);


// Pyydetään lainaan
$haku_9 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Espoo' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Pyydetään lainaan'";

$tulos_9 = mysqli_query($conn, $haku_9);

$maara_9 = mysqli_num_rows($tulos_9);


// Pyydetään ruokaa
$haku_10 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Espoo' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Pyydetään ruokaa'";

$tulos_10 = mysqli_query($conn, $haku_10);

$maara_10 = mysqli_num_rows($tulos_10);


// Pyydetään tavaroita
$haku_11 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Espoo' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Pyydetään tavaroita'";
 
$tulos_11 = mysqli_query($conn, $haku_11);

$maara_11 = mysqli_num_rows($tulos_11);


// Pyydetään tekemista
$haku_12 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Espoo' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Pyydetään tekemistä'";

$tulos_12 = mysqli_query($conn, $haku_12);

$maara_12 = mysqli_num_rows($tulos_12);


// Muut pyydetään
$haku_13 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Espoo' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Muut pyydetään'";

$tulos_13 = mysqli_query($conn, $haku_13);

$maara_13 = mysqli_num_rows($tulos_13);

// Tapahtumat
$haku_14 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Espoo' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'";

$tulos_14 = mysqli_query($conn, $haku_14);

$maara_14 = mysqli_num_rows($tulos_14);





// Tapahtumat Elokuvat
$haku_31 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Espoo' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND elokuvat = 'Elokuvat'";

$tulos_31 = mysqli_query($conn, $haku_31);

$maara_31 = mysqli_num_rows($tulos_31);



// Tapahtumat Improvisointi
$haku_32 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Espoo' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND improvisointi = 'Improvisointi'";

$tulos_32 = mysqli_query($conn, $haku_32);

$maara_32 = mysqli_num_rows($tulos_32);




// Tapahtumat Keskustelu
$haku_33 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Espoo' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND keskustelu = 'keskustelu'";

$tulos_33 = mysqli_query($conn, $haku_33);

$maara_33 = mysqli_num_rows($tulos_33);




// Tapahtumat Kirjallisuus
$haku_34 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Espoo' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND kirjallisuus = 'Kirjallisuus'";

$tulos_34 = mysqli_query($conn, $haku_34);

$maara_34 = mysqli_num_rows($tulos_34);




// Tapahtumat Kuvataide
$haku_35 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Espoo' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND kuvataide = 'Kuvataide'";

$tulos_35 = mysqli_query($conn, $haku_35);

$maara_35 = mysqli_num_rows($tulos_35);




// Tapahtumat Käsityöt
$haku_36 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Espoo' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND kasityot = 'Käsityöt'";

$tulos_36 = mysqli_query($conn, $haku_36);

$maara_36 = mysqli_num_rows($tulos_36);




// Tapahtumat Leikkiminen
$haku_37 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Espoo' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND leikkiminen = 'Leikkiminen'";

$tulos_37 = mysqli_query($conn, $haku_37);

$maara_37 = mysqli_num_rows($tulos_37);





// Tapahtumat Liikunta
$haku_38 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Espoo' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND liikunta = 'Liikunta'";

$tulos_38 = mysqli_query($conn, $haku_38);

$maara_38 = mysqli_num_rows($tulos_38);




// Tapahtumat Luento
$haku_39 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Espoo' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND luento = 'Luento'";

$tulos_39 = mysqli_query($conn, $haku_39);

$maara_39 = mysqli_num_rows($tulos_39);




// Tapahtumat Musiikki
$haku_40 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Espoo' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND musiikki = 'Musiikki'";

$tulos_40 = mysqli_query($conn, $haku_40);

$maara_40 = mysqli_num_rows($tulos_40);




// Tapahtumat Näyttelyt
$haku_41 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Espoo' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND nayttelyt = 'Näyttelyt'";

$tulos_41 = mysqli_query($conn, $haku_41);

$maara_41 = mysqli_num_rows($tulos_41);



// Tapahtumat Oppiminen
$haku_42 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Espoo' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND oppiminen = 'Oppiminen'";

$tulos_42 = mysqli_query($conn, $haku_42);

$maara_42 = mysqli_num_rows($tulos_42);



// Tapahtumat Pelaaminen
$haku_43 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Espoo' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND pelaaminen = 'Pelaaminen'";

$tulos_43 = mysqli_query($conn, $haku_43);

$maara_43 = mysqli_num_rows($tulos_43);





// Tapahtumat Politiikka
$haku_44 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Espoo' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND politiikka = 'Politiikka'";

$tulos_44 = mysqli_query($conn, $haku_44);

$maara_44 = mysqli_num_rows($tulos_44);





// Tapahtumat Runonlausunta
$haku_45 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Espoo' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND runonlausunta = 'Runonlausunta'";

$tulos_45 = mysqli_query($conn, $haku_45);

$maara_45 = mysqli_num_rows($tulos_45);




// Tapahtumat Sadunkerronta
$haku_46 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Espoo' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND sadunkerronta = 'Sadunkerronta'";

$tulos_46 = mysqli_query($conn, $haku_46);

$maara_46 = mysqli_num_rows($tulos_46);




// Tapahtumat Tanssi
$haku_47 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Espoo' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND tanssi = 'Tanssi'";

$tulos_47 = mysqli_query($conn, $haku_47);

$maara_47 = mysqli_num_rows($tulos_47);





// Tapahtumat Tarinankerronta
$haku_48 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Espoo' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND tarinankerronta = 'Tarinankerronta'";

$tulos_48 = mysqli_query($conn, $haku_48);

$maara_48 = mysqli_num_rows($tulos_48);



// Tapahtumat Teatteri
$haku_49 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Espoo' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND teatteri = 'Teatteri'";

$tulos_49 = mysqli_query($conn, $haku_49);

$maara_49 = mysqli_num_rows($tulos_49);





// Tapahtumat Työpaja
$haku_50 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Espoo' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND tyopaja = 'Työpaja'";

$tulos_50 = mysqli_query($conn, $haku_50);

$maara_50 = mysqli_num_rows($tulos_50);





// Tapahtumat Urheilu
$haku_51 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Espoo' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND urheilu = 'Urheilu'";

$tulos_51 = mysqli_query($conn, $haku_51);

$maara_51 = mysqli_num_rows($tulos_51);




// Tapahtumat Uskonto
$haku_52 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Espoo' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND uskonto = 'Uskonto'";

$tulos_52 = mysqli_query($conn, $haku_52);

$maara_52 = mysqli_num_rows($tulos_52);




// Tapahtumat Yhdessä oleminen
$haku_53 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Espoo' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND yhdessa_oleminen = 'Yhdessä oleminen'";

$tulos_53 = mysqli_query($conn, $haku_53);

$maara_53 = mysqli_num_rows($tulos_53);





// Tapahtumat Muut taphtumat
$haku_54 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Espoo' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND muut_tapahtumat = 'Muut'";

$tulos_54 = mysqli_query($conn, $haku_54);

$maara_54 = mysqli_num_rows($tulos_54);





// Tapahtumat Aikuiset
$haku_55 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Espoo' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND aikuiset = 'Aikuiset'";

$tulos_55 = mysqli_query($conn, $haku_55);

$maara_55 = mysqli_num_rows($tulos_55);



// Tapahtumat Lapset
$haku_56 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Espoo' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND lapset = 'Lapset'";

$tulos_56 = mysqli_query($conn, $haku_56);

$maara_56 = mysqli_num_rows($tulos_56);





// Tapahtumat Nuoret
$haku_57 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Espoo' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND nuoret = 'Nuoret'";

$tulos_57 = mysqli_query($conn, $haku_57);

$maara_57 = mysqli_num_rows($tulos_57);





// Tapahtumat Seniorit
$haku_58 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Espoo' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND seniorit = 'Seniorit'";

$tulos_58 = mysqli_query($conn, $haku_58);

$maara_58 = mysqli_num_rows($tulos_58);




// Tapahtumat Miehet
$haku_59 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Espoo' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND miehet = 'Miehet'";

$tulos_59 = mysqli_query($conn, $haku_59);

$maara_59 = mysqli_num_rows($tulos_59);




// Tapahtumat Naiset
$haku_60 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Espoo' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND naiset = 'Naiset'";

$tulos_60 = mysqli_query($conn, $haku_60);

$maara_60 = mysqli_num_rows($tulos_60);



// Annetaan tavaroita Elektroniikka
$haku_65 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Espoo' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Annetaan tavaroita'
            AND elektroniikka = 'Elektroniikka'";

$tulos_65 = mysqli_query($conn, $haku_65);

$maara_65 = mysqli_num_rows($tulos_65);




// Annetaan tavaroita Huonekalut
$haku_66 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Espoo' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Annetaan tavaroita'
            AND huonekalut = 'Huonekalut'";

$tulos_66 = mysqli_query($conn, $haku_66);

$maara_66 = mysqli_num_rows($tulos_66);




// Annetaan tavaroita Kodinkoneet
$haku_67 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Espoo' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Annetaan tavaroita'
            AND kodinkoneet = 'Kodinkoneet'";

$tulos_67 = mysqli_query($conn, $haku_67);

$maara_67 = mysqli_num_rows($tulos_67);




// Annetaan tavaroita Vaatteet
$haku_68 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Espoo' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Annetaan tavaroita'
            AND vaatteet = 'Vaatteet'";

$tulos_68 = mysqli_query($conn, $haku_68);

$maara_68 = mysqli_num_rows($tulos_68);





// Annetaan tavaroita Muut annetaan tavaroita 
$haku_69 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Espoo' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Annetaan tavaroita'
            AND muut_annetaan_tavaroita = 'Muut '";

$tulos_69 = mysqli_query($conn, $haku_69);

$maara_69 = mysqli_num_rows($tulos_69);





// Annetaan tekemistä Liikunta
$haku_75 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Espoo' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Annetaan tekemistä'
            AND liikunta_2 = 'Liikunta'";

$tulos_75 = mysqli_query($conn, $haku_75);

$maara_75 = mysqli_num_rows($tulos_75);




// Annetaan tekemistä Musiikki
$haku_76 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Espoo' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Annetaan tekemistä'
            AND musiikki_2 = 'Musiikki'";

$tulos_76 = mysqli_query($conn, $haku_76);

$maara_76 = mysqli_num_rows($tulos_76);




// Annetaan tekemistä Näyttelyt
$haku_77 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Espoo' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Annetaan tekemistä'
            AND nayttelyt_2 = 'Näyttelyt'";

$tulos_77 = mysqli_query($conn, $haku_77);

$maara_77 = mysqli_num_rows($tulos_77);



// Annetaan tekemistä Paikat
$haku_78 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Espoo' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Annetaan tekemistä'
            AND paikat = 'Paikat'";

$tulos_78 = mysqli_query($conn, $haku_78);

$maara_78 = mysqli_num_rows($tulos_78);



// Annetaan tekemistä Tilat
$haku_79 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Espoo' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Annetaan tekemistä'
            AND tilat = 'Tilat'";

$tulos_79 = mysqli_query($conn, $haku_79);

$maara_79 = mysqli_num_rows($tulos_79);



// Annetaan tekemistä Urheilu
$haku_80 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Espoo' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Annetaan tekemistä'
            AND urheilu_2 = 'Urheilu'";

$tulos_80 = mysqli_query($conn, $haku_80);

$maara_80 = mysqli_num_rows($tulos_80);





// Annetaan tekemistä Muut annetaan tekemistä 
$haku_81 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Espoo' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Annetaan tekemistä'
            AND muut_annetaan_tekemista = 'Muut'";

$tulos_81 = mysqli_query($conn, $haku_81);

$maara_81 = mysqli_num_rows($tulos_81);



// Pyydetään tavaroita Elektroniikka
$haku_85 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Espoo' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Pyydetään tavaroita'
            AND elektroniikka_2 = 'Elektroniikka'";

$tulos_85 = mysqli_query($conn, $haku_85);

$maara_85 = mysqli_num_rows($tulos_85);




// Pyydetään tavaroita Huonekalut
$haku_86 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Espoo' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Pyydetään tavaroita'
            AND huonekalut_2 = 'Huonekalut'";

$tulos_86 = mysqli_query($conn, $haku_86);

$maara_86 = mysqli_num_rows($tulos_86);




// Pyydetään tavaroita Kodinkoneet
$haku_87 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Espoo' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Pyydetään tavaroita'
            AND kodinkoneet_2 = 'Kodinkoneet'";

$tulos_87 = mysqli_query($conn, $haku_87);

$maara_87 = mysqli_num_rows($tulos_87);




// Pyydetään tavaroita Vaatteet
$haku_88 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Espoo' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Pyydetään tavaroita'
            AND vaatteet_2 = 'Vaatteet'";

$tulos_88 = mysqli_query($conn, $haku_88);

$maara_88 = mysqli_num_rows($tulos_88);





// Pyydetään tavaroita Muut Pyydetään tavaroita 
$haku_89 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Espoo' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Pyydetään tavaroita'
            AND muut_pyydetaan_tavaroita = 'Muut'";

$tulos_89 = mysqli_query($conn, $haku_89);

$maara_89 = mysqli_num_rows($tulos_89);



// Pyydetään tekemistä Liikunta
$haku_95 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Espoo' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Pyydetään tekemistä'
            AND liikunta_3 = 'Liikunta'";

$tulos_95 = mysqli_query($conn, $haku_95);

$maara_95 = mysqli_num_rows($tulos_95);




// Pyydetään tekemistä Musiikki
$haku_96 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Espoo' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Pyydetään tekemistä'
            AND musiikki_3 = 'Musiikki'";

$tulos_96 = mysqli_query($conn, $haku_96);

$maara_96 = mysqli_num_rows($tulos_96);



// Pyydetään tekemistä Näyttelyt
$haku_97 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Espoo' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Pyydetään tekemistä'
            AND nayttelyt_3 = 'Näyttelyt'";

$tulos_97 = mysqli_query($conn, $haku_97);

$maara_97 = mysqli_num_rows($tulos_97);


// Pyydetään tekemistä Paikat
$haku_98 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Espoo' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Pyydetään tekemistä'
            AND paikat_3 = 'Paikat'";

$tulos_98 = mysqli_query($conn, $haku_98);

$maara_98 = mysqli_num_rows($tulos_98);


// Pyydetään tekemistä Tilat
$haku_99 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Espoo' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Pyydetään tekemistä'
            AND tilat_3 = 'Tilat'";

$tulos_99 = mysqli_query($conn, $haku_99);

$maara_99 = mysqli_num_rows($tulos_99);



// Pyydetään tekemistä Urheilu
$haku_100 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Espoo' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Pyydetään tekemistä'
            AND urheilu_3 = 'Urheilu'";

$tulos_100 = mysqli_query($conn, $haku_100);

$maara_100 = mysqli_num_rows($tulos_100);



// Pyydetään tekemistä Muut Pyydetään tekemistä 
$haku_100_2 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Espoo' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Pyydetään tekemistä'
            AND muut_pyydetaan_tekemista = 'Muut'";

$tulos_100_2 = mysqli_query($conn, $haku_100_2);

$maara_100_2 = mysqli_num_rows($tulos_100_2);



}




if (isset($_GET['kaupunki']) && $_GET['kaupunki']=='Helsinki') {

// Espoo
$haku_1 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Espoo'
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id";

$tulos_1 = mysqli_query($conn, $haku_1);

$maara_1 = mysqli_num_rows($tulos_1);


// Helsinki
$haku_101 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Helsinki'
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id";

$tulos_101 = mysqli_query($conn, $haku_101);

$maara_101 = mysqli_num_rows($tulos_101);



// Kauniainen
$haku_201 = "SELECT * 
             FROM ilmoitukset, osastot
             WHERE kaupunki = 'Kauniainen'
             AND julkaistu='kylla' 
             AND ilmoitukset.id=osastot.id";

$tulos_201 = mysqli_query($conn, $haku_201);

$maara_201 = mysqli_num_rows($tulos_201);


// Vantaa
$haku_301 = "SELECT * 
             FROM ilmoitukset, osastot
             WHERE kaupunki = 'Vantaa'
             AND julkaistu='kylla' 
             AND ilmoitukset.id=osastot.id";

$tulos_301 = mysqli_query($conn, $haku_301);

$maara_301 = mysqli_num_rows($tulos_301);


// Annetaan apua 
$haku_2 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Helsinki' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Annetaan apua'";

$tulos_2 = mysqli_query($conn, $haku_2);

$maara_2 = mysqli_num_rows($tulos_2);


// Annetaan lainaan
$haku_3 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Helsinki' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Annetaan lainaan'";

$tulos_3 = mysqli_query($conn, $haku_3);

$maara_3 = mysqli_num_rows($tulos_3);


// Annetaan ruokaa
$haku_4 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Helsinki' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Annetaan ruokaa'";

$tulos_4 = mysqli_query($conn, $haku_4);

$maara_4 = mysqli_num_rows($tulos_4);


// Annetaan tavaroita
$haku_5 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Helsinki' 
           AND julkaistu='kylla' AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Annetaan tavaroita'";

$tulos_5 = mysqli_query($conn, $haku_5);

$maara_5 = mysqli_num_rows($tulos_5);


// Annetaan tekemista
$haku_6 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Helsinki' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Annetaan tekemistä'";

$tulos_6 = mysqli_query($conn, $haku_6);

$maara_6 = mysqli_num_rows($tulos_6);


// Muut annetaan
$haku_7 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Helsinki' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Muut annetaan'";

$tulos_7 = mysqli_query($conn, $haku_7);

$maara_7 = mysqli_num_rows($tulos_7);


// Pyydetään apua
$haku_8 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Helsinki' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Pyydetään apua'";

$tulos_8 = mysqli_query($conn, $haku_8);

$maara_8 = mysqli_num_rows($tulos_8);


// Pyydetään lainaan
$haku_9 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Helsinki' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Pyydetään lainaan'";

$tulos_9 = mysqli_query($conn, $haku_9);

$maara_9 = mysqli_num_rows($tulos_9);


// Pyydetään ruokaa
$haku_10 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Helsinki' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Pyydetään ruokaa'";

$tulos_10 = mysqli_query($conn, $haku_10);

$maara_10 = mysqli_num_rows($tulos_10);


// Pyydetään tavaroita
$haku_11 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Helsinki' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Pyydetään tavaroita'";
 
$tulos_11 = mysqli_query($conn, $haku_11);

$maara_11 = mysqli_num_rows($tulos_11);


// Pyydetään tekemista
$haku_12 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Helsinki' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Pyydetään tekemistä'";

$tulos_12 = mysqli_query($conn, $haku_12);

$maara_12 = mysqli_num_rows($tulos_12);


// Muut pyydetään
$haku_13 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Helsinki' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Muut pyydetään'";

$tulos_13 = mysqli_query($conn, $haku_13);

$maara_13 = mysqli_num_rows($tulos_13);

// Tapahtumat
$haku_14 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Helsinki' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'";

$tulos_14 = mysqli_query($conn, $haku_14);

$maara_14 = mysqli_num_rows($tulos_14);




// Tapahtumat Elokuvat
$haku_31 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Helsinki' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND elokuvat = 'Elokuvat'";

$tulos_31 = mysqli_query($conn, $haku_31);

$maara_31 = mysqli_num_rows($tulos_31);



// Tapahtumat Improvisointi
$haku_32 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Helsinki' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND improvisointi = 'Improvisointi'";

$tulos_32 = mysqli_query($conn, $haku_32);

$maara_32 = mysqli_num_rows($tulos_32);




// Tapahtumat Keskustelu
$haku_33 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Helsinki' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND keskustelu = 'keskustelu'";

$tulos_33 = mysqli_query($conn, $haku_33);

$maara_33 = mysqli_num_rows($tulos_33);




// Tapahtumat Kirjallisuus
$haku_34 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Helsinki' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND kirjallisuus = 'Kirjallisuus'";

$tulos_34 = mysqli_query($conn, $haku_34);

$maara_34 = mysqli_num_rows($tulos_34);




// Tapahtumat Kuvataide
$haku_35 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Helsinki' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND kuvataide = 'Kuvataide'";

$tulos_35 = mysqli_query($conn, $haku_35);

$maara_35 = mysqli_num_rows($tulos_35);




// Tapahtumat Käsityöt
$haku_36 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Helsinki' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND kasityot = 'Käsityöt'";

$tulos_36 = mysqli_query($conn, $haku_36);

$maara_36 = mysqli_num_rows($tulos_36);




// Tapahtumat Leikkiminen
$haku_37 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Helsinki' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND leikkiminen = 'Leikkiminen'";

$tulos_37 = mysqli_query($conn, $haku_37);

$maara_37 = mysqli_num_rows($tulos_37);





// Tapahtumat Liikunta
$haku_38 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Helsinki' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND liikunta = 'Liikunta'";

$tulos_38 = mysqli_query($conn, $haku_38);

$maara_38 = mysqli_num_rows($tulos_38);




// Tapahtumat Luento
$haku_39 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Helsinki' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND luento = 'Luento'";

$tulos_39 = mysqli_query($conn, $haku_39);

$maara_39 = mysqli_num_rows($tulos_39);




// Tapahtumat Musiikki
$haku_40 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Helsinki' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND musiikki = 'Musiikki'";

$tulos_40 = mysqli_query($conn, $haku_40);

$maara_40 = mysqli_num_rows($tulos_40);




// Tapahtumat Näyttelyt
$haku_41 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Helsinki' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND nayttelyt = 'Näyttelyt'";

$tulos_41 = mysqli_query($conn, $haku_41);

$maara_41 = mysqli_num_rows($tulos_41);



// Tapahtumat Oppiminen
$haku_42 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Helsinki' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND oppiminen = 'Oppiminen'";

$tulos_42 = mysqli_query($conn, $haku_42);

$maara_42 = mysqli_num_rows($tulos_42);



// Tapahtumat Pelaaminen
$haku_43 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Helsinki' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND pelaaminen = 'Pelaaminen'";

$tulos_43 = mysqli_query($conn, $haku_43);

$maara_43 = mysqli_num_rows($tulos_43);





// Tapahtumat Politiikka
$haku_44 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Helsinki' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND politiikka = 'Politiikka'";

$tulos_44 = mysqli_query($conn, $haku_44);

$maara_44 = mysqli_num_rows($tulos_44);





// Tapahtumat Runonlausunta
$haku_45 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Helsinki' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND runonlausunta = 'Runonlausunta'";

$tulos_45 = mysqli_query($conn, $haku_45);

$maara_45 = mysqli_num_rows($tulos_45);




// Tapahtumat Sadunkerronta
$haku_46 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Helsinki' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND sadunkerronta = 'Sadunkerronta'";

$tulos_46 = mysqli_query($conn, $haku_46);

$maara_46 = mysqli_num_rows($tulos_46);




// Tapahtumat Tanssi
$haku_47 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Helsinki' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND tanssi = 'Tanssi'";

$tulos_47 = mysqli_query($conn, $haku_47);

$maara_47 = mysqli_num_rows($tulos_47);





// Tapahtumat Tarinankerronta
$haku_48 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Helsinki' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND tarinankerronta = 'Tarinankerronta'";

$tulos_48 = mysqli_query($conn, $haku_48);

$maara_48 = mysqli_num_rows($tulos_48);



// Tapahtumat Teatteri
$haku_49 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Helsinki' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND teatteri = 'Teatteri'";

$tulos_49 = mysqli_query($conn, $haku_49);

$maara_49 = mysqli_num_rows($tulos_49);





// Tapahtumat Työpaja
$haku_50 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Helsinki' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND tyopaja = 'Työpaja'";

$tulos_50 = mysqli_query($conn, $haku_50);

$maara_50 = mysqli_num_rows($tulos_50);





// Tapahtumat Urheilu
$haku_51 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Helsinki' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND urheilu = 'Urheilu'";

$tulos_51 = mysqli_query($conn, $haku_51);

$maara_51 = mysqli_num_rows($tulos_51);




// Tapahtumat Uskonto
$haku_52 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Helsinki' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND uskonto = 'Uskonto'";

$tulos_52 = mysqli_query($conn, $haku_52);

$maara_52 = mysqli_num_rows($tulos_52);




// Tapahtumat Yhdessä oleminen
$haku_53 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Helsinki' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND yhdessa_oleminen = 'Yhdessä oleminen'";

$tulos_53 = mysqli_query($conn, $haku_53);

$maara_53 = mysqli_num_rows($tulos_53);





// Tapahtumat Muut taphtumat
$haku_54 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Helsinki' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND muut_tapahtumat = 'Muut'";

$tulos_54 = mysqli_query($conn, $haku_54);

$maara_54 = mysqli_num_rows($tulos_54);





// Tapahtumat Aikuiset
$haku_55 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Helsinki' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND aikuiset = 'Aikuiset'";

$tulos_55 = mysqli_query($conn, $haku_55);

$maara_55 = mysqli_num_rows($tulos_55);



// Tapahtumat Lapset
$haku_56 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Helsinki' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND lapset = 'Lapset'";

$tulos_56 = mysqli_query($conn, $haku_56);

$maara_56 = mysqli_num_rows($tulos_56);





// Tapahtumat Nuoret
$haku_57 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Helsinki' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND nuoret = 'Nuoret'";

$tulos_57 = mysqli_query($conn, $haku_57);

$maara_57 = mysqli_num_rows($tulos_57);





// Tapahtumat Seniorit
$haku_58 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Helsinki' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND seniorit = 'Seniorit'";

$tulos_58 = mysqli_query($conn, $haku_58);

$maara_58 = mysqli_num_rows($tulos_58);




// Tapahtumat Miehet
$haku_59 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Helsinki' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND miehet = 'Miehet'";

$tulos_59 = mysqli_query($conn, $haku_59);

$maara_59 = mysqli_num_rows($tulos_59);




// Tapahtumat Naiset
$haku_60 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Helsinki' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND naiset = 'Naiset'";

$tulos_60 = mysqli_query($conn, $haku_60);

$maara_60 = mysqli_num_rows($tulos_60);



// Annetaan tavaroita Elektroniikka
$haku_65 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Helsinki' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Annetaan tavaroita'
            AND elektroniikka = 'Elektroniikka'";

$tulos_65 = mysqli_query($conn, $haku_65);

$maara_65 = mysqli_num_rows($tulos_65);




// Annetaan tavaroita Huonekalut
$haku_66 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Helsinki' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Annetaan tavaroita'
            AND huonekalut = 'Huonekalut'";

$tulos_66 = mysqli_query($conn, $haku_66);

$maara_66 = mysqli_num_rows($tulos_66);




// Annetaan tavaroita Kodinkoneet
$haku_67 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Helsinki' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Annetaan tavaroita'
            AND kodinkoneet = 'Kodinkoneet'";

$tulos_67 = mysqli_query($conn, $haku_67);

$maara_67 = mysqli_num_rows($tulos_67);




// Annetaan tavaroita Vaatteet
$haku_68 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Helsinki' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Annetaan tavaroita'
            AND vaatteet = 'Vaatteet'";

$tulos_68 = mysqli_query($conn, $haku_68);

$maara_68 = mysqli_num_rows($tulos_68);





// Annetaan tavaroita Muut annetaan tavaroita 
$haku_69 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Helsinki' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Annetaan tavaroita'
            AND muut_annetaan_tavaroita = 'Muut '";

$tulos_69 = mysqli_query($conn, $haku_69);

$maara_69 = mysqli_num_rows($tulos_69);





// Annetaan tekemistä Liikunta
$haku_75 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Helsinki' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Annetaan tekemistä'
            AND liikunta_2 = 'Liikunta'";

$tulos_75 = mysqli_query($conn, $haku_75);

$maara_75 = mysqli_num_rows($tulos_75);




// Annetaan tekemistä Musiikki
$haku_76 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Helsinki' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Annetaan tekemistä'
            AND musiikki_2 = 'Musiikki'";

$tulos_76 = mysqli_query($conn, $haku_76);

$maara_76 = mysqli_num_rows($tulos_76);




// Annetaan tekemistä Näyttelyt
$haku_77 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Helsinki' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Annetaan tekemistä'
            AND nayttelyt_2 = 'Näyttelyt'";

$tulos_77 = mysqli_query($conn, $haku_77);

$maara_77 = mysqli_num_rows($tulos_77);


// Annetaan tekemistä Paikat
$haku_78 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Helsinki' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Annetaan tekemistä'
            AND paikat = 'Paikat'";

$tulos_78 = mysqli_query($conn, $haku_78);

$maara_78 = mysqli_num_rows($tulos_78);



// Annetaan tekemistä Tilat
$haku_79 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Helsinki' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Annetaan tekemistä'
            AND tilat = 'Tilat'";

$tulos_79 = mysqli_query($conn, $haku_79);

$maara_79 = mysqli_num_rows($tulos_79);



// Annetaan tekemistä Urheilu
$haku_80 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Helsinki' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Annetaan tekemistä'
            AND urheilu_2 = 'Urheilu'";

$tulos_80 = mysqli_query($conn, $haku_80);

$maara_80 = mysqli_num_rows($tulos_80);



// Annetaan tekemistä Muut annetaan tekemistä 
$haku_81 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Helsinki' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Annetaan tekemistä'
            AND muut_annetaan_tekemista = 'Muut'";

$tulos_81 = mysqli_query($conn, $haku_81);

$maara_81 = mysqli_num_rows($tulos_81);



// Pyydetään tavaroita Elektroniikka
$haku_85 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Helsinki' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Pyydetään tavaroita'
            AND elektroniikka_2 = 'Elektroniikka'";

$tulos_85 = mysqli_query($conn, $haku_85);

$maara_85 = mysqli_num_rows($tulos_85);




// Pyydetään tavaroita Huonekalut
$haku_86 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Helsinki' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Pyydetään tavaroita'
            AND huonekalut_2 = 'Huonekalut'";

$tulos_86 = mysqli_query($conn, $haku_86);

$maara_86 = mysqli_num_rows($tulos_86);




// Pyydetään tavaroita Kodinkoneet
$haku_87 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Helsinki' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Pyydetään tavaroita'
            AND kodinkoneet_2 = 'Kodinkoneet'";

$tulos_87 = mysqli_query($conn, $haku_87);

$maara_87 = mysqli_num_rows($tulos_87);




// Pyydetään tavaroita Vaatteet
$haku_88 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Helsinki' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Pyydetään tavaroita'
            AND vaatteet_2 = 'Vaatteet'";

$tulos_88 = mysqli_query($conn, $haku_88);

$maara_88 = mysqli_num_rows($tulos_88);





// Pyydetään tavaroita Muut Pyydetään tavaroita 
$haku_89 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Helsinki' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Pyydetään tavaroita'
            AND muut_pyydetaan_tavaroita = 'Muut'";

$tulos_89 = mysqli_query($conn, $haku_89);

$maara_89 = mysqli_num_rows($tulos_89);



// Pyydetään tekemistä Liikunta
$haku_95 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Helsinki' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Pyydetään tekemistä'
            AND liikunta_3 = 'Liikunta'";

$tulos_95 = mysqli_query($conn, $haku_95);

$maara_95 = mysqli_num_rows($tulos_95);




// Pyydetään tekemistä Musiikki
$haku_96 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Helsinki' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Pyydetään tekemistä'
            AND musiikki_3 = 'Musiikki'";

$tulos_96 = mysqli_query($conn, $haku_96);

$maara_96 = mysqli_num_rows($tulos_96);



// Pyydetään tekemistä Näyttelyt
$haku_97 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Helsinki' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Pyydetään tekemistä'
            AND nayttelyt_3 = 'Näyttelyt'";

$tulos_97 = mysqli_query($conn, $haku_97);

$maara_97 = mysqli_num_rows($tulos_97);


// Pyydetään tekemistä Paikat
$haku_98 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Helsinki' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Pyydetään tekemistä'
            AND paikat_3 = 'Paikat'";

$tulos_98 = mysqli_query($conn, $haku_98);

$maara_98 = mysqli_num_rows($tulos_98);


// Pyydetään tekemistä Tilat
$haku_99 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Helsinki' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Pyydetään tekemistä'
            AND tilat_3 = 'Tilat'";

$tulos_99 = mysqli_query($conn, $haku_99);

$maara_99 = mysqli_num_rows($tulos_99);



// Pyydetään tekemistä Urheilu
$haku_100 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Helsinki' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Pyydetään tekemistä'
            AND urheilu_3 = 'Urheilu'";

$tulos_100 = mysqli_query($conn, $haku_100);

$maara_100 = mysqli_num_rows($tulos_100);



// Pyydetään tekemistä Muut Pyydetään tekemistä 
$haku_100_2 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Helsinki' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Pyydetään tekemistä'
            AND muut_pyydetaan_tekemista = 'Muut'";

$tulos_100_2 = mysqli_query($conn, $haku_100_2);

$maara_100_2 = mysqli_num_rows($tulos_100_2);

}




if (isset($_GET['kaupunki']) && $_GET['kaupunki']=='Kauniainen') {

// Espoo
$haku_1 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Espoo'
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id";

$tulos_1 = mysqli_query($conn, $haku_1);

$maara_1 = mysqli_num_rows($tulos_1);


// Helsinki
$haku_101 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Helsinki'
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id";

$tulos_101 = mysqli_query($conn, $haku_101);

$maara_101 = mysqli_num_rows($tulos_101);



// Kauniainen
$haku_201 = "SELECT * 
             FROM ilmoitukset, osastot
             WHERE kaupunki = 'Kauniainen'
             AND julkaistu='kylla' 
             AND ilmoitukset.id=osastot.id";

$tulos_201 = mysqli_query($conn, $haku_201);

$maara_201 = mysqli_num_rows($tulos_201);


// Vantaa
$haku_301 = "SELECT * 
             FROM ilmoitukset, osastot
             WHERE kaupunki = 'Vantaa'
             AND julkaistu='kylla' 
             AND ilmoitukset.id=osastot.id";

$tulos_301 = mysqli_query($conn, $haku_301);

$maara_301 = mysqli_num_rows($tulos_301);


// Annetaan apua 
$haku_2 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Kauniainen' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Annetaan apua'";

$tulos_2 = mysqli_query($conn, $haku_2);

$maara_2 = mysqli_num_rows($tulos_2);


// Annetaan lainaan
$haku_3 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Kauniainen' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Annetaan lainaan'";

$tulos_3 = mysqli_query($conn, $haku_3);

$maara_3 = mysqli_num_rows($tulos_3);


// Annetaan ruokaa
$haku_4 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Kauniainen' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Annetaan ruokaa'";

$tulos_4 = mysqli_query($conn, $haku_4);

$maara_4 = mysqli_num_rows($tulos_4);


// Annetaan tavaroita
$haku_5 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Kauniainen' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Annetaan tavaroita'";

$tulos_5 = mysqli_query($conn, $haku_5);

$maara_5 = mysqli_num_rows($tulos_5);


// Annetaan tekemista
$haku_6 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Kauniainen' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Annetaan tekemistä'";

$tulos_6 = mysqli_query($conn, $haku_6);

$maara_6 = mysqli_num_rows($tulos_6);


// Muut annetaan
$haku_7 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Kauniainen' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Muut annetaan'";

$tulos_7 = mysqli_query($conn, $haku_7);

$maara_7 = mysqli_num_rows($tulos_7);


// Pyydetään apua
$haku_8 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Kauniainen' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Pyydetään apua'";

$tulos_8 = mysqli_query($conn, $haku_8);

$maara_8 = mysqli_num_rows($tulos_8);


// Pyydetään lainaan
$haku_9 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Kauniainen' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Pyydetään lainaan'";

$tulos_9 = mysqli_query($conn, $haku_9);

$maara_9 = mysqli_num_rows($tulos_9);


// Pyydetään ruokaa
$haku_10 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Kauniainen' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Pyydetään ruokaa'";

$tulos_10 = mysqli_query($conn, $haku_10);

$maara_10 = mysqli_num_rows($tulos_10);


// Pyydetään tavaroita
$haku_11 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Kauniainen' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Pyydetään tavaroita'";
 
$tulos_11 = mysqli_query($conn, $haku_11);

$maara_11 = mysqli_num_rows($tulos_11);


// Pyydetään tekemista
$haku_12 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Kauniainen' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Pyydetään tekemistä'";

$tulos_12 = mysqli_query($conn, $haku_12);

$maara_12 = mysqli_num_rows($tulos_12);


// Muut pyydetään
$haku_13 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Kauniainen' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Muut pyydetään'";

$tulos_13 = mysqli_query($conn, $haku_13);

$maara_13 = mysqli_num_rows($tulos_13);

// Tapahtumat
$haku_14 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Kauniainen' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'";

$tulos_14 = mysqli_query($conn, $haku_14);

$maara_14 = mysqli_num_rows($tulos_14);


// Tapahtumat Elokuvat
$haku_31 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Kauniainen' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND elokuvat = 'Elokuvat'";

$tulos_31 = mysqli_query($conn, $haku_31);

$maara_31 = mysqli_num_rows($tulos_31);



// Tapahtumat Improvisointi
$haku_32 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Kauniainen' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND improvisointi = 'Improvisointi'";

$tulos_32 = mysqli_query($conn, $haku_32);

$maara_32 = mysqli_num_rows($tulos_32);




// Tapahtumat Keskustelu
$haku_33 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Kauniainen' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND keskustelu = 'keskustelu'";

$tulos_33 = mysqli_query($conn, $haku_33);

$maara_33 = mysqli_num_rows($tulos_33);




// Tapahtumat Kirjallisuus
$haku_34 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Kauniainen' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND kirjallisuus = 'Kirjallisuus'";

$tulos_34 = mysqli_query($conn, $haku_34);

$maara_34 = mysqli_num_rows($tulos_34);




// Tapahtumat Kuvataide
$haku_35 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Kauniainen' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND kuvataide = 'Kuvataide'";

$tulos_35 = mysqli_query($conn, $haku_35);

$maara_35 = mysqli_num_rows($tulos_35);




// Tapahtumat Käsityöt
$haku_36 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Kauniainen' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND kasityot = 'Käsityöt'";

$tulos_36 = mysqli_query($conn, $haku_36);

$maara_36 = mysqli_num_rows($tulos_36);




// Tapahtumat Leikkiminen
$haku_37 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Kauniainen' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND leikkiminen = 'Leikkiminen'";

$tulos_37 = mysqli_query($conn, $haku_37);

$maara_37 = mysqli_num_rows($tulos_37);





// Tapahtumat Liikunta
$haku_38 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Kauniainen' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND liikunta = 'Liikunta'";

$tulos_38 = mysqli_query($conn, $haku_38);

$maara_38 = mysqli_num_rows($tulos_38);




// Tapahtumat Luento
$haku_39 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Kauniainen' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND luento = 'Luento'";

$tulos_39 = mysqli_query($conn, $haku_39);

$maara_39 = mysqli_num_rows($tulos_39);




// Tapahtumat Musiikki
$haku_40 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Kauniainen' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND musiikki = 'Musiikki'";

$tulos_40 = mysqli_query($conn, $haku_40);

$maara_40 = mysqli_num_rows($tulos_40);




// Tapahtumat Näyttelyt
$haku_41 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Kauniainen' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND nayttelyt = 'Näyttelyt'";

$tulos_41 = mysqli_query($conn, $haku_41);

$maara_41 = mysqli_num_rows($tulos_41);



// Tapahtumat Oppiminen
$haku_42 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Kauniainen' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND oppiminen = 'Oppiminen'";

$tulos_42 = mysqli_query($conn, $haku_42);

$maara_42 = mysqli_num_rows($tulos_42);



// Tapahtumat Pelaaminen
$haku_43 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Kauniainen' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND pelaaminen = 'Pelaaminen'";

$tulos_43 = mysqli_query($conn, $haku_43);

$maara_43 = mysqli_num_rows($tulos_43);





// Tapahtumat Politiikka
$haku_44 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Kauniainen' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND politiikka = 'Politiikka'";

$tulos_44 = mysqli_query($conn, $haku_44);

$maara_44 = mysqli_num_rows($tulos_44);





// Tapahtumat Runonlausunta
$haku_45 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Kauniainen' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND runonlausunta = 'Runonlausunta'";

$tulos_45 = mysqli_query($conn, $haku_45);

$maara_45 = mysqli_num_rows($tulos_45);




// Tapahtumat Sadunkerronta
$haku_46 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Kauniainen' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND sadunkerronta = 'Sadunkerronta'";

$tulos_46 = mysqli_query($conn, $haku_46);

$maara_46 = mysqli_num_rows($tulos_46);




// Tapahtumat Tanssi
$haku_47 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Kauniainen' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND tanssi = 'Tanssi'";

$tulos_47 = mysqli_query($conn, $haku_47);

$maara_47 = mysqli_num_rows($tulos_47);





// Tapahtumat Tarinankerronta
$haku_48 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Kauniainen' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND tarinankerronta = 'Tarinankerronta'";

$tulos_48 = mysqli_query($conn, $haku_48);

$maara_48 = mysqli_num_rows($tulos_48);



// Tapahtumat Teatteri
$haku_49 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Kauniainen' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND teatteri = 'Teatteri'";

$tulos_49 = mysqli_query($conn, $haku_49);

$maara_49 = mysqli_num_rows($tulos_49);





// Tapahtumat Työpaja
$haku_50 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Kauniainen' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND tyopaja = 'Työpaja'";

$tulos_50 = mysqli_query($conn, $haku_50);

$maara_50 = mysqli_num_rows($tulos_50);





// Tapahtumat Urheilu
$haku_51 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Kauniainen' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND urheilu = 'Urheilu'";

$tulos_51 = mysqli_query($conn, $haku_51);

$maara_51 = mysqli_num_rows($tulos_51);




// Tapahtumat Uskonto
$haku_52 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Kauniainen' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND uskonto = 'Uskonto'";

$tulos_52 = mysqli_query($conn, $haku_52);

$maara_52 = mysqli_num_rows($tulos_52);




// Tapahtumat Yhdessä oleminen
$haku_53 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Kauniainen' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND yhdessa_oleminen = 'Yhdessä oleminen'";

$tulos_53 = mysqli_query($conn, $haku_53);

$maara_53 = mysqli_num_rows($tulos_53);





// Tapahtumat Muut taphtumat
$haku_54 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Kauniainen' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND muut_tapahtumat = 'Muut'";

$tulos_54 = mysqli_query($conn, $haku_54);

$maara_54 = mysqli_num_rows($tulos_54);





// Tapahtumat Aikuiset
$haku_55 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Kauniainen' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND aikuiset = 'Aikuiset'";

$tulos_55 = mysqli_query($conn, $haku_55);

$maara_55 = mysqli_num_rows($tulos_55);



// Tapahtumat Lapset
$haku_56 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Kauniainen' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND lapset = 'Lapset'";

$tulos_56 = mysqli_query($conn, $haku_56);

$maara_56 = mysqli_num_rows($tulos_56);





// Tapahtumat Nuoret
$haku_57 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Kauniainen' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND nuoret = 'Nuoret'";

$tulos_57 = mysqli_query($conn, $haku_57);

$maara_57 = mysqli_num_rows($tulos_57);





// Tapahtumat Seniorit
$haku_58 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Kauniainen' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND seniorit = 'Seniorit'";

$tulos_58 = mysqli_query($conn, $haku_58);

$maara_58 = mysqli_num_rows($tulos_58);




// Tapahtumat Miehet
$haku_59 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Kauniainen' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND miehet = 'Miehet'";

$tulos_59 = mysqli_query($conn, $haku_59);

$maara_59 = mysqli_num_rows($tulos_59);




// Tapahtumat Naiset
$haku_60 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Kauniainen' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND naiset = 'Naiset'";

$tulos_60 = mysqli_query($conn, $haku_60);

$maara_60 = mysqli_num_rows($tulos_60);



// Annetaan tavaroita Elektroniikka
$haku_65 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Kauniainen' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Annetaan tavaroita'
            AND elektroniikka = 'Elektroniikka'";

$tulos_65 = mysqli_query($conn, $haku_65);

$maara_65 = mysqli_num_rows($tulos_65);




// Annetaan tavaroita Huonekalut
$haku_66 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Kauniainen' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Annetaan tavaroita'
            AND huonekalut = 'Huonekalut'";

$tulos_66 = mysqli_query($conn, $haku_66);

$maara_66 = mysqli_num_rows($tulos_66);




// Annetaan tavaroita Kodinkoneet
$haku_67 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Kauniainen' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Annetaan tavaroita'
            AND kodinkoneet = 'Kodinkoneet'";

$tulos_67 = mysqli_query($conn, $haku_67);

$maara_67 = mysqli_num_rows($tulos_67);




// Annetaan tavaroita Vaatteet
$haku_68 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Kauniainen' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Annetaan tavaroita'
            AND vaatteet = 'Vaatteet'";

$tulos_68 = mysqli_query($conn, $haku_68);

$maara_68 = mysqli_num_rows($tulos_68);





// Annetaan tavaroita Muut annetaan tavaroita 
$haku_69 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Kauniainen' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Annetaan tavaroita'
            AND muut_annetaan_tavaroita = 'Muut '";

$tulos_69 = mysqli_query($conn, $haku_69);

$maara_69 = mysqli_num_rows($tulos_69);





// Annetaan tekemistä Liikunta
$haku_75 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Kauniainen' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Annetaan tekemistä'
            AND liikunta_2 = 'Liikunta'";

$tulos_75 = mysqli_query($conn, $haku_75);

$maara_75 = mysqli_num_rows($tulos_75);




// Annetaan tekemistä Musiikki
$haku_76 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Kauniainen' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Annetaan tekemistä'
            AND musiikki_2 = 'Musiikki'";

$tulos_76 = mysqli_query($conn, $haku_76);

$maara_76 = mysqli_num_rows($tulos_76);




// Annetaan tekemistä Näyttelyt
$haku_77 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Kauniainen' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Annetaan tekemistä'
            AND nayttelyt_2 = 'Näyttelyt'";

$tulos_77 = mysqli_query($conn, $haku_77);

$maara_77 = mysqli_num_rows($tulos_77);



// Annetaan tekemistä Paikat
$haku_78 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Kauniainen' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Annetaan tekemistä'
            AND paikat = 'Paikat'";

$tulos_78 = mysqli_query($conn, $haku_78);

$maara_78 = mysqli_num_rows($tulos_78);



// Annetaan tekemistä Tilat
$haku_79 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Kauniainen' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Annetaan tekemistä'
            AND tilat = 'Tilat'";

$tulos_79 = mysqli_query($conn, $haku_79);

$maara_79 = mysqli_num_rows($tulos_79);



// Annetaan tekemistä Urheilu
$haku_80 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Kauniainen' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Annetaan tekemistä'
            AND urheilu_2 = 'Urheilu'";

$tulos_80 = mysqli_query($conn, $haku_80);

$maara_80 = mysqli_num_rows($tulos_80);





// Annetaan tekemistä Muut annetaan tekemistä 
$haku_81 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Kauniainen' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Annetaan tekemistä'
            AND muut_annetaan_tekemista = 'Muut'";

$tulos_81 = mysqli_query($conn, $haku_81);

$maara_81 = mysqli_num_rows($tulos_81);



// Pyydetään tavaroita Elektroniikka
$haku_85 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Kauniainen' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Pyydetään tavaroita'
            AND elektroniikka_2 = 'Elektroniikka'";

$tulos_85 = mysqli_query($conn, $haku_85);

$maara_85 = mysqli_num_rows($tulos_85);




// Pyydetään tavaroita Huonekalut
$haku_86 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Kauniainen' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Pyydetään tavaroita'
            AND huonekalut_2 = 'Huonekalut'";

$tulos_86 = mysqli_query($conn, $haku_86);

$maara_86 = mysqli_num_rows($tulos_86);




// Pyydetään tavaroita Kodinkoneet
$haku_87 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Kauniainen' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Pyydetään tavaroita'
            AND kodinkoneet_2 = 'Kodinkoneet'";

$tulos_87 = mysqli_query($conn, $haku_87);

$maara_87 = mysqli_num_rows($tulos_87);




// Pyydetään tavaroita Vaatteet
$haku_88 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Kauniainen' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Pyydetään tavaroita'
            AND vaatteet_2 = 'Vaatteet'";

$tulos_88 = mysqli_query($conn, $haku_88);

$maara_88 = mysqli_num_rows($tulos_88);





// Pyydetään tavaroita Muut Pyydetään tavaroita 
$haku_89 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Kauniainen' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Pyydetään tavaroita'
            AND muut_pyydetaan_tavaroita = 'Muut'";

$tulos_89 = mysqli_query($conn, $haku_89);

$maara_89 = mysqli_num_rows($tulos_89);



// Pyydetään tekemistä Liikunta
$haku_95 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Kauniainen' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Pyydetään tekemistä'
            AND liikunta_3 = 'Liikunta'";

$tulos_95 = mysqli_query($conn, $haku_95);

$maara_95 = mysqli_num_rows($tulos_95);




// Pyydetään tekemistä Musiikki
$haku_96 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Kauniainen' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Pyydetään tekemistä'
            AND musiikki_3 = 'Musiikki'";

$tulos_96 = mysqli_query($conn, $haku_96);

$maara_96 = mysqli_num_rows($tulos_96);



// Pyydetään tekemistä Näyttelyt
$haku_97 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Kauniainen' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Pyydetään tekemistä'
            AND nayttelyt_3 = 'Näyttelyt'";

$tulos_97 = mysqli_query($conn, $haku_97);

$maara_97 = mysqli_num_rows($tulos_97);


// Pyydetään tekemistä Paikat
$haku_98 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Kauniainen' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Pyydetään tekemistä'
            AND paikat_3 = 'Paikat'";

$tulos_98 = mysqli_query($conn, $haku_98);

$maara_98 = mysqli_num_rows($tulos_98);


// Pyydetään tekemistä Tilat
$haku_99 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Kauniainen' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Pyydetään tekemistä'
            AND tilat_3 = 'Tilat'";

$tulos_99 = mysqli_query($conn, $haku_99);

$maara_99 = mysqli_num_rows($tulos_99);



// Pyydetään tekemistä Urheilu
$haku_100 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Kauniainen' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Pyydetään tekemistä'
            AND urheilu_3 = 'Urheilu'";

$tulos_100 = mysqli_query($conn, $haku_100);

$maara_100 = mysqli_num_rows($tulos_100);



// Pyydetään tekemistä Muut Pyydetään tekemistä 
$haku_100_2 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Kauniainen' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Pyydetään tekemistä'
            AND muut_pyydetaan_tekemista = 'Muut'";

$tulos_100_2 = mysqli_query($conn, $haku_100_2);

$maara_100_2 = mysqli_num_rows($tulos_100_2);

}




if (isset($_GET['kaupunki']) && $_GET['kaupunki']=='Vantaa') {

// Espoo
$haku_1 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Espoo'
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id";

$tulos_1 = mysqli_query($conn, $haku_1);

$maara_1 = mysqli_num_rows($tulos_1);


// Helsinki
$haku_101 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Helsinki'
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id";

$tulos_101 = mysqli_query($conn, $haku_101);

$maara_101 = mysqli_num_rows($tulos_101);



// Kauniainen
$haku_201 = "SELECT * 
             FROM ilmoitukset, osastot
             WHERE kaupunki = 'Kauniainen'
             AND julkaistu='kylla' 
             AND ilmoitukset.id=osastot.id";

$tulos_201 = mysqli_query($conn, $haku_201);

$maara_201 = mysqli_num_rows($tulos_201);


// Vantaa
$haku_301 = "SELECT * 
             FROM ilmoitukset, osastot
             WHERE kaupunki = 'Vantaa'
             AND julkaistu='kylla' 
             AND ilmoitukset.id=osastot.id";

$tulos_301 = mysqli_query($conn, $haku_301);

$maara_301 = mysqli_num_rows($tulos_301);


// Annetaan apua 
$haku_2 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Vantaa' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Annetaan apua'";

$tulos_2 = mysqli_query($conn, $haku_2);

$maara_2 = mysqli_num_rows($tulos_2);


// Annetaan lainaan
$haku_3 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Vantaa' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Annetaan lainaan'";

$tulos_3 = mysqli_query($conn, $haku_3);

$maara_3 = mysqli_num_rows($tulos_3);


// Annetaan ruokaa
$haku_4 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Vantaa' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Annetaan ruokaa'";

$tulos_4 = mysqli_query($conn, $haku_4);

$maara_4 = mysqli_num_rows($tulos_4);


// Annetaan tavaroita
$haku_5 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Vantaa' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Annetaan tavaroita'";

$tulos_5 = mysqli_query($conn, $haku_5);

$maara_5 = mysqli_num_rows($tulos_5);


// Annetaan tekemista
$haku_6 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Vantaa' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Annetaan tekemistä'";

$tulos_6 = mysqli_query($conn, $haku_6);

$maara_6 = mysqli_num_rows($tulos_6);


// Muut annetaan
$haku_7 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Vantaa' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Muut annetaan'";

$tulos_7 = mysqli_query($conn, $haku_7);

$maara_7 = mysqli_num_rows($tulos_7);


// Pyydetään apua
$haku_8 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Vantaa' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Pyydetään apua'";

$tulos_8 = mysqli_query($conn, $haku_8);

$maara_8 = mysqli_num_rows($tulos_8);


// Pyydetään lainaan
$haku_9 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Vantaa' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Pyydetään lainaan'";

$tulos_9 = mysqli_query($conn, $haku_9);

$maara_9 = mysqli_num_rows($tulos_9);


// Pyydetään ruokaa
$haku_10 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Vantaa' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Pyydetään ruokaa'";

$tulos_10 = mysqli_query($conn, $haku_10);

$maara_10 = mysqli_num_rows($tulos_10);


// Pyydetään tavaroita
$haku_11 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Vantaa' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Pyydetään tavaroita'";
 
$tulos_11 = mysqli_query($conn, $haku_11);

$maara_11 = mysqli_num_rows($tulos_11);


// Pyydetään tekemista
$haku_12 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Vantaa' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Pyydetään tekemistä'";

$tulos_12 = mysqli_query($conn, $haku_12);

$maara_12 = mysqli_num_rows($tulos_12);


// Muut pyydetään
$haku_13 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Vantaa' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Muut pyydetään'";

$tulos_13 = mysqli_query($conn, $haku_13);

$maara_13 = mysqli_num_rows($tulos_13);

// Tapahtumat
$haku_14 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Vantaa' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'";

$tulos_14 = mysqli_query($conn, $haku_14);

$maara_14 = mysqli_num_rows($tulos_14);






// Tapahtumat Elokuvat
$haku_31 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Vantaa' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND elokuvat = 'Elokuvat'";

$tulos_31 = mysqli_query($conn, $haku_31);

$maara_31 = mysqli_num_rows($tulos_31);



// Tapahtumat Improvisointi
$haku_32 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Vantaa' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND improvisointi = 'Improvisointi'";

$tulos_32 = mysqli_query($conn, $haku_32);

$maara_32 = mysqli_num_rows($tulos_32);




// Tapahtumat Keskustelu
$haku_33 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Vantaa' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND keskustelu = 'keskustelu'";

$tulos_33 = mysqli_query($conn, $haku_33);

$maara_33 = mysqli_num_rows($tulos_33);




// Tapahtumat Kirjallisuus
$haku_34 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Vantaa' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND kirjallisuus = 'Kirjallisuus'";

$tulos_34 = mysqli_query($conn, $haku_34);

$maara_34 = mysqli_num_rows($tulos_34);




// Tapahtumat Kuvataide
$haku_35 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Vantaa' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND kuvataide = 'Kuvataide'";

$tulos_35 = mysqli_query($conn, $haku_35);

$maara_35 = mysqli_num_rows($tulos_35);




// Tapahtumat Käsityöt
$haku_36 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Vantaa' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND kasityot = 'Käsityöt'";

$tulos_36 = mysqli_query($conn, $haku_36);

$maara_36 = mysqli_num_rows($tulos_36);




// Tapahtumat Leikkiminen
$haku_37 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Vantaa' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND leikkiminen = 'Leikkiminen'";

$tulos_37 = mysqli_query($conn, $haku_37);

$maara_37 = mysqli_num_rows($tulos_37);





// Tapahtumat Liikunta
$haku_38 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Vantaa' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND liikunta = 'Liikunta'";

$tulos_38 = mysqli_query($conn, $haku_38);

$maara_38 = mysqli_num_rows($tulos_38);




// Tapahtumat Luento
$haku_39 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Vantaa' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND luento = 'Luento'";

$tulos_39 = mysqli_query($conn, $haku_39);

$maara_39 = mysqli_num_rows($tulos_39);




// Tapahtumat Musiikki
$haku_40 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Vantaa' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND musiikki = 'Musiikki'";

$tulos_40 = mysqli_query($conn, $haku_40);

$maara_40 = mysqli_num_rows($tulos_40);




// Tapahtumat Näyttelyt
$haku_41 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Vantaa' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND nayttelyt = 'Näyttelyt'";

$tulos_41 = mysqli_query($conn, $haku_41);

$maara_41 = mysqli_num_rows($tulos_41);



// Tapahtumat Oppiminen
$haku_42 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Vantaa' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND oppiminen = 'Oppiminen'";

$tulos_42 = mysqli_query($conn, $haku_42);

$maara_42 = mysqli_num_rows($tulos_42);



// Tapahtumat Pelaaminen
$haku_43 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Vantaa' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND pelaaminen = 'Pelaaminen'";

$tulos_43 = mysqli_query($conn, $haku_43);

$maara_43 = mysqli_num_rows($tulos_43);





// Tapahtumat Politiikka
$haku_44 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Vantaa' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND politiikka = 'Politiikka'";

$tulos_44 = mysqli_query($conn, $haku_44);

$maara_44 = mysqli_num_rows($tulos_44);





// Tapahtumat Runonlausunta
$haku_45 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Vantaa' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND runonlausunta = 'Runonlausunta'";

$tulos_45 = mysqli_query($conn, $haku_45);

$maara_45 = mysqli_num_rows($tulos_45);




// Tapahtumat Sadunkerronta
$haku_46 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Vantaa' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND sadunkerronta = 'Sadunkerronta'";

$tulos_46 = mysqli_query($conn, $haku_46);

$maara_46 = mysqli_num_rows($tulos_46);




// Tapahtumat Tanssi
$haku_47 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Vantaa' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND tanssi = 'Tanssi'";

$tulos_47 = mysqli_query($conn, $haku_47);

$maara_47 = mysqli_num_rows($tulos_47);





// Tapahtumat Tarinankerronta
$haku_48 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Vantaa' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND tarinankerronta = 'Tarinankerronta'";

$tulos_48 = mysqli_query($conn, $haku_48);

$maara_48 = mysqli_num_rows($tulos_48);



// Tapahtumat Teatteri
$haku_49 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Vantaa' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND teatteri = 'Teatteri'";

$tulos_49 = mysqli_query($conn, $haku_49);

$maara_49 = mysqli_num_rows($tulos_49);





// Tapahtumat Työpaja
$haku_50 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Vantaa' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND tyopaja = 'Työpaja'";

$tulos_50 = mysqli_query($conn, $haku_50);

$maara_50 = mysqli_num_rows($tulos_50);





// Tapahtumat Urheilu
$haku_51 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Vantaa' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND urheilu = 'Urheilu'";

$tulos_51 = mysqli_query($conn, $haku_51);

$maara_51 = mysqli_num_rows($tulos_51);




// Tapahtumat Uskonto
$haku_52 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Vantaa' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND uskonto = 'Uskonto'";

$tulos_52 = mysqli_query($conn, $haku_52);

$maara_52 = mysqli_num_rows($tulos_52);




// Tapahtumat Yhdessä oleminen
$haku_53 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Vantaa' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND yhdessa_oleminen = 'Yhdessä oleminen'";

$tulos_53 = mysqli_query($conn, $haku_53);

$maara_53 = mysqli_num_rows($tulos_53);





// Tapahtumat Muut taphtumat
$haku_54 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Vantaa' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND muut_tapahtumat = 'Muut'";

$tulos_54 = mysqli_query($conn, $haku_54);

$maara_54 = mysqli_num_rows($tulos_54);





// Tapahtumat Aikuiset
$haku_55 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Vantaa' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND aikuiset = 'Aikuiset'";

$tulos_55 = mysqli_query($conn, $haku_55);

$maara_55 = mysqli_num_rows($tulos_55);



// Tapahtumat Lapset
$haku_56 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Vantaa' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND lapset = 'Lapset'";

$tulos_56 = mysqli_query($conn, $haku_56);

$maara_56 = mysqli_num_rows($tulos_56);





// Tapahtumat Nuoret
$haku_57 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Vantaa' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND nuoret = 'Nuoret'";

$tulos_57 = mysqli_query($conn, $haku_57);

$maara_57 = mysqli_num_rows($tulos_57);





// Tapahtumat Seniorit
$haku_58 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Vantaa' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND seniorit = 'Seniorit'";

$tulos_58 = mysqli_query($conn, $haku_58);

$maara_58 = mysqli_num_rows($tulos_58);




// Tapahtumat Miehet
$haku_59 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Vantaa' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND miehet = 'Miehet'";

$tulos_59 = mysqli_query($conn, $haku_59);

$maara_59 = mysqli_num_rows($tulos_59);




// Tapahtumat Naiset
$haku_60 = "SELECT * 
           FROM ilmoitukset, osastot
           WHERE kaupunki = 'Vantaa' 
           AND julkaistu='kylla' 
           AND ilmoitukset.id=osastot.id
           AND ylaosasto = 'Tapahtumat'
           AND naiset = 'Naiset'";

$tulos_60 = mysqli_query($conn, $haku_60);

$maara_60 = mysqli_num_rows($tulos_60);



// Annetaan tavaroita Elektroniikka
$haku_65 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Vantaa' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Annetaan tavaroita'
            AND elektroniikka = 'Elektroniikka'";

$tulos_65 = mysqli_query($conn, $haku_65);

$maara_65 = mysqli_num_rows($tulos_65);




// Annetaan tavaroita Huonekalut
$haku_66 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Vantaa' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Annetaan tavaroita'
            AND huonekalut = 'Huonekalut'";

$tulos_66 = mysqli_query($conn, $haku_66);

$maara_66 = mysqli_num_rows($tulos_66);




// Annetaan tavaroita Kodinkoneet
$haku_67 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Vantaa' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Annetaan tavaroita'
            AND kodinkoneet = 'Kodinkoneet'";

$tulos_67 = mysqli_query($conn, $haku_67);

$maara_67 = mysqli_num_rows($tulos_67);




// Annetaan tavaroita Vaatteet
$haku_68 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Vantaa' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Annetaan tavaroita'
            AND vaatteet = 'Vaatteet'";

$tulos_68 = mysqli_query($conn, $haku_68);

$maara_68 = mysqli_num_rows($tulos_68);





// Annetaan tavaroita Muut annetaan tavaroita 
$haku_69 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Vantaa' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Annetaan tavaroita'
            AND muut_annetaan_tavaroita = 'Muut '";

$tulos_69 = mysqli_query($conn, $haku_69);

$maara_69 = mysqli_num_rows($tulos_69);





// Annetaan tekemistä Liikunta
$haku_75 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Vantaa' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Annetaan tekemistä'
            AND liikunta_2 = 'Liikunta'";

$tulos_75 = mysqli_query($conn, $haku_75);

$maara_75 = mysqli_num_rows($tulos_75);




// Annetaan tekemistä Musiikki
$haku_76 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Vantaa' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Annetaan tekemistä'
            AND musiikki_2 = 'Musiikki'";

$tulos_76 = mysqli_query($conn, $haku_76);

$maara_76 = mysqli_num_rows($tulos_76);




// Annetaan tekemistä Näyttelyt
$haku_77 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Vantaa' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Annetaan tekemistä'
            AND nayttelyt_2 = 'Näyttelyt'";

$tulos_77 = mysqli_query($conn, $haku_77);

$maara_77 = mysqli_num_rows($tulos_77);



// Annetaan tekemistä Paikat
$haku_78 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Vantaa' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Annetaan tekemistä'
            AND paikat = 'Paikat'";

$tulos_78 = mysqli_query($conn, $haku_78);

$maara_78 = mysqli_num_rows($tulos_78);



// Annetaan tekemistä Tilat
$haku_79 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Vantaa' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Annetaan tekemistä'
            AND tilat = 'Tilat'";

$tulos_79 = mysqli_query($conn, $haku_79);

$maara_79 = mysqli_num_rows($tulos_79);



// Annetaan tekemistä Urheilu
$haku_80 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Vantaa' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Annetaan tekemistä'
            AND urheilu_2 = 'Urheilu'";

$tulos_80 = mysqli_query($conn, $haku_80);

$maara_80 = mysqli_num_rows($tulos_80);





// Annetaan tekemistä Muut annetaan tekemistä 
$haku_81 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Vantaa' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Annetaan tekemistä'
            AND muut_annetaan_tekemista = 'Muut'";

$tulos_81 = mysqli_query($conn, $haku_81);

$maara_81 = mysqli_num_rows($tulos_81);



// Pyydetään tavaroita Elektroniikka
$haku_85 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Vantaa' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Pyydetään tavaroita'
            AND elektroniikka_2 = 'Elektroniikka'";

$tulos_85 = mysqli_query($conn, $haku_85);

$maara_85 = mysqli_num_rows($tulos_85);




// Pyydetään tavaroita Huonekalut
$haku_86 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Vantaa' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Pyydetään tavaroita'
            AND huonekalut_2 = 'Huonekalut'";

$tulos_86 = mysqli_query($conn, $haku_86);

$maara_86 = mysqli_num_rows($tulos_86);




// Pyydetään tavaroita Kodinkoneet
$haku_87 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Vantaa' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Pyydetään tavaroita'
            AND kodinkoneet_2 = 'Kodinkoneet'";

$tulos_87 = mysqli_query($conn, $haku_87);

$maara_87 = mysqli_num_rows($tulos_87);




// Pyydetään tavaroita Vaatteet
$haku_88 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Vantaa' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Pyydetään tavaroita'
            AND vaatteet_2 = 'Vaatteet'";

$tulos_88 = mysqli_query($conn, $haku_88);

$maara_88 = mysqli_num_rows($tulos_88);





// Pyydetään tavaroita Muut Pyydetään tavaroita 
$haku_89 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Vantaa' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Pyydetään tavaroita'
            AND muut_pyydetaan_tavaroita = 'Muut'";

$tulos_89 = mysqli_query($conn, $haku_89);

$maara_89 = mysqli_num_rows($tulos_89);



// Pyydetään tekemistä Liikunta
$haku_95 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Vantaa' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Pyydetään tekemistä'
            AND liikunta_3 = 'Liikunta'";

$tulos_95 = mysqli_query($conn, $haku_95);

$maara_95 = mysqli_num_rows($tulos_95);




// Pyydetään tekemistä Musiikki
$haku_96 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Vantaa' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Pyydetään tekemistä'
            AND musiikki_3 = 'Musiikki'";

$tulos_96 = mysqli_query($conn, $haku_96);

$maara_96 = mysqli_num_rows($tulos_96);



// Pyydetään tekemistä Näyttelyt
$haku_97 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Vantaa' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Pyydetään tekemistä'
            AND nayttelyt_3 = 'Näyttelyt'";

$tulos_97 = mysqli_query($conn, $haku_97);

$maara_97 = mysqli_num_rows($tulos_97);


// Pyydetään tekemistä Paikat
$haku_98 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Vantaa' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Pyydetään tekemistä'
            AND paikat_3 = 'Paikat'";

$tulos_98 = mysqli_query($conn, $haku_98);

$maara_98 = mysqli_num_rows($tulos_98);


// Pyydetään tekemistä Tilat
$haku_99 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Vantaa' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Pyydetään tekemistä'
            AND tilat_3 = 'Tilat'";

$tulos_99 = mysqli_query($conn, $haku_99);

$maara_99 = mysqli_num_rows($tulos_99);



// Pyydetään tekemistä Urheilu
$haku_100 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Vantaa' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Pyydetään tekemistä'
            AND urheilu_3 = 'Urheilu'";

$tulos_100 = mysqli_query($conn, $haku_100);

$maara_100 = mysqli_num_rows($tulos_100);



// Pyydetään tekemistä Muut Pyydetään tekemistä 
$haku_100_2 = "SELECT * 
            FROM ilmoitukset, osastot
            WHERE kaupunki = 'Vantaa' 
            AND julkaistu='kylla' 
            AND ilmoitukset.id=osastot.id
            AND ylaosasto = 'Pyydetään tekemistä'
            AND muut_pyydetaan_tekemista = 'Muut'";

$tulos_100_2 = mysqli_query($conn, $haku_100_2);

$maara_100_2 = mysqli_num_rows($tulos_100_2);

}


mysqli_close($conn);

?>
