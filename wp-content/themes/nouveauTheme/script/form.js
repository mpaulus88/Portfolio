
/* JS Document - Map.js
 * november 2012
 */

/*jslint regexp: true, vars: true, white: true, browser: true */
/*jshint nonstandard: true, browser: true, boss: true */
/*global jQuery */

( function ( $ ) {
	"use strict";
	// -- globals
	 var url=window.location.search,
	 	 vrai,
	 	 faux;
	

		
	

	// -- methods
	var formValidation= function()
        {
        	 $("#sendMail").validate({
                rules: {
                   	messageBody:"required",
                   	 mail: {
                        required: true,
                        email: true
                    }
                },

                errorPlacement: function(error, element) {},
            	invalidHandler: function(form, validator){
        		if ($("#mail").valid() == false )
        			  { 
        			$("#mail").css({'-webkit-box-shadow':'0px 0px 3px 3px rgb(250, 145, 145)','box-shadow':'0px 0px 3px 3px rgb(250, 145, 145)'});
        			$('#mail').attr('placeholder','E-mail non valide!');
        			return false;	
        				}
        		if ($("#messageBody").valid() == false )
        			  { 
        			$("#messageBody").css({'-webkit-box-shadow':'0px 0px 3px 3px rgb(250, 145, 145)','box-shadow':'0px 0px 3px 3px rgb(250, 145, 145)'});
        			$('#messageBody').attr('placeholder','Votre message est vide!').attr('value','');	
        			return false;
        			}
    		},
			submitHandler: function(form) {
			        form.submit();}
        
        });
    };
    	var newValidation= function()
        {
        	 $("#mc-embedded-subscribe-form").validate({
                rules: {
                   	 EMAIL: {
                        required: true,
                        email: true
                    }
                },

                errorPlacement: function(error, element) {},
            	invalidHandler: function(form, validator){
        		if ($("#EMAIL").valid() == false )
        			  { 
        			$("#EMAIL").css({'-webkit-box-shadow':'0px 0px 3px 3px rgb(250, 145, 145)','box-shadow':'0px 0px 3px 3px rgb(250, 145, 145)'});
        			$('#EMAIL').attr('placeholder','E-mail non valide!').attr('value','');
        			return false;	
        				}
    		},
			submitHandler: function(form) {
			        form.submit();}
        
        });
    }
    var isSended=function()
        {
        	console.log(url);
			vrai='&sended=true';
			faux='&sended=false';
			if(url.indexOf(vrai)!=-1)
			{
			$('#feedback').text('Votre message a bien été envoyé').animate({
				height:'2em'
			},'normal');
			}
			if(url.indexOf(faux)!=-1)
			{
			$('#feedback').text('Votre message n´a pu être envoyé').css('color','red').animate({
				height:'2em'
			},'normal');
			}
		};

	

	$( function () {
	
		
		// -- onload routines
		formValidation();
		newValidation();
		isSended();
		



	} );

}( jQuery ) );

