import {
    contact_form_inputs
} from '/src/frontend/assets/javascript/forms_validation/selectors/selectors.js'

/**
 * @param {function} (verificarTamanos)
 * @param {cicle/loop} (for)
 * @param {Initial Expression}(var i = 0, input__actual)
 * @param {Condicional Expression && IncrementalExpression && Variable} (input__actual =  variable === inputsUsuarios[i++];)
 * @param {Condicional Cicle} (if)
 * @param {Variable} (input__actual.value.length >=50 () => We obtain the value of different input´s and check if those input´s wont be gretaer or equal than 30)
 * @param {Function} (swal)
 */
export const verify_Inputs_Lenght = () => {
    for (var i = 0, input__actual; input__actual = contact_form_inputs[i++];) {
        if (input__actual.value.length >= 10) {
            swal({
                icon: "warning",
                title: "¡Atención!",
                text: "Ningún campo debe de tener más de 10 letras/carácteres/números",
                timer: 3000,
                closeOnClickOutside: false,
                button: false,
                closeOnEsc: false,
            });
        }
    }
};