<?php
// Создания класса для работыы с входными данными;
$pt = new Post_treatment();
// Есть ли все входные данные и не пусты ли они;
if($pt->post_bool()) {
  // Подготовка данных к будущей записи их в бд + все необходимые операции с графическим файлом;
  $pt->test_post();
  require_once __DIR__ . '/../models/model.php';
  // Запись данных в бд;
  $t = $db->write_db($pt->data);
  if($t) {
    require_once __DIR__ . '/../views/create_good_view.php';
  } else {
    require_once __DIR__ . '/../views/create_bad_view.php';
  }
} else {
  require_once __DIR__ . '/../views/create_view.php';
}


