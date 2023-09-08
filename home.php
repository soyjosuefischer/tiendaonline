<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio | Tienda Online</title>
  
  <link rel="stylesheet" href="css/home-styles.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>

<body>
  <div class="overlay" data-overlay></div>
  <div class="modal" data-modal>
    <div class="modal-close-overlay" data-modal-overlay></div>
    <div class="modal-content">
      <button class="modal-close-btn" data-modal-close>
        <ion-icon name="close-outline"></ion-icon>
      </button>

      <div class="newsletter-img">
        <img src="assets/newsletter.png" alt="subscribe newsletter" width="400" height="400">
      </div>

      <div class="newsletter">
        <form action="#">
          <div class="newsletter-header">
            <h3 class="newsletter-title">Suscribete a nuestro boletín informativo.</h3>
            <p class="newsletter-desc">
              Suscribete a <b>Tienda Online</b> para obtener los últimos productos y actualización de descuento.
            </p>
          </div>
          <input type="email" name="email" class="email-field" placeholder="Correo electrónico" required>
          <button type="submit" class="btn-newsletter">Suscribirse</button>
        </form>

      </div>
    </div>
  </div>

  <div class="notification-toast" data-toast>
    <button class="toast-close-btn" data-toast-close>
      <ion-icon name="close-outline"></ion-icon>
    </button>

    <div class="toast-banner">
      <img src="assets/products/jewellery-1.jpg" alt="Pendientes de oro rosa" width="80" height="70">
    </div>

    <div class="toast-detail">
      <p class="toast-message">
        Oferta flash
      </p>
      <p class="toast-title">
        Pendientes de oro rosa
      </p>
      <p class="toast-meta">
        <button>Comprar</button>
      </p>
    </div>
  </div>

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
        <a href="home.php" class="header-logo">
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
            <a href="home.php" class="menu-title">Inicio</a>
          </li>

          <li class="menu-category">
            <a href="#just-arrived" class="menu-title">Recién llegados</a>
          </li>

          <li class="menu-category">
            <a href="#trends" class="menu-title">Tendencias</a>
          </li>

          <li class="menu-category">
            <a href="#most-value" class="menu-title">Lo Más Valorado</a>
          </li>

          <li class="menu-category">
            <a href="#new-products" class="menu-title">Nuevos Productos</a>
          </li>

          <li class="menu-category">
            <a href="#blog" class="menu-title">Blog</a>
          </li>

          <li class="menu-category">
            <a href="#oferts" class="menu-title">Ofertas</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="mobile-bottom-navigation">
      <a class="action-btn" data-mobile-menu-open-btn>
        <ion-icon name="menu-outline"></ion-icon>
      </a>
      <a href="home.php" class="action-btn">
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
      <a href="myaccount.php" class="action-btn">
        <ion-icon name="person-outline"></ion-icon>
      </a>
      <a class="action-btn" data-mobile-menu-open-btn>
        <ion-icon name="grid-outline"></ion-icon>
      </a>
    </div>

    <nav class="mobile-navigation-menu  has-scrollbar" data-mobile-menu>
      <div class="menu-top">
        <h2 class="menu-title">Menú</h2>
        <button class="menu-close-btn" data-mobile-menu-close-btn>
          <ion-icon name="close-outline"></ion-icon>
        </button>
      </div>

      <ul class="mobile-menu-category-list">
        <li class="menu-category">
          <a href="home.php" class="menu-title">Inicio</a>
        </li>

        <li class="menu-category">
          <a href="#just-arrived" class="menu-title">Recién llegados</a>
        </li>

        <li class="menu-category">
          <a href="#trends" class="menu-title">Tendencias</a>
        </li>

        <li class="menu-category">
          <a href="#most-value" class="menu-title">Lo mas valorado</a>
        </li>

        <li class="menu-category">
          <a href="#new-products" class="menu-title">Nuevos productos</a>
        </li>

        <li class="menu-category">
          <a href="#blog" class="menu-title">Blog</a>
        </li>
        <li class="menu-category">
          <a href="#oferts" class="menu-title">Ofertas</a>
        </li>
      </ul>

      <div class="menu-bottom">
        <ul class="menu-category-list">
          <li class="menu-category">
            <button class="accordion-menu" data-accordion-btn>
              <p class="menu-title">Idioma</p>
              <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
            </button>

            <ul class="submenu-category-list" data-accordion>
              <li class="submenu-category">
                <a href="#" class="submenu-title">English</a>
              </li>
              <li class="submenu-category">
                <a href="#" class="submenu-title">Espa&ntilde;ol</a>
              </li>
              <li class="submenu-category">
                <a href="#" class="submenu-title">Fren&ccedil;h</a>
              </li>
            </ul>

          </li>
          <li class="menu-category">
            <button class="accordion-menu" data-accordion-btn>
              <p class="menu-title">Moneda</p>
              <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
            </button>

            <ul class="submenu-category-list" data-accordion>
              <li class="submenu-category">
                <a href="#" class="submenu-title">COP &dollar;</a>
              </li>
              <li class="submenu-category">
                <a href="#" class="submenu-title">USD &dollar;</a>
              </li>
              <li class="submenu-category">
                <a href="#" class="submenu-title">EUR &euro;</a>
              </li>
            </ul>
          </li>
        </ul>

        <ul class="menu-social-container">
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
      </div>
    </nav>
  </header>

  <main>
    <div class="banner">
      <div class="container">
        <div class="slider-container has-scrollbar">
          <div class="slider-item">
            <img src="assets/banner-1.jpg" alt="women's latest fashion sale" class="banner-img">
            <div class="banner-content">
              <p class="banner-subtitle">Artículos en tendencia</p>
              <h2 class="banner-title">Rebajas de última moda para damas</h2>
              <p class="banner-text">
                Desde <b>$29,990</b>
              </p>
              <a href="#" class="banner-btn">Comprar</a>
            </div>
          </div>

          <div class="slider-item">
            <img src="assets/banner-2.jpg" alt="modern sunglasses" class="banner-img">
            <div class="banner-content">
              <p class="banner-subtitle">Accesorios de moda</p>
              <h2 class="banner-title">Gafas de sol modernas</h2>
              <p class="banner-text">
                Desde <b>$39,990</b>
              </p>
              <a href="#" class="banner-btn">Comprar</a>
            </div>
          </div>

          <div class="slider-item">
            <img src="assets/banner-3.jpg" alt="new fashion summer sale" class="banner-img">
            <div class="banner-content">
              <p class="banner-subtitle">Oferta del día</p>
              <h2 class="banner-title">Nueva venta de verano de moda</h2>
              <p class="banner-text">
                Desde &dollar; <b>$19,990</b>
              </p>
              <a href="#" class="banner-btn">Comprar</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="category">
      <div class="container">
        <div class="category-item-container has-scrollbar">
          <div class="category-item">
            <div class="category-img-box">
              <img src="assets/icons/dress.svg" alt="dress & frock" width="30">
            </div>
            <div class="category-content-box">
              <div class="category-content-flex">
                <h3 class="category-item-title">Ropa</h3>
              </div>
              <a href="#" class="category-btn">Ver todo</a>
            </div>
          </div>

          <div class="category-item">
            <div class="category-img-box">
              <img src="assets/icons/shoes.svg" alt="shoes" width="30">
            </div>
            <div class="category-content-box">
              <div class="category-content-flex">
                <h3 class="category-item-title">Calzado</h3>
              </div>
              <a href="#" class="category-btn">Ver todo</a>
            </div>
          </div>

          <div class="category-item">
            <div class="category-img-box">
              <img src="assets/icons/jewelry.svg" alt="jewelry" width="30">
            </div>
            <div class="category-content-box">
              <div class="category-content-flex">
                <h3 class="category-item-title">Joyería</h3>
              </div>
              <a href="#" class="category-btn">Ver todo</a>
            </div>
          </div>

          <div class="category-item">
            <div class="category-img-box">
              <img src="assets/icons/perfume.svg" alt="perfume" width="30">
            </div>
            <div class="category-content-box">
              <div class="category-content-flex">
                <h3 class="category-item-title">Perfumes</h3>
              </div>
              <a href="#" class="category-btn">Ver todo</a>
            </div>
          </div>

          <div class="category-item">
            <div class="category-img-box">
              <img src="assets/icons/cosmetics.svg" alt="cosmetics" width="30">
            </div>
            <div class="category-content-box">
              <div class="category-content-flex">
                <h3 class="category-item-title">Cósmeticos</h3>
              </div>
              <a href="#" class="category-btn">Ver todo</a>
            </div>
          </div>

          <div class="category-item">
            <div class="category-img-box">
              <img src="assets/icons/glasses.svg" alt="glasses" width="30">
            </div>
            <div class="category-content-box">
              <div class="category-content-flex">
                <h3 class="category-item-title">Gafas</h3>
              </div>
              <a href="#" class="category-btn">Ver todo</a>
            </div>
          </div>

          <div class="category-item">
            <div class="category-img-box">
              <img src="assets/icons/watch.svg" alt="watch" width="30">
            </div>
            <div class="category-content-box">
              <div class="category-content-flex">
                <h3 class="category-item-title">Relojes</h3>
              </div>
              <a href="#" class="category-btn">Ver todo</a>
            </div>
          </div>

          <div class="category-item">
            <div class="category-img-box">
              <img src="assets/icons/bag.svg" alt="bag" width="30">
            </div>
            <div class="category-content-box">
              <div class="category-content-flex">
                <h3 class="category-item-title">Bolsos</h3>
              </div>
              <a href="#" class="category-btn">Ver todo</a>
            </div>
          </div>

          <div class="category-item">
            <div class="category-img-box">
              <img src="assets/icons/hat.svg" alt="hat" width="30">
            </div>
            <div class="category-content-box">
              <div class="category-content-flex">
                <h3 class="category-item-title">Gorros</h3>
              </div>
              <a href="#" class="category-btn">Ver todo</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="product-container">
      <div class="container">
        <div class="sidebar  has-scrollbar" data-mobile-menu>
          <div class="sidebar-category">
            <div class="sidebar-top">
              <h2 class="sidebar-title">Categorías</h2>
              <button class="sidebar-close-btn" data-mobile-menu-close-btn>
                <ion-icon name="close-outline"></ion-icon>
              </button>
            </div>

            <ul class="sidebar-menu-category-list">
              <li class="sidebar-menu-category">
                <button class="sidebar-accordion-menu" data-accordion-btn>
                  <div class="menu-title-flex">
                    <img src="assets/icons/dress.svg" alt="clothes" width="20" height="20"
                      class="menu-title-img">
                    <p class="menu-title">Ropa</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                  </div>
                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>
                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Camisas</p>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Shorts y jeans</p>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Chaquetas</p>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Vestidos</p>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="sidebar-menu-category">
                <button class="sidebar-accordion-menu" data-accordion-btn>
                  <div class="menu-title-flex">
                    <img src="assets/icons/shoes.svg" alt="footwear" class="menu-title-img" width="20"
                      height="20">

                    <p class="menu-title">Calzado</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                  </div>
                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>
                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Deportivo</p>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Formal</p>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Casual</p>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Zapatos de seguridad</p>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="sidebar-menu-category">
                <button class="sidebar-accordion-menu" data-accordion-btn>
                  <div class="menu-title-flex">
                    <img src="assets/icons/jewelry.svg" alt="clothes" class="menu-title-img" width="20"
                      height="20">

                    <p class="menu-title">Joyería</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                  </div>
                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Pendientes</p>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Anillos para parejas</p>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Collares</p>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="sidebar-menu-category">
                <button class="sidebar-accordion-menu" data-accordion-btn>
                  <div class="menu-title-flex">
                    <img src="assets/icons/perfume.svg" alt="perfume" class="menu-title-img" width="20"
                      height="20">

                    <p class="menu-title">Perfumes</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                  </div>
                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>
                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Perfumes naturales</p>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Perfumes para hombres</p>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Perfume para mujeres</p>

                    </a>
                  </li>
                </ul>
              </li>

              <li class="sidebar-menu-category">
                <button class="sidebar-accordion-menu" data-accordion-btn>
                  <div class="menu-title-flex">
                    <img src="assets/icons/cosmetics.svg" alt="cosmetics" class="menu-title-img" width="20"
                      height="20">

                    <p class="menu-title">Cósmeticos</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                  </div>
                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Champús</p>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Protectores solares</p>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Jabones de baño</p>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Kits de maquillajes</p>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="sidebar-menu-category">
                <button class="sidebar-accordion-menu" data-accordion-btn>
                  <div class="menu-title-flex">
                    <img src="assets/icons/glasses.svg" alt="glasses" class="menu-title-img" width="20"
                      height="20">

                    <p class="menu-title">Gafas</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                  </div>
                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>
                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Gafas de sol</p>
                      <data value="50" class="stock" title="Available Stock">50</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Lentes</p>
                      <data value="48" class="stock" title="Available Stock">48</data>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="sidebar-menu-category">
                <button class="sidebar-accordion-menu" data-accordion-btn>
                  <div class="menu-title-flex">
                    <img src="assets/icons/watch.svg" alt="bags" class="menu-title-img" width="20" height="20">

                    <p class="menu-title">Relojes</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                  </div>
                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>
                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Smartwatch</p>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Relojs análogos</p>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Relojs de pared</p>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="sidebar-menu-category">
                <button class="sidebar-accordion-menu" data-accordion-btn>
                  <div class="menu-title-flex">
                    <img src="assets/icons/bag.svg" alt="bags" class="menu-title-img" width="20" height="20">

                    <p class="menu-title">Bolsos</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                  </div>
                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>
                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Bolsas para compras</p>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Mochilas de gimnasio</p>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Carteras para mujeres</p>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Billeteras</p>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="sidebar-menu-category">
                <button class="sidebar-accordion-menu" data-accordion-btn>
                  <div class="menu-title-flex">
                    <img src="assets/icons/hat.svg" alt="bags" class="menu-title-img" width="20" height="20">

                    <p class="menu-title">Gorros</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                  </div>
                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>
                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Gorros de invierno</p>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Gorras para hombres</p>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Gorras para mujeres</p>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>

          <div class="product-showcase">
            <h3 class="showcase-heading">Lo más vendido</h3>
            <div class="showcase-wrapper">
              <div class="showcase-container">
                <div class="showcase">
                  <a href="#" class="showcase-img-box">
                    <img src="assets/products/1.jpg" alt="baby fabric shoes" width="75" height="75"
                      class="showcase-img">
                  </a>

                  <div class="showcase-content">

                    <a href="#">
                      <h4 class="showcase-title">Zapatos de tela para bebé</h4>
                    </a>

                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                    <div class="price-box">
                      <del>$49,990</del>
                      <p class="price">$39,990</p>
                    </div>
                  </div>
                </div>

                <div class="showcase">
                  <a href="#" class="showcase-img-box">
                    <img src="assets/products/2.jpg" alt="men's hoodies t-shirt" class="showcase-img"
                      width="75" height="75">
                  </a>

                  <div class="showcase-content">

                    <a href="#">
                      <h4 class="showcase-title">Camiseta con capucha para hombre</h4>
                    </a>
                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-half-outline"></ion-icon>
                    </div>

                    <div class="price-box">
                      <del>$59,990</del>
                      <p class="price">$49,990</p>
                    </div>
                  </div>
                </div>

                <div class="showcase">
                  <a href="#" class="showcase-img-box">
                    <img src="assets/products/3.jpg" alt="girls t-shirt" class="showcase-img" width="75"
                      height="75">
                  </a>
                  <div class="showcase-content">

                    <a href="#">
                      <h4 class="showcase-title">Camiseta para niñas</h4>
                    </a>
                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-half-outline"></ion-icon>
                    </div>

                    <div class="price-box">
                      <del>$39,990</del>
                      <p class="price">$29,990</p>
                    </div>
                  </div>
                </div>

                <div class="showcase">
                  <a href="#" class="showcase-img-box">
                    <img src="assets/products/4.jpg" alt="woolen hat for men" class="showcase-img" width="75"
                      height="75">
                  </a>

                  <div class="showcase-content">
                    <a href="#">
                      <h4 class="showcase-title">Gorro de lana para hombre</h4>
                    </a>
                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                    <div class="price-box">
                      <del>$59,990</del>
                      <p class="price">$49,990</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="product-box">
          <div class="product-minimal">
            <div class="product-showcase">
              <h2 id="just-arrived" class="title">Recién llegados</h2>
              <div class="showcase-wrapper has-scrollbar">
                <div class="showcase-container">
                  <div class="showcase">
                    <a href="#" class="showcase-img-box">
                      <img src="assets/products/clothes-1.jpg" alt="relaxed short full sleeve t-shirt" width="70" class="showcase-img">
                    </a>

                    <div class="showcase-content">
                      <a href="products/relaxed-short-full-sleeve-t-shirt.php">
                        <h4 class="showcase-title">Camiseta de manga corta relajada</h4>
                      </a>

                      <a href="#" class="showcase-category">Camisas</a>

                      <div class="price-box">
                        <p class="price">$49,990</p>
                        <del>$59,990</del>
                      </div>
                    </div>
                  </div>

                  <div class="showcase">
                    <a href="#" class="showcase-img-box">
                      <img src="assets/products/clothes-2.jpg" alt="girl pink top" class="showcase-img" width="70">
                    </a>
                  
                    <div class="showcase-content">
                      <a href="products/girl-pink-top.php">
                        <h4 class="showcase-title">Top de niña rosado</h4>
                      </a>
                  
                      <a href="#" class="showcase-category">Ropa</a>
                  
                      <div class="price-box">
                        <p class="price">$49,990</p>
                        <del>$59,990</del>
                      </div>
                    </div>
                  </div>

                  <div class="showcase">
                    <a href="#" class="showcase-img-box">
                      <img src="assets/products/clothes-3.jpg" alt="black floral wrap skirt" class="showcase-img"
                        width="70">
                    </a>
                  
                    <div class="showcase-content">
                      <a href="products/black-floral-wrap-skirt.php">
                        <h4 class="showcase-title">Falda cruzada floral negra</h4>
                      </a>
                  
                      <a href="#" class="showcase-category">Ropa</a>
                      <div class="price-box">
                        <p class="price">$59,990</p>
                        <del>$69,990</del>
                      </div>              
                    </div>
                  </div>

                  <div class="showcase">           
                    <a href="#" class="showcase-img-box">
                      <img src="assets/products/shirt-1.jpg" alt="cotton shirt" class="showcase-img"
                        width="70">
                    </a>
                  
                    <div class="showcase-content">
                      <a href="products/cotton-shirt.php">
                        <h4 class="showcase-title">Camisa de algodón</h4>
                      </a>
                  
                      <a href="#" class="showcase-category">Camisas</a>
                  
                      <div class="price-box">
                        <p class="price">$69,990</p>
                        <del>$79,990</del>
                      </div>
                    </div>            
                  </div>
                </div>

                <div class="showcase-container">          
                  <div class="showcase">
                    <a href="#" class="showcase-img-box">
                      <img src="assets/products/jacket-5.jpg" alt="men full-zip jacket" class="showcase-img"
                        width="70">
                    </a>
                
                    <div class="showcase-content">               
                      <a href="products/men-full-zip-jacket.php">
                        <h4 class="showcase-title">Chaqueta con cremallera completa para hombre</h4>
                      </a>
                
                      <a href="#" class="showcase-category">Chaquetas</a>
                
                      <div class="price-box">
                        <p class="price">$89,990</p>
                        <del>$99,990</del>
                      </div>       
                    </div>             
                  </div>
                
                  <div class="showcase">
                    <a href="#" class="showcase-img-box">
                      <img src="assets/products/jacket-1.jpg" alt="men winter leather jacket" class="showcase-img"
                        width="70">
                    </a>
                
                    <div class="showcase-content">
                      <a href="products/chaqueta-de-cuero-de-invierno-para-hombre.php">
                        <h4 class="showcase-title">Chaqueta de cuero de invierno para hombre</h4>
                      </a>
                
                      <a href="#" class="showcase-category">Chaquetas</a>
          
                      <div class="price-box">
                        <p class="price">$99,990</p>
                        <del>$119,990</del>
                      </div>
                    </div>
                  </div>
                
                  <div class="showcase">
                
                    <a href="#" class="showcase-img-box">
                      <img src="assets/products/jacket-3.jpg" alt="men winter grey leather jacket" class="showcase-img"
                        width="70">
                    </a>
                
                    <div class="showcase-content">
                
                      <a href="products/men-winter-grey-leather-jacket.php">
                        <h4 class="showcase-title">Chaqueta gris de cuero de invierno para hombre</h4>
                      </a>
                
                      <a href="#" class="showcase-category">Ropa</a>
                
                      <div class="price-box">
                        <p class="price">$99,990</p>
                        <del>$119,990</del>
                      </div>
                    </div>
                  </div>
                
                  <div class="showcase">
                
                    <a href="#" class="showcase-img-box">
                      <img src="assets/products/shorts-1.jpg" alt="French terry sweat shorts" class="showcase-img"
                        width="70">
                    </a>
                
                    <div class="showcase-content">
                
                      <a href="products/french-terry-sweat-shorts.php">
                        <h4 class="showcase-title">Shorts de chándal de rizo francés</h4>
                      </a>
                
                      <a href="#" class="showcase-category">Shorts y Jeans</a>
                
                      <div class="price-box">
                        <p class="price">$29,990</p>
                        <del>$39,990</del>
                      </div>               
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="product-showcase">
              <h2 id="trends" class="title">Tendencias</h2>
              <div class="showcase-wrapper  has-scrollbar">
                <div class="showcase-container">
            
                  <div class="showcase">
  
                    <a href="#" class="showcase-img-box">
                      <img src="assets/products/sports-1.jpg" alt="running & trekking shoes - white" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Zapatillas de running y trekking - Blanco</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Deportivo</a>
            
                      <div class="price-box">
                        <p class="price">$89,990</p>
                        <del>$99,990</del>
                      </div>
                    </div>
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="assets/products/sports-2.jpg" alt="trekking & running shoes - black" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Zapatillas de running y trekking - Negro</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Deportivo</a>
            
                      <div class="price-box">
                        <p class="price">$89,990</p>
                        <del>$99,990</del>
                      </div>
                    </div>
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="assets/products/party-wear-1.jpg" alt="womens party wear shoes" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Zapatos de fiesta para mujer</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Ropa de fiesta</a>
            
                      <div class="price-box">
                        <p class="price">$59,990</p>
                        <del>$69,990</del>
                      </div>
                    </div>
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="assets/products/sports-3.jpg" alt="sports claw women's shoes" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Zapatos de mujer con garra deportiva</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Deportes</a>
            
                      <div class="price-box">
                        <p class="price">$69,990</p>
                        <del>$79,990</del>
                      </div>
                    </div>
                  </div>
                </div>
            
                <div class="showcase-container">
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="assets/products/sports-6.jpg" alt="air tekking shoes - white" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Zapatillas Air Trekking - blanco</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Deportes</a>
            
                      <div class="price-box">
                        <p class="price">$69,9900</p>
                        <del>$59,990</del>
                      </div>
                    </div>
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="assets/products/shoe-3.jpg" alt="Boot With Suede Detail" class="showcase-img" width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Botín Detalle Ante</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Botas</a>
            
                      <div class="price-box">
                        <p class="price">$59,990</p>
                        <del>$69,990</del>
                      </div>
                    </div>
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="assets/products/shoe-1.jpg" alt="men's leather formal wear shoes" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Zapatos de vestir de cuero para hombres</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Formal</a>
            
                      <div class="price-box">
                        <p class="price">$69,990</p>
                        <del>$79,990</del>
                      </div>       
                    </div>
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="assets/products/shoe-2.jpg" alt="casual men's brown shoes" class="showcase-img" width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Zapatos casuales de hombre marrones</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Casual</a>
            
                      <div class="price-box">
                        <p class="price">$49,990</p>
                        <del>$59,990</del>
                      </div>
                    </div>
                  </div>
                </div>          
              </div>
            </div>

            <div class="product-showcase">       
              <h2 id="most-value" class="title">Lo más valorado</h2>  
              <div class="showcase-wrapper  has-scrollbar">      
                <div class="showcase-container">
                  <div class="showcase">
                    <a href="#" class="showcase-img-box">
                      <img src="assets/products/watch-3.jpg" alt="pocket watch leather pouch" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Funda de cuero para reloj de bolsillo</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Relojes</a>
            
                      <div class="price-box">
                        <p class="price">$59,990</p>
                        <del>$49,990</del>
                      </div>
                    </div>
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="assets/products/jewellery-3.jpg" alt="silver deer heart necklace" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Collar Corazón Ciervo Plata</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Joyería</a>
            
                      <div class="price-box">
                        <p class="price">$69,990</p>
                        <del>$79,990</del>
                      </div>           
                    </div>
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="assets/products/perfume.jpg" alt="titan 100 ml womens perfume" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Perfume Mujer Titán 100 Ml</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Perfume</a>
            
                      <div class="price-box">
                        <p class="price">$49,990</p>
                        <del>$59,990</del>
                      </div>         
                    </div>
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="assets/products/belt.jpg" alt="men's leather reversible belt" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Cinturón de piel reversible para hombre</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Cinturones</a>
            
                      <div class="price-box">
                        <p class="price">$29,990</p>
                        <del>$39,990</del>
                      </div>        
                    </div>
                  </div>
                </div>
            
                <div class="showcase-container">
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="assets/products/jewellery-2.jpg" alt="platinum zircon classic ring" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Anillo clásico de platino con circón</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Joyería</a>
            
                      <div class="price-box">
                        <p class="price">$69,990</p>
                        <del>$59,990</del>
                      </div>  
                    </div>
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="assets/products/watch-1.jpg" alt="smart watche vital plus" class="showcase-img" width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Reloj inteligente Vital Plus</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Relojes</a>
            
                      <div class="price-box">
                        <p class="price">$119,990</p>
                        <del>$129,990</del>
                      </div>
                    </div>
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="assets/products/shampoo.jpg" alt="shampoo conditioner packs" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Paquetes de acondicionador de champú</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Cósmeticos</a>
            
                      <div class="price-box">
                        <p class="price">$89,990</p>
                        <del>$99,990</del>
                      </div>    
                    </div>
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="assets/products/jewellery-1.jpg" alt="rose gold peacock earrings" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Pendientes de pavo real de oro rosa</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Joyería</a>
            
                      <div class="price-box">
                        <p class="price">$89,990</p>
                        <del>$79,990</del>
                      </div>         
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="product-featured">
            <h2 id="oferts" class="title">Oferta del día</h2>
            <div class="showcase-wrapper has-scrollbar">
              <div class="showcase-container">
                <div class="showcase">
                  
                  <div class="showcase-banner">
                    <img src="assets/products/shampoo.jpg" alt="shampoo, conditioner & facewash packs" class="showcase-img">
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
                      <h3 class="showcase-title">Paquete de champú, acondicionador y lavado de cara</h3>
                    </a>

                    <p class="showcase-desc">
                      Lorem ipsum dolor sit amet consectetur Lorem ipsum
                      dolor dolor sit amet consectetur Lorem ipsum dolor
                    </p>

                    <div class="price-box">
                      <p class="price">$119,990</p>

                      <del>$129,990</del>
                    </div>

                    <button class="add-cart-btn">Agregar al carrito</button>

                    <div class="showcase-status">
                      <div class="wrapper">
                        <p>
                          Vendidos: <b>20</b>
                        </p>

                        <p>
                          Disponibles: <b>40</b>
                        </p>
                      </div>

                      <div class="showcase-status-bar"></div>
                    </div>

                    <div class="countdown-box">

                      <p class="countdown-desc">
                        Rápido! la oferta termina en:
                      </p>

                      <div class="countdown">
                        <div class="countdown-content">
                          <p class="display-number">7</p>
                          <p class="display-text">Días</p>
                        </div>

                        <div class="countdown-content">
                          <p class="display-number">22</p>
                          <p class="display-text">Horas</p>
                        </div>

                        <div class="countdown-content">
                          <p class="display-number">30</p>
                          <p class="display-text">Minutos</p>
                        </div>

                        <div class="countdown-content">
                          <p class="display-number">00</p>
                          <p class="display-text">Segundos</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="showcase-container">  
                <div class="showcase">
              
                  <div class="showcase-banner">
                    <img src="assets/products/jewellery-1.jpg" alt="Rose Gold diamonds Earring" class="showcase-img">
                  </div>
              
                  <div class="showcase-content">
              
                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                    </div>
              
                    <h3 class="showcase-title">
                      <a href="#" class="showcase-title">Pendiente de diamantes de oro rosa</a>
                    </h3>
              
                    <p class="showcase-desc">
                      Lorem ipsum dolor sit amet consectetur Lorem ipsum
                      dolor dolor sit amet consectetur Lorem ipsum dolor
                    </p>
              
                    <div class="price-box">
                      <p class="price">$129,990</p>
                      <del>$119,990</del>
                    </div>
              
                    <button class="add-cart-btn">Agregar al carrito</button>
              
                    <div class="showcase-status">
                      <div class="wrapper">
                        <p> Vendidos: <b>15</b> </p>
              
                        <p> Disponibles: <b>40</b> </p>
                      </div>
              
                      <div class="showcase-status-bar"></div>
                    </div>
              
                    <p class="countdown-desc">
                      Rápido! la oferta termina en:
                    </p>

                    <div class="countdown">
                      <div class="countdown-content">
                        <p class="display-number">5</p>
                        <p class="display-text">Días</p>
                      </div>

                      <div class="countdown-content">
                        <p class="display-number">14</p>
                        <p class="display-text">Horas</p>
                      </div>

                      <div class="countdown-content">
                        <p class="display-number">20</p>
                        <p class="display-text">Minutos</p>
                      </div>

                      <div class="countdown-content">
                        <p class="display-number">00</p>
                        <p class="display-text">Segundos</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="product-main">
            <h2 id="new-products" class="title">Nuevos productos</h2>
            <div class="product-grid">
              <div class="showcase">

                <div class="showcase-banner">
                  <img src="assets/products/jacket-3.jpg" alt="Mens Winter Leathers Jackets" width="300" class="product-img default">
                  <img src="assets/products/jacket-4.jpg" alt="Mens Winter Leathers Jackets" width="300" class="product-img hover">

                  <p class="showcase-badge">15%</p>

                  <div class="showcase-actions">

                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>

                <div class="showcase-content">
                  <a href="#" class="showcase-category">Chaqueta</a>
                  <a href="#">
                    <h3 class="showcase-title">Chaqueta de cuero de invierno para hombre</h3>
                  </a>

                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>

                  <div class="price-box">
                    <p class="price">$79,990</p>
                    <del>$89,990</del>
                  </div>
                </div>
              </div>

              <div class="showcase">        
                <div class="showcase-banner">
                  <img src="assets/products/shirt-1.jpg" alt="Pure Garment Dyed Cotton Shirt" class="product-img default"
                    width="300">
                  <img src="assets/products/shirt-2.jpg" alt="Pure Garment Dyed Cotton Shirt" class="product-img hover"
                    width="300">
              
                  <p class="showcase-badge angle black">En venta</p>
              
                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>
              
                <div class="showcase-content">
                  <a href="#" class="showcase-category">Camisas</a>
                  <h3>
                    <a href="#" class="showcase-title">Camisa de puro algodón teñido en prenda</a>
                  </h3>
              
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
              
                  <div class="price-box">
                    <p class="price">$59,990</p>
                    <del>$69,990</del>
                  </div>  
                </div>
              </div>

              <div class="showcase">
              
                <div class="showcase-banner">
                  <img src="assets/products/jacket-5.jpg" alt="MEN Yarn Fleece Full-Zip Jacket" class="product-img default"
                    width="300">
                  <img src="assets/products/jacket-6.jpg" alt="MEN Yarn Fleece Full-Zip Jacket" class="product-img hover"
                    width="300">
              
                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>
              
                <div class="showcase-content">
                  <a href="#" class="showcase-category">Chaquetas</a>
                  <h3>
                    <a href="#" class="showcase-title">Chaqueta polar con cremallera completa para hombre</a>
                  </h3>
              
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
              
                  <div class="price-box">
                    <p class="price">$69,990</p>
                    <del>$79,990</del>
                  </div>        
                </div>
              </div>

              <div class="showcase">
          
                <div class="showcase-banner">
                  <img src="assets/products/clothes-3.jpg" alt="Black Floral Wrap Midi Skirt" class="product-img default"
                    width="300">
                  <img src="assets/products/clothes-4.jpg" alt="Black Floral Wrap Midi Skirt" class="product-img hover"
                    width="300">
              
                  <p class="showcase-badge angle pink">Nuevo</p>
              
                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>
              
                <div class="showcase-content">
                  <a href="#" class="showcase-category">Faldas</a>            
                  <h3>
                    <a href="#" class="showcase-title">Falda midi cruzada floral negra</a>
                  </h3>
              
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>
              
                  <div class="price-box">
                    <p class="price">$69,990</p>
                    <del>$79,990</del>
                  </div>         
                </div>
              </div>

              <div class="showcase">
              
                <div class="showcase-banner">
                  <img src="assets/products/shoe-2.jpg" alt="Casual Men's Brown shoes" class="product-img default"
                    width="300">
                  <img src="assets/products/shoe-2_1.jpg" alt="Casual Men's Brown shoes" class="product-img hover"
                    width="300">
              
                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>
              
                <div class="showcase-content">
                  <a href="#" class="showcase-category">Casual</a>      
                  <h3>
                    <a href="#" class="showcase-title">Zapatos casuales de hombre marrones</a>
                  </h3>
              
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>
              
                  <div class="price-box">
                    <p class="price">$59,990</p>
                    <del>$69,990</del>
                  </div>           
                </div>
              </div>

              <div class="showcase">
              
                <div class="showcase-banner">
                  <img src="assets/products/watch-3.jpg" alt="Pocket Watch Leather Pouch" class="product-img default"
                    width="300">
                  <img src="assets/products/watch-4.jpg" alt="Pocket Watch Leather Pouch" class="product-img hover"
                    width="300">
              
                  <p class="showcase-badge angle black">En venta</p>
              
                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>
              
                <div class="showcase-content">
                  <a href="#" class="showcase-category">Relojes</a>     
                  <h3>
                    <a href="#" class="showcase-title">Funda de cuero para reloj de bolsillo</a>
                  </h3>
              
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
              
                  <div class="price-box">
                    <p class="price">$39,990</p>
                    <del>$49,990</del>
                  </div>            
                </div>
              </div>

              <div class="showcase">
              
                <div class="showcase-banner">
                  <img src="assets/products/watch-1.jpg" alt="Smart watche Vital Plus" class="product-img default"
                    width="300">
                  <img src="assets/products/watch-2.jpg" alt="Smart watche Vital Plus" class="product-img hover" width="300">
              
                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>
              
                <div class="showcase-content">
                  <a href="#" class="showcase-category">Relojes</a>      
                  <h3>
                    <a href="#" class="showcase-title">Reloj inteligente Vital Plus</a>
                  </h3>
              
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
              
                  <div class="price-box">
                    <p class="price">$119,990</p>
                    <del>$129,990</del>
                  </div>           
                </div>
              </div>

              <div class="showcase">
              
                <div class="showcase-banner">
                  <img src="assets/products/party-wear-1.jpg" alt="Womens Party Wear Shoes" class="product-img default"
                    width="300">
                  <img src="assets/products/party-wear-2.jpg" alt="Womens Party Wear Shoes" class="product-img hover"
                    width="300">
              
                  <p class="showcase-badge angle black">En venta</p>
              
                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>
              
                <div class="showcase-content">
                  <a href="#" class="showcase-category">Ropa de fiesta</a>           
                  <h3>
                    <a href="#" class="showcase-title">Zapatos de fiesta para mujer</a>
                  </h3>
              
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
              
                  <div class="price-box">
                    <p class="price">$69,990</p>
                    <del>$79,990</del>
                  </div>
                </div>
              </div>

              <div class="showcase">
              
                <div class="showcase-banner">
                  <img src="assets/products/jacket-1.jpg" alt="Mens Winter Leathers Jackets" class="product-img default"
                    width="300">
                  <img src="assets/products/jacket-2.jpg" alt="Mens Winter Leathers Jackets" class="product-img hover"
                    width="300">
              
                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>
              
                <div class="showcase-content">
                  <a href="#" class="showcase-category">Chaquetas</a>           
                  <h3>
                    <a href="#" class="showcase-title">Chaquetas de cuero de invierno para hombre</a>
                  </h3>
              
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
              
                  <div class="price-box">
                    <p class="price">$79,990</p>
                    <del>$89,990</del>
                  </div>  
                </div>
              </div>

              <div class="showcase">
              
                <div class="showcase-banner">
                  <img src="assets/products/sports-2.jpg" alt="Trekking & Running Shoes - black" class="product-img default"
                    width="300">
                  <img src="assets/products/sports-4.jpg" alt="Trekking & Running Shoes - black" class="product-img hover"
                    width="300">
              
                  <p class="showcase-badge angle black">En venta</p>
              
                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>
              
                <div class="showcase-content">
                  <a href="#" class="showcase-category">Deportes</a>           
                  <h3>
                    <a href="#" class="showcase-title">Zapatillas de trekking y running - Negro</a>
                  </h3>
              
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
              
                  <div class="price-box">
                    <p class="price">$79,990</p>
                    <del>$89,990</del>
                  </div>   
                </div>
              </div>

              <div class="showcase">
              
                <div class="showcase-banner">
                  <img src="assets/products/shoe-1.jpg" alt="Men's Leather Formal Wear shoes" class="product-img default"
                    width="300">
                  <img src="assets/products/shoe-1_1.jpg" alt="Men's Leather Formal Wear shoes" class="product-img hover"
                    width="300">
              
                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>
              
                <div class="showcase-content">
                  <a href="#" class="showcase-category">formal</a>       
                  <h3>
                    <a href="#" class="showcase-title">Zapatos de vestir de cuero para hombres</a>
                  </h3>
              
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
              
                  <div class="price-box">
                    <p class="price">$69,990</p>
                    <del>$79,990</del>
                  </div>
                </div>
              </div>

              <div class="showcase">
              
                <div class="showcase-banner">
                  <img src="assets/products/shorts-1.jpg" alt="Better Basics French Terry Sweatshorts"
                    class="product-img default" width="300">
                  <img src="assets/products/shorts-2.jpg" alt="Better Basics French Terry Sweatshorts"
                    class="product-img hover" width="300">
              
                  <p class="showcase-badge angle black">En venta</p>
              
                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>
              
                <div class="showcase-content">
                  <a href="#" class="showcase-category">Shorts</a>          
                  <h3>
                    <a href="#" class="showcase-title">Shorts de chándal de rizo francés Better Basics</a>
                  </h3>
              
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
              
                  <div class="price-box">
                    <p class="price">$59,990</p>
                    <del>$49,990</del>
                  </div>     
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    <div>
      <div class="container">
        <div class="testimonials-box">
          <div class="testimonial">
            <h2 class="title">Testimonios</h2>
            <div class="testimonial-card">
              <img src="assets/testimonial-1.jpg" alt="alan doe" class="testimonial-banner" width="80" height="80">
              <p class="testimonial-name">Mary</p>
              <p class="testimonial-title">Cliente</p>
              <img src="assets/icons/quotes.svg" alt="quotation" class="quotation-img" width="26">
              <p class="testimonial-desc">
                Lorem ipsum dolor sit amet consectetur Lorem ipsum
                dolor dolor sit amet.
              </p>
            </div>
          </div>

          <div class="cta-container">
            <img src="assets/cta-banner.jpg" alt="summer collection" class="cta-banner">
            <a href="#" class="cta-content">
              <p class="discount">25% De descuento</p>
              <h2 class="cta-title">Colección de verano</h2>
              <p class="cta-text">Desde $19,990</p>
              <button class="cta-btn">Comprar</button>
            </a>
          </div>

          <div class="service">
            <h2 class="title">Nuestros servicios</h2>
            <div class="service-container">
              <a href="#" class="service-item">
                <div class="service-icon">
                  <ion-icon name="boat-outline"></ion-icon>
                </div>

                <div class="service-content">
                  <h3 class="service-title">Envíos a todo el mundo</h3>
                  <p class="service-desc">Para pedidos superiores a $99,990</p>
                </div>
              </a>

              <a href="#" class="service-item">
                <div class="service-icon">
                  <ion-icon name="rocket-outline"></ion-icon>
                </div>
              
                <div class="service-content"> 
                  <h3 class="service-title">Entrega al día siguiente</h3>
                  <p class="service-desc">Disponible solo para Colombia</p>             
                </div>
              </a>

              <a href="#" class="service-item">    
                <div class="service-icon">
                  <ion-icon name="call-outline"></ion-icon>
                </div>
              
                <div class="service-content">
                  <h3 class="service-title">El mejor soporte en línea</h3>
                  <p class="service-desc">Horario: 8 AM - 10 PM</p>  
                </div>           
              </a>

              <a href="#" class="service-item">    
                <div class="service-icon">
                  <ion-icon name="arrow-undo-outline"></ion-icon>
                </div>
              
                <div class="service-content">
                  <h3 class="service-title">Política de devoluciones</h3>
                  <p class="service-desc">Devolución fácil y gratuita</p>            
                </div>
              </a>

              <a href="#" class="service-item">       
                <div class="service-icon">
                  <ion-icon name="ticket-outline"></ion-icon>
                </div>
              
                <div class="service-content">
                  <h3 class="service-title">30% de devolución de dinero</h3>
                  <p class="service-desc">Para pedidos superiores a $999,990</p>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="blog" class="blog">
      <div class="container">
        <div class="blog-container has-scrollbar">
          <div class="blog-card">
            <a href="#">
              <img src="assets/blog-1.jpg" alt="Clothes Retail 2023 Clothes Guide" width="300" class="blog-banner">
            </a>
            <div class="blog-content">
              <a href="#" class="blog-category">Ropa</a>
              <a href="blogs/clothes-retail-2023-clothes-guide.php">
                <h3 class="blog-title">Ropa Retail 2023: Guía de ropa.</h3>
              </a>
              <p class="blog-meta">
                Por <cite>Mr Robert</cite> / <time datetime="2022-04-06">Enero 07, 2023</time>
              </p>
            </div>
          </div>

          <div class="blog-card">
            <a href="#">
              <img src="assets/blog-2.jpg" alt="Curbside fashion Trends: How to Win the Pickup Battle."
                class="blog-banner" width="300">
            </a>

            <div class="blog-content">
              <a href="#" class="blog-category">Moda</a>
              <h3>
                <a href="#" class="blog-title">Nuevas tendencias de la moda: Cómo ganar la batalla de la moda.</a>
              </h3>
              <p class="blog-meta">
                Por <cite>Mr Robin</cite> / <time datetime="2022-01-18">Marzo 18, 2023</time>
              </p>
            </div>
          </div>

          <div class="blog-card">
            <a href="#">
              <img src="assets/blog-3.jpg" alt="EBT vendors: Claim Your Share of SNAP Online Revenue."
                class="blog-banner" width="300">
            </a>
          
            <div class="blog-content">
              <a href="#" class="blog-category">Proveedores</a>
          
              <h3>
                <a href="#" class="blog-title">Proveedores: Reclama tu parte de los ingresos en línea.</a>
              </h3>
          
              <p class="blog-meta">
                Por <cite>Ms Elsa</cite> / <time datetime="2022-02-10">Junio 10, 2023</time>
              </p>
            </div>
          </div>

          <div class="blog-card">
            <a href="#">
              <img src="assets/blog-4.jpg" alt="Curbside fashion Trends: How to Win the Pickup Battle."
                class="blog-banner" width="300">
            </a>
          
            <div class="blog-content">
              <a href="#" class="blog-category">Técnologia</a>
              <h3>
                <a href="#" class="blog-title">Tendencias en la técnologia: Descubre las últimas tendencias en el mundo de la técnologia.</a>
              </h3>
              <p class="blog-meta">
                Por <cite>Mr Joshua</cite> / <time datetime="2022-03-15">Agosto 15, 2023</time>
              </p>
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