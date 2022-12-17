<?php
class Salary{
public $tax;
public $netSalary;
public $totaldeduction;
public $pension;
public $grossSalary;

public function tax($grossSalary)
{
if ($grossSalary<=650){
  $tax=0*$grossSalary;
   return $tax;
}
   elseif($grossSalary<=1650 && $grossSalary>650) {
  $tax=(0.1*$grossSalary)-60;
    return $tax;
   }
   elseif($grossSalary<=3250 && $grossSalary>1650){
  $tax=(0.15*$grossSalary)-142.5;
    return $tax;
   }
   elseif($grossSalary<=5200 && $grossSalary>3250){
  $tax=(0.2*$grossSalary)-302.5;
    return $tax;
   }
   elseif($grossSalary<=7800 && $grossSalary>5200){
  $tax=(0.25*$grossSalary)-565;
    return $tax;
   }
   elseif($grossSalary<=10900 && $grossSalary>7800){
  $tax=(0.3*$grossSalary)-955;
    return $tax; 
   }
   elseif($grossSalary>10900){
  $tax=(0.35*$grossSalary)-1500;
    return $tax;
   } 
}
public function pension($grossSalary){
         $pension=0.07*$grossSalary;
        return $pension;
}
public function totaldeduction($tax,$pension)
{
    $totaldeduction=$tax+$pension;
    return $totaldeduction;
}
public function netSalary($grossSalary,$totaldeduction){
    $netSalary=$grossSalary-$totaldeduction;
    return $netSalary;
}
}
$salary= new Salary();
$t=$salary->tax(6000);
$p=$salary->pension(6000);
$d=$salary->totaldeduction($t,$p);
$n=$salary->netSalary(6000,$d);
echo $t."\n";
echo $p."\n";
echo $d."\n";
echo $n."\n";
$salary= new Salary();
$t1=$salary->tax(10000);
$p1=$salary->pension(10000);
$d1=$salary->totaldeduction($t,$p);
$n1=$salary->netSalary(10000,$d);
echo $t1."\n";
echo $p1."\n";
echo $d1."\n";
echo $n1;
?>



