<?php 
// la cantidad del bloque *- prueba con un archivo de 50 lineas y prueba colocando 10 a ver si todo va como quieres. 
    $qtyToInsert = 500;
    $totals = 0;
    // block lo uso para contar cuantos tengo en el bloque actual 
    $block = 0;
    $sqlInsert = "INSERT INTO table_name (name, last_name) VALUES ";
    foreach($entries as $entrie) {
        // si no es la primera recuerda agregar una coma
        if($block != 0){
            $sqlInsert .=', ';
        }
        //agregas nueva linea
        $sqlInsert.="(".$entrie[1].", ".$entrie[2].") ";
        $block++;
        if($block >= $qtyToInsert){
            mysqli_query(conect01(),$sqlInsert);
            // reinicias block 
            $block = 0;
            // reinicias sentencia sql
            $sqlInsert = "INSERT INTO table_name (name, last_name) VALUES ";
        }
        // esto solo es el total de todos 
        $totals++;
    }

    // al salir si hay cosas pendientes ejecutas la ultima - no lo olvides
    if($block > 0){
        mysqli_query(conect01(),$sqlInsert);
    }