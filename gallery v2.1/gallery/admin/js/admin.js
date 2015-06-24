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

// Event Handler for Edit Thumbnail Photo in Gallery
$(function() {
    $('.gallery .category.options .col-xs-4 button.select').on('click', function() { 
        $(this).addClass('hidden');
        $('.gallery .category.options .col-xs-4 button.cancel').removeClass('hidden');
        // $('.gallery .float.selected').removeClass('hidden');
        // $('.gallery .rfloat.uploads').addClass('hidden');
        // $('.gallery .rfloat.set').removeClass('hidden');
        // $('.gallery .rfloat.delete').removeClass('hidden');
        $('.gallery .category.add-on').removeClass('hidden');
        $('.gallery .thumbnails img').addClass('edit');
        $('.gallery .thumbnails a.img-click').attr('data-toggle', '');
        $('.gallery .thumbnails a.img-click').addClass('edit');
    });

    var selected_img = 0;

    $(document).on("click", "a.img-click.edit", function(){
        if($(this).find('span.tickbox').hasClass('hidden')){
            $(this).find('span.tickbox').removeClass('hidden'); 
            selected_img++;
            $('.gallery .add-on .selected span.number').text(selected_img);
        }else{
            $(this).find('span.tickbox').addClass('hidden'); 
            selected_img--;
            $('.gallery .add-on .selected span.number').text(selected_img);
        }
        if(selected_img > 0){
            $('.gallery .add-on .col-xs-4 button.set').attr('disabled', false);
            $('.gallery .add-on .col-xs-4 button.delete').attr('disabled', false);
        }else{
            $('.gallery .add-on .col-xs-4 button.set').attr('disabled', true);
            $('.gallery .add-on .col-xs-4 button.delete').attr('disabled', true);
        }
        console.log(selected_img);
    });

    $('.gallery .category.options .col-xs-4 button.cancel').on('click', function() { 
        selected_img = 0;
        $(this).addClass('hidden');
        $('.gallery .category.options .col-xs-4 button.select').removeClass('hidden');
        // $('.gallery .float.selected').addClass('hidden');
        // $('.gallery .rfloat.uploads').removeClass('hidden');
        // $('.gallery .rfloat.set').addClass('hidden');
        // $('.gallery .rfloat.delete').addClass('hidden');
        $('.gallery .category.add-on').addClass('hidden');
        $('.gallery .thumbnails img').removeClass('edit');
        $('.gallery .thumbnails a.img-click').attr('data-toggle', 'modal');
        $('.gallery .thumbnails a.img-click.edit').find('span.tickbox').addClass('hidden');
        $('.gallery .thumbnails a.img-click').removeClass('edit');
        $('.gallery .add-on .col-xs-4 button.set').attr('disabled', true);
        $('.gallery .add-on .col-xs-4 button.delete').attr('disabled', true);
        $('.gallery .add-on .selected span.number').text(selected_img);
    }); 

    // Enable the button if there is at least 1 IMAGE is clicked
    // $('.gallery .rfloat.set button').attr('disabled', false);
});

// Event handler for Gallery section
$(function() {

    // Global Variables
    var total, order, interval;

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