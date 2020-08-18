<?php

session_start();

require('../controllers/AddressController.php');

function deleteClient() {
  $addressController = new AddressController();
  $addressController->delete($_POST["idAddress"]);

  echo json_encode(["deleted" => 1]);
}

deleteClient();

?>