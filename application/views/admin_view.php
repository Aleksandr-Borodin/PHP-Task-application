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
  <title>Вход в панель администратора</title>
</head>
<body>
  <div class="top_menu">
    <a href="/main/sort_by_name">Перейти к списку задач</a>
  </div>
  <h3>Вход в панель администратора</h3>
  <form action="/admin" method="post" enctype="multipart/form-data">
    <input type="text" name="user" placeholder="Введите имя пользователя">
    <input type="password" name="pas" placeholder="Введите пароль">
    <input type="submit" value="Войти">
  </form>
</body>
</html>