{{ HTML::style('../bootstrap/dist/css/bootstrap.min.css') }}
{{ HTML::script('../js/jquery.js') }}
{{ HTML::script('../js/scripts.js') }}
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">

<div class="container">
	<div class="jumbotron">
		<h1>Welcome to Endless Cosby</h1>
		<h2>No site has more Cosby</h2>
	</div>

	@yield('content')

</div>