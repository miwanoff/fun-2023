<?php
include 'header.php';
$condition = true;
if ($condition){
    include 'vars.php' ;
}
else {
    include 'vars1.php'; 
}
 
echo "\n\t<h3>A $color $fruit</h3>";
include 'footer.php';