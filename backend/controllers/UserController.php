<?php

require('../classes/User.php');

class UserController {
  function login($login, $pass) {
    $user = new User($login, $pass);
    return $user->login();
  }

  function create($login, $pass) {
    $user = new User($login, $pass);
    return $user->create();
  }

  function isLoggedIn() {
    if($_SESSION["USER"] == [])
      return json_encode(["logged" => 0]);
      else
      return json_encode(["logged" => 1]);
  }
}

?>