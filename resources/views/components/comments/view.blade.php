@props(['comment'])

<div class="comment">
    <div class="flex space-x-4">
        <div class="flex-shrink-0 commentImg">
            <img src="https://i.pravatar.cc/80?u={{ $comment->user_id }}" alt="" width="80" height="80" class="rounded-xl">
        </div>
        <div class="commentp2">
            <p>{{$comment->content}}</p>
            <br>
            <p><strong>{{$comment->author->username}}, {{$comment->created_at->diffForHumans()}}</strong></p>
        </div>
    </div>
</div>
        


