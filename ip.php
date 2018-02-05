<!DOCTYPE html> #Вывод IP-адреса и браузера пользователя 
 <html lang="ru">
  <head>
   <title> Вывод IP-адреса и браузера пользователя </title>
   <meta charset='utf-8'>
  </head>
 <body>
  Ваш IP-адрес: <?=$SERVER['REMOTE_ADRR'] ?> <br />
  Ваш браузер: <?= $_SERVER['HTTP_USER_AGENT'] ?> 
 </body>
</html>
