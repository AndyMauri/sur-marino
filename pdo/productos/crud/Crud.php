 <?php
 
    require_once "Conexion.php";
    
    class Crud extends Conexion{
        public function mostrarDatos(){
            $sql= "SELECT   id_producto,                            
                            nombre,
                            imagen,
                            descripcion,
                            inventario,
                            fecha,                            
                            precio
                    FROM producto";
                $query=Conexion::conectar()->prepare($sql);
                $query->execute();
                return $query->fetchAll();
                $query ->close();
        }

        public function insertarDAtos($datos){
            $sql="INSERT INTO  producto (nombre, imagen, descripcion, inventario, precio)
                                VALUES (:nombre, :imagen, :descripcion, :inventario, :precio)";
             $query=Conexion::conectar()->prepare($sql);              
             $query->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
             $query->bindParam(":imagen", $datos["imagen"], PDO::PARAM_STR);
             $query->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
             $query->bindParam(":inventario", $datos["inventario"], PDO::PARAM_INT);
             $query->bindParam(":precio", $datos["precio"], PDO::PARAM_INT);             

             return $query->execute();
             $query->close();
        }

        public function obtenerDatos($id){
            $sql="SELECT id_producto,                         
                         nombre,
                         imagen,
                         descripcion,
                         inventario,
                         fecha,                         
                         precio
                    FROM producto where id_producto=:id";
        
            $query=Conexion::conectar()->prepare($sql);
            $query->bindParam(":id", $id, PDO::PARAM_INT);
            $query->execute();
            return $query->fetch();
            $query->close();



        }
        public function actualizarDatos($datos){
            $sql="UPDATE producto set  
                                      nombre= :nombre,
                                      imagen= :imagen,
                                      descripcion= :descripcion,
                                      inventario= :inventario,                                      
                                      precio= :precio                                      
                                where id_producto= :id";
            
            $query=Conexion::conectar()->prepare($sql);              
             $query->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
             $query->bindParam(":imagen", $datos["imagen"], PDO::PARAM_STR);
             $query->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
             $query->bindParam(":inventario", $datos["inventario"], PDO::PARAM_INT);
             $query->bindParam(":precio", $datos["precio"], PDO::PARAM_INT);             
             $query->bindParam(":id", $datos["id_producto"], PDO::PARAM_INT);

             return $query->execute();
             $query->close();
                
        }

        public function eliminarDatos($id){
            $sql="DELETE from producto WHERE id_producto=:id";
            $query=conexion::conectar()->prepare($sql);
            $query->bindParam(":id", $id, PDO::PARAM_INT);
            return $query->execute();
             $query->close();
        }
    }

 
 ?>