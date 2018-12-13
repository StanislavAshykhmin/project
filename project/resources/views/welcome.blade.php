<ul>
    @foreach ($childs as $child)
                        @if($child->id != $userP->id)
        <li>
                {{$child-> name}}
            @if(count($child->childs))
                    @if($child->name != $child->name)
                @include('welcome',['childs' => $child->childs])
                        @endif

            @endif

        </li>
                        @endif
    @endforeach
</ul>