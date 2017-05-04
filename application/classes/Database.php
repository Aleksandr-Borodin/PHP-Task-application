<?php
class Database {
  // Базовые настройки подключения;
  public function setting() {
    $dsn = 'mysql:dbname=aleksandrov477;host=mysql.zzz.com.ua;charset=utf8';
    $user = 'aleksandrov477';
    $password = 'charli21';
    try {
      $dbh = new PDO($dsn, $user, $password);
    }
    catch(PDOException $e) {
      echo 'Ошибка подключения: '. $e->getMessage();
    }
    return $dbh;
  }
  // Запись данных;
  public function write_db($a) {
    $sql = "INSERT INTO tasks (name, email, text, im, status) VALUES (:t1, :t2, :t3, :t4, '0')";
    $dbh = $this->setting();
    $stm = $dbh->prepare($sql);
    $stm->bindValue(':t1', $a[0], PDO::PARAM_STR);
    $stm->bindValue(':t2', $a[1], PDO::PARAM_STR);
    $stm->bindValue(':t3', $a[2], PDO::PARAM_STR);
    $stm->bindValue(':t4', $a[3], PDO::PARAM_STR);
    $t = $stm->execute();
    return $t;

 }
  // Чтение всех записей для админ панели;
  public function read_all_admin() {
    $sql = 'SELECT id,name,email,text,status FROM tasks';
    $dbh = $this->setting();
    $sth = $dbh->query($sql);
    $m = [];
    while($row = $sth->fetch()) {
      $m[] = $row;
    }
    return $m;
  }
  // Проверка: есть ли такая запись;
  public function line_exists($id) {
    $sql = "SELECT * FROM tasks WHERE id='" . $id . "'";
    $dbh = $this->setting();
    $sth = $dbh->query($sql);
    return $sth->rowCount();
  }
  // Чтение записи по id;
  public function line_retrieval($id) {
    $sql = "SELECT id,text,status FROM tasks WHERE id='" . $id . "'";
    $dbh = $this->setting();
    $sth = $dbh->query($sql);
    return $sth->fetch(PDO::FETCH_NUM);
  }
  // Изменение строки;
  public function edit_line($a, $b, $c) {
    $sql = "UPDATE tasks SET text='" .$a . "', status='" . $b . "' WHERE id='" . $c . "'";
    $dbh = $this->setting();
    $stm = $dbh->prepare($sql);
    $stm->execute();
  }
  // Чтение отсортированного лимитированного числа записей;
  public function read_all_db($sort, $nz) {
    $sql = 'SELECT * FROM tasks ORDER BY ' . $sort . ' LIMIT ' . $nz . ',3';
    $dbh = $this->setting();
    $sth = $dbh->query($sql);
    $m = [];
    while($row = $sth->fetch()) {
      $m[] = $row;
    }
    return $m;
  }
  // К-во записей;
  public function num_db() {
    $sql = 'SELECT id FROM tasks';
    $dbh = $this->setting();
    $query=$dbh->query($sql);
    return $query->rowCount();
  }
}