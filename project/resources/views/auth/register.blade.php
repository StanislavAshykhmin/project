<ul>
    @foreach ($bchilds as $bchild)
        @if($bchild->id != $userP->id)
            <li>
                {{$bchild-> name}}
                @if(count($bchild->bchilds))
                    @include('auth.register',['bchilds' => $bchild->bchilds])
                @endif

                @endif

            </li>
            {{--@endif--}}
            @endforeach
</ul>