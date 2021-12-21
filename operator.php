<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ยินดีต้อนรับสู่โลก</title>
</head>

<body>
<?php
    $salary = 25000;
    echo "เงินเดือน".$salary."บาท";
    echo "<br>";
    echo "---------------------------------";
    echo "<br>";
    if($salary<10000){
        $bonus = ($salary * 80)/100;
    }else if($salary<=50000){
        $bonus = ($salary * 50)/100;
    }else{
        $bonus = ($salary * 30)/100;
    }
    echo "ได้รับโบนัส = ".$bonus." บาท";
    echo "<br>";
    $money = 37500;
    echo "รายรับสุทธิ = ".$money."บาท";
    echo "<br>";
    if($money <=37500){
        $money = ($salary * 80)/100;
    }else if($money<=37500){
        $money = ($salary * 50)/100;
    }else{
        $money = ($salary * 30)/100;
    }
    $tax = 2625;
    echo "คิดภาษี 7% จากราบรับสุทธิ = ".$tax."บาท";
    echo "<br>";
    if($tax <37500){
        $tax = ($money * 0.07);
    }else if($tax <=50000){
        $tax = ($money * 0.07);
    }
    $taxded = 34875;
    echo "รายรับหลังหักภาษี = ".$taxded."บาท";
    if($taxded =37500)
    ?>
</body>

</html>