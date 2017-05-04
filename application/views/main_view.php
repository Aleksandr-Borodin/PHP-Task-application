<!DOCTYPE html>
<html>
<head>
  <link rel = "stylesheet" href = "/css/main.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <meta http-equiv = "content-type" content = "text/html; charset=utf-8">
  <title>Задачи</title>
  <script src="/js/prefixfree.min.js"></script>
</head>
<body>
  <div class="top_menu">
    <a href="/create">Создать задачу</a>
    <a href="/admin">Админ. панель</a>
  </div>
  <h3>Список задач</h3>
  <div class="main_el nav_menu">
    <h4>Сортировка по:</h4>
    <div>
      <a href="/main/sort_by_name">Имени пользователя</a>
	  <a href="/main/sort_by_email">E-mail</a>
	  <a href="/main/sort_by_status">Статусу</a>
    </div>
  </div>

  <?php foreach ($m as $k): ?>
    <div class="main_el">
      <h5><?php echo $k['name']; ?></h5>
      <abbr><?php echo $k['email']; ?></abbr>
	  <p><?php echo mb_substr($k['text'], 0, 100); ?></p>
	  <img src="/images/<?php echo $k['im']; ?>" alt="Картинка <?php echo $k['im']; ?>">
      <em>
         Статус
         <b>
           <?php if(true==$k['status']) {echo 'Выполнена';} else {echo 'Не решена';}?>
         </b>
      </em>
    </div>
  <?php endforeach; ?>
  <div class="bottom_menu">
    <?php for($a = 1; $a <= $nstr; $a++): ?>
        <a href="<?php echo '/main/sort_by_' . $sf . '/' . $a;?>">
            <?php echo $a; ?>
        </a>
    <?php endfor; ?>
  </div>
</body>
</html>