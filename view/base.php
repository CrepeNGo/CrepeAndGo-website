<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Crêpe & Go - Vente de crêpes délicieuses</title>
    <script src="https://kit.fontawesome.com/66bf2187ba.js" crossorigin="anonymous"></script>

</head>

<style>
    /* Styles généraux */
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    body {
        font-family: Arial, sans-serif;
    }

    /* Styles de l'en-tête */
    header {
        background-color: #8c6239;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 1rem;
    }

    .logo {
        font-size: 2rem;
        font-weight: bold;
    }

    .logo a {
        color: #fff;
        text-decoration: none;
    }

    nav ul {
        display: flex;
    }

    nav ul li {
        margin-left: 1rem;
        list-style-type: disc;
    }

    nav ul li:first-child {
        margin-left: 0;
    }

    nav ul li a {
        color: #fff;
        text-decoration: none;
        font-size: 1.2rem;
        font-weight: bold;
        padding: 0.5rem;
        transition: all 0.3s ease;
    }

    nav ul li a:hover {
        background-color: #fff;
        color: #8c6239;
        border-radius: 0.5rem;
    }

    /* Styles de la section Hero */
    #hero {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: #f5f5f5;
        padding: 5rem 10rem;
    }

    .hero-text {
        width: 50%;
    }

    .hero-text h1 {
        font-size: 4rem;
        font-weight: bold;
        margin-bottom: 2rem;
        color: #8c6239;
    }

    .hero-text p {
        font-size: 1.5rem;
        margin-bottom: 2rem;
        line-height: 1.5;
        color: #555;
    }

    .hero-image {
        font-size: 10rem;
        color: #8c6239;
    }

    /* Styles de la section À propos */
    #about {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: #fff;
        padding: 5rem 10rem;
    }

    .about-text {
        width: 50%;
    }

    .about-text h2 {
        font-size: 3rem;
        font-weight: bold;
        margin-bottom: 2rem;
        color: #8c6239;
    }

    .about-text p {
        font-size: 1.5rem;
        margin-bottom: 2rem;
        line-height: 1.5;
        color: #555;
    }

    .about-image {
        font-size: 10rem;
        color: #8c6239;
    }

    /* Styles de la section Menu */
    #menu {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: #f5f5f5;
        padding: 5rem 10rem;
    }

    .menu-text {
        width: 50%;
    }

    .menu-text h2 {
        font-size: 3rem;
        font-weight: bold;
        margin-bottom: 2rem;
        color: #8c6239;
    }

    .menu-text p {
        font-size: 1.5rem;
        margin-bottom: 2rem;
        line-height: 1.5;
        color: #555;
    }

    .menu-items {
        display: flex;
    }

    .menu-item {
        margin-right: 2rem;
        text-align: center;
    }

    .menu-item i {
        font-size: 5rem;
        color: #8c6239;
        margin-bottom: 1rem;
    }

    .menu-item h3 {
        font-size: 1.8rem;
        font-weight: bold;
        color: #8c6239;
        margin-bottom: 1rem;
    }

    .menu-item p {
        font-size: 1.5rem;
        line-height: 1.5;
        color: #555;
        margin-bottom: 2rem;
    }

    /* Styles du footer */
    footer {
        background-color: #8c6239;
        color: #fff;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 1rem;
    }

    .footer-text {
        font-size: 1.5rem;
    }

    .footer-text p {
        margin-bottom: 0.5rem;
    }

    .social-icons {
        display: flex;
    }

    .social-icon {
        margin-right: 1rem;
        font-size: 1.5rem;
        color: #fff;
        transition: all 0.3s ease;
    }

    .social-icon:hover {
        transform: scale(1.2);
    }

    .social-icon i {
        font-size: 1.5rem;
        margin-right: 0.5rem;
    }


    /* Styles de base */
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    body {
        font-family: Arial, sans-serif;
        color: #333;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        text-align: center;
        padding: 2rem;
    }

    h1 {
        font-size: 4rem;
        margin-bottom: 1rem;
    }

    p {
        font-size: 2rem;
        margin-bottom: 2rem;
    }

    button {
        background-color: #8c6239;
        color: #fff;
        border: none;
        padding: 1rem 2rem;
        font-size: 2rem;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    button:hover {
        background-color: #6f482b;
    }

    /* Styles pour la page 404 */
    .error-container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        height: 100vh;
    }

    .error-container h1 {
        color: #8c6239;
    }

    .error-container p {
        margin-bottom: 4rem;
    }

    .error-container button {
        margin-top: 2rem;
    }
</style>

<body>
<header>
    <div class="logo">
        <a href="#">Crêpe & Go</a>
    </div>
    <nav>
        <ul>
            <li><a href="#">Accueil</a></li>
            <li><a href="#">Nos crêpes</a></li>
            <li><a href="#">Commander</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>
</header>
<main>
    <?php
        include __DIR__ . '/'. $page .'/' . $page . '.php';
    ?>
</main>
</body>
</html>