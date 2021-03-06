<h1>Request for Loan Page</h1>

<a href="/logout">Logout</a>&nbsp;&nbsp;
<a href="/dashboard">dash</a>

<fieldset>
    <legend>Request Loan</legend>
    <form action="/LoanRequest" method="post">
        @csrf
        <input type="hidden" name="id">
        <input type="hidden" name="users_id" value="{{ $user_id }}">
        <select name="LoanType" required>
            <option value="" disabled selected hidden>Loan type</option>
            <option value="1">Personal loan</option>
            <option value="2">Mortgage</option>
            <option value="3">Student loan</option>
            <option value="4"> Auto loan</option>
            <option value="5">Payday loan</option>
            <option value="6">Pawn shop loan</option>
            <option value="7">Small business loan</option>
          </select>  <br><br> 
        <input type="bigint" name="amount" placeholder="Fill amount requested"><br><br>
        <select name="PayType" required>
            <option value="" disabled selected hidden>How will you pay...</option>
            <option value="weekly">weekly</option>
            <option value="every 2 weeks">every 2 weeks</option>
            <option value="every 3 weeks">every 3 weeks</option>
            <option value="within same week">within same week</option>
          </select>  <br><br>
          <input type="bigint" name="IntervalPay" placeholder="Interval pay"><br><br>
          <select name="GracePeriod" required>
            <option value="" disabled selected hidden>Grace period Options</option>
            <option value="No need">No need</option>
            <option value="1 week">1 week</option>
            <option value="2 week">2 week</option>
            <option value="3 week">3 week</option>
            <option value="4 week">4 week</option>
          </select>  <br><br>
        <button type="submit">Submit</button>
    </form>
</fieldset>

<br><br>

<h2>Your Present Requests</h2>

<table border="1">
    <tr>
        <td>Loan Id</td>
        <td>Loan Type</td>
        <td>Amount</td>
        <td>Edit</td>
        <td>Delete</td>
        <td>Bids</td>
    </tr>

    @foreach ($beg as $beg)
    <tr>
        <td>{{ $beg['id'] }}</td>
        <td>{{ $beg['LoanType'] }}</td>
        <td>{{ $beg['amount'] }}</td>
        <td><a href="/editrequest/{{ $beg->id }}">edit</a></td>
        <td><a href="/deleterequest/{{ $beg->id }}">delete</a></td>
        <td><a href="/viewbids/{{ $beg->id }}">View</a></td> 
    </tr>   
    @endforeach

</table>


{{--
    ABOUT THE LOAN TYPES
    https://www.lendingtree.com/personal/different-types-of-personal-loans/ --}}