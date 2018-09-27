@extends('layouts.app')

@section('content')

	<h1>Voilà les Rôles</h1>
	@foreach($roles as $role)
		<div>
			<a href="{{route('roleShow', $role->id)}}">{{$role->name}}</a> 
			<a href="{{route("roleEdit", $role->id)}}">edit</a>
			<a href="{{route('roleDestroy', $role->id)}}">destroy</a>
		</div>
	@endforeach
@endsection