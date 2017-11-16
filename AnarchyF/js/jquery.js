$(document).ready(function(){
    $('a.button').click(function(){
    	$(this).parent().next().slideToggle();
	});
	$('.filter').click(function(){
		$('.select').slideToggle();
	});

	if ($(window).width() > 640) {
    	$('.select').css("display", "block");
	}
	else{
		$('.select').css("display", "none");
	}

	$(window).on('resize', function() {
        	if ($(window).width() > 640) {
            	$('.select').css("display", "block");
        	}
        	else{
        		$('.select').css("display", "none");
        	}
	});

	filterClick();

});

function filterClick(){
	$('.filter-button').on('click', function(){
		//get the class name of filter btn clicked
		var classIs = $(this).find('a').attr('class');
		//get matching class names of the div data attribute in ul list
		var isItemParent = $('.large-block-grid-4').find('div[data-apparel-desc*="' + classIs +'"]').parent();
		var isItem = $('.large-block-grid-4').find('div[data-apparel-desc*="' + classIs +'"]');
		var allItems = $('.large-block-grid-4').find('li');
		//if item is checked
		//remove all elements that do not have the selected attribute
		allItems.css('display','none');
		//for each data item is checked, display items with selected attribute
		//show all elements with correct data attribute
		isItemParent.css({'display':'block', 'clear': 'none'});

		if(classIs == 'all')
		{
			allItems.css('display','block');
		}
	});
}