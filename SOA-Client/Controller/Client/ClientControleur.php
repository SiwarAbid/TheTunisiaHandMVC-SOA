<?php
require_once __DIR__ .'/../../Model/Client/Client.php';
$Clients=Client::getAll();
require_once __DIR__ .'/../../View/Client/ListeClient.php';

?>