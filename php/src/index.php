<?php
$host = 'db';
$username = 'people';
$password = 'people';
$dbname = 'people';

$connection = new mysqli($host, $username, $password, $dbname);

if ($connection->connect_error) {
  die($connection->connect_error);
}
echo "Connected successfully";
