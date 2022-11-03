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
class maashesap
{
    public $primler;
    public $aylıkpara;
    public $sigorta;
    public $avanslar;

    function __construct($primler ,$aylıkpara ,$sigorta , $avanslar)
    {
        $this->primler=$primler;
        $this->aylıkpara=$aylıkpara;
        $this->sigorta=$sigorta;
        $this->avanslar=$avanslar;

    }

    public function netmaashesapla(){
        $netmaas = ($this->primler + $this->aylıkpara - $this->sigorta - $this->avanslar);
        return $netmaas;
    }

    public function yillikazanc(){
        $yillikazanc = ($this->primler + $this->aylıkpara - $this->sigorta - $this->avanslar) * 12;
        return $yillikazanc;
    }
    
   
     

}


class maas extends maashesap{

}

class yillikmaas extends maashesap{

}


$netmas = new maas(350 , 8500 ,2000,150);
echo  $netmas->netmaashesapla();

echo"<br>";


$yil = new yillikmaas(500 , 10500 ,4000,250);
echo  $yil->yillikazanc();






?>
</body>
</html>