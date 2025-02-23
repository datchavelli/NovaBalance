<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{% yield title %}</title>
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel='icon' type='image/webp' href="assets/img/favicon.ico">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
</head>
<body>

{% include "shared/nav.mvc.php" %}

{% yield body %}

<footer>
    <div class="footer-content">
        <p>&copy; 2025 NovaBalance. All rights reserved.</p>
    </div>
</footer>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->
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