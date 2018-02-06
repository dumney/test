<?php     # Использование оператора goto
  $i = 0;
  
  begin:
    $i++;
    echo "$i<br />";
    if($i >= 10) go to finish;
    goto begin;
  finish:
 ?>
