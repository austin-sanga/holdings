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
        <select name="PayType" required>
            <option value="" disabled selected hidden>How will you pay...</option>
            <option value="weekly">weekly</option>
            <option value="every 2 weeks">every 2 weeks</option>
            <option value="every 3 weeks">every 3 weeks</option>
            <option value="within same week">within same week</option>
          </select>  <br><br>
          <input type="bigint" name="IntervalPay" value="{{ $data['IntervalPay'] }}" placeholder="Interval pay"><br><br>
          <select name="GracePeriod" required>
            <option value="" disabled selected hidden>Grace period Options</option>
            <option value="No need">No need</option>
            <option value="1 week">1 week</option>
            <option value="2 week">2 week</option>
            <option value="3 week">3 week</option>
            <option value="4 week">4 week</option>
          </select>  <br><br>
        <button type="submit">Submit Edit</button>
    </form>
</fieldset>