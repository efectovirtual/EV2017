

function quitarbr(){
  if (jQuery(window).width() <= 850) {
    jQuery('#responsive-menu br').remove();
  }
}


jQuery(document).ready(function(){

  jQuery("#cerrarInscripcion" ).on( "click", function() {
    jQuery("#ventanaInscripcion").addClass("ventanaInsCerrar");
  });

});

    jQuery(document).ready(function(){

        jQuery("#owl-slider").owlCarousel({
          items:1,
          loop:true,
          margin:0,
          nav:true,
          rtl:true,
          autoplay:true,
          autoplayTimeout:7000,
          afterMove: moved

        });


        jQuery("#noticias-inicio").owlCarousel({
          loop:true,
          margin:0,
          nav:true,
          rtl:true,
          autoplay:true,
          autoplayTimeout:10000,
          afterMove: moved,
          responsive:{
                0:{
                    items:1,
                    nav:false,
                    loop:true
                },
                400:{
                    items:2,
                    nav:true
                },
                600:{
                    items:2,
                    nav:true
                },
                800:{
                    items:3,
                    nav:true
                },
                1000:{
                    items:4,
                    nav:true,
                    loop:true
                }
            }

        });


        jQuery("#clientesEV").owlCarousel({
          loop:true,
          margin:0,
          nav:false,
          rtl:true,
          autoplay:true,
          autoplayTimeout:5000,
          afterMove: moved,
          responsive:{
                0:{
                    items:1,
                    nav:false,
                    loop:true
                },
                300:{
                    items:1,
                    nav:false,
                    loop:true
                },

                500:{
                    items:2,
                    nav:false,
                    loop:true
                },

                800:{
                    items:3,
                    nav:false,
                    loop:true
                },
                1000:{
                    items:4,
                    nav:false,
                    loop:true
                }
            }

        });



        function moved() {
          var owl = jQuery("#owl-example").data('owlCarousel');
          var $buttons = jQuery('.custom-control button');
          $buttons.removeClass('active').removeAttr('disabled');
          jQuery('.custom-control').find('[data-slide="'+owl.currentItem +'"]').addClass('active').attr('disabled', 'disabled');
        }

        quitarbr();
        jQuery(window).resize(quitarbr);

    });


    jQuery(document).ready(function() {
          jQuery("input#programasearch").autocomplete({
              source: [
                { value: "Musica", url: 'http://unireformada.edu.co/wur2017/programas/musica/' },
                { value: "psicologia", url: 'http://unireformada.edu.co/wur2017/programas/psicologia/' },
                { value: "Teologia", url: 'http://unireformada.edu.co/wur2017/programas/teologia/' },
                { value: "Ingenieria Industrial", url: 'http://unireformada.edu.co/wur2017/programas/ingenieria-industrial/' },
                { value: "Ingenieria Biomedica", url: 'http://unireformada.edu.co/wur2017/programas/ingenieria-biomedica/' },
                { value: "Ingenieria Informatica", url: 'http://unireformada.edu.co/wur2017/programas/ingenieria-informatica/' },
                { value: "Ingenieria Ambiental", url: 'http://unireformada.edu.co/wur2017/programas/ingenieria-ambiental/' },
                { value: "Licenciatura en Educacion Bilingue – Español e Ingles", url: 'http://unireformada.edu.co/wur2017/programas/licenciatura-en-educacion-bilingue-espanol-e-ingles/' },
                { value: "Contaduria Publica", url: 'http://unireformada.edu.co/wur2017/programas/contaduria-publica/' },
                { value: "Administracion Maritima y Portuaria", url: 'http://unireformada.edu.co/wur2017/programas/administracion-maritima-y-portuaria/' },
                { value: "Administracion de Empresas", url: 'http://unireformada.edu.co/wur2017/programas/administracion-de-empresas/' },
                { value: "Administracion de Negocios Internacionales", url: 'http://unireformada.edu.co/wur2017/programas/administracion-de-negocios-internacionales/' },
                { value: "Especializacion en desarrollo humano y organizacional", url: 'http://unireformada.edu.co/wur2017/programas/especializacion-en-desarrollo-humano-y-organizacional/' },
                { value: "Especializacion en Finanzas Internacionales", url: 'http://unireformada.edu.co/wur2017/programas/especializacion-en-finanzas-internacionales/' },
                { value: "Tecnologo en Logistica Empresarial", url: 'http://unireformada.edu.co/wur2017/programas/ingenieria-industrial/' },
                { value: "Tecnologo Electromedico", url: 'http://unireformada.edu.co/wur2017/programas/ingenieria-biomedica/' },
                { value: "Tecnologo en Gestion de Redes Informaticas", url: 'http://unireformada.edu.co/wur2017/programas/ingenieria-informatica/' },
                { value: "Tecnologo en Desarrollo Ambiental y Sostenible", url: 'http://unireformada.edu.co/wur2017/programas/ingenieria-ambiental/' }
              ],
              minLength: 0,
              select: function (event, ui) {
                  window.location = ui.item.url;
              }
          }).focus(function(){
            //Use the below line instead of triggering keydown
            jQuery(this).data("autocomplete").search(jQuery(this).val());
        });
      });
