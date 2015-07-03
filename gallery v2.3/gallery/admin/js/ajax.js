// Submit set as thumbnails via jquery ajax
$(".gallery #setModal .modal-body form button.submit").on("click", function(event){
    
    event.preventDefault();

    var $btn = $(this).button('loading');
    var img = $(".gallery #setModal form input[name='img[]']").map(
        function(){
            return $(this).val();
        }
    ).get();

    var category = $('.gallery #setModal form #selection').val();
    
    /*console.log("img: "+ img);
    console.log("category: " + category);
    console.log(Array.isArray(img));

    alert("img: "+ img + " category: " + category);*/

    $.ajax({
        type:"POST", 
        url: "execution/sql_set.php",
        data: {
            imgArray: img,
            category: category
        },
        success: function(){
            console.log("Success!");
            alert("Successfully set as thumbnails!");
            setTimeout(function() 
            {
                location.reload();
            }, 0001);  
        },
        error: function() {
            console.log("ERROR!");
            $btn.button('reset');
        }
    });
});