<?php
  for ($i=1; $i <= 100; $i++)
  {
   if ($i%3==0 && $i%5==0){
        echo 'Fizzbuzz ';
    } elseif ($i%3==0){
        echo 'Fizz ';
    } else if ($i%5==0){
        echo 'buzz ';
    } else {
          echo $i . ' ';
          }
  }
?>
