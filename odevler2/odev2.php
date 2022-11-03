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

use Sinif as GlobalSinif;

    class Sinif{
        
        public function __construct(){
            $hosgeldin=" Karşılama mesajı çalıştı";
            echo $hosgeldin;
            echo "<br>";
        }

        public function __destruct()
        {
            echo "Yıkıcı metot çalıştı.(Destruct Metot)";
            echo "<br>";
        }

        public function Grade($vize,$final){
            
            $not=$vize*0.3 + $final*0.7;
            if ($not>=50) {
                echo "Geçtiniz,notunuz: " . $not;  
                echo "<br>";  
            }
            else{
                echo "Kaldınız";
                echo "<br>";
            }
        }

        public function factoriel($num){
            $total=1;
           for ($i=1; $i <= $num; $i++) { 
            $total=$i*$total;
           }
           echo "$num'ın faktöryeli ".$total;
           echo "<br>";
        }
    }

    $myClass = new Sinif();
    $myClass->Grade(50,80);
    $myClass->factoriel(5);
?>
</body>
</html>