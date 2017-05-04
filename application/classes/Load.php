<?php
class Load {
  public function loadclass($a) {
    $b = __DIR__ . '/../classes/' . $a . '.php';
    if (!file_exists($b)) {
      echo "<br>" . 'Нет такого класса: ' . "<br>" . $a . "<br>" . 'По адресу: ' . "<br>" . $b;
      exit;
    }
    require_once $b;
  }
}