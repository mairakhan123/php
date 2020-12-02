<?php
$name="maryam hafeez";
$age=31 +2.5;
$height=5;
 
var_dump( $age);

?>
<br>
<?php
$salary=25000;
$sale=200000;
$commision_pcnt=10;
 
$commision = ($sale * $commision_pcnt)/100;
$deduction = 500;
$income = $salary+ $commision - $deduction;
echo"my income is $income";
?>
<br>
<?php
$salary=25000;
$sale=200000;
$commision_pcnt=10;
 
$commision = ($sale * $commision_pcnt)/100;
$deduction = 500;
define ("INCOME",$salary+ $commision -$deduction);
echo"my income is". INCOME;
?>
<br>
