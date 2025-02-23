<h1>Edit Product</h1>

<p><a href="/NovaBalance/products/<?= $product['id'] ?>/show">Cancel</a></p>

<form method="post" action="/products/<?= $product['id'] ?>/update">
   <?php require "form.php"; ?>
</form>

</body>
</html>