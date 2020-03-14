<?php
  require_once(__DIR__ . '/config/config.php');
  $app = new MyApp\Controller\Index();
  $app->run();

  define('MAX','3');
  $animals_num = count($app->getVal()->animals);
  $max_page= ceil($animals_num / MAX);
  if(!isset($_GET['page_id'])){
    $now = 1;
  }else{
    $now = $_GET['page_id'];
  }

  $start_no = ($now - 1) * MAX;
  $disp_data = array_slice($app->getVal()->animals,$start_no,MAX,true);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  全部で<?= $animals_num; ?>件です。
  <?php foreach ($disp_data as $val) : ?>
    <ul>
      <li><?= h($val['name']); ?></li>
      <li><?= h($val['food']); ?></li>
    </ul>
  <?php endforeach; ?>
  <?php 
  
  if($now > 1){
    echo '<a href=\'index.php?page_id='.($now - 1).'\')>&lt;&lt;</a>'. ' ';
  }else{
    echo '&lt;&lt;'. ' ';
  }
  for($i = 1; $i <= $max_page; $i++){
    if ($i == $now) {
      echo $now. ' ';
    }else {
      echo '<a href=\'index.php?page_id='. $i. '\')>'. $i. '</a>'. ' ';
    }
  }
  if($now < $max_page){
    echo '<a href=\'index.php?page_id='.($now + 1).'\')>&gt;&gt;</a>'. ' ';
  } else {
    echo '&gt;&gt;';
  }
  ?>
</body>
</html>