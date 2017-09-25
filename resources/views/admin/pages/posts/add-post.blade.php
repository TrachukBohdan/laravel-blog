@extends('admin.layouts.main')

@section('content')

    <div class="row">
        <div class="col-12">
            <h3>Add post</h3>

            {!! Form::open(['url' => 'admin/post/store' ]) !!}

                @include('admin.pages.posts.forms.post')

                <div class="form-group">
                    <img style="width: 400px" id="img-preview" src="" />
                </div>

                <button id="update-preview">update preview img</button>

                {!! Form::submit('Create') !!}

            {!! Form::close() !!}

        </div>
    </div>

@endsection

@section('custom-footer-assets')
    <script src="{{asset('views/admin/random-img.js')}}" ></script>
@endsection