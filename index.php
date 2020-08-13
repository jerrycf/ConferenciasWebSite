<?php include_once 'includes/templates/header.php' ?> 
  <section class="seccion contenedor">
    <h2>La mejor conferencia de diseño web</h2>

    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum pharetra sed est sed vestibulum. Fusce condimentum
    lacus eget ligula scelerisque viverra. Quisque ornare turpis tincidunt interdum aliquam. Etiam congue lacus ut leo
    vulputate, non iaculis lorem posuere. Donec vel enim non ante rhoncus posuere non vel mi.</p>

  </section>

  <section class="programa">
    <div class="contenedor-video">
      <video autoplay loop poster="img/bg-talleres.jpg">
        <source src="video/video.mp4" type="video/mp4">
        <source src="video/video.webm" type="video/webm">
        <source src="video/video.ogv" type="video/ogv">
      </video>
    </div><!--contenedor-video-->

    <div class="contenido-programa">
      <div class="contenedor">
        <div class="programa-evento">
          <h2>Programa del evento</h2>
          <?php 
            try {
              require_once('includes/funciones/bd_conexion.php');
              $sql = " SELECT * FROM categoria_evento ";
              $resultado = $conn->query($sql);
            } catch (Exception $e) {
              $error = $e->getMessage();
            }
            
          ?>
          <nav class="menu-programa">
          <?php while($cat = $resultado->fetch_array(MYSQLI_ASSOC)) {?>
            <a href="#<?php echo $cat['cat_evento']; ?>">
              <i class="fa <?php echo $cat['icono']; ?>"></i><?php echo $cat['cat_evento']; ?>
            </a>
          <?php } ?>
          </nav>

          <?php 
            try {
                require_once('includes/funciones/bd_conexion.php');
                $sql = " SELECT evento_id, nombre_evento, fecha_evento, hora_evento, 
                                cat_evento, icono, nombre_invitado, apellido_invitado ";
                $sql .= "FROM eventos ";
                $sql .= "INNER JOIN categoria_evento ";
                $sql .= "ON eventos.id_cat_evento = categoria_evento.id_categoria ";
                $sql .= "INNER JOIN invitados ";
                $sql .= "ON eventos.id_inv = invitados.invitado_id ";
                $sql .= "AND eventos.id_cat_evento = 1 ";
                $sql .= "ORDER BY evento_id LIMIT 2;";
                $sql .= " SELECT evento_id, nombre_evento, fecha_evento, hora_evento, 
                                cat_evento, icono, nombre_invitado, apellido_invitado ";
                $sql .= "FROM eventos ";
                $sql .= "INNER JOIN categoria_evento ";
                $sql .= "ON eventos.id_cat_evento = categoria_evento.id_categoria ";
                $sql .= "INNER JOIN invitados ";
                $sql .= "ON eventos.id_inv = invitados.invitado_id ";
                $sql .= "AND eventos.id_cat_evento = 2 ";
                $sql .= "ORDER BY evento_id LIMIT 2;";
                $sql .= " SELECT evento_id, nombre_evento, fecha_evento, hora_evento, 
                                cat_evento, icono, nombre_invitado, apellido_invitado ";
                $sql .= "FROM eventos ";
                $sql .= "INNER JOIN categoria_evento ";
                $sql .= "ON eventos.id_cat_evento = categoria_evento.id_categoria ";
                $sql .= "INNER JOIN invitados ";
                $sql .= "ON eventos.id_inv = invitados.invitado_id ";
                $sql .= "AND eventos.id_cat_evento = 3 ";
                $sql .= "ORDER BY evento_id LIMIT 2;";
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        ?>
          <?php 
            $conn -> multi_query($sql);
            do{
              $resultado = $conn-> store_result();
              $row = $resultado->fetch_all(MYSQLI_ASSOC);?>

              <?php $i = 0;
              foreach($row as $evento):
              if ($i % 2 == 0){ ?>
                <div id="<?php echo strtolower($evento['cat_evento']); ?>" class="info-curso ocultar clearfix">
              <?php } ?>

                  <div class="detalle-evento">
                    <h3><?php echo $evento['nombre_evento']; ?></h3>
                    <p><i class="fa fa-clock-o"></i> <?php echo $evento['hora_evento']; ?></p>
                    <p><i class="fa fa-calendar"></i> <?php echo $evento['fecha_evento']; ?> </p>
                    <p><i class="fa fa-user"></i> <?php echo $evento['nombre_invitado'] . " " . $evento['apellido_invitado']; ?> </p>
                  </div>
                  
              <?php  if ($i % 2 == 1){ ?>
                <a href="calendario.php" class="button float-right"> Ver todos </a> 
                </div> <!-- talleres -->
              <?php }
                  $i++;?>
              
              <?php endforeach;
                    $resultado -> free();?>
            <?php }while($conn->more_results() && $conn->next_result());
          ?>

          


        </div> <!-- programa-evento -->

      </div> <!-- contenedor -->

    </div><!-- contenido-programa -->
  </section>
    
  <?php include_once 'includes/templates/invitados.php' ?>
  
  <div class="contador paralax">
    <div class="contenedor">
      <ul class="resumen-evento clearfix">
        <li><p class="numero"></p> Invitados</li>
        <li><p class="numero"></p> Talleres</li>
        <li><p class="numero"></p> Días</li>
        <li><p class="numero"></p> Conferencias</li>
      </ul>
    </div>
  </div>

  <section class="precios seccion">
    <h2>Precios</h2>
    <div class="contenedor">
      <ul class="lista-precios clearfix">
        <li>
          <div class="tabla-precio">
            <h3>Pase por día</h3>
            <p class="numero">$30</p>
            <ul>
              <li>Bocadillos Gratis</li>
              <li>Todas las conferencisa</li>
              <li>Todos los talleres</li>
            </ul>
            <a href="#" class="button hollow">Comprar</a>
          </div>
        </li>

        <li>
          <div class="tabla-precio">
            <h3>Todos los días</h3>
            <p class="numero">$50</p>
            <ul>
              <li>Bocadillos Gratis</li>
              <li>Todas las conferencisa</li>
              <li>Todos los talleres</li>
            </ul>
            <a href="#" class="button">Comprar</a>
          </div>
        </li>

        <li>
          <div class="tabla-precio">
            <h3>Pase por 2 días</h3>
            <p class="numero">$45</p>
            <ul>
              <li>Bocadillos Gratis</li>
              <li>Todas las conferencisa</li>
              <li>Todos los talleres</li>
            </ul>
            <a href="#" class="button hollow">Comprar</a>
          </div>
        </li>
      </ul>
    </div><!-- Contenedor -->
  </section><!-- seccion de p recios -->

  <div id="mapa" class="mapa">
    
  </div>

  <section class="seccion">
    <h2>Testimoniales</h2>
    <div class="testimoniales contenedor clearfix">
      <div class="testimonial">
        <blockquote>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum pharetra sed est sed vestibulum. Fusce condimentum.</p>
          <footer class="footer-testimonial clearfix">
            <img src="img/testimonial.jpg" alt="imagen testimonial">
            <cite>Gerardo Carrillo Fernández <span>Diseñador Web</span></cite>
          </footer>
        </blockquote>
      </div> <!-- Testimonial -->
    
      <div class="testimonial">
        <blockquote>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum pharetra sed est sed vestibulum. Fusce condimentum.</p>
          <footer class="footer-testimonial clearfix">
            <img src="img/testimonial.jpg" alt="imagen testimonial">
            <cite>Gerardo Carrillo Fernández <span>Diseñador Web</span></cite>
          </footer>
        </blockquote>
      </div> <!-- Testimonial -->
    
      <div class="testimonial">
        <blockquote>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum pharetra sed est sed vestibulum. Fusce condimentum.</p>
          <footer class="footer-testimonial clearfix">
            <img src="img/testimonial.jpg" alt="imagen testimonial">
            <cite>Gerardo Carrillo Fernández <span>Diseñador Web</span></cite>
          </footer>
        </blockquote>
      </div> <!-- Testimonial -->
    </div>
  </section>

  <div class="newsletter paralax">
    <div class="contenido contenedor">
      <p>Registrate al newsletter</p>
      <h3>gdlWebCamp</h3>
      <a href="#mc_embed_signup" class="boton_newsletter button transparent">Registro</a>
    </div>
  </div><!-- Newsletter -->
  
  <section class="seccion">
    <h2>Faltan</h2>
    <div class="cuenta-regresiva contenedor">
      <ul class="clearfix">
        <li> <p id="dias" class="numero"></p> Días</li>
        <li> <p id="horas" class="numero"></p> Horas</li>
        <li> <p id="minutos" class="numero"></p> Minutos</li>
        <li> <p id="segundos" class="numero"></p> Segundos</li>
      </ul>
    </div>
  </section>
  
  <?php include_once 'includes/templates/footer.php' ?>