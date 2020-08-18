<?php

session_start();

require('../controllers/ClientController.php');

function deleteClient() {
  $clientController = new ClientController();
  $clientController->delete($_POST["idClient"]);

  echo json_encode(["deleted" => 1]);
}

deleteClient();

?>