// JS permettant de supprimer les messages d'erreurs lorsque nous entrons des données dans l'input
let allInput = document.querySelectorAll('input');

allInput.forEach(element => {
    element.addEventListener('keyup', function () {
        let inputName = this.id
        let span = document.querySelector(`[data-span="error-${inputName}"]`);
        span.innerText = ''
    })
});


function getForm() {
    let name = document.getElementById('name').value;
    let firstname = document.getElementById('firstname').value;
    let mail = document.getElementById('mail').value;
    let password = document.getElementById('password').value;
    let cgu = document.getElementById('cgu').checked;
    let confirmPassword = document.getElementById('confirmPassword').value;

    let errorName = document.getElementById('errorName');
    let errorFirstname = document.getElementById('errorFirstname');
    let errorMail = document.getElementById('errorMail');
    let errorPassword = document.getElementById('errorPassword');
    let errorCgu = document.getElementById('errorCgu');
    let errorConfirmPassword = document.getElementById('errorConfirmPassword');

    let validForm = true;


    if (name == '') {
        errorName.style.display = "block"
        validForm = false
    }
    if (firstname == '') {
        errorFirstname.style.display = "block"
        validForm = false
    }
    if (mail == '') {
        errorMail.style.display = "block"
        validForm = false
    }
    if (cgu == false) {
        errorCgu.style.display = "block"
        validForm = false
    }
    if (password == '') {
        console.log(1)
        errorPassword.style.display = "block"
        validForm = false
    } else if (confirmPassword == '') {
        console.log(2)
        errorPassword.style.display = "none";
        errorConfirmPassword.style.display = "block"
        validForm = false
    } else if (confirmPassword != password) {
        console.log(errorConfirmPassword)
        errorPassword.style.display = "none";
        errorConfirmPassword.style.display = "block"
        errorConfirmPassword.innerHTML = `Les mots de passes ne sont pas identiques`
        validForm = false
    }


    display(validForm, mail)

}

function display(form, mail) {
    if (form != false) {
        document.getElementById('myForm').style.display = 'none';
        document.getElementById('connect').style.display = 'block';
        window.alert(`Un mail va être envoyer à l'adresse mail ${mail}`)
    }
}

function clearError(id) {
    let error = document.getElementById(id);
    error.style.display = "none";
    validForm = true
}

function getUserForm() {
    let userMail = document.getElementById('userMail').value;
    let userPassword = document.getElementById('userPassword').value;
    let mail = document.getElementById('mail').value;
    let password = document.getElementById('password').value;


    console.log(ok);
    // if (userPassword == '') {
    //     console.log('Mot de passe erroné');
    // }
    // if (userMail == '') {
    //     console.log('mail erroné');
    // }
}