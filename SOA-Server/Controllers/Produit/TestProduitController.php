<?php
require_once 'ProduitController.php';

if(isset($_POST["submitBtnText"],$_POST["idProd"])){
    $tab= array("idProd"=> $_POST["idProd"], "type"=>$_POST["type"], "nom"=>$_POST["nom"], "img"=>$_POST["img"], "stock"=>$_POST["stock"], "prix"=>$_POST["prix"], "couleur"=>$_POST["couleur"], "categ"=>$_POST["categ"]);

    if($_POST["submitBtnText"]== 'Ajouter'){
        
        ProduitControleur::insert($tab);
    }else 
        ProduitControleur::update($tab);
}
    




if(isset($_GET['page'] ) && $_GET['page'] === 'form') {
if (isset($_GET['action']) && $_GET['action'] === 'update' && isset($_GET['idProd'])) 
    require_once __DIR__ .'/../../Views/Produit/FormulaireProduit.php';

else 
    require_once __DIR__.'/../../Views/Produit/FormulaireProduit.php';
}
if(isset($_GET['action']) && $_GET['action'] === 'delete' && isset($_GET['idProd']))
    ProduitControleur::delete();
if(isset($_GET['page']) && $_GET['page'] === 'Liste') 
    ProduitControleur::liste();
ProduitControleur::get_Server();
?>