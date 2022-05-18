<h1>See list of borrowers</h1>
<a href="/logout">Logout</a>&nbsp;&nbsp;
<a href="/dashboard">dash</a><br><br>

<table border="1">
    <tr>
        <td>Loan Id</td>
        <td>Begger</td>
        <td>Loan Type</td>
        <td>Amount</td>
        <td>Interested</td>
    </tr>

    @foreach ($beg as $beg)
    <tr>
        <td>{{ $beg['id'] }}</td>
        <td>{{ $beg['users_id'] }}</td>
        <td>{{ $beg['LoanType'] }}</td>
        <td>{{ $beg['amount'] }}</td>
        <td><a href="/bid/{{ $beg->id }}">bid</a></td>
    </tr>   
    @endforeach

</table>
<br><br>

<h2>Deals Interested in</h2>
{{-- <table border="1">
    <tr>
        <td>Loan Id</td>
        <td>Begger</td>
        <td>Loan Type</td>
        <td>Amount</td>
        <td>View More</td>
        <td>status</td>
    </tr>

    @foreach ($userbids as $userbids)
    <tr>
        <td>{{ $userbids['id'] }}</td>
        <td>..</td>
        <td>{{ $userbids['LoanType'] }}</td>
        <td>{{ $userbids['amount'] }}</td>
        <td>..</td>
        <td>..</td>
    </tr>   
    @endforeach 

</table> --}}
