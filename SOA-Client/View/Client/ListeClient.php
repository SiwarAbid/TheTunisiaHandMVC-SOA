<!DOCTYPE html>
<html>
  <head>
    <title>The Tunisia Hand |Clients |TRADITIONAL |MODERN |TUNISIE</title>
    <link rel="stylesheet" href="http://localhost/TheTunisiaHandVMVC/Views/CSS/Formulaire.css">
  </head>
  <body>
  <div class="container">
  <div class="label-container">
        <label id="categorie">Client </label>
    </div>
    <br>    <br>
<table>
    <tr>
        <th> CIN </th>
        <th> Nom </th>
        <th> Prenom </th>
        <th> Adresse </th>
        <th> Mot de passe </th>

        

    </tr>
    <?php
        foreach($Clients->Client as $c){?>
    <tr>
        <td><?=$c->cin?></td>
        <td><?=$c->nom?></td>
        <td><?=$c->prenom?></td>
        <td><?=$c->adr?></td>
        <td><?=$c->motdepasse?></td>

        

    </tr>  
    <?php }?>
</table>  
<br>    <br>
<!-- <a href="http://localhost/TheTunisiaHandVMVC/Controllers/Client/TestControleur.php?page=form">Ajouter un nouveau client </a> -->
<a href="http://localhost/3BI%20SOA/TP/TheTunisiaHandMVC/">Accueil </a>
</div>
</body>
</html>