/* Vaihda tai poista kuvia napista painamalla avautuu uuteen ikkunaan 
    paikassa tietyssä koossa. */

// Kaikille avoin

function vaihda_ja_poista_kuvia(url) {

    if (window.innerWidth >= 768 ) {
        window.open('https://jaetaan.net/muokkaa_tai_poista/muokkaa_tai_poista_kuvia.php?urlMuokkaaTaiPoista='+url, '', 'width=675, height=600, left=300px');
    }

    if (window.innerWidth <= 767 ) {
        window.open('https://jaetaan.net/muokkaa_tai_poista/muokkaa_tai_poista_kuvia.php?urlMuokkaaTaiPoista='+url, '', 'width=screen.width, height=screen.height');
    }
}    


// Hallinnointi

function h_vaihda_ja_poista_kuvia(url) {

    if (window.innerWidth >= 768 ) {
        window.open('https://jaetaan.net/admin/edit_or_delete_images.php?urlMuokkaaTaiPoista='+url, '', 'width=675, height=600, left=300px');
    }

    if (window.innerWidth <= 767 ) {
        window.open('https://jaetaan.net/admin/edit_or_delete_images.php?urlMuokkaaTaiPoista='+url, '', 'width=screen.width, height=screen.height');
    }
}


/* UKK - usein kysyttyjen kysymysten vastaukset piilosta näkyviin ja 
   näkyvistä piiloon. */ 

function ukk_vastaus_nayta_piiloon_1() {

    var a = document.getElementById('ukk_vastaus_1');

    if (a.style.display==='none') {
        a.style.display='block';
    }

    else {
        a.style.display='none';
    }

}


function ukk_vastaus_nayta_piiloon_2() {

    var a = document.getElementById('ukk_vastaus_2');

    if (a.style.display==='none') {
        a.style.display='block';
    }

    else {
        a.style.display='none';
    }

}


function ukk_vastaus_nayta_piiloon_3() {

    var a = document.getElementById('ukk_vastaus_3');

    if (a.style.display==='none') {
        a.style.display='block';
    }

    else {
        a.style.display='none';
    }

}


function ukk_vastaus_nayta_piiloon_4() {

    var a = document.getElementById('ukk_vastaus_4');

    if (a.style.display==='none') {
        a.style.display='block';
    }

    else {
        a.style.display='none';
    }

}

function ukk_vastaus_nayta_piiloon_5() {

    var a = document.getElementById('ukk_vastaus_5');

    if (a.style.display==='none') {
        a.style.display='block';
    }

    else {
        a.style.display='none';
    }

}

function ukk_vastaus_nayta_piiloon_6() {

    var a = document.getElementById('ukk_vastaus_6');

    if (a.style.display==='none') {
        a.style.display='block';
    }

    else {
        a.style.display='none';
    }

}

function ukk_vastaus_nayta_piiloon_7() {

    var a = document.getElementById('ukk_vastaus_7');

    if (a.style.display==='none') {
        a.style.display='block';
    }

    else {
        a.style.display='none';
    }

}



      





// Koko rivi klikattavaksi linkiksi etusivun ilmoitusten listauksen taulukossa.

function linkkiKokoIlmoitukseen(url) {
    window.location.assign('https://jaetaan.net/ilmoitukset?urlKokoIlmoitus='+url);
}

/* Koko rivi klikattavaksi linkiksi hallinnoinnin etusivun ilmoitusten 
 listauksen taulukossa. Kuvan vie koko ilmoitukseen. Kaiken muun klikkaaminen 
 – myös tämän koko rivin – rivillä vie hallinnoinnin muokkaa tai poista -sivulle. 

function linkkiKokoIlmoitukseen_2(url) {
    window.open('https://jaetaan.net/hallinnointi/h_muokkaa_tai_poista.php?urlMuokkaaTaiPoista='+url);
}

*/


/* Etusivun checkboxien hallintaa. 

Kun klikkaa jonkin yläosaston select-valikosta, 
tulee näkyviin valittuun yläosastoon liittyvä checkbox-valikoima.  
Samalla kaikkiin muihin yläosastoihin liittyvät valikoimat katoavat 
ja niihin liittyvien checkboxien valinta katoaa (checkbox checked=false) */

