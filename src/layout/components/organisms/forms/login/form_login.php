<div class="col-xs-12 col-sm-12 col-md-6 col-xl-6 login_container_right">
    <?php 
        if(!empty($login_err)){
            echo
            '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>  <h1>'. $login_err .'</h1> </strong>
            </div>
            ';
        }        
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="needs-validation"
        id="form_login" novalidate>
        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12">
                <img src="/src/frontend/assets/img/Login_Background.jpg" class="img-thumbnail" alt="JA-MEXICO - Login">
            </div>
            <!-- Inputs: Email & Password -->
            <?php
                include_once 'layout/components/molecules/inputs/login/inputs_login.php';
            ?>
            <!------------------------------>
            <!-- Buttons: Login & Clean -->
            <?php
                include_once 'layout/components/atoms/buttons/login/buttons_login.php';
            ?>
            <!---------------------------->
        </div>
    </form>
</div>