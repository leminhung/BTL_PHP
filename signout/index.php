<?php

session_start();
unset($_SESSION['username']);
unset($_SESSION['name']);
unset($_SESSION['role']);
unset($_SESSION['name']);
header('Location: /BTL_PHP/trangchu.php');