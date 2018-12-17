@extends('layouts.dashboard-tree')
@section('title', 'Friends')
@push('styles')
    @include('dashboard.styles.styles-tree')
@endpush
@section('content')
            <div class="content">
                <div class="tree">
                    <ul>
                        <li>
                            <a href="">{{$user->name}}</a>
                            <ul>
                                @foreach($friends as $friend)
                                    <li>
                                        <a href="{{route('user', ['id' => $friend->id])}}">{{$friend->name}}</a>
                                        @if(count($friend->children))
                                            @include('dashboard.tree.reqursive-tree', ['id' => $user->id, 'childrens'=>$friend->children])
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @endsection
@push('scripts')
    @include('dashboard.scripts.scripts')
@endpush