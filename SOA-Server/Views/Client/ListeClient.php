<?xml version="1.0" encoding="utf-8"?>
<Clients>
<?php
    require_once __DIR__ .'/../../Models/Client/Client.php';
        foreach($clients as $c){?>
    <Client>
        <cin><![CDATA[<?=$c->getAtt("cin")?>]]></cin>
        <nom><![CDATA[<?=$c->getAtt("nom")?>]]></nom>
        <prenom><![CDATA[<?=$c->getAtt("prenom")?>]]></prenom>
        <adr><![CDATA[<?=$c->getAtt("adr")?>]]></adr>
        <motdepasse><![CDATA[<?=$c->getAtt("motdepasse")?>]]></motdepasse>
    </Client>  
    <?php }
    ?>
</Clients>