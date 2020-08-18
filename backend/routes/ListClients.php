<?php

session_start();

require('../controllers/ClientController.php');

function listClients() {
  $clientController = new ClientController();
  echo $clientController->listAll();
}

listClients();

?>