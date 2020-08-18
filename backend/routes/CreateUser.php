<?php

session_start();

require('../controllers/UserController.php');

function createUser() {
  $newUserController = new UserController();
  $_SESSION["USER"] = $newUserController->create($_POST["login"], $_POST["password"]);
}

createUser();

?>