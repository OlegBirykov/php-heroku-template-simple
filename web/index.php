<?php
declare(strict_types=1);

include './form.php';

session_start();

echo $header;

if (isset($_SESSION['name']) && $_SESSION['name'] !== '') {
    echo "<p>Привет, {$_SESSION['name']}</p>";
    echo '<p><a href="./exit.php">Попрощаться</a></p>';
} else {
  echo $form;
}
