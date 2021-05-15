 $(document).ready(function(){
    // Activate Carousel
    $('.carousel').carousel({
        interval: 5000
    });

    // Enable Carousel Indicators
    $(".carousel-item").eq(0).click(function(){
    $("#Foodcarousel").carousel(0);

    });
    $(".carousel-item").eq(1).click(function(){
    $("#Foodcarousel").carousel(1);

    });

    $(".carousel-item").eq(2).click(function(){
    $("#Foodcarousel").carousel(2);

    });

    // Enable Carousel Controls
    $(".carousel-control-prev").click(function(){
    $("#Foodcarousel").carousel("prev");

    });
    $(".carousel-control-next").click(function(){
    $("#Foodcarousel").carousel("next");

    });
    $("#type_select").change(function (){
        var type_name =$("#type_select").val();
        $(".col-sm-6").hide();
        $("#"+type_name).show();
    })

});



