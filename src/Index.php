<?php
//!Inicializamos la sesión
session_start();
 
//!Verifica si el usuario se encuentra logeado y lo redirige al dashboard
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: ../src/layout/components/pages/dashboard.php");
    exit;
}
 
//!Se incluye el archivo de la conexión a la base de datos
require_once "../src/backend/controller/controller.php";
 
//!Variables para verificar los inputs del login
$username = $password = "";
$username_err = $password_err = $login_err = "";
 
//!Si el formulario es enviado mediante post 
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    //!Verifica si el usuario se encuentra vacio
    if(empty(trim($_POST["username"]))){
        $username_err = "¡Campo vacio!<br>Por favor, ingrese su usuario.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    //!Verifica si la contraseña se encuentra vacia
    if(empty(trim($_POST["password"]))){
        $password_err = "¡Campo vacio!<br>Por favor, ingrese su contraseña";
    } else{
        $password = trim($_POST["password"]);
    }
    
    //!Verifica en la base de datos que las credenciales existan
    if(empty($username_err) && empty($password_err)){
        //!Se prepara la query para seleccionar las credenciales de la base de datos
        $sql = "SELECT id, username, password FROM users WHERE username = :username LIMIT 1";
        
        if($stmt = $pdo->prepare($sql)){
            //!Se preparan las variables y su debidos parametros que se les pasaran
            $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);
            
            //!Se pasan los debidos parametros
            $param_username = trim($_POST["username"]);
            
            //!Se ejecuta la query previamente preparada
            if($stmt->execute()){
                //!Verifica si el usuario y contraseña existen. Ademas, verifica que las contraseña se encuentre debidamente hasheada.
                if($stmt->rowCount() == 1){
                    if($row = $stmt->fetch()){
                        $id = $row["id"];
                        $username = $row["username"];
                        $hashed_password = $row["password"];
                        if(password_verify($password, $hashed_password)){
                            //!Si la información es correcta, podremos iniciar la sesión.
                            session_start();
                            //!Se almacen las credenciales en cada una de las variables previamente establecidas
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            //!Se redirige al dashboard principal
                            header("location: ../src/layout/components/pages/dashboard.php");
                        } else{
                            //!Si el usuario y/o contraseña son incorrectos, muestra un mensaje.
                            $login_err = "¡Usuario y/o Contraseña Incorrectos!";
                        }
                    }
                } else{
                    //!Si el usuario y/o contraseña son incorrectos, muestra un mensaje.
                    $login_err = "¡Usuario y/o Contraseña Incorrectos!";
                }
            } else{
                echo "¡La conexión a la base de datos/ La query y/o las credenciales fallaraon. Por favor, verificar!";
            }
    
            unset($stmt);
        }
    }
    unset($pdo);
}
?>


<!DOCTYPE html>
<html lang="es">

<!-- Header resources -->
<?php
    include_once './frontend/assets/includes/header_resources/header_resources.php';
?>
<!---------------------->

<body>

    <div class="container-fluid login_container">
        <div class="row">

            <!-- Login Form -->
            <?php
                include_once './layout/components/organisms/forms/login/form_login.php';
            ?>
            <!---------------->

            <!-- Background-Image -->
            <?php
                include_once './layout/components/organisms/backgrounds/login/backgrounds.php';
            ?>
            <!---------------------->

            <!-- Modal Recover password -->
            <?php
                include_once './layout/components/organisms/modals/reset_password.php'
            ?>
            <!---------------------->
        </div>
    </div>

    <!-- Footer resources -->
    <?php
    include_once './frontend/assets/includes/header_resources/header_resources.php';
    ?>
    <!---------------------->

    <!-- Form Validation -->
    <script src="/src/frontend/assets/javascript/forms_validation/validations.js" type="module"></script>
    <!--------------------->

    <!-- Index -->
    <script src="/src/frontend/assets/javascript/index.js" type="module"></script>
    <!----------->
    
</body>

</html>