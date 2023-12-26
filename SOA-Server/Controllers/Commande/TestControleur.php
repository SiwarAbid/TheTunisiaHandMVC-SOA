<?php
require_once 'CommandeControleur.php';

if(isset($_POST["submitBtnText"],$_POST["idCom"])){
    if($_POST["submitBtnText"]== 'Ajouter'){
        $tab= array("idCom"=> $_POST["idCom"], "prixT"=>$_POST["prixT"], "qte"=>$_POST["qte"]);
        CommandeControleur::insert($tab);
    }else if ($_POST["submitBtnText"]== 'Enregistrer les modifications'){
        $idCom = $_POST['idCom'];
        $prixT = $_POST['prixT'];
        $data = array('idCom' => $idCom, 'prixT' => $prixT, "qte"=>$_POST["qte"]);
        CommandeControleur::updateCom($data);

    }
}

CommandeControleur::liste();
?>