<!DOCTYPE html>
<html lang="es">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <!-- Enlace al archivo de estilos CSS -->
        <link rel="stylesheet" href="styles.css" />
        <!-- Enlace al conjunto de iconos Font Awesome -->
        <script
            src="https://kit.fontawesome.com/c6c5f12735.js"
            crossorigin="anonymous"
        ></script>
        <script src="https://kit.fontawesome.com/3eae224327.js" crossorigin="anonymous"></script>
        <title>Inicio</title>
    </head>
    <body>
        <!-- Encabezado de la página que incluye el nombre del sitio web, opciones de navegación y un botón de carrito de compras -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
              <a class="navbar-brand" href="index.html">
                  <img src="img/TechZone.png" alt="Logo de mi empresa" height="70">
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                          <a class="nav-link actual" href="index.html">Inicio</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="productos.html">Productos</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="chat.html">Asistente virtual</a>
                      </li>
                  </ul>
                  <button class="btn btn-outline-secondary cart-btn" type="button" id="cartBtn">
                      <i class="fas fa-shopping-cart"></i> Carrito
                      <span class="badge text-bg-secondary cantidad-carrito">0</span>
                  </button>
              </div>
          </div>
      </nav>
    <!-- Contenedor para el carrito de compras que incluye una tabla para mostrar los productos seleccionados, sus precios y una opción para eliminarlos -->
    <div class="carrito">
      <table>
          <thead>
              <tr>
                  <th>Producto</th>
                  <th>Precio</th>
              </tr>
          </thead>
          <tbody></tbody>
      </table>
      <!-- Elemento para mostrar el total de la compra -->
      <div class="total-carrito"></div>
  </div>

        <!-- Inicio Cuerpo de la web-->
        <div class="container">
            <div class="row">
              <div class="col description">
                <h2>Bienvenido a TechZone</h2>
                <p>Tu tienda de referencia para los últimos y mejores productos y libros de tecnología. </p> 
                <p>Nuestra tienda en línea cuenta con una amplia colección de aparatos de última generación, como smartphones, portátiles, tabletas, consolas de videojuegos y mucho más.</p>
                <p>También ofrecemos una amplia variedad de libros sobre diversos temas, como tecnología, negocios y autoayuda.</p>
              </div>
              <div class="col placeholder">
                <img src="img/inicial.png" alt="Placeholder de imagen">
              </div>
            </div>
          </div>
        <div class="description">
            
          </div>

<!-- FOOTER -->
          <footer>
            <div class="footer-container">
              <div class="footer-contacto">
                <h3>Contacto</h3>
                <ul class="contactos">
                  <li><a href="mail_to:info@techzone.com">Correo: info@techzone.com</a></li>
                  <li><a href="tel:+1234567890">Tel: +34 957 567 890</a></li>
                  <li><a href="#">Dirección</a></li>
                </ul>
              </div>
              <div class="footer-social">
                <h3>Síguenos</h3>
                <ul>
                  <li><a href="https://www.instagram.com/techzone/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                  <li><a href="https://twitter.com/techzone" target="_blank"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="https://facebook.com/techzone/" target="_blank"><i class="fab fa-facebook"></i></li>
                  <!-- Agrega aquí los enlaces a otras redes sociales -->
                </ul>
              </div>
            </div>
          </footer> 
          
          
          <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
        <!-- Enlace al archivo de JavaScript -->
        <script src="app.js"></script>
    </body>
</html>
