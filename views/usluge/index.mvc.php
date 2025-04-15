{% extends "base.mvc.php" %}

{% block title %} Home | NovaBalance  {% endblock %}

{% block body %}

{% include "home/banner.mvc.php" %}

<div class="wrapper">
        <div class="container">
            <?= $content ?>
        </div>
    </div>


    {% include "usluge/usluge-modal.php" %}

{% endblock %}
