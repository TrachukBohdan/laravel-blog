<div class="card mb-4">
    @if(!is_null($post->img))
        <img class="card-img-top" src="{{$post->img}}" alt="Card image cap">
    @endif
    
    <div class="card-body">
        <h2 class="card-title">{{$post->title}}</h2>
        <p class="card-text">{{$post->article}}</p>
    </div>
</div>