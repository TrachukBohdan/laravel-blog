@extends('admin.layouts.main')

@section('content')

    <div class="row">
        <div class="col-12">
            <h1>Update post</h1>

                {!! Form::open(['url' => 'admin/post/update' ]) !!}

                    @include('admin.pages.posts.forms.post')
                    {!! Form::submit('Update') !!}

                {!! Form::close() !!}

        </div>
    </div>

@endsection