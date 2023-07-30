<?php

    require_once "../crud/crud.php";
    $obj=  new Crud();
    $datos=$obj-> mostrarDatos();

    $tabla='<table class="table table-dark">
                    <thead>
                     <tr class="font-weight-bold">                         
                         <td>Orden Factura</td>                          
                         <td>Nombre</td>
                         <td>Telefono</td>
                         <td>Total</td>
                         <td>Fecha</td>
                         <td>Ver</td>
                         
                        </tr>
                    </thead>
                    <tbody>'; 
    $datosTabla="";

    foreach ($datos as $key => $value){
        $datosTabla=$datosTabla.'<tr>                     
                     <td>'.$value['id_ordenfactura'].'</td>                                      
                     <td>'.$value['nombre'].'</td>
                     <td>'.$value['telefono'].'</td>
                     <td>'.$value['total'].'</td>
                     <td>'.$value['fecha'].'</td>
                     <td>
                        <a href="recibo/recibo.php?orden='.$value['id_ordenfactura'].';" class="btn btn-warning btn-sm"> <span  onclick="obtenerDatos('.$value['id_ordenfactura'].')" 
                         data-toggle="modal" data-target="#actualizarModal">
                             <i class="fas " >VER</i>
                         </span></a>
            
                     
                    </tr>';
    }
    echo $tabla.$datosTabla.'</tbody></table>';


?>