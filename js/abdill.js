/* smooth scroll */

jQuery(document).ready(function($) {
     
        $(".scroll").click(function(event){		
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top-55}, 500);  /*  The "-55" is what prevents it from scrolling too far and hiding the headline behind the static navbar   */
        });
    });

    