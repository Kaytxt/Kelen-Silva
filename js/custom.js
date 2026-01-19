/**
 * Scripts Customizados - Kelen Silva
 */

(function($) {
    'use strict';

    // Inicializar quando o documento estiver pronto
    $(document).ready(function() {
        
        // Smooth scroll para links âncora
        $('a[href^="#"]').on('click', function(e) {
            var target = $(this.getAttribute('href'));
            
            if (target.length) {
                e.preventDefault();
                $('html, body').stop().animate({
                    scrollTop: target.offset().top - 20
                }, 1000);
            }
        });

        // Adicionar classe ao scroll
        $(window).scroll(function() {
            if ($(this).scrollTop() > 100) {
                $('body').addClass('scrolled');
            } else {
                $('body').removeClass('scrolled');
            }
        });

    });

})(jQuery);
