$(document).ready(function(){
      $('body').append('<div id="toTop" style="background-color:teal; color:#f8f8f8;" class="btn btn-info"><i class="fa fa-bolt"></i> Back to Top</div>');
    	$(window).scroll(function () {
			if ($(this).scrollTop() != 0) {
				$('#toTop').fadeIn();
			} else {
				$('#toTop').fadeOut();
			}
		}); 
    $('#toTop').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });
});