function hakuTapahtumat() {

    var a = document.getElementById('haku_yla_osastot').value;

    var b = document.getElementById('haku_osastot_tapahtumat');
    var c = document.getElementById('haku_osastot_annetaan_apua');
    var d = document.getElementById('haku_osastot_annetaan_lainaan');
    var e = document.getElementById('haku_osastot_annetaan_ruokaa');
    var f = document.getElementById('haku_osastot_annetaan_tavaroita');
    var g = document.getElementById('haku_osastot_annetaan_tekemista');
    var h = document.getElementById('haku_osastot_muut_annetaan');
    var i = document.getElementById('haku_osastot_pyydetaan_apua');
    var j = document.getElementById('haku_osastot_pyydetaan_lainaan');
    var k = document.getElementById('haku_osastot_pyydetaan_ruokaa');
    var l = document.getElementById('haku_osastot_pyydetaan_tavaroita');
    var m = document.getElementById('haku_osastot_pyydetaan_tekemista');
    var n = document.getElementById('haku_osastot_muut_pyydetaan');

    if (a=='Tapahtumat') {
        b.style.display='block';
        c.style.display='none';
        d.style.display='none';
        e.style.display='none';
        f.style.display='none';
        g.style.display='none';
        h.style.display='none';
        i.style.display='none';
        j.style.display='none';
        k.style.display='none';
        l.style.display='none';  
        m.style.display='none';
        n.style.display='none';


document.getElementsByName('o_0')[1].checked=true;    


var v1;
for (v1 = 100; v1 <= 100; v1++) {
document.getElementsByName('o_' + v1)[1].checked=false;    
}

var v2;
for (v2 = 200; v2 <= 200; v2++) {
document.getElementsByName('o_' + v2)[1].checked=false;    
}

var v3;
for (v3 = 300; v3 <= 300; v3++) {
document.getElementsByName('o_' + v3)[1].checked=false;    
}

var v4;
for (v4 = 400; v4 <= 405; v4++) {
document.getElementsByName('o_' + v4)[1].checked=false;    
}

var v4_2;
for (v4_2 = 450; v4_2 <= 457; v4_2++) {
document.getElementsByName('o_' + v4_2)[1].checked=false;    
}

var v5;
for (v5 = 500; v5 <= 500; v5++) {
document.getElementsByName('o_' + v5)[1].checked=false;    
}

var v6;
for (v6 = 600; v6 <= 600; v6++) {
document.getElementsByName('o_' + v6)[1].checked=false;    
}

var v7;
for (v7 = 700; v7 <= 700; v7++) {
document.getElementsByName('o_' + v7)[1].checked=false;    
}

var v8;
for (v8 = 800; v8 <= 800; v8++) {
document.getElementsByName('o_' + v8)[1].checked=false;    
}

var v9;
for (v9 = 900; v9 <= 905; v9++) {
document.getElementsByName('o_' + v9)[1].checked=false;    
}

var v9_2;
for (v9_2 = 950; v9_2 <= 957; v9_2++) {
document.getElementsByName('o_' + v9_2)[1].checked=false;    
}

var v10;
for (v10 = 1000; v10 <= 1000; v10++) {
document.getElementsByName('o_' + v10)[1].checked=false;    
}

}

    if (a=='Annetaan apua') {
        b.style.display='none';
        c.style.display='block';
        d.style.display='none';
        e.style.display='none';
        f.style.display='none';
        g.style.display='none';
        h.style.display='none';
        i.style.display='none';
        j.style.display='none';
        k.style.display='none';
        l.style.display='none';
        m.style.display='none';
        n.style.display='none';

var v0;
for (v0 = 0; v0 <= 30; v0++) {
document.getElementsByName('o_' + v0)[1].checked=false;    
}


document.getElementsByName('o_100')[1].checked=true;  


var v2;
for (v2 = 200; v2 <= 200; v2++) {
document.getElementsByName('o_' + v2)[1].checked=false;    
}

var v3;
for (v3 = 300; v3 <= 300; v3++) {
document.getElementsByName('o_' + v3)[1].checked=false;    
}

var v4;
for (v4 = 400; v4 <= 405; v4++) {
document.getElementsByName('o_' + v4)[1].checked=false;    
}

var v4_2;
for (v4_2 = 450; v4_2 <= 457; v4_2++) {
document.getElementsByName('o_' + v4_2)[1].checked=false;    
}

var v5;
for (v5 = 500; v5 <= 500; v5++) {
document.getElementsByName('o_' + v5)[1].checked=false;    
}

var v6;
for (v6 = 600; v6 <= 600; v6++) {
document.getElementsByName('o_' + v6)[1].checked=false;    
}

var v7;
for (v7 = 700; v7 <= 700; v7++) {
document.getElementsByName('o_' + v7)[1].checked=false;    
}

var v8;
for (v8 = 800; v8 <= 800; v8++) {
document.getElementsByName('o_' + v8)[1].checked=false;    
}

var v9;
for (v9 = 900; v9 <= 905; v9++) {
document.getElementsByName('o_' + v9)[1].checked=false;    
}

var v9_2;
for (v9_2 = 950; v9_2 <= 957; v9_2++) {
document.getElementsByName('o_' + v9_2)[1].checked=false;    
}

var v10;
for (v10 = 1000; v10 <= 1000; v10++) {
document.getElementsByName('o_' + v10)[1].checked=false;    
}

}

    if (a=='Annetaan lainaan') {
        b.style.display='none';
        c.style.display='none';
        d.style.display='block';
        e.style.display='none';
        f.style.display='none';
        g.style.display='none';
        h.style.display='none';
        i.style.display='none';
        j.style.display='none';
        k.style.display='none';
        l.style.display='none';
        m.style.display='none';
        n.style.display='none';

var v0;
for (v0 = 0; v0 <= 30; v0++) {
document.getElementsByName('o_' + v0)[1].checked=false;    
}

var v1;
for (v1 = 100; v1 <= 100; v1++) {
document.getElementsByName('o_' + v1)[1].checked=false;    
}


document.getElementsByName('o_200')[1].checked=true;  


var v3;
for (v3 = 300; v3 <= 300; v3++) {
document.getElementsByName('o_' + v3)[1].checked=false;    
}

var v4;
for (v4 = 400; v4 <= 405; v4++) {
document.getElementsByName('o_' + v4)[1].checked=false;    
}

var v4_2;
for (v4_2 = 450; v4_2 <= 457; v4_2++) {
document.getElementsByName('o_' + v4_2)[1].checked=false;    
}

var v5;
for (v5 = 500; v5 <= 500; v5++) {
document.getElementsByName('o_' + v5)[1].checked=false;    
}

var v6;
for (v6 = 600; v6 <= 600; v6++) {
document.getElementsByName('o_' + v6)[1].checked=false;    
}

var v7;
for (v7 = 700; v7 <= 700; v7++) {
document.getElementsByName('o_' + v7)[1].checked=false;    
}

var v8;
for (v8 = 800; v8 <= 800; v8++) {
document.getElementsByName('o_' + v8)[1].checked=false;    
}

var v9;
for (v9 = 900; v9 <= 905; v9++) {
document.getElementsByName('o_' + v9)[1].checked=false;    
}

var v9_2;
for (v9_2 = 950; v9_2 <= 957; v9_2++) {
document.getElementsByName('o_' + v9_2)[1].checked=false;    
}

var v10;
for (v10 = 1000; v10 <= 1000; v10++) {
document.getElementsByName('o_' + v10)[1].checked=false;    

}

}

    if (a=='Annetaan ruokaa') {
        b.style.display='none';
        c.style.display='none';
        d.style.display='none';
        e.style.display='block';
        f.style.display='none';
        g.style.display='none';
        h.style.display='none';
        i.style.display='none';
        j.style.display='none';
        k.style.display='none';
        l.style.display='none';
        m.style.display='none';
        n.style.display='none';
var v0;
for (v0 = 0; v0 <= 30; v0++) {
document.getElementsByName('o_' + v0)[1].checked=false;    
}

var v1;
for (v1 = 100; v1 <= 100; v1++) {
document.getElementsByName('o_' + v1)[1].checked=false;    
}

var v2;
for (v2 = 200; v2 <= 200; v2++) {
document.getElementsByName('o_' + v2)[1].checked=false;    
}


document.getElementsByName('o_300')[1].checked=true;  


var v4;
for (v4 = 400; v4 <= 405; v4++) {
document.getElementsByName('o_' + v4)[1].checked=false;    
}

var v4_2;
for (v4_2 = 450; v4_2 <= 457; v4_2++) {
document.getElementsByName('o_' + v4_2)[1].checked=false;    
}

var v5;
for (v5 = 500; v5 <= 500; v5++) {
document.getElementsByName('o_' + v5)[1].checked=false;    
}

var v6;
for (v6 = 600; v6 <= 600; v6++) {
document.getElementsByName('o_' + v6)[1].checked=false;    
}

var v7;
for (v7 = 700; v7 <= 700; v7++) {
document.getElementsByName('o_' + v7)[1].checked=false;    
}

var v8;
for (v8 = 800; v8 <= 800; v8++) {
document.getElementsByName('o_' + v8)[1].checked=false;    
}

var v9;
for (v9 = 900; v9 <= 905; v9++) {
document.getElementsByName('o_' + v9)[1].checked=false;    
}

var v9_2;
for (v9_2 = 950; v9_2 <= 957; v9_2++) {
document.getElementsByName('o_' + v9_2)[1].checked=false;    
}

var v10;
for (v10 = 1000; v10 <= 1000; v10++) {
document.getElementsByName('o_' + v10)[1].checked=false;    
}

}

    if (a=='Annetaan tavaroita') {
        b.style.display='none';
        c.style.display='none';
        d.style.display='none';
        e.style.display='none';
        f.style.display='block';
        g.style.display='none';
        h.style.display='none';
        i.style.display='none';
        j.style.display='none';
        k.style.display='none';
        l.style.display='none';
        m.style.display='none';
        n.style.display='none';

var v0;
for (v0 = 0; v0 <= 30; v0++) {
document.getElementsByName('o_' + v0)[1].checked=false;    
}

var v1;
for (v1 = 100; v1 <= 100; v1++) {
document.getElementsByName('o_' + v1)[1].checked=false;    
}

var v2;
for (v2 = 200; v2 <= 200; v2++) {
document.getElementsByName('o_' + v2)[1].checked=false;    
}

var v3;
for (v3 = 300; v3 <= 300; v3++) {
document.getElementsByName('o_' + v3)[1].checked=false;    
}


document.getElementsByName('o_400')[1].checked=true;  


var v4_2;
for (v4_2 = 450; v4_2 <= 457; v4_2++) {
document.getElementsByName('o_' + v4_2)[1].checked=false;    
}

var v5;
for (v5 = 500; v5 <= 500; v5++) {
document.getElementsByName('o_' + v5)[1].checked=false;    
}

var v6;
for (v6 = 600; v6 <= 600; v6++) {
document.getElementsByName('o_' + v6)[1].checked=false;    
}

var v7;
for (v7 = 700; v7 <= 700; v7++) {
document.getElementsByName('o_' + v7)[1].checked=false;    
}

var v8;
for (v8 = 800; v8 <= 800; v8++) {
document.getElementsByName('o_' + v8)[1].checked=false;    
}

var v9;
for (v9 = 900; v9 <= 905; v9++) {
document.getElementsByName('o_' + v9)[1].checked=false;    
}

var v9_2;
for (v9_2 = 950; v9_2 <= 957; v9_2++) {
document.getElementsByName('o_' + v9_2)[1].checked=false;    
}

var v10;
for (v10 = 1000; v10 <= 1000; v10++) {
document.getElementsByName('o_' + v10)[1].checked=false;    
}

}

    if (a=='Annetaan tekemistä') {
        b.style.display='none';
        c.style.display='none';
        d.style.display='none';
        e.style.display='none';
        f.style.display='none';
        g.style.display='block';
        h.style.display='none';
        i.style.display='none';
        j.style.display='none';
        k.style.display='none';
        l.style.display='none';
        m.style.display='none';
        n.style.display='none';
var v0;
for (v0 = 0; v0 <= 30; v0++) {
document.getElementsByName('o_' + v0)[1].checked=false;    
}

var v1;
for (v1 = 100; v1 <= 100; v1++) {
document.getElementsByName('o_' + v1)[1].checked=false;    
}

var v2;
for (v2 = 200; v2 <= 200; v2++) {
document.getElementsByName('o_' + v2)[1].checked=false;    
}

var v3;
for (v3 = 300; v3 <= 300; v3++) {
document.getElementsByName('o_' + v3)[1].checked=false;    
}

var v4;
for (v4 = 400; v4 <= 405; v4++) {
document.getElementsByName('o_' + v4)[1].checked=false;    
}


document.getElementsByName('o_450')[1].checked=true;  


var v5;
for (v5 = 500; v5 <= 500; v5++) {
document.getElementsByName('o_' + v5)[1].checked=false;    
}

var v6;
for (v6 = 600; v6 <= 600; v6++) {
document.getElementsByName('o_' + v6)[1].checked=false;    
}

var v7;
for (v7 = 700; v7 <= 700; v7++) {
document.getElementsByName('o_' + v7)[1].checked=false;    
}

var v8;
for (v8 = 800; v8 <= 800; v8++) {
document.getElementsByName('o_' + v8)[1].checked=false;    
}

var v9;
for (v9 = 900; v9 <= 905; v9++) {
document.getElementsByName('o_' + v9)[1].checked=false;    
}

var v9_2;
for (v9_2 = 950; v9_2 <= 957; v9_2++) {
document.getElementsByName('o_' + v9_2)[1].checked=false;    
}

var v10;
for (v10 = 1000; v10 <= 1000; v10++) {
document.getElementsByName('o_' + v10)[1].checked=false;    
}


}

    if (a=='Muut annetaan') {
        b.style.display='none';
        c.style.display='none';
        d.style.display='none';
        e.style.display='none';
        f.style.display='none';
        g.style.display='none';
        h.style.display='block';
        i.style.display='none';
        j.style.display='none';
        k.style.display='none';
        l.style.display='none';
        m.style.display='none';
        n.style.display='none';

var v0;
for (v0 = 0; v0 <= 30; v0++) {
document.getElementsByName('o_' + v0)[1].checked=false;    
}

var v1;
for (v1 = 100; v1 <= 100; v1++) {
document.getElementsByName('o_' + v1)[1].checked=false;    
}

var v2;
for (v2 = 200; v2 <= 200; v2++) {
document.getElementsByName('o_' + v2)[1].checked=false;    
}

var v3;
for (v3 = 300; v3 <= 300; v3++) {
document.getElementsByName('o_' + v3)[1].checked=false;    
}

var v4;
for (v4 = 400; v4 <= 405; v4++) {
document.getElementsByName('o_' + v4)[1].checked=false;    
}

var v4_2;
for (v4_2 = 450; v4_2 <= 457; v4_2++) {
document.getElementsByName('o_' + v4_2)[1].checked=false;    
}


document.getElementsByName('o_500')[1].checked=true;  


var v6;
for (v6 = 600; v6 <= 600; v6++) {
document.getElementsByName('o_' + v6)[1].checked=false;    
}

var v7;
for (v7 = 700; v7 <= 700; v7++) {
document.getElementsByName('o_' + v7)[1].checked=false;    
}

var v8;
for (v8 = 800; v8 <= 800; v8++) {
document.getElementsByName('o_' + v8)[1].checked=false;    
}

var v9;
for (v9 = 900; v9 <= 905; v9++) {
document.getElementsByName('o_' + v9)[1].checked=false;    
}

var v9_2;
for (v9_2 = 950; v9_2 <= 957; v9_2++) {
document.getElementsByName('o_' + v9_2)[1].checked=false;    
}

var v10;
for (v10 = 1000; v10 <= 1000; v10++) {
document.getElementsByName('o_' + v10)[1].checked=false;    
}

}

    if (a=='Pyydetään apua') {
        b.style.display='none';
        c.style.display='none';
        d.style.display='none';
        e.style.display='none';
        f.style.display='none';
        g.style.display='none';
        h.style.display='none';
        i.style.display='block';
        j.style.display='none';
        k.style.display='none';
        l.style.display='none';
        m.style.display='none';
        n.style.display='none';

var v0;
for (v0 = 0; v0 <= 30; v0++) {
document.getElementsByName('o_' + v0)[1].checked=false;    
}

var v1;
for (v1 = 100; v1 <= 100; v1++) {
document.getElementsByName('o_' + v1)[1].checked=false;    
}

var v2;
for (v2 = 200; v2 <= 200; v2++) {
document.getElementsByName('o_' + v2)[1].checked=false;    
}

var v3;
for (v3 = 300; v3 <= 300; v3++) {
document.getElementsByName('o_' + v3)[1].checked=false;    
}

var v4;
for (v4 = 400; v4 <= 405; v4++) {
document.getElementsByName('o_' + v4)[1].checked=false;    
}

var v4_2;
for (v4_2 = 450; v4_2 <= 457; v4_2++) {
document.getElementsByName('o_' + v4_2)[1].checked=false;    
}

var v5;
for (v5 = 500; v5 <= 500; v5++) {
document.getElementsByName('o_' + v5)[1].checked=false;    
}


document.getElementsByName('o_600')[1].checked=true;  


var v7;
for (v7 = 700; v7 <= 700; v7++) {
document.getElementsByName('o_' + v7)[1].checked=false;    
}

var v8;
for (v8 = 800; v8 <= 800; v8++) {
document.getElementsByName('o_' + v8)[1].checked=false;    
}

var v9;
for (v9 = 900; v9 <= 905; v9++) {
document.getElementsByName('o_' + v9)[1].checked=false;    
}

var v9_2;
for (v9_2 = 950; v9_2 <= 957; v9_2++) {
document.getElementsByName('o_' + v9_2)[1].checked=false;    
}

var v10;
for (v10 = 1000; v10 <= 1000; v10++) {
document.getElementsByName('o_' + v10)[1].checked=false;    
}

}

    if (a=='Pyydetään lainaan') {
        b.style.display='none';
        c.style.display='none';
        d.style.display='none';
        e.style.display='none';
        f.style.display='none';
        g.style.display='none';
        h.style.display='none';
        i.style.display='none';
        j.style.display='block';
        k.style.display='none';
        l.style.display='none';
        m.style.display='none';
        n.style.display='none';

var v0;
for (v0 = 0; v0 <= 30; v0++) {
document.getElementsByName('o_' + v0)[1].checked=false;    
}

var v1;
for (v1 = 100; v1 <= 100; v1++) {
document.getElementsByName('o_' + v1)[1].checked=false;    
}

var v2;
for (v2 = 200; v2 <= 200; v2++) {
document.getElementsByName('o_' + v2)[1].checked=false;    
}

var v3;
for (v3 = 300; v3 <= 300; v3++) {
document.getElementsByName('o_' + v3)[1].checked=false;    
}

var v4;
for (v4 = 400; v4 <= 405; v4++) {
document.getElementsByName('o_' + v4)[1].checked=false;    
}

var v4_2;
for (v4_2 = 450; v4_2 <= 457; v4_2++) {
document.getElementsByName('o_' + v4_2)[1].checked=false;    
}

var v5;
for (v5 = 500; v5 <= 500; v5++) {
document.getElementsByName('o_' + v5)[1].checked=false;    
}

var v6;
for (v6 = 600; v6 <= 600; v6++) {
document.getElementsByName('o_' + v6)[1].checked=false;    
}


document.getElementsByName('o_700')[1].checked=true;  


var v8;
for (v8 = 800; v8 <= 800; v8++) {
document.getElementsByName('o_' + v8)[1].checked=false;    
}

var v9;
for (v9 = 900; v9 <= 905; v9++) {
document.getElementsByName('o_' + v9)[1].checked=false;    
}

var v9_2;
for (v9_2 = 950; v9_2 <= 957; v9_2++) {
document.getElementsByName('o_' + v9_2)[1].checked=false;    
}

var v10;
for (v10 = 1000; v10 <= 1000; v10++) {
document.getElementsByName('o_' + v10)[1].checked=false;    
}

}

    if (a=='Pyydetään ruokaa') {
        b.style.display='none';
        c.style.display='none';
        d.style.display='none';
        e.style.display='none';
        f.style.display='none';
        g.style.display='none';
        h.style.display='none';
        i.style.display='none';
        j.style.display='none';
        k.style.display='block';
        l.style.display='none';
        m.style.display='none';
        n.style.display='none';

var v0;
for (v0 = 0; v0 <= 30; v0++) {
document.getElementsByName('o_' + v0)[1].checked=false;    
}

var v1;
for (v1 = 100; v1 <= 100; v1++) {
document.getElementsByName('o_' + v1)[1].checked=false;    
}

var v2;
for (v2 = 200; v2 <= 200; v2++) {
document.getElementsByName('o_' + v2)[1].checked=false;    
}

var v3;
for (v3 = 300; v3 <= 300; v3++) {
document.getElementsByName('o_' + v3)[1].checked=false;    
}

var v4;
for (v4 = 400; v4 <= 405; v4++) {
document.getElementsByName('o_' + v4)[1].checked=false;    
}

var v4_2;
for (v4_2 = 450; v4_2 <= 457; v4_2++) {
document.getElementsByName('o_' + v4_2)[1].checked=false;    
}

var v5;
for (v5 = 500; v5 <= 500; v5++) {
document.getElementsByName('o_' + v5)[1].checked=false;    
}

var v6;
for (v6 = 600; v6 <= 600; v6++) {
document.getElementsByName('o_' + v6)[1].checked=false;    
}

var v7;
for (v7 = 700; v7 <= 700; v7++) {
document.getElementsByName('o_' + v7)[1].checked=false;    
}


document.getElementsByName('o_800')[1].checked=true;  


var v9;
for (v9 = 900; v9 <= 905; v9++) {
document.getElementsByName('o_' + v9)[1].checked=false;    
}

var v9_2;
for (v9_2 = 950; v9_2 <= 957; v9_2++) {
document.getElementsByName('o_' + v9_2)[1].checked=false;    
}

var v10;
for (v10 = 1000; v10 <= 1000; v10++) {
document.getElementsByName('o_' + v10)[1].checked=false;    
}

}

    if (a=='Pyydetään tavaroita') {
        b.style.display='none';
        c.style.display='none';
        d.style.display='none';
        e.style.display='none';
        f.style.display='none';
        g.style.display='none';
        h.style.display='none';
        i.style.display='none';
        j.style.display='none';
        k.style.display='none';
        l.style.display='block';
        m.style.display='none';
        n.style.display='none';

var v0;
for (v0 = 0; v0 <= 30; v0++) {
document.getElementsByName('o_' + v0)[1].checked=false;    
}

var v1;
for (v1 = 100; v1 <= 100; v1++) {
document.getElementsByName('o_' + v1)[1].checked=false;    
}

var v2;
for (v2 = 200; v2 <= 200; v2++) {
document.getElementsByName('o_' + v2)[1].checked=false;    
}

var v3;
for (v3 = 300; v3 <= 300; v3++) {
document.getElementsByName('o_' + v3)[1].checked=false;    
}

var v4;
for (v4 = 400; v4 <= 405; v4++) {
document.getElementsByName('o_' + v4)[1].checked=false;    
}

var v4_2;
for (v4_2 = 450; v4_2 <= 457; v4_2++) {
document.getElementsByName('o_' + v4_2)[1].checked=false;    
}

var v5;
for (v5 = 500; v5 <= 500; v5++) {
document.getElementsByName('o_' + v5)[1].checked=false;    
}

var v6;
for (v6 = 600; v6 <= 600; v6++) {
document.getElementsByName('o_' + v6)[1].checked=false;    
}

var v7;
for (v7 = 700; v7 <= 700; v7++) {
document.getElementsByName('o_' + v7)[1].checked=false;    
}

var v8;
for (v8 = 800; v8 <= 800; v8++) {
document.getElementsByName('o_' + v8)[1].checked=false;    
}


document.getElementsByName('o_900')[1].checked=true;  


var v9_2;
for (v9_2 = 950; v9_2 <= 957; v9_2++) {
document.getElementsByName('o_' + v9_2)[1].checked=false;    
}

var v10;
for (v10 = 1000; v10 <= 1000; v10++) {
document.getElementsByName('o_' + v10)[1].checked=false;    
}

}

    if (a=='Pyydetään tekemistä') {
        b.style.display='none';
        c.style.display='none';
        d.style.display='none';
        e.style.display='none';
        f.style.display='none';
        g.style.display='none';
        h.style.display='none';
        i.style.display='none';
        j.style.display='none';
        k.style.display='none';
        l.style.display='none';
        m.style.display='block';
        n.style.display='none';

var v0;
for (v0 = 0; v0 <= 30; v0++) {
document.getElementsByName('o_' + v0)[1].checked=false;    
}

var v1;
for (v1 = 100; v1 <= 100; v1++) {
document.getElementsByName('o_' + v1)[1].checked=false;    
}

var v2;
for (v2 = 200; v2 <= 200; v2++) {
document.getElementsByName('o_' + v2)[1].checked=false;    
}

var v3;
for (v3 = 300; v3 <= 300; v3++) {
document.getElementsByName('o_' + v3)[1].checked=false;    
}

var v4;
for (v4 = 400; v4 <= 405; v4++) {
document.getElementsByName('o_' + v4)[1].checked=false;    
}

var v4_2;
for (v4_2 = 450; v4_2 <= 457; v4_2++) {
document.getElementsByName('o_' + v4_2)[1].checked=false;    
}

var v5;
for (v5 = 500; v5 <= 500; v5++) {
document.getElementsByName('o_' + v5)[1].checked=false;    
}

var v6;
for (v6 = 600; v6 <= 600; v6++) {
document.getElementsByName('o_' + v6)[1].checked=false;    
}

var v7;
for (v7 = 700; v7 <= 700; v7++) {
document.getElementsByName('o_' + v7)[1].checked=false;    
}

var v8;
for (v8 = 800; v8 <= 800; v8++) {
document.getElementsByName('o_' + v8)[1].checked=false;    
}

var v9;
for (v9 = 900; v9 <= 905; v9++) {
document.getElementsByName('o_' + v9)[1].checked=false;    
}



document.getElementsByName('o_950')[1].checked=true;  


var v10;
for (v10 = 1000; v10 <= 1000; v10++) {
document.getElementsByName('o_' + v10)[1].checked=false;    
}

}

    if (a=='Muut pyydetään') {
        b.style.display='none';
        c.style.display='none';
        d.style.display='none';
        e.style.display='none';
        f.style.display='none';
        g.style.display='none';
        h.style.display='none';
        i.style.display='none';
        j.style.display='none';
        k.style.display='none';
        l.style.display='none';
        m.style.display='none';
        n.style.display='block';

var v0;
for (v0 = 0; v0 <= 30; v0++) {
document.getElementsByName('o_' + v0)[1].checked=false;    
}

var v1;
for (v1 = 100; v1 <= 100; v1++) {
document.getElementsByName('o_' + v1)[1].checked=false;    
}

var v2;
for (v2 = 200; v2 <= 200; v2++) {
document.getElementsByName('o_' + v2)[1].checked=false;    
}

var v3;
for (v3 = 300; v3 <= 300; v3++) {
document.getElementsByName('o_' + v3)[1].checked=false;    
}

var v4;
for (v4 = 400; v4 <= 405; v4++) {
document.getElementsByName('o_' + v4)[1].checked=false;    
}

var v4_2;
for (v4_2 = 450; v4_2 <= 457; v4_2++) {
document.getElementsByName('o_' + v4_2)[1].checked=false;    
}

var v5;
for (v5 = 500; v5 <= 500; v5++) {
document.getElementsByName('o_' + v5)[1].checked=false;    
}

var v6;
for (v6 = 600; v6 <= 600; v6++) {
document.getElementsByName('o_' + v6)[1].checked=false;    
}

var v7;
for (v7 = 700; v7 <= 700; v7++) {
document.getElementsByName('o_' + v7)[1].checked=false;    
}

var v8;
for (v8 = 800; v8 <= 800; v8++) {
document.getElementsByName('o_' + v8)[1].checked=false;    
}

var v9;
for (v9 = 900; v9 <= 905; v9++) {
document.getElementsByName('o_' + v9)[1].checked=false;    
}

var v9_2;
for (v9_2 = 950; v9_2 <= 957; v9_2++) {
document.getElementsByName('o_' + v9_2)[1].checked=false;    
}


document.getElementsByName('o_1000')[1].checked=true;  


}
     
}


