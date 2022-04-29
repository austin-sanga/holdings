<h1>See list of borrowers</h1>
<a href="/logout">Logout</a>&nbsp;&nbsp;
<a href="/dashboard">dash</a>
<table border="1">
    <tr>
        <td>Loan Id</td>
        <td>Begger</td>
        <td>Loan Type</td>
        <td>Amount</td>
    </tr>

    @foreach ($beg as $beg)
    <tr>
        <td>{{ $beg['id'] }}</td>
        <td>{{ $beg['users_id'] }}</td>
        <td>{{ $beg['LoanType'] }}</td>
        <td>{{ $beg['amount'] }}</td>
    </tr>   
    @endforeach

</table>