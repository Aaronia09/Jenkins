<!DOCTYPE html>
<html>
<head>
  <title>Code Importation</title>
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
<body>
    <style>
        .footer-section {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
        }

        button#integrate-btn,
        button#analyse-btn {
            color:  #2c2c2c;
        }
    </style>
  
  <section data-bs-version="5.1" class="menu menu2 cid-tHD8Udggwg" once="menu" id="menu2-p">
    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
        <div class="container">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="">
                        <img src="assets/images/mbr-96x84.webp" alt="" style="height: 3rem;">
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
                    <li class="nav-item"><a class="nav-link link text-black display-4" href="">Contact us</a></li>
                </ul>
                <div class="navbar-buttons mbr-section-btn"><a class="btn btn-black display-4" href="accueil.php">Logout</a></div>
            </div>
        </div>
    </nav>
  </section>
  
  <br><br>
  <br><br>
  
  <input type="file" id="file-input"><br><br>
  <button id="integrate-btn" class="btn btn-primary" style="color: black;">Intégrer le code</button>
  <button id="analyse-btn" class="btn btn-primary" style="color: black;">Analyser le code</button>
  
 
  <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>  
  <script src="assets/ytplayer/index.js"></script> 
  <script src="assets/dropdown/js/navbar-dropdown.js"></script> 
  <script src="assets/theme/js/script.js"></script> 
  <script src="assets/formoid/formoid.min.js"></script>
  
  <script>
    document.getElementById("analyse-btn").addEventListener("click", function() {
      // Code à exécuter lorsque le bouton est cliqué
      var fileInput = document.getElementById('file-input');
      var file = fileInput.files[0];
      
      var formData = new FormData();
      formData.append('fichierCode', file);
      
      fetch('analyser.php', {
        method: 'POST',
        body: formData
      })
      .then(response => response.json())
      .then(data => {
        // Gérer la réponse de l'API CodeClimate ici
        if (data.reportURL) {
          console.log("Lien du rapport généré :", data.reportURL);
          // Utilisez le lien du rapport généré comme vous le souhaitez
        } else {
          console.log("Une erreur s'est produite lors de l'analyse du code.");
        }
      })
      .catch(error => {
        // Gérer les erreurs ici
        console.error(error);
      });
    });
  </script>
  
</body>
</html>
