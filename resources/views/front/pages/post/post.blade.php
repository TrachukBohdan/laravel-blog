@extends('front.layouts.main')

@section('content')
    <br/>
    @include('front.parts.blog-post', ['post' => $post])
@endsection