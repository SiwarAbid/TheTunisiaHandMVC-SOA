<?xml version="1.0" encoding="utf-8"?>
<Commandes>
<?php
    require_once __DIR__ .'/../../Models/Commande/Commande.php';
        foreach($commandes as $c){?>
    <Commande>
        <id><![CDATA[<?=$c->getAtt("idCom")?>]]></id>
        <stock><![CDATA[<?=$c->getAtt("qte")?>]]></stock>
        <prix><![CDATA[<?=$c->getAtt("prixT")?>]]></prix>

        </Commande>  
    <?php }
    ?>
</Commandes>