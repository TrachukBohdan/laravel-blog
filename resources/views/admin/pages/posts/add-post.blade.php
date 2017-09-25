@extends('admin.layouts.main')

@section('content')

    <div class="row">
        <div class="col-12">
            <h3>Add post</h3>

            {!! Form::open(['url' => 'admin/post/store' ]) !!}

                @include('admin.pages.posts.forms.post')
                {!! Form::submit('Create') !!}

            {!! Form::close() !!}

        </div>
    </div>

@endsection