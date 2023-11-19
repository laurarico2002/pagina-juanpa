<?php
    class Cursos extends Conectar{

        public function insert_curso($curso, $descripcion, $fecha_ini, $fecha_fin, $profesor, $fecha_crea){
            $conectar=parent::Conexion();
            parent::set_names();
            $sql="INSERT cursos (cur_id, id_categoria, curso, descripcion, fecha_ini, fecha_fin, profesor, fecha_crea, estado) VALUES (null,?,?,?,?,?,?,now(),1)";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$curso);
            $sql->bindValue(2,$descripcion);
            $sql->bindValue(3,$fecha_ini);
            $sql->bindValue(4,$fecha_fin);
            $sql->bindValue(5,$profesor);
            $sql->bindValue(6,$fecha_crea);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        public function update_curso($cur_id, $curso, $descripcion){
            $conectar=parent::Conexion();
            parent::set_names();
            $sql="UPDATE cursos SET nombre=? WHERE id=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$nombre);
            $sql->bindValue(2,$id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        public function delete_categoria($id){
            $conectar=parent::Conexion();
            parent::set_names();
            $sql="UPDATE cursos SET estado=0 WHERE id=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        public function categoria(){
            $conectar=parent::Conexion();
            parent::set_names();
            $sql="SELECT * FROM categoria WHERE estado=1";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        public function categoria_id($id){
            $conectar=parent::Conexion();
            parent::set_names();
            $sql="SELECT * FROM cursos WHERE estado=1 AND id=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
    }
?>