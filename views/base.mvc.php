<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{% yield title %}</title>
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel='icon' type='image/webp' href="assets/img/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

{% include "shared/nav.mvc.php" %}

{% yield body %}

<footer>
    <div class="footer-content">
        <p>&copy; 2025 NovaBalance. All rights reserved.</p>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
document.querySelectorAll('.menu.smooth-scroll a').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        const target = document.querySelector(this.getAttribute('href'));
        const offset = document.querySelector('header').offsetHeight; // Get the height of the fixed header

        window.scrollTo({
            top: target.offsetTop - offset,
            behavior: 'smooth'
        });
    });
});

document.querySelector(".quote-button").addEventListener("click", function (e) {
    e.preventDefault(); // Prevent default jump behavior
    const target = document.querySelector("#contact");
    const offset = document.querySelector('header').offsetHeight; // Get the height of the fixed header

    window.scrollTo({
        top: target.offsetTop - offset,
        behavior: "smooth"
    });
});

</script>
<script src="assets/js/custom.js" ></script>
</body>
</html>