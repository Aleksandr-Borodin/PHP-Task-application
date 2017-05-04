<!DOCTYPE html>
<html>
<head>
   <link rel = "stylesheet" href = "/css/main.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <meta http-equiv = "content-type" content = "text/html; charset=utf-8">
  <title>Создать задачу</title>
</head>
<body>
  <h3>
    Создать задачу
  </h3>
  <form action="/create" method="post" enctype="multipart/form-data">
    <input type="text" name="namep" placeholder="Введите имя пользователя">
	<input type="email" name="adrp" placeholder="Введите e-mail">
	<input type="text" name="text" placeholder="Введите текст задачи" class="text">
	<input type="file" name="image" accept="image/jpeg,image/png,image/gif">
    <input type="submit" value="Опубликовать">
  </form>
</body>
</html>
