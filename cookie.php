<?php ## Демонстрация работы с массивом $_COOKIES 
 $count = 0; ## Вначале счетчик равен нулю
  if (isset($_COOKIE['count'])) $count = $_COOKIE['count']; ## Если в Cookies что-то есть, берем счетчик оттуда
   $count++; ## 
   setcookie("count", $count, 0x7FFFFFFF, "/"); ## Записываем в Cookies новое значение счетчика
 echo $count; ## Выводим счетчиk
 
  
