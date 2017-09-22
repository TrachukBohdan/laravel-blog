@extends('admin.layouts.main')

@section('content')

    <div class="row">
        <div class="col-12">
            <h1>List of posts</h1>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>User</th>
                            <th>Created</th>
                            <th>Updated</th>
                            <th>Delete</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach($posts as $post)

                            <tr>
                                <td>{{$post->id}}</td>
                                <td></td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                            </tr>

                        @endforeach

                    </tbody>
                </table>
            </div>

        </div>
    </div>

@endsection