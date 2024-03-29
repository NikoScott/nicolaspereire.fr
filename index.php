<?php

$confirmationClass = "";
$confirmationMessage = "";

if (isset($_POST['submit'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $sujet = $_POST['sujet'];
    $message = $_POST['message'];

    // Validation des champs
    if (empty($nom) || empty($prenom) || empty($email) || empty($message)) {
      $confirmationMessage = "Tous les champs sont obligatoires.";
      $confirmationClass = "error";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $confirmationMessage = "L'adresse e-mail n'est pas valide.";
      $confirmationClass = "error";
    } else {
      // Nettoyer le champ message
      $message = htmlspecialchars($message, ENT_QUOTES);

      // Les données sont valides, continuez le traitement
      $to = "contact@nicolaspereire.fr";
      $subject = "Nouveau message nicolaspereire.fr";
      $body = "Prénom: $prenom\nNom: $nom\nEmail: $email\nSujet: $sujet\nMessage: $message";
      $headers = "From: $email";

      if (mail($to, $subject, $body, $headers)) {
          $confirmationMessage = "Merci $prenom $nom ! Votre message a été envoyé avec succès.";
          $confirmationClass = "success";
      } else {
          $confirmationMessage = "Une erreur s'est produite lors de l'envoi de votre message. Veuillez réessayer.";
          $confirmationClass = "warning";
      }
  }
}
?>


<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="description" content="Un développeur web compétent et créatif, prêt à mettre ses compétences au service de votre projet pour le rendre unique et performant.">
  <meta name="keywords" content="développeur">

  <title> Nicolas PEREIRE </title>

  <!-- Favicons -->
  <link href="" rel="icon">


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="./assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="./assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="./assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="./assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="./assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="./assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="./assets/css/style.css" rel="stylesheet">

</head>

<body onload="calculateAge()">

  <!-- ======= Mobile nav toggle button ======= -->
  <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
  <i class="bi bi-list mobile-nav-toggle d-lg-none"></i>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex flex-column justify-content-center">

    <nav id="navbar" class="navbar nav-menu">
      <ul>
        <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
        <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>A Propos De Moi</span></a></li>
        <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Mon Parcours</span></a>
        </li>
        <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Mes
              Projets</span></a></li>
        <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
      </ul>
    </nav><!-- .nav-menu -->

  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">

      <!-- CONFIRMATION -->
      <?php if (!empty($confirmationClass)) { ?>
        <div id="msg" class="alert alert-<?php echo $confirmationClass; ?>" role="alert"><?php echo $confirmationMessage; ?></div>
      <?php } ?>

      <h1>Nicolas PEREIRE</h1>
      <p>I'm <span class="typed" data-typed-items="father., basketball player., developer., ready to work with you."></span></p>

      <div class="social-links">
        <a href="https://www.linkedin.com/in/nicolas-pereire-440b64163/" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        <a href="https://discordapp.com/users/926976175623012402" target="_blank" class="discord"><i class="bx bxl-discord"></i></a>
        <a href="https://blog.nicolaspereire.fr" target="_blank" class="google"><i class="bx bxl-google"></i></a>
      </div>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>A propos de moi</h2>
          <p> En reconversion professionnelle dans le développement web à 33 ans, je ne manque pas de motivation et de
            créativité pour vous aider à réaliser vos projets digitaux, mon défi sera de concrétiser vos idées en
            projets concrets. </p>
        </div>

        <div class="row">
          <div class="col-lg-4">
            <img src="./assets/img/profile.png" class="img-fluid" alt="Photo">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content">
            <h3>Développeur full stack </h3>
            <p class="fst-italic">
              Un développeur web compétent et créatif, prêt à mettre ses compétences au service de votre projet pour le
              rendre unique et performant.
            </p>
            <br>
            <br>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Date de naissance:</strong> <span>12 Janvier
                      1990</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Télephone:</strong> <span>+33 6 70 41 42 69</span>
                  </li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Ville:</strong> <span>Villeneuve Loubet</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span id="age"> </span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>nico.pereire@gmail.com</span>
                  </li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Statut:</strong> <span>Disponible</span></li>
                </ul>
              </div>
            </div>
            <div class="qrcode">
              <!-- <img src="./assets/img/QR code linkedin.JPG" rel="QR_code"> -->
            </div>
          </div>

        </div>
    </section><!-- End About Section -->


    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Compétences</h2>
        </div>

        <div class="Skill-logo">
          <div class="logo_skill">
            <img src="./assets/img/HTML5.png" alt="html">
          </div>
          <div class="logo_skill">
            <img src="./assets/img/CSS3_logo.png" alt="css">
          </div>
          <div class="logo_skill">
            <img src="./assets/img/JavaScript-logo.png" alt="javascript">
          </div>
          <div class="logo_skill">
            <img src="./assets/img/JQuery-Logo.png" alt="jquery">
          </div>
          <div class="logo_skill">
            <img src="./assets/img/PHP-logo.png" alt="php">
          </div>
          <div class="logo_skill">
            <img src="./assets/img/Sql_logo.png" alt="mysql">
          </div>
          <div class="logo_skill">
            <img src="./assets/img/logo_React_logo.png" alt="react">
          </div>
          <div class="logo_skill">
            <img src="./assets/img/symfony_logo.png" alt="symfony">
          </div>
        </div>
      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Mon parcours</h2>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <h3 class="resume-title">FORMATION</h3>
            <div class="resume-item">
              <h4>Titre de développeur full stack </h4>
              <h5>Janvier 2023 - Aujourd'hui</h5>
              <p><em> AFPA de Cannes </em></p>
              <p> Formation de 8 mois dont 2 mois (350h) de stage en entreprise, développeur web et web mobile. </p>
            </div>
            <div class="resume-item">
              <h4> Educateur sportif </h4>
              <h5>2014 - 2016</h5>
              <p><em> BPJEPS Activité Physique pour Tous en alternance </em></p>
              <p> Animation de groupe d'enfants dans une école primaire et dans un collège, découverte et
                perfectionnement d'adolescents au sein de mon club de basket </p>
            </div>
            <div class="resume-item">
              <h4> Technicien d'usinage </h4>
              <h5>2007 - 2013</h5>
              <p><em> BEP, BAC PRO &amp; BTS en alternance </em></p>
              <p> Suivi, contrôle et priorisation d’une production, animation d'une équipe, point sécurité, efficience,
                amélioration, mode opératoire</p>
            </div>
          </div>
          <div class="col-lg-6">
            <h3 class="resume-title">EXPERIENCE PROFESSIONNEL</h3>
            <div class="resume-item">
              <h4> Chef d'équipe </h4>
              <h5>Mars 2021 - Sept' 2022</h5>
              <p><em> LEGRAND à Antibes </em></p>
              <ul>
                <li> Suivi, contrôle et priorisation d’une production </li>
                <li> Animation d'une équipe </li>
                <li> Point sécurité </li>
                <li> Efficience </li>
                <li> Amélioration </li>
              </ul>
            </div>
            <div class="resume-item">
              <h4>Responsable de production</h4>
              <h5>Mars 2020 - Mars 2021</h5>
              <p><em> LL Industrie à Vallauris </em></p>
              <ul>
                <li> Réglage, production et contrôle </li>
                <li> Gestion des stocks </li>
                <li> Organisation de la production </li>
                <li> Gestion du personnel </li>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Mes projets</h2>
          <p> Ce portfolio rassemble l'ensemble de mes réalisations, témoignant de ma polyvalence en matière de
            conception de projets digitaux, allant des jeux captivants aux sites web créatifs que j'ai conçus pour
            satisfaire les besoins de mes clients. </p>
        </div>
        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active"> All </li>
              <li data-filter=".filter-jeux"> Jeux </li>
              <li data-filter=".filter-web"> Site Web </li>
              <li data-filter=".filter-autre"> Autre </li>
            </ul>
          </div>
        </div>
        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="./assets/img/portfolio/devwebconcept.png" class="img-custom" alt="devwebconcept">
              <div class="portfolio-info">
                <h4>DevWebConcept</h4>
                <p>Website</p>
                <div class="portfolio-links">
                  <a href="https://devwebconcept.com" class="portfolio-details-lightbox" target="_blank" data-glightbox="type: external" title="Ouvrir"> <i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="./assets/img/portfolio/blog.png" class="img-custom" alt="blog">
              <div class="portfolio-info">
                <h4>Mon blog</h4>
                <p>Website</p>
                <div class="portfolio-links">
                  <a href="https://blog.nicolaspereire.fr" target="_blank" class="portfolio-details-lightbox" data-glightbox="type: external" title="Ouvrir"> <i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-jeux">
            <div class="portfolio-wrap">
              <img src="./assets/img/portfolio/squid-game.png" class="img-custom" alt="squid-game">
              <div class="portfolio-info">
                <h4>Squid Game</h4>
                <p>Jeux</p>
                <div class="portfolio-links">
                  <a href="./assets/img/portfolio/Squid_Game/index.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Ouvrir"> <i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-autre">
            <div class="portfolio-wrap">
              <img src="./assets/img/portfolio/couleur.png" class="img-custom" alt="couleur">
              <div class="portfolio-info">
                <h4> Générateur de couleurs </h4>
                <p> Autre </p>
                <div class="portfolio-links">
                  <a href="./assets/img/portfolio/Générateur_couleurs/index.html" class="portfolio-details-lightbox" target="_blank" data-glightbox="type: external" title="Ouvrir"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-jeux">
            <div class="portfolio-wrap">
              <img src="./assets/img/portfolio/cercles.png" class="img-custom" alt="cercles">
              <div class="portfolio-info">
                <h4> Cercles et animation </h4>
                <p> Jeux </p>
                <div class="portfolio-links">
                  <a href="./assets/img/portfolio/Couleurs/index.html" class="portfolio-details-lightbox" target="_blank" data-glightbox="type: external" title="Ouvrir"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Portfolio Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Contact</h2>
        </div>
        <div class="row mt-1">
          <div class="col-lg-8 mt-5 mt-lg-0">
            <form method="POST" action="">
              <div class="d-flex mb-3">
                <div class="form-group col-md-6 pe-1">
                  <!-- <label for="prenom">Prénom :</label> -->
                  <input type="text" placeholder="Prénom" class="form-control" id="prenom" name="prenom" required>
                </div>
                <div class="form-group col-md-6 ps-1">
                  <!-- <label for="nom">Nom :</label> -->
                  <input type="text" placeholder="Nom" class="form-control" id="nom" name="nom" required>
                </div>
              </div>
              <div class="form-group mb-4">
                <!-- <label for="email">Email :</label> -->
                <input type="email" placeholder="Email" class="form-control" id="email" name="email" required>
              </div>
              <div class="form-group mb-4">
                <!-- <label for="phone">Sujet :</label> -->
                <input type="text" placeholder="Sujet" class="form-control" id="sujet" name="sujet">
              </div>
              <div class="form-group mb-4">
                <!-- <label for="message">Message :</label> -->
                <textarea class="form-control" placeholder="Message" id="message" name="message" rows="4" required></textarea>
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-primary" name="submit" id="submit-btn">Envoyer</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Nicolas PEREIRE</h3>
      <p>Un développeur web passionné et motivé, prêt à relever tous les défis pour vous aider à réaliser vos projets
        digitaux.</p>
      <div class="social-links">
        <a href="https://www.linkedin.com/in/nicolas-pereire-440b64163/" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        <a href="https://discordapp.com/users/926976175623012402" target="_blank" class="discord"><i class="bx bxl-discord"></i></a>
        <a href="https://blog.nicolaspereire.fr" target="_blank" class="google"><i class="bx bxl-google"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright, All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="./assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="./assets/vendor/aos/aos.js"></script>
  <script src="./assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="./assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="./assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="./assets/vendor/typed.js/typed.min.js"></script>
  <script src="./assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="./assets/vendor/php-email-form/validate.js"></script>
  z
  <!-- Template Main JS File -->
  <script src="./assets/js/main.js"></script>
</body>
</html>