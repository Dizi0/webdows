$(document).ready(function () {
        $('.startMenu').hide();
        $('.start').click(function () {
            $('.startMenu').toggle();
            $(this).toggleClass('startact');
        });

        $('.desktop').click(function () {
            $('.startMenu').hide();
            $('.start').removeClass('startact').addClass('startstd');
        })
/*fdi*/
function popupOpenClose(fdi) {
	

	if ($(".fdi").length == 0){
		$(fdi).wrapInner("<div class='fdi'></div>");
	}
	
	$(fdi).show();

	$(fdi).click(function(e) {
		if ( e.target == this ) {
			if ($(fdi).is(':visible')) {
				$(fdi).hide();
			}
		}
	});

	$(fdi).find("button[name=close]").on("click", function() {
		if ($(".formElementError").is(':visible')) {
			$(".formElementError").remove();
		}
		$(fdi).hide();
	});
}

$(document).ready(function () {
	$("[data-js=openfdi]").on("click", function() {
		popupOpenClose($(".fdi"));
	});

});
});
/*complex*/
     

function popupOpenClose(complex) {
	

	if ($(".complex").length == 0){
		$(complex).wrapInner("<div class='complex'></div>");
	}
	
	$(complex).show();

	$(complex).click(function(e) {
		if ( e.target == this ) {
			if ($(complex).is(':visible')) {
				$(complex).hide();
			}
		}
	});

	$(complex).find("button[name=close]").on("click", function() {
		if ($(".formElementError").is(':visible')) {
			$(".formElementError").remove();
		}
		$(complex).hide();
	});
}

$(document).ready(function () {
	$("[data-js=opencomplex]").on("click", function() {
		popupOpenClose($(".complex"));
	});

});
;
/*fractal */

function popupOpenClose(fractal) {
if ($(".fractal").length == 0){
		$(fractal).wrapInner("<div class='fractal'></div>");
	}
	
	$(fractal).show();

	$(fractal).click(function(e) {
		if ( e.target == this ) {
			if ($(fractal).is(':visible')) {
				$(fractal).hide();
			}
		}
	});

	$(fractal).find("button[name=close]").on("click", function() {
		if ($(".formElementError").is(':visible')) {
			$(".formElementError").remove();
		}
		$(fractal).hide();
	});
}

$(document).ready(function () {
	$("[data-js=openfractal]").on("click", function() {
		popupOpenClose($(".fractal"));
	});

});