<?xml version="1.0" encoding="utf-8"?>
<Produits>
<?php
    require_once __DIR__ .'/../../Models/Produit/Produit.php';
        foreach($produits as $c){?>
    <Produit>
        <id><![CDATA[<?=$c->getAtt("idProd")?>]]></id>
        <type><![CDATA[<?=$c->getAtt("type")?>]]></type>
        <nom><![CDATA[<?=$c->getAtt("nom")?>]]></nom>
        <image><![CDATA[<?=$c->getAtt("img")?>]]></image>
        <stock><![CDATA[<?=$c->getAtt("stock")?>]]></stock>
        <prix><![CDATA[<?=$c->getAtt("prix")?>]]></prix>
        <couleur><![CDATA[<?=$c->getAtt("couleur")?>]]></couleur>
        <categ><![CDATA[<?=$c->getAtt("categ")?>]]></categ>
    </Produit>  
    <?php }
    ?>
</Produits>
