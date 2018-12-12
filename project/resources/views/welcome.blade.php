<ul>
    @foreach ($childs as $child)
                        @if($child->id != $userP->id)
        <li>
                {{$child-> name}}
            @if(count($child->childs))
                @include('welcome',['childs' => $child->childs])
                        @endif

            @endif

        </li>
                        {{--@endif--}}
    @endforeach
</ul>