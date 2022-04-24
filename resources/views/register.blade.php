<h1>Registration</h1>
<form action="/register" method="POST">
    @csrf
    <input type="hidden" name="id">
    <input type="text" name="name" placeholder="Username"><br><br>
    <input type="email" name="email" placeholder="email"><br><br>
    <input type="password" name="password" placeholder="password"><br><br>
    <button type="submit">Register</button>
</form>