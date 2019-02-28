<aside class="span3 mt40">
    <h4 class="heading2"><span>Tin tức</span></h4>
        @foreach($post as $p)
        <li class="list-group-item">
            <div class="media">
                <a class="pull-left" href="post/{{$p->id}}/{{$p->slug}}">
                    <img class="media-object" src="public/upload/post/{{$p->images}}" alt="Image" width="100">
                </a>
                <div class="media-body">
                    <p><a href="post/{{$p->id}}/{{$p->slug}}" title="">{{$p->name}}</a></p>
                </div>
            </div>
        </li>
        @endforeach
    </ul>
</aside>