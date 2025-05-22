{% extends "base.mvc.php" %}

{% block title %} Home | NovaBalance  {% endblock %}

{% block body %}

{% include "home/banner.mvc.php" %}

<div class="wrapper">
        <div class="container">
          {% foreach ($content as $cont): %}
            <section id="<?= strtolower($cont['section_title']).'_'.$cont['section_id'] ?>">
              <?= $cont['content'] ?> 
            </section>
          {% endforeach; %}
        </div>
    </div>


    {% include "usluge/usluge-modal.php" %}

{% endblock %}
