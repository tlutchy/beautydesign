<?php

include 'conexao_beauty.php';

$query_events = "select * from agenda
as A inner join cliente as C on
a.id_cliente = c.id_cliente inner join
servico as s on s.id_servico = a.id_servico";
$resultado_events = $con->prepare($query_events);
$resultado_events->execute();

$eventos = [];

while($row_events = $resultado_events->fetch(PDO::FETCH_ASSOC)){
    $id = $row_events['id_agenda'];
    $title = $row_events['titulo_agenda'];
    $color = $row_events['corstatus_agenda'];
    $start = $row_events['data_agenda'];

    $eventos[] = [
        'id' => $id,
        'title' => $title,
        'color' => $color,
        'start' => $start,
    ];

}

echo json_encode($eventos);










?>