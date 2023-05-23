<?php

$host = 'localhost';
$usarname = 'root';
$password = '';
$database = 'db_blog_andre';

$mysqli = new mysqli($host, $usarname, $password, $database);

if ($mysqli->error) {
    die("Falha ao conectar com o banco de dados: " . $mysqli->error);
}

?>