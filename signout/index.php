<?php

session_start();
unset($_SESSION['username']);
unset($_SESSION['name']);
unset($_SESSION['role']);
unset($_SESSION['phone']);
unset($_SESSION['email']);
header('Location: /BTL_PHP/trangchu.php');
