<?php
$data = file_get_contents("php://input");
require "../../../controller/controller.php";
$consulta = $pdo->prepare("SELECT * FROM tickets ORDER BY id DESC");
$consulta->execute();
if ($data != "") {
    $consulta = $pdo->prepare("SELECT * FROM tickets WHERE id LIKE '%".$data."%' OR title_ticket LIKE '%".$data."%' OR section LIKE '%".$data."%'");
    $consulta->execute();
}
$resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
foreach ($resultado as $data) {
    echo "<tr>
            <td>" . $data['id'] . "</td>
            <td>" . $data['title_ticket'] . "</td>
            <td>" . $data['section'] . "</td>
            <td>" . $data['description'] . "</td>
            <td>
                <button type='button' class='btn btn-success btn-sm edit_information' onclick=Editar('" . $data['id'] . "')>Editar</button><br>
                <button type='button' class='btn btn-danger btn-sm' onclick=Eliminar('" . $data['id'] . "')>Eliminar</button>
            </td>        
        </tr>";
}