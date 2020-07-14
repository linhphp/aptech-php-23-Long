@foreach($users as $user)

    <a href="users/{{$user->id}}">{{$user->name}}</a>.<br>
    <form action="users/{{$user->id}}" method="post">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <button type="submit">XOA</button>

    </form>

@endforeach