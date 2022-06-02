/**
 * @param {constant´s & let´s}
 * @param {input´s} (We recover the different type´s of inputs we have at the different form´s).
 */

export const contact_form_inputs = document.querySelectorAll("#form_login input[type=text]");
export let empty_inputs = document.querySelectorAll('input');

/**
 * @param {object} (regex_inputs)
 * @param {properties} (Names_Contact_Form from Email_Contact_Form)
 * @param {value´s} (/^[a-zA-ZÀ-ÿ\u00f1\u00d1\s]{8,24}$/ from /(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\W)/)
 */

export let regex_inputs = {

    //!Properties name from register user form
    username: /^[a-zA-Z0-9_]+$/,
    password: /^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S$/,
    confirm_password: /^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S$/,

    //! Properties name from applicants forms
    name: /^[a-zA-ZÀ-ÿ\u00f1\u00d1\s]{3,28}$/,
    last_name: /^[a-zA-ZÀ-ÿ\u00f1\u00d1\s]{3,28}$/,
    mobile_number: /^(\(\+?\d{2,3}\)[\*|\s|\-|\.]?(([\d][\*|\s|\-|\.]?){6})(([\d][\s|\-|\.]?){2})?|(\+?[\d][\s|\-|\.]?){8}(([\d][\s|\-|\.]?){2}(([\d][\s|\-|\.]?){2})?)?)$/,
    house_number: /^(\(\+?\d{2,3}\)[\*|\s|\-|\.]?(([\d][\*|\s|\-|\.]?){6})(([\d][\s|\-|\.]?){2})?|(\+?[\d][\s|\-|\.]?){8}(([\d][\s|\-|\.]?){2}(([\d][\s|\-|\.]?){2})?)?)$/,
    curp: /^([A-Z][AEIOUX][A-Z]{2}\d{2}(?:0\d|1[0-2])(?:[0-2]\d|3[01])[HM](?:AS|B[CS]|C[CLMSH]|D[FG]|G[TR]|HG|JC|M[CNS]|N[ETL]|OC|PL|Q[TR]|S[PLR]|T[CSL]|VZ|YN|ZS)[B-DF-HJ-NP-TV-Z]{3}[A-Z\d])(\d)$/,
    degree: /^[a-zA-ZÀ-ÿ\u00f1\u00d1\s]{3,28}$/,
    email: /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])$/,

    //!Properties name from job form
    job_name: /^[a-zA-ZÀ-ÿ\u00f1\u00d1\s]{3,28}$/,
    company_name: /^[a-zA-ZÀ-ÿ\u00f1\u00d1\s]{3,28}$/,
    job_address: /^[a-zA-ZÀ-ÿ0-9.,#-\u00f1\u00d1\s]{3,28}$/,
    salary: /^[0-9]*$/,
    type_job: /^[a-zA-ZÀ-ÿ\u00f1\u00d1\s]{3,28}$/,
    schedules: /^[a-zA-ZÀ-ÿ0-9.,#-\u00f1\u00d1\s]{3,28}$/,
    job_description: /^[a-zA-ZÀ-ÿ0-9.,#-\u00f1\u00d1\s]{3,28}$/,
};