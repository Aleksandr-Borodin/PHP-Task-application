<!DOCTYPE html>
<html>
<head>
  <link rel = "stylesheet" href = "/css/main.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="shortcut icon" href="../../images/favicon.ico" type="image/x-icon">
  <link rel="image_src" href="../../images/open-graph-tasks.jpg">
  <meta http-equiv = "content-type" content = "text/html; charset=utf-8">
  <meta property="og:title" content="Tasks">
  <meta property="og:image" content="/images/open-graph-tasks.jpg">
  <title>Изменение записи</title>
</head>
<body>
  <div class="top_menu">
    <a href="/admin">Перейти в админ. панель</a>
  </div>
  <h3>Изменение записи</h3>
  <form action="/admin" method="post">
    <input type="text" name="text_edit" placeholder="<?php echo $b[1]; ?>">
    <?php $_SESSION['id'] = $b[0]; ?>
    <em>Статус: <input type="checkbox" name="status_edit" value="1"></em>

    <input type="submit" value="Изменить">
  </form>
</body>
</html>