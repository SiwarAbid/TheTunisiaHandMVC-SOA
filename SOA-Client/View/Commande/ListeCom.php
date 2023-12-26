<!DOCTYPE html>
<html>
  <head>
    <title>The Tunisia Hand |Commandes |TRADITIONAL |MODERN |TUNISIE</title>
    <link rel="stylesheet" href="http://localhost/TheTunisiaHandVMVC/Views/CSS/Formulaire.css">
  </head>
  <body>
  <div class="container">
  <div class="label-container">
        <label id="categorie">Commande </label>
    </div>
    <br>    <br>
    <table>
    <tr>
        <th> ID </th>
        <th> Prix Total </th>
        <th> Quantité </th>
        <th>Supprimer</th>
        <th>modifier</th>
        

    </tr>
    <?php
        foreach($Commandes->Commande as $c){?>
    <tr>
        <td><?=$c->idCom;?></td>
        <td><?=$c->prixT;?></td>
        <td><?=$c->qte;?></td>
        <td><a href="http://localhost/3BI%20SOA/TP/TheTunisiaHandMVC/SOA-Client/Controller/Commande/CommandeControleur.php?action=delete&idCom=".<?=$c->idCom?>>Supprimer</a></td>
        <td><a href="http://localhost/3BI%20SOA/TP/TheTunisiaHandMVC/SOA-Client/Controller/Commande/CommandeControleur.php?page=form&action=update&idCom=".<?=$c->idCom?>>Modifier</a></td>
    </tr>  
    <?php }?>
    </table>
    <br>    <br>
    <a href="http://localhost/3BI%20SOA/TP/TheTunisiaHandMVC/SOA-Client/Controller/Commande/CommandeControleur.php?page=form">Ajouter une nouveulle commande </a>
    <a href="http://localhost/3BI%20SOA/TP/TheTunisiaHandMVC/">Accueil </a>
    
</div>
    </body>
</html> 