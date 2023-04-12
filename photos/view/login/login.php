<link rel="stylesheet" href="http://<?=$HTTP_SERVER_VARS['HTTP_HOST']?>/style.css">

<form action="/login/login" method="POST">
    <label for="">username</label>
    <input type="text" name='username'>
    <label for="">mot de passe</label>
    <input type="text" name='mdp'>
    <button type="submit">Confirmer</button>
</form>
