<h1>Request for Loan Page</h1>

<fieldset>
    <legend>Request Loan</legend>
    <form action="/LoanRequest" method="post">
        @csrf
        <input type="hidden" name="id">
        <input type="hidden" name="users_id" value="{{ $user_id }}">
        <input type="bigint" name="amount" placeholder="Fill amount requested"><br><br>
        <button type="submit">Submit</button>
    </form>
</fieldset>

<br><br>

<h2>Your Present Requests</h2>

<table border="1">
    <tr>
        <td>Loan Id</td>
        <td>Loan Title</td>
        <td>Amount</td>
    </tr>

    @foreach ($beg as $beg)
    <tr>
        <td>{{ $beg['id'] }}</td>
        <td>{{-- {{ $beg['LoanTite'] }}--}}??</td>
        <td>{{ $beg['amount'] }}</td>
    </tr>   
    @endforeach

</table>