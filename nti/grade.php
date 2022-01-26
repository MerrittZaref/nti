<?php
$grade = "90%";
if($grade < "40%" ){
    $message ="grade F";
}elseif($grade >= "40%"){
    $message = "grade E"  ;
}elseif($grade >= "60%"){
       $message = "grade D" ;
}elseif($grade >= "70%"){
    $message = "grade C";
}elseif($grade >= "80%"){
    $message = "grade B";
}elseif($grade >= "90%"){
    $message = "grade A";
}else{ 
    $message = "very good";
}
echo $message;