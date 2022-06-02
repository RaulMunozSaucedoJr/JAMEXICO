<div class="col-12 container_alert">
    <div class="alert alert-success" id="informative_alert_dashboard" role="alert">
        <h1 class="alert-heading">¡Bienvenido <?php echo htmlspecialchars($_SESSION["username"]); ?>!</h1>
        <p>
            Recuerde que si experimenta alguna falla al momento de realizar cualquier acción dentro
            de
            este panel, <br>puede ponerse en contacto a los siguientes medios:
        </p>
        <hr>
        <div class="row">
            <div class="col-xs-12 col-md-6 col-xl-6">
                <a type="button" class="btn btn-outline-* btn-lg" href="mailto:corrreo@gmail.com">
                    <span>
                        <i class="fa-solid fa-envelope"></i>
                    </span>
                </a>
            </div>
            <div class="col-xs-12 col-md-6 col-xl-6">
                <a type="button" class="btn btn-outline-* btn-lg" href="tel:5545568558">
                    <span>
                        <i class="fa-solid fa-mobile-screen-button"></i>
                    </span>
                </a>
            </div>
        </div>
    </div>
</div>