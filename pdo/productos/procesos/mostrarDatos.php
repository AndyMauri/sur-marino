<?php

    require_once "../crud/crud.php";
    $obj=  new Crud();
    $datos=$obj-> mostrarDatos();

    $tabla='<table class="table table-dark">
                    <thead>
                     <tr class="font-weight-bold">      
                         <td>Id</td>                    
                         <td>Nombre</td> 
                         <td>Imagen</td>
                         <td>Descripcion</td>
                         <td>Inventario</td>
                         <td>Fecha</td>
                         <td>Precio</td>
                         <td>Editar</td>
                         <td>Eliminar</td>
                        </tr>
                    </thead>
                    <tbody>';
    $datosTabla="";

    foreach ($datos as $key => $value){
        $datosTabla=$datosTabla.'<tr>       
                     <td>'.$value['id_producto'].'</td>              
                     <td>'.$value['nombre'].'</td>
                     <td><img src="../../images/'.$value['imagen'].'" width="50" height="40"></td>  
                     <td>'.$value['descripcion'].'</td>
                     <td>'.$value['inventario'].'</td>
                     <td>'.$value['fecha'].'</td>                     
                     <td>'.$value['precio'].'</td>
                     <td>
                         <span class="btn btn-warning btn-sm" onclick="obtenerDatos('.$value['id_producto'].')" 
                         data-toggle="modal" data-target="#actualizarModal">
                             <i class="fas fa-edit"></i>
                         </span>
            
                     </td>
                     <td>
                         <span class="btn btn-danger btn-sm" onclick="eliminarDatos('.$value['id_producto'].')">
                             <li class="fas fa-trash-alt"></li>
                         </span>
                     </td>
                    </tr>';
    }
    echo $tabla.$datosTabla.'</tbody></table>';


?>