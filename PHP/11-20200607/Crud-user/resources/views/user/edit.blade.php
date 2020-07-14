<form action="/users/{{$user->id}}" method="post">
<input type="hidden" name="_method" value="put">
<input type="hidden" name="_token" value="{{csrf_token()}}">

<label for="name">Ten</label>
    <input type="text" name="name" value="{{$user->name}}" id="name">

<label for="email">Email</label>
    <input type="email" name="email" value="{{$user->email}}" id="email">

<label for="password">Password</label>
    <input type="password" name="password" id="password">

<button type="submit">Sua</button>

</form>