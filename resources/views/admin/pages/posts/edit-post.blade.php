@extends('admin.layouts.main')

@section('content')

    <div class="row">
        <div class="col-12">
            <h3>Update post</h3>

                {!! Form::model($post, ['url' => 'admin/post/update' ]) !!}
                    {!! Form::hidden('post_id', $post->id) !!}
                    @include('admin.pages.posts.forms.post')
                    {!! Form::submit('Update') !!}

                {!! Form::close() !!}

        </div>
    </div>

@endsection