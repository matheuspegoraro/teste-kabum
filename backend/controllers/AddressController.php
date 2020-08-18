<?php

require('../classes/Address.php');

class AddressController {
  function listAll($idClient) {
    $tempAddress = new Address();
    return $tempAddress->listAll($idClient);
  }

  function create($idClient, $address, $city, $state) {
    $tempAddress = new Address();
    return $tempAddress->create($idClient, $address, $city, $state);
  }

  function edit($idAddress, $address, $city, $state) {
    $tempAddress = new Address();
    return $tempAddress->edit($idAddress, $address, $city, $state);
  }
  
  function delete($idAddress) {
    $tempAddress = new Address();
    return $tempAddress->delete($idAddress);
  }
}

?>