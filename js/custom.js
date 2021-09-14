/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

( function( $ ) {

    $( "#request_form_toggle" ).toggle(function() {
            $("#request_form_slider").animate({ right: "0"}, 1000);
        }, function() {
            $("#request_form_slider").animate({ right: "-275px"}, 1000);
    });
    
    
     $('.carousel').carousel({
        interval: 6000
    });
    
} )( jQuery );
