<?php
/**
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package EfectoVirtual
 */

get_header(); ?>


  <?php get_template_part('template-parts/header'); ?>
  <?php get_template_part('template-parts/slider'); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main">

      <div class="row designweb">
        <div class="columns large-5">
          <h1>Diseño de<br><strong>páginas Web</strong></h1>
          <ul>
            <li>Página Web diseñada a medida.</li>
            <li>Diseño Web 100% exclusivo.</li>
            <li>Diseño de páginas Web vendedoras.</li>
            <li>Desarrollo en nuevas tecnologías.</li>
          </ul>
          <div class="botonempezar">Empieza Ahora</div>
        </div>
        <div class="columns large-7">
          <img src="<?php echo get_template_directory_uri(); ?>/img/computerweb.jpg" alt="Páginas Web">
        </div>
      </div>


      <div class="expanded row collapse somosEVhome">

        <div class="columns large-6 textoSomosEV">
          <div class="row">
            <div class="columns medium-12">
              <h2>Somos Efecto virtual</h2>
              <h3>Diseño y desarrollo de páginas Web en medellín</h3>
              <p>En EfectoVirtual trabajamos en el desarrollo soluciones Web, permitiendo a nuestros clientes rentabilizar su inversión con el aumento sus ventas. con más de 14 años de experiencia ayudando a muchas start up y empresas a diseñar exitosas estrategias digitales. <br><br>Somos expertos en tecnología Web y móvil, vivimos actualizándonos constantemente el cual le ayudara a obtener grandes resultados en su proyecto. Nos diferenciamos por ofrecerles un variado portafolio servicios como son: Diseño Web, Desarrollo de aplicaciones Web, APP Aplicaciones móviles, SEO posicionamiento en buscadores, SEM/SMM marketing online, visitas virtuales 360º, alojamiento Web, entre otros.</p>
              <div class="row botonesEV">
                  <div class="columns medium-3"><div class="botonesIcoEV"><i class="fa fa-user" aria-hidden="true"></i>Quienes Somos</div></div>
                  <div class="columns medium-3"><div class="botonesIcoEV"><i class="fa fa-globe" aria-hidden="true"></i>Donde Estamos</div></div>
                  <div class="columns medium-3"><div class="botonesIcoEV"><i class="fa fa-paper-plane" aria-hidden="true"></i>Cotizaciones</div></div>
                  <div class="columns medium-3"><div class="botonesIcoEV"><i class="fa fa-envelope" aria-hidden="true"></i>Escríbenos</div></div>
              </div>
            </div>
          </div>
      </div>

      <div class="columns large-6 imagenSomosEV">
          <img src="<?php echo get_template_directory_uri(); ?>/img/imgfsomos.png" alt="Efecto Virtual">
      </div>

    </div>

    <div class="expanded row collapse trabajosEV">
      <h2><strong>Trabajos</strong> Destacados</h2>

      <div id="clientesEV" class="owl-carousel">
          <?php $args=array(
            // Banner Inicial
            'post_type' => 'clientes',
            'orderby' => 'menu_order',
            'order' => 'ASC',
            'posts_per_page' => -1);
          ?>
          <?php $slider = new WP_Query($args);?>

          <?php while($slider->have_posts()):
                $slider->the_post();
                $image = get_field('imagen');
          ?>

            <div class="owl-slide" style="background: url(<?php echo $image['url']; ?>) center top no-repeat;">
                <img class="item" src="<?php echo get_template_directory_uri(); ?>/img/bgcliente.png" />
            </div>

        <?php endwhile; wp_reset_postdata(); ?>


        </div>

    </div>


    <div class="nuestrosServicios">

      <h2><strong>Nuestros</strong> Servicios</h2>

      <div class="row">
        <div class="columns medium-6">
          <div class="row">
            <div class="columns medium-4">
              <img src="<?php echo get_template_directory_uri(); ?>/img/disenoweb.png" alt="Diseño Web">
            </div>
            <div class="columns medium-8">
              <h3>Diseño y desarrollo Web</h3>
              <p>Desarrollamos Aplicaciones Web a la medida correspondientes a los  productos y servicios que su empresa ofrece, generando mayores ganancias y comunicación con sus clientes, socios, proveedores y empleados.</p>
            </div>
          </div>
        </div>
        <div class="columns medium-6">
          <div class="row">
            <div class="columns medium-4">
              <img src="<?php echo get_template_directory_uri(); ?>/img/aplicacionesmoviles.png" alt="Aplicaciones Móviles">
            </div>
            <div class="columns medium-8">
              <h3>Aplicaciones Móviles</h3>
              <p>ofrecemos soluciones profesionales a medida para los dispositivos móviles, con los que  podrá acceder a un mercado en constante crecimiento. SmartPhones, Tabletas, iOS, Android.</p>
            </div>
          </div>
          </div>
        </div>


        <div class="row">
          <div class="columns medium-6">
            <div class="row">
              <div class="columns medium-4">
                <img src="<?php echo get_template_directory_uri(); ?>/img/seogoogle.png" alt="Diseño Web">
              </div>
              <div class="columns medium-8">
                <h3>SEO</h3>
                <p>Implementamos soluciones dedicadas para posicionar su sitio Web en los principales lugares del motor de búsqueda de google y demás buscadores,  logrando que su empresa este por delante de su competencia.</p>
              </div>
            </div>
          </div>
          <div class="columns medium-6">
            <div class="row">
              <div class="columns medium-4">
                <img src="<?php echo get_template_directory_uri(); ?>/img/marketingonline.png" alt="Aplicaciones Móviles">
              </div>
              <div class="columns medium-8">
                <h3>Marketing online</h3>
                <p>Ayudamos a las empresas con presencia en la internet aumentar el tráfico  de visitas para convertirlo en futuros clientes potenciales. através del marketing estratégico.</p>
              </div>
            </div>
            </div>
          </div>


      <div class="bgBlack">
          <div class="row">
            <div class="columns medium-6">
              <div class="row">
                <div class="columns medium-4">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/visitas360.png" alt="Diseño Web">
                </div>
                <div class="columns medium-8">
                  <h3>Visitas Virtuales 360º</h3>
                  <p>Con un tour virtual 360º tendrás una visión de 360° x 180° Full HD de un espacio interior o exterior, ofreciendo a tus clientes la misma sensación que experimentaría si estuviera en el lugar real.</p>
                </div>
              </div>
            </div>
            <div class="columns medium-6">
              <div class="row">
                <div class="columns medium-4">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/fotografi.png" alt="Aplicaciones Móviles">
                </div>
                <div class="columns medium-8">
                  <h3>Fotografía publicitaria</h3>
                  <p>Ayudamos a tener éxito a tus campañas publicitarias con una excelente producción y pos producción  fotográfica,  contamos con un equipo especializado en fotografía de interiores, exteriores e industrial.</p>
                </div>
              </div>
              </div>
            </div>

            <div class="row">
              <div class="columns medium-6">
                <div class="row">
                  <div class="columns medium-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/hosting.png" alt="Diseño Web">
                  </div>
                  <div class="columns medium-8">
                    <h3>Hosting</h3>
                    <p>El Hosting o Alojamiento Web, permite tener tu página Web al aire en Internet. alojamos sus páginas y correos corporativos en nuestros servidores de alta velocidad y seguridad.</p>
                  </div>
                </div>
              </div>
              <div class="columns medium-6">
                <div class="row">
                  <div class="columns medium-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/dominios.png" alt="Aplicaciones Móviles">
                  </div>
                  <div class="columns medium-8">
                    <h3>Registro de Dominios</h3>
                    <p>Registre el nombre de dominio de su empresa en cientos de extensiones distintas, ya sean genéricas o territoriales de Colombia, Europa, América, Asia, África u Oceanía.</p>
                  </div>
                </div>
                </div>
              </div>
        </div>

      </div>


      <?php $args=array(
        'post_type' => 'post',
        'orderby' => 'menu_order',
        'order' => 'ASC',
        'posts_per_page' => 4,
        'cat' => 'noticias'
      );?>
      <?php $consulta = new WP_Query($args);
      $i=0;
      while($consulta->have_posts()): $consulta->the_post();
        $thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'Medium');

        $contenidoNoticia[$i][0] = $thumb[0];
        $contenidoNoticia[$i][1] = get_the_title();
        $contenidoNoticia[$i][2] = mb_strimwidth(get_the_excerpt(), 0, 95, '...');
        $contenidoNoticia[$i][3] = get_permalink();

        $i++;
      endwhile; wp_reset_postdata(); ?>

      <div class="elBlog">
        <h2>Desde <strong>el Blog</strong></h2>

        <div class="row">
          <div class="columns medium-6">
            <div class="noticiaPrimera" style="background: url(<?php echo $contenidoNoticia[0][0]; ?>); background-size: cover; background-position: center;">
              <a href="<?php echo $contenidoNoticia[0][3]; ?>">
                <div class="tituloNoticia">
                  <h3><?php echo $contenidoNoticia[0][1]; ?></h3>
                  <p><?php echo $contenidoNoticia[0][2]; ?></p>
                </div>
              </a>
            </div>
          </div>
          <div class="columns medium-6">
              <?php
                $nNoticias = 1;
               while ($nNoticias <= 3) { ?>
                <a href="<?php echo $contenidoNoticia[$nNoticias][3]; ?>">
                 <div class="noticiaSegunda">
                   <div class="row">
                     <div class="columns medium-4">
                      <div class="imagenNoticiaSegunda" style="background: url(<?php echo $contenidoNoticia[$nNoticias][0]; ?>); background-size: cover; background-position: center;"></div>
                     </div>
                     <div class="columns medium-8">
                       <h3><?php echo $contenidoNoticia[$nNoticias][1]; ?></h3>
                       <p><?php echo $contenidoNoticia[$nNoticias][2]; ?></p>
                     </div>
                   </div>
                 </div>
                </a>

              <?php
                $nNoticias++;
              } ?>
          </div>
        </div>
      </div>


		</main><!-- #main -->
	</div><!-- #primary -->




<?php
get_footer();
