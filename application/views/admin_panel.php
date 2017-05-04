<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <meta http-equiv = "content-type" content = "text/html; charset=utf-8">
  <title>Панель администратора</title>
</head>
<body>
  <div>
    <a href="/main/sort_by_name">Перейти к списку задач</a>
  </div>
  <h3>Панель администратора</h3>
  <table class="table table-bordered table-hover table-condensed ">
    <thead>
      <tr>
        <th>Омя пользователя</th>
        <th>E-mail</th>
        <th>Текст задачи</th>
        <th>Статус</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($m as $a): ?>
        <tr>
          <td><?php echo $a['name']; ?></td>
          <td><?php echo $a['email']; ?></td>
          <td><?php echo $a['text']; ?></td>
          <td><?php echo $a['status']; ?></td>
          <td><a href="/admin/<?php echo $a['id']; ?>">Редактировать</a></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</body>
</html>