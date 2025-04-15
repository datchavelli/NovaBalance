{% extends "base.mvc.php" %}

{% block title %} Home | NovaBalance  {% endblock %}

{% block body %}

{% include "home/banner.mvc.php" %}

<div class="wrapper">
    <div class="container">
        <?= $content ?>
    </div>
    <br>
    {% include "home/bannerFunc.mvc.php" %}
    {% include "home/contact.mvc.php" %}
    {% include "home/newsletter.php" %}
</div>


    {% include "home/func-modal.mvc.php" %}
    {% include "notification-modals/contact-form-modal.php" %}

{% endblock %}
