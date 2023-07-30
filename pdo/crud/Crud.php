 <?php
 
    require_once "Conexion.php";
    
    
    class Crud extends Conexion{
        public function mostrarDatos(){
            $sql= "SELECT   id,                            
                            nombre,
                            usuario,
                            email,
                            password,
                            privilegio,                            
                            fecha_registro
                    FROM usuarios";
                $query=Conexion::conectar()->prepare($sql);
                $query->execute();
                return $query->fetchAll();
                $query ->close();
        }

        public function insertarDAtos($datos){
            $sql="INSERT INTO  usuarios (nombre, usuario, email, password, privilegio)
                                VALUES (:nombre, :usuario, :email, :password, :privilegio)";
             $query=Conexion::conectar()->prepare($sql);              
             $query->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
             $query->bindParam(":usuario", $datos["usuario"], PDO::PARAM_STR);
             $query->bindParam(":email", $datos["email"], PDO::PARAM_INT);
             $query->bindParam(":password", $datos["password"], PDO::PARAM_STR);
             $query->bindParam(":privilegio", $datos["privilegio"], PDO::PARAM_STR);             

             return $query->execute();
             $query->close();
        }

        public function obtenerDatos($id){
            $sql="SELECT id,                         
                         nombre,
                         usuario,
                         email,
                         password,
                         privilegio,                         
                         fecha_registro
                    FROM usuarios where id=:id";
        
            $query=Conexion::conectar()->prepare($sql);
            $query->bindParam(":id", $id, PDO::PARAM_INT);
            $query->execute();
            return $query->fetch();
            $query->close();



        }
        public function actualizarDatos($datos){
            $sql="UPDATE usuarios set  
                                      nombre= :nombre,
                                      usuario= :usuario,
                                      email= :email,
                                      password= :password,
                                      privilegio= :privilegio                                      
                                where id= :id";
            
            $query=Conexion::conectar()->prepare($sql);              
             $query->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
             $query->bindParam(":usuario", $datos["usuario"], PDO::PARAM_STR);
             $query->bindParam(":email", $datos["email"], PDO::PARAM_STR);
             $query->bindParam(":password", $datos["password"], PDO::PARAM_STR);
             $query->bindParam(":privilegio", $datos["privilegio"], PDO::PARAM_STR);             
             $query->bindParam(":id", $datos["id"], PDO::PARAM_INT);

             return $query->execute();
             $query->close();
                
        }

        public function eliminarDatos($id){
            $sql="DELETE from usuarios WHERE id=:id";
            $query=conexion::conectar()->prepare($sql);
            $query->bindParam(":id", $id, PDO::PARAM_INT);
            return $query->execute();
             $query->close();
        }
    }

 
 ?>