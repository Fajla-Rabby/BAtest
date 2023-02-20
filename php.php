//1. ans to the question one 
<?php
$num = 17;
if ($num % 2 == 0){
  echo $num." is an even number.";
} elseif ($num % 2 == 1) {
  echo $num." is an odd number.";
}
?>

//2. ans to the question no two
<?php
for ($i = 1; $i <= 10; $i += 3) {
  echo $i;
}
?>


//3 ans to the question no three
<?php
function fibonacci($n) {
  if ($n == 0) {
    return 0;
  } elseif ($n == 1) {
    return 1;
  } else {
    return fibonacci($n-1) + fibonacci($n-2);
  }
}

for ($i = 0; $i < 10; $i++) {
  echo fibonacci($i);
}
?>

//4. ans to the question no four 
<?php
function number($a, $b) {
    return $a + $b;
  }
?>
