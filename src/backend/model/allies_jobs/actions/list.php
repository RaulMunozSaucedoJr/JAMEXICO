<?php
$data = file_get_contents("php://input");
require "../../../controller/controller.php";
$consulta = $pdo->prepare("SELECT * FROM jobs ORDER BY id DESC");
$consulta->execute();
if ($data != "") {
    $consulta = $pdo->prepare("SELECT * FROM jobs WHERE id LIKE '%".$data."%' OR title_job LIKE '%".$data."%' OR company_name LIKE '%".$data."%'");
    $consulta->execute();
}
$resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
foreach ($resultado as $data) {
    echo "<tr>
            <td>" . $data['id'] . "</td>
            <td>" . $data['title_job'] . "</td>
            <td>" . $data['company_name'] . "</td>
            <td>" . $data['job_address'] . "</td>
            <td>" . $data['salary'] . "</td>
            <td>" . $data['type_job'] . "</td>
            <td>" . $data['job_description'] . "</td>
            <td>" . $data['email'] . "</td>
            <td>
                <button type='button' class='btn btn-success btn-sm edit_information' onclick=Editar('" . $data['id'] . "')>Editar</button><br>
                <button type='button' class='btn btn-danger btn-sm' onclick=Eliminar('" . $data['id'] . "')>Eliminar</button>
            </td>        
        </tr>";
}
