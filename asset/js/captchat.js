function onSubmitForm() {
    var recaptchaResponse = grecaptcha.getResponse();

    if (recaptchaResponse.length === 0) {
            // Le captcha n'a pas été résolu
        document.getElementById('recaptcha-error').innerText = 'Veuillez résoudre le captcha.';
        return false;
    } else {
            // Le captcha a été résolu, effacez les éventuels messages d'erreur précédents
        document.getElementById('recaptcha-error').innerText = '';
            // Vous pouvez également ajouter ici d'autres vérifications avant de soumettre le formulaire si nécessaire
        return true;
    }
}