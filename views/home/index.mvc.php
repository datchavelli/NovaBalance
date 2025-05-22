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
    <br>
    {% include "home/bannerFunc.mvc.php" %}
    {% include "home/contact.mvc.php" %}
    {% include "home/newsletter.php" %}
</div>


    {% include "home/func-modal.mvc.php" %}
    {% include "notification-modals/contact-form-modal.php" %}

{% endblock %}
