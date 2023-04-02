<?php

class Suma{
    public $numero1;
    public $numero2;

    public function __construct($_numero1, $_numero2)
    {
        $this->numero1 = $_numero1;
        $this->numero2 = $_numero2;
    }

    public function sumar()
    {
        echo "El numero 1 es: ". $this->numero1;
        echo "<br>";
        echo "El numero 2 es: ". $this->numero2;       
        echo "La suma es: ". $this->numero1 + $this->numero2;
    }
}

$total = new Suma($_POST['numero1'], $_POST['numero2']);
$total->sumar();
?>