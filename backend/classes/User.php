<?php

require('BD.php');

class User {
  private $login;
  private $password;

  function __construct($login, $password) {
    $this->login = $login;
    $this->password = $password;
  }

  function create() {
    $bd = new BD();

    $id = $bd->query("INSERT INTO tb_users(login, password)
                      VALUES (:LOGIN, :PASSWORD);", [
                        ":LOGIN"=>$this->login,
                        ":PASSWORD"=>$this->password
                      ]);

    return [
      "id"=>$id,
      "login"=>$this->login,
      "password"=>$this->password
    ];
  }

  function login() {
    $bd = new BD();

    $users = [];

    foreach($bd->select("SELECT * 
                         FROM tb_users
                         WHERE
                         login = :LOGIN AND
                         password = :PASSWORD", [
                           ":LOGIN"=>$this->login,
                           ":PASSWORD"=>$this->password
                         ]) as $row) {
      array_push($users, $row);
    }

    if (count($users) <= 0) 
      return [];
    else
      return $users[0];
  }
}

?>