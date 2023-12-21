function onSubmitForm() {
    var recaptchaResponse = grecaptcha.getResponse();

    if (recaptchaResponse.length === 0) {
        alert("Veuillez valider le captcha avant d'envoyer le formulaire.");
    return false;
    }

    alert("Votre formulaire a bien été pris en compte.");

    document.getElementById("contactForm").reset();

    return false;
}