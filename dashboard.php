<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/web/assets/gdpr-plugin/gdpr-styles.css">
    <link rel="stylesheet" href="assets/dropdown/css/style.css">
    <link rel="stylesheet" href="assets/socicon/css/styles.css">
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <link rel="preload" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap"></noscript>
    <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css">
    <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        /* Styles généraux */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Jost', sans-serif;
            background-color: #f8f9fa;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        /* Styles spécifiques au dashboard */
        .sidebar {
            background-color:  #343a40;
            padding: 20px;
            width: 100%;
            max-width: 300px;
            margin: 0 auto;
            text-align: center;
        }

        .sidebar h3 {
            margin-bottom: 20px;
            color: #fff;
        }

        .sidebar ul {
            list-style-type: none;
            margin-bottom: 20px;
        }

        .sidebar li {
            margin-bottom: 10px;
            color: #fff;
        }

        .sidebar i {
            margin-right: 10px;
        }

        .content {
            padding: 20px;
        }

        /* Styles responsives */
        @media (min-width: 576px) {
            .container {
                display: flex;
                align-items: stretch;
            }

            .sidebar {
                width: 300px;
                text-align: left;
            }

            .content {
                flex: 1;
            }
        }

        /* Styles pour les icônes */
        .fa {
            font-size: 18px;
            color:#393939 ;
        }

        /* Styles pour les titres */
        h1, h2 {
            color:#343a40;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <header>
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
                </div>
            </nav>
        </section>
    </header>
    <br><br>
    <br><br>

    <div class="container">
        <div class="sidebar">
            <h3>User Dashboard</h3>
            <ul>
                <li><a href="accueil.php"><i class="fas fa-home"></i>Home</a></li>
                

                <li><a href="account.php"><i class="fas fa-user"></i>My Account</a></li>



                <li><a href=""><i class="fas fa-cog"></i> Settings</a></li>

                <li><a href="import.php"><i class="fas fa-code"></i>Code Importation</a></li>

                <li><a href="accueil.php"><i class="fas fa-sign-out-alt"></i>Logout</a></li>


            </ul>
        </div>

        <div class="content">
            <header>
                <h1>My Dashboard</h1>
            </header>

            <div class="dashboard">
                <h2>Welcome to the Dashboard</h2>
                <p>This is the main content your dashboard.</p>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/web/assets/cookies-alert-plugin/cookies-alert-core.js"></script>
    <script src="assets/web/assets/cookies-alert-plugin/cookies-alert-script.js"></script>
    <script src="assets/smoothscroll/smooth-scroll.js"></script>
    <script src="assets/ytplayer/index.js"></script>
    <script src="assets/dropdown/js/navbar-dropdown.js"></script>
    <script src="assets/theme/js/script.js"></script>
    <script src="assets/formoid/formoid.min.js"></script>
</body>
</html>
