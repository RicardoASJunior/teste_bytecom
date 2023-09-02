<?php
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('BASE', 'teste_bytecom');

    $conn = new MYSQLi(HOST,USER,PASS,BASE) or die ('Não foi possível conectar');
    