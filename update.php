<?php
function print_title(){
  if(isset($_GET['id'])){
    echo $_GET['id'];
  }else{
    echo "Welcome";
  }
}
function print_description(){
  if(isset($_GET['id'])){
    $contents = file_get_contents("data/".$_GET['id']);
    echo $contents;
  }else{
    echo "Hello, PHP";
  }
}
function print_list(){
  $list = scandir('./data');
  $i = 0;
  while($i < count($list)){
    if($list[$i] != '.' and $list[$i] != '..'){
      echo "<li><a href=\"index.php?id=$list[$i]\">$list[$i]</a></li>\n";
    }
    $i = $i + 1;
  }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>
      <?php
      print_title();
      ?>
    </title>
  </head>
  <body>
    <h1><a href="index.php">WEB</a></h1>
    <ol>
      <?php
      print_list();
      ?>
    </ol>
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
  </body>
</html>
