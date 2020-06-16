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

    //bueno bro, intento de otro modo. SUpuestamente el me habia dicho que el lo inserta asi, por esome paso el codigo
    //si fuera un array si se podría ¡, y si lo convertimos a array? no importa q genere memoria
    //Lo recomendable que deberias hacer es usar Navicat Pro
    //bro es una* HErramiena para un operador, no puedo decirle al operador q use navicat 
    /*
        Ten en cuenta lo siguiente.
        El operador va a importar todos los días esa cantidad de registros?1 vez por semana, en caso de que haya entrado una base nueva
        Y porque la empresa no te paga a ti por hacer esa carga.
        Tienes un punto a tu favor (Es mucha data)
        Y si estas haciendo el sistema es para que eso sea cada vez al instante cuando usen el sistema y no se genere un excel
        con demasiada información. pero e que esa base no las manda un proveedor. que tenemos que subirla asi como viene. 
        puede venir con 40.000 filas. 
        por eso digo esa carga la deben realizar tu o tu equipo
        no el operador. eso lo hace la persona que maneja excel, deberia hacerlo el. 
        la persona que crea el excel que cargo tiene?
        asistente de gerencia. 

        y porque no creas un modulo en el sistema para que lo que hace en excel lo guarde en l sistema directo
        y se olvide de excel
        bro, en eso estoy, estoy procesando la base

        mIAesde procesar la base lo que debes hacer es el sistema adaptado a esa persona que va a usar el sistema
        primero esa persona que genera el excel.

        Ya que de el parte la estructura de tu sistema.

        Puntos:
        ¿Que necesita?
        * Campos
        * Inserts
        * Update
        * Delete
        * Interface (Formulario)

        Terminas lo de el y avanzas con los demas cargos:
        Operadores etc.
        
    */