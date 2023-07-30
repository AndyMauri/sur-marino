<?php

    require_once "../crud/crud.php";
    $obj=  new Crud();
    $datos=$obj-> mostrarDatos();

    $tabla='<table class="table table-dark">
                    <thead>
                     <tr class="font-weight-bold">                                            
                         <td>Tipo</td> 
                         <td>Numero</td>                    
                         <td>Editar</td>
                         <td>Eliminar</td>
                        </tr>
                    </thead>
                    <tbody>';
    $datosTabla="";

    foreach ($datos as $key => $value){
        $datosTabla=$datosTabla.'<tr>                    
                     <td>'.$value['nombre'].'</td>                     
                     <td>'.$value['contacto'].'</td>                     
                     <td>
                         <span class="btn btn-warning btn-sm" onclick="obtenerDatos('.$value['id_contacto'].')" 
                         data-toggle="modal" data-target="#actualizarModal">
                             <i class="fas fa-edit"></i>
                         </span>
            
                     </td>
                     <td>
                         <span class="btn btn-danger btn-sm" onclick="eliminarDatos('.$value['id_contacto'].')">
                             <li class="fas fa-trash-alt"></li>
                         </span>
                     </td>
                    </tr>';
    }
    echo $tabla.$datosTabla.'</tbody></table>';


?>