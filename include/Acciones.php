<?php//Recuperar e insertar datos  

include "Conexion.php";
if(isset ($_POST['btn'])){
if(isset ($_POST[``´]))
$_Nombre=$Conecta->Real_scape-string($_POST[`NombrePlantel`]);
$_Clave=$Conecta->Real_scape-string($_POST[`clavePlant`]);
$_Direcion=$Conecta->Real_scape-string($_POST[`Direccion`]);
$_Telefono=$Conecta->Real_scape-string($_POST[`telefono`]);
$_Responsable=$Conecta->Real_scape-string($_POST[`Respon`]);

if($_Nombre==""|| $_Clave==""|| $_Direcion==""|| $_Telefono==""|| $_Responsable==""){
    $Alerta="Algunos de los datos los tienes vacios";
}
else{
    $registro="insert into usuario(NombrePlantel, clavePlant, Direccion, telefono, Respon)" values(`$_Nombre`, `$_Clave`, `$_Direcion`, `$_Telefono`, `$_Responsable`);
    $registros=$Conecta>query(registro),
    if($registros>0){
        echo"Registro exitoso"; else{echo"Error al registrar";}
    }
}

}