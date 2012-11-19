( function( $ ) {
	var display=false;
	var img_top;
	var img_left;
	 

	var exit=function(event){
	if (display==true)
	{
	console.log(display);
	$('#BigDiv').remove();
	display=false;
	console.log('removed');
	}
	event.preventDefault();}

	 var afficher=function(event){
	console.log(display);
	if (display==false)
	{
	var files=$('#logo');
	var files_url=$(files).attr('src');
	var img=event.target;
	var src=$(img).attr('src');
	img_top =$(img);
	position=img_top.position();
	var srcTab =src.split('/');
	var filesTab=files_url.split('/');
	filesTab[7] = 'galery';
	filesTab[8] = srcTab[7] ;

	var img_url = filesTab.join('/');
	filesTab = filesTab.slice(0,7);
	filesTab[7] = 'boutton.png';
	var boutton_url = filesTab.join('/');


	$('body').append('<div id="BigDiv"><a href="#" id="bExit"></a></div>');

	$('#BigDiv').css({
		
	position: 'absolute',
	top :0,
	left:0,
	display: 'block',
	width:'100%',
	height:$(document).height(),
	backgroundColor: 'rgba(0,0,0,0.75)'
	});

	var $img = $('<img id="BigImg" src='+img_url+'></img>').hide().appendTo($('#BigDiv')).load(function(){$img.css({

		position: 'absolute',
		top :position.top,
		left:($(window).width()-$('#BigImg').width())/2

	}).fadeIn("slow").appendTo($('#BigDiv'));
	img_left=$('#BigImg').width();

	});
		
	$('#bExit').css({
		
	position: 'absolute',
	top :(position.top)-50,
	right:(($(window).width()-img_left)/2)-100,
	display: 'block',
	width:45,
	height:45,
	textIndent: -1000,
	background:'url("'+boutton_url+'")'
	
	});

	display=true;
	}
	event.preventDefault();}

var tmp=function()
{
	if(event.keyCode=27)
		exit();
}


$('img').click(afficher);

$('#bExit').click(exit);
$(document).keyup(tmp);


	} )( jQuery );