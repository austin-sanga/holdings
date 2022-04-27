<h1>See list of borrowers</h1>
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