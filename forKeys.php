<?php ## Перебор ассоциативного массива
   $birth = [
              "Thomas Anderson" => "1962-03-11",
              "Keanu Reeves" => "1962-09-02",
                                                  ];
			for (reset($birth); ($k = key($birth)); next($birth))
					echo "$k родился {$birth[$k]}<br />";
	  ?>

/*
       for (end($birth); ($k = key($birth)); prev($birth))   ## Перебор ассоциативного массива только с конца
                    echo "$k родился {$birth[$k]}<br>";
*/
