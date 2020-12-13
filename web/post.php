<?php
declare(strict_types=1);

session_start();

$_SESSION['name'] = $_GET['name'] ?? '';
header('Location: ./index.php');
