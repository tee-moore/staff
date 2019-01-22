<ul>
    @foreach($childs as $child)

        @if(count($child->childs))
            <li class="closed">
        @else
            <li>
        @endif

            <div class="worker">
                <div class="worker-avatar">
                    <img src="https://randomuser.me/api/portraits/{{$child->avatar}}.jpg" class="avatar" alt="">
                </div>
                    <div class="worker-info">
                    <h6 class="worker-name">{{ $child->first_name ." ".$child->last_name}}</h6>
                    <span class="position">{{ $child->position->name}}</span>
                </div>
            </div>

            @if(count($child->childs))
                @include('workerTemplate',['childs' => $child->childs])
            @endif
        </li>
    @endforeach
</ul>