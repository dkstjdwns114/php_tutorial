<?php
$conn = mysqli_connect("localhost", "root", "1234", "opentutorials");

settype($_POST['id'], 'integer');
$filtered = array(
  'id' => mysqli_real_escape_string($conn, $_POST['id']),
  'name' => mysqli_real_escape_string($conn, $_POST['name']),
  'profile' => mysqli_real_escape_string($conn, $_POST['profile'])
);

$sql = "
  UPDATE author
    SET
      name = '{$filtered["name"]}',
      profile = '{$filtered["profile"]}'
    WHERE
      id = {$filtered['id']}
";
$result = mysqli_query($conn, $sql);

if($result === false){
  echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
}else{
  echo '저장에 성공했습니다. <a href="index.php">돌아가기</a>';
  header("Location: author.php?id=".$filtered['id']);
}
?>
