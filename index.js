const form = document.getElementById('form');
const nom = document.getElementById('nom');
const prenom = document.getElementById('prenom');
const age = document.getElementById('age');
const pays = document.getElementById('pays');
const ville = document.getElementById('ville');
const email = document.getElementById('email');
const typegroupe = document.getElementById('typegroupe');
const nombrepersonne = document.getElementById('nombrepersonne');
const offre = document.getElementById('offre');
const datedebut = document.getElementById('datedebut');
const datefin = document.getElementById('datefin');

form.addEventListener('submit', e => {
    e.preventDefault();

    validateInputs();
});

const setError = (element, message) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success')
}

const setSuccess = element => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = '';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');
};

const isValidEmail = email => {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

const validateInputs = () => {
    const nomValue = nom.value.trim();
    const emailValue = email.value.trim();
    const prenomValue = prenom.value.trim();
    const ageValue = age.value.trim();
    const paysValue = pays.value.trim();
    const villeValue = ville.value.trim();
    const typegroupeValue = typegroupe.value.trim();
    const nombrepersonneValue = nombrepersonne.value.trim();
    const offreValue = offre.value.trim();
    const datedebutValue = datedebut.value.trim();
    const datefinValue = datefin.value.trim();


    if(nomValue === '') {
        setError(nom, 'Nom est important');
    } else {
        setSuccess(nom);
    }

    if(emailValue === '') {
        setError(email, 'Email est important');
    } else if (!isValidEmail(emailValue)) {
        setError(email, 'entrer un email validé');
    } else {
        setSuccess(email);
    }

    if(prenomValue === '') {
        setError(prenom, 'prenom est important');
    } else {
        setSuccess(prenom);
    }

    if(ageValue === '') {
        setError(age, 'age est important');
    } else if (ageValue < 18) {
        setError(age, "entrer un age validé");
    } else {
        setSuccess(age);
    }

    if(paysValue === '') {
        setError(pays, 'pays est important');
    } else {
        setSuccess(pays);
    }

    if(villeValue === '') {
        setError(ville, 'ville est importante');
    } else {
        setSuccess(ville);
    }

    if(typegroupeValue === 'Nothing') {
        setError(typegroupe, 'type de groupe est important');
    } else {
        setSuccess(typegroupe);
    }

    if(nombrepersonneValue === 0) {
        setError(nombrepersonne, 'nombre des personnes est important');
    } else {
        setSuccess(nombrepersonne);
    }

    if(offreValue === 'Nothing') {
        setError(offre, 'choisir un offre');
    } else {
        setSuccess(offre);
    }

    //ba9i na9sni date debut ou date fin .................................

};