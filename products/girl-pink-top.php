<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Top niña rosado | Tienda Online</title>
  
  <link rel="stylesheet" href="products-styles.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>

<body>
  <header>
    <div class="header-top">
      <div class="container">
        <ul class="header-social-container">
          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a>
          </li>
        </ul>

        <div class="header-alert-news">
          <p>
            <b>Envío gratis</b>
            Solo esta semana por compras superiores a $99,990
          </p>
        </div>

        <div class="header-top-actions">
          <select name="currency">
            <option value="cop">COP &dollar;</option>
            <option value="usd">USD &dollar;</option>
            <option value="eur">EUR &euro;</option>
          </select>

          <select name="language">
            <option value="es-ES">Espa&ntilde;ol</option>
            <option value="en-US">English</option>
            <option value="fr">Fran&ccedil;ais</option>
          </select>
        </div>
      </div>
    </div>

    <div class="header-main">
      <div class="container">
        <a href="/tiendaonline/home.php" class="header-logo">
          <h1>Tienda Online</h1>
        </a>

        <div class="header-search-container">
          <input type="search" name="search" class="search-field" placeholder="Buscar productos...">

          <button class="search-btn">
            <ion-icon name="search-outline"></ion-icon>
          </button>
        </div>

        <div class="header-user-actions">
          <button onclick="location.href='//localhost/tiendaonline/myaccount.php'" type="button" class="action-btn">
            <ion-icon name="person-outline"></ion-icon>
          </button>

          <button class="action-btn">
            <ion-icon name="heart-outline"></ion-icon>
            <span class="count">0</span>
          </button>

          <button class="action-btn">
            <ion-icon name="bag-handle-outline"></ion-icon>
            <span class="count">0</span>
          </button>
        </div>
      </div>
    </div>

    <nav class="desktop-navigation-menu">
      <div class="container">
        <ul class="desktop-menu-category-list">
          <li class="menu-category">
            <a href="/tiendaonline/home.php" class="menu-title">Inicio</a>
          </li>

          <li class="menu-category">
            <a href="/tiendaonline/home.php#just-arrived" class="menu-title">Recién llegados</a>
          </li>

          <li class="menu-category">
            <a href="/tiendaonline/home.php#trends" class="menu-title">Tendencias</a>
          </li>

          <li class="menu-category">
            <a href="/tiendaonline/home.php#most-value" class="menu-title">Lo Más Valorado</a>
          </li>

          <li class="menu-category">
            <a href="/tiendaonline/home.php#new-products" class="menu-title">Nuevos Productos</a>
          </li>

          <li class="menu-category">
            <a href="/tiendaonline/home.php#blog" class="menu-title">Blog</a>
          </li>

          <li class="menu-category">
            <a href="/tiendaonline/home.php#oferts" class="menu-title">Ofertas</a>
          </li>
        </ul>
      </div>

    </nav>
    <div class="mobile-bottom-navigation">
      <a href="/tiendaonline/home.php" class="action-btn">
        <ion-icon name="home-outline"></ion-icon>
      </a>
      <a class="action-btn">
        <ion-icon name="bag-handle-outline"></ion-icon>
        <span class="count">0</span>
      </a>
      <a class="action-btn">
        <ion-icon name="heart-outline"></ion-icon>
        <span class="count">0</span>
      </a>
      <a href="/tiendaonline/myaccount.php" class="action-btn">
        <ion-icon name="person-outline"></ion-icon>
      </a>
    </div>
  </header>

  <main>
    <div class="product-container">
      <div class="container">
        <div class="product-box">
          <div class="product-featured">
            <div class="showcase-wrapper has-scrollbar">
              <div class="showcase-container">
                <div class="showcase">
                  
                  <div class="showcase-banner">
                    <img src="assets/products/clothes-2.jpg" alt="girl pink top" class="showcase-img">
                  </div>

                  <div class="showcase-content">
                    
                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                    </div>

                    <a href="#">
                      <h3 class="showcase-title">Top niña rosado</h3>
                    </a>

                    <p class="showcase-desc">
                      Lorem ipsum dolor sit amet consectetur Lorem ipsum
                      dolor dolor sit amet consectetur Lorem ipsum dolor
                    </p>

                    <div class="price-box">
                      <p class="price">$49,990</p>
                      <del>$59,990</del>
                    </div>

                    <button class="add-cart-btn">Agregar al carrito</button>

                    <div class="showcase-status">
                      <div class="wrapper">
                        <p>
                          Disponibles: <b>40</b>
                        </p>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </main>

  <footer>
    <div class="footer-nav">
      <div class="container">
        <ul class="footer-nav-list">
          <li class="footer-nav-item">
            <h2 class="nav-title">Categorías populares</h2>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Moda</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Técnologia</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Cósmeticos</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Salud</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Relojes</a>
          </li>
        </ul>

        <ul class="footer-nav-list">
          <li class="footer-nav-item">
            <h2 class="nav-title">Productos</h2>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Gafas de sol</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Chaquetas</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Zapatos</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Vestidos</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Collares</a>
          </li>
        </ul>

        <ul class="footer-nav-list">
          <li class="footer-nav-item">
            <h2 class="nav-title">Nuestra compañía</h2>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Entregas</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Aviso Legal</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Términos y condiciones</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Sobre nosotros</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Pagos seguros</a>
          </li>
        </ul>

        <ul class="footer-nav-list">       
          <li class="footer-nav-item">
            <h2 class="nav-title">Servicios</h2>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Envíos a todo el mundo</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Entrega al día siguiente</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">El mejor soporte en línea</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Política de devoluciones</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">30% de devolución de dinero</a>
          </li>
        </ul>

        <ul class="footer-nav-list">
          <li class="footer-nav-item">
            <h2 class="nav-title">Contácto</h2>
          </li>

          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="location-outline"></ion-icon>
            </div>

            <address class="content">
              Calle 123456, Cartagena, Colombia.
            </address>
          </li>

          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="call-outline"></ion-icon>
            </div>

            <a href="tel:+607936-8058" class="footer-nav-link">(123) 456-7890</a>
          </li>

          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="mail-outline"></ion-icon>
            </div>

            <a href="mailto:tiendaonline@email.com" class="footer-nav-link">tiendaonline@email.com</a>
          </li>
        </ul>

        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">Síguenos</h2>
          </li>

          <li>
            <ul class="social-link">

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-facebook"></ion-icon>
                </a>
              </li>

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-twitter"></ion-icon>
                </a>
              </li>

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-linkedin"></ion-icon>
                </a>
              </li>

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-instagram"></ion-icon>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">
        <img src="assets/payment.png" alt="payment method" class="payment-img">
        <p class="copyright">
          Copyright &copy; 2023 <a href="#">Tienda Online</a>. Todos los derechos reservados.
        </p>
      </div>
    </div>
  </footer>

  <script>
  'use strict';

  const modal = document.querySelector('[data-modal]');
  const modalCloseBtn = document.querySelector('[data-modal-close]');
  const modalCloseOverlay = document.querySelector('[data-modal-overlay]');

  const modalCloseFunc = function () { modal.classList.add('closed') }

  modalCloseOverlay.addEventListener('click', modalCloseFunc);
  modalCloseBtn.addEventListener('click', modalCloseFunc);

  const notificationToast = document.querySelector('[data-toast]');
  const toastCloseBtn = document.querySelector('[data-toast-close]');

  toastCloseBtn.addEventListener('click', function() {
    notificationToast.classList.add('closed');
  });

  const mobileMenuOpenBtn = document.querySelectorAll('[data-mobile-menu-open-btn]');
  const mobileMenu = document.querySelectorAll('[data-mobile-menu]');
  const mobileMenuCloseBtn = document.querySelectorAll('[data-mobile-menu-close-btn]');
  const overlay = document.querySelector('[data-overlay]');

  for (let i = 0; i < mobileMenuOpenBtn.length; i++) {
    const mobileMenuCloseFunc = function() {
      mobileMenu[i].classList.remove('active');
      overlay.classList.remove('active');
    }

    mobileMenuOpenBtn[i].addEventListener('click', function() {
      mobileMenu[i].classList.add('active');
      overlay.classList.add('active');
    });

    mobileMenuCloseBtn[i].addEventListener('click', mobileMenuCloseFunc);
    overlay.addEventListener('click', mobileMenuCloseFunc);
  }

  const accordionBtn = document.querySelectorAll('[data-accordion-btn]');
  const accordion = document.querySelectorAll('[data-accordion]');

  for (let i = 0; i < accordionBtn.length; i++) {
    accordionBtn[i].addEventListener('click', function () {
      const clickedBtn = this.nextElementSibling.classList.contains('active');

      for (let i = 0; i < accordion.length; i++) {
        if (clickedBtn) break;

        if (accordion[i].classList.contains('active')) {
          accordion[i].classList.remove('active');
          accordionBtn[i].classList.remove('active');
        }
      }

      this.nextElementSibling.classList.toggle('active');
      this.classList.toggle('active');
    });
  }
  </script>

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>