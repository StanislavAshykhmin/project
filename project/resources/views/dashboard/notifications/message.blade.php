@if (session('message'))
    <div class="alert alert-light" style="text-align: center;">
        {{ session('message') }}
    </div>
@endif