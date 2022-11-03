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
class internet
{

    
    public function __construct($hostname = "localhost", $username, $pass, $dbName)
    {
        $connection = "$hostname, $username, $pass, $dbName";
        return $connection;
    }


    /* public her yerden erişilebilir. */
    public $nickname = "İlker";
    public $oyunname = "İlkerklka";

    
    public function write()
    {
        function karesi($sayi)
        {
        return $sayi*$sayi;
        }
        $sonuc="8 Sayısının Karesi:".karesi(8);
        echo "<br>";
        echo $sonuc;
        
    }

    public function Total($input){
        for ($i=0; $i < $input; $i++) { 
            echo $i*$i;
            echo "<br>";
        }
    }
     
    
}
echo "<br>";

$nesne = new internet("ilkerkyilmaz.com", "ilkerklka", "15264859", "ilk");


echo "<br>";

print_r($nesne);

echo $nesne->write();
echo "<br>";
$nesne->Total(5);
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

?>
</body>
</html>