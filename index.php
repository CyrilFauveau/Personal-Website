<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="robots" content="index, follow" />
    <meta
      name="description"
      content="Bienvenue sur le site web de mon portfolio. je suis un développeur front-end spécialisé dans la création de sites avec CMS. Découvrez mes projets et mes compétences."
    />

    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="Portfolio de Cyril Fauveau">
    <meta itemprop="description" content="Bienvenue sur le site web de mon portfolio. je suis un développeur front-end spécialisé dans la création de sites avec CMS. Découvrez mes projets et mes compétences.">

    <!-- Reference screenshot of updated site's header in place of content -->
    <meta itemprop="image" content="assets/images/sharing-card.png">

    <!-- Facebook Meta Tags -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Portfolio de Cyril Fauveau">
    <meta property="og:description" content="Bienvenue sur le site web de mon portfolio. je suis un développeur front-end spécialisé dans la création de sites avec CMS. Découvrez mes projets et mes compétences.">

    <!-- Reference screenshot of updated site's header in content -->
    <meta property="og:image" content="assets/images/sharing-card.png">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Portfolio de Cyril Fauveau">
    <meta name="twitter:description" content="Bienvenue sur le site web de mon portfolio. je suis un développeur front-end spécialisé dans la création de sites avec CMS. Découvrez mes projets et mes compétences.">

    <!-- Reference screenshot of updated site's header in content -->
    <meta name="twitter:image" content="assets/images/sharing-card.png">

    <link
      rel="shortcut icon"
      href="assets/images/favicons.png"
      type="image/png"
    />

    <link
      rel="preload"
      href="assets/fonts/Mona-Sans.woff2"
      as="font"
      type="font/woff2"
      crossorigin
    />

    <link rel="stylesheet" href="style.css" />
    <script src="script.js" defer></script>

    <title>Portfolio de Cyril Fauveau - Développeur web / Développeur CMS</title>
  </head>

  <body>

    <script>
      const theme = localStorage.getItem("theme") || "dark";
      document.body.classList.add(theme);
    </script>

    <header class="header">

      <div class="menu-btn-container">
        <div class="container">
          <label class="theme-switch" for="theme-switch">
            <span>Thème sombre</span>
            <input type="checkbox" id="theme-switch" role="switch"/>
          </label>
        </div>
      </div>

      <div class="container">
        <div class="header-textbox">
          <h1 class="h1">
            Bonjour, Je suis Cyril Fauveau<br />
            Développeur Web
          </h1>
          <p class="header-text">
            Création de sites web avec Shopify et Wordpress,<br>
            Intégration de maquettes, Développement front-end.
          </p>
          <div class="header-btns">
            <a href="#contact" class="btn btn-cta">Me contacter</a>
            <a href="#work" class="btn btn-secondary">Voir mon travail</a>
          </div>
        </div>
      </div>
    </header>

    <main>
      <section class="work">
        <div class="container">
          <h2 class="h2" id="work">Projets Réalisés</h2>
          <div class="work-boxes">
            <div class="work-box">
              <div class="work-textbox">
                <h3 class="h3">Spacefox</h3>
                <p class="work-text">
                  Refonte du site web de Spacefox avec Shopify.
                </p>
                <ol class="work-technologies">
                  <li>Migration Prestashop vers Shopify</li>
                  <li>Conception d'une nouvelle arborescence</li>
                  <li>Intégration des maquettes</li>
                  <li>Développement des composants</li>
                </ol>
                <div class="work-links">
                  <a href="https://spacefox.shop" target="_blank" rel="noopener" class="link">Voir le site</a>
                </div>
              </div>
              <picture class="work-img">
                <img
                  loading="lazy"
                  src="assets/images/work/spacefox-website.webp"
                  alt="site web spacefox"
                />
              </picture>
            </div>

            <div class="work-box">
              <div class="work-textbox">
                <h3 class="h3">Futuroïd</h3>
                <p class="work-text">
                  Création du site web, développement from scratch.
                </p>
                <ol class="work-technologies">
                  <li>Développement back-end</li>
                  <li>Intégration des maquettes</li>
                  <li>Création d'un système de réservation en ligne</li>
                  <li>HTML/CSS/JS/PHP</li>
                </ol>
                <div class="work-links">
                  <span class="link">Voir le site</span>
                </div>
              </div>
              <picture class="work-img">
                <img
                  loading="lazy"
                  src="assets/images/work/futuroid.webp"
                  alt="Futuroid"
                />
              </picture>
            </div>

            <div class="work-box">
              <div class="work-textbox">
                <h3 class="h3">Team WeForge Esport</h3>
                <p class="work-text">
                  Création du site web, développement from scratch.
                </p>
                <ol class="work-technologies">
                  <li>Intégration des maquettes</li>
                  <li>Création d'un back-office</li>
                  <li>HTML/CSS/JS/PHP</li>
                </ol>
                <div class="work-links">
                  <span class="link">Voir le site</span>
                </div>
              </div>
              <picture class="work-img">
                <img
                  loading="lazy"
                  src="assets/images/work/weforge.webp"
                  alt="Team WeForge Esport"
                />
              </picture>
            </div>

            <div class="work-box">
              <div class="work-textbox">
                <h3 class="h3">Bienvenue à Gaïa</h3>
                <p class="work-text">
                  Création du site vitrine d'un jeu vidéo avec Wordpress.
                </p>
                <ol class="work-technologies">
                  <li>Intégration des maquettes</li>
                  <li>Responsive Design</li>
                  <li>SEO</li>
                </ol>
                <div class="work-links">
                  <span class="link">Voir le site</span>
                </div>
              </div>
              <picture class="work-img">
                <img
                  loading="lazy"
                  src="assets/images/work/gaia.webp"
                  alt="Bienvenue a Gaia"
                />
              </picture>
            </div>

            <div class="work-box">
              <div class="work-textbox">
                <h3 class="h3">Altego</h3>
                <p class="work-text">
                  Développement d'une plateforme de recrutement.
                </p>
                <ol class="work-technologies">
                  <li>Conception de l'application</li>
                  <li>Développement front-end</li>
                  <li>ReactJS</li>
                </ol>
                <div class="work-links">
                  <span class="link">Projet scolaire</span>
                </div>
              </div>
              <picture class="work-img">
                <img
                  loading="lazy"
                  src="assets/images/work/altego.webp"
                  alt="Altego"
                />
              </picture>
            </div>

            <div class="work-box">
              <div class="work-textbox">
                <h3 class="h3">John's Escape</h3>
                <p class="work-text">
                  Création d'un jeu vidéo.
                </p>
                <ol class="work-technologies">
                  <li>Conception et Développement</li>
                  <li>Progressive Web App</li>
                  <li>PhaserJS</li>
                </ol>
                <div class="work-links">
                  <a href="https://johns-escape.com/" target="_blank" rel="noopener" class="link">Accéder au jeu</a>
                </div>
              </div>
              <picture class="work-img">
                <img
                  loading="lazy"
                  src="assets/images/work/johns-escape.webp"
                  alt="jeu vidéo John's Escape"
                />
              </picture>
            </div>
          </div>
        </div>
      </section>

      <section class="skills">
        <div class="container">
          <h2 class="h2" id="skills">Mes compétences</h2>
          <figure class="skills-imgs">
            <img src="assets/images/skills/shopify.svg" alt="Shopify" class="skills-img" loading="lazy" title="Shopify">
            <img src="assets/images/skills/wordpress.svg" alt="Wordpress" class="skills-img" loading="lazy" title="Wordpress">
            <img src="assets/images/skills/html.svg" alt="HTML" class="skills-img" loading="lazy" title="HTML">
            <img src="assets/images/skills/css.svg" alt="CSS" class="skills-img" loading="lazy" title="CSS">
            <img src="assets/images/skills/js.svg" alt="Javascript" class="skills-img" loading="lazy" title="Javascript">
            <img src="assets/images/skills/php.svg" alt="PHP" class="skills-img" loading="lazy" title="PHP">
          </figure>
        </div>
      </section>

      <!-- <section>
        <h2 class="h2">Mes clients</h2>
        <div class="container">
          <ol class="testimonials">
            <li class="testimonial">
              <blockquote class="testimonial-text">
                Review here.
              </blockquote>
              <figure class="testimonial-author">
                <img
                  src="assets/images/testimonials/john-doe.png"
                  alt="John Doe"
                  loading="lazy"
                />
                <figcaption>
                  <h3 class="testimonial-author-name">John Doe</h3>
                  <p class="testimonial-author-job">Job @Company</p>
                </figcaption>
              </figure>
            </li>
            <li class="testimonial">
              <blockquote class="testimonial-text">
                Review here.
              </blockquote>
              <figure class="testimonial-author">
                <img
                  src="assets/images/testimonials/john-doe.webp"
                  alt="John Doe"
                  loading="lazy"
                />
                <figcaption>
                  <h3 class="testimonial-author-name">
                   John Doe
                  </h3>
                  <p class="testimonial-author-job">Job @Company
                  </p>
                </figcaption>
              </figure>
            </li>
            <li class="testimonial">
              <blockquote class="testimonial-text">
                Review here.
              </blockquote>
              <figure class="testimonial-author">
                <img
                  src="assets/images/testimonials/john-doe.png"
                  alt="John Doe"
                  loading="lazy"
                />
                <figcaption>
                  <h3 class="testimonial-author-name">John Doe</h3>
                  <p class="testimonial-author-job">Job @Company</p>
                </figcaption>
              </figure>
            </li>
          </ol>
        </div>
      </section> -->

      <section class="contact">
        <div class="container">
          <h2 class="h2" id="contact">Me contacter</h2>
          <div class="contact-content">
            <div class="contact-textbox">
              <strong href="#" class="hire-alert">
                <span class="indicator"></span>
                Disponible pour des missions
              </strong>
              <p class="contact-text">
                En tant que développeur, je créer des sites web adaptés et performants.
                Spécialiste de Shopify et de Wordpress, je possède également des compétences plus techniques sur du développement front principalement.
              </p>
              <p class="contact-text">
                Je suis diplômé d'un Master Développeur Fullstack et possède plusieurs années d'expérience dans le domaine.
              </p>
              <img
                src="assets/images/signatures.png"
                alt="Cyril Fauveau"
                class="signatures"
                loading="lazy"
              />
            </div>
            <form action="" class="contact-form" method="post">
              <p style="text-align:center;"><?php if(isset($message)) { echo $message; } ?></p>
              <div class="form-field">
                <label for="name">Nom*</label>
                <input type="text" name="name" id="name" required />
              </div>
              <div class="form-field">
                <label for="subject">Sujet*</label>
                <input type="text" name="subject" id="subject" required />
              </div>
              <div class="form-field">
                <label for="email">Email*</label>
                <input
                  type="email"
                  name="email"
                  id="email"
                  required
                  inputmode="email"
                />
              </div>
              <div class="form-field">
                <label for="message">Message*</label>
                <textarea name="message" id="message" required></textarea>
              </div>
              <button type="submit" class="btn btn-cta">Envoyer</button>
            </form>
          </div>
        </div>
      </section>
    </main>

    <footer class="footer">
      <div class="container">
        <div class="footer-content">
          <nav>
            <ol class="footer-links">
              <!-- <li class="footer-link">
                <a title="GitHub" href="https://github.com/CyrilFauveau" target="_blank" rel="noopener"
                  ><img
                    loading="lazy"
                    src="assets/images/social-links/github.svg"
                    alt="GitHub"
                /></a>
              </li> -->
              <li class="footer-link">
                <a title="Linkedin" href="https://www.linkedin.com/in/cyril-fauveau/" target="_blank" rel="noopener"
                  ><img
                    loading="lazy"
                    src="assets/images/social-links/linkedin.svg"
                    alt="Linkedin"
                /></a>
              </li>
              <li class="footer-link">
                <a title="Malt" href="https://www.malt.fr/profile/cyrilfauveau" target="_blank" rel="noopener"
                  ><img
                    loading="lazy"
                    src="assets/images/social-links/malt.svg"
                    alt="Malt"
                /></a>
              </li>
            </ol>
          </nav>

          <p class="footer-text">
            <a href="mailto:contact@cyrilfauveau.fr">contact@cyrilfauveau.fr</a>
          </p>

          <label class="theme-switch" for="theme-switch">
            <a href="assets/images/Cyril-Fauveau-CV.pdf" target="_blank" download>
              <span>Télécharger mon CV</span>
            </a>
          </label>
        </div>
      </div>
    </footer>
  </body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $subject = $_POST["subject"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "contact@cyrilfauveau.fr";

    $headers = "From: $email" . "\r\n";
    $headers .= "Reply-To: $email" . "\r\n";
    $headers .= "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8" . "\r\n";

    if (mail($to, $subject, $message, $headers)) {
        $message = "Votre message a été envoyé avec succès.";
    } else {
        $message = "Une erreur s'est produite lors de l'envoi de votre message.";
    }

} else {
    $message = "Une erreur s'est produite.";
}