<ul>
    @foreach ($childrens as $children)
                        <li>
                            <a href="{{route('user', ['id' => $children->id])}}">{{$children-> name}}</a>
                                @if(count($children->children))
                                @include('dashboard.tree.reqursive-tree')
                                @endif

                        </li>
    @endforeach
</ul>