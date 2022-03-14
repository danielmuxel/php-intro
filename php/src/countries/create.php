<?php
require_once('../functions.php');

$name = $_POST['name'];

if (!empty($name)) {
  $sql = "INSERT INTO country (name) VALUES ('$name');";
  if ($db->query($sql) === TRUE) {
    echo "<p>Data inserted successfully</p>";
    echo "<p><a href='index.php'>back</a></p>";
  } else {
    echo "Error inserting data: " . $db->error;
  }
} else {
?>
  <h1>create country</h1>

  <p>
    <a href="index.php">Back</a>
  </p>

  <form action="create.php" method="post">
    <label for="name">Name</label>
    <input type="text" name="name" id="name">

    <button type="submit">Submit</button>
  </form>

<?php
}
?>