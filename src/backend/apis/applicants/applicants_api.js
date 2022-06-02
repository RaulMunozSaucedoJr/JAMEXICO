ListarProductos();

function ListarProductos(busqueda) {
    fetch("/src/backend/model/applicants/actions/list.php", {
        method: "POST",
        body: busqueda
    }).then(response => response.text()).then(response => {
        resultado.innerHTML = response;
    })
}
registrar.addEventListener("click", () => {
    fetch("/src/backend/model/applicants/actions/register.php", {
        method: "POST",
        body: new FormData(frm)
    }).then(response => response.text()).then(response => {
        if (response == "ok") {
            Swal.fire({
                icon: 'success',
                title: 'Información Registrada',
                showConfirmButton: false,
                timer: 1500
            })
            frm.reset();
            ListarProductos();
        } else {
            Swal.fire({
                icon: 'success',
                title: 'Modificado',
                showConfirmButton: false,
                timer: 1500
            })
            registrar.value = "Registrar";
            idp.value = "";
            ListarProductos();
            frm.reset();
        }
    })
});

function Eliminar(id) {
    Swal.fire({
        title: '¿Seguro que deséa eliminar esta información?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#0c5464',
        cancelButtonColor: '#f01800',
        confirmButtonText: '¡Eliminar!',
        cancelButtonText: '¡No!'
    }).then((result) => {
        if (result.isConfirmed) {
            fetch("/src/backend/model/applicants/actions/delete.php", {
                method: "POST",
                body: id
            }).then(response => response.text()).then(response => {
                if (response == "ok") {
                    ListarProductos();
                    Swal.fire({
                        icon: 'success',
                        title: 'Eliminado',
                        showConfirmButton: false,
                        timer: 1500
                    })
                }

            })

        }
    })
}

function Editar(id) {
    fetch("/src/backend/model/applicants/actions/edit.php", {
        method: "POST",
        body: id
    }).then(response => response.json()).then(response => {
        idp.value = response.id;
        name.value = response.name;
        last_name.value = response.last_name;
        mobile_number.value = response.mobile_number;
        house_number.value = response.house_number;
        curp.value = response.curp;
        degree.value = response.degree;
        email.value = response.email;
        registrar.value = "Actualizar"
    })
}
buscar.addEventListener("keyup", () => {
    const valor = buscar.value;
    if (valor == "") {
        ListarProductos();
    } else {
        ListarProductos(valor);
    }
});