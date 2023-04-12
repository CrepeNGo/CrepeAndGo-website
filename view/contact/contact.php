<link rel="stylesheet" href="./style.css">


<body>

<div class="container">

    <!-- Section de contact -->
    <section id="contact">
        <h2>Contactez-nous</h2>

        <form method="post">
            <h2>Formulaire de Contact</h2>
            <div class="form-group">
                <label for="name">Nom :</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="subject">Sujet :</label>
                <input type="text" id="subject" name="subject" required>
            </div>
            <div class="form-group">
                <label for="message">Message :</label>
                <textarea id="message" name="message" required></textarea>
            </div>
            <button type="submit">Envoyer</button>
        </form>

    </section>

</div>

</body>