<?php
declare(strict_types=1);

session_start();

$_SESSION['name'] = null;
header('Location: ./index.php');
