{% extends "admin-base.mvc.php" %}

{% block title %} AdminPanel | NovaBalance  {% endblock %}

{% block body %}

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
     <!--begin::App Wrapper-->
     <div class="app-wrapper">
        <!--begin::Footer-->
        {% include "admin/nav.php" %}
        {% include "admin/aside.php" %}
        {% if ($page == "home"): %}
            {% include "admin/app-main.mvc.php" %}
        {% elseif ($page == "pages"): %}
            {% include "admin/pages.mvc.php" %}
        {% endif; %}

       {% include "admin/footer.php" %}
     </div>
     <!--end::App Wrapper-->

     {% include "admin/scripts.php" %}
</body>

{% endblock %}
