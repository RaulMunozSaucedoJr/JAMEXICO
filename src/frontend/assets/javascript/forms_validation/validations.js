import {
    contact_form_inputs,
    regex_inputs,
    empty_inputs
} from '/src/frontend/assets/javascript/forms_validation/selectors/selectors.js'

import {
    verify_Inputs_Lenght,
} from '/src/frontend/assets/javascript/forms_validation/functions/functions.js'


! function () {
    "use strict";
    document.addEventListener("DOMContentLoaded", function () {


        /**
         * @param {function} (Listeners)
         **/

        const Listeners = () => {

            /**
             * @param {Default Validation Bootstrap 5}
             **/

            (() => {
                'use strict'

                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                const forms = document.querySelectorAll('.needs-validation')

                // Loop over them and prevent submission
                Array.from(forms).forEach(form => {
                    form.addEventListener('submit', event => {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
            })()


            const validate_Inputs_Regexs = (field, regex) => {
                regex.test(field.value.trim()) ? field.className = 'valido' : field.className = 'invalido';
            }

            empty_inputs.forEach(item => item.addEventListener(
                'keyup', e => {
                    validate_Inputs_Regexs(e.target, regex_inputs[e.target.attributes.name.value.trim()])
                }
            ));

            /**
             *@param {constant} (contact_form_inputs)
             *@param {method} (forEach)
             *@param {element} (input)
             *@param {method} (addEventListener)
             *@param {function} (verify_Inputs_Lenght) 
             **/

            contact_form_inputs.forEach((input) => {
                input.addEventListener('keyup', verify_Inputs_Lenght);
            });


        };

        /**
         * @param {function} (Listeners)
         */
        Listeners();


    });
}();