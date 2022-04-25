<h1>Login</h1>
<form action="/login" method="POST">
    @csrf
    {{-- <input type="hidden" name="id"> --}}
    <input type="email" name="email" placeholder="email"><br><br>
    <input type="password" name="password" placeholder="password"><br><br>
    <button type="submit">Login</button>
</form>