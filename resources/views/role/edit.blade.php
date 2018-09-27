@extends('layouts.app')

@section('content')

	<h1>Voilà les Éditions Rôles</h1>
		<form method="post" action="{{route('roleUpdate', $role->id)}}">
		{{ csrf_field() }}
		<input type="text" name="name" value="{{$role->name}}" />
		<input type="text" name="slug" value="{{$role->slug}}"/>
		<button type=submit>Send</button>
	</form>

@endsection