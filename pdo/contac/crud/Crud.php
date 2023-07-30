 <?php
 
    require_once "Conexion.php";
    
    class Crud extends Conexion{
        public function mostrarDatos(){
            $sql= "SELECT   id_contacto,                            
                            nombre,
                            contacto
                    FROM contacto";
                $query=Conexion::conectar()->prepare($sql);
                $query->execute();
                return $query->fetchAll();
                $query ->close();
        }

        public function insertarDAtos($datos){
            $sql="INSERT INTO contacto (nombre, contacto) 
                                VALUES (:nombre,:contacto)";
             $query=Conexion::conectar()->prepare($sql);              
             $query->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
             $query->bindParam(":contacto", $datos["contacto"], PDO::PARAM_STR);
                      

             return $query->execute();
             $query->close();
        }

        public function obtenerDatos($id){
            $sql="SELECT nombre,
                         contacto
                    FROM contacto where id_contacto=:id";
        
            $query=Conexion::conectar()->prepare($sql);
            $query->bindParam(":id", $id, PDO::PARAM_INT);
            $query->execute();
            return $query->fetch();
            $query->close();



        }
        public function actualizarDatos($datos){
            $sql="UPDATE contacto set  
                                      nombre= :nombre,
                                      contacto= :contacto
                                                                           
                                where id_contacto= :id";
            
            $query=Conexion::conectar()->prepare($sql);              
             $query->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
             $query->bindParam(":contacto", $datos["contacto"], PDO::PARAM_STR);
             $query->bindParam(":id", $datos["id_contacto"], PDO::PARAM_INT);

             return $query->execute();
             $query->close();
                
        }

        public function eliminarDatos($id){
            $sql="DELETE from contacto WHERE id_contacto=:id";
            $query=conexion::conectar()->prepare($sql);
            $query->bindParam(":id", $id, PDO::PARAM_INT);
            return $query->execute();
             $query->close();
        }
    }

 
 ?>