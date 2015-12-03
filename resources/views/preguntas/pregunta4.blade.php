@extends('layouts/default')
@section('content')

@section('title')  @parent Hola @stop

	<img src="img/concierto.jpg" id="bg" alt="">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<div id="page-wrap">

		<div class="pregunta4">
			<h1>
				¿A CUÁNTOS CONCIERTOS HAS IDO DE TU CANTANTE FAVORITO?
			</h1>
			<ul class="lista_opciones">
				<li id="4">
					<button class="myButton btnopcion" >
						A MÁS DE 2 CONCIERTOS EN VIVO
					</button>
				</li>
				<li id="3">
					<button class="myButton btnopcion">
						A UN CONCIERTO EN VIVO
					</button>
				</li>	
				<li id="2">
					<button class="myButton btnopcion">
						SOLO LO HA VISTO POR T.V.
					</button>								
				</li>
				<li id="1">
					<button class="myButton btnopcion">
						NUNCA HA VISTO UN CONCIERTO
					</button>								
				</li>				
			</ul>
		</div>
	
	</div>
<script>
$(document).ready(function(){
	$('ul').randomize();

	$('ul.lista_opciones li').click(function(e){

	  var $link = $(e.target);
	  e.preventDefault();

	  if(!$link.data('lockedAt') || +new Date() - $link.data('lockedAt') > 300) {
			envio(this.id);
	  }

	  $link.data('lockedAt', +new Date());

	});

	  function envio(id){
		$.ajax({
		    url : "<?php echo URL::to('pregunta4'); ?>",
		    data : { id : id, '_token': $('input[name=_token]').val() },
		    type : 'POST',
		    dataType : 'json',
		    success : function(json) {
		    	window.location.href = "<?php echo URL::to('pregunta5')?>";
		    },
		    error : function(xhr, status) {
		        console.log('Error');
		    }
		 
		});  	
	  }
});
</script>
@stop
