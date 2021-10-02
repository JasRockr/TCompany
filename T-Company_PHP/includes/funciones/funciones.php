<?php 
    function productos_json(&$productos, &$camibuso=0, &$mug=0)
    {
        $tipo_pedido = array(0 => 'persona', 1 => 'mascota', 2 => 'empresa');
        //combinar arrays para armar el JSON
        $total_productos = array_combine($tipo_pedido, $productos);
        $json = array();

        foreach($total_productos as $key => $productos):
            //conversion de string a numero, validación para no guardar valores en 0
            if((int) $productos > 0):
                $json[$key] = (int) $productos;
            endif;
        endforeach;

        //conversion de string a numero
        $camibuso = (int) $camibuso;
        if ($camibuso > 0):
            $json['camibusos'] = $camibuso;
        endif;

        $mug = (int) $mug;
        if ($mug > 0):
            $json['mugs'] = $mug;
        endif;


        return json_encode($json);
    }

    function detalles_json(&$detalles)
    {
        $detalles_json = array();
        foreach($detalles as $detalle):
            $detalles_json['detalles'] [] = $detalle;
        endforeach;

        return json_encode($detalles_json);
    }

