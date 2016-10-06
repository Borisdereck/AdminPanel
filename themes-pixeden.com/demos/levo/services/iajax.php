<?php
sleep(2);
header('content-type: application/json; charset=utf-8');//HEADER PARA JSON
include_once 'puntosDao.php';
$ac = isset($_POST["tipo"])?$_POST["tipo"]:"x"; //PARAMETRO PARA DETERMINAR LA ACCION

switch ($ac) {
    case "grabar":
        $p = new puntosDao();
        $exito = $p->grabar($_POST["nom"], $_POST["nit"], $_POST["dir"], $_POST["tel"], $_POST["ti"]);
        if($exito)
        {
            $r["estado"] = "ok";
            $r["mensaje"] = "Grabado Correctamente";
        }
        else
        {
            $r["estado"] = "error";
            $r["mensaje"] = "error al grabar!";
        }
    break;

    case "grabarprom":
        $p = new puntosDao();
        //$file = $_FILES["file"];
        //$nombre = $file["name"];
        $exito = $p->grabarprom($_POST["nom"],
                                $_POST["pre"],
                                $_POST["fi"],
                                $_POST["ff"],
                                $_POST["hi"],
                                $_POST["hf"],
                                $_POST["int"],
                                $_POST["img"]);
        if($exito)
        {
            $r["estado"] = "ok";
            $r["mensaje"] = "Grabado Correctamente";
        }
        else
        {
            $r["estado"] = "error";
            $r["mensaje"] = "error al grabar!";
        }
    break;

		case "borrar":
		$d = new puntosDao();
		$resultados = $d->borrar($_POST["id"]);
		if($resultados)
		{
				$r["estado"] = "ok";
				$r["mensaje"] = "Grabado Correctamente";
		}
		else
		{
				$r["estado"] = "error";
				$r["mensaje"] = "error al grabar!";
		}

		break;

		case "listar":
				$p = new puntosDao();
				$resultados =  $p->listar_todo();
				if (sizeof($resultados)>0) {
					$r["estado"] = "ok";
					$r["mensaje"] = $resultados;
				}
				else{
					$r["estado"] = "error";
					$r["mensaje"] = "No ahi registros!";
				}
		break;

   default:
        $r["estado"] = "error";
        $r["mensaje"] = "datos no validos";
    break;
}
echo json_encode($r);//IMPRIMIR JSON
?>
