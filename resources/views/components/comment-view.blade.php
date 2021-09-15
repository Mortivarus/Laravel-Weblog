<div class="comment">
    <div class="image-left roundimg">
        <img src="https://i.pravatar.cc/80?u={{ $comment->user_id }}" alt="" width="80" height="80">
    </div>
    <p>{{$comment->content}}</p>
    <p><strong>{{$comment->author->username}}, {{$comment->created_at->diffForHumans()}}</strong></p>
</div>
        


