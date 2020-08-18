<?php

session_start();

require('../controllers/AddressController.php');

function createAddress() {
  $addressController = new AddressController();
  $id = $addressController->create($_POST["idClient"], $_POST["address"], $_POST["city"], $_POST["state"]);

  if ($id > 0) 
    echo json_encode(["registered"=>1]);
  else
    echo json_encode(["registered"=>0]);
}

createAddress();

?>