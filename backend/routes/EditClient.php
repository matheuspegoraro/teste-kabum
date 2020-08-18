<?php

session_start();

require('../controllers/ClientController.php');

function editClient() {
  $clientController = new ClientController();
  $clientController->edit($_POST["idClient"], $_POST["name"], $_POST["birth"], $_POST["cpf"], $_POST["rg"], $_POST["celphone"]);

  echo json_encode(["edited"=>1]);
}

editClient();

?>