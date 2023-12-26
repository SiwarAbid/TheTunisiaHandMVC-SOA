<?php
class Commande{

    private $idCom;
    private $prixT;
    private $qte;

    /**
     * Constructeur
     */

    public function __construct($tab=array()){
        foreach ($tab as $k => $v)
            $this->$k=$v;   
    }

   

    /**
     * GETTER SETTER
     */

    
     public static function getAll(){
        $xml=file_get_contents("http://localhost/3BI%20SOA/TP/TheTunisiaHandMVC/SOA-Server/Controllers/Commande/TestControleur.php");
        $Commandes=new SimpleXMLElement($xml);
        return $Commandes;
       }

    // SETTER

    /**
     * ToString()
     */
    public function toString(){
        return "ID Commande: ".$this->idCom." Prix Total ".$this->prixT."QTE :".$this->qte;
    }
}
?>