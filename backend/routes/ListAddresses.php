<?php

session_start();

require('../controllers/AddressController.php');

function listAddresses() {
  $addressController = new AddressController();
  echo $addressController->listAll($_GET["idClient"]);
}

listAddresses();

?>