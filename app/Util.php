<?php

namespace App;

class Util{

    public static function removerMescaraNumero($valor){
        if($valor != null){
            $valor = str_replace("R$ ","",$valor);
            $valor = str_replace("% ","",$valor);
            if(strrpos('.',$valor)){
                $valor = str_replace(".","",$valor);
            }
            $valor = str_replace(",",".",$valor);
            return $valor;
        }
        return 0;
    }
}
