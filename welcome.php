<?php
session_start();

if (isset($_SESSION['user'])) {
    <?php include 'header.inc'; ?>
    echo "Welcome, " . $_SESSION['user'];
    <?php include 'footer.inc'; ?>
} else {
    header('Location: login.html');
}
?>