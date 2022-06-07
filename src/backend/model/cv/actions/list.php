a<?php
$data = file_get_contents("php://input");
require "../../../controller/controller.php";
$consulta = $pdo->prepare("SELECT * FROM cv ORDER BY id DESC");
$consulta->execute();
if ($data != "") {
    $consulta = $pdo->prepare("SELECT * FROM cv WHERE id LIKE '%".$data."%' OR full_name LIKE '%".$data."%' OR address LIKE '%".$data."%'");
    $consulta->execute();
}
$resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
foreach ($resultado as $data) {
    echo "<tr>
            <td>" . $data['id'] . "</td>
            <td>" . $data['full_name'] . "</td>
            <td>" . $data['address'] . "</td>
            <td>" . $data['cel_phone'] . "</td>
            <td>" . $data['email'] . "</td>
            <td>" . $data['website'] . "</td>
            <td>" . $data['profesional_studies'] . "</td>
            <td>" . $data['skills'] . "</td>
            <td>" . $data['laboral_experience'] . "</td>
            <td>" . $data['laboral_links'] . "</td>
            <td>
                <button type='button' class='btn btn-success btn-lg edit_information' onclick=Editar('" . $data['id'] . "')>Editar</button><br>
                <button type='button' class='btn btn-danger btn-lg' onclick=Eliminar('" . $data['id'] . "')>Eliminar</button><br>
            </td>        
        </tr>";
}