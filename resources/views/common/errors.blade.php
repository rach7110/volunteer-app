<!-- resources/views/errors.blade.php -->

@if (count($errors) > 0 )
	<!-- FORM ERROR LIST -->
	<div>
		<strong>Whoops! Womething went wrong!</strong>

		<br><br>

		<ul>
			@foreach ($errors->all() as $error )
				<li> {{ $error }} </li>
			@endforeach
		</ul>
	</div>
@endif
