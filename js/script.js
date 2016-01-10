/***************************** Scroll Button ***************************************/         
         
          $(document).ready(function () {
              $(window).scroll(function () {
                  if ($(this).scrollTop() > 100) {
                      $('.scrollup').fadeIn();
                  } else {
                      $('.scrollup').fadeOut();
                  }
              });
              $('.scrollup').click(function () {
                  $("html, body").animate({
                      scrollTop: 0
                  }, 600);
                  return false;
              });
          });
              
/***************************** Image Rotater **************************************/

       $(function() 
       {
        setInterval("rotateImages()", 10000);				 // create the image rotator and rotate every x seconds
       });

       function rotateImages() 
       {
        var oCurPhoto = $("#imageRotator div.current");		// get the current photo, ie within photoshow the current div
        var oNxtPhoto = oCurPhoto.next();		                    // get the next sibling to div.current, ie leaf

        // if there is no next photo, ie at 4th photo put nextPhoto = 1st photo in div
        if (oNxtPhoto.length == 0)
            oNxtPhoto = $("#imageRotator div:first");

        oCurPhoto.removeClass('current').addClass('previous');		// remove the current photo and add the previous photo

        // set the css start of with opacity 0 so invisible, put it on top  and animate it up to visible
        // over 2 seconds
        oNxtPhoto.css({ opacity: 0.0 }).addClass('current').animate({ opacity: 1.0 }, 500,
        function() 
        {
         oCurPhoto.removeClass('previous');						// remove currents photo previous class
        });
      }

/************************** Read More/Less Buttons *********************************/

      $(function() {
         $('#group-read-toggle').on('click', function(e) {
            var btn = $(this),
                icon = btn.find('.fa'),
                text = btn.find('.text'),
                toggleClass = 'group-read-more';

            if (btn.hasClass(toggleClass)) {
                text.text('Read Less ');
                icon.removeClass('fa-chevron-down').addClass('fa-chevron-up');        
            } else {
                text.text('Read More ');
                icon.removeClass('fa-chevron-up').addClass('fa-chevron-down');        
            }
            btn.toggleClass(toggleClass);
         });

         $('#thesis-read-toggle').on('click', function(e) {
            var btn = $(this),
                icon = btn.find('.fa'),
                text = btn.find('.text'),
                toggleClass = 'thesis-read-more';

            if (btn.hasClass(toggleClass)) {
                text.text('Read Less ');
                icon.removeClass('fa-chevron-down').addClass('fa-chevron-up');        
            } else {
                text.text('Read More ');
                icon.removeClass('fa-chevron-up').addClass('fa-chevron-down');        
            }
            btn.toggleClass(toggleClass);
         });
       });

/***************************** Import Content from HTML **************************************/

    $(document).ready(function(){
        $("#intro-text-para").load("includes/content.html .intro-greeting");
        
        $("#comp-net-text-para").load("includes/content.html .comp-maintenance-edu");
        $("#comptia-aplus-text-para").load("includes/content.html #comptia-aplus-edu");
        $("#comptia-netplus-text-para").load("includes/content.html #comptia-netplus-edu");
        $("#comp-science-text-para").load("includes/content.html .comp-science-edu");
        
        $("#code-text-para").load("includes/content.html #coding-skills");
        $("#tools-text-para").load("includes/content.html #tools-skills");
        $("#technical-text-para").load("includes/content.html #technical-skills");
        
        $("#group-text").load("includes/content.html .group-content");
        $("#group-hidden").load("includes/content.html .group-hidden-content");       
                
        $(".thesis-text-para1").load("includes/content.html #thesis-content-para1");
        $(".thesis-text-para2").load("includes/content.html #thesis-content-para2");
        $(".thesis-text-para3").load("includes/content.html #thesis-content-para3");
        $(".thesis-text-para4").load("includes/content.html #thesis-content-para4");
        $("#thesis-hidden").load("includes/content.html .thesis-hidden-content");
    });




