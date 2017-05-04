<?php
require_once __DIR__ . '/../models/model.php';
$n1 = route::$nz;
$n2 = $db->num_db();    // к-во записей в таблице бд;
if($n1 >= $n2) {
  $n3 = 0;
} else {
  $n3 = $n1;
}
// К-во страниц;
$nstr = ceil($n2 / 3);
// $sf - как сортировать, по умолчанию по имени;
$sf = route::$filtr;
// $n3 - с какой записи начать показ;
$m = $db->read_all_db($sf, $n3);
require_once __DIR__ . '/../views/main_view.php';