<?php
namespace App\Controller;
class ControllerCarros{
    function valorCarro($tipo, $motor){
        if($tipo == 'veiculos' && $motor == '1'){
            $valor = '1000,00';
        }elseif($tipo == 'veiculos' && $motor == '2'){
            $valor = '2000,00';
        }elseif($tipo == 'caminhao'  && $motor == '1'){
            $valor = '4000,00';
        }elseif($tipo == 'caminhao'  && $motor == '2'){
            $valor = '5000,00';
        }
        echo "Tipo de carro é {$tipo} o motor é {$motor} e o valor é {$valor}";
    }
}
?>