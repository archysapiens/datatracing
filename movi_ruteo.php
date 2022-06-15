<?php

include "./general/generales.inc";
//require("./general/ac_db_inc.php");
require("./general/DBC.php");

$FileDebug =fopen("movi_ruteo.dbg", "w") ;
fwrite($FileDebug , "Inicia programa \n");
$method = "";
if(isset($_SERVER['REQUEST_METHOD']))
	$method = $_SERVER['REQUEST_METHOD'];

fwrite($FileDebug , "method >$method< \n");
if ( $method == "POST") {
	$Usuario = "ssamx_dbg";
	if (isset($_POST['inputUsuario']))
		$Usuario = $_POST['inputUsuario'];

	$Passwd = "ssamx_dbg";
	if (isset($_POST['inputPassword']))
		$Passwd  = $_POST['inputPassword'];
	
	$sql = "select mu.EMAIL, mu.CLAVE_ACCESO, mur.UR, mur.DESCRIPCION DESCRIPCION_UR, mp.ESTATUS, mr.ID, mr.DESCRIPCION, msp.RFC , msp.NOMBRE
	from MOVI_USUARIOS mu, MOVI_UR mur, MOVI_PRIVILEGIOS mp, MOVI_ROLES mr, MOVI_SERVIDORES_PUBLICOS msp
	where mu.MOVI_UR_ID=mur.ID and mu.ID=mp.MOVI_USUARIOS_ID and mp.MOVI_ROLES_ID=mr.ID and
	msp.RFC=mu.MOVI_SERVIDORES_PUBLICOS_RFC and mu.EMAIL='$Usuario' and  mu.CLAVE_ACCESO='$Passwd' and 
	mp.ESTATUS='A' order by mr.ID";
}
elseif( $method == "GET") {
	session_start();	
	date_default_timezone_set("America/Mexico_City");

}

	fwrite($FileDebug , "sql >$sql< \n");

	//$DBCnnx = new DbOracle("pro_nnomina", "ArchiSoft");

	echo "Antes del execFetchAll";

	//$res = $DBCnnx->execFetchAll($sql, "Query Example");
	$res =true;
	
	$TotalRegistros = 4; //count($res);
	
	fwrite($FileDebug , "TotalRegistros >$TotalRegistros< \n");
	$Privilegios="$TotalRegistros";
	
	//header("location: movi/movi_escritorio_ura.php");
	//exit;
	
	// Debug 2022-05-13 $Usuario = "ur@salud.gob.mx";
	
	if(!$res)
		header("location: index.html?msg=Credenciales no Autorizadas ");
	else{ 
		session_start();	
		//foreach ($res as $key ) {
		if ($Usuario == "ur@salud.gob.mx")	{
			
			$Email = "na25228@citi.com"; //$key['EMAIL'];
			$Nombre = "Noe Alvarez Salvador"; //$key['NOMBRE'];
			$UR =513 ; //$key['UR'];
			$URDesc ="Data Tracing"; //"$key['DESCRIPCION_UR'];
			$IDRol =4; //$key['ID'];
			$RolDesc ="Tech Lead"; //$key['DESCRIPCION'];
			fwrite($FileDebug , "Email >$Email< \n");
			fwrite($FileDebug , "Nombre >$Nombre< \n");
			fwrite($FileDebug , "UR >$UR< \n");
			fwrite($FileDebug , "URDesc >$URDesc< \n");
			fwrite($FileDebug , "IDRol >$IDRol< \n");
			fwrite($FileDebug , "RolDesc >$RolDesc< \n");
			$_SESSION['ur'] 	= $UR;
			$_SESSION['urd'] 	= $URDesc;
			$_SESSION['nombre'] = $Nombre;
		   	$_SESSION['intervalo']  = 10; // en minutos
			$_SESSION['inicio'] = time();
			$_SESSION['usuario'] = "xxx";
			if($IDRol < CINCO)
				$Privilegios ="|1|2|3|4"; //.$IDRol;
			fwrite($FileDebug , "Privilegios >$Privilegios< \n");
		}// foreach
		$_SESSION['nombre_usuario'] = $Usuario;
		$_SESSION['clave_acceso'] 	= $Passwd;
	}// fin del if


$Privilegios ="|1|2|3";

$ArrPrivilegios = explode("|", $Privilegios);

$TotalRegistros=3;

$Usuario = strtolower($Usuario);

// debug 20220513 $Usuario="ura.ssamx@gmail.com";
if($TotalRegistros > uno AND count($ArrPrivilegios) > UNO and $Usuario == "admin@citi.com"){
	
				fwrite($FileDebug , "if(\$TotalRegistros > uno AND count(\$ArrPrivilegios) > UNO and \$Usuario == \"admin@citi.com\" \n");
				
	$_SESSION['privilegios']      = $Privilegios;	
	header("location: movi_multi_perfil.php");
}
/**
else
	header("location: index2.php");
**/
elseif ($Usuario == "na25228@citi.com"){
	fwrite($FileDebug , " elseif (\$Usuario == \"na25228@citi.com\"){ \n");
	header("location: movi/movi_escritorio_ura.php?tipo=mp&origen=na25228@citi.com");
}
elseif ($Usuario == "ura.ssamx@gmail.com")
	header("location: movi/movi_escritorio_ura.php");
elseif ($Usuario == "ip.ssamx@gmail.com")
	header("location: movi/movi_escritorio_ip.php");
elseif ($Usuario == "dpssamx5@gmail.com")
	header("location: movi/movi_escritorio_dp.php");
elseif ($Usuario == "spc.ssamx@gmail.com")
	header("location: movi/movi_escritorio_spc.php");
elseif ($Usuario == "eeo.ssamx@gmail.com") // expediente electronico DIgitalizacion
	header("location: ee/ee_operacion.php");
elseif ($Usuario == "eem.ssamx@gmail.com") // expediente electronico monitoreo
	header("location: ee/ee_monitoreo.php");
elseif ($Usuario == "eec.ssamx@gmail.com") // expediente electronico consulta
	header("location: ee/ee_consulta.php?tipo=eec");
else
	header("location: index4.php");

fclose($FileDebug);
?>