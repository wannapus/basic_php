<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ยินดีต้อนรับสู่โลก</title>
</head>

<body>
<h1>การแสดงผลตัวแปรอาร์เรย์แบบวนรอบ</h1>
<?php 
    $colors=array("red"=>"100","blue"=>"200","yellow"=>"300","black"=>"400","green"=>"500","pink"=>"600");
    //$number=array("100","200","300","400","500","600");
    foreach($colors as $colors => $number):
        echo "สี : ".$colors." => ";
        echo "รหัส :".$number."<br>";
    endforeach;
    ?>
</body>

</html>