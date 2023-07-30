 <?php
 
    require_once "Conexion.php";
    
    class Crud extends Conexion{
        public function mostrarDatos(){
            $sql= "SELECT ordenfactura.id_ordenfactura , usuarios.nombre, usuarios.telefono,  ordenfactura.total, ordenfactura.fecha 
                       FROM ordenfactura,usuarios 
                            WHERE ordenfactura.id_usuario = usuarios.id";
                $query=Conexion::conectar()->prepare($sql);
                $query->execute();
                return $query->fetchAll();
                $query ->close();
        }
/*
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
*/
        public function obtenerDatos($id){
            $sql="SELECT detalleordenfactura.id_ordenfactura, producto.nombre, detalleordenfactura.cantidad, detalleordenfactura.precio, detalleordenfactura.subtotal, ordenfactura.fecha
                    FROM detalleordenfactura
                     INNER JOIN ordenfactura ON detalleordenfactura.id_ordenfactura = ordenfactura.id_ordenfactura
                     INNER JOIN producto ON detalleordenfactura.id_producto = producto.id_producto WHERE detalleordenfactura.id_ordenfactura='$id'";
        
            $query=Conexion::conectar()->prepare($sql);
            $query->bindParam(":id_ordenfactura", $id, PDO::PARAM_INT);
            $query->execute();
            return $query->fetch();
            $query->close();



        }/*
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
        }*/
    }

 
 ?>