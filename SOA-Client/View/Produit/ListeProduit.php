<!DOCTYPE html>
<html>
  <head>
    <title>The Tunisia Hand |Produits |TRADITIONAL |MODERN |TUNISIE</title>
    <link rel="stylesheet" href="http://localhost/TheTunisiaHandVMVC/Views/CSS/Formulaire.css">
  </head>
  <body>
  <div class="container">
  <div class="label-container">
        <label id="categorie">Produit </label>
    </div>
    <br>    <br>
<table>
    <tr>
        <th>ID</th>
        <th>TYPE</th>
        <th>NOM</th>
        <th>IMAGE</th>
        <th>STOCK</th> 
        <th>PRIX</th>
        <th>COULEUR</th>
        <th>CATEGORIE</th> 
        <th>Supprimer</th>
        <th>Modifier</th>        
    </tr>
<?php
foreach($Produits->Produit as $P)
{
?>
    <tr>
        <td><?=$P->idProd;?></td>
        <td><?=$P->type;?></td>
        <td><?=$P->nom;?></td>
        <td><?=$P->img;?></td>
        <td><?=$P->stock;?></td>
        <td><?=$P->prix;?></td>
        <td><?=$P->couleur;?></td>
        <td><?=$P->categ;?></td>
        <td><a href="http://localhost/3BI%20SOA/TP/TheTunisiaHandMVC/SOA-Client/Controller/Produit/produitControleur.php?action=delete&idCom=".<?=$P->idProd?>>Supprimer</a></td>
        <td><a href="http://localhost/3BI%20SOA/TP/TheTunisiaHandMVC/SOA-Client/Controller/Produit/produitControleur.php?page=form&action=update&idCom=".<?=$P->idProd?>>Modifier</a></td>
    </tr>
<?php
}
?>
</table> 
    <br>    <br>
<a href="http://localhost/3BI%20SOA/TP/TheTunisiaHandMVC/SOA-Client/View/Produit/FormulaireProduit.php?page=form">Ajouter un nouveau Produit </a>
<a href="http://localhost/3BI%20SOA/TP/TheTunisiaHandMVC/">Accueil </a>

</div>
</body>
</html>
