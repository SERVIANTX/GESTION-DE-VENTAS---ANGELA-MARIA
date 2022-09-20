<?php
class clsControlArrayVentasDash
{

    /* Seleccionar Producto */
    static public function medSeleccionarVentasDash()
    {
        
        $respuesta = clsModelListVentasDash::medModelListVentasDash();
        return $respuesta;

    }

    static public function medSeleccionarVentasDash2()
    {
        
        $respuesta = clsModelListVentasDash::medModelListVentasDash2();
        return $respuesta;
        
    }

    static public function medSeleccionarVentasDash3()
    {
        
        $respuesta = clsModelListVentasDash::medModelListVentasDash3();
        return $respuesta;
        
    }

    static public function medSeleccionarVentasDash4()
    {
        
        $respuesta = clsModelListVentasDash::medModelListVentasDash4();
        return $respuesta;
        
    }

    static public function medSeleccionarVentasDash5()
    {
        
        $respuesta = clsModelListVentasDash::medModelListVentasDash5();
        return $respuesta;
        
    }
    static public function medSeleccionarVentasDash6()
    {
        date_default_timezone_set('America/Mexico_City');
        $Fech = date("Y-m-d"); 
       

        $respuesta = clsModelListVentasDash::medModelListVentasDash6($Fech);
        return $respuesta;
        
    }

}
?>