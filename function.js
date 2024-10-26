function validateForm() {
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var message = document.getElementById('message').value;

    if (name === "") {
        alert("Le nom ne doit pas être vide.");
        return false;
    }

    if (!validateEmail(email)) {
        alert("Veuillez entrer une adresse email valide.");
        return false;
    }
if (message === "") {
        alert("Le message ne doit pas être vide.");
        return false;
    }

    alert("Formulaire soumis avec succès !");
    return true;
}

function validateEmail(email) {
    var re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(String(email).toLowerCase());
}