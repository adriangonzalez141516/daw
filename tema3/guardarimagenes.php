
<html>
<head>
<meta charset="UTF-8">
<title> Guardar Imagenes</title>
</head>
<body>
<?php

   

   if($_FILES["userfile"] !=null && comprobarTamañoYNumero($_FILES["userfile"]['size'])){
    if(comprobarF($_FILES["userfile"]['type'])){

      foreach($_FILES["userfile"]['tmp_name'] as $key => $tmp_name)
        {
            //condicional si el fuchero existe
            if($_FILES["userfile"]["name"][$key]) {
                // Nombres de archivos de temporales
                $archivonombre = $_FILES["userfile"]["name"][$key]; 
                $fuente = $_FILES["userfile"]["tmp_name"][$key]; 
                $size=$_FILES["userfile"]["size"][$key];


                $carpeta = 'archivos/'; //Declaramos el nombre de la carpeta que guardara los archivos
                
                if(!file_exists($carpeta)){
                    mkdir($carpeta, 0777) or die("Hubo un error al crear el directorio de almacenamiento"); 
                }
                
                $dir=opendir($carpeta);
                $target_path = $carpeta.'/'.$archivonombre; //indicamos la ruta de destino de los archivos
                if(file_exists($target_path)){
                   echo "<span style='font-size:50px;color:red;  '>&#9785</span> No se puede guardar el archivo por que ya existia   <b> ".$archivonombre."</b><br>";
                }else{        
                if(move_uploaded_file($fuente, $target_path)) { 
                   echo "<span style='font-size:50px;color:green;'>&#9786</span> Se ha copiado el archivo <b> " . $archivonombre . '</b><br />';
                    } else {    
                      echo "<span style='font-size:50px;color:red;  '>&#9785</span> No se puede guardar el archivo <b> ".$archivonombre."</b><br>";
                }}

                closedir($dir); //Cerramos la conexion con la carpeta destino
            
            }
        }
    }else{
         avisojs(" Solo se permiten jpg y png.");
        exit();
    }
    }else{
        avisojs(" Comprueba los archivos.");
        exit();
    }
   
    function avisojs (  $msg) {
        echo "<script> alert (\"".$msg."\") </script>";
    }



    function comprobarTamañoYNumero(array $tablaficheros){

        if(count($tablaficheros)>2 || count($tablaficheros)<1){
            return false;
        }
        $tamañototal=0;
          foreach($tablaficheros as $key => $tmp_name)
            {
                if($tablaficheros[$key]>200000){
                    return false;
                }
                $tamañototal+=$tablaficheros[$key];

            }
            if($tamañototal>300000){
                return false;
            }
        return true;
    }

    function comprobarF(array $tablaficheros){
          foreach($tablaficheros as $key => $tmp_name)
            {
                

                if($tablaficheros[$key]==null){
                    return false;
                }
                if(!strcmp($tablaficheros[$key], "image/png") && !strcmp($tablaficheros[$key], "image/jpg") && !strcmp($tablaficheros[$key], "image/jpeg")){
                    
                    return false;
                
                }
            }
        return true;
    }


?>
</body>
</html>