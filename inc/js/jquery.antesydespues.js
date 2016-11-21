$(document).ready(function(){

	$('div#contentImg, div#datosProyectos, a#anterior, a#siguiente, a#hsiguiente').hide();

	var i=0;
	var total=img.length;
		
	var labeled = label[i];
	var primed = img[i];

	var imagen = new Image();
	$(imagen).load(function () {
		$('div#contentImg').html(this);
		var ancho = this.width+8;
		var alto= this.height;
		$('div#wrapperFranjaPublicaciones').css({'width' : ancho, 'margin' : '10px auto 0 auto'});
		$('a#hsiguiente').css({'height' : alto});
		$('div#contentImg').fadeIn('slow', function(){
			$('div#datosProyectos').html('<p><span>'+labeled+'</span></p>');
			$('div#datosProyectos').fadeIn('fast');
			$('a#hsiguiente').show();
			$('a#siguiente').fadeIn('fast');
		});		
	}).attr('src', primed);

	$('a#siguiente, a#hsiguiente').click(function(){	
		$('div#contentImg').hide();
		$('div#datosProyectos').hide();
		$('a#anterior').hide();
		$('a#siguiente, a#hsiguiente').hide();
		
		i++;
		if (i>=total) {
			i=0;
		}
		
		var sigImg = img[i];
		var sigLabel = label[i];
		
		var imagen = new Image();
		$(imagen).load(function () {
			$('div#contentImg').html(this);
			var ancho = this.width+8;
			var alto= this.height;
			$('div#wrapperFranjaPublicaciones').css({'width' : ancho, 'margin' : '20px auto 0 auto'});
			$('a#hsiguiente, a#hanterior').css({'height' : alto});
			$('div#contentImg').fadeIn('slow', function(){
				$('div#datosProyectos').html('<p><span>'+sigLabel+'</span></p>');
				$('div#datosProyectos').fadeIn('fast');
				$('a#hsiguiente').show();
				$('a#anterior').fadeIn('fast');
				$('a#siguiente').fadeIn('fast');
			});		
		}).attr('src', sigImg);	
	});
	
	$('a#anterior, a#hanterior').click(function(){
		$('div#contentImg').hide();
		$('div#datosProyectos').hide();
		$('a#anterior').hide();
		$('a#siguiente, a#hsiguiente').hide();
		
		i--;
		if (i<0) {
			i=total-1;
		}
		
		var sigImg = img[i];
		var sigLabel = label[i]
		
		var imagen = new Image();
		$(imagen).load(function () {
			$('div#contentImg').html(this);
			var ancho = this.width+8;
			var alto= this.height;
			$('div#wrapperFranjaPublicaciones').css({'width' : ancho, 'margin' : '20px auto 0 auto'});
			$('a#hsiguiente, a#hanterior').css({'height' : alto});
			$('div#contentImg').fadeIn('slow', function(){
				$('div#datosProyectos').html('<p><span>'+sigLabel+'</span></p>');
				$('div#datosProyectos').fadeIn('fast');
				$('a#hsiguiente').show();
				$('a#anterior').fadeIn('fast');
				$('a#siguiente').fadeIn('fast');
			});		
		}).attr('src', sigImg);	
	
	});

}); /* / document ready */