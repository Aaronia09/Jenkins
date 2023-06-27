<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v5.8.14, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/mbr-96x84.png" type="image/x-icon">
  <meta name="description" content="">
  <title>Accueil</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/web/assets/gdpr-plugin/gdpr-styles.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap"></noscript>
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
</head>
<body style="overflow: hidden;">
<style>
    .footer-section {
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
    }
</style>
<section data-bs-version="5.1" class="menu menu2 cid-tHD8Udggwg" once="menu" id="menu2-p">
    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
      <div class="container">
        <div class="navbar-brand">
          <span class="navbar-logo">
            <a href="">
              <img src="assets/images/mbr-96x84.webp" alt="Mobirise Website Builder" style="height: 3rem;">
            </a>
          </span>
          <span class="navbar-caption-wrap"><a class="navbar-caption text-black display-7" href="">MyCoding</a></span>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse" data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
          </div>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
            <li class="nav-item">
              <a class="nav-link link text-black display-4" href="">Contact us</a>
            </li>
          </ul>
          <div class="navbar-buttons mbr-section-btn">
            <a class="btn btn-black display-4" href="login.php">Login</a>
          </div>
        </div>
      </div>
    </nav>
  </section>


<section data-bs-version="5.1" class="form4 cid-tHD9mxPskH mbr-fullscreen" id="form4-r">
    <div class="container">
        <div class="row content-wrapper justify-content-center">
            <div class="col-lg-3 offset-lg-1 mbr-form" data-form-type="formoid">
                <form action="inscription.php" method="POST" class="mbr-form form-with-styler" data-form-title="Form Name">
                    <div class="dragArea row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <h1 class="mbr-section-title mb-4 display-2"><strong>Register</strong></h1>
                        </div>
                        <div class="col-lg-12 col-md col-12 form-group mb-3" data-for="username">
                            <input type="text" name="username" placeholder="Username" data-form-field="username" class="form-control" value="" id="username-form4-r">
                        </div>
                        <div class="col-lg-12 col-md col-12 form-group mb-3" data-for="email">
                            <input type="email" name="email" placeholder="Email" data-form-field="email" class="form-control" value="" id="email-form4-r">
                        </div>
                        <div class="col-lg-12 col-md col-12 form-group mb-3" data-for="password">
                            <input type="password" name="password" placeholder="Password" data-form-field="password" class="form-control" value="" id="password-form4-r">
                        </div>
                        <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
                        <div class="col-12 col-md-auto mbr-section-btn">
                            <button type="submit" class="btn btn-black display-4">Sign up</button>
                        </div>
                    </div>
                    <span class="gdpr-block">
                        <label>
                            <span class="textGDPR display-7" style="color: #a7a7a7">
                                <input type="checkbox" name="gdpr" id="gdpr-form4-r" required="">By continuing you agree to our <a style="color: #232323; text-decoration: none;" href="terms.html">Terms of Service</a> and <a style="color: #232323; text-decoration: none;" href="policy.html">Privacy Policy</a>.
                            </span>
                        </label>
                    </span>
                </form>
            </div>
            <div class="col-lg-7 offset-lg-1 col-12">
                <div class="image-wrapper">
                    <img class="w-100" src="assets/images/mbr-1266x844.webp" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<?php
// inscription.php

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Récupérer les données du formulaire
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Effectuer les opérations de traitement et d'insertion dans la base de données
    // Remplacez les variables suivantes par les informations de votre base de données
    $servername = "localhost";
    $database = "nom_de_votre_base_de_donnees";
    $username_db = "votre_nom_d_utilisateur";
    $password_db = "votre_mot_de_passe";

    // Créer une connexion à la base de données
    $conn = new mysqli($servername, $username_db, $password_db, $database);

    // Vérifier si la connexion a réussi
    if ($conn->connect_error) {
        die("La connexion à la base de données a échoué : " . $conn->connect_error);
    }

    // Préparer et exécuter la requête d'insertion
    $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $email, $password);
    $stmt->execute();

    // Fermer la requête et la connexion
    $stmt->close();
    $conn->close();

    // Rediriger l'utilisateur vers une page de succès ou afficher un message de réussite
    echo "Inscription réussie !";
}
?>

<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/web/assets/cookies-alert-plugin/cookies-alert-core.js"></script>
<script src="aassets/web/assets/cookies-alert-plugin/cookies-alert-script.js"></script>
<script src="assets/smoothscroll/smooth-scroll.js"></script>
<script src="assets/ytplayer/index.js"></script>
<script src="assets/dropdown/js/navbar-dropdown.js"></script>
<script src="assets/theme/js/script.js"></script>
<script src="assets/formoid/formoid.min.js"></script>
<input name="cookieData" type="hidden" data-cookie-cookiesAlertType='true' data-cookie-colorText='#424a4d' data-cookie-colorBg='rgb(255, 255, 255)' data-cookie-opacityOverlay='0' data-cookie-bgOpacity='100' data-cookie-text>
</body>
</html>
