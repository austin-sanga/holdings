<h1>Welcome To Bids Page</h1>

<table border="1">
    <tr>
        <td>Bid Id</td>
        <td>Interest</td>
        <td>Pay Type</td>
        <td>Interval Pay</td>
        <td>Grace Period</td>
        <td>Decision</td>
    </tr>

    @foreach ($viewbid as $viewbid)
    <tr>
        <td>{{ $viewbid['id'] }}</td>
        <td>{{ $viewbid['interest'] }}</td>
        <td>{{ $viewbid['PayType'] }}</td>
        <td>{{ $viewbid['IntervalPay'] }}</td>
        <td>{{ $viewbid['GracePeriod'] }}</td>
        <td><a href="/acceptbid/{{ $viewbid['id'] }}">Accept</a></td>
        <td><a href="/counterbid">Counter</a></td> {{-- bado routing haijaanza --}}
    </tr>
@endforeach

</table>
