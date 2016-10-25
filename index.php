<?php

$_SESSION['utilisateur']='moi';
$variable=[
          ['indic1'=>1,
          'indice2'=>[
                    'indice12'=>'soustab1',
                    'indic22'=>'soustab1',
                    'indice32'=>'soustab1',
                    'indice6'=>true,
          ],
          'indice3'=>000000,
        ],
        ['indic4'=>1,
        'indice2'=>[
                  'indice15'=>'soustab8',
                  'indic25'=>'soustab7',
                  'indice35'=>'soustab9',
                  'indice6'=>false,
        ],
        'indice6'=>000000,
      ],
  ];
  foreach ($variable as $book) {

  foreach ($book['indice2'] as $key => $value) {
          fct( $key , $value);
  }
}
function fct($param1,$param2){
  if ($param1=='indice6'&& $param2==false) {
    return false;
  }
  print strtoupper($param1).':'.$param2.'<hr/>';
}



?>
