<?php
    include('../config/db_connexio.php');
    
    $sql = "CREATE VIEW 64_reserves_view AS
                SELECT reserves.reserva_id AS 'ID',
                reserves.entrada AS 'Entrada',
                reserves.salida AS 'Salida',
                CONCAT(clients.nombre,' ', clients.apellido) AS 'Nombre Completo Usuario',
                clients.tlf AS 'Telefono',
                clients.dni AS 'DNI',
                clients.email AS 'Email',
                tipusHabitacio.nombre AS 'Tipus d\'habitacio',
                tipusHabitacio.id AS 'ID Tipus Habitacio',
                habitacio.numero AS 'Número Habitación',
                estat.nom AS 'Estado Reserva',
                reserves.precio AS 'Precio reserva',
                pensio.nom AS 'Tipo Pensión'
                FROM `64_reserves` AS reserves
                INNER JOIN `64_clients` AS clients ON reserves.cliente_id = clients.cliente_id
                INNER JOIN `64_habitacio` AS habitacio ON reserves.habitacion_id = habitacio.id
                INNER JOIN `64_tipushabitacio` AS tipusHabitacio ON habitacio.tipo_habitacion = tipusHabitacio.id 
                INNER JOIN `64_estat_reserva` AS estat ON reserves.estado_id = estat.id
                INNER JOIN `64_pensio` AS pensio ON reserves.pension_id = pensio.id;";

    //LLançar la consulta
    $resultat = mysqli_query($connexio, $sql);

    // Obtenir els resultats
    $viewCreate = mysqli_fetch_all($resultat, MYSQLI_ASSOC);
?>