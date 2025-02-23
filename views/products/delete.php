<h1>Delete Product</h1>

<p><a href="/products/<?= $product['id'] ?>/show">Cancel</a></p>

<form method="post" action="/products/<?= $product['id'] ?>/destroy">
   <p>Delete this product?</p>
   <button>Yes</button>
</form>

</body>
</html>