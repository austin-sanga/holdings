<h1>See list of borrowers</h1>
<table border="1">
    <tr>
        <td>Loan Id</td>
        <td>Begger</td>
        <td>name</td>
        <td>Loan Type</td>
        <td>Amount</td>
    </tr>

    @foreach ($beg as $beg)
    <tr>
        <td>{{ $beg['id'] }}</td>
        <td>{{ $beg['users_id'] }}</td>
        <td>hh</td>
        <td>{{ $beg['LoanType'] }}</td>
        <td>{{ $beg['amount'] }}</td>
    </tr>   
    @endforeach
</table>
