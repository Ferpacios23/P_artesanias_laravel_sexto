<?php
    // echo $_POST['nombre']. " ";
    // echo $_POST["correo"]. " ";
    // echo $_POST["contrasenia"]. " ";

    // var_dump($_POST);


    #1 paso, establecer la conexion con la base de datos
        //parametros de myqli servidor, usuario, contrasenia, nombre
        $conexcion = mysqli_connect("localhost", "root", "" , "p_artesanias");

        #2. paso, verificar la conexion
        if(!$conexcion){
            echo "Error de conexion" . mysqli_connect_error();
        exit();
        }


        

        #3 preparar los campos
        // encriptamos el texto plano que viene desde el formulario, bcrypt => hola
        // password_hash = sirve para incriptar las contrasenias 
        $contras = password_hash($_POST["contrasenia"], PASSWORD_DEFAULT );

        // para mostras la contrasenia incriptada
        // echo $_POST["contrasenia"]. "". $contras;

        #4. PASO, crear el comando sql
        $sql = "insert into usuario(nombre, telefono, correo, contrasenia, fecha_creacion)
        values('".$_POST['nombre']."','".$_POST["telefono"]."','".$_POST["correo"]."','".$contras."',
        '".date('Y-m-d')."')";
        
        //mostrar el comando sql
        //echo $sql;

        #5, paso, ecutar el comando
        $resultado = mysqli_query($conexcion, $sql);

        if($resultado){



            header('Location: http://localhost/proyectos/proyecto_final/login.php');

        }else{
            // enviar un mensaje
            //redireccionar segun el diagrama de actividades
            //manejo de sesiones 
        }


?>