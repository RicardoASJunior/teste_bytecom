<?php
    session_start();
    unset($_SESSION["email"]);
    unset($_SESSION["Nome_contador"]);
    session_destroy();
    header("location: index.php");
    exit;
