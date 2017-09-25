@extends('admin.layouts.main')

@section('content')

    <div class="row">
        <div class="col-12">
            <h3>Update post</h3>

                {!! Form::model($post, ['url' => 'admin/post/update' ]) !!}
                    {!! Form::hidden('post_id', $post->id) !!}
                    @include('admin.pages.posts.forms.post')

                    <div class="form-group">
                        <img style="width: 400px" id="img-preview" src="{{ $post->img }}" />
                    </div>

                    <button id="update-preview">update preview img</button>

                    {!! Form::submit('Update') !!}

                {!! Form::close() !!}

        </div>
    </div>

@endsection

@section('custom-footer-assets')
    <script src="{{asset('views/admin/random-img.js')}}" ></script>
@endsection