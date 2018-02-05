<php
 ## Гарантированный прием значений от флажков. Файл checkbox.php
  if(isset($REQUEST['doGo']) and ($REQUEST['known'])){
    foreach($REQUEST['known'] as $k => $v) {
      if($v) echo "Вы знаете языка $k! <br />"
        else echo "Вы не знаете языка $k! <br />"
      }
    }
 ?>

<form action="<?=$_SERVER['SCRIPT_NAME']?>" method="post">
  Какие языки программирования вы знаете?<br />
    <input type="hidden" name="known[PHP]" value="0"> PHP <br />
      <input type="checkbox" name="know[PHP]" value="1">
    <input type="hidden" name="known[Perl]" value="0">
      <input type="chekbox" name="known[Perl]" value="1"> <br />
    <input type="submit" name="doGo" value="Go">
 </form>

