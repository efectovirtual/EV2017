<!-- Header -->
<header id="masthead" class="site-header" role="banner">

<div class="rheader">

  <div class="row header">

      <div class="columns large-2 menulogo">
        <img  src="<?php echo get_template_directory_uri(); ?>/img/logo-efectovirtual.png" alt="Efecto Virtual">
      </div>

      <div class="columns large-8 menumen">
        <nav id="site-navigation" class="main-navigation" role="navigation">
           <?php echo do_shortcode( '[maxmegamenu location=primary]' ); ?>
        </nav><!-- #site-navigation -->
      </div>

      <div class="columns large-2">
        <ul class="menuUser">
          <li class="contactoTop"><a href="#">Contacto</a></li>
          <li class="icoUser"><a href="#"><i class="fa fa-user-o" aria-hidden="true"></i></a></li>
        </ul>
      </div>

  </div>


</div>

</header><!-- Fin Header -->
