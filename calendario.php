<?php
    $mes=date("n");
    $anno=date("Y");
    $diahoy=date("j");

    $diaSemana=date("w",mktime(0,0,0,$mes+1,1,$anno))+7;
    $ultimoDiaMes=date("d",(mktime(0,0,0,$mes+1,1,$anno)-1));

    $mesesAnno=array(1=>"Enero","Febrero","Marzo","Abril","Mayo"
    ,"Junio","Julio","Agosto",
    "Septiembre","Octubre","Noviembre","Diciembre");

    echo"<table border><caption>$mesesAnno[$mes] de $anno</caption>";
    echo"<tr>
            <th>Lunes</th>
            <th>Martes</th>
            <th>Miércoles</th>
            <th>Jueves</th>
            <th>Viernes</th>
            <th>Sabado</th>
            <th>Domingo</th>
        </tr>";
    $celdaU=$diaSemana+$ultimoDiaMes;
    echo"<tr>";
    for($i=1;$i<=42;$i++){
        if($i==$diaSemana){
            $dia=1;
        }
        if($i<$diaSemana||$i>$celdaU){
            echo"<td>-</td>";
        }else{
            if($dia==$diahoy){
                echo"<th>$dia</th>";
            }else{
                echo"<td>$dia</td>";
            }
            $dia++;
        }
        if($i%7==0){
            echo"</tr><tr>";
        }
    }
    echo"</table>";
?>