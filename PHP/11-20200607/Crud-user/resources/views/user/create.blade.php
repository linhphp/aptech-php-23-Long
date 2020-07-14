<form action="/users" method="post">
<input type="hidden" name="_token" value="{{csrf_token()}}">

<label for="name">Ten</label>
    <input type="text" name="name" id="name">

<label for="email">Email</label>
    <input type="email" name="email" id="email">

<label for="password">Password</label>
    <input type="password" name="password" id="password">

<button type="submit">Tao</button>
<br>
<a href ="/users">Quay ve trang chu </a>

</form>