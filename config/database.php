<?php

define('DB_SERVER', 'localhost');
define('DB_NAME', 'db_form');
define('DB_USER', 'root');
define('DB_PASSWORD', 'password');

$conn = new mysqli(DB_SERVER,DB_USER,DB_PASSWORD,DB_NAME);