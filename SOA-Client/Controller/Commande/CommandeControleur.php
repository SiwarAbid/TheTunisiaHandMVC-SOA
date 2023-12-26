<?php
if(isset($_GET['page'] ) && $_GET['page'] === 'form') 
    require_once __DIR__ .'/../../View/Commande/FormulaireCommande.php';
if(isset($_GET['action']) && $_GET['action'] === 'delete' && isset($_GET['idCom']))
    CommandeControleur::delete();
require_once __DIR__ .'/../../Model/Commande/Commande.php';
$Commandes=Commande::getAll();
require_once __DIR__ .'/../../View/Commande/ListeCom.php';

?>