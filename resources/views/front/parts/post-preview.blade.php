<div class="card mb-4">
    <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">

    <div class="card-body">
        <h2 class="card-title">{{$post->title}}</h2>
        <p class="card-text">{{str_limit($post->article, 100)}}</p>
        <a href="{{url('post', ['postId' => $post->id])}}" class="btn btn-primary">Read More &rarr;</a>
    </div>

</div>