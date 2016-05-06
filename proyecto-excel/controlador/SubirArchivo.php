<?php
if(isset($_POST)){
    extract($_POST);
    $archivo = $_FILES["file"]["name"];
    $extencion = explode(".", $archivo);
    $ruta = "../archivos/".$archivo;
    if($extencion[1] == "xls" || $extencion[1] == "xlsx"){
        if(chmod(move_uploaded_file($_FILES["file"]["tmp_name"],0777),$ruta)){
           echo "Archivo Cargado Con Éxito";
        }else{
            echo "Error Al Cargar el Archivo";
        }    
    }else{
        echo "El Archivo Debe Ser Excel";
    }
}
