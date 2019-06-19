$query2 = "SELECT areas.idarea,areas.nom_area FROM equipos_fielder AS equi
            INNER JOIN areas_fielder AS areas ON areas.idarea=equi.id_area WHERE  id_fielder='$idcontrase'";


            $result1 = $con->query($query2);
            // $total_num_rows = $result1->num_rows;
             //while($row = $result1->fetch_array())
          //  {
          //      print_r($row);
          //  }
            while($filas1 = $result1->fetch_assoc()) {
              $idarea=$filas1['idarea'];
              $nombrezona=$filas1['nom_area'];

            }

¿Quién fue tu médico?  Alfredo Berlanga
Lugar o municipio de residencia habitual Jiquipilco
La suma del ingreso MENSUAL de mi pareja y mío es de: 0 a 6 mil
¿Además de considerar a Reina Madre como opción, qué otros hospitales consideraste seriamente para atenderte? nunca conside seriamente otra opcion fuera de reina madre, pretelini- hospital de la mujer -otro hosp ,immss
La razón por la que escogí Reina Madre y no otro hospital fue por:sus instalaciones,cercania,servicio en general,mi mami
¿Qué hizo que vinieras a Reina Madre en un inicio?  espectacular,expo,anuncio de facebook
¿Hay algo que podríamos haber hecho mejor? Por favor dinos que NO te gustó durante tu estancia: recepcionista,orden y limpieza
Por favor ayúdanos a entender qué fue lo que no te gustó para mejorar el trato mamu
¿Cómo calificaría el servicio de nuestras enfermeras en general?  0
¿Te gustaría reconocer a alguna enfermera del Turno Matutino que te haya parecido EXCELENTE? adriana martinez,ana patricia calzada,denisse benitez
¿Cuál de nuestras enfermeras (turno diurno) consideras que en particular te haya brindado un MAL SERVICIO? misael torres
¿Te gustaría reconocer a alguna enfermera (turno nocturno) en particular que te haya parecido EXCELENTE? angelica amaro
¿Cuál de nuestras enfermeras (turno nocturno) consideras que en particular te haya brindado un MAL SERVICIO? elvia dias
¿Qué tan probable es que recomiendes a tu médico a un(a) amigo(a)? 0
¿Qué tan probable es que recomiendes Reina Madre a un(a) amigo(a)?0
Nombre completo de la paciente (opcional)
