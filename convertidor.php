<?php
    if(isset($_POST['enviar'])){
        $cantidad=$_POST['cantidad'];
        if($_POST['moneda']==0){
            $convertido=$cantidad/22.26;

            echo $cantidad.' es igual a '.$convertido.' dolares';
        }
        elseif($_POST['moneda']==1){
            $convertido=$cantidad*22.26;

            echo $cantidad.' es igual a '.$convertido.' pesos';
        }
    }
?>