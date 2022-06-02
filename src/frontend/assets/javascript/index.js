! function () {
    "use strict";
    document.addEventListener("DOMContentLoaded", () => {


        //!Function for blocking context-menu
        document.addEventListener("contextmenu", (e) => {
            e.preventDefault();
            const notificacionSinInternet = () => {
                const notification = new Notification("Mensaje del departamento TIC´S", {
                    body: "El click derecho se encuentra desactivado. \n" + "Lamentamos las molestias causadas.",
                    icon: "/src/frontend/assets/icons/JAMexico.webp"
                });
                notification.onclick = (e) => {
                    window.location.href = "mailto:comunicacion@jamexico.org.mx"
                }
            }
            if (Notification.permission === "granted") {
                notificacionSinInternet();
            } else if (Notification.permission !== "denied") {
                Notification.requestPermission().then(permission => {
                    if (permission === "granted") {
                        notificacionSinInternet();
                        console.log(permission);
                    }
                });
            }

        }, false);

        //!Function to detect if the user dont have internet connection
        window.addEventListener("offline", () => {
            const notificacionSinInternet = () => {
                const notification = new Notification("Mensaje de JA-México:", {
                    body: "Al parecer el servicio de internet se encuentra caido, por lo que podría experimentar un uso errorneo del sitio web. \n" + "Favor de esperar a que el servicio se reestablezca.",
                    icon: "/src/frontend/assets/icons/JAMexico.webp"
                });
                notification.onclick = (e) => {
                    window.location.href = "mailto:comunicacion@jamexico.org.mx"
                }
                setTimeout(() => {
                    notification.close();
                }, 4 * 1000);
            }
            if (Notification.permission === "granted") {
                notificacionSinInternet();
            } else if (Notification.permission !== "denied") {
                Notification.requestPermission().then(permission => {
                    if (permission === "granted") {
                        notificacionSinInternet();
                        console.log(permission);
                    }
                });
            }
        });

        //!Function to change text on the web-tab
        document.addEventListener("visibilitychange", () => {
            document.visibilityState == "hidden" ? document.title = "JA-México, un mundo de posibilidades" : document.title =
                "JA-México";
        });
    })
}();