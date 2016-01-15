$(document).on("click", ".tabs-menu ul li a", function() {
    $(".tab-content").hide();
    $($(this).attr("href")).fadeIn(700);
     if($(this).attr("href") != "#home") {
        $('.tabs-menu').show();
        $('.brands-slider').show();
    } else {
        $('.tabs-menu').hide();
        $('.brands-slider').hide();
    }
});
$(document).on("click", ".tabs-menu ul li a", function() {
    $(".arrow").hide();
    $($(this).attr("href")).fadeIn(700);
     if($(this).attr("href") != "#home") {
        $('.tabs-menu').show();
        $('.brands-slider').show();
    } else {
        $('.tabs-menu').hide();
        $('.brands-slider').hide();
    }
});

// $(document).on(".navigat-btn", function() {
//     if ($(this).attr("href") == "#promotions") {
//         $(".arrow").show();
//     }

//     if($(this).attr("href") != "#home") {
//         $('.tabs-menu').show();
//     } else {
//         $('.tabs-menu').hide();
//     }

//     $(".tab-content").hide();
//     $($(this).attr("href")).fadeIn(700);
// });
$(document).on("click", ".navigat-btn", function() {
    $(".arrow").hide();
    if ($(this).attr("href") == "#promotions") {
        $(".arrow").show();
         $('.brands-slider').show();
    }

    if($(this).attr("href") != "#home") {
        $('.tabs-menu').show();
    } else {
        $('.tabs-menu').hide();
         $('.brands-slider').hide();
    }

    $(".tab-content").hide();
    $($(this).attr("href")).fadeIn(700);
});

var buttonLeft = document.getElementById('page-left');
var buttonRight = document.getElementById('page-right');

// Calculate offset for paging
var tilesLength = 0;
var panelWidth = $('.panel-body').width();

$('.tiles .tile').each(function() {
    tilesLength += $(this).width();
});

var panelOffset = (tilesLength - panelWidth) * -1;

// Handle paging left
var pageLeft = function() {
    buttonLeft.className = buttonLeft.className + " hide";
    buttonRight.className = buttonRight.className.replace("hide", "");

    $('.tile').addClass('bulge');

    $('.tiles').animate({
        'left': '0'
    }, 500);
    setTimeout(function() {
        $('.tile').removeClass('bulge');
    }, 300);
}

// Handle paging right
var pageRight = function() {
    buttonRight.className = buttonRight.className + " hide";
    buttonLeft.className = buttonLeft.className.replace("hide", "");

    $('.tile').addClass('bulge');

    $('.tiles').animate({
        'left': panelOffset
    }, 500);
    setTimeout(function() {
        $('.tile').removeClass('bulge');
    }, 300);
}

// Call pageLeft function
buttonLeft.onclick = function() {
    pageLeft();
}

// Call pageRight function
buttonRight.onclick = function() {
    pageRight();
}
