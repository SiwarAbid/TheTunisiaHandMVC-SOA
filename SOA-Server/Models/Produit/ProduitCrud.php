<?php
require_once __DIR__ .'/Produit.php';
require_once __DIR__ . '/../Crud.php'; 
require_once __DIR__ . '/../Connexion.php'; 
class ProduitCrud implements Crud {

    

    public static function getAll(){
        $rq="SELECT * FROM `produit`";
        return Connexion::query($rq,"Produit");
	}
    
    
    public static function delete(){
        if(isset($_GET["idProd"])){
        $rq="DELETE FROM `produit` WHERE idProd=:idProd";
        $tab=array("idProd"=>$_GET["idProd"]);
        Connexion::execute($rq,$tab);
        }
    }

    public static function add($c){
        $rq="INSERT INTO `produit`(`idProd`,`type`, `nom`, `img`, `stock`, `prix`, `couleur`, `categ`) VALUES (:idProd,:type, :nom ,:img, :stock, :prix ,:couleur ,:categ); ";
        $array= array("idProd"=>$c->getAtt('idProd'),"type"=>$c->getAtt('type'),"nom"=>$c->getAtt('nom') ,"img"=>$c->getAtt('img'), "stock"=>$c->getAtt('stock') ,"prix"=>$c->getAtt('prix') ,"couleur"=>$c->getAtt('couleur'), "categ"=>$c->getAtt('categ'));
        
        Connexion::execute($rq,$array);
        }
    
    public static function update($c){
            $rq="UPDATE `Produit` SET `idProd`= :idProd,`type`=:type , `nom`=:nom, `img` =:img, `stock` =:stock, `prix` :=prix, `couleur` =:couleur, `categ`=:categ WHERE idProd=:idProd";
            $array= array("idProd"=>$c->getAtt('idProd'),"type"=>$c->getAtt('type'),"nom"=>$c->getAtt('nom') ,"img"=>$c->getAtt('img'), "stock"=>$c->getAtt('stock') ,"prix"=>$c->getAtt('prix') ,"couleur"=>$c->getAtt('couleur'), "categ"=>$c->getAtt('categ'));
            Connexion::execute($rq,$array);
        }

}
?>