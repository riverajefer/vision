@extends('layouts/default')
@section('content')
<div id="fb-root"></div>

<meta property="og:url"           content="http://www.your-domain.com/your-page.html" />
<meta property="og:type"          content="website" />
<meta property="og:title"         content="Your Website Title" />
<meta property="og:description"   content="Your description" />
<meta property="og:image"         content="http://www.your-domain.com/path/image.jpg" />


<script>
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.5&appId=1557364301219533";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>


@section('title')  @parent ERES EXTREME-COOL @stop

	<img src="{{asset('img/extreme.jpg')}}" id="bg" alt="">
	
	<div id="page-wrap">
	<div class="resultado">
		<div class="cool">
			<h1>ERES EXTREME-COOL </h1>
			<p>
			Eres de los más play y populares de tu grupo de amigos. Siempre tienes los mejores planes y todos quieren  parchar contigo. <b>Esto te hace parte de una minoría privilegiada</b>, un perfil que te permite darle una oportunidad a la mayoría de los colombianos para que tengan un futuro con posibilidades
			</p>
		</div>	
		<h2>¿SABÍAS QUE EL 71% DE LOS COLOMBIANOS NO SUPERA LA LÍNEA DE POBREZA?</h2>		

		<div align="center" class="img-vision">
			<a href="#" >
				<img src="{{asset('img/vision.png')}}" alt="Visión Mundial" class="img-responsive">
			</a>
<div class="fb-share-button" data-href="http://localhost/appvision/public/perfil/autentico" data-layout="button_count"></div>			
		</div>
	</div>

	
	</div>
@stop
