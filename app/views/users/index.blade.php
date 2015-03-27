@extends('layouts.default')
	
	
@section('content')
	
	<h1>All Users</h1>
	
	<a class="btn btn-primary" href="{{ URL::route('users.create') }}">Create New User</a>
	
	@if ($users->count())
	
		@foreach ($users as $user)
		
			<li>{{ link_to("/users/{$user->username}", $user->username) }}</li>
			
		@endforeach

	@else 
	
		<p>Yikes, No Users!</p>
		
	@endif
	
@stop