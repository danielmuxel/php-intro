<?php
$host = 'db';
$username = 'people';
$password = 'people';
$dbname = 'people';

$db = new mysqli($host, $username, $password, $dbname);

if ($db->connect_error) {
  die($db->connect_error);
}