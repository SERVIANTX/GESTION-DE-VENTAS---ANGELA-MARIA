<?php
class clsControlArrayReporteCliente
{


    static public function medReporteCliente()
    {
        

        $respuesta = clsModelListReporteCliente::medModelListReporteCliente();
        return $respuesta;
        
    }

}
?>