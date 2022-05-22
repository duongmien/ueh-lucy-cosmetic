(function($) {
    "use strict";
    $(window).on('load', function(event) { $('.js-preloader').delay(500).fadeOut(500); });
    $('.searchbtn').on('click', function() { $('.search-area').addClass('open'); });
    $('.close-searchbox').on('click', function() { $('.search-area').removeClass('open'); });
    $(".language-option").each(function() {
        var each = $(this)
        each.find(".lang-name").html(each.find(".language-dropdown-menu a:nth-child(1)").text());
        var allOptions = $(".language-dropdown-menu").children('a');
        each.find(".language-dropdown-menu").on("click", "a", function() {
            allOptions.removeClass('selected');
            $(this).addClass('selected');
            $(this).closest(".language-option").find(".lang-name").html($(this).text());
        });
    })
    $('.user-option').on('click', function() { $('.user-menuitem').toggleClass('open'); });
    $('select').on('change', function() {
        if ($(this).val())
            $(this).css('color', 'white')
        else
            $(this).css('color', 'white')
    });
    var minVal = 1,
        maxVal = 20;
    $(".increaseQty").on('click', function() {
        var $parentElm = $(this).parents(".qtySelector");
        $(this).addClass("clicked");
        setTimeout(function() { $(".clicked").removeClass("clicked"); }, 100);
        var value = $parentElm.find(".qtyValue").val();
        if (value < maxVal) { value++; }
        $parentElm.find(".qtyValue").val(value);
    });
    $(".decreaseQty").on('click', function() {
        var $parentElm = $(this).parents(".qtySelector");
        $(this).addClass("clicked");
        setTimeout(function() { $(".clicked").removeClass("clicked"); }, 100);
        var value = $parentElm.find(".qtyValue").val();
        if (value > 0) { value--; }
        $parentElm.find(".qtyValue").val(value);
    });
    
})(jQuery);