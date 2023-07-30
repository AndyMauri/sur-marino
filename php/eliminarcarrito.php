<?php 
session_start();
$arreglo = $_SESSION['carrito'];
for($i=0;$i<count($arreglo);$i++){
    if($arreglo[$i]['id_producto'] != $_POST['id_producto']){
        $arreglonuevo[] = array(
            'id_producto' =>$arreglo[$i]['id_producto'],
            'nombre' =>$arreglo[$i]['nombre'],
            'precio' =>$arreglo[$i]['precio'],
            'imagen' =>$arreglo[$i]['imagen'],    
            'cantidad' =>$arreglo[$i]['cantidad']
        );
    }
}
if(isset($arreglonuevo)){
    $_SESSION['carrito']=$arreglonuevo;
}else{
    unset($_SESSION['carrito']);
}
echo "listo";
?>