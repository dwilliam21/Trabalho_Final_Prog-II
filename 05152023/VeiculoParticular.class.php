<?php

require_once("Veiculo.class.php");

class VeiculoParticular extends Veiculo{

     public $ValorVeiculo;

     function __construct($Fabricante,$Modelo,$ValorVeiculo){

        parent::__construct($Fabricante,$Modelo);

        $this->ValorVeiculo=$ValorVeiculo;
     }

     function ValorVeiculo(){

        return $this->ValorVeiculo;
     }

     function VerVeiculo(){

        parent::VerVeiculo();

        echo "<b>Valor Veiculo: </b>{$this->ValorVeiculo}<br>";
        echo "<b>Valor Pago: </b>{$this->ValorVeiculo()}<br>";
        echo "<b>Tipo: </b>{$this->Tipo()}";
        echo "<hr>";
     }

     function Tipo(){
        return "Particular";
     }
}
?>