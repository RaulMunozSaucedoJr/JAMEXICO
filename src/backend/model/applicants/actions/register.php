<?php
if (isset($_POST)) {
    $name = $_POST['name'];
    $last_name = $_POST['last_name'];
    $mobile_number = $_POST['mobile_number'];
    $house_number = $_POST['house_number'];
    $curp = $_POST['curp'];
    $degree = $_POST['degree'];
    $email = $_POST['email'];
    require("../../../controller/controller.php");
    if (empty($_POST['idp'])){
        $query = $pdo->prepare("INSERT INTO applicants (name, last_name, mobile_number, house_number, curp, degree, email) VALUES (:nam, :lst, :mov, :hnum, :curp, :dgre, :eml)");
        $query->bindParam(":nam", $name);
        $query->bindParam(":lst", $last_name);
        $query->bindParam(":mov", $mobile_number);
        $query->bindParam(":hnum", $house_number);
        $query->bindParam(":curp", $curp);
        $query->bindParam(":dgre", $degree);
        $query->bindParam(":eml", $email);
        $query->execute();
        $pdo = null;
        echo "ok";
    }else{
        $id = $_POST['idp'];
        $query = $pdo->prepare("UPDATE applicants SET name = :nam, last_name = :lst, mobile_number =:mov, house_number = :hnum, curp = :curp, degree = :dgre, email = :eml WHERE id = :id");
        $query->bindParam(":nam", $name);
        $query->bindParam(":lst", $last_name);
        $query->bindParam(":mov", $mobile_number);
        $query->bindParam(":hnum", $house_number);
        $query->bindParam(":curp", $curp);
        $query->bindParam(":dgre", $degree);
        $query->bindParam(":eml", $email);
        $query->bindParam("id", $id);
        $query->execute();
        $pdo = null;
        echo "modificado";
    }
    
}