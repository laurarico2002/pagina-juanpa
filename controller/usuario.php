<?php
    /*TODO: Llamando a cadena de Conexion */
    require_once("../config/conexion.php");
    /*TODO: Llamando a la clase */
    require_once("../models/usuario.php");
    /*TODO: Inicializando Clase */
    $usuario = new Usuario();

    /*TODO: Opcion de solicitud de controller */
    switch($_GET["opc"]){

        /*TODO: MicroServicio para poder mostrar el listado de cursos de un usuario con certificado */
        case "listar_cursos": /*get_cursos_x_usuario es el nombre de la clase creada en el modelo*/
            $datos=$usuario->cursos_x_usuarios($_POST["usu_id"]);
            $data= Array();
            foreach($datos as $row){
                $sub_array = array();
                /*columnas de la tabla de la bd a mostrar*/
                $sub_array[] = $row["curso"];
                $sub_array[] = $row["fecha_ini"];
                $sub_array[] = $row["fecha_fin"];
                $sub_array[] = $row["nombrei"]." ".$row["ape_paternoi"]; 
                $sub_array[] = '<button type="button" class="btn btn-success" onClick="certificado('.$row["curusu_id"].');" id="'.$row["curusu_id"].'">Certificado</button>';
                $data[] = $sub_array;
            }
            /*Formato del datatable, se usa siempre*/
            $results = array(
                "sEcho"=>1,
                "iTotalRecords"=>count($data),
                "iTotalDisplayRecords"=>count($data),
                "aaData"=>$data);
            echo json_encode($results);

            break;
        case "mostrar":
            $datos= $usuario->usuario_x_id($_POST["usu_id"]);
            if(is_array($datos)==true and count($datos)<>0){
                foreach($datos as $row){
                    $output["usu_id"] = $row["usu_id"];
                    $output["nombre"] = $row["nombre"];
                    $output["ape_paterno"] = $row["ape_paterno"];
                    $output["ape_materno"] = $row["ape_materno"];
                    $output["usu_correo"] = $row["usu_correo"];
                    $output["sexo"] = $row["sexo"];
                    $output["usu_pass"] = $row["usu_pass"];
                    $output["telefono"] = $row["telefono"];
                }
                echo json_encode($output);
            }
            break;    
        case "update_perfil":
            $datos = $usuario->update_usuario_perfil(  
                $_POST["usu_id"], 
                $_POST["nombre"],
                $_POST["ape_paterno"],
                $_POST["ape_materno"],
                $_POST["usu_pass"],
                $_POST["sexo"],
                $_POST["telefono"]);
            break;

        case "total":
            $datos= $usuario->total_curso_x_usuario($_POST["usu_id"]);
            if(is_array($datos)==true and count($datos)>0){
                foreach($datos as $row){
                    $output["total"] = $row["total"];
                }
                echo json_encode($output);
            }
            break;  
        
        case "total_profesores":
            $datos= $usuario->total_profesores($_POST["usu_id"]);
            if(is_array($datos)==true and count($datos)>0){
                foreach($datos as $row){
                    $output["total_profesores"] = $row["total_profesores"];
                }
                echo json_encode($output);
            }
            break; 
            
        case "total_usuarios":
            $datos= $usuario->total_usuarios($_POST["usu_id"]);
            if(is_array($datos)==true and count($datos)>0){
                foreach($datos as $row){
                    $output["total_usuarios"] = $row["total_usuarios"];
                }
                echo json_encode($output);
            }
            break;
            
       

            }
?>
