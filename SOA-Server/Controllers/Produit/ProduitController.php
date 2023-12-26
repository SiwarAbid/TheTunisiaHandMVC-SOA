<?php
require_once __DIR__ .'/../../Models/Produit/ProduitCrud.php';
require_once __DIR__ .'/../../Models/Produit/Produit.php';


class ProduitControleur{

    public static function get_Server (){
        $produits =ProduitCrud::getAll();
        require_once __DIR__ .'/../../Views/Produit/Produits.php';
    }


    public static function delete(){
        if (isset($_GET["idProd"])){
        $tab=array("idProd"=>$_GET["idProd"]);
        $c= new ProduitCrud($tab);
        $c->delete();
        }
        
    }

    public static function update($tab){
        $c= new Produit($tab);
        ProduitCrud::update($c);
    }

    public static function insert($tab){
        $c= new Produit($tab);
        ProduitCrud::add($c);

    }

}