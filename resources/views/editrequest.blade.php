<a href="/logout">Logout</a> &nbsp;&nbsp;
<a href="/beg">Go Back</a>

<fieldset>
    <legend>Edit Request Loan</legend>
    <form action="/update" method="post">
        @csrf
        <input type="hidden" name="id" value='{{ $data['id'] }}'>
        <input type="hidden" name="users_id" value="{{ $user_id }}">
        <select name="LoanType" required >
            <option value="" disabled selected hidden>Select loan type again</option>
            <option value="1">Personal loan</option>
            <option value="2">Mortgage</option>
            <option value="3">Student loan</option>
            <option value="4"> Auto loan</option>
            <option value="5">Payday loan</option>
            <option value="6">Pawn shop loan</option>
            <option value="7">Small business loan</option>
          </select>  <br><br> 
        <input type="bigint" name="amount" value="{{ $data['amount'] }}" placeholder="Fill amount requested"><br><br>
        <button type="submit">Submit Edit</button>
    </form>
</fieldset>