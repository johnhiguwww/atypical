<?php
    session_start();
    unset($_SESSION['id_terapeuta']);
    header("location: index.php")
?>