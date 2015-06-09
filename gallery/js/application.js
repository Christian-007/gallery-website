// For displaying the sidebar-menu and hiding the navbar
$(function() {
	$("#menu-toggle").on("click", function(e){
		e.preventDefault(); //important AF so that it won't scroll to the top
		$(".nav-sidebar").toggleClass("active");
		$(".navbar").fadeOut(300);
	});
	$("#menu-close").on("click", function(e){
		e.preventDefault();
		$(".nav-sidebar").toggleClass("active");
		$(".navbar").fadeIn();
	});
});

// For smooth scrolling between anchors (requires jquery easing plugin)
$(function() {
    $("a.page-scroll").on("click", function(event) {
        var $anchors = $(this);
        $("html, body").stop().animate({
            scrollTop: $($anchors.attr("href")).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});


// Closing the sidebar whenever an item is clicked
$(function() {
	$(".nav-sidebar .sidebar-list a").on("click", function(){
		$(".nav-sidebar").removeClass("active");
		$(".navbar").fadeIn();
	});
});

// Event handler for Gallery setion
$(function() {

    // Global Variables
    var total, order, interval;

    var panelToShow = "panel-landscape";

    // Change the set of images when select option is changed
    $("#selection").on("change", function(){

        panelToShow = $(this).find(":selected").attr('rel');
        $(".gallery .container .thumbnails.active").fadeOut(300, showNextPanel);

        function showNextPanel(){
            $(this).removeClass("active");
            $(".cells img").attr("src", "");
            $("a.img-click").attr("data-target", "");
            $("a.img-click").attr("data-toggle", "");
            $("a.img-click").removeClass("img-click");
            $("#"+panelToShow).fadeIn(300, function(){
                $(this).addClass("active");
                $(this).find("a").addClass("img-click");
                $(this).find("a.img-click").attr("data-target", "#imgMod");
                $(this).find("a.img-click").attr("data-toggle", "modal");
            });
        }

    });	

    /* ----- Image Viewer Logic ----- */

    // Trigger for the selected image
    $("a.img-click").on("click", function() {
        console.log("in img click");
        var img_src = $(this).children().attr("src");
        total = $("#" + panelToShow + " a.img-click").length;
        order = $("#" + panelToShow + " a.img-click").index(this)+1;
        
        $(".cells img").attr("src", img_src);
        $("span.order").text(order);
        $("span.total").text(total);
    });

    // Trigger for Next button
    $(".next").on("click", function() {
        var getNextImg = parseInt($("span.order").text(), 10);
        if(getNextImg == total){
            getNextImg = 0;
        }
        var nextImg_src = $(".img-click").eq(getNextImg).children().attr("src");
        
        $(".cells img").attr("src", nextImg_src);
        getNextImg++;
        $("span.order").text(getNextImg);
    });

    // Trigger for Prev button
    $(".previous").on("click", function() {
        var getPrevImg = $("span.order").text()-2;
        if(getPrevImg+1 == 0){
            getPrevImg = total-1;
        }
        var prevImg_src = $(".img-click").eq(getPrevImg).children().attr("src");

        $(".cells img").attr("src", prevImg_src);
        getPrevImg++;
        $("span.order").text(getPrevImg);     
    });

    // Looping the slide
    function autoSlideLoop(){
        interval = setTimeout(function() 
        {
            if(stopAnimation){
                $( ".next" ).trigger( "click" );
                autoSlideLoop();
            }
        }, 3000);
    }

    // Trigger for looping the slide automatically on button click
    var stopAnimation = false;
    $(".autoSlide").on("click", function() {
        $(".autoSlide i").toggleClass("fa-spin");
        if (stopAnimation) {
            stopAnimation = false;
            clearTimeout(interval); // Stopping the timeout(pause)
        } else {
            stopAnimation = true;
            autoSlideLoop();
        }
    });

    $(".exit").on("click", function(){
        $('#imgMod').modal('hide');
        if(stopAnimation){
            $(".autoSlide").trigger("click");
        }
    });

    /* Configuration of the tooltip
    $('.fa-refresh').tooltip({
        'placement': 'bottom',
        'title': "Auto-Slide"
    }); */

});