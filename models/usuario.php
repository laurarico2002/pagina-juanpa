<?php 
    class Usuario extends Conectar{
        /*TODO: Funcion para login de acceso del usuario */
        public function login(){
            //parent llama las funciones 
            $Conectar=parent::conexion();
            parent::set_names();
            if(isset($_POST["enviar"])){
                $correo = $_POST["usu_correo"];
                $pass = $_POST["usu_pass"];
                if(empty($correo) and empty($pass)){
                    /*TODO: En caso esten vacios correo y contraseña, devolver al index con mensaje = 2 */
                    header("Location:".Conectar::ruta()."index.php?m=2");
                    exit();
                }else{
                    $sql = "SELECT * FROM usuarios WHERE usu_correo=? and usu_pass=? and estado=1";
                    $stmt=$Conectar->prepare($sql);
                    $stmt->bindValue(1, $correo);
                    $stmt->bindValue(2, $pass);
                    $stmt->execute();
                    $resultado = $stmt->fetch();
                    if (is_array($resultado) and count($resultado)>0){
                        $_SESSION["usu_id"]=$resultado["usu_id"];
                        $_SESSION["nombre"]=$resultado["nombre"];
                        $_SESSION["ape_paterno"]=$resultado["ape_paterno"];
                        $_SESSION["ape_materno"]=$resultado["ape_materno"];
                        $_SESSION["usu_correo"]=$resultado["usu_correo"];
                        $_SESSION["usu_pass"]=$resultado["usu_pass"];
                        $_SESSION["sexo"]=$resultado["sexo"];
                        $_SESSION["telefono"]=$resultado["telefono"];
                        $_SESSION["rol_id"]=$resultado["rol_id"];
                        $_SESSION["fecha_crea"]=$resultado["fecha_crea"];
                        $_SESSION["estado"]=$resultado["estado"];
                        /*TODO: Si todo esta correcto indexar en home */
                        header("Location:".Conectar::ruta()."views/inicio.php");
                        exit();
                    }else{
                        /*TODO: En caso no coincidan el usuario o la contraseña */
                        header("Location:".Conectar::ruta()."index.php?m=1");
                        exit();
                    }
                }
            }
        }
        public function cursos_x_usuarios($usu_id){
            $conectar=parent::Conexion();
            parent::set_names();
            $sql="SELECT
            curso_usuario.curusu_id,
            cursos.cur_id,
            cursos.curso,
            cursos.descripcion,
            cursos.fecha_ini,
            cursos.fecha_fin,
            usuarios.usu_id,
            usuarios.nombre,
            usuarios.ape_paterno,
            usuarios.ape_materno,
            instructor.inst_id,
            instructor.nombrei,
            instructor.ape_paternoi,
            instructor.ape_maternoi
            FROM curso_usuario INNER JOIN
            cursos ON curso_usuario.id_curso = cursos.cur_id INNER JOIN
            usuarios ON curso_usuario.id_usuario = usuarios.usu_id INNER JOIN
            instructor ON cursos.profesor = instructor.inst_id
            WHERE
            curso_usuario.id_usuario = ?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$usu_id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
    }
    public function usuario_x_id($usu_id){
        $conectar=parent::Conexion();
        parent::set_names();
        $sql="SELECT * FROM usuarios WHERE estado=1 AND usu_id=?";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1,$usu_id);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }
    public function update_usuario_perfil($usu_id, $nombre, $ape_paterno, $ape_materno, $usu_pass, $sexo, $telefono){
        $conectar=parent::Conexion();
        parent::set_names();
        $sql="UPDATE usuarios SET 
        nombre=?, 
        ape_paterno=?,
        ape_materno=?,
        usu_pass=?,
        sexo=?,
        telefono=? WHERE usu_id=?";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1, $nombre);
        $sql->bindValue(2, $ape_paterno);
        $sql->bindValue(3, $ape_materno);
        $sql->bindValue(4, $usu_pass);
        $sql->bindValue(5, $sexo);
        $sql->bindValue(6, $telefono);
        $sql->bindValue(7, $usu_id);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }
    //Muestra todos los cursos en la pantalla de inicio
    public function total_curso_x_usuario($usu_id){
        $conectar=parent::Conexion();
        parent::set_names();
        $sql="SELECT COUNT(*) AS total FROM curso_usuario WHERE id_usuario=?";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1,$usu_id);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }

    //Muestra todos los profesores en la pantalla de inicio
    public function total_profesores($usu_id){
        $conectar=parent::Conexion();
        parent::set_names();
        $sql="SELECT COUNT(*) AS total_profesores FROM instructor WHERE estado=1";
        $sql=$conectar->prepare($sql);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }
    //Muestra todos los usuarios en la pantalla de inicio
    public function total_usuarios($usu_id){
        $conectar=parent::Conexion();
        parent::set_names();
        $sql="SELECT COUNT(*) AS total_usuarios FROM usuarios";
        $sql=$conectar->prepare($sql);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }
}   
?>
