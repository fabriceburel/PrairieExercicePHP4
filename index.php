<?php
for ($i=0; $i <= 100; $i++)
{
  if ($i==0){
     echo $i. "<br/>";
   }
  else if ($i%3==0 & $i%5==0){
      echo "fizzbuzz <br/>";
  }
  else if ($i%3==0){
      echo "fizz <br/>";
  }
  else if ($i%5==0){
      echo "buzz <br/>";
  }
  else {
    echo $i. "<br/>";
  }
}
?>
