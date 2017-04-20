<?php
    $pdo = new PDO('mysql:host=localhost;dbname=calendario', 'root', '');
    $pdo->exec("set names utf8");