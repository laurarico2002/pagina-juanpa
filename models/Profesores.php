<?php
    class Profesores extends Conectar{

        public function insert_profesor($nombrei, $ape_paternoi, $ape_maternoi, $correo, $sexo, $telefono){
            $conectar=parent::Conexion();
            parent::set_names();
            $sql="INSERT INTO instructor (inst_id,nombrei,ape_paternoi,ape_maternoi,correo,sexo,telefono,fecha_crea,estado) VALUES (null,?, ?,?,?,?,?,now(),1)";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$nombrei);
            $sql->bindValue(2,$ape_paternoi);
            $sql->bindValue(3,$ape_maternoi);
            $sql->bindValue(4,$correo);
            $sql->bindValue(5,$sexo);
            $sql->bindValue(6,$telefono);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        public function update_profesor($inst_id, $nombrei, $ape_paternoi, $ape_maternoi, $correo, $sexo, $telefono){
            $conectar=parent::Conexion();
            parent::set_names();
            $sql="UPDATE instructor SET nombrei=?, ape_paternoi=?, ape_maternoi=?, correo=?, sexo=?, telefono=? WHERE inst_id=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$nombrei);
            $sql->bindValue(2,$ape_paternoi);
            $sql->bindValue(3,$ape_maternoi);
            $sql->bindValue(4,$correo);
            $sql->bindValue(5,$sexo);
            $sql->bindValue(6,$telefono);
            $sql->bindValue(7,$inst_id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        public function delete_profesor($inst_id){
            $conectar=parent::Conexion();
            parent::set_names();
            $sql="UPDATE instructor SET estado=0 WHERE inst_id=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$inst_id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        public function profesor(){
            $conectar=parent::Conexion();
            parent::set_names();
            $sql="SELECT * FROM instructor WHERE estado=1";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        public function profesor_id($inst_id){
            $conectar=parent::Conexion();
            parent::set_names();
            $sql="SELECT * FROM instructor WHERE estado=1 AND inst_id=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$inst_id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
    }

?>