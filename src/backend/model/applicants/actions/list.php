<?php
$data = file_get_contents("php://input");
require "../../../controller/controller.php";
$consulta = $pdo->prepare("SELECT * FROM applicants ORDER BY id DESC");
$consulta->execute();
if ($data != "") {
    $consulta = $pdo->prepare("SELECT * FROM applicants WHERE id LIKE '%".$data."%' OR last_name LIKE '%".$data."%' OR mobile_number LIKE '%".$data."%'");
    $consulta->execute();
}
$resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
foreach ($resultado as $data) {
    echo "<tr>
            <td>" . $data['id'] . "</td>
            <td>" . $data['name'] . "</td>
            <td>" . $data['last_name'] . "</td>
            <td>" . $data['mobile_number'] . "</td>
            <td>" . $data['house_number'] . "</td>
            <td>" . $data['curp'] . "</td>
            <td>" . $data['degree'] . "</td>
            <td>" . $data['email'] . "</td>
            <td>
                <button type='button' class='btn btn-success btn-sm edit_information' onclick=Editar('" . $data['id'] . "')>Editar</button><br>
                <button type='button' class='btn btn-danger btn-sm' onclick=Eliminar('" . $data['id'] . "')>Eliminar</button>
            </td>        
        </tr>";
}