/* Kun kun klikkaa "Kaikki"-checkboxia,  
samaan yläosastoon lityvien 
kaikien muiden checkboxien valinta katoaa. 

Ja päinvastoin. Kun klikkaat jotain muuta, 
samaan yläosastoon liittyvän 
"Kaikki"-checkboxin valinta katoaa. */

function hakuTapahtumatCheckboxKaikki() {

var t0;
for (t0 = 1; t0 <= 30; t0++) {
document.getElementsByName('o_' + t0)[1].checked=false;    
}

}

function hakuTapahtumatCheckboxKaikki_II() {
document.getElementsByName('o_0')[1].checked=false;
}


function hakuAnnetaanTavaroitaCheckboxKaikki() {

var t4;
for (t4 = 401; t4 <= 405; t4++) {
document.getElementsByName('o_' + t4)[1].checked=false;    
}

}

function hakuAnnetaanTavaroitaCheckboxKaikki_II() {
document.getElementsByName('o_400')[1].checked=false;
}

function hakuAnnetaanTekemistaCheckboxKaikki() {

var t4_2;
for (t4_2 = 451; t4_2 <= 457; t4_2++) {
document.getElementsByName('o_' + t4_2)[1].checked=false;    
}

}

function hakuAnnetaanTekemistaCheckboxKaikki_II() {
document.getElementsByName('o_450')[1].checked=false;
}

