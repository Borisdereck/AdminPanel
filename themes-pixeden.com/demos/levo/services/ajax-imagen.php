<?php
sleep(2);
header('content-type: application/json; charset=utf-8');//HEADER PARA JSON
if (isset($_FILES["file"]))
{
    $file = $_FILES["file"];
    $nombre = $file["name"];
    $tipo = $file["type"];
    $ruta_provisional = $file["tmp_name"];
    $size = $file["size"];
    $dimensiones = getimagesize($ruta_provisional);
    $width = $dimensiones[0];
    $height = $dimensiones[1];
    $carpeta = "../images/";

    if ($tipo != 'image/jpg' && $tipo != 'image/jpeg' && $tipo != 'image/png' && $tipo != 'image/gif')
    {
      //echo "Error, el archivo no es una imagen";
      $r["estado"] = "error";
      $r["mensaje"] = "Error, el archivo no es una imagen";
    }
    else if ($size > 1024*1024)
    {
      //echo "Error, el tamaño máximo permitido es un 1MB";
      $r["estado"] = "error";
      $r["mensaje"] = "Error, el tamaño máximo permitido es un 1MB";
    }
    else
    {
        $src = $carpeta.$nombre;
        move_uploaded_file($ruta_provisional, $src);
        $r["estado"] = "ok";
        $r["mensaje"] = $nombre;
        //echo "<img src='$src'>";
    }
    echo json_encode($r);//IMPRIMIR JSON
}
