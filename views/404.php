<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Not Found | NovaBalance</title>
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="icon" type="image/webp" href="assets/img/favicon.ico">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(180deg,#A2268D 0,#fff 93.63%);
            color: white;
            text-align: center;
            font-family: Arial, sans-serif;
        }
        .not-found-container {
            position: relative;
            z-index: 1;
            animation: fadeIn 1.5s ease-in-out;
        }
        .not-found h1 {
            font-size: 6rem;
            font-weight: bold;
            text-shadow: 4px 4px 10px rgba(0, 0, 0, 0.7);
            animation: slideIn 1s ease-in-out;
        }
        .not-found p {
            font-size: 1.5rem;
            margin-bottom: 20px;
            animation: fadeIn 2s ease-in-out;
        }
        .not-found a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #A2268D;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: 0.3s;
            animation: popIn 1.5s ease-in-out;
        }
        .not-found a:hover {
            background-color: #7a1b66;
        }
        .not-found .icon {
            font-size: 5rem;
            animation: bounce 1.5s infinite;
        }
        @keyframes bounce {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        @keyframes slideIn {
            from { transform: translateY(-50px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        @keyframes popIn {
            0% { transform: scale(0.5); opacity: 0; }
            100% { transform: scale(1); opacity: 1; }
        }
    </style>
</head>
<body>
    <div class="not-found-container">
        <div class="not-found">
            <i class="fas fa-exclamation-triangle icon"></i>
            <h1>404</h1>
            <!-- <p>Oops! The page you are looking for doesn't exist.</p> -->
            <p>Oops! Izgleda da stranica koju ste tržili ne postoji.</p>
            <a href="/NovaBalance">Početna strana</a>
        </div>
    </div>
</body>
</html>