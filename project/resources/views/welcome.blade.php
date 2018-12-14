<ul>
    @foreach ($friend->childs as $friend)
                @if($friend->id != $user->id)
                        <li>
                            <a href="">{{$friend-> name}}</a>
                                @if(count($friend->childs))
                                    {{$res = $friend->id}}
                            {{--{{dd($res)}}--}}
                                @if($friend->id != $res)
                                @include('welcome')
                                @endif

                                @endif

                        </li>
                @endif
    @endforeach
</ul>