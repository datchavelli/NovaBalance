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
        </div>
    </div>


    {% include "home/modal.mvc.php" %}

{% endblock %}