(function ($) {
	Drupal.behaviors.D7UNIMELB = {
		attach: function(context, settings) {


	$('.not-front .nav li:not(.active-trail)').each(function() {
		if($(this).parents('li.active-trail').size() <= 0) { $(this).remove(); }
	});

	$('.front .nav li').each(function() {
		if($(this).parents('li').size() >= 1) { $(this).remove(); }
	});

var parentorg = Drupal.settings.parentorg;
var parentorgurl = Drupal.settings.parentorgurl;
var sitename = Drupal.settings.sitename;

if(parentorg != undefined && parentorgurl != undefined) {
$('body').delay(1000).queue(function(){ 
	$('#g-breadcrumb-menu').append('<li class="g-breadcrumb"><a href="'+Drupal.settings.parentorgurl+'">'+Drupal.settings.parentorg+'</a></li>').delay(1000).queue(function(){ 
		if(sitename != undefined) { $('#g-breadcrumb-menu').append('<li class="g-breadcrumb"><a href="/">'+Drupal.settings.sitename+'</a></li>'); }
  		$(this).dequeue(); 
	}); 
	$(this).dequeue(); 
});

}

$('ul#nice-menu-1 > li.menuparent.active-trail').each(function() {

$(this).delay(3000).queue(function(){ 
  $(this).clone().addClass('g-breadcrumb').appendTo('#g-breadcrumb-menu'); 
  $(this).dequeue(); 
});

$('#g-breadcrumb-menu > li.menuparent.active-trail ul').remove();

});


$('#g-local-global-search').css('display','none');

$('#g-search-button').live('click', function(){

	$('#g-local-global-search').css('display','block');

});

$("body").click(function() {

	$('#g-local-global-search').css('display','none');

});



$("#g-local-global-search input").click(function(e) {
    e.stopPropagation();
});


		}
	};
})(jQuery);
