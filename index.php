<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bon Hotel</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;700&display=swap"
      rel="stylesheet"
    />
    <?php include "variable.php"; ?>
  </head>
  <body>
    <header class="header">
      <div class="container">
        <div class="header-flex">
          <img src="./assets/LOGO.png" alt="LOGO" />
          <ul class="nav">
            <!-- php -->
            <?php
            foreach ($categories as $category) {
              echo '<li class="item-category">
              <a class="link" href=" ' . $category['link'] . '"> ' . $category['name'] . '</a>
              <ul class="subcategory">';

              foreach ($category['children'] as $subcategory) {
                echo '<li>
                        <a class="link" href=" ' . $subcategory['link'] . '"> ' . $subcategory['name'] . '</a>
                      </li>';
              }

                echo '</ul> .
                    </li>';
              }   
              ?>   
          </ul>       
        </div>
      </div>
    </header>
    <main>
      <section class="first-section">
        <div class="first-section-content">
          <h1 class="main-title">WELCOME TO BON HOTEL</h1>
          <p class="description">Good people. Good thinking. Good feeling.</p>
          <a href="#" class="button"> EXPLORE </a>
        </div>
      </section>
      <section class="second-section">
        <div class="container">
          <h2 class="secondary-title">Rooms & Rates</h2>
          <div class="rooms-gallery">
            <div class="rooms-card">
              <img src="./assets/PHOTO2.svg" alt="2" />
              <div class="cards-content">
                <h3 class="card-title">Standard Twin Room</h3>
                <a href="#" class="button button2"> Check Rates </a>
              </div>
            </div>
            <div class="rooms-card">
              <img src="./assets/photo3.svg" alt="2" />
              <div class="cards-content">
                <h3 class="card-title">Standard Room</h3>
                <a href="#" class="button button2"> Check Rates </a>
              </div>
            </div>
            <div class="rooms-card">
              <img src="./assets/photo4.svg" alt="2" />
              <div class="cards-content">
                <h3 class="card-title">Standard View Room</h3>
                <a href="#" class="button button2"> Check Rates </a>
              </div>
            </div>
            <div class="rooms-card">
              <img src="./assets/PHOTO5.svg" alt="2" />
              <div class="cards-content">
                <h3 class="card-title">Deluxe Room</h3>
                <a href="#" class="button button2"> Check Rates </a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="third-section">
        <div class="container">
          <div class="contact-us">
            <h2 class="secondary-title">Get a room already!</h2>
            <a href="#" class="button"> Book Now</a>
          </div>
        </div>
      </section>
    </main>
    <footer>
      <div class="container">
        <div class="footer-content">
          <img src="./assets/logo2.png" alt="logo2" />
          <nav class="footer-navigation">
            <a href="#" class="footer-nav-links"> Our Hotels </a>
            <a href="#" class="footer-nav-links"> Our Conferencing </a>
            <a href="#" class="footer-nav-links"> Our Company </a>
            <a href="#" class="footer-nav-links"> Hotel Design </a>
            <a href="#" class="footer-nav-links"> Careers </a>
          </nav>
          <div class="footer-text">
            <p>Bon Hotels Head Office</p>
            <a href="tel:+27 434 344 432">+27 434 344 432</a>
            <a href="mailto:info@bonhotels.com">info@bonhotels.com</a>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>
