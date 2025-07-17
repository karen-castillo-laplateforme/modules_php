<?php
// EXERCICE 1
echo "EXERCICE 1 <br>";
  $i=1;
  while ($i <= 20){
    echo $i ."/";
    $i++;
  }
  
//   EXERCICE 2
echo "<br> <br> EXERCICE 2 <br>";

$i=20;
do{
  echo $i ." ";
  $i--;
} while($i <= 20 && $i >=1);

//   EXERCICE 3
echo "<br> <br> EXERCICE 3 <br>";

for ($i = 1; $i <= 10; $i++ ){
    echo "$i x 7 =" .$i * 7 ."<br>" ;
}

//   EXERCICE 4
echo "<br> EXERCICE 4 <br>";
$result = 0;

for ($i = 1; $i <= 100; $i++){

  $result += $i;    
}
echo $result;

// EXERCICE 5
echo "<br><br> EXERCICE 5 <br>";

for ($line = 1; $line <= 5; $line++){
  for($column = 1; $column <= $line; $column++){
    echo "*";
  }
  echo "<br>";
}
?>