{{$user}}
@if(auth()->user()->id == $user->id)
    <form action="{{'/logout'}}" method="POST">
        @csrf
        <input type="submit">
    </form>
@endif
