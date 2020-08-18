<?php

session_start();

require('../controllers/UserController.php');

function loginUser() {
  $userController = new UserController();
  $_SESSION["USER"] = $userController->login($_POST["login"], $_POST["password"]);
  echo $userController->isLoggedIn();
}

loginUser();

?>