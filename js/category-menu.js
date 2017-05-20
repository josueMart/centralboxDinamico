                 
$(document).ready(categoria);
 var contador = 1;
 
function categoria() {
	$(".category_bar").click(function () {
        if(contador == 1){
            $(".category-navbar").animate({right:0});
            contador = 0;
        } else {
            contador = 1;
            $(".category-navbar").animate({right: '-100%'});
        }
    });
};

    