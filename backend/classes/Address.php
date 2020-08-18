<?php

require('BD.php');

class Address {
  private $idUser;

  function __construct() {
    $this->idUser = $_SESSION["USER"]["id_user"];
  }

  function create($idClient, $address, $city, $state) {
    $bd = new BD();

    return $bd->query("INSERT INTO tb_addresses(id_client, address, city, state)
                        VALUES (:IDCLIENT, :ADDRESS, :CITY, :STATE);", [
                          ":IDCLIENT"=>$idClient,
                          ":ADDRESS"=>$address,
                          ":CITY"=>$city,
                          ":STATE"=>$state
                        ]);
  }

  function edit($idAddress, $address, $city, $state) {
    $bd = new BD();

    return $bd->query("UPDATE tb_addresses SET
                        address = :ADDRESS, 
                        city = :CITY, 
                        state = :STATE
                       WHERE
                        id_address = :IDADDRESS;", [
                          ":IDADDRESS"=>$idAddress,
                          ":ADDRESS"=>$address,
                          ":CITY"=>$city,
                          ":STATE"=>$state
                        ]);
  }

  function delete($idAddress) {
    $bd = new BD();

    return $bd->query("DELETE FROM tb_addresses WHERE id_address = :IDADDRESS", [
                        ":IDADDRESS"=>$idAddress
                      ]);
  }

  function listAll($idClient) {
    $bd = new BD();

    $addresses = [];

    foreach($bd->select("SELECT * 
                         FROM tb_addresses
                         WHERE
                         id_client = :IDCLIENT 
                         ORDER BY id_address ASC", [
                           ":IDCLIENT"=>$idClient
                         ]) as $row) {
      array_push($addresses, $row);
    }

    if (count($addresses) <= 0) 
      return json_encode([]);
    else
      return json_encode($addresses);
  }
}

?>