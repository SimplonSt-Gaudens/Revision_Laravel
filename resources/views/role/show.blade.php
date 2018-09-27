@extends('layouts.app')

@section('content')
	<div>
		<h1>{{$role->name}}</h1>
		<h3>{{$role->slug}}</h3>
	</div>
	
@endsection