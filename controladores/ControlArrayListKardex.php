<?php
class clsControlArrayListKardex
{


    static public function medControlArrayListKardex()
    {
        $respuesta = clsModelListKardex::medModelListKardex();
        return $respuesta;
    }

}
?>