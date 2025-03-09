{% extends "base.mvc.php" %}

{% block title %} Home | NovaBalance  {% endblock %}

{% block body %}

{% include "home/banner.mvc.php" %}

<div class="wrapper">
        <div class="container">
            <div class="intro">
                <!-- <h2>Nova forma računovodstva</h2> -->
                <p>Znate li razliku između knjigovodstva i računovodstva?
                    Knjigovodstvo evidentira, a računovodstvo analizira i planira.
                    <b><span class="logo-style nova">Nova</span><span class="logo-style forma">Forma</span></b> softver ne samo da beleži sve vaše transakcije, već automatski analizira i generiše
                    finansijske izveštaje. Bez ručnog unosa, bez grešaka, bez kašnjenja.</p>

                <p>Automatizujte učitavanje dokumenata, obradu podataka i kreiranje izveštaja uz naš softver.
                    Poreske prijave, nansijski izveštaji i obaveze prema Republici Srbiji nikada nisu bili lakši.
                    Sve što vam treba je na par klikova.</p>

                <p><b><span class="logo-style nova">Nova</span><span class="logo-style forma">Forma</span></b> je web aplikacija koja omogućava pristup vašem računovodstvu bilo kada i bilo gde.
                Sve što vam treba je internet pretraživač - bez instalacija i komplikacija.</p>
            </div>
            <div class="screenshots">
                <div class="screenshot">Screenshot 1</div>
                <div class="screenshot">Screenshot 2</div>
                <div class="screenshot">Screenshot 3</div>
            </div>
            <div class="intro o-nama container" id="about">
                <h4>Nova<span class="logo-style forma">Balance</span> tim: Vaš partner u digitalnoj revoluciji računovodstva.</h4>
                <div class="row">
                    <div class="col-sm">
                        <p>Više od 20 godina iskustva u rešavanju računovodstvenih problema pomoću softverskih alata
                            učinilo nas je pouzdanim partnerom mnogim kompanijama. Naša misija je jasna -
                            automatizacija računovodstvenih procesa i upravljanje dokumentima, njihovo elektronsko
                            arhiviranje uz pomoć integracije sa DoCloop DMS sistemom, kako biste imali više vremena za
                            ono što je zaista važno. Vaše poslovanje raste uz naše inovativne alate.</p>
                    </div>
                    <div class="col-sm">
                        <img alt='superhero' class="img-fluid" src="assets/img/superheroN.webp">
                    </div>
                </div>
            </div>
            <div class="screenshots">
                <div class="screenshot">Screenshot 1</div>
                <div class="screenshot">Screenshot 2</div>
                <div class="screenshot">Screenshot 3</div>
            </div>
            <div class="funkcionalnosti">
                <h4>Saznajte više o funkcionalnostima</h4>
                <p>
                    Otkrijte kako automatizacija i pametna rešenja
                    pojednostavljuju vaše računovodstvo. Automatizacija u <b><span class="logo-style nova">Nova</span><span class="logo-style forma">Forma</span></b> softveru znači da više ne
                    morate provoditi sate ručno unoseći podatke ili proveravajući da li su sve stavke tačne.
                    Naš sistem automatski prepoznaje i obrađuje dokumente, generiše izveštaje i omogućava vam
                    da se posvetite važnijim aspektima poslovanja. Upoznajte se sa svim pametnim funkcijama koje
                    vam olakšavaju rad.
                </p>
            </div>
            {% include "home/bannerFunc.mvc.php" %}
            <br>
            <div class="resenja container">
                <h4>Rešenja</h4>
                <div class="row">
                    <div class="col-sm">
                        <p><b>Više vremena za poslovanje, manje za papire.</b></p>
                        <img alt="business" class="img-fluid" src="assets/img/clipartPaperwork.webp">
                    </div>
                    <div class="col-sm">
                        <p>Bez obzira da li ste preduzetnik, knjigovođa ili vlasnik firme, <b><span class="logo-style nova">Nova</span><span class="logo-style forma">Forma</span></b> pojednostavljuje
                            vođenje knjiga, upravljanje troškovima i analizu finansija. Brza obrada dokumentacije i
                            automatska priprema poreskih obrazaca olakšavaju ispunjavanje svih zakonskih obaveza.
                            Integracija sa DoCloop DMS sistemom omogućava brzu i sigurnu elektronsku razmenu
                            dokumenata.</p>
                    </div>
                </div>
            </div>
            {% include "home/contact.mvc.php" %}
        </div>
    </div>


    {% include "home/modal.mvc.php" %}

{% endblock %}