{% extends "admin-base.mvc.php" %}

{% block title %} AdminPanel | NovaBalance  {% endblock %}

{% block body %}

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
     <!--begin::App Wrapper-->
     <div class="app-wrapper">
        <!--begin::Footer-->
        {% include "admin/nav.php" %}
        {% include "admin/aside.php" %}

        {% include "admin/app-main.mvc.php" %}

       {% include "admin/footer.php" %}
     </div>
     <!--end::App Wrapper-->

     {% include "admin/scripts.php" %}
</body>

{% endblock %}