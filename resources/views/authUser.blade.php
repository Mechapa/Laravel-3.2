<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>Информация о пользователе</h1>
  <div>
    <div>Имя пользователя: {{ $user->name }}</div>
    <div>id: {{ $user->id }}</div>
    <div>email: {{ $user->email }}</div>
  </div>
</body>
</html>