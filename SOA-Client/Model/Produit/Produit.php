<?php
class Produit{

    private $idProd;
    private $type;
    private $nom;
    private $img;
    private $stock;
    private $prix;
    private $couleur;
    private $categ;

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
     $xml=file_get_contents("http://localhost/3BI%20SOA/TP/TheTunisiaHandMVC/SOA-Server/Controllers/Produit/TestProduitController.php");
     $Produits=new SimpleXMLElement($xml);
     return $Produits;
    }

    // SET

    /**
     * ToString()
     */
    public function toString(){
        return "ID Produit: ".$this->idProd." est ".$this->nom." de type ".$this->type." stock ".$this->stock." prix ".$this->prix;
    }
}
?>