<?php
class clsarraypru
{
    static public function medarraypru()
    {
        if(isset($_POST["btnagregarsalida"]))
        {
            $p=array("y" => $_POST["aa"]);
            return $p;
        }
    }
}

?>