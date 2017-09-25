@extends('front.layouts.main')

@section('content')
    <h1 class="my-4">Latest posts</h1>

    @foreach($posts as $post)
        @include('front.parts.post-preview',['$post' => $post])
    @endforeach

    {{$posts->links('vendor.pagination.bootstrap-4')}}
@endsection