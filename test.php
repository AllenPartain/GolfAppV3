<?php require($_SERVER['DOCUMENT_ROOT'] . '/functions.php');
// $uName = "anytijn g";
// $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");
// $stmt->execute([':username' => $uname]);
// $user = $stmt->fetch();
// print_r($user); 



  $query = $pdo->query("SELECT * FROM GA_users");
  $results = $query->fetchAll();

  echo '<pre>';
  var_dump($results);
  echo '</pre>';
?>





