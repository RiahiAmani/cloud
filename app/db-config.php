<?php
const DB_DSN = 'mysql:host=172.203.248.248;dbname=test';
const DB_USER = "phpmyadmin";
const DB_PASS = "test";



$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", // encodage utf-8
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // gérer les erreurs en tant qu'exception
    PDO::ATTR_EMULATE_PREPARES => false // faire des vrais requêtes préparées et non une émulation
);
