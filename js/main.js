jQuery(document).ready(function(){
//===============================
// 	jQuery('.dropdown-menu').dropdown('toggle');
// 	jQuery('.dropdown-menu').on('show.bs.dropdown', function () {
// 		// do something…
// 	});
	jQuery(".fancybox").fancybox({
		autoCenter: true
	}); // fancybox
	jQuery('.row-article .col-sm-4:nth-child(3n+3)').after('<div class="clear"></div>');
//===============================
}); //end document ready