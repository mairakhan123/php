<!----------------or,and opt---------------->
<?php
// $Discount_spent=5000;
// $voucher_code="vc1234";
// if($Discount_spent==5000 or $voucher_code=="vc1235")
//    var_dump($f);
$age=32;
$sal=5000;
$mar="married";
$eli = ($age>=30 && ($sal>=25000 or $mar=="married"));
var_dump($eli);


   ?>
   <br>
   <!----------------xor------------------->
   <?php
   var_dump(10^7)
   
   ?>
   <br>
   <!--------------ternary operator----------->
    <?php
   $p=60;
   $status=$p > 60 ?"p" : "f";
   echo ($status)
   ?>
