<?php

require('BD.php');

class Client {
  private $idUser;

  function __construct() {
    $this->idUser = $_SESSION["USER"]["id_user"];
  }

  function convertBirth($birth) {
    return substr($birth, 6, 4) . "-" . substr($birth, 3, 2) . "-" . substr($birth, 0, 2);
  }

  function create($name, $birth, $CPF, $RG, $celphone) {
    $bd = new BD();

    return $bd->query("INSERT INTO tb_clients(id_user, name, birth, CPF, RG, celphone)
                        VALUES (:IDUSER, :NAME, :BIRTH, :CPF, :RG, :CELPHONE);", [
                          ":IDUSER"=>$this->idUser,
                          ":NAME"=>$name,
                          ":BIRTH"=>$this->convertBirth($birth),
                          ":CPF"=>$CPF,
                          ":RG"=>$RG,
                          ":CELPHONE"=>$celphone
                        ]);
  }

  function edit($idClient, $name, $birth, $CPF, $RG, $celphone) {
    $bd = new BD();

    return $bd->query("UPDATE tb_clients SET
                        name = :NAME, 
                        birth = :BIRTH, 
                        CPF = :CPF, 
                        RG = :RG, 
                        celphone = :CELPHONE
                       WHERE
                        id_client = :IDCLIENT;", [
                          ":IDCLIENT"=>$idClient,
                          ":NAME"=>$name,
                          ":BIRTH"=>$this->convertBirth($birth),
                          ":CPF"=>$CPF,
                          ":RG"=>$RG,
                          ":CELPHONE"=>$celphone
                        ]);
  }

  function delete($idClient) {
    $bd = new BD();

    return $bd->query("DELETE FROM tb_clients WHERE id_client = :IDCLIENT", [
                        ":IDCLIENT"=>$idClient
                      ]);
  }

  function listAll() {
    $bd = new BD();

    $users = [];

    foreach($bd->select("SELECT * 
                         FROM tb_clients
                         WHERE
                         id_user = :IDUSER 
                         ORDER BY name ASC", [
                           ":IDUSER"=>$this->idUser
                         ]) as $row) {
      array_push($users, $row);
    }

    if (count($users) <= 0) 
      return json_encode([]);
    else
      return json_encode($users);
  }
}

?>