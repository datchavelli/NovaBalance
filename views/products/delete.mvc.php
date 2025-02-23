{% extends "base.mvc.php" %}

{% block title %} New Product {% endblock %}

{% block body %}

<h1>Delete Product</h1>

<p><a href="/products/{{ product['id'] }}/show">Cancel</a></p>

<form method="post" action="/NovaBalance/products/{{ product['id'] }}/destroy">
   <p>Delete this product?</p>
   <button>Yes</button>
</form>

{% endblock %}