<?php

session_start();
unset($_SESSION['username']);
unset($_SESSION['role']);
header('Location: /BTL_PHP/trangchu.php');
