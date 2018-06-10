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


        

function popupOpenClose(popup) {
	

	if ($(".popup").length == 0){
		$(popup).wrapInner("<div class='popup'></div>");
	}
	
	$(popup).show();

	$(popup).click(function(e) {
		if ( e.target == this ) {
			if ($(popup).is(':visible')) {
				$(popup).hide();
			}
		}
	});

	$(popup).find("button[name=close]").on("click", function() {
		if ($(".formElementError").is(':visible')) {
			$(".formElementError").remove();
		}
		$(popup).hide();
	});
}

$(document).ready(function () {
	$("[data-js=open]").on("click", function() {
		popupOpenClose($(".popup"));
	});
});
});