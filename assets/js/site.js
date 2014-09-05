jQuery(window).load(function() {
  jQuery("[data-match-height]").each(function() {
    var parentRow = jQuery(this),
        childrenCols = jQuery(this).find("[data-height-watch]"),
        childHeights = childrenCols.map(function(){ return jQuery(this).outerHeight(); }).get(),
        tallestChild = Math.max.apply(Math, childHeights);
        childrenCols.css('min-height', tallestChild);
  });
});


// Ajaxifying MailChimp submissions for the SDSN newsletter.

// Some bugs with regular/mobile form overlap exist. Will fix later.
(function($){

  $(document).ready(function(){
  
    ajaxMailChimpForm($("#subscribe-form"), $("#subscribe-result"));

    ajaxMailChimpForm($("#subscribe-form-mobile"), $("#subscribe-result-mobile"));

    // Turn the given MailChimp form into an ajax version of it.
    // If resultElement is given, the subscribe result is set as html to
    // that element.
    function ajaxMailChimpForm($form, $resultElement){


        $form.on('valid.fndtn.abide', function(e) {

          e.preventDefault();

          //$resultElement.html("Subscribing...");
          submitSubscribeForm($form, $resultElement);

        });
    }

    // Submit the form with an ajax/jsonp request.
    // Based on http://stackoverflow.com/a/15120409/215821
    function submitSubscribeForm($form, $resultElement) {

        $.ajax({
            type: "GET",
            url: $form.attr("action"), // action
            data: $form.serialize(),
            cache: false,
            dataType: "jsonp",
            jsonp: "c", // trigger MailChimp to return a JSONP response
            contentType: "application/json; charset=utf-8",

            beforeSend: function(){

              // Handle the beforeSend event

              $(".loadingtrail").fadeIn( "100", function() {
                // Animation complete
              });

            },

            error: function(error){
                // According to jquery docs, this is never called for cross-domain JSONP requests
            },

            success: function(data){

                console.log(data);
              
                if (data.result != "success") {

                    var message = data.msg || "Sorry. Unable to subscribe. Please try again later.";

                    if (data.msg && data.msg.indexOf("already subscribed") >= 0) {

                      // Remove subscription button
                      $(".mchimp-sub").fadeOut( "100", function() {

                        // Add alert to subscription result div + message
                        $resultElement.addClass("alert-box secondary")
                        $resultElement.html("You're already subscribed. Thank you.")

                        // Fade in result div
                        $resultElement.fadeIn( "100", function() {
                          // Animation complete
                        });

                      });


                    } else {


                      $(".loadingtrail").fadeOut( "25", function() { 
              
                      });

                      $resultElement.addClass("alert-box warning")
                      $resultElement.html( message );

                      $resultElement.fadeIn( "100", function() {
                         // Animation complete
                      }); 

                    }

                    //$resultElement.html(message);

                } else {

                    $(".mchimp-sub").fadeOut( "100", function() {
                      // Animation complete
                      $resultElement.addClass("alert-box success")
                      $resultElement.html( data.msg );

                      $resultElement.fadeIn( "100", function() {
                         // Animation complete
                      }); 

                    });

                    
                }
            }
        });
    }
  });

})(jQuery);