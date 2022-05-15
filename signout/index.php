<?php

session_start();
unset($_SESSION['username']);
header('Location: /BTL_PHP');
