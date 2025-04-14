{% extends "base.mvc.php" %}

{% block title %} Home | NovaBalance  {% endblock %}

{% block body %}

{% include "home/banner.mvc.php" %}

<div class="wrapper">
        <div class="container">
            <div class="intro">
                <p>
                    Kao kreatori softvera, NovaBalance pruža sveobuhvatna rešenja koja omogućavaju preduzećima da unaprede svoje poslovne procese i ostvare veći uspeh na tržištu.
                    Naš centralni proizvod, <b><span class="logo-style nova">Nova</span><span class="logo-style forma">Forma</span></b> računovodstveni softver, je savremeno rešenje koje optimizuje sve računovodstvene aktivnosti, omogućavajući lako i brzo upravljanje finansijama, izveštajima i poreskim obavezama.
                </p>
            </div>
            <div class="intro">
                Docloop DMS (Documant Management System) i Arhivska knjiga
                <div class="logo">
                    <img src="">
                </div>
            </div>
            <div class="intro">
                <p>
                    Kao dugogodišnji partner kompanije Docloop iz Beograda, pružamo logističku i tehničku podršku pri implementaciji sistema MojDMS.
                    MojDMS je softver za automatizaciju radnih procesa koji omogućava digitalnu obradu, evidenciju, kontrolu, odobravanje i arhiviranje celokupne ulazne i izlazne dokumentacije jednog poslovnog sistema
                </p>
                <p>
                    Takođe, pomažemo u pripremi potrebne dokumentacije za dobijanje saglasnosti od strane Istorijskog Arhiva, što vam omogućava da pravovremeno i bez problema uskladite poslovanje sa svim zakonskim normama vezanim za Arhivsku knjigu.
                </p>
            </div>
            <div class="intro">
              <p>Linkovi:</p>
              <div class="d-flex gap-3 flex-wrap">
                <a href="https://www.mojdms.rs" target="_blank" class="text-center text-decoration-none">
                  <img src="https://www.mojdms.rs/assets/logo-moj-dms.svg" alt="DMS" class="img-fluid mb-2" style="width: 160px; height: 40px;">
                  <!-- <div>DMS Sajt</div> -->
                </a>
                <a href="https://docloop.rs" target="_blank" class="text-center text-decoration-none">
                  <img src="assets/img/logos/dcloop-icon.png" alt="Docloop" class="img-fluid mb-2" style="width: 80px; height: 40px;">
                  <!-- <div>Docloop sajt</div> -->
                </a>
                <a href="https://www.moj-eracun.rs/cms/" target="_blank" class="text-center text-decoration-none">
                  <img src="https://www.moj-eracun.rs/Content/erdesign/images/e_racun_logo_black.png" alt="Moj eRačun" class="img-fluid mb-2" style="width: 120px; height: 40px;">
                  <!-- <div>Moj eRačun sajt</div> -->
                </a>
              </div>
            </div>

            <div class="intro">
                <p>
                    Konsultantske Usluge za Optimizaciju Poslovanja i Efikasnije Upravljanje
                </p>
                <p>
                    Pomažemo menadžerima, nabavnim i prodajnim timovima da poboljšaju operativnu efikasnost, smanje troškove i unaprede organizaciju poslovnih procesa kroz sledeće usluge:
                </p>
                <p>
                    Analiza i optimizacija poslovnih procesa – pojednostavljenje administrativnih procedura i optimizacija svakodnevnih operacija.
                    Bolja kontrola resursa i troškova – jasno definisani procesi u svrhu smanjenja grešaka i veće uštede.
                </p>
                <p>
                    Strateško planiranje i dokumentacija – Kreiranje preciznih uputstava i standardizovanih procedura za bolje upravljanje poslovanjem.
                </p>
                <p>
                    <a href="/NovaBalance/#contact" >Kontaktirajte nas</a> i saznajte kako možemo da vam pomognemo da unapredite vaše poslovanje.
                </p>
                <h3>
                    Stručne obuke iz oblasti računovodstva – prilagođene potrebama vašeg poslovanja
                </h3>
                <p>
                    Efikasno računovodstvo je temelj svakog uspešnog biznisa.
                    Bilo da želite da unapredite znanja svog finansijskog tima,
                    obučite menadžment za donošenje informisanih odluka ili osposobite zaposlene za vođenje ključnih računovodstvenih procesa, naše obuke i kursevi ,
                    iskrojeni po vašoj meri, nude rešenja prilagođena vašim potrebama.
                </p>
                <p>
                    Naše personalizovane obuke, kreirane u saradnji sa računovodstvenim biroom EG Centar omogućavaju vašem timu da stekne praktična znanja iz oblasti:
                </p>
                <ul class="list">
                    <li>Osnova računovodstva i knjigovodstva – razumevanje bilansa stanja, prihoda i rashoda</li>
                    <li>Robnog i materijalnog poslovanja – upravljanje zalihama i vođenje skladišnih kartica</li>
                    <li>Fiskalizacije i poreskih obaveza – PDV sistem i zakonski okvir poslovanja</li>
                    <li>Obračuna zarada i doprinosa – tačan i efikasan obračun plata u skladu sa propisima</li>
                    <li>Finansijskog izveštavanja i analize – kreiranje i interpretacija ključnih poslovnih pokazatelja</li>
                </ul>
                <h3> Zašto odabrati naše obuke? </h3>
                <ul class="list">
                    <li>Stručnost i relevantnost – znanje zasnovano na realnim primerima i aktuelnim propisima</li>
                    <li>Fleksibilna realizacija – online, uživo u vašim prostorijama ili na našoj lokaciji</li>
                    <li>Prilagođen sadržaj – od osnovnih do naprednih nivoa, skrojenih prema vašem sektoru</li>
                    <li>Praktična primena – odmah primenljive veštine koje poboljšavaju poslovne procese</li>
                </ul>
                <p>Kombinacijom teorijskih znanja i praktičnih primera iz računovodstvene prakse,
                    obuke osiguravaju brzo usvajanje ključnih veština i bolje donošenje finansijskih odluka u vašem preduzeću.
                </p>
                <button id="usluge-query" class="btn btn-primary">Zatražite ponudu</button>
                <div class="intro">
                    <a href="/NovaBalance/#contact">Kontaktirajte nas</a> da saznate više o tome kako NovaBalance može doprineti optimizaciji vaših poslovnih procesa i digitalnoj transformaciji vašeg preduzeća!
                </div>
            </div>
        </div>
    </div>


    {% include "usluge/usluge-modal.php" %}

{% endblock %}
