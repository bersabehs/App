<?php
$salary=4500
$tax=0
$pension=0
$netpay=0
if($salary<=650){
    $tax=0*$salary;
    $pension=0.07*$salary;
    $netpay=$salary-$tax-$netpay;
    echo"net pay
}