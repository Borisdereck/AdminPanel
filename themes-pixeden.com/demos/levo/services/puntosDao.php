<?php
include_once 'conex.php';//INCLUIR CONEXION DE BASE DE DATOS

class puntosDao
{
    private $r;
    public function __construct()
    {
        $this->r = array();
    }
    public function grabar($nom, $nit, $dir, $tel, $ti)//METODO PARA GRABAR A LA BD
    {
        $con = conex::con();
        $id = rand(0,1000);
        $nom = mysql_real_escape_string($nom);
        $nit = mysql_real_escape_string($nit);
        $dir = mysql_real_escape_string($dir);
        $tel = mysql_real_escape_string($tel);
        $tipo = mysql_real_escape_string($ti);
        $q = "insert into empresa (id, nombre, telefono, direccion, nit, tipo)".
             "values ('".addslashes($id)."','".addslashes($nom)."','".addslashes($tel)."','".addslashes($dir)."','".addslashes($nit)."','".addslashes($tipo)."')";
        $rpta = mysql_query($q, $con);
        mysql_close($con);
        if($rpta==1)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }

    public function grabarprom($nom, $pre, $fi, $ff, $hi, $hf, $int, $uploader)//METODO PARA GRABAR A LA BD
    {
        $con = conex::con();
        $id = rand(0,1000);
        //$empr = mysql_real_escape_string($emp);
        $nomb = mysql_real_escape_string($nom);
        $prec = mysql_real_escape_string($pre);
        $fin = mysql_real_escape_string($fi);
        $ffi = mysql_real_escape_string($ff);
        $hin = mysql_real_escape_string($hi);
        $hfi = mysql_real_escape_string($hf);
        $inte = mysql_real_escape_string($int);
        $uploaders = mysql_real_escape_string($uploader);
          $q = "insert into promocion (idPromocion, Nombre, precio, fechaini, fechafin, horaini, horafin, idintereses, imagen)".
             "values ('".addslashes($id)."',
                      '".addslashes($nomb)."',
                      '".addslashes($prec)."',
                      '".addslashes($fin)."',
                      '".addslashes($ffi)."',
                      '".addslashes($hin)."',
                      '".addslashes($hfi)."',
                      '".addslashes($inte)."',
                      '".addslashes($uploaders)."')";
        $rpta = mysql_query($q, $con);
        mysql_close($con);
        if($rpta==1)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }

		public function borrar($id){
			$con = conex::con();
			$idpunto = mysql_real_escape_string($id);
			$q = "delete from puntos where IdPunto = ".(int)$idpunto;
			$rpta = mysql_query($q, $con);
			mysql_close($con);
			if($rpta==1)
			{
					return TRUE;
			}
			else
			{
					return FALSE;
			}
		}

		public function listar_todo(){
				$q = "select * from puntos";
				$con = conex::con();
				$rpta = mysql_query($q,$con);
				mysql_close($con);
				while ($fila = mysql_fetch_assoc($rpta)) {
						$this->r[] = $fila;
				}
				return $this->r;
		}
 }
?>
