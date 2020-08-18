<?php

session_start();

require('../controllers/UserController.php');

function isLoggedIn() {
  $userController = new UserController();
  echo $userController->isLoggedIn();
}

isLoggedIn();

?>