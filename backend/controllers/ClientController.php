<?php

require('../classes/Client.php');

class ClientController {
  function listAll() {
    $client = new Client();
    return $client->listAll();
  }

  function create($name, $birth, $CPF, $RG, $celphone) {
    $client = new Client();
    return $client->create($name, $birth, $CPF, $RG, $celphone);
  }

  function edit($idClient, $name, $birth, $CPF, $RG, $celphone) {
    $client = new Client();
    return $client->edit($idClient, $name, $birth, $CPF, $RG, $celphone);
  }
  
  function delete($idClient) {
    $client = new Client();
    return $client->delete($idClient);
  }
}

?>