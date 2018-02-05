<php //Усовершенствованный скрипт блокировки сервера
 if (!isset($REQUEST['doGo'])) {?>
  <form action="<?=$_SERVER['SCRIPT_NAME']?>">
     Логин:<input type="text" name="login" value=""><br />
     Пароль:<input type="password" name="password" value=""><br />
   <input type="submit" name="doGo" value="Нажмите кнопку!">
 </form>
<php } else {
  if($_REQUEST['login'] == "root" && $REQUEST['password'] = "123") {
    echo "Доступ закрыт для пользователя {$_REQUEST['login']}"; # Команда блокирования рабочей станции (работает в NT-системах)
     system("rundll32.exe user32.dll,LockWorkStation");
  }else {
    echo "Доступ закрыт!";
  }
 } ?>
