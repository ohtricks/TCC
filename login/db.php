<?php
/* Database connection settings */
$host = 'localhost';
$user = 'root';
$pass = 'kirito';
$db = 'tcc';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
