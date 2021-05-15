<html>  
        <head>
                <style>
                        body
                        { background-image: url(https://i.imgur.com/McAhbhr.png)}
                        #divContenido {
                                background-color:#E8E8E8;
                                text-align:center;
                                margin-left: 500px;
                                margin-right: 500px;   
                        }
                        .Gif{
                                border-style:dashed; 
                                border-color:#51FF48;   
                                text-align:center;
                                border-width:medium;
                                border-radius: 12px;
                                margin-left: 450px;
                                margin-right: 450px;    
                        }
                       
                </style>
    
        </head>
        <body><br><br><br>
                        <div id="divContenido">
                <?php
                        $nombre = $_POST['nombre'];
                        $mensaje = $_POST['Text1'];
	                $correo = $_POST['email'];
	                echo 'Nombre: '.$nombre;
	                echo '<br>';
                        echo 'mensaje: '.$mensaje;
                        echo '<br>';
                        echo '<br>';
                        echo '<br>';
	
                        echo " Contacto esta Rellenado y enviado con Exito!!."; 
                        echo '<br>';
                        echo "Gracias por contactarse conmigo y espere su pronta respuesta";
                ?>

                </div>
                <br><br><br><br>

                        <div class="Gif">
                                <img src="https://i.imgur.com/vNEFtpO.gif" alt="gracias">
                        </div>

        </body>
</html>