function hakuPyydetaanTavaroitaCheckboxKaikki() {

var t9;
for (t9 = 901; t9 <= 905; t9++) {
document.getElementsByName('o_' + t9)[1].checked=false;    
}

}

function hakuPyydetaanTavaroitaCheckboxKaikki_II() {
document.getElementsByName('o_900')[1].checked=false;
}

function hakuPyydetaanTekemistaCheckboxKaikki() {

var t9_2;
for (t9_2 = 951; t9_2 <= 957; t9_2++) {
document.getElementsByName('o_' + t9_2)[1].checked=false;    
}

}

function hakuPyydetaanTekemistaCheckboxKaikki_II() {
document.getElementsByName('o_950')[1].checked=false;
}



/* 
Lisää_ilmoitus ja muokkaa_tai_poista -sivujen elementtien piiloon–näkyväksi -hallintaa. 
*/

function tapahtumaKalenterit() {
    
    var x = document.getElementById('lisaa_ilmoitus_valikko').value;

    var b = document.getElementById('haku_osastot_tapahtumat');
    var c = document.getElementById('haku_osastot_annetaan_apua');
    var d = document.getElementById('haku_osastot_annetaan_lainaan');
    var e = document.getElementById('haku_osastot_annetaan_ruokaa');
    var f = document.getElementById('haku_osastot_annetaan_tavaroita');
    var g = document.getElementById('haku_osastot_annetaan_tekemista');
    var h = document.getElementById('haku_osastot_muut_annetaan');
    var i = document.getElementById('haku_osastot_pyydetaan_apua');
    var j = document.getElementById('haku_osastot_pyydetaan_lainaan');
    var k = document.getElementById('haku_osastot_pyydetaan_ruokaa');
    var l = document.getElementById('haku_osastot_pyydetaan_tavaroita');
    var m = document.getElementById('haku_osastot_pyydetaan_tekemista');
    var n = document.getElementById('haku_osastot_muut_pyydetaan');

    var y = document.getElementById('tapahtuma_kalenterit');
    var z = document.getElementById('lisaa_ilmoitus_avoinna');
    var avoinna_tyhjaa = document.getElementById('avoinna_sisalto');

    var alkaa_tyhjaa = document.getElementById('datepicker');
    var klo_I_tyhjaa = document.getElementById('alkaa_klo_I');
    var paattyy_tyhjaa = document.getElementById('datepicker_II');    
    var klo_II_tyhjaa = document.getElementById('paattyy_klo_II');

    if (x=='Tapahtumat') {
        b.style.display='block';
        c.style.display='none';
        d.style.display='none';
        e.style.display='none';
        f.style.display='none';
        g.style.display='none';
        h.style.display='none';
        i.style.display='none';
        j.style.display='none';
        k.style.display='none';
        l.style.display='none';
        m.style.display='none';
        n.style.display='none';

        y.style.display='inline';
        z.style.display='none';
        avoinna_tyhjaa.value='';

        document.getElementById('label_paikka').innerHTML = '*Paikka: ';
        document.getElementById('label_osoite').innerHTML = '*Katuosoite: ';        

var u2;
for (u2 = 401; u2 <= 405; u2++) {
document.getElementsByName('o_' + u2)[0].checked=false;    
}

var u3;
for (u3 = 451; u3 <= 457; u3++) {
document.getElementsByName('o_' + u3)[0].checked=false;    
}

var u4;
for (u4 = 901; u4 <= 905; u4++) {
document.getElementsByName('o_' + u4)[0].checked=false;    
}

var u5;
for (u5 = 951; u5 <= 957; u5++) {
document.getElementsByName('o_' + u5)[0].checked=false;    
}

} 

    else if (x=='Annetaan apua') {
        b.style.display='none';
        c.style.display='none';
        d.style.display='none';
        e.style.display='none';
        f.style.display='none';
        g.style.display='none';
        h.style.display='none';
        i.style.display='none';
        j.style.display='none';
        k.style.display='none';
        l.style.display='none';
        m.style.display='none';
        n.style.display='none';

        y.style.display='none';
        z.style.display='inline'; 

        document.getElementById('label_paikka').innerHTML = 'Paikka: ';
        document.getElementById('label_osoite').innerHTML = 'Katuosoite: ';

        alkaa_tyhjaa.value = '';
        klo_I_tyhjaa.value = '';
        paattyy_tyhjaa.value = '';
        klo_II_tyhjaa.value = '';

var u1;
for (u1 = 1; u1 <= 30; u1++) {
document.getElementsByName('o_' + u1)[0].checked=false;    
}

var u2;
for (u2 = 401; u2 <= 405; u2++) {
document.getElementsByName('o_' + u2)[0].checked=false;    
}

var u3;
for (u3 = 451; u3 <= 457; u3++) {
document.getElementsByName('o_' + u3)[0].checked=false;    
}

var u4;
for (u4 = 901; u4 <= 905; u4++) {
document.getElementsByName('o_' + u4)[0].checked=false;    
}

var u5;
for (u5 = 951; u5 <= 957; u5++) {
document.getElementsByName('o_' + u5)[0].checked=false;    
}

} 

        else if (x=='Annetaan lainaan') {
        b.style.display='none';
        c.style.display='none';
        d.style.display='none';
        e.style.display='none';
        f.style.display='none';
        g.style.display='none';
        h.style.display='none';
        i.style.display='none';
        j.style.display='none';
        k.style.display='none';
        l.style.display='none';
        m.style.display='none';
        n.style.display='none';

        y.style.display='none';
        z.style.display='inline';

        document.getElementById('label_paikka').innerHTML = 'Paikka: ';
        document.getElementById('label_osoite').innerHTML = 'Katuosoite: ';

        alkaa_tyhjaa.value = '';
        klo_I_tyhjaa.value = '';
        paattyy_tyhjaa.value = '';
        klo_II_tyhjaa.value = '';

var u1;
for (u1 = 1; u1 <= 30; u1++) {
document.getElementsByName('o_' + u1)[0].checked=false;    
}

var u2;
for (u2 = 401; u2 <= 405; u2++) {
document.getElementsByName('o_' + u2)[0].checked=false;    
}

var u3;
for (u3 = 451; u3 <= 457; u3++) {
document.getElementsByName('o_' + u3)[0].checked=false;    
}

var u4;
for (u4 = 901; u4 <= 905; u4++) {
document.getElementsByName('o_' + u4)[0].checked=false;    
}

var u5;
for (u5 = 951; u5 <= 957; u5++) {
document.getElementsByName('o_' + u5)[0].checked=false;    
}

} 

        else if (x=='Annetaan ruokaa') {
        b.style.display='none';
        c.style.display='none';
        d.style.display='none';
        e.style.display='none';
        f.style.display='none';
        g.style.display='none';
        h.style.display='none';
        i.style.display='none';
        j.style.display='none';
        k.style.display='none';
        l.style.display='none';
        m.style.display='none';
        n.style.display='none';

        y.style.display='none';
        z.style.display='inline';

        document.getElementById('label_paikka').innerHTML = 'Paikka: ';
        document.getElementById('label_osoite').innerHTML = 'Katuosoite: ';

        alkaa_tyhjaa.value = '';
        klo_I_tyhjaa.value = '';
        paattyy_tyhjaa.value = '';
        klo_II_tyhjaa.value = '';

var u1;
for (u1 = 1; u1 <= 30; u1++) {
document.getElementsByName('o_' + u1)[0].checked=false;    
}

var u2;
for (u2 = 401; u2 <= 405; u2++) {
document.getElementsByName('o_' + u2)[0].checked=false;    
}

var u3;
for (u3 = 451; u3 <= 457; u3++) {
document.getElementsByName('o_' + u3)[0].checked=false;    
}

var u4;
for (u4 = 901; u4 <= 905; u4++) {
document.getElementsByName('o_' + u4)[0].checked=false;    
}

var u5;
for (u5 = 951; u5 <= 957; u5++) {
document.getElementsByName('o_' + u5)[0].checked=false;    
}

} 

        else if (x=='Annetaan tavaroita') {
        b.style.display='none';
        c.style.display='none';
        d.style.display='none';
        e.style.display='none';
        f.style.display='block';
        g.style.display='none';
        h.style.display='none';
        i.style.display='none';
        j.style.display='none';
        k.style.display='none';
        l.style.display='none';
        m.style.display='none';
        n.style.display='none';

        y.style.display='none';
        z.style.display='inline';

        document.getElementById('label_paikka').innerHTML = 'Paikka: ';
        document.getElementById('label_osoite').innerHTML = 'Katuosoite: ';


        alkaa_tyhjaa.value = '';
        klo_I_tyhjaa.value = '';
        paattyy_tyhjaa.value = '';
        klo_II_tyhjaa.value = '';

var u1;
for (u1 = 1; u1 <= 30; u1++) {
document.getElementsByName('o_' + u1)[0].checked=false;    
}

var u3;
for (u3 = 451; u3 <= 457; u3++) {
document.getElementsByName('o_' + u3)[0].checked=false;    
}

var u4;
for (u4 = 901; u4 <= 905; u4++) {
document.getElementsByName('o_' + u4)[0].checked=false;    
}

var u5;
for (u5 = 951; u5 <= 957; u5++) {
document.getElementsByName('o_' + u5)[0].checked=false;    
}

} 

        else if (x=='Annetaan tekemistä') {
        b.style.display='none';
        c.style.display='none';
        d.style.display='none';
        e.style.display='none';
        f.style.display='none';
        g.style.display='block';
        h.style.display='none';
        i.style.display='none';
        j.style.display='none';
        k.style.display='none';
        l.style.display='none';
        m.style.display='none';
        n.style.display='none';

        y.style.display='none';
        z.style.display='inline';

        document.getElementById('label_paikka').innerHTML = 'Paikka: ';
        document.getElementById('label_osoite').innerHTML = 'Katuosoite: ';

        alkaa_tyhjaa.value = '';
        klo_I_tyhjaa.value = '';
        paattyy_tyhjaa.value = '';
        klo_II_tyhjaa.value = '';

var u1;
for (u1 = 1; u1 <= 30; u1++) {
document.getElementsByName('o_' + u1)[0].checked=false;    
}

var u2;
for (u2 = 401; u2 <= 405; u2++) {
document.getElementsByName('o_' + u2)[0].checked=false;    
}

var u4;
for (u4 = 901; u4 <= 905; u4++) {
document.getElementsByName('o_' + u4)[0].checked=false;    
}

var u5;
for (u5 = 951; u5 <= 957; u5++) {
document.getElementsByName('o_' + u5)[0].checked=false;    
}

    } 

        else if (x=='Muut annetaan') {
        b.style.display='none';
        c.style.display='none';
        d.style.display='none';
        e.style.display='none';
        f.style.display='none';
        g.style.display='none';
        h.style.display='none';
        i.style.display='none';
        j.style.display='none';
        k.style.display='none';
        l.style.display='none';
        m.style.display='none';
        n.style.display='none';

        y.style.display='none';
        z.style.display='inline';

        document.getElementById('label_paikka').innerHTML = 'Paikka: ';
        document.getElementById('label_osoite').innerHTML = 'Katuosoite: ';

        alkaa_tyhjaa.value = '';
        klo_I_tyhjaa.value = '';
        paattyy_tyhjaa.value = '';
        klo_II_tyhjaa.value = '';

var u1;
for (u1 = 1; u1 <= 30; u1++) {
document.getElementsByName('o_' + u1)[0].checked=false;    
}

var u2;
for (u2 = 401; u2 <= 405; u2++) {
document.getElementsByName('o_' + u2)[0].checked=false;    
}

var u3;
for (u3 = 451; u3 <= 457; u3++) {
document.getElementsByName('o_' + u3)[0].checked=false;    
}

var u4;
for (u4 = 901; u4 <= 905; u4++) {
document.getElementsByName('o_' + u4)[0].checked=false;    
}

var u5;
for (u5 = 951; u5 <= 957; u5++) {
document.getElementsByName('o_' + u5)[0].checked=false;    
}        
 
} 

        else if (x=='Pyydetään apua') {
        b.style.display='none';
        c.style.display='none';
        d.style.display='none';
        e.style.display='none';
        f.style.display='none';
        g.style.display='none';
        h.style.display='none';
        i.style.display='none';
        j.style.display='none';
        k.style.display='none';
        l.style.display='none';
        m.style.display='none';
        n.style.display='none';

        y.style.display='none';
        z.style.display='inline';

        document.getElementById('label_paikka').innerHTML = 'Paikka: ';
        document.getElementById('label_osoite').innerHTML = 'Katuosoite: ';

        alkaa_tyhjaa.value = '';
        klo_I_tyhjaa.value = '';
        paattyy_tyhjaa.value = '';
        klo_II_tyhjaa.value = '';

var u1;
for (u1 = 1; u1 <= 30; u1++) {
document.getElementsByName('o_' + u1)[0].checked=false;    
}

var u2;
for (u2 = 401; u2 <= 405; u2++) {
document.getElementsByName('o_' + u2)[0].checked=false;    
}

var u3;
for (u3 = 451; u3 <= 457; u3++) {
document.getElementsByName('o_' + u3)[0].checked=false;    
}

var u4;
for (u4 = 901; u4 <= 905; u4++) {
document.getElementsByName('o_' + u4)[0].checked=false;    
}

var u5;
for (u5 = 951; u5 <= 957; u5++) {
document.getElementsByName('o_' + u5)[0].checked=false;    
}

} 

        else if (x=='Pyydetään lainaan') {
        b.style.display='none';
        c.style.display='none';
        d.style.display='none';
        e.style.display='none';
        f.style.display='none';
        g.style.display='none';
        h.style.display='none';
        i.style.display='none';
        j.style.display='none';
        k.style.display='none';
        l.style.display='none';
        m.style.display='none';
        n.style.display='none';

        y.style.display='none';
        z.style.display='inline';

        document.getElementById('label_paikka').innerHTML = 'Paikka: ';
        document.getElementById('label_osoite').innerHTML = 'Katuosoite: ';

        alkaa_tyhjaa.value = '';
        klo_I_tyhjaa.value = '';
        paattyy_tyhjaa.value = '';
        klo_II_tyhjaa.value = '';

var u1;
for (u1 = 1; u1 <= 30; u1++) {
document.getElementsByName('o_' + u1)[0].checked=false;    
}

var u2;
for (u2 = 401; u2 <= 405; u2++) {
document.getElementsByName('o_' + u2)[0].checked=false;    
}

var u3;
for (u3 = 451; u3 <= 457; u3++) {
document.getElementsByName('o_' + u3)[0].checked=false;    
}

var u4;
for (u4 = 901; u4 <= 905; u4++) {
document.getElementsByName('o_' + u4)[0].checked=false;    
}

var u5;
for (u5 = 951; u5 <= 957; u5++) {
document.getElementsByName('o_' + u5)[0].checked=false;    
}

} 

        else if (x=='Pyydetään ruokaa') {
        b.style.display='none';
        c.style.display='none';
        d.style.display='none';
        e.style.display='none';
        f.style.display='none';
        g.style.display='none';
        h.style.display='none';
        i.style.display='none';
        j.style.display='none';
        k.style.display='none';
        l.style.display='none';
        m.style.display='none';
        n.style.display='none';

        y.style.display='none';
        z.style.display='inline';

        document.getElementById('label_paikka').innerHTML = 'Paikka: ';
        document.getElementById('label_osoite').innerHTML = 'Katuosoite: ';

        alkaa_tyhjaa.value = '';
        klo_I_tyhjaa.value = '';
        paattyy_tyhjaa.value = '';
        klo_II_tyhjaa.value = '';

var u1;
for (u1 = 1; u1 <= 30; u1++) {
document.getElementsByName('o_' + u1)[0].checked=false;    
}

var u2;
for (u2 = 401; u2 <= 405; u2++) {
document.getElementsByName('o_' + u2)[0].checked=false;    
}

var u3;
for (u3 = 451; u3 <= 457; u3++) {
document.getElementsByName('o_' + u3)[0].checked=false;    
}

var u4;
for (u4 = 901; u4 <= 905; u4++) {
document.getElementsByName('o_' + u4)[0].checked=false;    
}

var u5;
for (u5 = 951; u5 <= 957; u5++) {
document.getElementsByName('o_' + u5)[0].checked=false;    
}
 
} 

        else if (x=='Pyydetään tavaroita') {
        b.style.display='none';
        c.style.display='none';
        d.style.display='none';
        e.style.display='none';
        f.style.display='none';
        g.style.display='none';
        h.style.display='none';
        i.style.display='none';
        j.style.display='none';
        k.style.display='none';
        l.style.display='block';
        m.style.display='none';
        n.style.display='none';

        y.style.display='none';
        z.style.display='inline';

        document.getElementById('label_paikka').innerHTML = 'Paikka: ';
        document.getElementById('label_osoite').innerHTML = 'Katuosoite: ';

        alkaa_tyhjaa.value = '';
        klo_I_tyhjaa.value = '';
        paattyy_tyhjaa.value = '';
        klo_II_tyhjaa.value = '';        

var u1;
for (u1 = 1; u1 <= 30; u1++) {
document.getElementsByName('o_' + u1)[0].checked=false;    
}

var u2;
for (u2 = 401; u2 <= 405; u2++) {
document.getElementsByName('o_' + u2)[0].checked=false;    
}

var u3;
for (u3 = 451; u3 <= 457; u3++) {
document.getElementsByName('o_' + u3)[0].checked=false;    
}

var u5;
for (u5 = 951; u5 <= 957; u5++) {
document.getElementsByName('o_' + u5)[0].checked=false;    
}

    } 

        else if (x=='Pyydetään tekemistä') {
        b.style.display='none';
        c.style.display='none';
        d.style.display='none';
        e.style.display='none';
        f.style.display='none';
        g.style.display='none';
        h.style.display='none';
        i.style.display='none';
        j.style.display='none';
        k.style.display='none';
        l.style.display='none';
        m.style.display='block';
        n.style.display='none';

        y.style.display='none';
        z.style.display='inline';

        document.getElementById('label_paikka').innerHTML = 'Paikka: ';
        document.getElementById('label_osoite').innerHTML = 'Katuosoite: ';

        alkaa_tyhjaa.value = '';
        klo_I_tyhjaa.value = '';
        paattyy_tyhjaa.value = '';
        klo_II_tyhjaa.value = '';

var u1;
for (u1 = 1; u1 <= 30; u1++) {
document.getElementsByName('o_' + u1)[0].checked=false;    
}

var u2;
for (u2 = 401; u2 <= 405; u2++) {
document.getElementsByName('o_' + u2)[0].checked=false;    
}

var u3;
for (u3 = 451; u3 <= 457; u3++) {
document.getElementsByName('o_' + u3)[0].checked=false;    
}

var u4;
for (u4 = 901; u4 <= 905; u4++) {
document.getElementsByName('o_' + u4)[0].checked=false;    
}

} 

        else if (x=='Muut pyydetään') {
        b.style.display='none';
        c.style.display='none';
        d.style.display='none';
        e.style.display='none';
        f.style.display='none';
        g.style.display='none';
        h.style.display='none';
        i.style.display='none';
        j.style.display='none';
        k.style.display='none';
        l.style.display='none';
        m.style.display='none';
        n.style.display='none';

        y.style.display='none';
        z.style.display='inline';

        document.getElementById('label_paikka').innerHTML = 'Paikka: ';
        document.getElementById('label_osoite').innerHTML = 'Katuosoite: ';

        alkaa_tyhjaa.value = '';
        klo_I_tyhjaa.value = '';
        paattyy_tyhjaa.value = '';
        klo_II_tyhjaa.value = '';

var u1;
for (u1 = 1; u1 <= 30; u1++) {
document.getElementsByName('o_' + u1)[0].checked=false;    
}

var u2;
for (u2 = 401; u2 <= 405; u2++) {
document.getElementsByName('o_' + u2)[0].checked=false;    
}

var u3;
for (u3 = 451; u3 <= 457; u3++) {
document.getElementsByName('o_' + u3)[0].checked=false;    
}

var u4;
for (u4 = 901; u4 <= 905; u4++) {
document.getElementsByName('o_' + u4)[0].checked=false;    
}

var u5;
for (u5 = 951; u5 <= 957; u5++) {
document.getElementsByName('o_' + u5)[0].checked=false;    
}

} 

}

function avoinna_nakyy() {
    document.getElementById('lisaa_ilmoitus_avoinna').style.display = 'inline';
} 
