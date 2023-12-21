<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="asset\js\to-top.js"></script>
    <script src="asset\js\contact.js"></script>
    <script src="asset\js\captchat.js"></script>
    <link href='asset\css\to-top.css' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="asset/css/styles.css">
    <link rel="shortcut icon" href="asset\images\toga.png">
    <link href="asset\css\rainbow_text.css" rel="stylesheet" type="text/css">
    <title>POPOFF</title>
</head>

<body>
    <header>
        <h1>Bienvenue</h1>
        <p>Bienvenue sur ma page de présentation professionnelle</p>
    </header>

    <!-- Sommaire -->
    
    <nav class="navbar-expand-lg navbar-light bg-light">
        <h3>Sommaire :</h3>
        <hr>
        <br />
        <a href="#acceuil">Accueil</a>
        <a href="#apropos">À propos</a>
        <a href="#comp">Compétences</a>
        <a href="#exp">Expériences</a>
        <a href="#for">Formation</a>
        <a href="#cont">Contact</a>
        <br />
        <br />
        <hr>
        <a class="surprises-link" href="pages/extentions/surprise/surprise.php">Surprise</a>
    </nav>
    <div id="scrollUp">
    <a href="#top"><img src="asset\images\to_top.png"/></a>
    </div>
<div id="1">
    <!-- Acceuil -->
    <div id="acceuil">Accueil</div>
    <?php
    require_once("yaml/yaml.php");
    $data = yaml_parse_file('pages/yaml/acceuil.yaml');
    ?>
    <p>
        <span class="rainbow-text"><?php echo $data["prenom"]; ?></span>
        <span class="rainbow-text"><?php echo $data["nom"]; ?></span>
    </p>
    <p>Ce site me représente. Merci de comprendre</p>
    <?php include("pages/php/acceuil.php")?>

    <div id="apropos" style="text-align: center;">Apropos</div>
    <?php include("pages/php/apropos.php"); ?>

    <div id="comp">Compétences</div>
    <?php include("pages/php/competences.php"); ?>

    <div id="exp">Expériences</div>
    <?php include("pages/php/experiences.php"); ?>

    <div id="for" style="text-align: center;">Formation</div>
    <?php include("pages/php/formation.php"); ?>
</div>

    <!-- formulaire de contact -->
 <form id="contactForm" action="#"  method="post" onsubmit="return onSubmitForm();">
    <div id="cont">Contact</div>
    <?php include("pages/php/contact.php"); ?>
        <label for="gender">Genre:</label>
        <select id="gender" name="gender" required>
            <option value="male">Homme</option>
            <option value="female">Femme</option>
            <option value="other">Hélicoptère de combat</option>
        </select>

        <label for="firstName">Prénom:</label>
        <input type="text" id="firstName" name="firstName" required>

        <label for="lastName">Nom:</label>
        <input type="text" id="lastName" name="lastName" required>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>

        <label for="comment">Commentaire:</label>
        <textarea id="comment" name="comment" rows="4"></textarea>

      <!-- captchat -->
      <div id="moncaptchat" class="g-recaptcha" data-sitekey="6LfEWSEpAAAAALfz_U9jyYV3xTqlynN31ixAAFMJ"></div>
      <br />
      <span id="recaptcha-error" style="color:red;">
          <?php echo isset($recaptchaError) ? $recaptchaError : ''; ?>
      </span>
      <br />
      <input type="submit" value="Envoyer">
      <input type="reset" value="reset" />
    </form>
<br />
  </body>
<footer>
    <p>Site qui vous respect, vous et vos donées super confidentiel d'après le <a href="https://www.cnil.fr/fr/reglement-europeen-protection-donnees" target="_blank"> RGPD</a>.</p>
</footer>
</html>