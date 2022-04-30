<h1>Registration</h1>
<a href="/logout">Logout</a>&nbsp;&nbsp;
<a href="/dashboard">dash</a> <br><br>
<form action="/register" method="POST">
    @csrf
    <input type="hidden" name="id">
    <input type="text" name="name" placeholder="Username" required><br><br>
    <input type="email" name="email" placeholder="email" required><br><br>
    <input type="password" name="password" placeholder="password" required><br><br>
    <select name="role" required>
        <option value="" disabled selected hidden>Choose Role...</option>
        <option value="1">Admin</option>
        <option value="2">Member</option>
      </select>  <br><br>           
    <button type="submit">Register</button>
</form>