
jQuery(function() {

		jQuery('#hi').addClass('animated zoomInDown');

});

// jQuery(window).click(function(){

// 		jQuery(".intro-text").hide();
// 		jQuery("#launch").addClass('animated tada').fadeToggle();

// });




jQuery(document).on("click touchstart", function () {

jQuery(".intro-text").hide();

});



var clickHandler = "click";

if('ontouchstart' in document.documentElement){
    clickHandler = "touchstart";
}

jQuery(document).bind(clickHandler,function(){
    jQuery("#launch").addClass('animated tada').fadeToggle();
});