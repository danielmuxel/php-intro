<?php 
require_once('../functions.php');

$id = $_GET['id'];

$sql = "SELECT * FROM country WHERE id = $id";
$result = $db->query($sql);
$country = $result->fetch_assoc();

?>

<h1>ID: <?= $id ?></h1>
<h2>Name: <?= $country['name'] ?></h2>

<p>
  <a href="index.php">back</a>
</p>