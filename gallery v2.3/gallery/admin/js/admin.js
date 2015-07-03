$(function() {
	$("a.return").on("click", function() {
		window.location = '../';
	});

	$("a.return_admin").on("click", function() {
		window.location = '../admin/';
	});

	if($(".contents").hasClass("dashboard")){
		$(".sidebar > ul > li:nth-child(1)").addClass("dashboard-active");
	}
	if($(".contents").hasClass("homeSlider")){
		$(".sidebar > ul > li:nth-child(2)").addClass("homeSlider-active");
	}
	if($(".contents").hasClass("about")){
		$(".sidebar > ul > li:nth-child(3)").addClass("about-active");
	}
	if($(".contents").hasClass("gallery")){
		$(".sidebar > ul > li:nth-child(4)").addClass("gallery-active");
	}
	if($(".contents").hasClass("upload")){
		$(".sidebar > ul > li:nth-child(5)").addClass("upload-active");
	}

});

var fixmeTop = $('.category.options').offset().top;
$(window).scroll(function() {
   
    
    var currentScroll = $(window).scrollTop();
    if (currentScroll >= fixmeTop) {
        // $('.category.options').css(styles);
        $('.category.options').addClass("new");
    } else {
        $('.category.options').removeClass("new");
    }

});

// Event Handler for Edit Thumbnail Photo in Gallery
$(function() {
    $('.gallery .category.options .col-xs-4 button.select').on('click', function() { 
        $(this).addClass('hidden');
        $('.gallery .category.options .col-xs-4 button.upload').addClass('hidden');
        $('.gallery .category.options .col-xs-4 button.selected').removeClass('hidden');
        $('.gallery .category.options .col-xs-4 button.cancel').removeClass('hidden');
        $('.gallery .category.add-on').removeClass('hidden');
        $('.gallery .thumbnails a.img-click > img').addClass('edit');
        $('.gallery .thumbnails a.img-click').attr('data-toggle', '');
        $('.gallery .thumbnails a.img-click').addClass('edit');
        $("#selection").attr('disabled', true);
    });

    var selected_img = 0;
    $(document).on("click", "a.img-click.edit", function(){
        if($(this).find('span.tickbox').hasClass('hidden')){
            $(this).find('span.tickbox').removeClass('hidden'); 
            selected_img++;
            $('.gallery .category.options .col-xs-4 button.selected span.number').text(selected_img);
        }else{
            $(this).find('span.tickbox').addClass('hidden'); 
            selected_img--;
            $('.gallery .category.options .col-xs-4 button.selected span.number').text(selected_img);
        }
        if(selected_img > 0){
            $('.gallery .add-on .col-xs-6 button.set').attr('disabled', false);
            $('.gallery .add-on .col-xs-6 button.delete').attr('disabled', false);
        }else{
            $('.gallery .add-on .col-xs-6 button.set').attr('disabled', true);
            $('.gallery .add-on .col-xs-6 button.delete').attr('disabled', true);
        }
        console.log(selected_img);
    });


    // Set the number in the Set As Thumbnail dialog box
    $(document).on("click", ".add-on button.set", function() {
        $("#setModal span.numbers").text(selected_img);
    });

    $('.gallery .category.options .col-xs-4 button.cancel').on('click', function() { 
        selected_img = 0;
        $(this).addClass('hidden');
        $('.gallery .category.options .col-xs-4 button.upload').removeClass('hidden');
        $('.gallery .category.options .col-xs-4 button.selected').addClass('hidden');
        $('.gallery .category.options .col-xs-4 button.select').removeClass('hidden');
        $('.gallery .category.add-on').addClass('hidden');
        $('.gallery .thumbnails img').removeClass('edit');
        $('.gallery .thumbnails a.img-click').attr('data-toggle', 'modal');
        $('.gallery .thumbnails a.img-click.edit').find('span.tickbox').addClass('hidden');
        $('.gallery .thumbnails a.img-click').removeClass('edit');
        $('.gallery .add-on .col-xs-4 button.set').attr('disabled', true);
        $('.gallery .add-on .col-xs-4 button.delete').attr('disabled', true);
        $('.gallery .thumbnails a.img-click span.tickbox').addClass('hidden'); 
        $('.gallery .category.options .col-xs-4 button.selected span.number').text(selected_img);
        $("#selection").attr('disabled', false);
    }); 
    
});

// Event handler for Gallery setion
$(function() {

    // Global Variables
    var total, order, interval, showInterval;

    var panelToShow = "panel-all";

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
    $(document).on("click", "a.img-click", function() {
        console.log("in img click");
        var img_src = $(this).children().attr("src");
        total = $("#" + panelToShow + " a.img-click").length;
        order = $("#" + panelToShow + " a.img-click").index(this)+1;
        
        $(".cells img").attr("src", img_src);
        $("span.order").text(order);
        $("span.total").text(total);
        showBarsInterval();
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

    function showBarsInterval(){
        $(".top-bar").trigger("mouseenter");
        showInterval = setTimeout(function()
        {
            $(".top-bar").trigger("mouseleave");
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
        clearTimeout(showInterval);
    });

    $(".top-bar").hover(function(){
        $(this).addClass("showed");
        $(".bottom-bar").addClass("showed");
        $(".arrow-left").addClass("showed");
        $(".arrow-right").addClass("showed");
    }, function(){
        $(this).removeClass("showed");
        $(".bottom-bar").removeClass("showed");
        $(".arrow-left").removeClass("showed");
        $(".arrow-right").removeClass("showed");
    });

    $(".bottom-bar").hover(function(){
        $(".top-bar").trigger("mouseenter");
    }, function(){
        $(".top-bar").trigger("mouseleave");
    });

    $(".arrow-left").hover(function() {
        $(".top-bar").trigger("mouseenter");
    }, function(){
        $(".top-bar").trigger("mouseleave");
    });

    $(".arrow-right").hover(function() {
        $(".top-bar").trigger("mouseenter");
    }, function(){
        $(".top-bar").trigger("mouseleave");
    });

    $(document).keydown(function(e) {
        switch(e.which) {
            case 27: // escape
            $( ".exit" ).trigger( "click" );
            break;

            case 37: // left
            $( ".previous" ).trigger( "click" );
            break;

            case 39: // right
            $( ".next" ).trigger( "click" );
            break;

            default: 
            return; // exit this handler for other keys
        }
        e.preventDefault(); // prevent the default action (scroll / move caret)
    });

    /* Configuration of the tooltip
    $('.fa-refresh').tooltip({
        'placement': 'bottom',
        'title': "Auto-Slide"
    }); */

});