

<?php $comments = [
    ['ID'=> 1,
    'postID'=> 1,
    'content'=> 'lorem ipsum Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat',
    'username' => 'Bakemono'
],

['ID'=> 2,
    'postID'=> 1,
    'content'=> 'lorem ipsum Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat',
    'username' => 'Sigmund Freud'
],

['ID'=> 3,
    'postID'=> 1,
    'content'=> 'lorem ipsum Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat',
    'username' => 'Harley Quinn'
]

] ?>

<div id="wrapper">
    <div id="page" class="container">
        <div id="content">
            <div class="commentSection">
                <h3>Comments</h3>
            </div>
            @foreach ($comments as $comment)
                <div class="comment">
                    <p>{{$comment['content']}}</p>
                    <p><strong>{{$comment['username']}}</strong></p>

                </div>
            @endforeach
        </div>
	</div>
</div>
        


