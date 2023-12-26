<?php
if(isset($_GET['page'] ) && $_GET['page'] === 'form') 
    require_once __DIR__.'/../../View/Produit/FormulaireProduit.php';
if(isset($_GET['action']) && $_GET['action'] === 'delete' && isset($_GET['idProd']))
    CommandeControleur::delete();
require_once __DIR__ .'/../../Model/Produit/Produit.php';
$Produits=Produit::getAll();
require_once __DIR__ .'/../../View/Produit/ListeProduit.php';

?>