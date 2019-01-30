<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script type="text/javascript" src="js/modificarEstiloInputFile.js"></script>
        <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/estilo.css"/>
        <title>Modificar estilo de un input file</title>
    </head>
    
    <!-- Muestra el estilo modificado para los input files -->
    <body onLoad="mostrarInputFileModificado(1);
        mostrarInputFileModificado(2);">
        <div class="inputModificado">
            <input class="inputImagen" id="archivo1"/>
            <div class="botonInputFileModificado">
                <input type="file" class="inputImagenOculto" id="archivo_oculto1" name="archivo_oculto1"/>
                <div class="boton">Examinar</div>    
            </div>        
        </div>
        <div class="inputModificado">
            <input class="inputImagen" id="archivo2"/>
            <div class="botonInputFileModificado">
                <input type="file" class="inputImagenOculto" id="archivo_oculto2" name="archivo_oculto2"/>
                <div class="boton">Elegir</div>    
            </div>        
        </div>


    </body>
</html>