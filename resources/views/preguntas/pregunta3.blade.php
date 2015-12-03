@extends('layouts/default')
@section('content')

@section('title')  @parent Hola @stop

	<img src="img/amigos.jpg" id="bg" alt="">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">	
	<div id="page-wrap">

		<div class="pregunta3">
			<h1>
				¿CUÁNTO TIEMPO COMPARTES CON TUS AMIGOS?
			</h1>
			<ul class="lista_opciones">
				<li id="4">
					<button class="myButton btnopcion" >
						MÁS DE 3 DÍAS A LA SEMANA
					</button>
				</li>
				<li id="3">
					<button class="myButton btnopcion">
						ALGÚN DÍA DEL FIN DE SEMANA
					</button>
				</li>	
				<li id="2">
					<button class="myButton btnopcion">
						CADA 15 DÍAS
					</button>								
				</li>
				<li id="1">
					<button class="myButton btnopcion">
						MENOS DE UNA VEZ AL MES
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
		    url : "<?php echo URL::to('pregunta3'); ?>",
		    data : { id : id, '_token': $('input[name=_token]').val() },
		    type : 'POST',
		    dataType : 'json',
		    success : function(json) {
		    	window.location.href = "<?php echo URL::to('pregunta4')?>";
		    },
		    error : function(xhr, status) {
		        console.log('Error');
		    }
		 
		});  	
	  }

});
</script>
@stop
