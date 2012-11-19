( function( $ ) {
var nb_image= 6;
var image_url1='image/slideShow/'+(Math.floor(Math.random()*(nb_image-1))+1)+'.jpg';
var image_url2='image/slideShow/'+(Math.floor(Math.random()*(nb_image-1))+1)+'.jpg';

var setup =function()
{
var background_value='url('+image_url1+') left no-repeat';
$('#slide').css('background',background_value).animate({ 
	height:'25em',
	marginBottom:'3em',
},"slow");
console.log(nb_image);


}

setup();


var slide=function()
{
	while(image_url1==image_url2)
	{
		image_url2='image/slideShow/'+(Math.floor(Math.random()*(nb_image-1))+1)+'.jpg';
	}
$("#slide").animate({
	width:0
},"slow")
var background_value2='url('+image_url2+') left no-repeat';
$('#slide2').css('background',background_value2);
$("#slide2").animate({
	width:'100%'
},"slow", reinit);
function reinit(){
$('#slide').css({
	width:'100%',
	background:background_value2
	});

$('#slide2').css({
	width:0
});
var image_url2='image/slideShow/'+(Math.floor(Math.random()*(nb_image-1))+1)+'.jpg';
}
}
window.setInterval(slide,5000);
} )( jQuery );