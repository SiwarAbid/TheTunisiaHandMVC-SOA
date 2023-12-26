<?php
require_once __DIR__ .'/../Models/Produit/ProduitCrud.php';
class Controller{

public static function liste(){
    $produits =ProduitCrud::getAll();
    
    require_once __DIR__ .'\..\Views\Produits.php';
    }
}
Controller::liste();

?>