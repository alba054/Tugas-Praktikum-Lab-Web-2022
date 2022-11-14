<?php
session_start();
session_destroy();
header("Location: http://localhost/Tugas7/login.php");
?>