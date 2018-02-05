<!DOCTYPE html>
<html lang="ru">
<head>
<title>Документ с формой</title>
<meta charset='utf-8'>
</head>
<body> 
	<!-- Навязчивые предупреждения -->
<form action="warn.php">
<input type="submit" name="doGo" value="Click!">
</form>
<?php
// В массиве $_REQUEST всегда содержатся пришедшие из формы данные.
if ($_REQUEST['doGo']) echo "Вы нажали кнопку!";
?>
</body>
</html>