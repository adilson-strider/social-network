<?php

include 'database/conexao.php';
include 'classes/Usuario.php';
include 'classes/Tweet.php';
include 'classes/Follow.php';

global $pdo;

session_start();

$getFromU = new Usuario($pdo);

define("BASE_URL", "http://localhost/social/");