@extends('layouts.default')

@section('title', $post['title'])

@component('components.alert')
	@slot('type', 'success')

	<h2>Error</h2>
	<p>You have some errors!</p>
@endcomponent

@section('content')

<h1>{{ $post['title'] }}</h1>
<p>{{ $post['content'] }}</p>

@endsection
