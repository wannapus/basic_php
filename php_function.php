<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo"=================is_numberic============<br>";
        $num1 = 1545000;
        $num2 = "125000";
        $num3 = "Wannapus16";
        echo "num1 = ".is_numeric($num1)."<br>";
        echo "num2 = ".is_numeric($num2)."<br>";
        echo "num3 = ".is_numeric($num3)."<br>";
        echo"=================round ciel floor============<br>";
        echo "round 4.7 = ".round(4.7)."<br>";
        echo "ceil 4.7 = ".ceil(4.7)."<br>";
        echo "floor 4.7 = ".floor(4.7)."<br>";
        echo"=================min max============<br>";
        echo "min(4,7,8,3,5,2) = ".min(4,7,8,3,5,2)."<br>";
        echo "max(4,7,8,3,5,2) = ".max(4,7,8,3,5,2)."<br>";
        echo"=================rand============<br>";
        echo"rand (1, 48) = ".rand(1, 48)."<br>";
        echo"=================is_null============<br>";
        $a = null;
        echo"is_null (48) = ".is_null($a)."<br>";
        echo"================number_format=============<br>";
        $number = 5000;
        echo"number_format 5000 = ".number_format($number,2)." บาท<br>";
        echo"================trim=============<br>";
        echo"trim = ".trim(" Wannapus ")."<br>";
        echo"ltrim = ".trim(" Wannapus ")."<br>";
        echo"rtrim = ".trim(" Wannapus ")."<br>";
        echo"================strtolower,strtoupper=============<br>";
        echo"strtolower(WANNAPUS) = ".strtolower("WANNAPUS")."<br>";
        echo"strtoupper(wannapus) = ".strtoupper("wannapus")."<br>";
        echo"================substr=============<br>";
        $tetx = "Wannapus<br>";
        echo"substr(Wannapus) = ".substr($tetx,5,7)."<br>";
        echo"================substr_count=============<br>";
        echo"substr_count(Wannapus) = ".substr_count($tetx, "a")."<br>";
        echo"================strlen=============<br>";
        echo"strlen(Wannapus) = ".strlen($tetx)."<br>";
        echo"================MD5=============<br>";
        $password = 123456789;
        echo"MD5(123456789) = ".md5($password)."<br>";
        echo"================date=============<br>";
        echo"date(28-12-21) = ".date('d-m-y')."<br>";
        echo"date(28/12/21) = ".date('d/m/Y')."<br>";
        echo"date(28/12/21) = ".date('D/M/Y')."<br>";
        echo"date(28/12/21) = ".date('d/M/Y')."<br>";
        echo"date(d) = ".date('d')."<br>";
        echo"date(M) = ".date('M')."<br>";
        echo"date(Y) = ".date('Y')."<br>";
        echo"date(Y) = ".date('Y')+543;
    ?>
</body>
</html>