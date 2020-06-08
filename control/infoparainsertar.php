$nrocliente = $data[0];
                    $nrowo = $data[1];
                    $wotype = $data[2];
                    $razoncreacion = $data[3];
                    $servicecreacion = $data[4];
                    $subtype = 	$data[5];
                    $clasificacion = $data[6];
                    $ird_modem = $data[7];
                    $codinstalador = $data[8];
                    $nombreinstalador = $data[9];
                    $codinstaladorpadre = $data[10];
                    $nombreinstaladorpadre = $data[11];
                    $coddealer = $data[12];
                    $nombredealer = $data[13];
                    $codigodealerpadre = $data[14];
                    $dealerpadre = $data[15];
                    $estadowo = $data[16];
                    $fechacreacionwo = $data[17];
                    $fechacumplimiento = $data[18];
                    $fechaultimoagendamiento = $data[19];
                    $fechaultimaasignacion = $data[20];
                    $textbox16 = $data[21];
                    $atraso_ct_wo = $data[22];
                    $atraso_ct_sp = $data[23];
                    $acciontomada = $data[24];
                    $fecha_1_pasaje_terminada = $data[25];
                    $estadocliente = $data[26];
                    $tipocliente = $data[27];
                    $apellidonombre = $data[28];
                    $direccionins = $data[29];
                    $extrains = $data[30];
                    $x = $data[31];
                    $y = $data[32];
                    $t = $data[33];
                    $cpins = $data[34];
                    $localidadins = $data[35];
                    $provinciains = $data[36];
                    $telefonoparticularins = $data[37];
                    $telefonolaboralins = $data[38];
                    $faxinstalacion = $data[39];
                    $fax2instalacion = $data[40];
                    $email_inst = $data[41];
                    $direccionfac = $data[42];
                    $extrafac = $data[43];
                    $cpfac = $data[44];
                    $localidadfact = $data[45];
                    $provinciafac = $data[46];
                    $telefonoparticularfac = $data[47];
                    $telefonolaboralfac = $data[48];
                    $faxfac = $data[49];
                    $fax2fac = $data[50];
                    $email_fact = $data[51];
                    $zona = $data[52];
                    $observacion = $data[53];
                    $modelo = $data[54];
                    $nroserie = $data[55];
                    $nrosc = $data[56];
                    
                    
            $sql = "INSERT INTO numeros (nrocliente,
            nrowo,
            wotype,
            razoncreacion,
            servicecreacion,
            subtype,
            clasificacion,
            ird_modem,
            codinstalador,
            nombreinstalador,
            codinstaladorpadre,
            nombreinstaladorpadre,
            coddealer,
            nombredealer,
            codigodealerpadre,
            dealerpadre,
            estadowo,
            fechacreacionwo,
            fechacumplimiento,
            fechaultimoagendamiento,
            fechaultimaasignacion,
            textbox16, 
            atraso_ct_wo, 
            atraso_ct_sp, 
            acciontomada, 
            fecha_1_pasaje_terminada, 
            estadocliente, 
            tipocliente, 
            apellidonombre, 
            direccionins, 
            extrains, 
            x, 
            y, 
            t,
            cpins, 
            localidadins, 
            provinciains, 
            telefonoparticularins, 
            telefonolaboralins, 
            faxinstalacion, 
            fax2instalacion, 
            email_inst, 
            direccionfac, 
            extrafac, 
            cpfac, 
            localidadfact, 
            provinciafac, 
            telefonoparticularfac, 
            telefonolaboralfac, 
            faxfac, 
            fax2fac, 
            email_fact, 
            zona, 
            observacion, 
            modelo, 
            nroserie, 
            nrosc) VALUES
                     (
                         '$data[0]',
                         '$data[1]', 
                         '$data[2]', 
                         '$data[3]', 
                         '$data[4]', 
                         '$data[5]', 
                         '$data[6]', 
                         '$data[7]', 
                         '$data[8]', 
                         '$data[9]', 
                         '$data[10]', 
                         '$data[11]', 
                         '$data[12]', 
                         '$data[13]', 
                         '$data[14]', 
                         '$data[15]', 
                         '$data[16]', 
                         '$data[17]', 
                         '$data[18]', 
                         '$data[19]', 
                         '$data[20]', 
                         '$data[21]', 
                         '$data[22]', 
                         '$data[23]', 
                         '$data[24]',
                         '$data[25]', 
                         '$data[26]', 
                         '$data[27]', 
                         '$data[28]', 
                         '$data[29]', 
                         '$data[30]', 
                         '$data[31]', 
                         '$data[32]', 
                         '$data[33]', 
                         '$data[34]', 
                         '$data[35]', 
                         '$data[36]', 
                         '$data[37]', 
                         '$data[38]', 
                         '$data[39]', 
                         '$data[40]', 
                         '$data[41]', 
                         '$data[42]', 
                         '$data[43]', 
                         '$data[44]', 
                         '$data[45]', 
                         '$data[46]', 
                         '$data[47]', 
                         '$data[48]', 
                         '$data[49]', 
                         '$data[50]', 
                         '$data[51]', 
                         '$data[52]', 
                         '$data[53]', 
                         '$data[54]', 
                         '$data[55]', 
                         '$data[56]';";