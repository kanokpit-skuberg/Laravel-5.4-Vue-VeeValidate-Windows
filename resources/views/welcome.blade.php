<html>
    <head>
        <meta charset="utf-8">
        <title>Laravel 5.4 + Vue + Vee</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    </head>
    <body>
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
					<div id="app">
						<simpleform></simpleform>
					</div>
				</div>
			</div>
		</div>
        <script>
            window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
        </script>
		<script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
