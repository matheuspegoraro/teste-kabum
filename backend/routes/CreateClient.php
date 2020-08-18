<?php

session_start();

require('../controllers/ClientController.php');

function createClient() {
  $clientController = new ClientController();
  $id = $clientController->create($_POST["name"], $_POST["birth"], $_POST["cpf"], $_POST["rg"], $_POST["celphone"]);

  if ($id > 0) 
    echo json_encode(["registered"=>1]);
  else
    echo json_encode(["registered"=>0]);
}

createClient();

?>