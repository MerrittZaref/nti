<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> calculat max and mini </title>
        <link rel="stylesheet" href="/xampp8/htdocs/nti/bootstrap.css">
        <link rel="stylesheet" href="/xampp8/htdocs/nti/all.min.css">

    </head>
<div class="container">
    <div class="row">
        <div class="col-12">
        <p class="text-warning">type numer one </p>
        <input type="number" class="form-control" placeholder="number 2">
        <br>
        <!-- <br>
        <p class="text-warning">Type numer two</p>
        <input type="number" class="form-control" placeholder="number 1">
            <br>
            <br> -->
        <button type="button" class="btn btn-warning">calculat</button>

        </div>
    </div>
</div>
</html>
<?php
//  $numb = "0";
// $Numb < "0";
// $NUmb > "0";
if($numb = 0 ){
    $message = "nurmal numer";
}
    elseif($numb < 1){
     $message = "postive number";}
    elseif($numb > -1){
        $message = "nigatavnumber";
    }
else{ $message = "insert number";
}
echo $message
?>