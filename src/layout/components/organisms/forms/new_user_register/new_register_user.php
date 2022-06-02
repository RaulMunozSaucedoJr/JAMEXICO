<?php
require_once "../../../../../backend/controller/controller.php";
 
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    if(empty(trim($_POST["username"]))){
        $username_err = "¡Por favor, registre su usuario!.";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))){
        $username_err = "El usuario únicamente deberá de contener letras y números. <br> NO se permiten carácteres especiales";
    } else{
        $sql = "SELECT id FROM users WHERE username = :username";
        
        if($stmt = $pdo->prepare($sql)){
            $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);
            $param_username = trim($_POST["username"]);
            
            if($stmt->execute()){
                if($stmt->rowCount() == 1){
                    $username_err = "¡El nombre de usuario que desea registrar ya se encuentra siendo utilizado!<br>Favor de registrar otro.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Algo salio mal.";
            }
            unset($stmt);
        }
    }
    
    if(empty(trim($_POST["password"]))){
        $password_err = "¡Por favor, ingrese una contraseña!.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "La contaseña NO deberá tener menos de 6 caráctres.";
    }else{
        $password = trim($_POST["password"]);
    }
    
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "¡Por favor, ingrese su contraseña!";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "¡Las contraseñas NO coinciden!<br>Favor de verificar la información.";
        }
    }
    
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        $sql = "INSERT INTO users (username, password) VALUES (:username, :password)";
         
        if($stmt = $pdo->prepare($sql)){
            $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);
            $stmt->bindParam(":password", $param_password, PDO::PARAM_STR);
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT);

            if($stmt->execute()){
                header("location: /src/Index.php");
            } else{
                echo "Algo salio mal.";
            }

            unset($stmt);
        }
    }
    unset($pdo);
}
?>

<!DOCTYPE html>
<html lang="es">

<?php
    include_once '../../../../../frontend/assets/includes/header_resources/header_resources.php';
?>

<body>

    <div class="container-fluid container_new_user_register">
        <div class="row">

            <div class="col-md-6 container_new_user_register_right">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"
                    class="needs-validation" novalidate>
                    <div class="row">
                        <!-- Inputs new user registration -->
                        <?php
                            include_once '../../../atoms/inputs/new_register_inputs/new_register_inputs.php';
                        ?>
                        <!---------------------------------->
                    </div>
                </form>
            </div>
            <div class="col-md-6 container_new_user_register_left">

            </div>
        </div>
    </div>

    <!-- Form validation -->
    <script src="/src/frontend/assets/javascript/forms_validation/validations.js" type="module"></script>
    <!--------------------->

    <!-- Index -->
    <script src="/src/frontend/assets/javascript/index.js" type="module"></script>
    <!----------->
</body>

</html>