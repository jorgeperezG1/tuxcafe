<!DOCTYPE html>
<html style="font-size: 16px;" lang="es"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Bakery&nbsp;&amp;amp; Cafe">
    <meta name="description" content="">
    <title>Casa</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Casa.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.20.1, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/default-logo.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Casa">
    <meta property="og:type" content="website">
  </head>
  <body data-home-page="Casa.html" data-home-page-title="Casa" class="u-body u-xl-mode" data-lang="es"><header class="u-clearfix u-header u-header" id="sec-54da"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <a href="https://nicepage.com" class="u-image u-logo u-image-1">
          <img src="images/logo.jpg" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Casa.php" style="padding: 10px 20px;">Casa</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Acerca-de.php" style="padding: 10px 20px;">Acerca de</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Contacto.php" style="padding: 10px 20px;">Contacto</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Galeria.php" style="padding: 10px 20px;">Galeria</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Productos.php" style="padding: 10px 20px;">Productos</a>
</li> <li>
                    <?php             
                        if($usuarioSesion==''){
                           
                            echo '<a href="Usuarios/login.php">Iniciar sesión</a>';
                        }
                        else{
                            echo '<label>'.$usuarioSesion.'</label>';
                            echo '<a href="Usuarios/logout.php">Cerrar sesión</a>';
                        }                  
                    ?>
                    
                 </li></ul>
          </div>
          <div class="u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Casa.php">Casa</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Acerca-de.php">Acerca de</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contacto.php">Contacto</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Galeria.php">Galeria</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Productos.php">Productos</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
      <article>
    <section class="vh-100" style="background-color: #808080;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
           
            <div class="col-md-12 col-lg-12 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">
                <form action="InsertarUsuario.php" method="Post">
                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0">REGISTRAR</span>
                  </div>
                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Datos del usuarios</h5>
                  <div class="form-outline mb-4">
                    <input type="text" name="nombre" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example17">Nombre</label>
                  </div>
                  <div class="form-outline mb-4">
                    <input type="text" name="apellidoPaterno" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example17">Apellido Paterno</label>
                  </div>
                  <div class="form-outline mb-4">
                    <input type="text" name="apellidoMaterno" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example17">Apellido Materno</label>
                  </div>
                  <div class="form-outline mb-4">
                    <input type="email" name="correo" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example17">Correo</label>
                  </div>
                  <div class="form-outline mb-4">
                    <input type="password" name="password" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example27">Password</label>
                  </div>
                  <div class="pt-1 mb-4">
                    <input class="btn btn-dark btn-lg btn-block"  type="submit" value="Guardar">
                  </div>
                  
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    </article>  
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-b932"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Texto de muestra. Haz click para seleccionar el elemento de Texto.</p>
      </div></footer>
    <section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="https://nicepage.com/website-templates" target="_blank">
        <span>Website Templates</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="" target="_blank">
        <span>Website Builder Software</span>
      </a>. 
    </section>
  
</body></html>