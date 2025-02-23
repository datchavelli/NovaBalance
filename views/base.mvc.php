<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{% yield title %}</title>
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel='icon' type='image/webp' href="assets/img/favicon.ico">
</head>
<body>

{% include "shared/nav.mvc.php" %}

{% yield body %}

<footer>
    <div class="footer-content">
        <p>&copy; 2025 NovaBalance. All rights reserved.</p>
    </div>
</footer>

<script>
    document.querySelectorAll('.menu a').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });

    document.querySelector(".quote-button").addEventListener("click", function (e) {
    e.preventDefault(); // Prevent default jump behavior
    document.querySelector("#contact").scrollIntoView({ behavior: "smooth" });
});
</script>
</body>
</html>