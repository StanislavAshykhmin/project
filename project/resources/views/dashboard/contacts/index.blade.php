@extends('layouts.dashboard')
@section('title', 'Dashboard')
@push('styles')
    @include('dashboard.styles.styles')
    @endpush

@section('content')
    <div class="content">
        <div class="container">
    <div class="row align-items-center text">
        <div class="col-4 col-lg-1 text-left test">
            <p>Photo</p>
        </div>
        <div class="col-8 col-lg-10 text-left test">
            <p>Main info</p>
        </div>
    </div>

    @foreach($users as $user)
        <div class="row align-items-center text">
            <div class="col-2 col-lg-1 text-left test1">
                <img class="img" src="{{asset('storage/'.$user->photo)}}" alt="">
            </div>
            <div class=" col-8 col-lg-9 test1">
                <p class="name"><a href="{{route('user', ['id' => $user->id])}}">{{$user->name}}</a> (@if($user->sex == 'male')<i class="fas fa-mars"></i>@else<i class="fas fa-venus"></i>@endif  age {{$user->age()}})</p>
                <p>{{$user->email}} &nbsp {{$user->phone}} &nbsp {{$user->address}}</p>
            </div>
            <div class="col-2 col-lg-1 text-center test2 enter-update " data-id="{{$user->id}}">
                <a class="edit-button link3 edit-contact" data-url="{{route('ajax-contact', ['id' => $user->id])}}" href="{{--{{route('update', ['id'=>$user->id])}}--}}"><i class="fas fa-user-edit fa-2x"></i></a>
            </div>
            <button class="dagger btn-light" data-toggle="modal" data-target="#delete-{{$user->id}}">&times;</button>
            <div class="modal fade" id="delete-{{$user->id}}" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            {{--<button type="button" class="close" data-dismiss="modal"></button>--}}
                            <h4 class="modal-title">Удалить</h4>
                        </div>
                        <div class="modal-body">
                            <form  action="{{ route('delete', ['id' => $user->id]) }}" method="POST">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button class="btn">Удалить</button>
                                <button type="button" class="btn btn-light m-t-10" data-dismiss="modal" style="margin-left: 33%;">Закрыть</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                        </div>
                    </div>
                </div>
            </div>

        </div>

    @endforeach
    <ul class="pagination" style="border: #1f648b;">
        {{ $users->links() }}
    </ul>
    <div class="button_open_popup">
        <button class="button_add_users enter">
            <span class="open"></span>
        </button>
    </div>
        </div>
    </div>
    @endsection
@push('scripts')
    @include('dashboard.scripts.scripts')
    @endpush
