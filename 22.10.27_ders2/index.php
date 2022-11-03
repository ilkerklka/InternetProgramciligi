<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İnternet Programcılığı</title>
</head>
<body>
1    <?php
    /*
        class : herhangi bir peogramlamada belirli bir veya daha fazla işi gerçekleştirmek üzere önceden hazırlanan nesnelerle verilen isimdir

        new : Dha önceden tanımlanmış olan herhangi bir sınıfı çağırmak için kullanılır. 

        Kuralları :
            --Sınıf isimleri her zaman anlamlı olarak kullanılmalıdır
            --Sınıf isimleri içerisinde alfanumerik(A-Z a-z 0-9) değerler ve "_" kullanılabilir
            --Sınıf isimleri mutlaka bir harf veya _ ile başlamalıdır
            --Sınıf isimleri rakam ile başlayamaz
            --Sınıf isimleri tanımlanırken ; php tarafından kullanılmakta olan isimler/tanımlar kullanılamaz.
            --Sınıf isimleri hiçbir zaman birden fazla kez kullanılamaz. (Namespace(isim uzaylı)kullanılması durumunda birden fazla kes farklı name space içerisinde kullanılabilir.)
            --Sınıf isimleri küçük/büyük harf duyarlı değildir
            --Sınıf kapsama/etki alanı kurallarına tabidir
        Yapısı:
            class isim(
                Kod blokları...
            )
    */ 

    class sinif {

        /*yapıcı metoflara parametre gönderilebilir
        Yapıcı metodlara gönderilicek parametrelere varsayılan değer atanabilir (localhost) . 
        değer geilrse de gelen değer aktif olur
        */
        public function __construct($hostname="localhost" , $username , $pass , $dbname)
        {
            $connection= "$hostname , $username , $pass  , $dbname";
        }

        public $isim = "mehmet";
        public $soyisim = " hanaylı";


        public function write(){
            return $metin;
        }

        public function __destruct()
        {
            echo "yıkıcı method çalıştı";
        }
    }

    $nesne = new sinif("mehmethanayli.com", "mhanayli" , "123" ,"mch_db");
    ?>
</body>
</html>