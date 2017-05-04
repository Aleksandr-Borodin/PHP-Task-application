<?php
// Автозагрузка классов;
require_once __DIR__ . '/classes/Load.php';
$loader = new Load();
spl_autoload_register([$loader, 'loadclass']);
// Маршрутизатор;
require_once __DIR__ . '/core/route.php';
Route::start();