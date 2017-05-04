<?php
// Маршрутизация;
class Route {
  public static $filtr = 'name';
  // Порядковый номер записи, шаг в 3;
  public static $nz = 0;
  static function start() {
    $marsh = 'main';
    $routes = explode('/', $_SERVER['REQUEST_URI']);
    if(('admin' == $routes[1]) || ('create' == $routes[1])) {
      $marsh = $routes[1];
    }
    switch ($marsh) {
      case 'admin':
        $fm = '/../controllers/admin.php';
        break;
      case 'create':
        $fm = '/../controllers/create.php';
        break;
      default:
        $fm = '/../controllers/main.php';
        break;
    }
    if(isset($routes[2]) && !empty($routes[2])) {
      switch ($routes[2]) {
        case 'sort_by_email':
          static::$filtr = 'email';
          break;
        case 'sort_by_status':
          static::$filtr = 'status';
          break;
        default:
          static::$filtr = 'name';
          break;
      }
    }
    if(isset($routes[3]) && !empty($routes[3]) && 0 < $routes[3]) {
      static::$nz = ($routes[3] - 1) * 3;
    }
    require_once __DIR__ . $fm;
  }
}