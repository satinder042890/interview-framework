@extends ('framework/app/base')

@section('content')
	<div class="container main">
		<div class="text-center">
			<h2>Example</h2>
			<p>This is an example single-page application.</p>
		</div>
        
        
		 @include('app/example/form')
       
	</div>
@endsection
