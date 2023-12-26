<?php
class Client{

    private $cin;
    private $nom;
    private $prenom;
    private $adr;
    private $motdepasse;

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
        $xml=file_get_contents("http://localhost/3BI%20SOA/TP/TheTunisiaHandMVC/SOA-Server/Controllers/Client/TestControleur.php");
        $Clients=new SimpleXMLElement($xml);
        return $Clients;
       }

//    SETTER

    /**
     * ToString()
     */
    public function toString(){
        return "CIN Client: ".$this->cin." appelé ".$this->nom." ".$this->prenom.". Son adresse: ".$this->adr." avec mot de passe: ".$this->motdepasse;
    }
}
?>