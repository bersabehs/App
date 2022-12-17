<?php
$mark = 80;
if($mark<33){
    echo"fail";
}
else if($mark>=34 && $mark<50){
    echo"D grade";
}
elseif($mark>=50 && $mark<65){
    echo"C grade";
}
else if($mark>=65 && $mark<80){
    echo"B grade";
}
else if($mark>=80 && $mark<100){
    echo"A grade";
}
else{
    echo"invalid";
}
?>