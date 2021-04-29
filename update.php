<?php
require_once('./lib/print.php');
require_once('./view/top.php');
?>
  <form action="update_process.php" method="post">
    <input type="hidden" name="old_title" value=<?= $_GET['id'] ?>>
    <p>
      <input type="text" name="title" placeholder="Title" value=<?= print_title() ?>>
    </p>
    <p>
      <textarea name="description" rows="8" cols="40" placeholder="Description"><?= print_description() ?></textarea>
    </p>
    <input type="submit">
  </form>
<?php
require_once('./view/bottom.php');
?>
