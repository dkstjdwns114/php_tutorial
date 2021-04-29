<?php
$conn = mysqli_connect("localhost", "root", "1234", "opentutorials");
mysqli_query($conn, "
  INSERT INTO topic (title, description, created)
  VALUE(
    'MySQL',
    'MySQL is ...',
    NOW()
  )
");
?>
