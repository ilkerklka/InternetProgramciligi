<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İnternet Programcılığı</title>
</head>
<body>
    <?php




        class Personel{


            function __construct()
            {
                echo "Yapıcı method çağrıldı";
            }

            function __destruct()
            {
                echo "Yıkıcı method çalıştı";
            }
            /*Attrinutes - Özellikler*/ 
            public $id="1";
            public $ad="Eren";
            public $yas=31;

            var $cinsiyet ="Erkek";

            public const TC =111111111;

           

            public function selamVer1(){
                echo "selam ver 1 çalıştı";
            }

            public function selamVer2(){
                return "selam ver 2 çalıştı";
            }
        }


        $nesne = new Personel;

        echo $nesne->ad;
        echo "<br>";
        echo $nesne->cinsiyet;
        
        echo "<br>";
        echo $nesne::TC;
        echo "<br>";

        $nesne->selamVer1();

        echo "<br>";

       echo $nesne->selamVer2();




    ?>
</body>
</html>