@extends('layouts.app')

@section('content')

	<h1>Voilà les Créations de Rôles</h1>
	<form method="post" action="{{route('roleStore')}}">
		{{ csrf_field() }}
		<input type="text" name="name"/>
		<input type="text" name="slug"/>
		<button type=submit>Send</button>
	</form>

@endsection