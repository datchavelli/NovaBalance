{% extends "base.mvc.php" %}

{% block title %} New Product {% endblock %}

{% block body %}

<h1>Edit Product</h1>

<p><a href="/NovaBalance/products/{{ product['id'] }}/show">Cancel</a></p>

<form method="post" action="/NovaBalance/products/{{ product['id'] }}/update">
   {% include "products/form.mvc.php" %} 
</form>

{% endblock %}