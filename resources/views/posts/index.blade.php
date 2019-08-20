@extends('layouts.default')

@section('title', 'Home')

@section('content')
	@if (isset($title))
	{!! $title !!}
	@else
	<h2>My Blog</h2>
	@endif

	{{ $test ?? '' }}

	@include('header', ['title' => 'Blog title'])

	@forelse($posts as $post)
	<div>
		{{-- Comment --}}
		<h2> <a href="{{ route('posts.view', [ 'id' => $post['id'] ]) }}">{{ $post['title'] }}</a></h2>
		<p>{{ $post['content'] }}</p>

	</div>
	@empty
	<p>No posts!</p>
	@endforelse

@endsection

@section('sidebar')
	@parent

	Sidebar
@endsection