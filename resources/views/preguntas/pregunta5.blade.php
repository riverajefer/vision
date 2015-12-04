@extends('layouts/default')
@section('content')

@section('title')  @parent CUANDO HACES UN REGALO, EL PRESUPUESTO: @stop

	<img src="img/regalo.jpg" id="bg" alt="">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<div id="page-wrap">

		<div class="pregunta5">
			<h1>
				CUANDO HACES UN REGALO, EL PRESUPUESTO:
			</h1>
			<ul class="lista_opciones">
				<li id="4">
					<button class="myButton btnopcion" >
						ES LO MÁS IMPORTANTE
					</button>
				</li>
				<li id="3">
					<button class="myButton btnopcion">
						ES UN POCO IMPORTANTE
					</button>
				</li>	
				<li id="2">
					<button class="myButton btnopcion">
						ES MENOS IMPORTANTE QUE LA INTENCIÓN 
					</button>								
				</li>
				<li id="1">
					<button class="myButton btnopcion">
						ES INSIGNIFICANTE
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
		    url : "<?php echo route('pregunta5'); ?>",
		    data : { id : id, '_token': $('input[name=_token]').val() },
		    type : 'POST',
		    dataType : 'json',
		    success : function(json) {
		    	window.location.href = "<?php echo route('calcula')?>";
		    },
		    error : function(xhr, status) {
		        console.log('Error');
		    }
		 
		});  	
	  }
});
</script>
@stop
