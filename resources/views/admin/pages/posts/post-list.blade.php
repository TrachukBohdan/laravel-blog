@extends('admin.layouts.main')

@section('content')

    <div class="row">
        <div class="col-12">
            <h3>List of posts</h3>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>User</th>
                            <th>Delete</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach($posts as $post)

                            <tr>
                                <td>{{$post->id}}</td>
                                <td><a href="{{url('/admin/post/edit', ['postId' => $post->id])}}">{{$post->title}}</a></td>
                                <td>{{$post->user->email}}</td>
                                <td>
                                    <a class="btn-sm btn-danger" href="{{url('/admin/post/delete', ['postId' => $post->id])}}">Delete</a>
                                </td>
                            </tr>

                        @endforeach

                    </tbody>
                </table>

                {{$posts->links('vendor.pagination.bootstrap-4')}}

            </div>

        </div>
    </div>

@endsection