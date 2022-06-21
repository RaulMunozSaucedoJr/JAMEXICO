<?php
$data = file_get_contents("php://input");
require "../../../controller/controller.php";
$consulta = $pdo->prepare("SELECT * FROM chatbot LIMIT 6");
$consulta->execute();
if ($data != "") {
    $consulta = $pdo->prepare("SELECT * FROM chatbot WHERE id LIKE '%".$data."%' OR queries LIKE '%".$data."%' OR replies LIKE '%".$data."%'");
    $consulta->execute();
}
$resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
foreach ($resultado as $data) {
    echo "<tr>
            <td>" . $data['id'] . "</td>
            <td>" . $data['queries'] . "</td>
            <td>" . $data['replies'] . "</td>
            <td>
                <button type='button' class='btn btn-success btn-sm edit_information' onclick=Editar('" . $data['id'] . "')>Editar</button><br>
                <button type='button' class='btn btn-danger btn-sm' onclick=Eliminar('" . $data['id'] . "')>Eliminar</button>
            </td>        
        </tr>";
}