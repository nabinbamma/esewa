<?php

include 'setting.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-sewa integrated.</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    
<div class="card"style="width:250px">
<img src="esewaa.jpg" alt="ESEWA INTEGRATE" class="card-img-top">
<div class="card-body">
<div class="card-title">
Add Your Ads.
</div><br>
<div class="card-text">You can use this software for Paying money with ESEWA.</div><br>

<form action="<?php  echo $epay_url  ?>" method="POST">
    <input value="100" name="tAmt" type="hidden">
    <input value="90" name="amt" type="hidden">
   <input value="5" name="txAmt" type="hidden">
    <input value="2" name="psc" type="hidden">
    <input value="3" name="pdc" type="hidden"> 
    <input value="EPAYTEST" name="scd" type="hidden">
    <input value="<?php echo $pid ?> " name="pid" type="hidden">
    <input value="<?php echo $successurl ?>" type="hidden" name="su">
    <input value="<?php echo $failedurl ?>" type="hidden" name="fu">
    <input value= "Pay with E-sewa your fee." type="submit" class="btn-btn-primary">
    </form>

</div>
</div>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>
</html>