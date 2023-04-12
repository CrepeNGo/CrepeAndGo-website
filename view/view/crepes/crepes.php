<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Crêpe & Go - Vente de crêpes délicieuses</title>
  <link rel="stylesheet" href="./crepes.css">
  <script src="https://kit.fontawesome.com/66bf2187ba.js" crossorigin="anonymous"></script>

</head>

<body>
<main>
    <section id="hero">
      <div class="hero-text">
        <h1>Nos crêpes sont réalisées par les plus grand crêpiers</h1>
        <p>Voici quelques unes de nos crêpes qui vous pourrez goûter chez nous</p>
        <button href="#" class="btn_achat">Commander maintenant</button>
        
      </div>
      <div class="hero-image">
        <img src="./photos/crepes1.jpg" alt="crepe1" class="crepes_produit">
        <img src="./photos/crepes2.jpg" alt="crepe2" class="crepes_produit">
      </div>
    </section>

      <section id="distributeur">
          <div class="distributeur_img-container">
            <div id="distri_crepe">
            <img class="distributeur_img" src="./photos/distri.jpeg" alt="distributeur">
            <img class="distributeur_img" src="./photos/distri2.jpeg" alt="distributeur2">
            </div>
          </div>
          <div class="distrib_txt-container">
            <div class="distrib_txt">
            <h1>Nous proposons des distributeurs de crêpe dans toute la France</h1>
            <button  class="btn_achat"><a href="<?= $HTTP_SERVER_VARS[HTTP_HOST]?>/map">Pays déservis</a></button>
            </div>
          </div>
      </section>
</main>
</html>