<?php
if(isset($_POST)){
    extract($_POST);
    $archivo = $_FILES["file"]["name"];
    $extencion = explode(".", $archivo);
    $ruta = "../archivos/".$archivo;
    if($extencion[1] == "xls" || $extencion[1] == "xlsx"){
        if(move_uploaded_file($_FILES["file"]["tmp_name"],$ruta)){
           echo "Archivo Cargado Con Éxito";
           chmod($ruta, 0777);
        }else{
            echo "Error Al Cargar el Archivo";
        }    
    }else{
        echo "El Archivo Debe Ser Excel";
    }
}
