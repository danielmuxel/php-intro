<?php
require_once('../functions.php');

$sql = "SELECT * FROM country";
$result = $db->query($sql);
$countries = $result->fetch_all(MYSQLI_ASSOC);
?>

<h1>Countries</h1>

<p>
  <a href="create.php">add country</a>
</p>

<ul>
  <?php foreach ($countries as $country) { ?>
    <li>
      <a href="country.php?id=<?php echo $country['id']; ?>">
        <?php echo $country['name']; ?>
      </a>
    </li>
  <?php } ?>
</ul>