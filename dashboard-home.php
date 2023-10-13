<?php
session_start();
if (isset($_SESSION['username'])) {
    echo "Bienvenue, " . $_SESSION['username'];
} else {
    echo "Non connecté";
    header('Location: login.php');
}
?>
