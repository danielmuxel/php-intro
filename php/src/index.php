<?php
require_once('functions.php');

$sql = "CREATE DATABASE IF NOT EXISTS people";
if ($connection->query($sql) === TRUE) {
  echo "<p>Database created successfully</p>";
} else {
  echo "Error creating database: " . $connection->error;
}

$sql = "CREATE TABLE IF NOT EXISTS country (
  id INTEGER PRIMARY KEY AUTO_INCREMENT,
  name TEXT NOT NULL);";

if ($connection->query($sql) === TRUE) {
  echo "<p>Table created successfully</p>";
} else {
  echo "<p>Error creating table: " . $connection->error . "</p>";
}


$sql = "SELECT COUNT(*) FROM country";
$result = $connection->query($sql);
$numberOfCountries = $result->fetch_assoc()['COUNT(*)'];
echo "<p>Number of countries: " . $numberOfCountries . "</p>";

if ($numberOfCountries == 0) {
  $sql = "INSERT INTO country (name) VALUES ('Deutschland'), 
('Österreich'), ('Schweiz');";

  if ($connection->query($sql) === TRUE) {
    echo "<p>Data inserted successfully</p>";
  } else {
    echo "Error inserting data: " . $connection->error;
  }
}

$connection->close();
