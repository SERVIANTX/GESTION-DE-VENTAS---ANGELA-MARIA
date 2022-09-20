<?php

require_once "controladores/ControlPlantillaLogin.php";
require_once "controladores/ControlPlantillaInicio.php";


require_once "controladores/ControlArrayIniciarSesion.php";

require_once "modelos/ModelSelectLogin.php";

require_once "modelos/ModelInsertProveedor.php";

$login = new LlamarLogin();
$login ->MetodoLogin();






